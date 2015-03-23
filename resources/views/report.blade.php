@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Report</div>

				<div class="panel-body">
					<form class="form-horizontal" role="form" method="POST" action="/reporting">
						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
	                    <div class="form-group">
	                        <div class="col-sm-offset-3 col-sm-5">
	                            <button type="submit" class="btn btn-primary">Generate</button>
	                        </div>
	                    </div>
                	</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
