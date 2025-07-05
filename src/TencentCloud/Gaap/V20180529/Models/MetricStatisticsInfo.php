<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * One-metric statistics
 *
 * @method string getMetricName() Obtain Metric name
 * @method void setMetricName(string $MetricName) Set Metric name
 * @method array getMetricData() Obtain Metric statistics
 * @method void setMetricData(array $MetricData) Set Metric statistics
 */
class MetricStatisticsInfo extends AbstractModel
{
    /**
     * @var string Metric name
     */
    public $MetricName;

    /**
     * @var array Metric statistics
     */
    public $MetricData;

    /**
     * @param string $MetricName Metric name
     * @param array $MetricData Metric statistics
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
        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("MetricData",$param) and $param["MetricData"] !== null) {
            $this->MetricData = [];
            foreach ($param["MetricData"] as $key => $value){
                $obj = new StatisticsDataInfo();
                $obj->deserialize($value);
                array_push($this->MetricData, $obj);
            }
        }
    }
}
