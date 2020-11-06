<div class="login-form" id="derogatoire">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header "><i class="fas fa-car"></i>Attestation de déplacement dérogatoire</div>
                    <div class="card-body">
                        <h6>Je soussigné(e),</h6><br>
                        <form action="" method="">
                            <div class="form-group row">
                                <label for="nomderog" class="col-md-2">Nom :</label>
                                <div class="col-md-4">
                                    <input type="text" id="nomderog" class="form-control" name="nomderog" >
                                </div>
                                    <label for="prenomderog" class="col-md-2">Prénom :</label>
                                <div class="col-md-4">
                                    <input type="text" id="prenomderog" class="form-control" name="prenomderog" >
                                    </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="naissancederog" class="col-md-2">Né(e) le :</label>
                                <div class="col-md-10">
                                    <input type="date" id="naissancederog" class="form-control" name="naissancederog" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lieunaissancederog" class="col-md-2">A :</label>
                                <div class="col-md-10">
                                    <input type="text" id="lieunaissancederog" class="form-control" name="lieunaissancederog" >
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="homederog" class="col-md-2">Demeurant :</label>
                                <div class="col-md-10">
                                    <input type="text" id="homederog" class="form-control" name="homederog" >
                                </div>
                            </div>
                            
                            <h6>certifie que mon déplacement est lié au motif suivant (cocher la case) autorisé par le décret n°2020-1310 du 29 octobre 2020 prescrivant les mesures générales pour faire face à l'épidémie de Covid19 dans le cadre de l'état d'urgence sanitaire<sup><a href="#1">1</a></sup> :</h6>
                            

                            
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <input type="checkbox" id="domicilepro" class="form-control" name="domicilepro">
                                </div>
                                <label for="domicilepro" class="col-md-10">Déplacements entre le domicile et le lieu d’exercice de l’activité professionnelle ou un
établissement d’enseignement ou de formation, déplacements professionnels ne pouvant être
différés<sup><a href="#2">2</a></sup>
, déplacements pour un concours ou un examen.</label>

                            </div>
                            
                             <div class="form-group row">
                                <div class="col-md-2">
                                    <input type="checkbox" id="premnec" class="form-control" name="domicilepro" onclick="domicile()">
                                </div>
                                <label for="premnec" class="col-md-10">Déplacements pour effectuer des achats de fournitures nécessaires à l'activité
                                    professionnelle, des achats de première nécessité<sup><a href="#3">3</a></sup> dans des établissements dont les activités
demeurent autorisées, le retrait de commande et les livraisons à domicile.
</label>

                            </div>
                            
                                  <div class="form-group row">
                                <div class="col-md-2">
                                    <input type="checkbox" id="sante" class="form-control" name="sante">
                                </div>
                                <label for="sante" class="col-md-10">Consultations, examens et soins ne pouvant être assurés à distance et l’achat de
médicaments.
</label>

                            </div>
                            
                                      <div class="form-group row">
                                <div class="col-md-2">
                                    <input type="checkbox" id="famille" class="form-control" name="famille">
                                </div>
                                <label for="famille" class="col-md-10">Déplacements pour motif familial impérieux, pour l'assistance aux personnes vulnérables et
précaires ou la garde d'enfants
</label>

                            </div>
                            
                                                                  <div class="form-group row">
                                <div class="col-md-2">
                                    <input type="checkbox" id="handicap" class="form-control" name="handicap">
                                </div>
                                <label for="handicap" class="col-md-10">Déplacement des personnes en situation de handicap et leur accompagnant
</label>

                            </div>
                            
                                                                  <div class="form-group row">
                                <div class="col-md-2">
                                   <input type="checkbox" id="sport" class="form-control" name="sport">
                                </div>
                                <label for="sport" class="col-md-10">Déplacements brefs, dans la limite d'une heure quotidienne et dans un rayon maximal d'un
kilomètre autour du domicile, liés soit à l'activité physique individuelle des personnes, à
l'exclusion de toute pratique sportive collective et de toute proximité avec d'autres personnes,
soit à la promenade avec les seules personnes regroupées dans un même domicile, soit aux
besoins des animaux de compagnie.
</label>

                            </div>
                            
                                                                    <div class="form-group row">
                                <div class="col-md-2">
                                    <input type="checkbox" id="justice" class="form-control" name="justice">
                                </div>
                                <label for="justice" class="col-md-10">Convocation judiciaire ou administrative et pour se rendre dans un service public
