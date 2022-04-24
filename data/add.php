<?php include "header.php" ?>
    <h1 class="">Add database</h1>
    <form action="add_data.php" method="POST" class="p-4">
        <input type="text" class="p-1 input-group-sm" name="name" > <br> <br>
        <input type="username" class="p-1 input-group-sm" name="username" > <br> <br>
        <input type="password" class="p-1 input-group-sm" name="password" > <br>
        <button class="btn btn-outline-success mt-4" type="submit" name="submit">Add</button>
        

    </form>
    <?php include "footer.php" ?>
