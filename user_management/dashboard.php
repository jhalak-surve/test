<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Dashboard</title>
    </head>
    <body>
        <h1>
            Hello <?php echo $_POST["name_of_user"];?>
        </h1>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Jhalak</td>
                    <td>jhalak.surve@gyrix.in</td>
                    <td> </td>
                    <td></td>
                </tr>
                
            </tbody>
        </table>

    </body>


</html>