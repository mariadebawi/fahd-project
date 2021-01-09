<?php include('./header.php'); ?>


  <div class="main "style="background-image: url('./assets/img/bg.jpg'); background-size: cover; background-position: top center;">

    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <!--      Wizard container        -->
                <div class="wizard-container">
                    <div class="card wizard-card" data-color="green" id="wizard">
                        <form action="" method="">
                    <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

                            <div class="wizard-header">
                                <h3 class="wizard-title">
                                    Decrire votre experience
                                </h3>
                                <h5>Ces informations peuvent aider plusieurs personnes pour vivire votre aventures </h5>
                            </div>
                            <div class="wizard-navigation">
                                <ul>
                                    <li><a href="#details" data-toggle="tab">Le lieu</a></li>
                                    <li><a href="#captain" data-toggle="tab">Mes Images</a></li>
                                    <li><a href="#description" data-toggle="tab">Decrire </a></li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane" id="details">
                                    <div class="row">
                                       
                                        <div class="col-sm-6">
                                 
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">place</label>
                                                <input type="text" class="form-control" placeholder="Nom de place...">
                                              </div>


                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Adesse</label>
                                                <input type="text" class="form-control" placeholder="adresse...">
                                              </div>

                                        </div>


                                        <div class="col-sm-6">

                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">pays</label>
                                                <input type="text" class="form-control" placeholder="pays...">
                                              </div>


                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Date</label>
                                                <input type="date" class="form-control" placeholder="Date...">
                                              </div>


                                          

                                        </div>



                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Saison</label>
                                                <select class="form-control selectpicker" data-style="btn btn-link" id="exampleFormControlSelect1">
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                  <option>4</option>
                                                  <option>5</option>
                                                </select>
                                              </div>
                                            

                                              <div class="form-group">
                                                <label for="exampleInputEmail1">nombre de jours</label>
                                                <input  type="number" min="1"  class="form-control" placeholder="nombre de jours...">
                                              </div>

                                        </div>


                                        <div class="col-sm-6">

                                            <div class="form-check form-check-radio form-check-inline">
                                                <label class="form-check-label">
                                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Guide
                                                  <span class="circle">
                                                      <span class="check"></span>
                                                  </span>
                                                </label>
                                              </div>

                                              <div class="form-check form-check-radio form-check-inline">
                                                <label class="form-check-label">
                                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Personel
                                                  <span class="circle">
                                                      <span class="check"></span>
                                                  </span>
                                                </label>
                                              </div>




                                              <br>

                                              <div class="form-check form-check-radio form-check-inline">
                                                <label class="form-check-label">
                                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option1"> Safari
                                                  <span class="circle">
                                                      <span class="check"></span>
                                                  </span>
                                                </label>
                                              </div>
                                              <div class="form-check form-check-radio form-check-inline">
                                                <label class="form-check-label">
                                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Hotel
                                                  <span class="circle">
                                                      <span class="check"></span>
                                                  </span>
                                                </label>
                                              </div>




                                            
                                            

                                        </div>
                                     
                                    </div>
                                </div>
                                <div class="tab-pane" id="captain">
                                    <h4 class="info-text"> Télécharger quelques photos </h4>
                                    <div class="row">
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="row">

                                                <div class="col-sm-12">

          
                                                    <div class="form-group form-file-upload form-file-multiple">
                                                        <input type="file" multiple accept="image/*"  id="gallery-photo-add"   class="inputFileHidden">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control inputFileVisible" placeholder="Multiple Files" multiple>
                                                            <span class="input-group-btn">
                                                                <button type="button" class="btn btn-fab btn-round btn-info">
                                                                    <i class="material-icons">layers</i>
                                                                </button>
                                                            </span>
                                                        </div>
                                                      </div>

                                                      <div class="row">
                                                           
                                                            <div class="gallery " >
                                                                </div>


                                                      </div>

                                                   
                                                </div>
                                       
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="description">
                                    <h4 class="info-text"> Le voyage, une expérience de vie </h4>
                                    <div class="row">
                                        <div class="col-sm-12 ">
                                            <div class="row">
                                            
                                           <div class="col-sm-6 ">
                                            <div class="form-group">
                                                <label>Votre descrption </label>
                                                <textarea class="form-control" placeholder="" rows="6"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">Exemple</label>
                                                <p class="description">"
                                                    Après quelques 40 heures de voyagement avec une escale de quelques heures à Singapour pendant laquelle j’ai pu visiter cette ville incroyable, je suis enfin arrivé à mon rêve! Arrivant tout droit de Paris, j’ai découvert Auckland, une ville comme nulle part ailleurs et plus petite également. L’une des premières choses qui m’ont marqué est le nombre très réduit de policiers. Il me semble avoir vu quelque chose comme 5 policiers en une semaine. Ensuite, la diversité émanant de cette ville où tout le monde vit en harmonie. Puis, est venue l’heure d’aller rejoindre le travail accepté depuis la France.                                                    
                                                    "</p>
                                            </div>
                                        </div>
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>

                            
                            </div>
                            <div class="wizard-footer">
                                <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Next' />
                                    <input type='button' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Finish' />
                                </div>
                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />

                                 
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div> <!-- wizard container -->
            </div>
        </div> <!-- row -->
    </div> 
  </div>


  <?php include('./footer.php'); ?>

  
