<?php

// Mendefinisikan namespace Entity
namespace Entity;

// Membuat class TodoList untuk merepresentasikan satu item todo
class TodoList
{
    // Properti untuk menyimpan isi todo
    private string $todo;

    // Konstruktor untuk mengisi todo saat objek dibuat
    public function __construct(string $todo = "")
    {
        $this->todo = $todo;
    }

    // Getter untuk mengambil isi todo
    public function getTodo(): string
    {
        return $this->todo;
    }

    // Setter untuk mengubah isi todo
    public function setTodo(string $todo): void
    {
        $this->todo = $todo;
    }
}