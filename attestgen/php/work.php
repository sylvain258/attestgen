<div class="login-form" id="work">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><i class="fas fa-briefcase"></i>Justificatif de déplacement professionnel</div>
                    <div class="card-body">
                        <h6>Je soussigné(e),</h6><br>
                        <form action="" method="get">
                            <div class="form-group row">
                                <label for="civilitepro" class="col-md-6">Nom et prénom de l'employeur :</label><br>
                                <div class="col-md-12">
                                    <input type="text" id="civilitepro" class="form-control" name="civilite" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fonctionemp" class="col-md-6">Fonctions :</label><br>
                                <div class="col-md-12">
                                    <input type="text" id="fonctionemp" class="form-control" name="fctemp" required autofocus>
                                </div>
                            </div>

                            <h6>certifie que les déplacements de la personne ci-après, entre son domicile et le ou les lieux d’exercice de son
activité professionnelle ou à l’occasion de l’exercice de ses fonctions, ne peuvent être différés ou sont
indispensables à l’exercice d’activités ne pouvant être organisées sous forme de télétravail : </h6><br>
                            
                            <div class="form-group row">
                                <label for="nomtravailleur" class="col-md-2">Nom :</label>
                                <div class="col-md-4">
                                    <input type="text" id="nomtravailleur" class="form-control" name="nomtravailleur" required>
                                </div>
                                    <label for="prenomtravailleur" class="col-md-2">Prénom :</label>
                                <div class="col-md-4">
                                    <input type="text" id="prenomtravailleur" class="form-control" name="prenomtravailleur" required>
                                    </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="naissancetravailleur" class="col-md-2">Date de naissance :</label>
                                <div class="col-md-4">
                                    <input type="date" id="naissancetravailleur" class="form-control" name="naissancetravailleur" required>
                                </div>
                                    <label for="lieunaissancetravailleur" class="col-md-2">Lieu de naissance :</label>
                                <div class="col-md-4">
                                    <input type="text" id="lieunaissancetravailleur" class="form-control" name="lieunaissance" required>
                                    </div>
                            </div>
                                                      
                             <div class="form-group row">
                                <label for="adressedomicile" class="col-md-2">Adresse du domicile</label>
                                <div class="col-md-1">
                                    <input type="text" id="numerodom" class="form-control" name="numerodom" placeholder="num">
                                 </div>
                                 
                                <div class="col-md-4">

                                    <input type="text" id="voiedom" class="form-control" name="voiedom" placeholder="voie" >
                                 </div>
                                 <div class="col-md-2">
                                    <input type="text" id="cpdom" class="form-control" name="cpdom" placeholder="codepostal" maxlength="5" >
                                 </div>
                                 <div class="col-md-3">
                                    <input type="text" id="villedom" class="form-control" name="villedom" placeholder="commune" >
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="natureprof" class="col-md-2">Nature de l'activité professionnelle</label>
                                <div class="col-md-10">
                                    <input type="text" id="natureprof" class="form-control" name="natureprof" required>
                                </div>
                            </div>
                            
                           
                            
                             <div class="form-group row">
                                <label for="lieuxex" class="col-md-2">Lieux d'exercice de l'act. pro.</label>
                                <div class="col-md-10">
                                    <input type="text" id="lieuxex" class="form-control" name="lieuxex" required>
                                </div>
                            </div>
                            
                             <div class="form-group row">
                                <label for="moyendep" class="col-md-2"> Moyen de déplacement</label>
                                <div class="col-md-10">
                                    <input type="text" id="moyendep" class="form-control" name="moyendep" required>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                 <label for="dureevalid" class="col-md-2"> Durée de validité</label>
                                <div class="form-group col-md-6">
                                   
                                    <input type="text" id="dureevalid" class="form-control" name="dureevalid" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <select name="typedate" id="typedate" class="form-control" >
                                            <option value="jours">jour(s)</option>
                                            <option value="semaines">semaine(s)</option>
                                            <option value="mois">mois</option>
                                            <option value="ans">ans</option>
                                    </select>
                                </div>
                            </div> 
    
                            
                            <div class="form-group row">
                                 <label for="dureevalid" class="col-md-2"> Nom et cachet de l'employeur</label>
                                <div class="form-group col-md-8">
                                   
                                    <input accept="image/png, image/jpeg" type="file" name="avatar" id="cachet" class="form-control" value="">
                                </div>
                                <div class="form-group col-md-2">
                                   
                                    <img id="preview" class="form-control">
                                    <canvas id="imgcanvas" style="display:none"><img id="preview" class="form-control"></canvas>
                                </div>
                            </div> 
                            
                            
                            
                            <div class="form-group row">
                                <label for="faitemp" class="col-md-2">Fait à :</label>
                                <div class="col-md-4">
                                    <input type="text" id="faitemp" class="form-control" name="faitemp" required>
                                </div>
                                    <label for="dateemp" class="col-md-2">le :</label>
                                <div class="col-md-4">
                                    <input type="date" id="dateemp" class="form-control" name="dateemp" required>
                                    </div>
                            </div>
                         
                            
                               <div class="col-md-12">
                               <button id="btnpro" type="button" class="btn btn-danger col-md-12">
                                    Générer
                                </button>
                              </div>
                            <div style="font-size:12px"><sup id='w1'>1</sup>
. Ce document, établi par l’employeur, est suffisant pour justifier les déplacements professionnels
d’un salarié, qu’il s’agisse :
                            <ul>
<li> du trajet habituel entre le domicile et le lieu de travail du salarié ou des déplacements
    entre les différents lieux de travail lorsque la nature de ses fonctions l’exige ;</li>
<li>des déplacements de nature professionnelle qui ne peuvent pas être différés, à la demande
    de l’employeur.</li>
