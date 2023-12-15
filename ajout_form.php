<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body  class="bg-[#F2E9E4]">
    
    <section class="w-11/12 mx-[5%] my-[1rem] py-[1rem]  bg-[#C9ADA7] rounded-2xl ">
        <h2 class='text-2xl font-bold my-6 text-center text-[#4A4E69]'>ajouter Personnel</h2>

        <form action="ajout.php" method="post" class=" flex flex-col ml-[30%]">
            <label>First Name:</label>
            <input type="text" name="nom" class="rounded-lg h-8 w-[60%]" required>
            <br>

            <label>Last Name:</label>
            <input type="text" name="prénom" class="rounded-lg h-8 w-[60%]" required>
            <br>

            <label>Email:</label>
            <input type="email" name="email" class="rounded-lg h-8 w-[60%]" required>
            <br>

            <label>Phone:</label>
            <input type="text" id="phone" name="téléphone" class="rounded-lg h-8 w-[60%]" required>
            <br>

            <label>Role:</label>
            <input type="text" name="rôle" class="rounded-lg h-8 w-[60%]" required>
            <br>

            <label>Team ID:</label>
            <input type="text" name="équipe_ID" class="rounded-lg h-8 w-[60%]" required>
            <br>

            <label>Status:</label>
            <input type="text" name="statut" class="rounded-lg h-8 w-[60%]" required>
            <br>

            <div class="bg-[#4A4E69] rounded-lg text-center w-[10%] h-[30px] text-[#F2E9E4]"><input type="submit" value="Add User" ></div>
        </form>
    </section>



</body>
</html>