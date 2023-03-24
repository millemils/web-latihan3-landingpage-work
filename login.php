<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Page | Bootstrap 4</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  
</head>
<body class="bg-primary">
  <div class="card-body">
    <div class="container">
      <div class="row justify-content-center align-items-center " style="height: 500px">
        <div class="col-md-4 col-sm-8">
          <div class="card-text text-center text-white mb-3">
            <h5 class="font-weight-light">Good to see you again</h5>
            <h3 class="font-weight-bolder">W E L C O M E - B A C K </h3>
          </div>
          <div class="card shadow" style="border-radius: 10px">
            <div class="card-body">
              <h5 class="card-title text-center font-weight-normal font-italic">Login Account</h5>
              <form action="home-1.php" method="post">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="Start with Email"
                  />
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input
                  type="password"
                  class="form-control"
                  id="password"
                  placeholder="End Password"
                  />
                </div>
                <button type="submit" class="btn btn-primary btn-block ">
                  Submit
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
