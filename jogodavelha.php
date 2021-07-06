<html>
<header>
   <link rel="stylesheet" type="text/css" href="css/jogodavelha.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style type="text/css">
   </style>
</header>
<body>
<div class="game">
  <form>
    <div class="board">
      <svg class="board__line" style="--x: 1; --y: 0;">
        <path d="M 5 5 L 295 5" fill="none" stroke-width="10" stroke-linecap="round" stroke-dasharray="300" stroke-dashoffset="300"></path>
      </svg>
      <svg class="board__line" style="--x: 2; --y: 0;">
        <path d="M 5 5 L 295 5" fill="none" stroke-width="10" stroke-linecap="round" stroke-dasharray="300" stroke-dashoffset="300"></path>
      </svg>
      <svg class="board__line" style="--x: 0; --y: 1;">
        <path d="M 5 5 L 295 5" fill="none" stroke-width="10" stroke-linecap="round" stroke-dasharray="300" stroke-dashoffset="300"></path>
      </svg>
      <svg class="board__line" style="--x: 0; --y: 2;">
        <path d="M 5 5 L 295 5" fill="none" stroke-width="10" stroke-linecap="round" stroke-dasharray="300" stroke-dashoffset="300"></path>
      </svg>
      <input type="checkbox" id="x--0" style="--col: 0; --row: 0;"/><span style="--col: 0; --row: 0;">
        <svg class="x">
          <path class="cross" d="M 20 20 L 80 80" fill="none" stroke-width="10" stroke-linecap="round" stroke-dasharray="100" stroke-dashoffset="100"></path>
          <path class="cross" d="M 80 20 L 20 80" fill="none" stroke-width="10" stroke-linecap="round" stroke-dasharray="100" stroke-dashoffset="100"></path>
        </svg></span>
      <input type="checkbox" id="o--0" style="--col: 0; --row: 0;"/><span style="--col: 0; --row: 0;">
        <svg class="o">
          <circle class="naught" cx="50" cy="50" r="30" fill="none" stroke-width="10" stroke-dasharray="200" stroke-dashoffset="200" stroke-linecap="round"></circle>
        </svg></span>
      <input type="checkbox" id="x--1" style="--col: 1; --row: 0;"/><span style="--col: 1; --row: 0;">
        <svg class="x">
          <path class="cross" d="M 20 20 L 80 80" fill="none" stroke-width="10" stroke-linecap="round" stroke-dasharray="100" stroke-dashoffset="100"></path>
          <path class="cross" d="M 80 20 L 20 80" fill="none" stroke-width="10" stroke-linecap="round" stroke-dasharray="100" stroke-dashoffset="100"></path>
        </svg></span>
      <input type="checkbox" id="o--1" style="--col: 1; --row: 0;"/><span style="--col: 1; --row: 0;">
        <svg class="o">
          <circle class="naught" cx="50" cy="50" r="30" fill="none" stroke-width="10" stroke-dasharray="200" stroke-dashoffset="200" stroke-linecap="round"></circle>
        </svg></span>
      <input type="checkbox" id="x--2" style="--col: 2; --row: 0;"/><span style="--col: 2; --row: 0;">
        <svg class="x">
          <path class="cross" d="M 20 20 L 80 80" fill="none" stroke-width="10" stroke-linecap="round" stroke-dasharray="100" stroke-dashoffset="100"></path>
          <path class="cross" d="M 80 20 L 20 80" fill="none" stroke-width="10" stroke-linecap="round" stroke-dasharray="100" stroke-dashoffset="100"></path>
        </svg></span>
      <input type="checkbox" id="o--2" style="--col: 2; --row: 0;"/><span style="--col: 2; --row: 0;">
        <svg class="o">
          <circle class="naught" cx="50" cy="50" r="30" fill="none" stroke-width="10" stroke-dasharray="200" stroke-dashoffset="200" stroke-linecap="round"></circle>
        </svg></span>
      <input type="checkbox" id="x--3" style="--col: 0; --row: 1;"/><span style="--col: 0; --row: 1;">
        <svg class="x">
          <path class="cross" d="M 20 20 L 80 80" fill="none" stroke-width="10" stroke-linecap="round" stroke-dasharray="100" stroke-dashoffset="100"></path>
          <path class="cross" d="M 80 20 L 20 80" fill="none" stroke-width="10" stroke-linecap="round" stroke-dasharray="100" stroke-dashoffset="100"></path>
        </svg></span>
      <input type="checkbox" id="o--3" style="--col: 0; --row: 1;"/><span style="--col: 0; --row: 1;">
        <svg class="o">
          <circle class="naught" cx="50" cy="50" r="30" fill="none" stroke-width="10" stroke-dasharray="200" stroke-dashoffset="200" stroke-linecap="round"></circle>
        </svg></span>
      <input type="checkbox" id="x--4" style="--col: 1; --row: 1;"/><span style="--col: 1; --row: 1;">
        <svg class="x">
          <path class="cross" d="M 20 20 L 80 80" fill="none" stroke-width="10" stroke-linecap="round" stroke-dasharray="100" stroke-dashoffset="100"></path>
          <path class="cross" d="M 80 20 L 20 80" fill="none" stroke-width="10" stroke-linecap="round" stroke-dasharray="100" stroke-dashoffset="100"></path>
        </svg></span>
      <input type="checkbox" id="o--4" style="--col: 1; --row: 1;"/><span style="--col: 1; --row: 1;">
        <svg class="o">
          <circle class="naught" cx="50" cy="50" r="30" fill="none" stroke-width="10" stroke-dasharray="200" stroke-dashoffset="200" stroke-linecap="round"></circle>
        </svg></span>
      <input type="checkbox" id="x--5" style="--col: 2; --row: 1;"/><span style="--col: 2; --row: 1;">
        <svg class="x">
          <path class="cross" d="M 20 20 L 80 80" fill="none" stroke-width="10" stroke-linecap="round" stroke-dasharray="100" stroke-dashoffset="100"></path>
          <path class="cross" d="M 80 20 L 20 80" fill="none" stroke-width="10" stroke-linecap="round" stroke-dasharray="100" stroke-dashoffset="100"></path>
        </svg></span>
      <input type="checkbox" id="o--5" style="--col: 2; --row: 1;"/><span style="--col: 2; --row: 1;">
        <svg class="o">
          <circle class="naught" cx="50" cy="50" r="30" fill="none" stroke-width="10" stroke-dasharray="200" stroke-dashoffset="200" stroke-linecap="round"></circle>
        </svg></span>
      <input type="checkbox" id="x--6" style="--col: 0; --row: 2;"/><span style="--col: 0; --row: 2;">
        <svg class="x">
          <path class="cross" d="M 20 20 L 80 80" fill="none" stroke-width="10" stroke-linecap="round" stroke-dasharray="100" stroke-dashoffset="100"></path>
          <path class="cross" d="M 80 20 L 20 80" fill="none" stroke-width="10" stroke-linecap="round" stroke-dasharray="100" stroke-dashoffset="100"></path>
        </svg></span>
      <input type="checkbox" id="o--6" style="--col: 0; --row: 2;"/><span style="--col: 0; --row: 2;">
        <svg class="o">
          <circle class="naught" cx="50" cy="50" r="30" fill="none" stroke-width="10" stroke-dasharray="200" stroke-dashoffset="200" stroke-linecap="round"></circle>
        </svg></span>
      <input type="checkbox" id="x--7" style="--col: 1; --row: 2;"/><span style="--col: 1; --row: 2;">
        <svg class="x">
          <path class="cross" d="M 20 20 L 80 80" fill="none" stroke-width="10" stroke-linecap="round" stroke-dasharray="100" stroke-dashoffset="100"></path>
          <path class="cross" d="M 80 20 L 20 80" fill="none" stroke-width="10" stroke-linecap="round" stroke-dasharray="100" stroke-dashoffset="100"></path>
        </svg></span>
      <input type="checkbox" id="o--7" style="--col: 1; --row: 2;"/><span style="--col: 1; --row: 2;">
        <svg class="o">
          <circle class="naught" cx="50" cy="50" r="30" fill="none" stroke-width="10" stroke-dasharray="200" stroke-dashoffset="200" stroke-linecap="round"></circle>
        </svg></span>
      <input type="checkbox" id="x--8" style="--col: 2; --row: 2;"/><span style="--col: 2; --row: 2;">
        <svg class="x">
          <path class="cross" d="M 20 20 L 80 80" fill="none" stroke-width="10" stroke-linecap="round" stroke-dasharray="100" stroke-dashoffset="100"></path>
          <path class="cross" d="M 80 20 L 20 80" fill="none" stroke-width="10" stroke-linecap="round" stroke-dasharray="100" stroke-dashoffset="100"></path>
        </svg></span>
      <input type="checkbox" id="o--8" style="--col: 2; --row: 2;"/><span style="--col: 2; --row: 2;">
        <svg class="o">
          <circle class="naught" cx="50" cy="50" r="30" fill="none" stroke-width="10" stroke-dasharray="200" stroke-dashoffset="200" stroke-linecap="round"></circle>
        </svg></span>
      <label for="x--0" style="--col: 0; --row: 0;"></label>
      <label for="o--0" style="--col: 0; --row: 0;"></label>
      <label for="x--1" style="--col: 1; --row: 0;"></label>
      <label for="o--1" style="--col: 1; --row: 0;"></label>
      <label for="x--2" style="--col: 2; --row: 0;"></label>
      <label for="o--2" style="--col: 2; --row: 0;"></label>
      <label for="x--3" style="--col: 0; --row: 1;"></label>
      <label for="o--3" style="--col: 0; --row: 1;"></label>
      <label for="x--4" style="--col: 1; --row: 1;"></label>
      <label for="o--4" style="--col: 1; --row: 1;"></label>
      <label for="x--5" style="--col: 2; --row: 1;"></label>
      <label for="o--5" style="--col: 2; --row: 1;"></label>
      <label for="x--6" style="--col: 0; --row: 2;"></label>
      <label for="o--6" style="--col: 0; --row: 2;"></label>
      <label for="x--7" style="--col: 1; --row: 2;"></label>
      <label for="o--7" style="--col: 1; --row: 2;"></label>
      <label for="x--8" style="--col: 2; --row: 2;"></label>
      <label for="o--8" style="--col: 2; --row: 2;"></label>
      <div class="board__result board__result--x result">
        <dl class="result__content">
          <dt class="result__title">Vencedor!</dt>
          <dd class="result__details">
            <svg class="x result__icon">
              <path class="cross" d="M 20 20 L 80 80" fill="none" stroke-width="10" stroke-linecap="round" stroke-dasharray="100" stroke-dashoffset="100"></path>
              <path class="cross" d="M 80 20 L 20 80" fill="none" stroke-width="10" stroke-linecap="round" stroke-dasharray="100" stroke-dashoffset="100"></path>
            </svg>
          </dd>
          <button class="result__reset" type="reset">Jogar Novamente</button>
        </dl>
        <div class="result__firework-icon" style="--y: 415; --r: 345;">??</div>
        <div class="result__firework-icon" style="--y: 393; --r: 98;">??</div>
        <div class="result__firework-icon" style="--y: 461; --r: 304;">??</div>
        <div class="result__firework-icon" style="--y: 246; --r: 287;">??</div>
        <div class="result__firework-icon" style="--y: 369; --r: 31;">??</div>
        <div class="result__firework-icon" style="--y: 456; --r: 353;">??</div>
        <div class="result__firework-icon" style="--y: 338; --r: 16;">??</div>
        <div class="result__firework-icon" style="--y: 493; --r: 321;">??</div>
        <div class="result__firework-icon" style="--y: 311; --r: 63;">??</div>
        <div class="result__firework-icon" style="--y: 300; --r: 192;">??</div>
        <div class="result__firework-icon" style="--y: 201; --r: 143;">??</div>
        <div class="result__firework-icon" style="--y: 492; --r: 307;">??</div>
        <div class="result__firework-icon" style="--y: 259; --r: 237;">??</div>
        <div class="result__firework-icon" style="--y: 358; --r: 299;">??</div>
        <div class="result__firework-icon" style="--y: 208; --r: 284;">??</div>
        <div class="result__firework-icon" style="--y: 332; --r: 248;">??</div>
        <div class="result__firework-icon" style="--y: 250; --r: 130;">??</div>
        <div class="result__firework-icon" style="--y: 475; --r: 182;">??</div>
        <div class="result__firework-icon" style="--y: 471; --r: 205;">??</div>
        <div class="result__firework-icon" style="--y: 394; --r: 291;">??</div>
        <div class="result__firework-icon" style="--y: 244; --r: 16;">??</div>
        <div class="result__firework-icon" style="--y: 307; --r: 10;">??</div>
        <div class="result__firework-icon" style="--y: 363; --r: 154;">??</div>
        <div class="result__firework-icon" style="--y: 442; --r: 51;">??</div>
        <div class="result__firework-icon" style="--y: 359; --r: 209;">??</div>
        <div class="result__firework-icon" style="--y: 311; --r: 139;">??</div>
        <div class="result__firework-icon" style="--y: 386; --r: 29;">??</div>
        <div class="result__firework-icon" style="--y: 219; --r: 232;">??</div>
        <div class="result__firework-icon" style="--y: 298; --r: 75;">??</div>
        <div class="result__firework-icon" style="--y: 298; --r: 43;">??</div>
      </div>
      <div class="board__result board__result--o result">
        <dl class="result__content">
          <dt class="result__title">Vencedor!</dt>
          <dd class="result__details">
            <svg class="o result__icon">
              <circle class="naught" cx="50" cy="50" r="30" fill="none" stroke-width="10" stroke-dasharray="200" stroke-dashoffset="200" stroke-linecap="round"></circle>
            </svg>
          </dd>
          <button class="result__reset" type="reset">Jogar Novamente</button>
        </dl>
        <div class="result__firework-icon" style="--y: 392; --r: 221;">??</div>
        <div class="result__firework-icon" style="--y: 234; --r: 89;">??</div>
        <div class="result__firework-icon" style="--y: 413; --r: 317;">??</div>
        <div class="result__firework-icon" style="--y: 244; --r: 152;">??</div>
        <div class="result__firework-icon" style="--y: 419; --r: 275;">??</div>
        <div class="result__firework-icon" style="--y: 294; --r: 59;">??</div>
        <div class="result__firework-icon" style="--y: 206; --r: 305;">??</div>
        <div class="result__firework-icon" style="--y: 216; --r: 357;">??</div>
        <div class="result__firework-icon" style="--y: 230; --r: 154;">??</div>
        <div class="result__firework-icon" style="--y: 279; --r: 131;">??</div>
        <div class="result__firework-icon" style="--y: 240; --r: 191;">??</div>
        <div class="result__firework-icon" style="--y: 492; --r: 162;">??</div>
        <div class="result__firework-icon" style="--y: 309; --r: 24;">??</div>
        <div class="result__firework-icon" style="--y: 349; --r: 140;">??</div>
        <div class="result__firework-icon" style="--y: 302; --r: 332;">??</div>
        <div class="result__firework-icon" style="--y: 209; --r: 257;">??</div>
        <div class="result__firework-icon" style="--y: 234; --r: 115;">??</div>
        <div class="result__firework-icon" style="--y: 201; --r: 230;">??</div>
        <div class="result__firework-icon" style="--y: 272; --r: 343;">??</div>
        <div class="result__firework-icon" style="--y: 274; --r: 149;">??</div>
        <div class="result__firework-icon" style="--y: 251; --r: 29;">??</div>
        <div class="result__firework-icon" style="--y: 329; --r: 62;">??</div>
        <div class="result__firework-icon" style="--y: 405; --r: 98;">??</div>
        <div class="result__firework-icon" style="--y: 231; --r: 316;">??</div>
        <div class="result__firework-icon" style="--y: 277; --r: 91;">??</div>
        <div class="result__firework-icon" style="--y: 258; --r: 37;">??</div>
        <div class="result__firework-icon" style="--y: 416; --r: 236;">??</div>
        <div class="result__firework-icon" style="--y: 327; --r: 10;">??</div>
        <div class="result__firework-icon" style="--y: 214; --r: 273;">??</div>
        <div class="result__firework-icon" style="--y: 328; --r: 27;">??</div>
      </div>
      <div class="board__result board__result--draw">
        <dl class="result__content">
          <dt class="result__title">Empate!</dt>
          <dd class="result__details">
            <div class="result__emoji">??</div>
          </dd>
          <button class="result__reset" type="reset">Jogar Novamente</button>
        </dl>
      </div>
    </div>
  </form>
</div>