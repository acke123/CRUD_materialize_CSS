<?php
require 'Database.php';

class TableConnectionData extends Database
{
    public function getDataFromTable()
    {
        $db = $this->getConnection();
        if ($db == false) {
            return 'Connection error #404';
        } else {
            $sql = "SELECT* FROM users";
            $query = mysqli_query($db, $sql);
            return mysqli_fetch_all($query);
        }
    }
}

$data = new TableConnectionData();
?>

<table class="striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Korisnicko ime</th>
        <th>Email</th>
        <th>Aktivan</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data->getDataFromTable() as $key => $information): ?>
        <tr>
            <td><?php echo $information[0]; ?></td>
            <td><?php echo $information[1]; ?></td>
            <td><?php echo $information[2]; ?></td>
            <td><?php echo $information[3]; ?></td>
            <td><?php echo $information[4]; ?></td>
            <td><?php echo $information[5]; ?></td>
            <td>
                <a href='connection/action/GetUser.php?id=<?php echo $information[0]; ?>'
                   class="btn waves-effect blue right"><i
                            class="material-icons">edit</i>
                </a>
            </td>
            <td>
                <form id="deleteForm">
                    <input type=hidden id="result" name="result"/>
                    <a onclick="remove()" href='connection/action/Delete.php?id=<?php echo $information[0]; ?>'
                       class="btn waves-effect red left"><i class="material-icons">delete</i>
                    </a>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>


