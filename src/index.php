<?php

include("./includes/navbar.php");
if (!isset($_SESSION['role'])) {
    // header("Location:login.php");
?>
<script type="text/javascript">
window.location.href = 'login.php';
</script>
<?php

}


include "read.php";





?>


<div class=" container flex flex-wrap flex-col md:flex-row items-center justify-between">

    <?php
    $i = 1;
    foreach ($row as $rows) {
        $i++;
    ?>
    <div class="w-full lg:w-1/2 p-3">
        <div class="flex flex-col lg:flex-row rounded overflow-hidden h-auto lg:h-32 border shadow shadow-lg">
            <img class="block h-auto w-full lg:w-48 flex-none bg-cover h-24" src="<?= $rows['url'] ?>">
            <div
                class="bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                <div class="text-black font-bold text-xl mb-2 leading-tight">
                    <?= $rows['name'] ?>
                </div>
                <p class="text-grey-darker text-base">Type: <?= $rows['type'] ?>
                </p>
                <p class="text-grey-darker text-base">description: <?= $rows['description'] ?>
                </p>
            </div>
        </div>
    </div>

    <?php } ?>



</div>
</body>
<!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->

<!-- <body>

    <div class="container mt-4 mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <div
                class="card m-2 cursor-pointer border border-gray-400 rounded-lg hover:shadow-md hover:border-opacity-0 transform hover:-translate-y-1 transition-all duration-200">
                <div class="m-3">
                    <h2 class="text-lg mb-2">Title
                        <span
                            class="text-sm text-teal-800 font-mono bg-teal-100 inline rounded-full px-2 align-top float-right animate-pulse">Tag</span>
                    </h2>
                    <p
                        class="font-light font-mono text-sm text-gray-700 hover:text-gray-900 transition-all duration-200">
                        Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year
                        mission: to explore strange new worlds.</p>
                </div>
            </div>
        </div>
    </div>
</body> -->