<?php echo form_open("Admin/actualizarTutorado"); ?> 
    <div class="editar-status">
        <div class="modal-info-3">
            <span class="mdl-dialog__title fs25 tajawalL ls1">Editar Tutorado</span>
                <?php   if(isset($mostrardatosTutorado)){?>
                    <div class="c-inputs-4" >
                        <div class="form-icons"><i class="fas fa-id-card"></i></div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="matricula" value="<?php echo $mostrardatosTutorado[0]->matricula;?>">
                            <label class="mdl-textfield__label tajawalL" required="required">Matricula</label>
                        </div>
                    </div>
                    <div class="c-inputs-4">
                        <div class="form-icons"><i class="fas fa-user"></i></div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="nombre" value="<?php echo $mostrardatosTutorado[0]->nombre;?>">
                                <label class="mdl-textfield__label tajawalL" required="required">Nombre</label>
                        </div>
                    </div>
                    <div class="c-inputs-4">
                        <div class="form-icons"><i class="fas fa-user"></i></div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="ap_paterno" value="<?php echo $mostrardatosTutorado[0]->ap_paterno;?>">
                                <label class="mdl-textfield__label tajawalL" required="text">Apellido Paterno</label>
                        </div>
                    </div>
                    <div class="c-inputs-4">
                        <div class="form-icons"><i class="fas fa-user"></i></div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="ap_materno" value="<?php echo $mostrardatosTutorado[0]->ap_materno;?>">
                                <label class="mdl-textfield__label tajawalL" required="text">Apellido Materno</label>
                        </div>
                    </div>
                    <div class="c-inputs-4">
                        <div class="form-icons"><i class="fas fa-briefcase"></i></div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="carrera" value="<?php echo $mostrardatosTutorado[0]->carrera;?>">
                                <label class="mdl-textfield__label tajawalL" required="text">Carrera</label>
                        </div>
                    </div>
                    <div class="c-inputs-4">
                        <div class="form-icons"><i class="fas fa-question"></i></div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                            <input type="text" value="<?php echo $mostrardatosTutorado[0]->semestre;?>" class="mdl-textfield__input mdl-color-text--black" id="">
                            <input type="hidden" value="" name="semestre">
                                <label for="" class="mdl-textfield__label">Semestre</label>
                                    <ul for="" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                        <li class="mdl-menu__item" data-val="PRIMERO">PRIMERO</li>
                                        <li class="mdl-menu__item" data-val="SEGUNDO">SEGUNDO</li>
                                        <li class="mdl-menu__item" data-val="TERCERO">TERCERO</li>
                                        <li class="mdl-menu__item" data-val="CUARTO">CUARTO</li>
                                        <li class="mdl-menu__item" data-val="QUINTO">QUINTO</li>
                                        <li class="mdl-menu__item" data-val="SEXTO">SEXTO</li>
                                        <li class="mdl-menu__item" data-val="SEPTIMO">SEPTIMO</li>
                                        <li class="mdl-menu__item" data-val="OCTAVO">OCTAVO</li>
                                        <li class="mdl-menu__item" data-val="NOVENO">NOVENO</li>
                                        <li class="mdl-menu__item" data-val="DECIMO">DECIMO</li>
                                        <li class="mdl-menu__item" data-val="ONCIAVO">ONCIAVO</li>
                                        <li class="mdl-menu__item" data-val="DECIMO">DECIMO</li>
                                    </ul>
                        </div>
                    </div> 
                    <div class="c-inputs-4">
                        <div class="form-icons"><i class="fas fa-book"></i></div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" value="<?php echo $mostrardatosTutorado[0]->programa;?>" name="programa">
                                <label class="mdl-textfield__label tajawalL" required="text">Programa</label>
                        </div>
                    </div>
                    <div class="c-inputs-4">
                        <div class="form-icons"><i class="fas fa-book"></i></div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" value="<?php echo $mostrardatosTutorado[0]->tipo_tutoria;?>" name="tipo_tutoria">
                                <label class="mdl-textfield__label tajawalL" required="text">Tutoría</label>
                        </div>
                    </div>  
                    <div class="c-inputs-4">
                        <div class="form-icons"><i class="fas fa-question"></i></div>
                            <select class="mdl-textfield mdl-textfield__input" id="dropdown" name="grupo">
                                <option value="<?php echo $mostrardatosTutorado[0]->grupo;?>"><?php echo $mostrardatosTutorado[0]->grupo;?></option>
                                <option value="4101">4101</option>
                                <option value="4201">4201</option>
                                <option value="4202">4202</option>
                                <option value="4251">4251</option>
                                <option value="4271">4271</option>
                                <option value="4301">4301</option>
                                <option value="4401">4401</option>
                                <option value="4402">4402</option>
                                <option value="4451">4451</option>
                                <option value="4471">4471</option>
                                <option value="4501">4501</option>
                                <option value="4571">4571</option>
                                <option value="4601">4601</option>
                                <option value="4602">4602</option>
                                <option value="4651">4651</option>
                                <option value="4652">4652</option>
                                <option value="4671">4671</option>
                                <option value="4751">4751</option>
                                <option value="4771">4771</option>
                                <option value="4851">4851</option>
                                <option value="4852">4852</option>
                                <option value="4853">4853</option>
                                <option value="4871">4871</option>
                                <option value="4951">4951</option>  
                            </select>
                            <script>
                                $('#dropdown').dropdown();
                            </script>
                    </div>     
            <div class="c-inputs-4">
                <span class="fs19 ls2 tajawalR">Status</span>
                    <?php if($mostrardatosTutorado[0]->status=='ACTIVO'){
                                foreach ($mostrardatosTutorado as $row) {  ?>       
                                    <span class="fs19 ls2 tajawalB"><?php echo $row->status; ?></span>  
                                <?php } ?>
                        </div> 
                        <div class="c-inputs-4">         
                            <span class="fs19 ls2 tajawalR">Cambiar a:</span>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                <input type="radio" id="option-1" class="mdl-radio__button" name="status" value="INACTIVO">
                                <span class="mdl-radio__label tajawalR ls2">Inactivo</span>
                            </label> 
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                                <input type="radio" id="option-2" class="mdl-radio__button" name="status" value="ACTIVO">
                                <span class="mdl-radio__label tajawalR ls2">No Cambiar</span>
                            </label>         
                        </div>      
                        <div class="c-inputs-4">
                            <?php }if($mostrardatosTutorado[0]->status=='INACTIVO'){
                                    foreach ($mostrardatosTutorado as $row) {  ?>       
                                        <span class="fs19 ls2 tajawalB"><?php echo $row->status; ?></span>  
                                    <?php } ?>
                        </div>
                        <div class="c-inputs-4">         
                            <span class="fs19 ls2 tajawalR">Cambiar a:</span>
                                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
                                      <input type="radio" id="option-3" class="mdl-radio__button" name="status" value="ACTIVO">
                                      <span class="mdl-radio__label tajawalR ls2">Activo</span>
                                </label>
                                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-4">
                                    <input type="radio" id="option-4" class="mdl-radio__button" name="status" value="INACTIVO">
                                <span class="mdl-radio__label tajawalR ls2">No Cambiar</span>
                            </label> 
                            <?php }
                            }?>
                    </div>
                
                <div class="modals">
                    <a href="<?= base_url() ?>Admin/gestionTutorados">
                        <button class="close-fancy mdl-button mdl-js-button mdl-color--red-A200 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Cancelar</button>
                    </a>
                    <button class="mdl-button mdl-js-button mdl-color--teal-700 mdl-js-ripple-effect mdl-color-text--blue-grey-100">Aceptar</button>
                </div>          
        </div>  
    </div>
<?php echo form_close(); ?>                       