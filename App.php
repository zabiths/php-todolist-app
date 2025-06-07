<?php

/*
|---------------------------------------------------------------
| Urutan Pembuatan Aplikasi Todolist
|---------------------------------------------------------------
| 1. Buat Entity (Entity/TodoList.php) untuk struktur data todo.
| 2. Buat Helper (Helper/InputHelper.php) untuk input user.
| 3. Buat Repository (Repository/TodolistRepository.php) untuk
|    menyimpan, mengambil, dan menghapus data todo.
| 4. Buat Service (Service/TodolistService.php) untuk logika
|    bisnis (tambah, hapus, tampil todo).
| 5. Buat View (View/TodolistView.php) untuk menampilkan menu
|    dan menerima input user.
| 6. Buat file utama ini (App.php) untuk menggabungkan semua
|    komponen, membuat objek, dan menjalankan aplikasi.
|
| Alur di bawah ini:
| - Import semua file yang dibutuhkan.
| - Buat objek repository.
| - Buat objek service dengan repository.
| - Buat objek view dengan service.
| - Jalankan aplikasi dengan $todolistView->showTodolist();
*/

// Memasukkan file class TodoList (entity)
require_once __DIR__ . '/Entity/TodoList.php';

// Memasukkan file helper untuk input dari user
require_once __DIR__ . '/Helper/InputHelper.php';

// Memasukkan file repository untuk data todolist
require_once __DIR__ . '/Repository/TodolistRepository.php';

// Memasukkan file service untuk logika bisnis todolist
require_once __DIR__ . '/Service/TodolistService.php';

// Memasukkan file view untuk tampilan menu todolist
require_once __DIR__ . '/View/TodolistView.php';

// Menggunakan class dari namespace yang sudah di-import
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

// Menampilkan judul aplikasi di terminal
echo "Aplikasi Todolist" . PHP_EOL;

// Membuat objek repository untuk menyimpan data todolist
$todolistRepository = new TodolistRepositoryImpl();

// Membuat objek service, membutuhkan repository sebagai parameter
$todolistService = new TodolistServiceImpl($todolistRepository);

// Membuat objek view, membutuhkan service sebagai parameter
$todolistView = new TodolistView($todolistService);

// Menjalankan aplikasi dengan menampilkan menu utama todolist
$todolistView->showTodolist();


