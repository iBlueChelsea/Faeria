<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="index.css">
<div class="container col-4 rounded bg-dark text-light">
<br>
<form method="POST">
    <div class="col text-center">
        <input type="submit" class="btn btn-lg btn-danger" name="play" value="Play">
        <p class="text-center font-weight-bold text-danger">{$errorMsg}</p>
        <label for="deck">Select a deck:</label>
        <select class="form-control" name="deck">{$options}</select>
    </div>
</form>
<br>
</div>
<div class="container col-4 rounded bg-dark text-light">
<br>
<form method="POST">
    <div class="col text-center">
        <input type="submit" class="btn btn-lg btn-danger" name="deckbuilder" value="Deck Builder">
    </div>
</form>
<br>
</div>
<div class="container col-1 rounded bg-dark text-light">
<br>
<form method="POST">
    <div class="col text-center">
        <input type="submit" class="btn btn-lg btn-danger" name="logout" value="Log out">
    </div>
</form>
<br>
</div>