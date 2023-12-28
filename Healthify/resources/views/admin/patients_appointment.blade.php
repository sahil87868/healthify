<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="{{url('admin/css/bootstrap.css')}}"rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{url('admin/css/font-awesome.css')}}"rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="{{url('admin/css/basic.css')}}"rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="{{url('admin/css/custom.css')}}"rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
    @extends('admin.layout.structure')

@section('main_content')

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Patients Appointment</h1>
                        
                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Contacts
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Patient Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Appointment Date</th>
											<th>Message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($data_patients))
                                            @foreach ($data_patients as $d) 
                                                 <tr>
                                            <td>{{$d->id}}</td>
                                            <td>{{$d->patientName}}</td>
                                            <td>{{$d->email}}</td>
                                            
                                            <td>{{$d->phone}}</td>
                                            <td> {{$d->appointmentDate	}}</td>
                                            <td> {{$d->message	}}</td> 
                                           

											<td><a href=""class="btn btn-danger me-1"></a>

												<a href="{{url('patients_appointment/'.$d->id)}}" class="btn btn-danger me-1">Delete</a>
											</td>
                                        </tr>
                                       @endforeach
                                       @endif
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
          
            </div>
      
               
            </div>
        </div>
    </div>
 @endsection

</body>
</html>
