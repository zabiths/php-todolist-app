<?php

// Memasukkan semua file yang dibutuhkan untuk test service
require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

// Fungsi untuk test menambah todo lewat service
function testAddTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar OOP");
    $todolistService->addTodolist("Belajar Database");

    $todolistService->showTodolist();
}

// Fungsi untuk test menghapus todo lewat service
function testRemoveTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar OOP");
    $todolistService->addTodolist("Belajar Database");

    $todolistService->showTodolist();
    $todolistService->removeTodolist(2); // Menghapus todo nomor 2
    $todolistService->showTodolist();
}

// Menjalankan salah satu test
testAddTodolist();