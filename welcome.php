<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Fuel&Fix</title>
  <style>
    body {
      background: rgb(250,250,250);
      background: linear-gradient(38deg, rgba(250,250,250,1) 0%, rgba(220,220,220,1) 50%, rgba(200,200,200,1) 100%);
    }
  </style>
</head>
<link rel="stylesheet" href="style.css">
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

  <section class="body-font text-gray-700">
      <div class="container mx-auto flex flex-col items-center px-5 py-24 md:flex-row">
        <div class="mb-16 flex flex-col items-center text-center md:mb-0 md:w-1/2 md:items-start md:pr-16 md:text-left lg:flex-grow lg:pr-24">
          <h1 class="title-font mb-4 text-3xl font-medium text-gray-900 font-serif dark:text-gray-700">On-Road Fuel Delivery is a service that brings fuel directly to your location, ensuring that you never have to worry about running out of fuel on the road. Our service offers the following benefits:

Convenience: Save time and effort by having fuel delivered to your vehicle, wherever you are.
Reliability: Our on-demand service is available 24/7, ensuring you have access to fuel at all times.
Safety: Avoid the hazards of running out of fuel in unsafe or unfamiliar areas.

          </h1>
          <div class="flex justify-center">
            <button class="inline-flex rounded border-0 bg-indigo-500 py-2 px-6 text-lg text-white hover:bg-indigo-600 focus:outline-none">Order Now</button>
            <button class="ml-4 inline-flex rounded border-0 bg-gray-300 py-2 px-6 text-lg text-gray-700 hover:bg-gray-400 focus:outline-none">Learn More</button>
          </div>
        </div>
        <div class="w-5/6 md:w-1/2 lg:w-full lg:max-w-lg">
          <img class="rounded object-cover object-center" alt="hero" src="https://thumbs.dreamstime.com/b/alternative-refuel-fuel-cng-lpg-ngv-your-vehicle-65960646.jpg">
        </div>
      </div>
    </section>
</body>
</html>
