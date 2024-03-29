<?php

use Framework\Session;
?>

<!-- Nav -->
<header class="bg-gradient text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-semibold">
            <a href="/">PulseTech</a>
        </h1>
        <button id="mobile-menu-btn" class="block lg:hidden text-white focus:outline-none">
            <i class="fas fa-bars fa-lg"></i>
        </button>
        <nav class="space-x-4" id='mobile-menu'>
            <?php if (Session::has('user')) : ?>
                <div class="flex justify-between items-center gap-4">
                    <div class="flex mobile gap-4">
                        <div class="text-blue-500 font-bold">
                        <i class="fa-solid fa-user"></i> <?= Session::get('user')['name'] ?> 
                        </div>
                        <form method="POST" action="/auth/logout">
                            <button type="submit" class="text-white inline hover:underline">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </button>
                        </form>
                    </div>
                    <a href="/listings/create" class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded shadow-xl hover:shadow-md transition duration-300"><i class="fa fa-edit"></i> Post a Job</a>
                </div>
            <?php else : ?>
                <a href="/auth/login" class="text-white hover:underline">Login</a>
                <a href="/auth/register" class="text-white hover:underline">Register</a>
            <?php endif; ?>
        </nav>
    </div>
</header>