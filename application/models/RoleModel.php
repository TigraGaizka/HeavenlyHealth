<?php

class rolemodel extends CI_Model {
	public function getNews() {
		return $this->db->get('news')->result();
	}
	public function getDoctors() {
		return $this->db->get('doctors')->result();
	}
	public function getMessages() {
		return $this->db->get('contacts')->result();
	}


	public function getOneNews($id) {
		$this->db->where('id', $id);
		return $this->db->get('news')->result();
	}
	public function getOneDoctor($id) {
		$this->db->where('id', $id);
		return $this->db->get('doctors')->result();
	}
	public function getOneMessage($id) {
		$this->db->where('id', $id);
		return $this->db->get('contacts')->result();
	}


	public function addContacts($data)
	{
		return $this->db->insert('contacts', $data);
	}

	public function removeMessages($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('contacts');
	}


	public function removeNews($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('news');
	}

	public function addNews($data)
	{
		return $this->db->insert('news', $data);
	}

	public function editNews($id,$data)
	{
		$this->db->where('id', $id);
		return $this->db->update('news', $data);
	}


	public function removeDoctors($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('doctors');
	}

	public function addDoctors($data)
	{
		return $this->db->insert('doctors', $data);
	}

	public function editDoctors($id,$data)
	{
		$this->db->where('id', $id);
		return $this->db->update('doctors', $data);
	}

}