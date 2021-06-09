<?php
declare(strict_types=1);

use ParagonIE\EasyDB\Factory;

class Model
{

    function __construct() {
        $this->db = Factory::create(
            'sqlite:contacts.dat',
            ''. // username
            '', // password
            '' // options
        );
    }

    public function getBranches()
    {
        $rows=($this->db->run("SELECT id, bcode, branch from branches order by branch"));
        return $rows;
    }

    public function getBranch($id)
    {
//        $statement = EasyStatement::open()->with('id = ?');
        return $this->db->row("SELECT id, branch, bcode from branches where id='$id'");

//        return $this->db->row("SELECT id, branch from branches where id=?", $id);
    }

    public function updateBranch($new)
    {   $this->db->update('branches',  
          ['branch'=>$new['branch']], ['id'=>$new['id']], 
          ['bcode'=>$new['bcode']]);
          // update branches set branch=$branch, bcode=$bcode where id=$id
    }

    public function insertBranch($branch, $bcode)
    {
        $this->db->insert('branches', ['branch'=>$branch, 'bcode'=>$bcode]);
    }

    public function deleteBranch($id)
    {
        $this->db->delete('branches', ['id'=>$id]);
    }

    public function getContacts($bcode)
    {
        return $this->db->run("SELECT  id, bcode,name, email,
        phone, function, notes from contacts where bcode='$bcode'");
    }

    public function getContact($id)
    {
        return $this->db->row("SELECT   id, bcode,name, email,
        phone, function, notes  from contacts where id='$id'");
    }

    public function updateContact($update)
    {
        print_r($update);
        $id=$update['id'];
        print $id;
        print $update['notes'];
        $this->db->update('contacts', 
          $update, ['id'=>$id]);
    }

    public function insertContact($contact)
    {
        $this->db->insert('contacts', $contact);
    }

    public function deleteContact($id)
    {
        $this->db->delete('contacts', ['id'=>$id]);
    }

}

