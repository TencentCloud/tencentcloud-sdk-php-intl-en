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
 * SLA rule.
 *
 * @method string getMetric() Obtain Metric.

Note: This field may return null, indicating that no valid value is found.
 * @method void setMetric(string $Metric) Set Metric.

Note: This field may return null, indicating that no valid value is found.
 * @method string getAggregation() Obtain Metric aggregation method.

Note: This field may return null, indicating that no valid value is found.
 * @method void setAggregation(string $Aggregation) Set Metric aggregation method.

Note: This field may return null, indicating that no valid value is found.
 * @method string getCondition() Obtain Condition, such as '==' '!=' '<' '<=' '>' '>='.

Note: This field may return null, indicating that no valid value is found.
 * @method void setCondition(string $Condition) Set Condition, such as '==' '!=' '<' '<=' '>' '>='.

Note: This field may return null, indicating that no valid value is found.
 * @method float getValue() Obtain Threshold value.

Note: This field may return null, indicating that no valid value is found.
 * @method void setValue(float $Value) Set Threshold value.

Note: This field may return null, indicating that no valid value is found.
 * @method array getLabelFilter() Obtain Label.

Note: This field may return null, indicating that no valid value is found.
 * @method void setLabelFilter(array $LabelFilter) Set Label.

Note: This field may return null, indicating that no valid value is found.
 * @method boolean getAbortFlag() Obtain Whether to stop performance test job.

Note: This field may return null, indicating that no valid value is found.
 * @method void setAbortFlag(boolean $AbortFlag) Set Whether to stop performance test job.

Note: This field may return null, indicating that no valid value is found.
 * @method string getFor() Obtain Duration.

Note: This field may return null, indicating that no valid value is found.
 * @method void setFor(string $For) Set Duration.

Note: This field may return null, indicating that no valid value is found.
 */
class SLARule extends AbstractModel
{
    /**
     * @var string Metric.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Metric;

    /**
     * @var string Metric aggregation method.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Aggregation;

    /**
     * @var string Condition, such as '==' '!=' '<' '<=' '>' '>='.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Condition;

    /**
     * @var float Threshold value.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Value;

    /**
     * @var array Label.

Note: This field may return null, indicating that no valid value is found.
     */
    public $LabelFilter;

    /**
     * @var boolean Whether to stop performance test job.

Note: This field may return null, indicating that no valid value is found.
     */
    public $AbortFlag;

    /**
     * @var string Duration.

Note: This field may return null, indicating that no valid value is found.
     */
    public $For;

    /**
     * @param string $Metric Metric.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Aggregation Metric aggregation method.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Condition Condition, such as '==' '!=' '<' '<=' '>' '>='.

Note: This field may return null, indicating that no valid value is found.
     * @param float $Value Threshold value.

Note: This field may return null, indicating that no valid value is found.
     * @param array $LabelFilter Label.

Note: This field may return null, indicating that no valid value is found.
     * @param boolean $AbortFlag Whether to stop performance test job.

Note: This field may return null, indicating that no valid value is found.
     * @param string $For Duration.

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

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("LabelFilter",$param) and $param["LabelFilter"] !== null) {
            $this->LabelFilter = [];
            foreach ($param["LabelFilter"] as $key => $value){
                $obj = new SLALabel();
                $obj->deserialize($value);
                array_push($this->LabelFilter, $obj);
            }
        }

        if (array_key_exists("AbortFlag",$param) and $param["AbortFlag"] !== null) {
            $this->AbortFlag = $param["AbortFlag"];
        }

        if (array_key_exists("For",$param) and $param["For"] !== null) {
            $this->For = $param["For"];
        }
    }
}
