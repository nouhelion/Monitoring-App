
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v10 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/sty.css"/>
	<script language="javascript" type="text/javascript">
    function dynamicdropdown(listindex)
    {
        switch (listindex)
        {
        case "Rabat-Salé-Kénitra" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Rabat");
            document.getElementById("province").options[2]=new Option("Salé");
			document.getElementById("province").options[3]=new Option("Skhirate, Témara");
			document.getElementById("province").options[4]=new Option("Kénitra");
			document.getElementById("province").options[5]=new Option("Khémisset");
			document.getElementById("province").options[6]=new Option("Sidi Kacem");
			document.getElementById("province").options[7]=new Option("Sidi Slimane");
            break;
        case "Casablanca-Settat" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Casablanca");
            document.getElementById("province").options[2]=new Option("Mohammédia");
            document.getElementById("province").options[3]=new Option("El Jadida");
			document.getElementById("province").options[4]=new Option("Nouaceur");
			document.getElementById("province").options[5]=new Option("Médiouna");
			document.getElementById("province").options[6]=new Option("Benslimane");
			document.getElementById("province").options[7]=new Option("Berrechid");
			document.getElementById("province").options[8]=new Option("Settat");
			document.getElementById("province").options[9]=new Option("Sidi Bennour");
            break;
		case "Fès - Meknès" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Fès");
            document.getElementById("province").options[2]=new Option("Meknès");
            document.getElementById("province").options[3]=new Option("El Hajeb");
			document.getElementById("province").options[4]=new Option("Ifrane");
			document.getElementById("province").options[5]=new Option("Moulay Yaâcoub");
			document.getElementById("province").options[6]=new Option("Séfrou");
			document.getElementById("province").options[7]=new Option("Boulemane");
			document.getElementById("province").options[8]=new Option("Taounate");
			document.getElementById("province").options[9]=new Option("Taza");
            break;
		case "Marrakech-Safi" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Marrakech");
            document.getElementById("province").options[2]=new Option("Chichaoua");
            document.getElementById("province").options[3]=new Option("Al Haouz");
			document.getElementById("province").options[4]=new Option("El Kelaâ des Sraghna");
			document.getElementById("province").options[5]=new Option("Essaouira");
			document.getElementById("province").options[6]=new Option("Rehamna");
			document.getElementById("province").options[7]=new Option("Safi");
			document.getElementById("province").options[8]=new Option("Youssoufia");
            break;
		case "Tanger – Tétouan – Al Hoceima" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Tanger, Assilah");
            document.getElementById("province").options[2]=new Option("M’diq, Fnideq");
            document.getElementById("province").options[3]=new Option("Tétouan");
			document.getElementById("province").options[4]=new Option("Fahs, Anjra");
			document.getElementById("province").options[5]=new Option("Larache");
			document.getElementById("province").options[6]=new Option("Al Hoceïma");
			document.getElementById("province").options[7]=new Option("Chefchaouen");
			document.getElementById("province").options[8]=new Option("Ouezzane");
            break;
		case "Oriental" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Oujda, Angad");
            document.getElementById("province").options[2]=new Option("Nador");
            document.getElementById("province").options[3]=new Option("Driouch");
			document.getElementById("province").options[4]=new Option("Jerada");
			document.getElementById("province").options[5]=new Option("Berkane");
			document.getElementById("province").options[6]=new Option("Taourirt");
			document.getElementById("province").options[7]=new Option("Guercif");
			document.getElementById("province").options[8]=new Option("Figuig");
            break;
		case "Béni Mellal-Khénifra" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Béni, Mellal");
            document.getElementById("province").options[2]=new Option("Azilal");
            document.getElementById("province").options[3]=new Option("Fquih Ben Salah");
			document.getElementById("province").options[4]=new Option("Khénifra");
			document.getElementById("province").options[5]=new Option("Khouribga");
            break;
		case "Drâa-Tafilalet" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Errachidia");
            document.getElementById("province").options[2]=new Option("Ouarzazate");
            document.getElementById("province").options[3]=new Option("Midelt");
			document.getElementById("province").options[4]=new Option("Tinghir");
			document.getElementById("province").options[5]=new Option("Zagora");
            break;
		case "Souss-Massa" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Agadir Ida, Outanane");
            document.getElementById("province").options[2]=new Option("Inezgane, Aït Melloul");
            document.getElementById("province").options[3]=new Option("Chtouka, Aït Baha");
			document.getElementById("province").options[4]=new Option("Taroudant");
			document.getElementById("province").options[5]=new Option("Tiznit");
			document.getElementById("province").options[6]=new Option("Tata");
            break;
		case "Guelmim-Oued Noun" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Guelmim");
            document.getElementById("province").options[2]=new Option("Assa-Zag");
            document.getElementById("province").options[3]=new Option("Tan Tan");
			document.getElementById("province").options[4]=new Option("Sidi Ifni");
            break;
		case "Laâyoune-Sakia El Hamra" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Laâyoune");
            document.getElementById("province").options[2]=new Option("Boujdour");
            document.getElementById("province").options[3]=new Option("Tarfaya");
			document.getElementById("province").options[4]=new Option("Es-Semara");
            break;
		case "Dakhla-Oued Ed Dahab" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Oued Ed Dahab");
            document.getElementById("province").options[2]=new Option("Aousserd");
            break;
        }
        return true;
    }
    </script>