</label>

                            </div>
                            
                            
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <input type="checkbox" id="admin" class="form-control" name="admin">
                                </div>
                                <label for="admin" class="col-md-10">Participation à des missions d'intérêt général sur demande de l'autorité administrative

</label>

                            </div>
                                         <div class="form-group row">
                                <div class="col-md-2">
                                   <input type="checkbox" id="schoolderog" class="form-control" name="schoolderog">
                                </div>
                                <label for="schoolderog" class="col-md-10">Déplacement pour chercher les enfants à l’école et à l’occasion de leurs activités
périscolaires


</label>
                                             

                            </div>
                            
                            
                             <div class="form-group row">
                                <label for="date3" class="col-md-2">Fait le :</label>
                                <div class="col-md-4">
                                    <input type="date" id="date3" class="form-control" name="date3" >
                                </div>
                                    <label for="hourderog" class="col-md-2">A :</label>
                                <div class="col-md-4">
                                    <input type="time" id="hourderog" class="form-control" name="hourderog" >
                                    </div>
                            </div>
                            <p style="font-size:12px" class="col-md-10 offset-md-2">(Date et heure de début de sortie à mentionner obligatoirement)</p>
                            <br>
                           <div class="form-group row">
                                 <label for="signaturederog" class="col-md-2"> Signature</label>
                                <div class="form-group col-md-8">
                                   
                                    <input accept="image/png, image/jpeg" type="file" name="avatar2" id="signaturederog" class="form-control" value="avatar2">
                                </div>
                                <div class="form-group col-md-2">
                                   
                                    <img id="previewderog" class="form-control">
                                    <canvas id="imgcanvasderog" style="display:none"><img id="previewderog" class="form-control"></canvas>
                                </div>
                            </div>
                            <div class="col-md-12">
                             <button id="btn-derog" type="submit" class="btn btn-danger col-md-12">
                                    Générer
                                </button>
                              </div>
                            <br><br>
                            <p style="font-size:12px"><sup id='1'>1</sup>
Les personnes souhaitant bénéficier de l'une de ces exceptions doivent se munir s'il y a lieu, lors de leurs déplacements
hors de leur domicile, d'un document leur permettant de justifier que le déplacement considéré entre dans le champ de l'une
de ces exceptions.</p>
                             <p style="font-size:12px"><sup id='2'>2</sup>
A utiliser par les travailleurs non-salariés, lorsqu'ils ne peuvent disposer d'un justificatif de déplacement établi par leur
employeur.</p>
                             <p style="font-size:12px"><sup id='3'>3</sup>
