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
                        <h1 class="page-head-line">doctors</h1>
                        
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
                                            <th>Doctor Name</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($data))
                                            @foreach ($data as $d) 
                                                 <tr>
                                            <td>{{$d->id}}</td>
                                            <td>{{$d->name}}</td>
                                             
                                           

											
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