</ul>
Il n’est donc pas nécessaire que le salarié se munisse, en plus de ce justificatif, de l’attestation
de déplacement dérogatoire.
Les travailleurs non-salariés, pour lesquels ce justificatif ne peut être établi, doivent en revanche
                                se munir de l’attestation de déplacement dérogatoire en cochant le premier motif de déplacement</div>
                             <p style="font-size:12px"><sup id='w2'>2</sup>
Indiquer tous les lieux d’exercice de l’activité du salarié, sauf si la nature même de cette activité,
qui doit être scrupuleusement renseignée, ne permet pas de les connaître à l’avance (par exemple :
livraisons, interventions sur appel, etc.).</p>
                             <p style="font-size:12px"><sup id='w3'>3</sup>
La durée de validité de ce justificatif est déterminée par l’employeur. Il n’est donc pas nécessaire
de le renouveler chaque jour. Cette durée doit tenir compte de l’organisation du travail mise en place
par l’employeur (rotations de personnel par exemple) ainsi que des périodes de congé ou de repos.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</div>

<script>
        
        
                   var button = document.getElementById('btnpro');
    $("#btnpro").on('click', function(){
                    var civilitepro  = document.getElementById('civilitepro');
                    var fonctionemp  = document.getElementById('fonctionemp');
                    var nomtravailleur  = document.getElementById('nomtravailleur');
                    var prenomtravailleur  = document.getElementById('prenomtravailleur');
                    var naissancetravailleur  = document.getElementById('naissancetravailleur');
                    var lieunaissancetravailleur  = document.getElementById('lieunaissancetravailleur');
                    var numerodom  = document.getElementById('numerodom');
                    var voiedom  = document.getElementById('voiedom');
                    var cpdom  = document.getElementById('cpdom');
                    var villedom  = document.getElementById('villedom');
                    var natactpro  = document.getElementById('natureprof');
                    var lieuxex  = document.getElementById('lieuxex');
                    var moyendep  = document.getElementById('moyendep');
                    var dureevalid  = document.getElementById('dureevalid');
                    var typedate = document.getElementById('typedate');
                    var faitemp  = document.getElementById('faitemp');
                    var dateemp  = document.getElementById('dateemp');
                    
                    var can = document.getElementById("imgcanvas");
                   var img = document.getElementById("preview");
                   var ctx = can.getContext("2d");
                    ctx.drawImage(img, 0, 0, 150, 150);       
                    var encodedBase = can.toDataURL();
                    console.log(encodedBase);

        
  var docDefinition = {
  content: [
    {
      layout: 'noBorders', // optional
      table: {
        // headers are automatically repeated if the table spans over multiple pages
        // you can declare how many rows should be treated as headers
        widths: [ '*'],

        body: [
          [ {text : 'JUSTIFICATIF DE DEPLACEMENT PROFESSIONNEL', alignment:'center', bold:'true',fontSize:15} ],
          [ {text : '\n', alignment:'center'} ],
          [ {text : 'En application du décret n°2020-1310 du 29 octobre 2020 prescrivant les mesures générales nécessaires pour faire face à l\'épidémie de Covid-19 dans le cadre de l\'état d\'urgence sanitaire.', italics : true, alignment : 'center'}],
          [ {text : '\n', alignment:'center'} ],
          [ {text : 'Je soussigné(e)'} ],
            [ {text : '\n\n'} ],

          [ {text : 'Nom et prénom de l\'employeur : ' + civilitepro.value } ],
          [ {text : 'Fonctions : ' + fonctionemp.value + '\n'} ],
                      [ {text : '\n\n'} ],

          [ {text : 'certifie que les déplacements de la personne ci-après, entre son domicile et le ou les lieux d’exercice de son activité professionnelle ou à l\'occasion de l’exercice de ses fonctions, ne peuvent être différés ou sontindispensables à l’exercice d’activités ne pouvant être organisées sous forme de télétravail : \n', italics : true } ],
            [ {text : '\n\n'} ],
          [ {text : 'Nom : ' + nomtravailleur.value } ],
          [ {text : 'Prénom : ' + prenomtravailleur.value } ],
          [ {text : 'Date de naissance : ' + naissancetravailleur.value } ],
          [ {text : 'Lieu de naissance : ' + lieunaissancetravailleur.value } ],
          [ {text : 'Adresse du domicile : ' + numerodom.value + ' ' + voiedom.value + ' ' + cpdom.value + ' ' + villedom.value } ],
          [ {text : 'Nature de l\'activité professionnelle : ' + natactpro.value } ],
          [ {text : 'Lieu d\'exercice de l\'activité professionnelle : ' + lieuxex.value } ],
          [ {text : 'Moyen de déplacement : ' + moyendep.value } ],
          [ {text : 'Durée de validité : ' + dureevalid.value + ' ' + typedate.value } ],
            ['\n'],
          [ {text : 'Nom et cachet de l\'employeur : ' } ],
          [ {text : civilitepro.value } ],
          [ {image : encodedBase} ],

          [ {text : 'Fait à : ' + faitemp.value } ],
          [ {text : 'Le : ' + dateemp.value } ],

        ]
      }
    }
  ]
};
        

    pdfMake.createPdf(docDefinition).open();

});
    
    
    </script>
  <script>
    $(document).ready(function (e) {
        $('#cachet').on('change', (e) => {
            console.log('change file');
            let that = e.currentTarget
            if (that.files && that.files[0]) {
                $(that).next('.avatar').html(that.files[0].name)
                let reader = new FileReader()
                reader.onload = (e) => {
                    $('#preview').attr('src', e.target.result)
                }
                reader.readAsDataURL(that.files[0])
            }
        })
    });
</script>