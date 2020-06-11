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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Monitoring data
 *
 * @method string getMetric() Obtain Metric name.
 * @method void setMetric(string $Metric) Set Metric name.
 * @method string getUnit() Obtain Metric unit.
 * @method void setUnit(string $Unit) Set Metric unit.
 * @method array getValues() Obtain Metric value.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setValues(array $Values) Set Metric value.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class MonitorMetric extends AbstractModel
{
    /**
     * @var string Metric name.
     */
    public $Metric;

    /**
     * @var string Metric unit.
     */
    public $Unit;

    /**
     * @var array Metric value.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Values;

    /**
     * @param string $Metric Metric name.
     * @param string $Unit Metric unit.
     * @param array $Values Metric value.
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
