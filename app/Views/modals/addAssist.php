 <!-- modal Area -->              
 <div class="modal fade" id="modal-default">
	  <div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title">Add Assistance</h4>

			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span></button>
		  </div>
		  <div class="modal-body">
		                        <form method="post" action="/admin/assist/add">
                                <input type="hidden" value="<?= $citizen_slugs?>" name="citizen_slugs">
                                <input type="hidden" value="<?= $citizen['id']?>" name="citizen_id">
                                                <div class="form-group">
                                                    <h5> Paglalarawan ng Pagtulong: <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <textarea name="assistance_description" class="form-control" required data-validation-required-message="This field is required"
                                                        rows="8" cols="40"></textarea>
                                                    </div>
                                                </div>

                                               <!-- <div class="form-group">
                                                    <h5> Uri ng Pagtulong: <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="assistance_type" class="form-control" required  data-validation-required-message="This field is required">
                                                    </div>
                                                     <div class="input-group controls">
                                                        <select name="gender" id="select" required class="form-control">
                                                            <option value="" selected disabled hidden>Select Assistance Type</option>
                                                            <option value="Male">Medical</option>
                                                            <option value="Female">Cash</option>
                                                        </select>
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addcategory">+</button>
                                                        </div>
                                                    </div>
                                                </div> -->                                 

                                                <div class="form-group">
                                                        <h5> Uri ng Pagtulong: <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <select name="assistance_type" id="assistance_type" required class="form-control">
                                                                    <option value="" selected disabled hidden>Pumili ng Uri ng Pagtulong</option>
                                                                    <?php //foreach ($variable as $key => $value) {
                                                                        # code...
                                                                    //}  ?>
                                                                    <option value="Medical">Medical</option>
                                                                    <option value="Legal">Legal</option>
                                                                    <option value="Burial">Burial</option>
                                                                    <option value="Financial">Financial</option>
                                                                    <option value="Educational">Educational</option>
                                                                    <option value="Wheelchair">Wheelchair</option>
                                                                    <option value="Oxygen tank">Oxygen tank</option>
                                                                    <option value="Quadcane">Quadcane</option>
                                                                    <option value="Single cane">Single cane</option>
                                                                    <option value="Walker">Walker</option>
                                                                    <option value="Hearing aid">Hearing aid</option>
                                                                    <option value="Saklay">Saklay</option>
                                                                    <option value="Nebulizer">Nebulizer</option>
                                                                    <option value="Manual Blood pressure kit">Manual Blood pressure kit</option>
                                                                    <option value="Oxymeter">Oxymeter</option>
                                                                    <option value="Thermal scanner">Thermal scanner</option>
                                                                    <option value="Reading glass">Reading glass</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                     

                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5> Tinulungan ni: <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="assistedBy" class="form-control" required  data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="col-md-6">  
                                                            <div class="form-group">
                                                                <h5> Araw ng Pagtulong: <span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <input type="date" value="<?= date('Y-m-d') ?>" name="assistDate"   class="form-control" required data-validation-required-message="This field is  required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>

                                                <div class="form-row" id="impormasyonNgNakalibing">
                                                <h5> Detalye ng Nakalibing: <span class="text-danger">*</span></h5>
                                                <div class="bb-1 col-md-12 mb-2 mt-2"></div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                       
                                                            <p class="text-muted"> Pangalan <span class="text-danger">*</span></p>
                                                            <div class="controls">
                                                                <input type="text" id="firstName" name="firstName" class="form-control" data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <p class="text-muted"> Apilyedo <span class="text-danger">*</span></p>
                                                            <div class="controls">
                                                                <input type="text" id="lastName" name="lastName" class="form-control" data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <p class="text-muted"> Kailan Namatay <span class="text-danger">*</span></p>
                                                            <div class="controls">
                                                                <input type="date" id="dateOfDeath" name="dateOfDeath" class="form-control" data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <p class="text-muted"> Kaano-ano ang Namatay <span class="text-danger">*</span></p>
                                                            <div class="controls">
                                                                <select name="relationship" id="relationship" class="form-control">
                                                                    <option value="" selected disabled hidden>Piliin sa Listahan</option>
                                                                    <option value="Kamag-anak">Kamag-anak</option>
                                                                    <option value="Asawa">Asawa</option>
                                                                    <option value="Mag-asawa">Mag-asawa</option>
                                                                    <option value="Kapatid">Kapatid</option>
                                                                    <option value="Magkapatid">Magkapatid</option>
                                                                    <option value="Magulang">Magulang</option>
                                                                    <option value="Tatay">Tatay</option>
                                                                    <option value="Nanay">Nanay</option>
                                                                    <option value="Anak">Anak</option>
                                                                    <option value="Ate">Ate</option>
                                                                    <option value="Kuya">Kuya</option>
                                                                    <option value="Panganay">Panganay</option>
                                                                    <option value="Bunso">Bunso</option>
                                                                    <option value="Apo">Apo</option>
                                                                    <option value="Lolo">Lolo</option>
                                                                    <option value="Lola">Lola</option>
                                                                    <option value="Tiyo">Tiyo</option>
                                                                    <option value="Tiya">Tiya</option>
                                                                    <option value="Pamangkin">Pamangkin</option>
                                                                    <option value="Pinsan">Pinsan</option>
                                                                    <option value="Biyenan">Biyenan</option>
                                                                    <option value="Manugang">Manugang</option>
                                                                    <option value="Balae">Balae</option>
                                                                    <option value="Bayaw">Bayaw</option>
                                                                    <option value="Hipag">Hipag</option>
                                                                    <option value="Inaanak">Inaanak</option>
                                                                    <option value="Ninong">Ninong</option>
                                                                    <option value="Ninang">Ninang</option>
                                                                    <option value="Kinakapatid">Kinakapatid</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <p class="text-muted"> Saan Inilibing <span class="text-danger">*</span></p>
                                                            <div class="controls">
                                                                <input type="text" id="cemeteryAddress" name="cemeteryAddress" class="form-control" data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <p class="text-muted"> Distrito <span class="text-danger">*</span></p>
                                                            <div class="controls">
                                                                <input type="text" id="distrito"  name="distrito" class="form-control" data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <p class="text-muted"> Barangay <span class="text-danger">*</span></p>
                                                            <div class="controls">
                                                                <input type="text" id="barangay" name="barangay" class="form-control" data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
  
                                                </div>  
                                                </div>  
                                           
                                        <!-- THIS IS THE START FORM  -->
                                        
                                                <!-- <div class="text-xs-right">
                                                    <input type="submit" class="btn btn-block btn-primary" value="Submit">
                                           
                                                </div> -->
                                 
		  </div>
		  <div class="modal-footer">
          <input type="submit" class="btn btn-rounded btn-primary float-right"  value="Add Assist">
          </form>
			<button type="button" href="$(this).modal('hide')" class="btn btn-rounded btn-danger" data-dismiss="modal">Close</button>
         
		  </div>
		</div>
		<!-- /.modal-content -->
	  </div>
	  <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
