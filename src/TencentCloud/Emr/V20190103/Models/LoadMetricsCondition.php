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
 * Load metric condition.
 *
 * @method integer getStatisticPeriod() Obtain Rule statistics cycle. Options include 1 min, 3 min, and 5 min.
 * @method void setStatisticPeriod(integer $StatisticPeriod) Set Rule statistics cycle. Options include 1 min, 3 min, and 5 min.
 * @method integer getTriggerThreshold() Obtain Trigger count. Scaling begins only after it has been triggered continuously more than TriggerThreshold times.
 * @method void setTriggerThreshold(integer $TriggerThreshold) Set Trigger count. Scaling begins only after it has been triggered continuously more than TriggerThreshold times.
 * @method string getLoadMetrics() Obtain Scaling load metric.
 * @method void setLoadMetrics(string $LoadMetrics) Set Scaling load metric.
 * @method integer getMetricId() Obtain Rule metadata record ID.
 * @method void setMetricId(integer $MetricId) Set Rule metadata record ID.
 * @method array getConditions() Obtain Trigger condition.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConditions(array $Conditions) Set Trigger condition.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LoadMetricsCondition extends AbstractModel
{
    /**
     * @var integer Rule statistics cycle. Options include 1 min, 3 min, and 5 min.
     */
    public $StatisticPeriod;

    /**
     * @var integer Trigger count. Scaling begins only after it has been triggered continuously more than TriggerThreshold times.
     */
    public $TriggerThreshold;

    /**
     * @var string Scaling load metric.
     */
    public $LoadMetrics;

    /**
     * @var integer Rule metadata record ID.
     */
    public $MetricId;

    /**
     * @var array Trigger condition.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Conditions;

    /**
     * @param integer $StatisticPeriod Rule statistics cycle. Options include 1 min, 3 min, and 5 min.
     * @param integer $TriggerThreshold Trigger count. Scaling begins only after it has been triggered continuously more than TriggerThreshold times.
     * @param string $LoadMetrics Scaling load metric.
     * @param integer $MetricId Rule metadata record ID.
     * @param array $Conditions Trigger condition.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("StatisticPeriod",$param) and $param["StatisticPeriod"] !== null) {
            $this->StatisticPeriod = $param["StatisticPeriod"];
        }

        if (array_key_exists("TriggerThreshold",$param) and $param["TriggerThreshold"] !== null) {
            $this->TriggerThreshold = $param["TriggerThreshold"];
        }

        if (array_key_exists("LoadMetrics",$param) and $param["LoadMetrics"] !== null) {
            $this->LoadMetrics = $param["LoadMetrics"];
        }

        if (array_key_exists("MetricId",$param) and $param["MetricId"] !== null) {
            $this->MetricId = $param["MetricId"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new TriggerCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }
    }
}
