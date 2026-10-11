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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HBase monitoring data structure.
 *
 * @method string getMetricName() Obtain Metric name, for example, read_request_rate.
 * @method void setMetricName(string $MetricName) Set Metric name, for example, read_request_rate.
 * @method string getMetricDesc() Obtain Metric description, for example, read request rate.
 * @method void setMetricDesc(string $MetricDesc) Set Metric description, for example, read request rate.
 * @method array getTimestamps() Obtain Timestamp array.
 * @method void setTimestamps(array $Timestamps) Set Timestamp array.
 * @method array getValues() Obtain Numeric array.
 * @method void setValues(array $Values) Set Numeric array.
 */
class HBaseMetricData extends AbstractModel
{
    /**
     * @var string Metric name, for example, read_request_rate.
     */
    public $MetricName;

    /**
     * @var string Metric description, for example, read request rate.
     */
    public $MetricDesc;

    /**
     * @var array Timestamp array.
     */
    public $Timestamps;

    /**
     * @var array Numeric array.
     */
    public $Values;

    /**
     * @param string $MetricName Metric name, for example, read_request_rate.
     * @param string $MetricDesc Metric description, for example, read request rate.
     * @param array $Timestamps Timestamp array.
     * @param array $Values Numeric array.
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

        if (array_key_exists("MetricDesc",$param) and $param["MetricDesc"] !== null) {
            $this->MetricDesc = $param["MetricDesc"];
        }

        if (array_key_exists("Timestamps",$param) and $param["Timestamps"] !== null) {
            $this->Timestamps = $param["Timestamps"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
