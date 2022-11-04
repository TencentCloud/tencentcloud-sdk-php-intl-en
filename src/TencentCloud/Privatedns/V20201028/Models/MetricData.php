<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Statistics table
 *
 * @method string getResource() Obtain Resource description
 * @method void setResource(string $Resource) Set Resource description
 * @method string getMetric() Obtain Table name
 * @method void setMetric(string $Metric) Set Table name
 * @method array getDataSet() Obtain Table data
 * @method void setDataSet(array $DataSet) Set Table data
 * @method integer getMetricCount() Obtain The total number of requests within the query scope.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMetricCount(integer $MetricCount) Set The total number of requests within the query scope.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class MetricData extends AbstractModel
{
    /**
     * @var string Resource description
     */
    public $Resource;

    /**
     * @var string Table name
     */
    public $Metric;

    /**
     * @var array Table data
     */
    public $DataSet;

    /**
     * @var integer The total number of requests within the query scope.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MetricCount;

    /**
     * @param string $Resource Resource description
     * @param string $Metric Table name
     * @param array $DataSet Table data
     * @param integer $MetricCount The total number of requests within the query scope.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("DataSet",$param) and $param["DataSet"] !== null) {
            $this->DataSet = [];
            foreach ($param["DataSet"] as $key => $value){
                $obj = new DatePoint();
                $obj->deserialize($value);
                array_push($this->DataSet, $obj);
            }
        }

        if (array_key_exists("MetricCount",$param) and $param["MetricCount"] !== null) {
            $this->MetricCount = $param["MetricCount"];
        }
    }
}
