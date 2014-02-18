<?php
$themename = "Partners";
$shortname = "pt";

$options = array (
 
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
			 "std" => "Publish",
         )),
	
		"unique_id()ss" => array(
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
			 "std" => "Publish",
         ))),
		 ));
echo "<pre>";
print_r($options[0]['dom_items']);
echo "</pre>";
?>