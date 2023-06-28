<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> 
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaloguj się</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <div class="navbar-nav mr-auto">
                    <a href="index.php" class="nav-link nav-item">Główna</a>
                    <a href="quizy.php" class="nav-link nav-item">Quizy</a>
                    <a href="stworzquiz.php" class="nav-link nav-item">Stwórz</a>
                    <a href="konto.php" class="nav-link nav-item active">Konto</a>
                </div>
            </div>
        </div>
    </nav>


<div class="container">
    <div class="row">
        <div class="mt-5 col-12">
            <div class="display-2 text-center mb-3">Zaloguj się</div>
            <form action="zalogowanko.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-10 offset-1 col-md-8 offset-md-2 pb-3">
                        <label for="login">Nazwa użytkownika</label>
                        <input type="text" name="login" id="login" placeholder="Twój login" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-10 offset-1 col-md-8 offset-md-2 pb-3">
                        <label for="haslo">Hasło</label>
                        <input type="password" name="haslo" id="haslo" placeholder="Twoje hasło" class="form-control">
                    </div>
                </div>
                <div class="text-center">
                <input type="submit" value="Zaloguj się" class="btn btn-lg btn-primary">
            </div>
            </form>
            
            <div class="text-center mt-4">
                Nie masz konta? <a href="zarejestrujsie.php">Zarejestruj się</a> już teraz!
            </div>
        </div>
    </div>
</div>





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   

</body>
</html>