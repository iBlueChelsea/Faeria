<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="index.css">
<input type="hidden" id="user" value={$user}>
<div class="container col-8 rounded bg-dark text-light">
<br>
<form method="POST">
    <input type="submit" class="btn btn-outline-info" name="newgame" value="Create new game">
</form>
<br>
<ul id="list" class="list-group">
</ul>
<br>
</div>
<div class="container col-1 rounded bg-dark text-light">
<br>
<form method="POST">
    <div class="col text-center">
        <input type="submit" class="btn btn-lg btn-danger" name="back" value="Go Back">
    </div>
</form>
<br>
</div>
<script src="modules/Play/js/play.js"></script>