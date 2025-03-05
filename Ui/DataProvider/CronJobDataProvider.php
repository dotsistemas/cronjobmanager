<?php
namespace DotSistemas\CronjobManager\Ui\DataProvider;

use Magento\Cron\Model\ResourceModel\Schedule\CollectionFactory;
use Magento\Ui\DataProvider\AbstractDataProvider;

class CronJobDataProvider extends AbstractDataProvider
{
    protected $collection;

    public function __construct(
        CollectionFactory $collectionFactory,
                          $name,
                          $primaryFieldName,
                          $requestFieldName,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $collectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    public function getData()
    {
        // $result = parent::getData();

        $items = [
            ['schedule_id' => 1, 'job_code' => 'job_test_01', 'status' => 'Active', 'created_at' => '2021-01-01 00:00:00'],
            ['schedule_id' => 2, 'job_code' => 'job_test_02', 'status' => 'Active', 'created_at' => '2021-01-01 00:00:00'],
            ['schedule_id' => 3, 'job_code' => 'job_test_03', 'status' => 'Active', 'created_at' => '2021-01-01 00:00:00'],
            ['schedule_id' => 4, 'job_code' => 'job_test_04', 'status' => 'Active', 'created_at' => '2021-01-01 00:00:00'],
            ['schedule_id' => 5, 'job_code' => 'job_test_05', 'status' => 'Active', 'created_at' => '2021-01-01 00:00:00'],
        ];

        return [
            'totalItems' => count($items),
            'items' => $items
        ];
    }
}
