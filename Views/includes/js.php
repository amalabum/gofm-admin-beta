		<script src="Views/js/jquery.js"></script>
		<script src="Views/js/jquery.migrate.js"></script>
		<script src="Views/scripts/bootstrap/bootstrap.min.js"></script>
		<script>var $target_end=$(".best-of-the-week");</script>
		<script src="Views/scripts/jquery-number/jquery.number.min.js"></script>
		<script src="Views/scripts/owlcarousel/dist/owl.carousel.min.js"></script>
		<script src="Views/scripts/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
		<script src="Views/scripts/easescroll/jquery.easeScroll.js"></script>
		<script src="Views/scripts/sweetalert/dist/sweetalert.min.js"></script>
		<script src="Views/scripts/toast/jquery.toast.min.js"></script>
		<!-- <script src="Views/js/demo.js"></script> -->
		<script src="Views/js/e-magz.js"></script>


<script type="text/javascript">
  
  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
  }
     
      
      $(function (){
        setInterval(function(){
          $.ajax({
            url:'Views/dashboard/commentaires.php', 
            success:function (data) {
             $('.all_comments').html(data);
            }
          });         
        },1000);

        setInterval(function(){
          $.ajax({
            url:'Views/dashboard/blog_list.php', 
            success:function (data) {
             $('.blog_list').html(data);
            }
          });         
        },1000);

       $('.submit').click(function(){
              
              var nom= $('.nom').val();
              var email= $('.email').val();
              var commentaire= $('.commentaire').val();
              var id= $('.id').val();
              
              $.ajax({
              url:'Views/dashboard/add_coment.php', 
                  data : 'nom='+nom+'&email='+email+'&commentaire='+commentaire+'&id='+id,
                  type: 'post',
                  success:function(datas){
                  
                    $('.comments_respons').html(datas);
                   
                  }                      
                         
              })
                
        })

        $('.submit_contact').click(function(){
              
              var contact_nom= $('.contact_nom').val();
              var contact_objet= $('.contact_objet').val();
              var contact_email= $('.contact_email').val();
              var contact_message= $('.contact_message').val();
              var id= $('.id').val();
              
              $.ajax({
              url:'Views/dashboard/contact.php', 
              data : 'contact_nom='+contact_nom+'&contact_objet='+contact_objet+'&contact_email='+contact_email+'&contact_message='+contact_message,
                  type: 'post',
                  success:function(datas){
                  
                    $('.mail_respons').html(datas);
                   
                  }                      
                         
              })
                
        })

  
         
   })
    // setInterval(getDatas, 1000);
  </script>


<!-- google recaptcha -->
  <script>
    
     
        grecaptcha.ready(function() {
          grecaptcha.execute('6Le6JUYjAAAAAOtOWMZ9NZtVXpIdOFE2yTkYYigt', {action: 'submit'}).then(function(token) {
              console.log(token);
			  document.getElementById("gg_recaptcha").value=token;
          });
        });
   
  </script>


    <script type="text/javascript">


 function init (){

  let postUrl = encodeURI(document.location.href);
  let postTitle = encodeURI("salut man");


  facebookbtn.setAttribute(
     "href",
     `https://www.facebook.com/sharer.php?u=${postUrl}`
   
  );
  twitterbtn.setAttribute(
     "href",
     `
     https://twitter.com/intent/tweet?text=${postTitle}&url=${postUrl}`
   
  );
    linkedinbtn.setAttribute(
     "href",
     `https://www.linkedin.com/shareArticle?url=${postUrl}&title=${postTitle}`
   
  );
    whatsappbtn.setAttribute(
     "href",
     ` https://wa.me/?text=${postTitle}${postUrl}`
   
  );
 }



const twit = document.getElementById('twitter_share');
const fb = document.getElementById('facebook_share');
  let postUrl = encodeURI(document.location.href);
  let postTitle = encodeURI(document.title);
  let auteur="Gofm_95.8MHZ"


if (twit) {

  twit.addEventListener('click', () => {
    var url = `https://twitter.com/intent/tweet?text=${postTitle}&url=${postUrl}&via=${auteur}`;
    window.open(url,"Partage")
  });
}
 
if (fb) {

  fb.addEventListener('click', () => { 
    var url = `https://www.facebook.com/sharer/sharer.php?u=${postUrl}`;
    window.open(url,"Partage")
  });
}


    </script>