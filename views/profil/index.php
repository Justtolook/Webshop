<h2>Dein Profil</h2>
<div class="avatar">
    <img scr="icon/avatar.svg" height="200px" width="200px">
</div>
<!--Table-->
<table class="table table-hover">
    <tr>
        <td class="firstColumn">
            Kennung
        </td>
        <td>
            <?php echo $profil->getKennung() ?>
        </td>
    </tr>
    <tr>
        <td class="firstColumn">
            Vorname
        </td>
        <td>
            <?php echo $profil->getVorname() ?>
        </td>
    </tr>
    <tr>
        <td class="firstColumn">
            Nachname
        </td>
        <td>
            <?php echo $profil->getNachname() ?>
        </td>
    </tr>
    <tr>
        <td class="firstColumn">
            Strasse
        </td>
        <td>
            <?php echo $profil->getStrasse() ?>
        </td>
    </tr>
    <tr>
        <td class="firstColumn">
            Ort
        </td>
        <td>
            <?php echo $profil->getOrt() ?>
        </td>
    </tr>
    <tr>
        <td class="firstColumn">
            PLZ
        </td>
        <td>
           <?php echo $profil->getPLZ() ?>
        </td>
    </tr>
    <tr>
        <td class="firstColumn">
            Kontonummer
        </td>
        <td>
            <?php echo $profil->getKontonummer() ?>
        </td>
    </tr>
    <tr>
        <td class="firstColumn">
            Bankleitzahl
        </td>
        <td>
            <?php echo $profil->getBLZ() ?>
        </td>
    </tr>
    <tr>
        <td class="firstColumn">
            Institut
        </td>
        <td>
            <?php echo $profil->getInstitut() ?>
        </td>
    </tr>
</table>
