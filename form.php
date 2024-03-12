<?php
$host = "localhost";
$user = "root";
$pwd = "root";
$db = "t2305m_php";

$conn = new mysqli($host,$user,$pwd,$db);
if($conn->error){
    die("Connection refuse!");
}
// query
$sql = "select id,name from categories";
$result = $conn->query($sql);

$data = [];
if($result->num_rows > 0){ // kiểm tra xem có dữ liệu row nào trong table hay ko
    while ($row = $result->fetch_assoc()){
        $data[] = $row; // $data[i] = $row  // $data.push($row) $data.add($row)
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <div class="container">
            <h1>Create new product</h1>
            <a href="/list.php"><< Back to list</a>
            <form action="/create.php" method="post">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Qty</label>
                    <input type="number" class="form-control" name="qty" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select name="category_id" class="form-control">
                        <?php foreach ($data as $item):?>
                         <option value="<?php echo $item["id"];?>"><?php echo $item["name"];?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
</body>
</html>