<?php

class Target
{
    private $contacts = [
        '20' => [], 
        '21' => [],
        '22' => [], 
        'ground' => []];

    public function getContacts() : array
    {
        return $this->contacts;
    }

    public function contact20(string $to) : string
    {
        $this->contacts['20'][] = $to;
        return "Contact20 was connected to '".$to."'\n";
    }

    public function contact21(string $to) : string
    {
        $this->contacts['21'][] = $to;
        return "Contact21 was connected to '".$to."'\n";
    }

    public function contact22(string $to) : string
    {
        $this->contacts['22'][] = $to;
        return "Contact22 was connected to '".$to."'\n";
    }

    public function ground(string $to) : string
    {
        $this->contacts['ground'][] = $to;
        return "Ground was connected to '".$to."'\n";
    }
}

?>