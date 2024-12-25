<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/output.css">
    <link rel="stylesheet" href="assets/css/input.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>to do list</title>
</head>

<body class="  min-h-screen pt-2 bg-no-repeat bg-cover"
    style="background-image: url('assets/images/wallpaperflare.com_wallpaper\ \(10\).jpg')">
    <!-- container -->
    <!-- blur -->
    <div class="container h-full bg-center bg-cover flex flex-col justify-center  ">
        <!-- header of the app -->
        <div class="app_row flex-wrap flex max-sm:justify-center gap-3 m">
            <button
                class="add_btn bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
                id="add_one">add task +</button>
            <!-- search bar -->

            <form class="w-[250px] max-w-md mx-auto">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search task" required />
                    <button type="button"
                        class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>

            <button
                class="add_btn bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
                id="add_mult">add multiple +</button>
        </div>
        <div class="cards flex-wrap flex  gap-12 px-12 justify-evenly h-full">
            <!-- modal -->
            <!-- todo card -->
            <div class="card todo border-red-700">
                <div class="card_head border-b-red-700">
                    <h2>to do</h2>
                    <span class="counter" id="todo_counter">2</span>
                </div>
                <ul id="todo_list" class="list-container">
                   
                </ul>
            </div>
            <!-- in progress card -->
            <div class="card progress border-yellow-400">
                <div class="card_head border-b-yellow-400">
                    <h2>in progress</h2>
                    <span class="counter" id="progress_counter">3</span>
                </div>
                <ul id="in_progress_list" class="list-container">
                   
                </ul>
            </div>
            <!-- done_card -->
            <div class="card done border-green-500">
                <div class="card_head border-b-green-500">
                    <h2>done</h2>
                    <span class="counter" id="done_counter">1</span>
                </div>
                <ul id="done_list" class="list-container">
                    
                </ul>
            </div>
        </div>

    </div>
    <!-- modal task start -->
    <div  class="modal absolute left-0 top-0 items-center justify-center w-full h-full hidden">
        <form id="modalForm" class="conf-modal min-w-96 bg-white p-4 rounded-sm md:p-5">
            <div class="grid gap-4 mb-4 grid-cols-2">
                <div class="col-span-2">
                    <h1 class="text-center font-bold text-blue-900">Add Task</h1>
                    <label for="title_add"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                    <input type="text" name="title" id="title_add"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Type task Title" required="">
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="status"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                    <select id="status"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected=""> Status</option>
                        <option value="Todo">Todo</option>
                        <option value="In progress">In Progress</option>
                        <option value="Done">Done</option>
                    </select>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="priority"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">priority</label>
                    <select id="priority"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="">priority</option>
                        <option value="P1">P1</option>
                        <option value="P2">P2</option>
                        <option value="P3">P3</option>
                    </select>
                </div>
                <div class="col-span-2">
                    <label for="due_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">due
                        date</label>
                    <input type="date" name="date" id="due_date"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Type task Title" required="">
                </div>
                <div class="col-span-2">

                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Description</label>
                    <textarea id="description" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Write the description here..."></textarea>

                </div>

            </div>
            <div class="footer_drop flex justify-between">
                <button type="button"
                id="submit_btn"
                class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd"></path>
                </svg>
                Add new Task
            </button>
            <!-- cencel btn -->
            <button type="button"
            class="text-white inline-flex items-center bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
            id="cancel_btn">
            
            </svg>
            cancel
        </button>
            </div>
            
        </form>
    </div>
    <!-- modal end -->
     <!-- update task -->
     <div  class="task-modal hidden absolute  left-0 top-0 items-center justify-center w-full h-full ">
        <form id="modalForm_update" class="conf-modal w-96 bg-white p-4 rounded-sm md:p-5 ">
            <div class="grid gap-4 mb-4 grid-cols-2">
                <div class="col-span-2">
                    <h1 class="text-center font-bold text-blue-900">Update Task</h1>
                    
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="priority_update"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">priority</label>
                    <select id="priority_update"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="">priority</option>
                        <option value="P1">P1</option>
                        <option value="P2">P2</option>
                        <option value="P3">P3</option>
                    </select>
                </div>
               
                <div class="col-span-1">
                    <label for="due_date_update" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">due
                        date</label>
                    <input type="date" name="date" id="due_date_update"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Type task Title" required="">
                </div>
                <div class="col-span-2">

                    <label for="description_update" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Description</label>
                    <textarea id="description_update" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Write the description here..."></textarea>

                </div>

            </div>
            <div class="footer_drop flex justify-between">
                <!-- update_btn -->
                <button type="button"
                id="submit_btn_update"
                class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd"></path>
                </svg>
                update Task
            </button>
            <!-- cencel btn -->
            <button type="button"
            class="text-white inline-flex items-center bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
            id="cancel_btn_update">
            
            </svg>
            cancel
        </button>
            </div>
            
        </form>
    </div>
    <!-- end update task -->

    <!-- task information -->
     <div class="information_modal absolute hidden items-center justify-center h-full w-full top-0">
<div class="info_task flex flex-col  max-w-96 p-6 min-h-fit bg-white  rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <i class="fa-solid fa-xmark self-end" style="color: #000000;"></i>
        <h5 id="title_info" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
    <p id="description_info" class="mb-3 font-normal text-gray-700 dark:text-gray-400 flex-wrap">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
    <div class="info_footer flex justify-between">
        <p id="date_info" class="mb-3 font-normal text-gray-400 text-sm ">03/13/2024</p>
        <p id="status_info" class="mb-3 font-bold text-black-400 text-sm ">Done</p>
    </div>
   
   
</div>

     </div>
    <script src="views/script.js"></script>
</body>

</html>