<?php
session_start();
include("header.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="" />


    <!-- <link rel="manifest" href="%PUBLIC_URL%/manifest.json" /> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="style.css" rel="stylesheet" type="text/css">




    <title></title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    clifford: '#da373d',
                }
            }
        }
    }
    </script>
</head>

<div class="p-4 shadow-sm">
    <div class="inline-block text-lg">
        <div class="md:w-4/12 cursor-pointer text-gray-800 dark:text-white" aria-label="the Crib.">
            <h1 class="text-xl font-bold">
                <a href="read.ui.php">
                    Furnitures
                </a>
            </h1>
        </div>
    </div>

    <?php
    if (isset($_SESSION['role'])):
        // echo "session set"
    ?>
    <div class="inline-block top-auto text-teal-800 float-right rounded-full mx-1 px-2"><a href="logout.php"
            class="align-middle">Logout</a></div>

    <?php else:

    ?>
    <div class="inline-block top-auto text-teal-800 float-right rounded-full mx-1 px-2"><a href="login.php"
            class="align-middle">Login</a></div>

    <?php endif; ?>
    <?php

    if (isset($_SESSION['role']) && $_SESSION['role'] == "admin"):
    ?>
    <div class="inline-block top-auto text-teal-800 float-right rounded-full mx-1 px-2"><a href="add.php"
            class="align-middle">Create</a></div>

    <div class="inline-block top-auto text-teal-800 float-right rounded-full mx-1 px-2"><a href="read.ui.php"
            class="align-middle">List</a></div>
            
    <div class="inline-block top-auto text-teal-800 float-right rounded-full mx-1 px-2"><a href="index2.php"
            class="align-middle">Terminal</a></div>
    <?php endif; ?>





    <div class="inline-block top-auto text-teal-800 float-right rounded-full  mx-1 px-2"><a href="index.php"
            class="align-middle">Home</a></div>
</div>