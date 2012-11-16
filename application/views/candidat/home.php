<?php 
/**
 * Homepage de la partie Candidat
 */
?>


<div class='span6'>
    
<iframe width="640" height="360" src="http://www.youtube.com/embed/P_qgquKHgV4?rel=0" frameborder="0" allowfullscreen></iframe>    
<!-- <iframe width="640" height="401" src="http://www.powtoon.com/embed/beVe91BjMJZ/" frameborder="0" allowfullscreen></iframe> -->    
    
    <!--
     <h1>Pourquoi s'inscrire ?</h1>
</br>
    <ol>
        <li>C'est gratuit</li>
        <li>Recevez directement par SMS des offres d'employeurs intéressés</li>
        <li>Soyez alerté dès qu'un poste se libère dans les lieux qui vous intéressent</li>
        <li>Envoyez vos candidatures</li>
    </ol> 
</br>    
    
    <p class='lead'>
        "Gagnez en efficacité, ne perdez plus de temps et ne passez plus à coté des belles opportunités!"
    </p>
    

<?php echo anchor('auth/register/candidat',"Je m'inscris !","class='btn btn-large btn-success'"); ?>   
-->

</div> 


<div class='span4'>
<?php 

$data['show_captcha'] = FALSE;
$data['login_by_username'] = FALSE;

$this->load->view('auth/login_form', $data); ?>    
</div>   

    




