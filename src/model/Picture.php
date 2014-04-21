<?php
    class Picture
    {
        private $m_id;
        private $m_category;
        private $m_desc;
        private $m_time;
        private $m_place;
        private $m_data;

        public function Picture($id, $category, $desc, $time, $place, $data) {
            $this->m_id = $id;
            $this->m_category = $category;
            $this->m_desc = $desc;
            $this->m_time = $time;
            $this->m_place = $place;
            $this->m_data = $data;
        }

        public function getId() {
            return $this->m_id;
        }

        public function getCategory() {
            return $this->m_category;
        }

        public function getUploadTime() {
            return $this->m_time;
        }

        public function getDescription() {
            return $this->m_desc;
        }

        public function getPlace() {
            return $this->m_place;
        }
        public function getPictureBinary() {
            return $this->m_data;
        }
    }
?>