<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin panel</title>
    <style>
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4caf50;
            color: #fff;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
        .btn-block {
            background-color: red;
            border: none;
            color: white;
            width: 60px;
            height: 30px;
            transition: 0.4s ease;
        }
        .btn-delete {
            background-color: red;
            border: none;
            color: white;
            width: 60px;
            height: 30px;
            transition: 0.4s ease;
        }
         .btn-delete:hover {
            scale: 110%;
        }

        .btn-block:hover {
            scale: 110%;
        }

        .btn-unblock {
            background-color: green;
            border: none;
            color: white;
            width: 60px;
            height: 30px;
            transition: 0.4s ease;
        }
        .btn-unblock:hover {
            scale: 110%;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<?php include 'header1.php'; ?>
<body>
    <div class="container">
    <table border="1" cellspacing="5" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Age</th>
            <th>State</th>
            <th>Status</th>
            <th>Delete</th>
        </tr>
        <?php 
        foreach ($users as $user) : ?>
            <tr>
                <td><?= $user['id']; ?></td>
                <td><?= $user['first_name']; ?></td>
                <td><?= $user['last_name']; ?></td>
                <td><?= $user['email']; ?></td>
                <td><?= $user['gender']; ?></td>
                <td><?= $user['age']; ?></td>
                <td><?= $user['state']; ?></td>
                <td><button class="btn-block" data-user-id="<?= $user['id']; ?>" data-status-id="<?= $user['status']; ?>">Block</button></td>
                <td><button class="btn-delete" data-user-id="<?= $user['id']; ?>">Delete</button></td>
            </tr>
        <?php endforeach; ?>
    </table>
    </div>
    <?php include 'footer1.php'; ?>
    <script>
        $(document).ready(function () {
            $(".btn-block").on("click", function () {
                var button = $(this);
                var userId = button.data("user-id");

                $.ajax({
                    type: "POST",
                    url: "<?= base_url() ?>index.php/admin/blockUser",
                    data: {
                        userId: userId,
                    },
                    dataType: 'json',
                    success: function (response) {
                        if (response.status == '1') {
                            button.removeClass("btn-unblock");
                            button.addClass("btn-block");
                            button.text("Block");
                        } else {
                            button.removeClass("btn-block");
                            button.addClass("btn-unblock");
                            button.text("Unblock");
                        }
                    },
                    error: function (error) {
                        console.error("Error:", error);
                    }
                });
            });
            $(".btn-delete").on("click", function () {
            var button = $(this);
            var userId = button.data("user-id");
            var isConfirmed = confirm("Are you sure you want to delete this user?");

            if (isConfirmed) {
            $.ajax({
                type: "POST",
                url: "<?= base_url() ?>index.php/admin/deleteUser",
                data: {
                    userId: userId,
                },
                dataType: 'json',
                success: function (response) {
                    if (response.status === 'success') {
                        button.closest("tr").remove();
                    } else {
                        alert('Error deleting user: ' + response.message);
                    }
                },
                error: function (error) {
                    console.error("Error:", error);
                }
            });
          }     
        });
    });
    </script>
</body>
</html>