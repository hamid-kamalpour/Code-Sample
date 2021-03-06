@extends('backend/layouts/default')

{{-- Page title --}}
@section('title')
Create Location ::
@parent
@stop

{{-- Page content --}}
@section('content')

<div class="page-header">
	<h3>
		Create Location

		<div class="pull-right">
			<a href="{{ route('backend.locations.index') }}" class="btn btn-small btn-inverse"><i class="icon-circle-arrow-left icon-white"></i> Back</a>
		</div>
	</h3>
</div>

<!-- Tabs -->
<ul class="nav nav-tabs">
	<li class="active"><a href="#tab-general" data-toggle="tab">Details</a></li>
	<li><a href="#tab-directions" data-toggle="tab">Directions</a></li>
</ul>

{{ Form::open(array('route' => 'backend.locations.store', 'class'=>'form-horizontal')) }}

	<!-- CSRF Token -->
	{{ Form::token() }}

	<!-- Tabs Content -->
	<div class="tab-content">
		<!-- General tab -->
		<div class="tab-pane active" id="tab-general">

			<div class="control-group {{ $errors->has('parent_id') ? 'error' : '' }}">
				<label class="control-label" for="title">Parend Id: </label>
				<div class="controls">
					{{ Form::select('parent_id', $locations, Input::old('parent_id'), array('class'=>'input-xlarge')) }}				
					{{ $errors->first('parent_id', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<div class="control-group {{ $errors->has('name') ? 'error' : '' }}">
				<label class="control-label" for="title">Name: </label>
				<div class="controls">
					{{ Form::text('name', Input::old('name'), array('class'=>'input-xlarge')) }}
					{{ $errors->first('name', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<div class="control-group {{ $errors->has('short_name') ? 'error' : '' }}">
				<label class="control-label" for="title">Short Name: </label>
				<div class="controls">
					{{ Form::text('short_name', Input::old('short_name'), array('class'=>'input-medium')) }}
					{{ $errors->first('short_name', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<div class="control-group {{ $errors->has('address') ? 'error' : '' }}">
				<label class="control-label" for="title">address: </label>
				<div class="controls">
					{{ Form::text('address', Input::old('address'), array('class'=>'input-xlarge')) }}
					{{ $errors->first('address', '<span class="help-inline">:message</span>') }}
				</div>
			</div>
			
			<div class="control-group {{ $errors->has('city') ? 'error' : '' }}">
				<label class="control-label" for="title">City: </label>
				<div class="controls">
					{{ Form::text('city', Input::old('city'), array('class'=>'input-medium')) }}
					{{ $errors->first('city', '<span class="help-inline">:message</span>') }}
				</div>
			</div>
			
			<div class="control-group {{ $errors->has('state') ? 'error' : '' }}">
				<label class="control-label" for="title">State: </label>
				<div class="controls">
					{{ Form::text('state', Input::old('state'), array('class'=>'input-small')) }}
					{{ $errors->first('state', '<span class="help-inline">:message</span>') }}
				</div>
			</div>
			
			<div class="control-group {{ $errors->has('post_code') ? 'error' : '' }}">
				<label class="control-label" for="title">Post Code: </label>
				<div class="controls">
					{{ Form::text('post_code', Input::old('post_code'), array('class'=>'input-small')) }}
					{{ $errors->first('post_code', '<span class="help-inline">:message</span>') }}
				</div>
			</div>
			
			<div class="control-group {{ $errors->has('email') ? 'error' : '' }}">
				<label class="control-label" for="title">Email: </label>
				<div class="controls">
					{{ Form::text('email', Input::old('email'), array('class'=>'input-xlarge')) }}
					{{ $errors->first('email', '<span class="help-inline">:message</span>') }}
				</div>
			</div>
			
			<div class="control-group {{ $errors->has('mobile') ? 'error' : '' }}">
				<label class="control-label" for="title">Mobile: </label>
				<div class="controls">
					{{ Form::text('mobile', Input::old('mobile'), array('class'=>'input-large')) }}
					{{ $errors->first('mobile', '<span class="help-inline">:message</span>') }}
				</div>
			</div>
			
			<div class="control-group {{ $errors->has('phone') ? 'error' : '' }}">
				<label class="control-label" for="phone">Phone: </label>
				<div class="controls">
					{{ Form::text('phone', Input::old('phone'), array('class'=>'input-large')) }}
					{{ $errors->first('phone', '<span class="help-inline">:message</span>') }}
				</div>
			</div>
			
			<div class="control-group {{ $errors->has('fax') ? 'error' : '' }}">
				<label class="control-label" for="title">Fax: </label>
				<div class="controls">
					{{ Form::text('fax', Input::old('fax'), array('class'=>'input-large')) }}
					{{ $errors->first('fax', '<span class="help-inline">:message</span>') }}
				</div>
			</div>
			
			<div class="control-group {{ $errors->has('myob_job_code') ? 'error' : '' }}">
				<label class="control-label" for="title">Myob Job Code: </label>
				<div class="controls">
					{{ Form::text('myob_job_code', Input::old('myob_job_code'), array('class'=>'input-large')) }}
					{{ $errors->first('myob_job_code', '<span class="help-inline">:message</span>') }}
				</div>
			</div>
			
			<div class="control-group {{ $errors->has('active') ? 'error' : '' }}">
				<label class="control-label" for="title">Active: </label>
				<div class="controls">
					<input type="hidden" name="active" value="0" /><input type="checkbox" name="active" value="1" {{ Input::old('active') == '1' ? 'checked' : '' }} />
					{{ $errors->first('active', '<span class="help-inline">:message</span>') }}
				</div>
			</div>
			
		</div>
		<!-- Directions tab -->
		<div class="tab-pane" id="tab-directions">

			<div class="control-group {{ $errors->has('google_maps_link') ? 'error' : '' }}">
				<label class="control-label" for="title">Google_maps Link: </label>
				<div class="controls">
					{{ Form::textarea('google_maps_link', '', array('class'=>'input-xxlarge')) }}
					{{ $errors->first('google_maps_link', '<span class="help-inline">:message</span>') }}
				</div>
			</div>
			
			<div class="control-group {{ $errors->has('directions') ? 'error' : '' }}">
				<label class="control-label" for="title">Directions: </label>
				<div class="controls">
					{{ Form::textarea('directions', '', array('class'=>'input-xxlarge')) }}
					{{ $errors->first('directions', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

		</div>
	</div>
	
	<hr />
	
	<!-- Form Actions -->
	<div class="footer">
		<div class="control-group">
			<div class="controls">
				{{ Form::submit('Create Location', array('class' => 'btn btn-small btn-info')) }}
				{{ Form::reset('Reset', array('class' => 'btn btn-small btn-danger')) }}
			</div>
		</div>
	</div>

{{ Form::close() }}

@stop


