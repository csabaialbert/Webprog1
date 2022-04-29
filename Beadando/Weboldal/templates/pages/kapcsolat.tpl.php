<script type="text/javascript" src="js/main.js"></script>
<body>
    <div id="indent">
        <h1 id="cim">Kapcsolat</h1>
        <div>
            <p id="koszonet">
                ❤🐾Köszönjük a munkánk iránti segítségét!🐾❤
            </p>
            <p id="koszonet">
                Bankszámlaszámunk: 65100242-11052788-00000000    
            </p>
            <p id="koszonet">
                Pátria Takarékszövetkezet    
            </p>
            <p id="koszonet">
                Adószámunk: 18712397-1-13    
            </p>
            <p id="szazalek">1% Neked 1 perc, nekik az életük! <br> Adód 1%-a életet ment! Nyilatkozz!</h2>
            <div>
                <h2>Örökbefogadással kapcsolatban:</h2>
                <table id="kapcs">
                    <tr>
                        <td id="kapcsolat1">Messenger:</td>
                        <td id="kapcsolat1">m.me/csomorikutyak</td>
                    </tr>
                    <tr>
                        <td id="kapcsolat">Telefon;</td>
                        <td id="kapcsolat">+3630 3 682 682</td>
                    </tr>
                    <tr>
                        <td id="kapcsolat1">e-mail:</td>
                        <td id="kapcsolat1">csomorikutyak@gmail.com</td>
                    </tr>
                </table>
            </div>
            <p><b>Telefonszámunk 10 – 18 óra között hívható.</b> A telefonon Önkéntesünk fogadja a hívásokat, ahogy ideje engedi, ezért megértésüket kérjük, ha esetenként a szám nem elérhető. Kérjük, legyenek türelemmel és ilyen esetben próbálják kicsit később hívni! Visszahívást kezdeményezni nem áll módunkban.
            </p>
            <p> Vagy az alábbi <b>Űrlap</b> segítségével vegyel fel velünk a kapcsolatot és az üzenet küldéstől számított 5 munkanapon belül a keresni fogjuk Önt.
            </p>
        </div>
        <h1 id="urlap">Űrlap</h1>
        <form name="urlap" action="?oldal=srv_ell" onsubmit="return ellenoriz();" method="post">
            <div id="urlap">
                <label><input type="text" id="nev" name="nev" size="20" maxlength="40">Név (minimum 5 karakter): </label>
                <br/>
                <label><input type="text" id="email" name="email" size="30" maxlength="40">E-mail (kötelező): </label>
                <br/>
                <label> <textarea id="szoveg" name="szoveg" cols="40" rows="10"></textarea> Üzenet (kötelező): </label>
                <br/>
                <input id="kuld" type="submit" value="Küld">
                <button onclick="ellenoriz();" type="button">Ellenőriz</button>         
            </div>
        </form>
</body>