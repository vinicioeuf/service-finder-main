var items = document.getElementById("servicos");
var azinho = document.getElementById("azin");
var confirmaCity = document.getElementById("city");
azinho.addEventListener("click", function(){
    sessionStorage.setItem('/services.php-SelecteEstab', items.value);
});