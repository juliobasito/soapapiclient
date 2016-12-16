<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="../css/css.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">TRUCK</a>
    </div>
  </nav>
  <div class="container" style="margin-top:50px">
    <div class="row">
      <div class="card col s12 l6 offset-l3">
        <div class="row">
          <div class="col s12">
            <h3 class="center-align">LOGIN</h3>
            <form class="col s12">
              <div class="row">
                <div class="input-field col s12">
                  <input id="first_name" type="text" class="validate" required>
                  <label for="first_name">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="first_name" type="password" class="validate" required>
                  <label for="first_name">Mot de passe</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input type="submit" value="Connexion" class="waves-effect waves-light btn">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>
</html>