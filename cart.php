<?php include 'topnav.php';
include 'config.php';
$pdo = pdo_connect_mysql();

// If the user clicked the add to cart button on the product page we can check for the form data
if (isset($_POST['product_id'], $_POST['quantity']) && is_numeric($_POST['product_id']) && is_numeric($_POST['quantity'])) {
	// Set the post variables so we easily identify them, also make sure they are integer
	$product_id = (int)$_POST['product_id'];
	$quantity = (int)$_POST['quantity'];
	// Prepare the SQL statement, we basically are checking if the product exists in our databaser
	$stmt = $pdo->prepare('SELECT * FROM shoppingcart WHERE id = ?');
	$stmt->execute([$_POST['product_id']]);
	// Fetch the product from the database and return the result as an Array
	$product = $stmt->fetch(PDO::FETCH_ASSOC);
	// Check if the product exists (array is not empty)
	if ($product && $quantity > 0) {
		// Product exists in database, now we can create/update the session variable for the cart
		if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
			if (array_key_exists($product_id, $_SESSION['cart'])) {
				// Product exists in cart so just update the quanity
				$_SESSION['cart'][$product_id] += $quantity;
			} else {
				// Product is not in cart so add it
				$_SESSION['cart'][$product_id] = $quantity;
			}
		} else {
			// There are no products in cart, this will add the first product to cart
			$_SESSION['cart'] = array($product_id => $quantity);
		}
	}
	// Prevent form resubmission...
}

// Remove product from cart, check for the URL param "remove", this is the product id, make sure it's a number and check if it's in the cart
if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
	// Remove the product from the shopping cart
	unset($_SESSION['cart'][$_GET['remove']]);
}

// Update product quantities in cart if the user clicks the "Update" button on the shopping cart page
if (isset($_POST['update']) && isset($_SESSION['cart'])) {
	// Loop through the post data so we can update the quantities for every product in cart
	foreach ($_POST as $k => $v) {
		if (strpos($k, 'quantity') !== false && is_numeric($v)) {
			$id = str_replace('quantity-', '', $k);
			$quantity = (int)$v;
			// Always do checks and validation
			if (is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
				// Update new quantity
				$_SESSION['cart'][$id] = $quantity;
			}
		}
	}
	// Prevent form resubmission...
	header('location: index.php?page=cart');
	exit;
}

// Send the user to the place order page if they click the Place Order button, also the cart should not be empty
if (isset($_POST['placeorder']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
	header('Location: index.php?page=placeorder');
	exit;
}

// Check the session variable for products in cart
$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$products = array();
$subtotal = 0.00;
// If there are products in cart
if ($products_in_cart) {
	// There are products in the cart so we need to select those products from the database
	// Products in cart array to question mark string array, we need the SQL statement to include IN (?,?,?,...etc)
	$array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
	$stmt = $pdo->prepare('SELECT * FROM shoppingcart WHERE id IN (' . $array_to_question_marks . ')');
	// We only need the array keys, not the values, the keys are the id's of the products
	$stmt->execute(array_keys($products_in_cart));
	// Fetch the products from the database and return the result as an Array
	$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
	// Calculate the subtotal
	foreach ($products as $product) {
		$subtotal += (float)$product['price'] * (int)$products_in_cart[$product['id']];
	}
}
?>

<!-- Breadcrumb Start -->
<div class="container-fluid">
	<div class="row px-xl-5">
		<div class="col-12">
			<nav class="breadcrumb bg-white mb-30">
				<a class="breadcrumb-item text-dark" href="index.php">Home</a>
				<span class="breadcrumb-item active">Shopping Cart</span>
			</nav>
		</div>
	</div>
</div>
<!-- Breadcrumb End -->

<!-- Cart Start -->
<div class="container-fluid">
	<div class="row px-xl-5">
		<div class="col-lg-8 table-responsive mb-5">
			<table class="table table-white table-borderless table-hover text-center mb-0">
				<thead class="thead">
					<tr>
						<th>Products</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
						<th>Remove</th>
					</tr>
				</thead>
			</table>
		</div>
		<div class="col-lg-4">
			<h5 class="section-title position-relative text-uppercase mb-3">
				<span class="bg-white pe-3">Cart Summary</span>
			</h5>
			<div class="bg-white p-30 mb-5">
				<div class="border-bottom pb-2">
					<div class="d-flex justify-content-between mb-3">
						<h6>Subtotal</h6>
						<h6>0€</h6>
					</div>
					<div class="d-flex justify-content-between">
						<h6 class="font-weight-medium">Shipping</h6>
						<h6 class="font-weight-medium">0€</h6>
					</div>
				</div>
				<div class="pt-2">
					<div class="d-flex justify-content-between mt-2">
						<h5>Total</h5>
						<h5>0€</h5>
					</div>
					<a href="placeorder.php" class="btn btn-block btn-black font-weight-bold my-3 py-3 text-decoration-none">Proceed To Checkout</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Cart End -->

<?php include 'footer.php'; ?>