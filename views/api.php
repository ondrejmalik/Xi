
<h1 class="display-5 fw-bold text-body-emphasis" id="explanationText">Click Generate to show random Top 100 cryptocurrency</h1>
<h2 class="display-5 fw-bold text-body-emphasis" id="generatedText"></h2>
<p class="lead mb-4" id="generatedText2"></p>
<div id='generateDiv'>
<button type='button' id='generate'class='btn btn-outline-dark me-2' onclick='location.reload();'>Generate</button>
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
#generatedText2{
    text-align: center;
}
#generate{
    text-align: center;
    colour : white;
    width: 200px;
    height: 70px;
    margin-bottom: 300px;
}
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
            function generateCoin(){
            let random = Math.floor(Math.random() * 100);
            console.log(random);
                $.ajax({
            type: "Get",
            url: "https://api.coinpaprika.com/v1/coins",
            success: function (data) {
                
                    type = data[random].type;
                    id = data[random].id;
                    name = data[random].name;
                    var text = ""; 
                    var g1 = document.getElementById("generatedText");
                    var g2 = document.getElementById("generatedText2");
                    g1.innerHTML = "Name: " + name;
                    g2.innerHTML = "Type: " + type;
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("Status: " + textStatus); alert("Error: " + errorThrown);
            }
        });
        }
        generateCoin();
</script>

