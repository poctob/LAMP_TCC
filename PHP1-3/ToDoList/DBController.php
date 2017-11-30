<?php

class DBController 
{
    const DATABASE_HOST = 'localhost';
    const DATABASE_SCHEMA = 'to_do_list';
    const DATABASE_USER = 'developer';
    const DATABASE_PASSWORD = 'bacon';

    const READ_QUERY = 'SELECT * FROM tasks';
    const WRITE_QUERY = 'INSERT INTO tasks
    (
        title,
        is_complete,
        date_created
    )

     VALUES';

    const UPDATE_QUERY = "UPDATE tasks SET
        is_complete = 1,
        date_completed = '%s'
        WHERE id = '%s'";
     
    private $connection;

    public function connectToDatabase()
    {
        $this->connection = new mysqli(
            self::DATABASE_HOST,
            self::DATABASE_USER,
            self::DATABASE_PASSWORD,
            self::DATABASE_SCHEMA
        );

        if ($this->connection->connect_error) {
            die($this->connection->connect_error);
        }
    }

    public function disconnectFromDatabase()
    {
        $this->connection->close();
    }

    public function insertItem($item)
    {
        $this->connectToDatabase();

        $query = self::WRITE_QUERY .
        "(
                    '" . $item->getTitle() . "',
                    '" . $item->getIsComplete() . "',
                    '" . $item->getDateCreated() . "'
                    )";

        //  echo "<br />$query<br />";

        $result = $this->connection->query($query);

        if (!$result) {
            die($this->connection->error);
        }

        $this->disconnectFromDatabase();
    }

    public function readDatabase()
    {
        $tasks = array();
        $this->connectToDatabase();

        $data = $this->connection->query(self::READ_QUERY);

        if (!$data) {
            die($this->connection->error);
        }

        $rows = $data->num_rows;

        for ($i = 0; $i < $rows; $i++) {
            $data->data_seek($i);
            $item = $data->fetch_array(MYSQLI_ASSOC);

            $task = new Task();
            $task->setId($item['id']);
            $task->setTitle($item['title']);
            $task->setIsComplete($item['is_complete']);
            $task->setDateCompleted($item['date_completed']);
            $task->setDateCreated($item['date_created']);

            $tasks[] = $task;
        }

        $data->close();
        $this->disconnectFromDatabase();

        return $tasks;
    }

    public function updateItem($item, $id)
    {
        $this->connectToDatabase();

        $query = sprintf(self::UPDATE_QUERY,
            $item->getDateCompleted(),
            $id
        );

        $result = $this->connection->query($query);

        if (!$result) {
            die($this->connection->error);
        }

        $this->disconnectFromDatabase();
    }

}