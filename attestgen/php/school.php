<div class="login-form" id="school">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><i class="fas fa-school"></i>Justificatif de déplacement scolaire</div>
                    <div class="card-body">
                        <h6>Je soussigné(e),</h6><br>
                        <form action="" method="get">
                            <div class="form-group row">
                                <label for="civiliteschool" class="col-md-6">Nom et prénom des parents, ou responsable de l'enfant dûment identifié :</label><br>
                                <div class="col-md-12">
                                    <input type="text" id="civiliteschool" class="form-control" name="civilite" required autofocus>
                                </div>
                            </div>
                            
                            <h6>certifie le caractère indispensable de mes déplacements, entre mon domicile et le lieu d'accueil de l'enfant :</h6><br>
                            
                            <div class="form-group row">
                                <label for="nomenfant" class="col-md-2">Nom :</label>
                                <div class="col-md-4">
                                    <input type="text" id="nomenfant" class="form-control" name="nomenfant" required>
                                </div>
                                    <label for="prenomenfant" class="col-md-2">Prénom :</label>
                                <div class="col-md-4">
                                    <input type="text" id="prenomenfant" class="form-control" name="prenomenfant" required>
                                    </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="naissanceenfant" class="col-md-2">Date de naissance :</label>
                                <div class="col-md-10">
                                    <input type="date" id="naissanceenfant" class="form-control" name="naissanceenfant" required>
                                </div>
                            </div>
                                                      
                                                      
                             <div class="form-group row">
                                <label for="moyendepenfant" class="col-md-2"> Moyen de déplacement</label>
                                <div class="col-md-10">
                                    <input type="text" id="moyendepenfant" class="form-control" name="moyendepenfant" required>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="nometablissement" class="col-md-2">Etablissement :</label>
                                <div class="col-md-10">
                                    <input type="text" id="nometablissement" class="form-control" name="nometablissement" required>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="adresseetab" class="col-md-2">Adresse de l'établissement</label>
                                <div class="col-md-1">
                                    <input type="text" id="numeroetab" class="form-control" name="numeroetab" placeholder="num">
                                 </div>
                                 
                                <div class="col-md-4">

                                    <input type="text" id="voieetab" class="form-control" name="voieetab" placeholder="voie" >
                                 </div>
                                 <div class="col-md-2">
                                    <input type="text" id="cpetab" class="form-control" name="cpetab" placeholder="codepostal" maxlength="5" >
                                 </div>
                                 <div class="col-md-3">
                                    <input type="text" id="villeetab" class="form-control" name="villeetab" placeholder="commune" >
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                 <label for="cachetschool" class="col-md-2"> Cachet de l'établissement</label>
                                <div class="form-group col-md-8">
                                   
                                    <input accept="image/png, image/jpeg" type="file" name="avatar1" id="cachetschool" class="form-control" value="">
                                </div>
                                <div class="form-group col-md-2">
                                   
                                    <img id="previewschool" class="form-control">
                                    <canvas id="imgcanvasschool" style="display:none"><img id="previewschool" class="form-control"></canvas>
                                </div>
                            </div> 
                            
                            
                            
                            <div class="form-group row">
                                <label for="faitschool" class="col-md-2">Fait à :</label>
                                <div class="col-md-4">
                                    <input type="text" id="faitschool" class="form-control" name="faitschool" required>
                                </div>
                                    <label for="dateschool" class="col-md-2">le :</label>
                                <div class="col-md-4">
                                    <input type="date" id="dateschool" class="form-control" name="dateschool" required>
                                    </div>
                            </div>
                         
                            
                               <div class="col-md-12">
                               <button id="btn-school" type="button" class="btn btn-danger col-md-12">
                                    Générer
                                </button>
                              </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</div>

  <script>
        
        
    $("#btn-school").on('click', function(){
                    var civiliteschool  = document.getElementById('civiliteschool');
                    var nomenfant  = document.getElementById('nomenfant');
                    var prenomenfant  = document.getElementById('prenomenfant');
                    var naissanceenfant  = document.getElementById('naissanceenfant');
                    var moyendepenfant  = document.getElementById('moyendepenfant');
                    var nometablissement  = document.getElementById('nometablissement');
                    var numeroetab  = document.getElementById('numeroetab');
                    var voieetab  = document.getElementById('voieetab');
                    var cpetab  = document.getElementById('cpetab');
                    var villeetab  = document.getElementById('villeetab');
                    var cachetschool  = document.getElementById('cachetschool');

                    
                    var can1 = document.getElementById("imgcanvasschool");
                   var img1 = document.getElementById("previewschool");
                   var ctx1 = can1.getContext("2d");
                    ctx1.drawImage(img1, 0, 0, 150, 150);       
                    var encodedBase1 = can1.toDataURL();
                    console.log(encodedBase1);

        
  var docDefinition1 = {
  content: [
    {
      layout: 'noBorders', // optional
      table: {
        // headers are automatically repeated if the table spans over multiple pages
        // you can declare how many rows should be treated as headers
        widths: [ '*'],

        body: [
          [ {text : 'JUSTIFICATIF DE DEPLACEMENT SCOLAIRE', alignment:'center', bold:'true',fontSize:15} ],
          [ {text : '\n', alignment:'center'} ],
          [ {text : 'En application du décret n°2020-1310 du 29 octobre 2020 prescrivant les mesures générales nécessaires pour faire face à l\'épidémie de Covid-19 dans le cadre de l\'état d\'urgence sanitaire.', italics : true, alignment : 'center'}],
          [ {text : '\n', alignment:'center'} ],
          [ {text : 'Je soussigné(e)'} ],
            [ {text : '\n\n'} ],

          [ {text : 'Nom et prénom des parents, ou responsable de l\'enfant dûment identifié : ' + civiliteschool.value } ],
            [ {text : '\n\n'} ],

          [ {text : 'certifie le caractère indispensable de mes déplacements, entre mon domicile et le lieu d\'accueil de l\'enfant : \n', italics : true } ],
            [ {text : '\n\n'} ],
          [ {text : 'Nom : ' + nomenfant.value } ],
          [ {text : 'Prénom : ' + prenomenfant.value } ],
          [ {text : 'Date de naissance : ' + naissanceenfant.value } ],
          [ {text : 'Moyen de déplacement : ' + moyendepenfant.value } ],
          [ {text : 'Nom de l\'établissement : ' + nometablissement.value } ],
          [ {text : 'Adresse de l\'etablissement : ' + numeroetab.value + ' ' + voieetab.value + ' ' + cpetab.value + ' ' + villeetab.value } ],

          [ {text : 'Cachet de l\'établissement : ' } ],
          [ {image : encodedBase1} ],

          [ {text : 'Fait à : ' + faitschool.value } ],
          [ {text : 'Le : ' + dateschool.value } ],

        ]
      }
    }
  ]
};
        

    pdfMake.createPdf(docDefinition1).open();

});
    
    
    </script>
     <script>
    $(document).ready(function (e) {
        $('#cachetschool').on('change', (e) => {
            console.log('change file');
            let that = e.currentTarget
            if (that.files && that.files[0]) {
                $(that).next('.avatar1').html(that.files[0].name)
                let reader = new FileReader()
                reader.onload = (e) => {
                    $('#previewschool').attr('src', e.target.result)
                }
                reader.readAsDataURL(that.files[0])
            }
        })
    });
</script>