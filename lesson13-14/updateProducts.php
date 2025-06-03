<?php
session_start();
include_once("config.php");

if (empty($_SESSION['username'])) {
    header("Location: addproducts.php");
    exit();
}

// Merr ID e produktit nga URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Merr të dhënat e produktit nga databaza
$sql = 'SELECT * FROM products WHERE id = :id';
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$product = $stmt->fetch();

if (!$product) {
    echo "<div class='alert alert-danger'>Produkti nuk u gjet!</div>";
    exit();
}

// Përditëso produktin nëse forma është dërguar
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $updateSql = "UPDATE products SET title = :title, description = :description, quantity = :quantity, price = :price WHERE id = :id";
    $updateStmt = $conn->prepare($updateSql);
    $updateStmt->bindParam(':title', $title);
    $updateStmt->bindParam(':description', $description);
    $updateStmt->bindParam(':quantity', $quantity);
    $updateStmt->bindParam(':price', $price);
    $updateStmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($updateStmt->execute()) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<div class='alert alert-danger'>Gabim gjatë përditësimit të produktit!</div>";
    }
}
?>

<?php include_once('header.php'); ?>

<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Welcome, <i> <?php echo $_SESSION['username']; ?> </i></a>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="logout.php">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid" style="margin-top: 70px;">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <h2 class="mt-4">Përditëso Produktin</h2>
      <form class="form-profile" action="" method="post">
        <div class="form-group">
          <label for="id">ID</label>
          <input type="number" class="form-control" id="id" name="id" value="<?php echo htmlspecialchars($product['id']); ?>" readonly>
        </div>
        <div class="form-group">
          <label for="title">Titulli</label>
          <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($product['title']); ?>" required>
        </div>
        <div class="form-group">
          <label for="description">Përshkrimi</label>
          <input type="text" class="form-control" id="description" name="description" value="<?php echo htmlspecialchars($product['description']); ?>" required>
        </div>
        <div class="form-group">
          <label for="quantity">Sasia</label>
          <input type="number" class="form-control" id="quantity" name="quantity" value="<?php echo htmlspecialchars($product['quantity']); ?>" required>
        </div>
        <div class="form-group">
          <label for="price">Çmimi</label>
          <input type="number" class="form-control" id="price" name="price" value="<?php echo htmlspecialchars($product['price']); ?>" required>
        </div>
        <button type="submit" name="update" class="btn btn-primary">Përditëso Produktin</button>
      </form>
    </main>
  </div>
</div>

<?php include("footer.php"); ?>