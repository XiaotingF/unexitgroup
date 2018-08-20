@extends('layouts.app')


@section('content')

		<div id="top-title">
        <h1>Tell us about yourself!</h1>
   		</div>
        <!--form-->
        <div class="container">

            <div id= pref_form>

            

        	<form method="post" action="" name="preferenceForm">

        		<div class="form-group">
        			<label>Are you religious</label>
        			<select class="form-control" required>
        				<option hidden ></option>
        				<option value="yes">Yes</option>
        				<option value="no">No</option>
        			</select>

        			<div class="form-group">
        			<label>Do you smoke?</label>
        			<select class="form-control" required>
        				<option hidden ></option>
        				<option value="often">Often</option>
        				<option value="sometimes">Sometimes</option>
        				<option value="seldom">Seldom</option>
        				<option value="never">Never</option>
        			</select>

        			<div class="form-group">
        			<label>Do you drink alcohol?</label>
        			<select class="form-control" required>
        				<option hidden ></option>
        				<option value="often">Often</option>
        				<option value="sometimes">Sometimes</option>
        				<option value="seldom">Seldom</option>
        				<option value="never">Never</option>
        			</select>

        			<div class="form-group">
        			<label>Distance</label>
        			<select class="form-control" required>
        				<option hidden ></option>
        				<option value="yes">Yes</option>
        				<option value="no">No</option>
        			</select>

        			<div class="form-group">
        			<label>City?</label>
        			<input type="text" name="city" class="form-control" required>

        			</div>

        			<button type = "submit" class="btn btn-primary btn-block">Submit</button>
        		





        	</form>

            </div>
        	

        </div>
@endsection
