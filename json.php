<?php 
	$datas = '{
		"name"		: "Wahyu Adi Kurniawan",
		"address"	: "Dusun Corogo RT 01/RW 08 Desa Janti Kecamatan Jogoroto Kabupaten Jombang, Jawa Timur",
		"hobbies"	: ["Coding", "Design", "Playing drum", "Basketball"],
		"is_married": false,
		"school"	: {
			"highSchool"	: "Senior High School of Mojoagung",
			"university"	: "Institut Teknologi Sepuluh Nopember"
		},
		"skills"	: [
			{
				"skill"		 : "PHP Programming",
				"description": "Self-taught learning since 2 years ago and finally more happy with php"
			},
			{
				"skill"		 : "HTML and CSS",
				"description": "It is been struggling since middle school when studying blogs on blogger"
			},
			{
				"skill"		 : "JavaScript",
				"description": "Want to learn to be combined with the web and mobile app"
			}
		]
	}';

	$data = array(
		"name"		=> "Wahyu Adi Kurniawan",
		"address"	=> "Dusun Corogo RT 01/RW 08 Desa Janti Kecamatan Jogoroto Kabupaten Jombang, Jawa Timur",
		"hobbies"	=> ["Coding", "Design", "Playing drum", "Basketball"],
		"is_married"=> false,
		"school"	=> [
			"highSchool"	=> "Senior High School of Mojoagung",
			"university"	=> "Institut Teknologi Sepuluh Nopember"
		],
		"skills"	=> [
			[
				"skill"		 => "PHP Programming",
				"description"=> "Self-taught learning since 2 years ago and finally more happy with php"
			],
			[
				"skill"		 => "HTML and CSS",
				"description"=> "It is been struggling since middle school when studying blogs on blogger"
			],
			[
				"skill"		 => "JavaScript",
				"description"=> "Want to learn to be combined with the web and mobile app"
			]
		]
	);

	$json = json_encode($data);
	echo $json;
?>