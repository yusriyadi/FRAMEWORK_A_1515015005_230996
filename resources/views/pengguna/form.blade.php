<div class="form-group">
	<label class="col-sm-2 control-label ">Username</label>
	<div class="col-sm-10">
		{!! From::text('username',null,['class'=>'form-control','placeholder'=>"username"]) !!}
	</div>
</div>
<div>
	<label class="col-sm-2 control-label">Password</label>
	<div class="col-sm-10">
		{!! form::password('password'),['class'=>'form-control','placeholder'=>"Password"]!!}
	</div>
</div>