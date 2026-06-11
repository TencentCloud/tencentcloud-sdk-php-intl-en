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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance information in cloud product metric subscription preview results.
 *
 * @method string getMetricName() Obtain Cloud Monitor metric name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMetricName(string $MetricName) Set Cloud Monitor metric name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCLSMetricName() Obtain CLS metric name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCLSMetricName(string $CLSMetricName) Set CLS metric name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNamespace() Obtain Cloud product namespace.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNamespace(string $Namespace) Set Cloud product namespace.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDimensions() Obtain Instance information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDimensions(array $Dimensions) Set Instance information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPeriod() Obtain Period (seconds).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPeriod(integer $Period) Set Period (seconds).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getValue() Obtain Statistical value of a metric.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValue(float $Value) Set Statistical value of a metric.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrMsg() Obtain Error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrMsg(string $ErrMsg) Set Error message
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InstanceData extends AbstractModel
{
    /**
     * @var string Cloud Monitor metric name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MetricName;

    /**
     * @var string CLS metric name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CLSMetricName;

    /**
     * @var string Cloud product namespace.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Namespace;

    /**
     * @var array Instance information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Dimensions;

    /**
     * @var integer Period (seconds).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Period;

    /**
     * @var float Statistical value of a metric.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Value;

    /**
     * @var string Error message
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrMsg;

    /**
     * @param string $MetricName Cloud Monitor metric name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CLSMetricName CLS metric name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Namespace Cloud product namespace.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Dimensions Instance information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Period Period (seconds).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Value Statistical value of a metric.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrMsg Error message
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
        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("CLSMetricName",$param) and $param["CLSMetricName"] !== null) {
            $this->CLSMetricName = $param["CLSMetricName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = [];
            foreach ($param["Dimensions"] as $key => $value){
                $obj = new Dimension();
                $obj->deserialize($value);
                array_push($this->Dimensions, $obj);
            }
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}
