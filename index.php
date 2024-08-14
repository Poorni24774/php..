<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submit Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fae1ec ;
            margin: 150px;
            padding: 0;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #eea3a3 ;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 90%;
        }
        h1 {
            text-align: center;
            color: #ffffff ;
        }
        form {
            display: block;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            color:  #black ;
        }
        input[type="text"],
        input[type="email"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #eea3a3;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }
        input[type="submit"] {
            padding: 10px 15px;
            background-color: #4CAF50;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            width: 100%;
            box-sizing: border-box;
        }
        input[type="submit"]:hover {
            background-color: #18ecb5;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #4CAF50;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #b05af0;
        }
        .actions {
            display: flex;
            justify-content: space-between;
        }
        button {
            padding: 5px 10px;
            margin-right: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .update {
            background-color: #f2ef1a ;
            color: white;
        }
        .update:hover {
            background-color: #f0632b ;
        }
        .delete {
            background-color: #f0632b;
            color: white;
        }
        .delete:hover {
            background-color: #da190b;
        }
    </style>
    <script>
        function confirmDelete(form) {
            if (confirm("Are you sure you want to delete this record?")) {
                form.submit();
            } else {
                return false;
            }
        }

        function editRecord(id, first_name, last_name, email, phone_number) {
            document.getElementById('action').value = 'update';
            document.getElementById('id').value = id;
            document.getElementById('first_name').value = first_name;
            document.getElementById('last_name').value = last_name;
            document.getElementById('email').value = email;
            document.getElementById('phone_number').value = phone_number;
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Submit Form</h1>
        <form action="data.php" method="POST">
            <input type="hidden" id="action" name="action" value="insert">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" required><br><br>

            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required><br><br>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="phone_number">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" required><br><br>

            <input type="submit" value="Submit">
        </form>
        <div>
            <?php include 'view.php'; ?>
        </div>
    </div>
</body>
</html>