<?php

// Mendefinisikan namespace Repository
namespace Repository;

use Entity\TodoList;

// Interface untuk repository todolist
interface TodolistRepository
{
    function save(TodoList $todolist): void;
    function remove(int $number): bool;
    function findAll(): array;
}

// Implementasi repository todolist menggunakan array
class TodolistRepositoryImpl implements TodolistRepository
{
    // Array untuk menyimpan data todolist
    private array $todolist = array();

    // Menyimpan todo baru ke array
    public function save(TodoList $todolist): void
    {
        $this->todolist[] = $todolist;
    }

    // Menghapus todo berdasarkan nomor
    public function remove(int $number): bool
    {
        if ($number > 0 && $number <= count($this->todolist)) {
            array_splice($this->todolist, $number - 1, 1);
            return true;
        } else {
            return false;
        }
    }

    // Mengambil semua todo
    public function findAll(): array
    {
        return $this->todolist;
    }
}
