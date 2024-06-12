<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formonix Capital Referral Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
  *{
      font-family: roboto;
  }
      input.form-control , .btn, select.form-control{
          border-radius:0px;
          font-size: 12px;
          height: 30px;
      }
      label{
          font-size: 12px;
          
      }
      .card{
          border-radius : 0px;
          border: thin solid black;
      }
  </style>
</head>
<body>
  <div class="container mt-5">
   <div class="row  ">
       <div class="col-4 mx-auto">
            <div class="text-center" style="font-size: 30px;">Login</div>
            <div class="card">
                <div class="card-body">
                     <form>
      <div class="form-group">
        <label for="referralId">Contact No</label>
        <input type="text" class="form-control" id="referralId" placeholder="Contact Number">
      </div>
      <div class="form-group">
        <label for="name">Password</label>
        <input type="text" class="form-control" id="name" placeholder="Password">
      </div> 
     
      <button type="submit" class="btn btn-warning btn-block ">Login</button>
        <div class="form-group mx-auto mt-3 text-center">
           <span><a href="#" class="text-muted">Forgot Password ?</a></span>
        </div>
    </form>
    
                </div>
            </div>
       </div>
   </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
