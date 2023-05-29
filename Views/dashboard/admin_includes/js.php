
  <script src="Views/dashboard/vendor/libs/jquery/jquery.js"></script>
  <script src="Views/dashboard/assets/vendor/libs/popper/popper.js"></script>
  <script src="Views/dashboard/assets/vendor/js/bootstrap.js"></script>
  <script src="Views/dashoard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="Views/dashboard/assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->

  <!-- Main JS -->
  <script src="Views/dashboard/assets/js/main.js"></script>

  <!-- Page JS -->

  <script src="Views/dashboard/assets/js/form-basic-inputs.js"></script>


  <script src="Views/dashboard/editor/ckeditor.js"></script>
  	<script src="res/patch.js"></script>




<script>
	var editor1cfg = {}
	var editor1 = new RichTextEditor(".editor", editor1cfg);
</script>


<script>

  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
   $(document).ready(function () {
     
      function getDatas() {
        $.post('Views/dashboard/Control/files_for_ajax/formulaireModificationAgent.php', function (data) {
          $('#getin').html(data);
        });
      };

    getDatas();
    
         
    });
    setInterval(getDatas, 1000);
  </script>

    <script>
  // var editor1cfg = {}
	// var editor1 = new RichTextEditor(".editor", editor1cfg);
  
  if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    // jQuery(document).ready(function()
 jQuery(document).ready(function(){

  $('.failed_response').fadeTo('normal', 0.9);
  $('.failed_response').fadeOut(12000)
  $('.success_response').fadeTo('normal', 0.9);
  $('.success_response').fadeOut(12000)

  $('.close_absolute_container').on('click dblclick', function(){
      $('.absolute_container').fadeOut(1000)
  }); 
  $('.modifier_role').on('click dblclick', function(){
      $('.absolute_container').show();
  }); 
  
});
function getDatas() {
    $.post("Views/includes/snipets/updateform.php", function (data) {
      $(".formulaire_modif").html(data);
    });
  }; 
    setInterval(getDatas(),100); 

</script>