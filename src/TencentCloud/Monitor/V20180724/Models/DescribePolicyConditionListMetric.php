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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Metric alarm configuration.
 *
 * @method DescribePolicyConditionListConfigManual getConfigManual() Obtain Metric configuration.
Note: This field may return null, indicating that no valid value was found.
 * @method void setConfigManual(DescribePolicyConditionListConfigManual $ConfigManual) Set Metric configuration.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getMetricId() Obtain Metric ID.
 * @method void setMetricId(integer $MetricId) Set Metric ID.
 * @method string getMetricShowName() Obtain Metric name.
 * @method void setMetricShowName(string $MetricShowName) Set Metric name.
 * @method string getMetricUnit() Obtain Metric unit.
 * @method void setMetricUnit(string $MetricUnit) Set Metric unit.
 */
class DescribePolicyConditionListMetric extends AbstractModel
{
    /**
     * @var DescribePolicyConditionListConfigManual Metric configuration.
Note: This field may return null, indicating that no valid value was found.
     */
    public $ConfigManual;

    /**
     * @var integer Metric ID.
     */
    public $MetricId;

    /**
     * @var string Metric name.
     */
    public $MetricShowName;

    /**
     * @var string Metric unit.
     */
    public $MetricUnit;

    /**
     * @param DescribePolicyConditionListConfigManual $ConfigManual Metric configuration.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $MetricId Metric ID.
     * @param string $MetricShowName Metric name.
     * @param string $MetricUnit Metric unit.
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
        if (array_key_exists("ConfigManual",$param) and $param["ConfigManual"] !== null) {
            $this->ConfigManual = new DescribePolicyConditionListConfigManual();
            $this->ConfigManual->deserialize($param["ConfigManual"]);
        }

        if (array_key_exists("MetricId",$param) and $param["MetricId"] !== null) {
            $this->MetricId = $param["MetricId"];
        }

        if (array_key_exists("MetricShowName",$param) and $param["MetricShowName"] !== null) {
            $this->MetricShowName = $param["MetricShowName"];
        }

        if (array_key_exists("MetricUnit",$param) and $param["MetricUnit"] !== null) {
            $this->MetricUnit = $param["MetricUnit"];
        }
    }
}
