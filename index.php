<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajax Request to MySQL</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
  <div class="container">

    <header>
      <h1>MySQL DB / Ajax Asyncronous GET Request Test</h1>
    </header>

    <div class="row">
      <div class="col-md-6 mx-auto">

        <form>
          <div class="form-group">
            <label for="partName">Part Name:</label>
            <input class="form-control form-control-lg" type="text" name="partName" id="partName">
          </div>

          <div class="form-group">
            <label for="partNumber">Part Number:</label>
            <input class="form-control form-control-lg" type="text" name="partNumber" id="partNumber">
          </div>

          <div class="form-group">
            <label for="description">Description:</label>
            <input class="form-control form-control-lg" type="text" name="description" id="description">
          </div>

          <div class="form-group">
            <label for="vendor">Vendor:</label>
            <input class="form-control form-control-lg" type="text" name="vendor" id="vendor">
          </div>

          <div class="form-group">
            <label for="qty">Qty In Stock:</label>
            <input class="form-control form-control-lg" type="text" name="qty" id="qty">
          </div>

          <div class="form-group">
            <label for="time">Vendor Turnaround Time:</label>
            <input class="form-control form-control-lg" type="text" name="time" id="time">
          </div>
        </form>

      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>