#!/bin/bash
#trap '' INT

led_name_list=()
need_break_program_monitor=0

# task2
led_init(){
	#cd /sys/class/leds
	led_ind=0
	for tmp_led in `ls -1 /sys/class/leds`
	do
		sudo chmod 666 /sys/class/leds/$tmp_led/trigger
		sudo chmod 666 /sys/class/leds/$tmp_led/brightness
		echo none > /sys/class/leds/$tmp_led/trigger
		led_name_list[led_ind]=$tmp_led
		led_ind=`expr $led_ind + 1`
	done
	echo "init done"
}

led_selecter(){
	echo "Welcome to Led_Konfigurator!"
	echo "============================"
	echo "Please select an led to configure:"
	led_ind=0
	for tmp_led in ${led_name_list[@]}
	do
		led_ind=`expr $led_ind + 1`
		echo "$led_ind. $tmp_led"
	done
	led_name_list[led_ind]="Quit"
	led_ind=`expr $led_ind + 1`
	echo "$led_ind. Quit"
	echo "Please enter a number (1-$led_ind) for the led to configure or quit:"
	read input_led_ind
	return `expr $input_led_ind - 1`
}

# task3
led_controller(){
	echo "[$1]"
	echo "=========="
	echo "What would you like to do with this led?"
	echo "1) turn on"
	echo "2) turn off"
	echo "3) associate with a system event"
	echo "4) associate with the performance of a process"
	echo "5) stop association with a process’ performance"
	echo "6) quit to main menu"
	echo "Please enter a number (1-6) for your choice:"
	read input_option
	return $input_option
}

# task4
led_turn_on(){
	echo 1 > /sys/class/leds/$1/brightness
	#echo "on : $1"
}

led_turn_off(){
	echo 0 > /sys/class/leds/$1/brightness
	#echo "off : $1"
}

# task5
sys_event_associator(){
	sys_events_str=$(cat /sys/class/leds/$led_selected/trigger)
	sys_events_str=${sys_events_str/\[/}
	sys_events_str=${sys_events_str/]/}" Quit"
	sys_events_list=($sys_events_str)
	event_ind=0
	for tmp_event in ${sys_events_list[@]}
	do
		event_ind=`expr $event_ind + 1`	
		echo "$event_ind) $tmp_event"
	done
	echo "Please select an option (1-$event_ind):"
	read input_event_ind
	event_selected=${sys_events_list[`expr $input_event_ind - 1`]}
	if [ "$event_selected" == "Quit" ]
	then
		main
	else
		echo $event_selected > /sys/class/leds/$1/trigger
		echo $event_selected
	fi
}

# task6
process_monitor()
{
	echo "Do you wish to"
	echo "1) monitor memory"
	echo "2) monitor cpu?"
	printf "[enter memory or cpu]: "
	read memory_or_cpu
	if [ "$memory_or_cpu" == "memory" -o "$memory_or_cpu" == "cpu" ]
	then
		process_performance_unassociator
		bash process_sub.sh $1 $2 $memory_or_cpu &
	else
		echo "This operation has failed: Invalid Input"
	fi
	#echo "process_monitor_done"
}

process_performance_associator(){
	echo "Associate LED with the performance of a process"
	echo "------------------------------------------------"
	echo "Please enter the name of the program to monitor(partial names are ok):"
	read program_name
	program_matched_str=`ps aux | awk '{print $11}' | grep $program_name`
	program_matched_list=($program_matched_str)
	program_matched_list_len=${#program_matched_list[@]}
	echo "matched_len : ${#program_matched_list[@]}"
	if [ $program_matched_list_len == 0 ]
	then
		echo "This operation has failed: Invalid Program Name"
		process_performance_associator $1
	elif [ $program_matched_list_len == 1 ]
	then
		process_monitor $1 ${program_matched_list[0]}
	else
		echo "Name Conflict"
		echo "-------------"
		echo "I have detected a name conflict. Do you want to monitor:"
		process_name_ind=0
		for tmp_process_name in ${program_matched_list[@]}
		do
			process_name_ind=`expr $process_name_ind + 1`	
			echo "$process_name_ind) $tmp_process_name"
		done
		echo "Please select an option (1-$process_name_ind):"
		read input_process_name_ind
		process_name_selected=${program_matched_list[`expr $input_process_name_ind - 1`]}
		process_monitor $1 $process_name_selected
	fi
	led_controller $1
	option_checked=$?
	if [ $option_checked == 6 ]
	then
		main
	else
		if [ $option_checked == 1 ]
		then
			led_turn_on $led_selected
		elif [ $option_checked == 2 ]
		then
			led_turn_off $led_selected
		elif [ $option_checked == 3 ]
		then
			sys_event_associator $led_selected
		elif [ $option_checked == 4 ]
		then
			process_performance_associator $led_selected
		elif [ $option_checked == 5 ]
		then
			process_performance_unassociator
		else
			echo $option_checked
		fi
	fi
}

# task7
process_performance_unassociator(){
	# kill other minitor
	pid=`ps -ef | grep process_sub | grep -v grep | awk '{print $2}'`
	if [ "$pid" != "" ]
	then
		kill -9 $pid
	fi
	#work_path=$(dirname $(readlink -f $0))
	#echo $work_path
	#bash $work_path/process_sub.sh $1 $2 &
}

main(){
	led_init
	led_selecter
	led_selected=${led_name_list[$?]}
	if [ "$led_selected" == "Quit" ]
	then
		echo "Good bye~"
	else
		led_controller $led_selected
		option_checked=$?
		if [ $option_checked == 6 ]
		then
			main
		else
			if [ $option_checked == 1 ]
			then
				led_turn_on $led_selected
			elif [ $option_checked == 2 ]
			then
				led_turn_off $led_selected
			elif [ $option_checked == 3 ]
			then
				sys_event_associator $led_selected
			elif [ $option_checked == 4 ]
			then
				process_performance_associator $led_selected
			elif [ $option_checked == 5 ]
			then
				process_performance_unassociator
			else
				echo $option_checked
			fi
		fi
	fi
}

main

: '
for ele in ${led_name_list[@]}
do
	echo $ele
done


echo "7 ${led_name_list[7]}"
echo "8 ${led_name_list[8]}"
echo "9 ${led_name_list[9]}"
'
