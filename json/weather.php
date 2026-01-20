<?php
header("Content-Type: application/json");

$city = $_GET['city'] ?? 'New York';

$data = [
  "New York" => [
    "city" => "New York",
    "forecast" => [
      ["date"=>"2024-12-30","temp_high"=>45,"temp_low"=>32,"condition"=>"Sunny","humidity"=>65,"wind_speed"=>10,"icon"=>"☀️"],
      ["date"=>"2024-12-31","temp_high"=>42,"temp_low"=>30,"condition"=>"Cloudy","humidity"=>70,"wind_speed"=>12,"icon"=>"☁️"],
      ["date"=>"2025-01-01","temp_high"=>38,"temp_low"=>28,"condition"=>"Rain","humidity"=>85,"wind_speed"=>15,"icon"=>"🌧️"],
      ["date"=>"2025-01-02","temp_high"=>40,"temp_low"=>29,"condition"=>"Sunny","humidity"=>60,"wind_speed"=>9,"icon"=>"☀️"],
      ["date"=>"2025-01-03","temp_high"=>36,"temp_low"=>25,"condition"=>"Snow","humidity"=>75,"wind_speed"=>18,"icon"=>"❄️"],
      ["date"=>"2025-01-04","temp_high"=>34,"temp_low"=>24,"condition"=>"Cloudy","humidity"=>68,"wind_speed"=>11,"icon"=>"☁️"],
      ["date"=>"2025-01-05","temp_high"=>39,"temp_low"=>27,"condition"=>"Sunny","humidity"=>62,"wind_speed"=>8,"icon"=>"☀️"]
    ]
  ],

  "London" => ["city"=>"London","forecast"=>[
    ["date"=>"2024-12-30","temp_high"=>50,"temp_low"=>40,"condition"=>"Rain","humidity"=>80,"wind_speed"=>14,"icon"=>"🌧️"],
    ["date"=>"2024-12-31","temp_high"=>48,"temp_low"=>38,"condition"=>"Cloudy","humidity"=>75,"wind_speed"=>12,"icon"=>"☁️"],
    ["date"=>"2025-01-01","temp_high"=>46,"temp_low"=>36,"condition"=>"Sunny","humidity"=>65,"wind_speed"=>9,"icon"=>"☀️"],
    ["date"=>"2025-01-02","temp_high"=>45,"temp_low"=>35,"condition"=>"Rain","humidity"=>85,"wind_speed"=>15,"icon"=>"🌧️"],
    ["date"=>"2025-01-03","temp_high"=>44,"temp_low"=>34,"condition"=>"Cloudy","humidity"=>70,"wind_speed"=>10,"icon"=>"☁️"],
    ["date"=>"2025-01-04","temp_high"=>47,"temp_low"=>37,"condition"=>"Sunny","humidity"=>60,"wind_speed"=>8,"icon"=>"☀️"],
    ["date"=>"2025-01-05","temp_high"=>49,"temp_low"=>39,"condition"=>"Rain","humidity"=>78,"wind_speed"=>13,"icon"=>"🌧️"]
  ]],

  "Tokyo" => ["city"=>"Tokyo","forecast"=>[
    ["date"=>"2024-12-30","temp_high"=>55,"temp_low"=>42,"condition"=>"Sunny","humidity"=>55,"wind_speed"=>7,"icon"=>"☀️"],
    ["date"=>"2024-12-31","temp_high"=>53,"temp_low"=>40,"condition"=>"Cloudy","humidity"=>60,"wind_speed"=>9,"icon"=>"☁️"],
    ["date"=>"2025-01-01","temp_high"=>50,"temp_low"=>38,"condition"=>"Rain","humidity"=>75,"wind_speed"=>12,"icon"=>"🌧️"],
    ["date"=>"2025-01-02","temp_high"=>52,"temp_low"=>39,"condition"=>"Sunny","humidity"=>58,"wind_speed"=>8,"icon"=>"☀️"],
    ["date"=>"2025-01-03","temp_high"=>48,"temp_low"=>36,"condition"=>"Cloudy","humidity"=>65,"wind_speed"=>10,"icon"=>"☁️"],
    ["date"=>"2025-01-04","temp_high"=>49,"temp_low"=>35,"condition"=>"Rain","humidity"=>78,"wind_speed"=>13,"icon"=>"🌧️"],
    ["date"=>"2025-01-05","temp_high"=>51,"temp_low"=>37,"condition"=>"Sunny","humidity"=>55,"wind_speed"=>6,"icon"=>"☀️"]
  ]]
];

echo json_encode($data[$city] ?? $data["New York"]);
