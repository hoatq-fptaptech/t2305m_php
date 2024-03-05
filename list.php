<?php
    // list product data
//$data = [];
//$data[0] = [
//    "id"=>1,
//    "image"=>"",
//    "name"=>"Iphone 15 pro max",
//    "price"=> 1200
//];
//$data[1] = [
//    "id"=>2,
//    "image"=>"",
//    "name"=>"Iphone 14 pro max",
//    "price"=> 1100
//];

$data = [
    [
        "id"=>1,
        "image"=>"/images/product.webp",
        "name"=>"Iphone 15 Pro Max",
        "price"=>1200
    ],
    [
        "id"=>2,
        "image"=>"/images/product.webp",
        "name"=>"Iphone 14 Pro Max",
        "price"=>1100
    ]
];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <div class="container">
            <h1>List Product</h1>
            <a href="/form.php">Create new a product</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                </tr>
                </thead>
                <tbody>
                <?php  foreach ($data as $item): ?>
                <tr>
                    <th scope="row"><?php echo $item["id"]; ?></th>
                    <td><img src="<?php echo $item["image"]; ?>" width="80"/></td>
                    <td><?php echo $item["name"]; ?></td>
                    <td><?php echo $item["price"]; ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>