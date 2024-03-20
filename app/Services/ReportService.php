<?php

    namespace App\Services;


    use App\Models\Donate;



    class ReportService
    {
        private $model;
        public $result;

        public function __construct(Donate $donate)
        {
            $this->model = $donate;
        }

        public function reportLogic()
        {
            $data = $this->model->all();
            $sum = 0;

            foreach($data as $item)
            {
                $sum += $item->amount;
            }

            $this->result = $sum;
        }

    }


?>