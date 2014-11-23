<html>
    <head>
        <title>List of Teachers</title>
    </head>
    
    <body>
        <table border="1px black">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>UserName</th>
                    <th>School</th>
                </tr>
            </thead>
            
            <tbody>
                <?php 
                    $m = new MongoClient();
                    $db = $m->GEA;
                    $coll = $db->Teachers;
                    $cursor = $coll->find();

                    foreach($cursor as $doc) {
                        echo "<tr><td>".$doc['fn'] . " " . $doc['ln'] . "</td><td>". $doc['username']."</td><td>". $doc['school']."</td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>