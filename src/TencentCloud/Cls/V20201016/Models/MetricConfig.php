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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Metric configuration information.
 *
 * @method string getMetricName() Obtain Metric name
 * @method void setMetricName(string $MetricName) Set Metric name
 * @method array getPeriods() Obtain Statistical cycle (seconds).
 * @method void setPeriods(array $Periods) Set Statistical cycle (seconds).
 * @method array getMetricLabels() Obtain Custom metric label.
 * @method void setMetricLabels(array $MetricLabels) Set Custom metric label.
 */
class MetricConfig extends AbstractModel
{
    /**
     * @var string Metric name
     */
    public $MetricName;

    /**
     * @var array Statistical cycle (seconds).
     */
    public $Periods;

    /**
     * @var array Custom metric label.
     */
    public $MetricLabels;

    /**
     * @param string $MetricName Metric name
     * @param array $Periods Statistical cycle (seconds).
     * @param array $MetricLabels Custom metric label.
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

        if (array_key_exists("Periods",$param) and $param["Periods"] !== null) {
            $this->Periods = $param["Periods"];
        }

        if (array_key_exists("MetricLabels",$param) and $param["MetricLabels"] !== null) {
            $this->MetricLabels = [];
            foreach ($param["MetricLabels"] as $key => $value){
                $obj = new MetricLabel();
                $obj->deserialize($value);
                array_push($this->MetricLabels, $obj);
            }
        }
    }
}
