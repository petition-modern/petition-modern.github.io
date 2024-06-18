<!doctype html>

<html lang="en">

<head>
    <link rel="stylesheet" href="petition.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200&family=Sofia+Sans+Extra+Condensed:wght@200&display=swap" rel="stylesheet">
    <title>Petition</title>
    <style>
        @media print
        {
            .btnImpression
            {
                display: none;
            }
        }
    </style>
</head>

<body>



<div id="bloc_page">


    <h1>Petition Contre Pub Dans Les Boites Aux Lettres</h1>



<form action="process.php" method="post">
    <section id="main_section">

        <section id="first_line">
        <h3>Full Name</h3>
        <input name="first_name" id="first_input" type="text" placeholder="First Name" />
        <input name="last_name" id="second_input" type="text" placeholder="Last Name" />
        



    </section>

    <section id="second_line">
        <h3>Email</h3>
        <input id="third_input" type="text" placeholder="john.paul@hotmail.com" />
        
        <h3 id="number">Phone Number</h3>
        <input id="fourth_input" type="text" placeholder="0652332111" />

    </section>
    
    <section id="third_line">
        <h3>Country Name</h3>
        <input id="fifth_input" type="country" placeholder="France"/> <!--Put a rolling list-->
        
        <h3 id="city">City</h3>
        <input id="sixth_input" type="text" placeholder="Paris"/>

    </section>

    <section>
        <input id="seventh_input" id="last_input" type="text" placeholder="Adresse" />
        <input id="eighth_input" type="text" placeholder="Code Postal" />

    </section>


    </section>
    
    <h3>Comment</h3>
    
        <textarea id="comment" col="800" rows="10"></textarea>




<h3>Voulez-vous être au courant du l'avancé de cette pétition  ?</h2>

<input type="radio" name="newsletter" value="oui" id="newslet-oui" checked>
<label for="newslet-oui">Oui</label>

<input type="radio" name="newsletter" value="non" id="newslet-non">
<label for="newslet-oui">Non</label>






<h3>Votre avis sur cette démarche </h3>

<select name="avis" class="avis">

  <option value="avis_pour">Pour</option>
  <option value="avis_contre">Contre</option>
</select>

        <h3>Signature</h3>
        <!--<textarea id="sign" col="50" rows="10"></textarea>-->
    <!--<form>-->
        
            <section class="date_lieu">
                <label for="lieu"></label>
                <label for="date">&nbsp;</label>
                <input name="lieu" type="text" class="lieu" placeholder="lieu"/>
                <input name="date" type="text" class="date" placeholder="date"/><br/><br/>
            </section>

            <input type="checkbox" name="choix" value="response01" id="nom-01">
            <label class="approuve" for=nom-01>Approuvé et Signé</label><br><br>
            
            <canvas style="border: 1px solid #999;" name="sign" id="signature" width="600" height="200"></canvas><br/><br/>
            <button type="button" class="btnImpression" onclick="effacer();" id="efface">Effacer</button> &nbsp; <br><br>
            <!--<button oneclick="apercu();" type="button" class="btnImpression">Generer</button>-->

            
    
        <input class="submit" type="submit">

    <!--</form>-->


</div>

</form>





<script type="text/javascript">
    var zoneSigner = document.getElementById("signature");

    zoneSigner.addEventListener("mousedown", sourisBas); /*on va attribuer l'attribut mousedown à la fonction sourisBas */
    zoneSigner.addEventListener("mousemove", sourisBouge);
    zoneSigner.addEventListener("mouseup", sourisHaut);

    var trace = zoneSigner.getContext("2d"); /* va servir a tracer la signature dans la zone du canvas */
    var started = false;

    function sourisBas(ev) 
    {
        started = true;
        trace.beginPath();
        trace.moveTo(ev.offsetX, ev.offsetY);
    }

    function sourisBouge(ev)
    {
        if(started)
        {
            trace.lineTo(ev.offsetX, ev.offsetY);
            trace.stroke();
        }
    }

    function sourisHaut(ev)
    {
        started =  false;
    }

    function effacer()
    {
        trace.clearRect(0,0, zoneSigner.width, zoneSigner.height);
    }

    function apercu()
    {
        zoneSigner.style.cssText = "border:none;";
        window.print();
    }


</script>



</body>



</html>