<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
          <!-- ion icon -->
          <!-- slick -->
          <link rel="stylesheet" href="../assets/style/slick.css">
          <!-- main style -->
          <link rel="stylesheet" href="../assets/style/style.css" />
          <title></title>
</head>

<body data-barba="wrapper">
          <main data-barba="container" data-barba-namespace="login" page-ref="" style="display: block;">
                    <!-- code -->
                    <section id="login-page" class="admin-login">
                              <div class="box">
                                        <div class="login">
                                                  <div class="logo">
                                                            <img src="../assets/images/arcitl.png" alt="">
                                                  </div>
                                                  <div class="login-title"><br />Admin Login</div>
                                                  <div class="AUTH_ERROR"></div>
                                                  <form id="login_form" method="POST">
                                                            <div class="input-holder">
                                                                      <label>User Name</label>
                                                                      <input id="userName" name="username" type="text" />
                                                            </div>
                                                            <div class="input-holder">
                                                                      <label>Password</label>
                                                                      <input id="password" name="password" type="password" class="" />
                                                                      <div class="eye-button">
                                                                                <ion-icon name="eye-off-outline"></ion-icon>
                                                                      </div>
                                                                      <p class="error" style="display: none;">
                                                                                <ion-icon name="warning-outline"></ion-icon> Username or Password is Incorrect
                                                                      </p>
                                                            </div>
                                                            <div class="forgot-trigger">
                                                            </div>
                                                            <button class="login-button" type="submit">Login</button>
                                                  </form>
                                        </div>
                              </div>
                    </section>


                    <!-- login code -->
                    <?php
                    // echo password_hash("12345", PASSWORD_DEFAULT);
                    session_start();
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                              include '../_class/dbConfig.php';

                              $username = $_POST['username'] ?? '';
                              $password = $_POST['password'] ?? '';

                              if (!empty($username) && !empty($password)) {
                                        $conn = (new dbConfig)->getConnection();
                                        $stmt = $conn->prepare("SELECT * FROM admin_users WHERE username = ?");
                                        $stmt->execute([$username]);
                                        $result = $stmt->get_result();
                                        $user = $result->fetch_assoc();

                                        if ($user && password_verify($password, $user['password'])) {
                                                  $_SESSION['user_id'] = $user['id'];
                                                  header('Location: list-leads.php');
                                                  exit;
                                        } else {
                                                  echo '<p class="error">Username or Password is Incorrect</p>';
                                        }
                              } else {
                                        echo '<p class="error">Please enter both username and password.</p>';
                              }
                    }
                    ?>
          </main>
          <!-- global jquery -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</body>

</html>