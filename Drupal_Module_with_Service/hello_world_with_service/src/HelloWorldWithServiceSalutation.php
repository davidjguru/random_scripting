<?php
       namespace Drupal\hello_world_with_service;
  
       use Drupal\Core\StringTranslation\StringTranslationTrait;

  /*
   * Prepares the salutation to the world.
   */

   class HelloWorldWithServiceSalutation {
      
       use StringTranslationTrait;


   /*
    * The function getSalutation is definited
    * returns the salutation message changed
    * date time. 
    * Returns the salutation
    */
       
    public function getSalutation() {
	 
	  $time = new \DateTime();
	      
	      if ((int) $time->format('G') >= 06 && (int) $time->format('G') < 12) {
		       return $this->t('Good morning world');
	       }
	       if ((int) $time->format('G') >= 12 && (int) $time->format('G') < 18) {
		       return $this->t('Good afternoon world');
	       }
	       if ((int) $time->format('G') >= 18) {
		       return $this->t('Good evening world');
	       }
       }
   } 
