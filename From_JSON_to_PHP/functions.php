<?php
function printableTitle(array $book): string {
	    $result = '<i>' . $book['title'] . '</i> - ' . $book['author'];
	        if (!$book['available']) {
			        $result .= ' <b>Not available</b>';
				    }
	        return $result;
}
