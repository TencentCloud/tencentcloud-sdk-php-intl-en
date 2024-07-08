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
 * Metric, which can be used to set alarms and query data
 *
 * @method string getNamespace() Obtain Alarm policy type
 * @method void setNamespace(string $Namespace) Set Alarm policy type
 * @method string getMetricName() Obtain Metric name
 * @method void setMetricName(string $MetricName) Set Metric name
 * @method string getDescription() Obtain Metric display name
 * @method void setDescription(string $Description) Set Metric display name
 * @method float getMin() Obtain Minimum value
 * @method void setMin(float $Min) Set Minimum value
 * @method float getMax() Obtain Maximum value
 * @method void setMax(float $Max) Set Maximum value
 * @method array getDimensions() Obtain Dimension list
 * @method void setDimensions(array $Dimensions) Set Dimension list
 * @method string getUnit() Obtain Unit
 * @method void setUnit(string $Unit) Set Unit
 * @method MetricConfig getMetricConfig() Obtain Metric configuration
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMetricConfig(MetricConfig $MetricConfig) Set Metric configuration
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getIsAdvanced() Obtain Whether it is an advanced metric. 1: Yes; 0: No.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setIsAdvanced(integer $IsAdvanced) Set Whether it is an advanced metric. 1: Yes; 0: No.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getIsOpen() Obtain Whether the advanced metric feature is enabled. 1: Yes; 0: No.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setIsOpen(integer $IsOpen) Set Whether the advanced metric feature is enabled. 1: Yes; 0: No.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getProductId() Obtain Integration center product ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setProductId(integer $ProductId) Set Integration center product ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getOperators() Obtain Matching operator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOperators(array $Operators) Set Matching operator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPeriods() Obtain Metric monitoring granularity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPeriods(array $Periods) Set Metric monitoring granularity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsLatenessMetric() Obtain 
 * @method void setIsLatenessMetric(integer $IsLatenessMetric) Set 
 */
class Metric extends AbstractModel
{
    /**
     * @var string Alarm policy type
     */
    public $Namespace;

    /**
     * @var string Metric name
     */
    public $MetricName;

    /**
     * @var string Metric display name
     */
    public $Description;

    /**
     * @var float Minimum value
     */
    public $Min;

    /**
     * @var float Maximum value
     */
    public $Max;

    /**
     * @var array Dimension list
     */
    public $Dimensions;

    /**
     * @var string Unit
     */
    public $Unit;

    /**
     * @var MetricConfig Metric configuration
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MetricConfig;

    /**
     * @var integer Whether it is an advanced metric. 1: Yes; 0: No.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $IsAdvanced;

    /**
     * @var integer Whether the advanced metric feature is enabled. 1: Yes; 0: No.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $IsOpen;

    /**
     * @var integer Integration center product ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ProductId;

    /**
     * @var array Matching operator
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Operators;

    /**
     * @var array Metric monitoring granularity
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Periods;

    /**
     * @var integer 
     */
    public $IsLatenessMetric;

    /**
     * @param string $Namespace Alarm policy type
     * @param string $MetricName Metric name
     * @param string $Description Metric display name
     * @param float $Min Minimum value
     * @param float $Max Maximum value
     * @param array $Dimensions Dimension list
     * @param string $Unit Unit
     * @param MetricConfig $MetricConfig Metric configuration
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $IsAdvanced Whether it is an advanced metric. 1: Yes; 0: No.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $IsOpen Whether the advanced metric feature is enabled. 1: Yes; 0: No.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $ProductId Integration center product ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $Operators Matching operator
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Periods Metric monitoring granularity
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsLatenessMetric 
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = $param["Dimensions"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("MetricConfig",$param) and $param["MetricConfig"] !== null) {
            $this->MetricConfig = new MetricConfig();
            $this->MetricConfig->deserialize($param["MetricConfig"]);
        }

        if (array_key_exists("IsAdvanced",$param) and $param["IsAdvanced"] !== null) {
            $this->IsAdvanced = $param["IsAdvanced"];
        }

        if (array_key_exists("IsOpen",$param) and $param["IsOpen"] !== null) {
            $this->IsOpen = $param["IsOpen"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Operators",$param) and $param["Operators"] !== null) {
            $this->Operators = [];
            foreach ($param["Operators"] as $key => $value){
                $obj = new Operator();
                $obj->deserialize($value);
                array_push($this->Operators, $obj);
            }
        }

        if (array_key_exists("Periods",$param) and $param["Periods"] !== null) {
            $this->Periods = $param["Periods"];
        }

        if (array_key_exists("IsLatenessMetric",$param) and $param["IsLatenessMetric"] !== null) {
            $this->IsLatenessMetric = $param["IsLatenessMetric"];
        }
    }
}
