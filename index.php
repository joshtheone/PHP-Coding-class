<style>

</style>

<script>
    console.log(2 + 2);
</script>

<?php
$name = "juma";
$dob = 1990;

$subjects = ["Math", "English", "Physics", "Chemistry", "Biology", "Geography"];
// echo "<p>$subjects[2]</p>";

$matokeoYaJuma = [
    "math" => 50,
    "English" => 40,
    "Physics" => 30,
    "Chemistry" => 20,
    "Biology" => 10,
    "Geography" => 10
];

// for loop

// for ($i=0; $i < 10; $i++) { 
//     echo "<p>$subjects[$i]</p>";
//     if($i == count($subjects) - 1) {
//         break;
//     }
// }

// $a = 0;
// while ($a <= 10) {
//     echo $a . "<br>";
//     $a+=2;
// }

// foreach ($matokeoYaJuma as $key => $matokeo) {
//     if($key == "Biology") {
//         $matokeo = 100;
//     }
//     echo "<p>$key = $matokeo</p>";
// }

$matokeo = [
    "juma" => [
        "math" => 90,
        "English" => 70,
        "Physics" => 70,
        "Chemistry" => 80,
        "Biology" => 60,
        "Geography" => 100
    ],

    "rose" => [
        "math" => 50,
        "English" => 40,
        "Physics" => 30,
        "Chemistry" => 20,
        "Biology" => 48,
        "Geography" => 70
    ]
];


function calculateAge($dof) {
    $date = date("Y");
    $age = $date - $dof;
    return $age;
}

function calculateAvarage($matokeo){
    $results = [];
    foreach ($matokeo as $key => $value) {
        $total = array_sum($value);
        $avarage = round($total / count($value), 2);
        $grade = "";
        switch ($avarage) {
            case $avarage >= 75:
                $grade = "A";
                break;
            case $avarage >= 50 && $avarage < 75:
                $grade = "B";
                break;
            default:
                $grade = "C";
                break;
        }

        $results[$key] = [
            "avarage" => $avarage,
            "grade" => $grade,
            "total" => $total
        ];

    }
    return $results;
}

var_dump(calculateAvarage($matokeo));

$age = calculateAge(dof: $dob);

// conditions > < >= <= == !== === !=== && ||

// if ($age >= 35) {
//     echo "<p>$name is $age so he is an adult</p>";
// } else if($age > 18 && $age < 35) {
//     echo "<p>$name is $age so he is a teenager</p>";
// }else {
//     echo "<p>$name is $age so he is a child</p>";
// }

switch ($age) {
    case $age >= 35:
        echo "<p>$name is $age so he is an adult</p>";
        break;
    case $age > 18 && $age < 35:
        echo "<p>$name is $age so he is a teenager</p>";
        break;
    default:
        echo "<p>$name is $age so he is a child</p>";
        break;
}



// function



?>