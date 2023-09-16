<?php 

namespace Model {

    class Comment {

        public function __construct(private ?int $id = null,
                                    private ?string $email = null, 
                                    private ?string $comment = null)
        {
            // $this-> = $;
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
            return $this->id;
        }
    
        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
            $this->id = $id;
        }
        

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
            return $this->email;
        }
    
        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
            $this->email = $email;
        }
    
        /**
         * Get the value of comment
         */ 
        public function getComment()
        {
            return $this->comment;
        }
    
        /**
         * Set the value of comment
         *
         * @return  self
         */ 
        public function setComment($comment)
        {
            $this->comment = $comment;
        }
    }



}