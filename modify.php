<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Modify User</title>
</head>
<body  class="bg-[#F2E9E4]">
    <section class="w-11/12 mx-[5%] my-[1rem] py-[1rem]  bg-[#C9ADA7] rounded-2xl ">
        <h2 class='text-2xl font-bold my-6 text-center text-[#4A4E69]'>ajouter Personnel</h2>
    
    <?php
    require_once('./conn.php');

    
    if (isset($_GET['Membre_ID'])) {
        $usr_id = $_GET['Membre_ID'];
        
        try {
            
            $stmt = $conn->prepare("SELECT * FROM personnel WHERE Membre_ID = ?");
            $stmt->bindParam(1, $usr_id);
            $stmt->execute();

            
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                
                echo "<form action='modify_user.php' method='post'  class=' flex flex-col ml-[30%]'>
                        <input type='hidden' name='Membre_ID' value='{$user['Membre_ID']}'>
                        <label >Nom:</label>
                        <input type='text'  name='nom'  class='rounded-lg h-8 w-[60%]' value='{$user['nom']}' required>
                        <br>

                        <label >Prénom:</label>
                        <input type='text'  name='prénom'  class='rounded-lg h-8 w-[60%]' value='{$user['prénom']}' required>
                        <br>

                        <label >Email:</label>
                        <input type='email'  name='email'  class='rounded-lg h-8 w-[60%]' value='{$user['email']}' required>
                        <br>

                        <label >Téléphone:</label>
                        <input type='tel'  name='téléphone'  class='rounded-lg h-8 w-[60%]' value='{$user['téléphone']}' required>
                        <br>

                        <label >Rôle:</label>
                        <input type='text'  name='rôle'  class='rounded-lg h-8 w-[60%]' value='{$user['rôle']}' required>
                        <br>

                        <label >Équipe ID:</label>
                        <input type='text'  name='équipe_ID'  class='rounded-lg h-8 w-[60%]' value='{$user['équipe_ID']}' required>
                        <br>

                        <label >Statut:</label>
                        <input type='text'  name='statut'  class='rounded-lg h-8 w-[60%]' value='{$user['statut']}' required>
                        <br>
                        <div class='bg-[#4A4E69] rounded-lg text-center w-[10%] h-[30px] text-[#F2E9E4]'><input type='submit' value='modify User' ></div>
                        
                    </form>";
            } else {
                echo "User not found.";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "User ID not provided.";
    }

    
    $conn = null;
    ?>

    </section>

</body>
</html>