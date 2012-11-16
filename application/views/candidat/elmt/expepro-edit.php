
<?php 
$custom_lieu1 = array(
    'name'  => 'custom_lieu1',
    'id'    => 'custom_lieu1',
    'value' => set_value('custom_lieu1',$data->etablissement),
    'maxlength' => 30,
    'size'  => 30,
);  

$year_start1 = array(
    'name'  => 'year_start1',
    'id'    => 'year_start1',
    'value' => set_value('year_start1',$data->year_start),
    'placeholder' => 'Année',
    'maxlength' => 4,
    'size'  => 4,
);    

$year_end1 = array(
    'name'  => 'year_end1',
    'id'    => 'year_end1',
    'value' => set_value('year_end1',$data->year_end),
    'placeholder' => 'Année',
    'maxlength' => 4,
    'size'  => 4,
); 

?>
      
<?php echo form_open('fleurjob/edit/expepro/'.$data->id,'class="form-horizontal"'); ?>      
<br />
      
  <div class="control-group">     
    <label class="control-label" for="custom_lieu1">Entreprise</label>
    <div class="controls">
      <?php echo form_input($custom_lieu1,'', 'class="input-xlarge"'); ?>
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="poste1">Type de poste</label>
    <div class="controls">
       <?php echo form_dropdown('poste1', $postes_list,$data->poste,'class="input-xlarge"'); ?>
    </div>
  </div>

  <div class="control-group">
    <label class="control-label" for="type1">Type d'établissement</label>
    <div class="controls">
      <?php echo form_dropdown('type1', $type_etab_list,$data->type_etab,'class="input-xlarge"'); ?>
    </div>
  </div>        
    
    <div class="control-group">
        <label class="control-label" for="type1">Période de :</label>
            <div class='controls'>
                <?php echo form_dropdown('month_start1', $months,'','class="input-small"'); ?>
                <?php echo form_input($year_start1,$data->year_start, 'class="input-small"'); ?>
            </div>
        <label class="control-label" for="type1">à :</label>
            <div class='controls'>
                <?php echo form_dropdown('month_end1', $months,'','class="input-small"'); ?>
                <?php echo form_input($year_end1,$data->year_end, 'class="input-small"'); ?>
            </div>
    </div>
 
  
  </div>

  <div class="modal-footer"> 
    <a href="#" data-toggle="modal" data-target="#modaledit" class="btn">Annuler</a>
<?php echo form_submit('submit','Enregistrer','class="btn btn-primary"'); ?>
<?php echo form_close(); ?>     
  </div>