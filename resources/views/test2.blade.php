@extends('layouts.master')

@include('layouts.common.title', ['title' => 'Test Title', 'link' => 'Test Link'])

@section('content')
	<select multiple="true" class="form-control">
		@php
			$traverse = function ($roles) use (&$traverse) {
				foreach ($roles as $role) {
					echo "<option>{$role->text}</option>";
			    	if(count($role->children))
			        {
			        	$traverse($role->children);
					}
				}
			};
			$traverse($roles);
	    @endphp
	</select>
@stop