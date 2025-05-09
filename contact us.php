<?php
// Sample data for fuel types and their prices in Indian Rupees
$fuelTypes = [
    ['type' => 'Diesel', 'price' => '₹90.00'],
    ['type' => 'Petrol', 'price' => '₹100.00'],
    ['type' => 'Gas', 'price' => '₹60.00'],
];
?>
<?php

require_once "config.php";

$name = $emailaddress = $message = "";
$name_err = $emailaddress_err = $message_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Check if name is empty
    if (empty(trim($_POST["name"]))) {
        $name_err = "Name cannot be blank";
    } else {
        $name = trim($_POST["name"]);
    }

    // Check for email
    if (empty(trim($_POST['emailaddress']))) {
        $emailaddress_err = "Email cannot be blank";
    } else {
        $emailaddress = trim($_POST['emailaddress']);
    }

    // Check for message
    if (empty(trim($_POST['message']))) {
        $message_err = "Message cannot be blank";
    } else {
        $message = trim($_POST['message']);
    }

    // If there were no errors, go ahead and insert into the database
    if (empty($name_err) && empty($emailaddress_err) && empty($message_err)) {
        $sql = "INSERT INTO contact (name, emailaddress, message) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_emailaddress, $param_message);

            // Set these parameters
            $param_name = $name;
            $param_emailaddress = $emailaddress;
            $param_message = $message;

            // Try to execute the query
            if (mysqli_stmt_execute($stmt)) {
                echo "Success";
            } else {
                echo "Something went wrong... cannot redirect!";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<header class="text-gray-700 bg-white body-font">
    <div class="container mx-auto flex flex-col flex-wrap items-center p-5 md:flex-row">
      <a class="title-font mb-4 flex items-center font-medium text-gray-900 md:mb-0">
        <svg xmlns="C:\Users\Yagnu\Downloads\Black & White Minimalist Business Logo_adobe_express.svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="h-10 w-10 rounded-full bg-indigo-500 p-2 text-white" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <h3>
          <span class="inline-block rounded bg-primary text-sm font-medium uppercase leading-normal text-gray-900 shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">
            Welcome to Fuel&Fix
          </span>
        </h3>
      </a>
      <nav class="flex flex-wrap items-center justify-center text-base md:mr-auto md:ml-4 md:border-l md:border-gray-400 md:py-1 md:pl-4">
        <a href="http://localhost/fuel/" target="_blank" class="mr-5 hover:text-indigo-600"><button>Home</button></a>
        <a href="http://localhost/fuel/about%20us.php" target="_blank" class="mr-5 hover:text-indigo-600"><button>About Us</button></a>
        <a href="http://localhost/fuel/contact%20us.php" target="_blank" class="mr-5 hover:text-indigo-600"><button>Contact</button></a>
        <a href="https://www.google.com/maps/search/?api=1&query=petrol+stations+near+me" target="" class="mr-5 hover:text-indigo-600">Nearby Fuel Stations</a>
        <?php
// Sample data for fuel types and their prices in Indian Rupees
$fuelTypes = [
    ['type' => 'Diesel', 'price' => '₹90.00'],
    ['type' => 'Petrol', 'price' => '₹100.00'],
    ['type' => 'Gas', 'price' => '₹60.00'],
];
?>
<div class="overlay"></div>
<div class="top-bar">
  
    <div class="nav-links">
        <div class="dropdown">
            <a href="#" class="dropbtn">Types</a>
            <div class="dropdown-content">
            <?php foreach ($fuelTypes as $fuel): ?>
                    <a href="order.php?fuel=<?= urlencode($fuel['type']) ?>"><?= $fuel['type'] ?>: <?= $fuel['price'] ?></a>
                <?php endforeach; ?>
            </div>
        </div>
        </div>
            
      </nav>

      <a href="http://localhost/fuel/login.php" target="_blank"><button
        type="button"
        class="inline-block rounded bg-indigo-500 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-indigo-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-indigo-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-indigo-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">
        Login Here
      </button></a>
      <a href="http://localhost/fuel/register.php" target="_blank"><button
        class="inline-block rounded bg-indigo-500 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-indigo-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-indigo-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-indigo-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">
        Signup Now
      </button></a>
      <a href="http://localhost/demo%20site/logout.php" target="_blank"><button
        class="inline-block rounded bg-indigo-500 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-indigo-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-indigo-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-indigo-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">
        Logout
      </button></a>
    </div>
  </header>


<section class="text-gray-600 body-font relative">
  <form action="" method="post">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-12">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">For Your Help And Support</p>
      </div>
      <div class="lg:w-1/2 md:w-2/3 mx-auto">
        <div class="flex flex-wrap -m-2">
          <div class="p-2 w-1/2">
            <div class="relative">
              <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
              <input type="text" id="name" name="name" class="w-full bg-white bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              <span class="text-red-500"><?php echo $name_err; ?></span>
            </div>
          </div>
          <div class="p-2 w-1/2">
            <div class="relative">
              <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
              <input type="email" id="email" name="emailaddress" class="w-full bg-white bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              <span class="text-red-500"><?php echo $emailaddress_err; ?></span>
            </div>
          </div>
          <div class="p-2 w-full">
            <div class="relative">
              <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
              <textarea id="message" name="message" class="w-full bg-white bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
              <span class="text-red-500"><?php echo $message_err; ?></span>
            </div>
          </div>
          <div class="p-2 w-full">
            <button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit Response</button>
          </div>
          <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
            <a class="text-indigo-500">esnewzzofficial@email.com</a>
            <p class="leading-normal my-5">640 RC Technical
              <br>Opposite Sola Civil, 380061
            </p>
            <span class="inline-flex">
              <a class="text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-4 text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53A4.48 4.48 0 0016.11 3c-2.63 0-4.67 2.24-4.48 4.9A13.07 13.07 0 011.64 4.16a4.48 4.48 0 001.39 5.9A4.43 4.43 0 012 9.7v.05a4.48 4.48 0 003.56 4.4 4.52 4.52 0 01-2.02.08 4.48 4.48 0 004.19 3.1A9 9 0 010 19.54a12.73 12.73 0 006.92 2"></path>
                </svg>
              </a>
              <a class="ml-4 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zM17.5 6.5h.01"></path>
                </svg>
              </a>
              <a class="ml-4 text-gray-500">
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                  <path stroke="none" d="M16 8a6 6 0 11-12 0 6 6 0 0112 0zm1 12h-14c-1.1 0-2-.9-2-2v-1a9 9 0 0118 0v1c0 1.1-.9 2-2 2z"></path>
                </svg>
              </a>
            </span>
          </div>
        </div>
      </div>
    </div>
  </form>
</section>
</body>
</html>
