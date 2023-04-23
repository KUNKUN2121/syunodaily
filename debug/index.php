<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>syunodaily</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>		
    .main {
        padding: 40px 15px;
    }
    .container-fluid {
      margin-right: auto;
      margin-left: auto;
      max-width: 750px;
    }
</style>
<body>
<div class="container-fluid">
    <div class="main">
    <form method="post" action="../insert.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="DATETIME">DATETIME</label>
            <input type="datetime-local" class="form-control" id="DATETIME" value="2023-04-01T10:00" >
        </div>
        <div class="form-group">
            <label for="wallet">wallet</label>
            <input type="number" class="form-control" name="wallet" value="1">
        </div>
        <div class="form-group">
            <label for="category">category</label>
            <input type="number" class="form-control" name="category" value="1">
        </div>
        <div class="form-group">
            <label for="wallet">title</label>
            <input type="text" class="form-control" name="title" value="debugtitle">
        </div>
        <div class="form-group">
            <label for="wallet">price</label>
            <input type="text" class="form-control" name="price" value="500">
        </div>
        <div class="form-group">
            <label for="wallet">memo</label>
            <input type="text" class="form-control" name="memo" placeholder="null">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</div>
</body>
</html>