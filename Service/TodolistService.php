<?php

// Mendefinisikan namespace Service
namespace Service {

    use Entity\TodoList;
    use Repository\TodolistRepository;

    // Interface untuk service todolist
    interface TodolistService {
        function showTodolist(): void;
        function addTodolist(string $todo): void;
        function removeTodolist(int $todo): void;
    }

    // Implementasi service todolist
    class TodolistServiceImpl implements TodolistService
    {
        // Properti repository
        private TodolistRepository $todolistRepository;

        // Konstruktor, menerima repository
        public function __construct(TodolistRepository $todolistRepository)
        {
            $this->todolistRepository = $todolistRepository;
        }

        // Menampilkan semua todo
        function showTodolist(): void
        {
            echo "TODOLIST" . PHP_EOL;
            $todolist = $this->todolistRepository->findAll();
            foreach ($todolist as $number => $value) {
                echo ($number + 1) . ". " . $value->getTodo() . PHP_EOL;
            }
        }

        // Menambah todo baru
        function addTodolist(string $todo): void
        {
            $todolist = new TodoList($todo);
            $this->todolistRepository->save($todolist);
            echo "SUKSES MENAMBAH TODOLIST" . PHP_EOL;
        }

        // Menghapus todo
        function removeTodolist(int $number): void
        {
            if ($this->todolistRepository->remove($number)) {
                echo "SUKSES MENGHAPUS TODOLIST" . PHP_EOL;
            } else {
                echo "GAGAL MENGHAPUS TODOLIST" . PHP_EOL;
            }
        }
    }

}