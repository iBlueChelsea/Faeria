<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="index.css">
<div class="container col-2 rounded bg-dark text-light text-center">
<br>
<form method="POST">
    <div class="form-group">
        <label class="text-info" for="username">Username</label>
        <input type="text" class="form-control" name="username" id="username"><br/>
        <label class="text-info" for="pw">Password</label>
        <input type="password" class="form-control" name="pw" id="pw"><br/>
        <div class="col text-center">
            <input type="submit" class="btn btn-info" name="login" value="Log in">
        </div>
    </div>
</form>
<p class="text-danger">{$error}</p>
<br>
</div>