<?php
class FormInfo{
	private static $info = [
		"Name" => "text",
		"Company/Organization" => "text",
		"Current Position/Title/Role" => "text",
		"LinkedIn Profile" => "text",
		"Interest for Mentoring" => 
			["Industry Specialist", "Startup Generalist", "Functional Specialist"],
		"Skills/Expierence" => 
			[
				"UX/UI" => "Skills",
				"Coding" => "Skills",
				"General Coach/Mentor" => "Skills",
				"Conducting Interviews" => "Skills",
				"Website Dev" => "Skills",
				"CAD" => "Skills",
				"Social Media" => "Skills",
				"Tinkering" => "Skills",
				"Pitch Scrub" => "Skills",
				"Automotive" => "Industry",
				"Videogames" => "Industry",
				"Sports" => "Industry",
				"Investor" => "Industry",
				"Food" => "Industry",
				"Robotics" => "Industry",
				"Education" => "Industry",
				"Environmental" => "Industry",
				"Politics" => "Industry",
				"Ecommerce" => "Industry",
				"Consumer Product" => "Industry",
				"Medical" => "Industry",
				"Big Data" => "Industry",
				"Music" => "Industry",
				"Social Media/Advertising" => "Industry"
			]
	];
	public static function getFormInfo(){
		return self::$info;
	}
}
?>