<?php

namespace App\Models;

use App\Core\Model;

class Chat extends Model
{
    public function getMessages(): array
    {
        $sql = "SELECT * FROM messages";
        return $this->execute($sql);
    }

    public function addMessage(string $username, string $message, string $header): bool
    {
        $sql = "INSERT INTO messages (username, message, header) VALUES (:username, :message, :header)";
        $params = [
            ':username' => $username,
            ':message' => $message,
            ':header' => $header
        ];
        return $this->execute($sql, $params, false) > 0;
    }

    public function removeMessage(int $id): bool
    {
        $sql = "DELETE FROM messages WHERE id = :id";
        $params = [
            ':id' => $id
        ];
        return $this->execute($sql, $params, false) > 0;
    }
}
