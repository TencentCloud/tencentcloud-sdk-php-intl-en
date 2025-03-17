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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sample includes metric, aggregation from original metric query statement.
 *
 * @method string getMetric() Obtain Metric name.
 * @method void setMetric(string $Metric) Set Metric name.
 * @method string getAggregation() Obtain Aggregation condition.
 * @method void setAggregation(string $Aggregation) Set Aggregation condition.
 * @method array getLabels() Obtain Label filter.

Note: This field may return null, indicating that no valid value is found.
 * @method void setLabels(array $Labels) Set Label filter.

Note: This field may return null, indicating that no valid value is found.
 * @method float getValue() Obtain Value obtained from the query.
 * @method void setValue(float $Value) Set Value obtained from the query.
 * @method integer getTimestamp() Obtain Time is the number of milliseconds since the epoch (1970-01-01 00:00 UTC) excluding leap seconds.
 * @method void setTimestamp(integer $Timestamp) Set Time is the number of milliseconds since the epoch (1970-01-01 00:00 UTC) excluding leap seconds.
 * @method string getUnit() Obtain Unit corresponding to the metric, including s(second), bytes, bytes/s, reqs, reqs/s, checks, checks/s, iters, iters/s, VUs, %.
 * @method void setUnit(string $Unit) Set Unit corresponding to the metric, including s(second), bytes, bytes/s, reqs, reqs/s, checks, checks/s, iters, iters/s, VUs, %.
 * @method string getName() Obtain Metric name in PTS.

Note: This field may return null, indicating that no valid value is found.
 * @method void setName(string $Name) Set Metric name in PTS.

Note: This field may return null, indicating that no valid value is found.
 */
class CustomSample extends AbstractModel
{
    /**
     * @var string Metric name.
     */
    public $Metric;

    /**
     * @var string Aggregation condition.
     */
    public $Aggregation;

    /**
     * @var array Label filter.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Labels;

    /**
     * @var float Value obtained from the query.
     */
    public $Value;

    /**
     * @var integer Time is the number of milliseconds since the epoch (1970-01-01 00:00 UTC) excluding leap seconds.
     */
    public $Timestamp;

    /**
     * @var string Unit corresponding to the metric, including s(second), bytes, bytes/s, reqs, reqs/s, checks, checks/s, iters, iters/s, VUs, %.
     */
    public $Unit;

    /**
     * @var string Metric name in PTS.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Name;

    /**
     * @param string $Metric Metric name.
     * @param string $Aggregation Aggregation condition.
     * @param array $Labels Label filter.

Note: This field may return null, indicating that no valid value is found.
     * @param float $Value Value obtained from the query.
     * @param integer $Timestamp Time is the number of milliseconds since the epoch (1970-01-01 00:00 UTC) excluding leap seconds.
     * @param string $Unit Unit corresponding to the metric, including s(second), bytes, bytes/s, reqs, reqs/s, checks, checks/s, iters, iters/s, VUs, %.
     * @param string $Name Metric name in PTS.

Note: This field may return null, indicating that no valid value is found.
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
        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Aggregation",$param) and $param["Aggregation"] !== null) {
            $this->Aggregation = $param["Aggregation"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
