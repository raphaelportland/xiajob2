    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
          <div class='container-fluid'>
                <?php echo anchor('fleurjob',' FlorBook','class="brand"'); ?>
                <ul class="nav pull-left">
                  
                  <li><?php echo anchor('fleurjob', '<i class="icon-home icon-white"></i> Accueil'); ?></li>
                  <li><?php echo anchor('fleurjob/welcome','Mon espace'); ?></a></li>                  

                </ul>  
                
                <ul class="nav pull-right">
                    <li>
                    <?php echo anchor("auth/logout","déconnexion"); ?>
                    </li>                 
                </ul>
        </div>
      </div>
    </div>
