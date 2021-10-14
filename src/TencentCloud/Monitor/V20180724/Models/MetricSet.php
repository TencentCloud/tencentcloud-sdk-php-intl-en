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
 * Description of the unit and supported statistical period of the business metric
 *
 * @method string getNamespace() Obtain Namespace. Each Tencent Cloud product has a namespace
 * @method void setNamespace(string $Namespace) Set Namespace. Each Tencent Cloud product has a namespace
 * @method string getMetricName() Obtain Metric Name
 * @method void setMetricName(string $MetricName) Set Metric Name
 * @method string getUnit() Obtain Unit used by the metric
 * @method void setUnit(string $Unit) Set Unit used by the metric
 * @method string getUnitCname() Obtain Unit used by the metric
 * @method void setUnitCname(string $UnitCname) Set Unit used by the metric
 * @method array getPeriod() Obtain Statistical period in seconds supported by the metric, such as 60 and 300
 * @method void setPeriod(array $Period) Set Statistical period in seconds supported by the metric, such as 60 and 300
 * @method array getPeriods() Obtain Metric method during the statistical period
 * @method void setPeriods(array $Periods) Set Metric method during the statistical period
 * @method MetricObjectMeaning getMeaning() Obtain Meaning of the statistical metric
 * @method void setMeaning(MetricObjectMeaning $Meaning) Set Meaning of the statistical metric
 * @method array getDimensions() Obtain Dimension description
 * @method void setDimensions(array $Dimensions) Set Dimension description
 * @method string getMetricCName() Obtain Metric name (in Chinese).
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMetricCName(string $MetricCName) Set Metric name (in Chinese).
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getMetricEName() Obtain Metric name (in English).
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMetricEName(string $MetricEName) Set Metric name (in English).
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class MetricSet extends AbstractModel
{
    /**
     * @var string Namespace. Each Tencent Cloud product has a namespace
     */
    public $Namespace;

    /**
     * @var string Metric Name
     */
    public $MetricName;

    /**
     * @var string Unit used by the metric
     */
    public $Unit;

    /**
     * @var string Unit used by the metric
     */
    public $UnitCname;

    /**
     * @var array Statistical period in seconds supported by the metric, such as 60 and 300
     */
    public $Period;

    /**
     * @var array Metric method during the statistical period
     */
    public $Periods;

    /**
     * @var MetricObjectMeaning Meaning of the statistical metric
     */
    public $Meaning;

    /**
     * @var array Dimension description
     */
    public $Dimensions;

    /**
     * @var string Metric name (in Chinese).
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MetricCName;

    /**
     * @var string Metric name (in English).
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MetricEName;

    /**
     * @param string $Namespace Namespace. Each Tencent Cloud product has a namespace
     * @param string $MetricName Metric Name
     * @param string $Unit Unit used by the metric
     * @param string $UnitCname Unit used by the metric
     * @param array $Period Statistical period in seconds supported by the metric, such as 60 and 300
     * @param array $Periods Metric method during the statistical period
     * @param MetricObjectMeaning $Meaning Meaning of the statistical metric
     * @param array $Dimensions Dimension description
     * @param string $MetricCName Metric name (in Chinese).
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $MetricEName Metric name (in English).
Note: this field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("UnitCname",$param) and $param["UnitCname"] !== null) {
            $this->UnitCname = $param["UnitCname"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Periods",$param) and $param["Periods"] !== null) {
            $this->Periods = [];
            foreach ($param["Periods"] as $key => $value){
                $obj = new PeriodsSt();
                $obj->deserialize($value);
                array_push($this->Periods, $obj);
            }
        }

        if (array_key_exists("Meaning",$param) and $param["Meaning"] !== null) {
            $this->Meaning = new MetricObjectMeaning();
            $this->Meaning->deserialize($param["Meaning"]);
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = [];
            foreach ($param["Dimensions"] as $key => $value){
                $obj = new DimensionsDesc();
                $obj->deserialize($value);
                array_push($this->Dimensions, $obj);
            }
        }

        if (array_key_exists("MetricCName",$param) and $param["MetricCName"] !== null) {
            $this->MetricCName = $param["MetricCName"];
        }

        if (array_key_exists("MetricEName",$param) and $param["MetricEName"] !== null) {
            $this->MetricEName = $param["MetricEName"];
        }
    }
}
