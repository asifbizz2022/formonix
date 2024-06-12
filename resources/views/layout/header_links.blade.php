 
    <head>
        <meta charset="utf-8" />
        <title>User</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('/public/assets/images/favicon.ico') }}">

        <!-- DataTables -->
        <link href="{{ url('/public/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('/public/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{ url('/public/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- select2 css -->
        <link href="{{ url('/public/assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- dropzone css -->
        <link href="{{ url('/public/assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Bootstrap Css -->
        <link href="{{ url('/public/assets/css/bootstrap.min.css')}}" id="bootstrap-style" defer rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ url('/public/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ url('/public/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

        <style media="screen">
          *{
            font-family:  arial;
          }
            table tbody tr td { 
            font-family: TAHOMA;
            color:black; 
            padding-right: 5px;
            font-size: 12px;
            font-weight: 500;
          }
          ul li{
            border-radius: 0px;
          }
          thead{
            background: #556ee6;
            color:white;
            font-size: 11.5px;  
          }
          .btn , input.form-control, select.form-control , .card{
            border-radius: 0px;

          }

          .card .card-body{
            padding: 3px;
          }
          
          .card{
            
          }
          .footer {
              bottom: 0;
              padding: 5px calc(24px / 2);
              position: absolute;
              right: 0;
              color: #74788d;
              left: 250px;
              height: auto;
     
          }

          .vertical-menu {
              width: 250px;
              z-index: 1001;
              background: #fff;
              bottom: 0;
              margin-top: 0;
              position: fixed;
              top: 35px;
              -webkit-box-shadow: 0 .75rem 1.5rem rgba(18, 38, 63, .03);
              box-shadow: 0 .75rem 1.5rem rgba(18, 38, 63, .03);
          }

          .navbar-header {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: justify;
            -webkit-box-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin: 0 auto;
            height: 35px;
            padding: 0 calc(24px / 2) 0 0;
        }
        .dropdown-menu.show {
            top: 85% !important;
        }
          .navbar-brand-box {
            padding: 0 1.5rem;
            text-align: center;
            width: 250px;
            height: 59px;
        }

        .vertical-collpsed .vertical-menu #sidebar-menu>ul>li>a {
            padding: 7px 20px;
             min-height: 30px; 
            -webkit-transition: none;
            transition: none;
        }
        .page-content {
            padding: calc(30px + 24px) calc(24px / 2) 60px calc(20px / 2);
        }
        .navbar-brand-box {
            padding: 29px 1.5rem;
            text-align: center; 
            height: 59px;
        }

      #sidebar-menu ul li a {
        display: block;
        padding: 0.625rem 0.5rem;
        color: #545a6d;
        position: relative;
        font-size: 11px;
        -webkit-transition: all .4s;
        transition: all .4s;
    }

 #sidebar-menu ul li ul.sub-menu li a {
    padding: 12.4rem 0.5rem 4.4rem 2.5rem;
    font-size: 13px;
    color: #545a6d;
}

       

        </style>
    </head>