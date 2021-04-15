<html>
    <head>
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
        crossorigin="anonymous">
        <style>

        </style>
        <script>$usuari = ""</script>
    </head>
   <body>
       
        <form method="get" action="{{ route('usuaris.show', '$usuari') }}">
            <h2>Iniciar sessió</h2>
            <div class="form-group">
                @csrf
                <label for="username">Nom d'usuari</label>
                <input type="username" class="form-control" name="username"/>
            </div>
            <div class="form-group">
                <label for="passwd">Contrassenya</label>
                <input type="passwd" class="form-control" name="passwd"/>
            </div><br><br>
            <input type="submit" class="btn btn-block btn-primary" value="Iniciar sessió">
        </form>
        <a href="/home">HOME</a>
   </body>  
</html>