Y compris les acquisitions à titre gratuit (distribution de denrées alimentaires...) et les déplacements liés à la perception
de prestations sociales et au retrait d'espèces.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</div>

          <script> 
              
    $("#btn-derog").on('click', function(){
                    var nomderog  = document.getElementById('nomderog');
                    var prenomderog  = document.getElementById('prenomderog');
                    var naissancederog  = document.getElementById('naissancederog');
                    var lieunaissancederog  = document.getElementById('lieunaissancederog');
                    var homederog  = document.getElementById('homederog');
                   var domicilepro  = document.getElementById('domicilepro');
                   var premnec  = document.getElementById('premnec');
                     var sante  = document.getElementById('sante');
                    var famille  = document.getElementById('famille');
                    var handicap  = document.getElementById('handicap');
                    var sport  = document.getElementById('sport');
                    var justice = document.getElementById('justice');
                    var admin  = document.getElementById('admin');
                    var schoolderog  = document.getElementById('schoolderog');

//domicilepro
        var checkdom =' ';
        if(domicilepro.checked){
                    var checkdom ='X  '}
        else {var checkdom =' ' };

//premierenecessite
        var checkprem =' ';
        if(premnec.checked){
                    var checkprem ='X  '}
        else {var checkprem =' '  };

//sante     
        var checksante =' ';
        if(sante.checked){
                    var checksante ='X  '}
        else {var checksante =' '};
        
//famille        
        var checkfamille =' ';
        if(famille.checked){
                    var checkfamille ='X  '}
        else{
            var checkfamille =' '
            };
        
//handicap
        var checkhand =' ';
        if(handicap.checked){
                    var checkhand ='X  '}
        else{
            var checkhand =' '
        };
        
//sport
        var checksport =' ';
        if(sport.checked){
                    var checksport ='X  '}
        else{
            var checksport =' '
            };

//justice
        var checkjust =' ';
        if(justice.checked){
                    var checkjust ='X  '}
        else{
            var checkjust =' '
            };
        
//admin
        var checkadmin =' ';
        if(admin.checked){
                    var checkadmin ='X  '}
        else{
            var checkadmin =' '
            };

//derogation ecole
        var checkschool =' ';
        if(schoolderog.checked){
                    var checkschool ='X  '}
        else{
            var checkschool = ' '
            };
        
//fin formulaire
                   var date3  = document.getElementById('date3');
                   var hourderog  = document.getElementById('hourderog');
              
        

     var can2 = document.getElementById("imgcanvasderog");
     var img2 = document.getElementById("previewderog");
     var ctx2 = can2.getContext("2d");
     ctx2.drawImage(img2, 0, 0, 80, 80);       
     var encodedBase2 = can2.toDataURL();
     console.log(encodedBase2);

        
  var docDefinition2 = {
  content: [
    {
      layout: 'noBorders', // optional
      table: {
        // headers are automatically repeated if the table spans over multiple pages
        // you can declare how many rows should be treated as headers
        widths: [ '*'],

        body: [
          [ {text :'ATTESTATION DE DEPLACEMENT DEROGATOIRE', alignment:'center', bold:'true', fontSize:15} ],
          [ {text : 'En application du décret n°2020-1310 du 29 octobre 2020 prescrivant les mesures générales nécessaires pour faire face à l\'épidémie de Covid-19 dans le cadre de l\'état d\'urgence sanitaire.', italics : true, alignment : 'center', margin: [0, 00, 0, 20]}],
          [ {text : 'Je soussigné(e)'} ],
          [ {text : 'Nom & prénom: ' + nomderog.value + ' ' + prenomderog.value } ],
          [ {text : 'Né(e) le :' + naissancederog.value} ],
          [ {text : 'A' + lieunaissancederog.value } ],
          [ {text : 'Demeurant à : ' + homederog.value } ],
            ]}},
          {text:'certifie que mon déplacement est lié au motif suivant (cocher la case) autorisé par le décret n°2020-1310 du 29 octobre 2020 prescrivant les mesures générales nécessaires pour faire face à l\'épidémie de Covid19 dans le cadre de l\'état d\'urgence sanitaire :', italics : true},
      '\n',
        {
        layout:'noBorders',
        table: {
            widths:[30, 'auto'],
            body:[        
            [checkdom, 'Déplacements entre le domicile et le lieu d’exercice de l’activité professionnelle ou un établissement d’enseignement ou de formation, déplacements professionnels ne pouvant être différés, déplacements pour un concours ou un examen.'   ],
            [checkprem, 'Déplacements pour effectuer des achats de fournitures nécessaires à l\'activité professionnelle, des achats de première nécessité dans des établissements dont les activités demeurent autorisées, le retrait de commande et les livraisons à domicile.'  ],
            [checksante, 'Consultations, examens et soins ne pouvant être assurés à distance et l’achat de médicaments.'],
            [checkfamille, 'Déplacements pour motif familial impérieux, pour l\'assistance aux personnes vulnérables et précaires ou la garde d\'enfants'],
            [checkhand, 'Déplacement des personnes en situation de handicap et leur accompagnant.'],
            [checksport, 'Déplacements brefs, dans la limite d\'une heure quotidienne et dans un rayon maximal d\'un kilomètre autour du domicile, liés soit à l\'activité physique individuelle des personnes, à l\'exclusion de toute pratique sportive collective et de toute proximité avec d\'autres personnes, soit à la promenade avec les seules personnes regroupées dans un même domicile, soit aux besoins des animaux de compagnie.'],
            [checkjust, 'Convocation judiciaire ou administrative et pour se rendre dans un service public.'],
            [checkadmin, 'Participation à des missions d\'intérêt général sur demande de l\'autorité administrative.'],
            [checkschool, 'Déplacement pour chercher les enfants à l’école et à l’occasion de leurs activités périscolaires' ]
                ]}},
            '\n',
            {
            layout:'noBorders',
            table: {
            widths:['*'],
            body:[
            ['Fait le : ' + date3.value],
            ['A : ' + hourderog.value], 
            ['Signature'], 
            [{image: encodedBase2 }] 

            ]}},
           

]};

    pdfMake.createPdf(docDefinition2).open();

});
    </script>
<script>
    $(document).ready(function (e) {
        $('#signaturederog').on('change', (e) => {
            console.log('change file');
            let that = e.currentTarget
            if (that.files && that.files[0]) {
                $(that).next('.avatar2').html(that.files[0].name)
                let reader = new FileReader()
                reader.onload = (e) => {
                    $('#previewderog').attr('src', e.target.result)
                }
                reader.readAsDataURL(that.files[0])
            }
        })
    });
</script>