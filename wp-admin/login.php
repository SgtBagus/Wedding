<?php
$Page = "Login";
include("script/header_script.php");
?>
<body class="animsition">
    <div class="login-container row container">
        <div class="col s12 m12">
            <h2>Login</h2>
            <form action="system/login_action.php?op=in" method="POST">
              <div class="row mb-20">
                  <div class="input-field col s12 m12">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="icon_prefix" type="text" class="validate" name="username">
                      <label for="icon_prefix">Username</label>
                  </div>
                  <div class="input-field col s12 m12">
                      <i class="material-icons prefix">lock</i>
                      <input id="icon_prefix" type="password" class="validate" name="password">
                      <label for="icon_prefix">Password</label>
                  </div>
              </div>
              <div class="row">
                  <div class="col m12 s12">
                      <button type="submit" class="waves-effect btn-large waves-light btn col m12 s12">
                        LOGIN
                      </button>
                  </div>
              </div>
            </from>
        </div>
    </div>
    <script src="js/scripts.min.js"></script>
    <script src="plugins/nicescrool/jquery.nicescroll.min.js"></script>
    <script src="plugins/animsition/js/animsition.min.js"></script>
</body>
</html>
