<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    .well
      {
         padding: 35px;
         padding-left: 30px;
         box-shadow: 0 0 10px #666666;
         margin: 4% auto 0;
         width: 450px;
      }

      body
      {
      	background-color:  #dedede;
      }

      .input-group-addon
      {
      	background-color: #ffde6c;
      	color: #d17d00;
      }
</style>
<form action="{{url('/signup')}}" name="myForm" method="post">
@csrf

	<div class="container-fluid">
		<div class="row">
			<div class="well center-block">
				<div class="well-header">
					<h3 class="text-center text-success"> Register Here! </h3>
					<hr>
				</div>

				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-user"></i>
								</div>
								<label for="Role" class="text-black"> <span class="text-danger" ></span></label>
                 <select class="form-control" id="c_fname" name="role" >
                      <option>select role </option>
                      @if(!empty($data))
                    @foreach($data as $c)     
                    <option value="{{$c->id}}">{{$c->role}}</option>
               
              @endforeach
              @endif
                 </select>
								
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-user"></i>
								</div>
								<input type="text" placeholder="First Name" name="name" class="form-control">
								
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-user"></i>
								</div>
								<input type="text" placeholder="Last Name" name="lastname" class="form-control">
							</div>
						</div>
					</div>
				</div>

				<!-- <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-lock"></i>
								</div>
								<input type="password" minlength="8" maxlength="20" placeholder="Password" name="txtpass" class="form-control">
							</div>
						</div>
					</div>
				</div> -->

                <div class="row">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-envelope"></i>
								</div>
								<input type="email" class="form-control" name="email" placeholder="E-Mail">
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-phone"></i>
								</div>
								<input type="number" minlength="10" maxlength="12" class="form-control" name="contact" placeholder="Mobile No.">
							</div>
						</div>
					</div>
				</div>

			
				
				
				<div class="row widget">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<button class="btn btn-warning btn-block"> Submit </button>
					</div>
                    <div class="col-md-12 col-xs-12 col-sm-12">
                    <a href="login" name="submit" > Already Register then login Here</a>
					</div>
				</div>
			</div>
		</div>
	</div>


</form>
