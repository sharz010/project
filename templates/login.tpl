<html>
<head>
<title>Webshop login </title>

{include file="../templates/header.tpl" title="werknemers"  username='fake pepe'}
</head>
    <body>
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading">

        <form method="post" action="index.php?action=login">
            <fieldset class="panel-heading">
              Username:<br>
            <input type="text" class="form-control" name="username" required="yes" placeholder="username"><br>
              Password:<br>
            <input type="password" class="form-control" name="password" required="yes" placeholder="wachtwoord"><br>
            <input type="submit" class="btn btn-danger" name="submit" value="Register">
            </fieldset>
        </form>

        <p>{$tekst|default:""}<p>
        </div>
      </div>
    </div>
  </div>


    </body>
    {include file="../templates/footer.tpl"}
</html>
