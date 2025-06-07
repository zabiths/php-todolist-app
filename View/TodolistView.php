<?php 

// Mendefinisikan namespace View
namespace View {

    use Service\TodolistService;
    use Helper\InputHelper;

    // Class untuk menampilkan menu dan menerima input user
    class TodolistView {

        // Properti service
        private TodolistService $todolistService;

        // Konstruktor, menerima service
        public function __construct(TodolistService $todolistService)
        {
            $this->todolistService = $todolistService;
        }

        // Menampilkan menu utama todolist
        function showTodolist(): void 
        {
            // Selama true, tampilkan menu dan minta input dari user.
            while (true) {
                $this->todolistService->showTodolist();
            
                echo "MENU" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. Exit" . PHP_EOL;

                // Minta input dari user.
                $pilihan = InputHelper::input("Pilih");

                if ($pilihan == "1") {
                    $this->addTodolist();
                } else if ($pilihan == "2") {
                    $this->removeTodolist();
                } else if ($pilihan == "x") {
                    // Jika user memilih x, keluar dari loop
                    // dan tampilkan pesan "Sampai Jumpa Lagi"
                    break;
                } else {
                    echo "Pilihan tidak valid" . PHP_EOL;
                }
            }
            echo "Sampai Jumpa Lagi" . PHP_EOL;
        }

        // Menambah todo dari input user
        function addTodolist(): void
        {
            echo "MENAMBAH TODO" . PHP_EOL;
            
            $todo = InputHelper::input("Masukkan Todo (x untuk batal)");

            if ($todo == "x") {
                echo "Batal menambah Todo" . PHP_EOL;
            } else {
                $this->todolistService->addTodolist($todo);
            }
        }
        
        // Menghapus todo dari input user
        function removeTodolist(): void
        {
            echo "MENGHAPUS TODO" . PHP_EOL;

            $pilihan = InputHelper::input("Nomor (x untuk batal)");
            
            if ($pilihan == "x") {
                echo "Batal menghapus Todo" . PHP_EOL;
            } else {
                $this->todolistService->removeTodolist($pilihan);   
            }
        }
    }
}