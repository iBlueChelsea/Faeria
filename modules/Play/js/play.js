realtimeUpdate();

function realtimeUpdate() {
    $.ajax({
        url: "utils/getGames.php",
        cache: false,
        success: function(data) {
            let response = JSON.parse(data);
            let ul = '';
            for (obj of response){
                li = '<li class="list-group-item list-group-item-light">Game: ' + obj['player1'] + ' vs ' + (obj['player2'] ? obj['player2'] : '---');
                li += ' <a href="index.php?module=Game&id=' + obj['id'] + '" class="btn btn-outline-dark btn-sm">Join Game</a></li>';
                ul += li;
            }
            document.getElementById("list").innerHTML = ul;
            setTimeout('realtimeUpdate()',1000);
        }
    });
}