</head>
<body >
	<div class="big-container">
        <form>
            <div class="container">
                <div class="form-container">
                    <h2 class="form-title">General Information</h2>
                    <div class="first-form">
                    <input name="Numero" type="text" class="form-input-numero" id="Numero" placeholder="Numéro"required>
                    <input name="Developpeur" type="text" class="form-input-dev" id="Developpeur" placeholder="Développeur" required>
                    <input name="Nom du projet" type="text" class="form-input-nom" id="Nom du projet" placeholder="Nom du projet">
					<select name="Region" id="Region"  class="form-select-reg" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);" required>
                            <option value="">Région</option>
                            <option value="Tanger – Tétouan – Al Hoceima">Tanger – Tétouan – Al Hoceima</option>
                            <option value="Oriental">Oriental</option>
                            <option value="Fès - Meknès">Fès - Meknès</option>
                            <option value="Rabat-Salé-Kénitra">Rabat-Salé-Kénitra</option>
                            <option value="Béni Mellal-Khénifra">Béni Mellal-Khénifra</option>
                            <option value="Casablanca-Settat">Casablanca-Settat</option>
                            <option value="Marrakech-Safi">Marrakech-Safi</option>
                            <option value="Drâa-Tafilalet">Drâa-Tafilalet</option>
                            <option value="Souss-Massa">Souss-Massa</option>
                            <option value="Guelmim-Oued Noun">Guelmim-Oued Noun</option>
                            <option value="Laâyoune-Sakia El Hamra">Laâyoune-Sakia El Hamra</option>
                            <option value="Dakhla-Oued Ed Dahab">Dakhla-Oued Ed Dahab</option>
                        </select>
						  <script type="text/javascript" language="JavaScript">
                                document.write('<select name="province" id="province"><option value="">Selectionner province</option></select>')
                          </script>
					    <noscript>
						<select name="Province" id="Province"  class="form-select-prov" required>
                            <option value="">Selectionner province</option>
                            <option value="Oued Ed Dahab">Oued Ed Dahab</option>
                            <option value="Aousserd">Aousserd</option>
                        </select>
						</noscript>
						<input name="Localite" type="text" class="form-input-loc" id="Localite" placeholder="Localité">
                        <input name="Puissance" type="text" class="form-input-pui" id="Puissance" placeholder="Puissance (MW)">
                        <input name="Productible previsionnel" type="text" class="form-input-prod" id="Productible prévisionnel" placeholder="Productible prévisionnel (GWh/an)">
                        <input name="Source energie" type="text" class="form-input-sou" id="Source energie" placeholder="Source énergie">
                        <input name="Co2 evite TCO2/an" type="text" class="form-input-co2" id="Co2 évité TCO2/an" placeholder="Co2 évité TCO2/an">
                        <input name="Depot a la DEREE" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-input-derr" id="Depot à la DEREE" placeholder="Dépôt à la DEREE">
				        <input name="Envoi du dossier a l'ONEE" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-input-derr" id="Envoi du dossier a l'ONEE" placeholder="Envoi du dossier a l'ONEE"> 
                        <input name="Réponse ONEE" type="text" class="form-input-rep" id="Réponse ONEE" placeholder="Réponse ONEE">                   
                    </div>
                </div>
                <div class="form-container-right">
                    <h2>Contact Details</h2>
                 <div class="second-form">
                    <input name="Notification du Demandeur pour complément du dossier" type="text" class="form-input-nom" id="Notification du Demandeur pour complement du dossier" placeholder="Notification du Demandeur pour complément du dossier">
                    <input name="Dépôt du complément du dossier par le développeur" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-input-date" id="Dépôt du complément du dossier par le développeur" placeholder="Dépôt du complément du dossier par le développeur">
                    <input name="Envoi du complement du dossier à l'ONEE" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-input-date" id="Envoi du complement du dossier à l'ONEE" placeholder="Envoi du complément du dossier à l'ONEE">
                    <input name="Avis de l'ONEE" type="text" class="form-input-avis" id="Avis de l'ONEE" placeholder="Avis de l'ONEE">
                    <input name="Avis MEME" type="text" class="form-input-avis" id="Avis MEMEE" placeholder="Avis MEME">   
                    <input name="Observations" type="text" class="form-input-obs" id="Observations" placeholder="Observations">  
                    <input name="Coordonnées Lambert(m)	" type="text" class="form-input-coo" id="Coordonnées Lambert(m)" placeholder="Coordonnées Lambert(m)">    
                    <input name="Coordonnees Geographique" type="text" class="form-input-geo" id="Coordonnées Géographique" placeholder="Coordonnées Géographique">
                    <input name="Echelle de la carte geographique" type="text" class="form-input-egeo" id="Echelle de la carte géographique" placeholder="Echelle de la carte géographique">
                    <input name="Investissement du projet" type="text" class="form-input-inv" id="Investissement du projet" placeholder="Investissement du projet">
                    <button type="submit" class="btn">Submit</button>
                 </div>
                </div>
            </div>
        </form>
    </div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>