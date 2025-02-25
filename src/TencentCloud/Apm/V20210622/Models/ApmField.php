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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Metric dimension information.
 *
 * @method string getKey() Obtain Metric name.
 * @method void setKey(string $Key) Set Metric name.
 * @method float getValue() Obtain Indicator numerical value.
 * @method void setValue(float $Value) Set Indicator numerical value.
 * @method string getUnit() Obtain Units corresponding to the metric.
 * @method void setUnit(string $Unit) Set Units corresponding to the metric.
 * @method array getCompareVals() Obtain Year-Over-Year result array, recommended to use.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCompareVals(array $CompareVals) Set Year-Over-Year result array, recommended to use.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getLastPeriodValue() Obtain Indicator numerical value of the previous period in year-over-year comparison.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLastPeriodValue(array $LastPeriodValue) Set Indicator numerical value of the previous period in year-over-year comparison.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCompareVal() Obtain Year-On-Year metric value. deprecated, not recommended for use.
 * @method void setCompareVal(string $CompareVal) Set Year-On-Year metric value. deprecated, not recommended for use.
 */
class ApmField extends AbstractModel
{
    /**
     * @var string Metric name.
     */
    public $Key;

    /**
     * @var float Indicator numerical value.
     */
    public $Value;

    /**
     * @var string Units corresponding to the metric.
     */
    public $Unit;

    /**
     * @var array Year-Over-Year result array, recommended to use.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CompareVals;

    /**
     * @var array Indicator numerical value of the previous period in year-over-year comparison.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LastPeriodValue;

    /**
     * @var string Year-On-Year metric value. deprecated, not recommended for use.
     */
    public $CompareVal;

    /**
     * @param string $Key Metric name.
     * @param float $Value Indicator numerical value.
     * @param string $Unit Units corresponding to the metric.
     * @param array $CompareVals Year-Over-Year result array, recommended to use.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $LastPeriodValue Indicator numerical value of the previous period in year-over-year comparison.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CompareVal Year-On-Year metric value. deprecated, not recommended for use.
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("CompareVals",$param) and $param["CompareVals"] !== null) {
            $this->CompareVals = [];
            foreach ($param["CompareVals"] as $key => $value){
                $obj = new APMKVItem();
                $obj->deserialize($value);
                array_push($this->CompareVals, $obj);
            }
        }

        if (array_key_exists("LastPeriodValue",$param) and $param["LastPeriodValue"] !== null) {
            $this->LastPeriodValue = [];
            foreach ($param["LastPeriodValue"] as $key => $value){
                $obj = new APMKV();
                $obj->deserialize($value);
                array_push($this->LastPeriodValue, $obj);
            }
        }

        if (array_key_exists("CompareVal",$param) and $param["CompareVal"] !== null) {
            $this->CompareVal = $param["CompareVal"];
        }
    }
}
