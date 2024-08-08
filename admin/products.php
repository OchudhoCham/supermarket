<?php
session_start();
include('config/config.php');
include('config/checklogin.php');
check_login();

if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $adn = "DELETE FROM rpos_products WHERE prod_id = ?";
    $stmt = $mysqli->prepare($adn);
    if ($stmt) {
        $stmt->bind_param('i', $id); // Changed 's' to 'i' for integer
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            $stmt->close();
            $success = "Deleted";
            header("refresh:1; url=products.php");
        } else {
            $stmt->close();
            $err = "Failed to delete product. Try again later.";
        }
    } else {
        $err = "Failed to prepare statement. Try again later.";
    }
}

require_once('partials/_head.php');
?>

<body>
  <!-- Sidenav -->
  <?php require_once('partials/_sidebar.php'); ?>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <?php require_once('partials/_topnav.php'); ?>
    <!-- Header -->
    <div style="background-image: url(assets/img/theme/munuki-top.jpg); background-size: cover;" class="header pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body"></div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--8">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <a href="add_product.php" class="btn btn-outline-success">
                <i class="fas fa-utensils"></i>
                Add New Product
              </a>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Product Code</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $ret = "SELECT * FROM rpos_products";
                  $stmt = $mysqli->prepare($ret);
                  $stmt->execute();
                  $res = $stmt->get_result();
                  while ($prod = $res->fetch_object()) {
                  ?>
                    <tr>
                      <td>
                        <?php if ($prod->prod_img) { ?>
                          <img src="assets/img/products/<?php echo $prod->prod_img; ?>" height="60" width="60" class="img-thumbnail">
                        <?php } else { ?>
                          <img src="assets/img/products/default.jpg" height="60" width="60" class="img-thumbnail">
                        <?php } ?>
                      </td>
                      <td><?php echo $prod->prod_code; ?></td>
                      <td><?php echo $prod->prod_name; ?></td>
                      <td>$ <?php echo $prod->prod_price; ?></td>
                      <td>
                        <a href="products.php?delete=<?php echo $prod->prod_id; ?>">
                          <button class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i>
                            Delete
                          </button>
                        </a>
                        <a href="update_product.php?update=<?php echo $prod->prod_id; ?>">
                          <button class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i>
                            Update
                          </button>
                        </a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <?php require_once('partials/_footer.php'); ?>
    </div>
  </div>
  <!-- Argon Scripts -->
  <?php require_once('partials/_scripts.php'); ?>
</body>

</html>
