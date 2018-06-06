<?php
namespace Simon;

class TicketMapper
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getTickets()
    {
        $query = $this->db->prepare('SELECT * FROM ticket');
        $query->execute();

        $result = $query -> fetchAll();
        return $result;
    }
}
