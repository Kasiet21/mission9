
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="index.css" />
  <title>Tour With Me OFFICIAL</title>
</head>

<body>
  <section>
    <div class="form-box">
      <div class="form-value">
        <form method="Post" action="/sign_up">
          @csrf
          <h2>Sign Up</h2>
          <div class="inputbox">
            <ion-icon name="mail-outline"></ion-icon>
            <input name="Email" type="email" required />
            <label for="">Email</label>
          </div>
          <div class="inputbox">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input name="Password" type="password" required />
            <label for="">Password</label>
          </div>
          <div class="inputbox">
            <ion-icon name="mail-outline"></ion-icon>
            <input name="Name" type="username" required />
            <label for="">Name</label>
          </div>
          <div class="inputbox">
            <ion-icon name="mail-outline"></ion-icon>
            <input name="Contact_number" type="integer" required />
            <label for="">Contact Number</label>
          </div>

          <div class="forget">
            <label for=""><input type="checkbox" />Remember Me
              <a href="#" style="color: red">Forget Password</a></label>
          </div>
          <button type="submit" class="btn btn-default"> Sign Up</a> </button>
  
          <div class="register">
            <p>
              Already Have Account?
              <a href="/sign_in" style="color: greenyellow">Log in Then</a>
            </p>
           
          </div>
        </form>
      </div>
    </div>
  </section>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>