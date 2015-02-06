@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in!
				</div>

                <a href="<?php echo URL::to('/topdf'); ?>" class="btn btn-primary" type="submit">
                    Print PDF
                </a>
			</div>
		</div>
	</div>
</div>
@endsection
