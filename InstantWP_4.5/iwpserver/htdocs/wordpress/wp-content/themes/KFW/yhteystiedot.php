<?php /* Template Name: yhteystiedot */ ?>
<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <!--<div class="col-md-1"></div> end left white space -->
            <div class="col-md-9">
                <!-- add a contact form and google maps 
                Name
                message
                check box for orders
                place to upload pics
                sumbit button-->
                <form>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationServer01">Etunimi *</label>
                            <input type="text" class="form-control" id="validationServer01" placeholder="Etunimi" required>
                            <div class="valid-feedback">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationServer02">Sukunimi *</label>
                            <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Sukunimi" value="Määttä" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                        <label for="validationServer03">Sähköposti *</label>
                        <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="jotain@jotain.fi" required>
                        <div class="invalid-feedback">
                            Please provide a valid email.
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Viesti</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="fi">
                        <label class="custom-file-label" for="customFileLang">Liitä</label>
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">Lähetä</button>
                </form>

            </div><!-- end main content -->
            
            <div class="col-md-3 " id="sidebar">   
                <?php get_sidebar(); ?>
            </div><!-- end sidebar -->
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <h3>Löydät meidät täältä:</h3>
            </div>
            <div class="col-12">
                <!-- change API keys accessibility if hosted properly -->
                <iframe 
                    class="pl-3" width="600" height="450" frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJJYBst_FPKUQROOTlANEefXc&key=AIzaSyDAQ7oRiBqXhV1lo8GtAbs4cW6svDCRSMA" allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>


<?php get_footer(); ?>