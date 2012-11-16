<?php
/**
 * Template publique pour la galerie des books fleuristes
 * 
 */
?>
 
<?php $this->load->view('common/head'); ?>

<?php $this->load->view('candidat/elmt/public-head-nav'); ?>        
        
<?php $this->load->view('common/florbook_subhead'); ?>
    
<div class="container-fluid">         
<?php //$this->load->view('books/search-books'); ?>
 
    <h2>Exploration des books</h2> 
<div class='row-fluid'>
        <p class='lead'>A découvrir sur FlorBook !</p>
        
        
    <div id="myCarousel-featured" class="carousel slide" data-interval="10000">
      <!-- Carousel items -->
      <div class="carousel-inner">
         
    <?php $i = 0; ?>
    <?php foreach ($books->featured as $key => $book) : ?>
        
        <div class="item <?php if($i == 0) { echo "active"; $i++; } ?>">
 
            <?php $this->load->view('books/templates/featured_book_thumb',$book); ?>
  
        </div>
    
    <?php endforeach; ?>
    
      </div>
      <!-- Carousel nav -->
      <a class="carousel-control left" href="#myCarousel-featured" data-slide="prev">&lsaquo;</a>
      <a class="carousel-control right" href="#myCarousel-featured" data-slide="next">&rsaquo;</a>
    </div>        

<?php /*
foreach ($featured as $key => $book) :                  
    $this->load->view('books/templates/book_thumb',$book);           
endforeach;
 */ ?>  
   
</div>

<div class='row-fluid'>
        <p class='lead'>Les books les plus récents</p>
 
        <?php foreach ($books->latest as $key => $book) : ?>       
            
            <?php $this->load->view('books/templates/book_thumb',$book); ?>
            
        <?php endforeach; ?> 
     
    <?php echo anchor('book/latest','Voir tous les books récents','class="btn"'); ?>       
</div>



<?php $this->load->view('common/footer'); ?>