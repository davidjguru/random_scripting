<?php
     class Book {

     public $isbn;
     public $title;
     public $author;
     public $available;


     public function getPrintableTitle(): string {
	     $result = '<i>' . $this->title
		     . '</i> - ' . $this->author;
	     if (!$this->available) {
		     $result .= ' <b>Not available</b>';
	     }
	     return $result;
     }


     public function getCopy(): bool {
	     if ($this->available < 1) {
		     return false;
	     } else {
		     $this->available--;
		     return true;
	     }
     }


}
