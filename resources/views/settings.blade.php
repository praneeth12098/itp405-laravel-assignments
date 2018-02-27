@extends('main-layout') 
@section('title', 'Settings') 
@section('content')
<h1>Settings</h1>
</br></br>
<form method="post" action="settings">
	{{csrf_field()}}
  	<div class="form-group">
      	<input type="checkbox" class="form-check-input" id="checkbox1" <?php if ($status->value == '1'){?> checked="checked" <?php } ?>>
      	<label class="form-check-label" for="checkbox1">Click to toggle maintenance mode</label>
  	</div>
  	</br>
  	</br>
  	<button type="submit" class="btn btn-primary">Save Settings</button>
</form>
@endsection