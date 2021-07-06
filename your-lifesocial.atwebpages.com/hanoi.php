<html>
<header>
   <link rel="stylesheet" type="text/css" href="css/hanoi.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</header>
<body>
<h1>Torre de Hanoi</h1>
<form>
    <div class="discs">
        <input id="one" type="text" tabindex="-1" readonly>
        <input name="one" type="radio" tabindex="-1" checked>
        <input name="one" type="radio" tabindex="-1">
        <input name="one" type="radio" tabindex="-1">
        <label for="one"></label>
        <div class="disc one"></div>

        <input id="two" type="text" tabindex="-1" readonly>
        <input name="two" type="radio" tabindex="-1" checked>
        <input name="two" type="radio" tabindex="-1">
        <input name="two" type="radio" tabindex="-1">
        <label for="two"></label>
        <div class="disc two"></div>

        <input id="three" type="text" tabindex="-1" readonly>
        <input name="three" type="radio" tabindex="-1" checked>
        <input name="three" type="radio" tabindex="-1">
        <input name="three" type="radio" tabindex="-1">
        <label for="three"></label>
        <div class="disc three"></div>

        <input id="four" type="text" tabindex="-1" readonly>
        <input name="four" type="radio" tabindex="-1" checked>
        <input name="four" type="radio" tabindex="-1">
        <input name="four" type="radio" tabindex="-1">
        <label for="four"></label>
        <div class="disc four"></div>

        <input id="five" type="text" tabindex="-1" readonly>
        <input name="five" type="radio" tabindex="-1" checked>
        <input name="five" type="radio" tabindex="-1">
        <input name="five" type="radio" tabindex="-1">
        <label for="five"></label>
        <div class="disc five"></div>

        <input id="six" type="text" tabindex="-1" readonly>
        <input name="six" type="radio" tabindex="-1" checked>
        <input name="six" type="radio" tabindex="-1">
        <input name="six" type="radio" tabindex="-1">
        <label for="six"></label>
        <div class="disc six"></div>

        <input id="zero" type="text" tabindex="-1" readonly>

        <div class="spacer a"></div>
        <div class="separator ab"></div>
        <div class="spacer b"></div>
        <div class="separator bc"></div>
        <div class="spacer c"></div>

        <div class="tower a"></div>
        <div class="tower b"></div>
        <div class="tower c"></div>

        <div class="win">Você Ganhou :)</div>
    </div>
    <div class="bottom"></div>
    <button type="reset">Novo Jogo</button>
</form>
</body>
</html>