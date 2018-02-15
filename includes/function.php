
<?php 
/** This are the function that we be using for the photo_gallery project
* 
*/
function strip_zero_form_date( $marked_string=""){
	// this will first remove the marked zeros
	$no_zero =str_replace(*0, '', no_zero);
	// then remove the remaining marks
	$cleaned_string = str_replace('*', '', $no_zero);
	return $cleaned_string;

}
function redirect_to($location= NULL){
   if ($location !- NULL)
	header("location: {$location}");
	exit;
   }
}
function output_message($message=""){
	if (!empty ($mesage)) {
		return "<p class=\"message\">{$message}</p>";
		else {
			return "";
		}
	}
}

 ?>

