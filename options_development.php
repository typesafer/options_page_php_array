<?php
$themename = "Partners";
$shortname = "pt";

$options = array (
 
array( "name" => $themename."_options",
	"type" => "title"),

array( "name" => "Our_Partners",
    "id" => $shortname."_our_partners",
	"desc" => "Partners CRUD Section ",
	"type" => "auto_dom",
	"dom_items" => array(
	"unique_id()" => array(
         "partner_name" => array(
		     "id" => $shortname."_partner_name",
             "name" => "the_partner_name",
			 "desc" => "The partner's name",
			 "type" => "text",
			 "value" => "",
			 "placeholder" => "Droid Van Doe",
         ),
		"partner_url" => array(
		     "id" => $shortname."_partner_url",
             "name" => "the_partner_url",
			 "desc" => "Url of the partner",
			 "type" => "text",
			 "value" => "",
			 "placeholder" => "http://www.example.com",
         ),
		 "partner_logo" => array(
		     "id" => $shortname."_partner_logo",
             "name" => "the_partner_logo",
			 "desc" => "Logo of the partner",
			 "type" => "text",
			 "value" => "",
			 "placeholder" => "http://www.example.com/app/cdn/katze/300/200",
         ),
		 "partner_status" => array(
		     "id" => $shortname."_partner_status",
             "name" => "the_partner_status",
			 "desc" => "The status of the partner",
			 "type" => "select",
			 "options" => array("Publish", "Pending Approval", "In Future"),
			 "std" => "Lagos",
         )))),
	
array( "name" => "the_sidebars",
	"desc" => "The sidebar name",
	"id" => $shortname."_the_sidebars",
	"dom_items" => array(
	"unique_id()" => array(
         "sidebar_name" => array(
		     "id" => $shortname."_sidebar_name",
             "name" => "the_sidebar_name",
			 "desc" => "The sidebar name",
			 "type" => "text",
			 "value" => "",
			 "placeholder" => "sidebar name",
         )))),
		 
array( "name" => "the_salutation",
	"desc" => "The righful salutation given to a person",
	"id" => $shortname."_the_salutation",
	"type" => "text",
	"value" => ""),
	
array( "name" => "the_surname",
	"desc" => "The surname of a person",
	"id" => $shortname."_the_surname",
	"type" => "text",
	"value" => ""),	
	
array( "name" => "the_firstname",
	"desc" => "The firstname of a person",
	"id" => $shortname."_the_firstname",
	"type" => "text",
	"value" => ""),	
	
array( "name" => "the_lastname",
	"desc" => "A persons lastname",
	"id" => $shortname."_the_lastname",
	"type" => "text",
	"value" => ""),	 
	
array( "name" => "the_genres",
	"desc" => "A persons favourite genres",
	"id" => $shortname."_the_genres",
	"type" => "text",
	"value" => ""),	
	
array( "name" => "business_logo",
	"desc" => "A business logo url",
	"id" => $shortname."_business_logo",
	"type" => "text",
	"value" => ""),
	
array( "name" => "business_name",
	"desc" => "A business name",
	"id" => $shortname."_business_name",
	"type" => "text",
	"value" => ""),	
	
array( "name" => "business_registration_number",
	"desc" => "A business registration number",
	"id" => $shortname."_business_registration_number",
	"type" => "text",
	"value" => ""),
	
array( "name" => "business_paypal_email_address",
	"desc" => "A business paypal email address",
	"id" => $shortname."_business_paypal_email_address",
	"type" => "text",
	"value" => ""),
	
array( "name" => "twitter_handle",
	"desc" => "A persons twitter handle",
	"id" => $shortname."_twitter_handle",
	"type" => "text",
	"value" => ""),
	
array( "name" => "stackoverflow_handle",
	"desc" => "A persons stackoverflow handle",
	"id" => $shortname."_stackoverflow_handle",
	"type" => "text",
	"value" => ""),
);
echo "<pre>";
print_r($options);
echo "</pre>";
echo "<br/>";
print_r($options[0]['pt_our_partners']);
?>