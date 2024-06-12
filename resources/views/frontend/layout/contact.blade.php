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
            <div class="text-center" style="font-size: 30px;">Registration Form</div>
            <div class="card">
                <div class="card-body">
                     <form>
      <div class="form-group">
        <label for="referralId">Referral Code(Optional)</label>
        <input type="text" class="form-control" id="referralId" placeholder="Enter your referral ID">
      </div>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your name">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email">
      </div>
      <div class="form-group">
        <label for="contact">Contact</label>
        <input type="tel" class="form-control" id="contact" placeholder="Enter your contact number">
      </div>
      <div class="form-group">
        <label for="selectCourse">Select Course</label>
        <select class="form-control" id="selectCourse">
          <option value="" disabled selected>Select a course</option>
          <option value="computer_knowledge">Computer Knowledge</option>
          <option value="child_education">Child Education</option>
          <option value="meditation_yoga">Meditation and Yoga</option>
        </select>
      </div>
       <div class="form-group">
        <label for="contact">Password</label>
        <input type="tel" class="form-control" id="contact" placeholder="Password ">
      </div>
       <div class="form-group">
        <label for="contact">Confirm password</label>
        <input type="tel" class="form-control" id="contact" placeholder="Confirm password">
      </div>
      <button type="submit" class="btn btn-warning btn-block ">Pay Now</button>
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
