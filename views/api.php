
<h1 class="display-5 fw-bold text-body-emphasis" id="explanationText">Click Generate to show random cryptocurrency</h1>
<h2 class="display-5 fw-bold text-body-emphasis" id="generatedText"></h2>
<div id='generateDiv'>
<button type='button' id='generate'class='btn btn-outline-dark me-2' onclick='generateCoin()'>Generate</button>
</div>
<style>
#explanationText{
margin: 70px;
margin-top: 30px;
    text-align: center;
}
#generateDiv{
    text-align: center;
    colour : white;
    margin-top: 70px;
}
#generatedText{
    text-align: center;
}
#generate{
    text-align: center;
    colour : white;
    width: 200px;
    height: 70px;
}
</style>
<script>
/*
const request = require('request');
var limit = 3
request.get({
  url: 'https://api.api-ninjas.com/v1/facts?limit=' + limit,
  headers: {
    'X-Api-Key': '7tXqvlimJr50fhUmPU0odQ==EDssNJu7LtIf9hLL'
  },
}, function(error, response, body) {
  if(error) return console.error('Request failed:', error);
  else if(response.statusCode != 200) return console.error('Error:', response.statusCode, body.toString('utf8'));
  else console.log(body)
});
*/
generateCoin();

            function generateCoin(){
                $.ajax({
            type: "Get",
            url: "https://api.coinpaprika.com/v1/coins",
            success: function (data) {
                
                    type = data[1].type;
                    id = data[1].id;
                    name = data[1].name;
                    var text = ""; 
                    $("h2").append(name + " " + type + " ");
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("Status: " + textStatus); alert("Error: " + errorThrown);
            }
        });}
</script>

