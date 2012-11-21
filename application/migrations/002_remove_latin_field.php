<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Remove_latin_field extends CI_Migration {
    
    public function up() {
        // retire la colonne latin
        $this->dbforge->drop_column('fleurs', 'latin');
    }
    
    public function down() {
        // remet la colonne "latin"     
        $field = array(
        
            'latin' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                ),
        );        
        
        $this->dbforge->add_column('fleurs', $field);
        
    }
    
    
}