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
 * Metric information of alarm records
 *
 * @method string getQceNamespace() Obtain Namespace used to query data by Tencent Cloud service monitoring type
 * @method void setQceNamespace(string $QceNamespace) Set Namespace used to query data by Tencent Cloud service monitoring type
 * @method string getMetricName() Obtain Metric name
 * @method void setMetricName(string $MetricName) Set Metric name
 * @method integer getPeriod() Obtain Statistical period
 * @method void setPeriod(integer $Period) Set Statistical period
 * @method string getValue() Obtain Value triggering alarm
 * @method void setValue(string $Value) Set Value triggering alarm
 * @method string getDescription() Obtain Metric display name
 * @method void setDescription(string $Description) Set Metric display name
 */
class AlarmHistoryMetric extends AbstractModel
{
    /**
     * @var string Namespace used to query data by Tencent Cloud service monitoring type
     */
    public $QceNamespace;

    /**
     * @var string Metric name
     */
    public $MetricName;

    /**
     * @var integer Statistical period
     */
    public $Period;

    /**
     * @var string Value triggering alarm
     */
    public $Value;

    /**
     * @var string Metric display name
     */
    public $Description;

    /**
     * @param string $QceNamespace Namespace used to query data by Tencent Cloud service monitoring type
     * @param string $MetricName Metric name
     * @param integer $Period Statistical period
     * @param string $Value Value triggering alarm
     * @param string $Description Metric display name
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
        if (array_key_exists("QceNamespace",$param) and $param["QceNamespace"] !== null) {
            $this->QceNamespace = $param["QceNamespace"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
