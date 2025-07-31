<?php

$subjects = [
    "math",
    "English",
    "Physics",
    "Chemistry",
    "Biology",
    "Geography"
];

$results = [];

if (isset($_POST['math'])) {
    $results['math'] = $_POST['math'];
}
if (isset($_POST['English'])) {
    $results['English'] = $_POST['English'];
}
if (isset($_POST['Physics'])) {
    $results['Physics'] = $_POST['Physics'];
}
if (isset($_POST['Chemistry'])) {
    $results['Chemistry'] = $_POST['Chemistry'];
}
if (isset($_POST['Biology'])) {
    $results['Biology'] = $_POST['Biology'];
}
if (isset($_POST['Geography'])) {
    $results['Geography'] = $_POST['Geography'];
}

if (!empty($results)) {
    $total = array_sum($results);
    $average = round($total / count($results), 2);
}


function calculateGrade($result)
{
    switch ($result) {
        case $result >= 75:
            return $grade = "A";
            break;
        case $result >= 50 && $result < 75:
            return $grade = "B";
            break;
        default:
            return $grade = "C";
            break;
    }
}
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <h1 class="text-3xl font-bold underline capitalize text-center p-4">
        Matokeo ya kidato cha saba
    </h1>

    <?php
    if (!empty($results)) {
    ?>
        <div class="w-[70%] mx-auto">
            <table class="w-full">
                <thead>
                    <tr>
                        <td class=" border font-medium text-xl p-4">Subject</td>
                        <td class="text-center border font-medium text-xl p-4">Avarage</td>
                        <td class="text-center border font-medium text-xl p-4">Grade</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($results as $subject => $result) { ?>
                        <tr>
                            <td class="text-start  p-2 border text-xl"><?php echo $subject; ?></td>
                            <td class="text-center p-2 border text-xl"><?php echo $result; ?></td>
                            <td class="text-center p-2 border text-xl"><?php echo calculateGrade($result); ?></td>
                        </tr>
                    <?php } ?>
                </tbody>

                <tfoot>
                    <tr>
                        <td class="text-center border font-medium text-xl p-4 bg-green-500 text-white">Total</td>
                        <td class="text-center border font-medium text-xl p-4 bg-green-500 text-white">
                            <?php echo $average; ?>
                        </td>
                        <td class="text-center border font-medium text-xl p-4 bg-green-500 text-white">
                            <?php echo calculateGrade($average); ?>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    <?php } ?>
    <div class="w-[70%] mx-auto">
        <form action="" method="post">
            <div class="p-4 space-y-4">
                <?php
                foreach ($subjects as $key) {
                ?>
                    <div class="flex flex-col">
                        <label for="<?php echo $key; ?>"><?php echo $key; ?></label>
                        <input type="text" name="<?php echo $key; ?>" id="<?php echo $key; ?>" class="border rounded-lg w-[50%] p-2">
                    </div>
                <?php
                }
                ?>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>