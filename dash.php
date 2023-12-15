<?php
 require_once('./conn.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body  class="bg-[#F2E9E4]">

        <div class=" w-11/12 mx-[5%] flex justify-between items-center">
            <h1 class="text-3xl text-center mt-[2rem] text-[#4A4E69] font-bold">Gestion des équipes et personnel</h1>
            <div class="w-[180px] h-[30px] bg-[#4A4E69] self-end text-white rounded-md text-center" ><a href="./ajout_form.php">ajouter un membre</a></div>
        </div>
        <section class="w-11/12 mx-[5%] my-[1rem] py-[1rem]  bg-[#C9ADA7] rounded-2xl ">
        <h2 class='text-2xl font-bold my-6 text-center text-[#4A4E69]'>Personnel</h2>


<?php
echo "
    
<div class='w-full  '>
    <table class='table-auto w-11/12 border-2 border-black ml-[4%]'>
        <thead class='bg-[#4A4E69] border-2 border-black'>
            <th class='border-2 border-black text-[#F2E9E4]'>Member ID</th>
            <th class='border-2 border-black text-[#F2E9E4]'>Nom</th>
            <th class='border-2 border-black text-[#F2E9E4]'>Prenom</th>
            <th class='border-2 border-black text-[#F2E9E4]'>email</th>
            <th class='border-2 border-black text-[#F2E9E4]'>numero</th>
            <th class='border-2 border-black text-[#F2E9E4]'>equipe</th>
            <th class='border-2 border-black text-[#F2E9E4]'>role</th>
            <th class='border-2 border-black text-[#F2E9E4]'>statut</th>
            <th class='border-2 border-black text-[#F2E9E4]'>Actions</th>
        </thead>";

        try {
    $stmt = $conn->query("SELECT * FROM personnel");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tbody class='border-2 border-black'>
        <tr class='h-[40px] border-2 border-black'>
            <td class='text-center border-r-2 border-black'>{$row['Membre_ID']}</td>
            <td class='text-center border-r-2 border-black'>{$row['nom']}</td>
            <td class='text-center border-r-2 border-black'>{$row['prénom']}</td>
            <td class='text-center border-r-2 border-black'>{$row['email']}</td>
            <td class='text-center border-r-2 border-black'>{$row['téléphone']}</td>
            <td class='text-center border-r-2 border-black'>{$row['rôle']}</td>
            <td class='text-center border-r-2 border-black'>{$row['équipe_ID']}</td>
            <td class='text-center border-r-2 border-black'>{$row['statut']}</td>
            <td>
                <div class='flex justify-around items-center w-full h-[100%]'>
                    <button class='bg-[#ffb703] w-[35%] py-[2px] rounded-xl'><a href='modify.php?Membre_ID={$row['Membre_ID']}'>Modifier</a></button>
                    <button class='bg-[#ef233c] w-[35%] py-[2px] rounded-xl'> <a href='delete.php?Membre_ID={$row['Membre_ID']}'>Delete</a></button>
                </div>
            </td>
        </tr>";
    }

    echo "</tbody>";
}

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

echo "</table>";

?>


        </section>


<?php
$conn = null;
?>
    
</body>
</html>