<?php

    class TransactionModel extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }

        //Chart Section
        public function getUser($id)
        {
            $data = $this->db->get_where('cart', [
                'consumer_id' => $id
            ]);
        
        }
        
        public function addCart($data)
        {
            return $this->db->insert('cart', $data);
        }

        //Transaction Section
        public function insert($data) {
            return $this->db->insert('transactions', $data);
        }        

        public function insert_detail($data) {
            return $this->db->insert('detail_transactions', $data);
        }
        
        public function delete_detail($id) {
            $this->db->where('transaction_id', $id);
            return $this->db->delete('detail_transactions');
        }

        public function getHistories($user_id)
        {
            $this->db->where('consumer_id', $user_id);
            $this->db->limit(5);
            $this->db->order_by('consumer_id', 'desc');
            return $this->db->get('transactions')->result();
        }

        public function getHistoriesAll($user_id)
        {
            $this->db->where('consumer_id', $user_id);            
            return $this->db->get('transactions')->result();
        }


        public function findTransaksi($id)
        {
            $this->db->where('transaction_id', $id);
            return $this->db->get('product_id')->result();
        }        
        
/*
        public function getTransaction($cond = "default")
        {
            $data = $this->db;

            if(!$cond == "default") {
                
                if($cond == "order_status") {
                    $data = $data->order_by('status', 'asc');
                }

            }

            $data = $data->get('transaksi_resi');

            return $data->result();
        }

        public function transaksi__()
        {
            return $this->db->order_by('created_at', 'desc')->get('transaksi_resi')->result();            
        }

        public function delete($id) {
            $this->db->where('id', $id);

            return $this->db->delete('transaksi');
        } 
*/
    }
?>