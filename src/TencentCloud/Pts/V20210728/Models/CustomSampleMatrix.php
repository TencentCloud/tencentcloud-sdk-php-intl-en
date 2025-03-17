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
 * Metric matrix, which contains multiple metric sequence arrays.
 *
 * @method string getMetric() Obtain Metric name.
 * @method void setMetric(string $Metric) Set Metric name.
 * @method string getAggregation() Obtain Aggregation function.
 * @method void setAggregation(string $Aggregation) Set Aggregation function.
 * @method string getUnit() Obtain Metric unit.

Note: This field may return null, indicating that no valid value is found.
 * @method void setUnit(string $Unit) Set Metric unit.

Note: This field may return null, indicating that no valid value is found.
 * @method array getStreams() Obtain Metric sequence array.

Note: This field may return null, indicating that no valid value is found.
 * @method void setStreams(array $Streams) Set Metric sequence array.

Note: This field may return null, indicating that no valid value is found.
 */
class CustomSampleMatrix extends AbstractModel
{
    /**
     * @var string Metric name.
     */
    public $Metric;

    /**
     * @var string Aggregation function.
     */
    public $Aggregation;

    /**
     * @var string Metric unit.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Unit;

    /**
     * @var array Metric sequence array.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Streams;

    /**
     * @param string $Metric Metric name.
     * @param string $Aggregation Aggregation function.
     * @param string $Unit Metric unit.

Note: This field may return null, indicating that no valid value is found.
     * @param array $Streams Metric sequence array.

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

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Streams",$param) and $param["Streams"] !== null) {
            $this->Streams = [];
            foreach ($param["Streams"] as $key => $value){
                $obj = new SampleStream();
                $obj->deserialize($value);
                array_push($this->Streams, $obj);
            }
        }
    }
}
