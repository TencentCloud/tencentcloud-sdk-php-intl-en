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
 * GetMonitorData request structure.
 *
 * @method string getNamespace() Obtain Namespace. Each Tencent Cloud product has a namespace
 * @method void setNamespace(string $Namespace) Set Namespace. Each Tencent Cloud product has a namespace
 * @method string getMetricName() Obtain Metric name. For detailed metric descriptions of each Tencent Cloud product, see the corresponding [Monitoring API](https://cloud.tencent.com/document/product/248/30384) document
 * @method void setMetricName(string $MetricName) Set Metric name. For detailed metric descriptions of each Tencent Cloud product, see the corresponding [Monitoring API](https://cloud.tencent.com/document/product/248/30384) document
 * @method array getInstances() Obtain Combination of instance object dimensions
 * @method void setInstances(array $Instances) Set Combination of instance object dimensions
 * @method integer getPeriod() Obtain Monitoring statistical period. The default value is 300, and the unit is s
 * @method void setPeriod(integer $Period) Set Monitoring statistical period. The default value is 300, and the unit is s
 * @method string getStartTime() Obtain Start time such as 2018-09-22T19:51:23+08:00
 * @method void setStartTime(string $StartTime) Set Start time such as 2018-09-22T19:51:23+08:00
 * @method string getEndTime() Obtain End time. Uses the current time by default and cannot be earlier than StartTime
 * @method void setEndTime(string $EndTime) Set End time. Uses the current time by default and cannot be earlier than StartTime
 */
class GetMonitorDataRequest extends AbstractModel
{
    /**
     * @var string Namespace. Each Tencent Cloud product has a namespace
     */
    public $Namespace;

    /**
     * @var string Metric name. For detailed metric descriptions of each Tencent Cloud product, see the corresponding [Monitoring API](https://cloud.tencent.com/document/product/248/30384) document
     */
    public $MetricName;

    /**
     * @var array Combination of instance object dimensions
     */
    public $Instances;

    /**
     * @var integer Monitoring statistical period. The default value is 300, and the unit is s
     */
    public $Period;

    /**
     * @var string Start time such as 2018-09-22T19:51:23+08:00
     */
    public $StartTime;

    /**
     * @var string End time. Uses the current time by default and cannot be earlier than StartTime
     */
    public $EndTime;

    /**
     * @param string $Namespace Namespace. Each Tencent Cloud product has a namespace
     * @param string $MetricName Metric name. For detailed metric descriptions of each Tencent Cloud product, see the corresponding [Monitoring API](https://cloud.tencent.com/document/product/248/30384) document
     * @param array $Instances Combination of instance object dimensions
     * @param integer $Period Monitoring statistical period. The default value is 300, and the unit is s
     * @param string $StartTime Start time such as 2018-09-22T19:51:23+08:00
     * @param string $EndTime End time. Uses the current time by default and cannot be earlier than StartTime
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

        if (array_key_exists("Instances",$param) and $param["Instances"] !== null) {
            $this->Instances = [];
            foreach ($param["Instances"] as $key => $value){
                $obj = new Instance();
                $obj->deserialize($value);
                array_push($this->Instances, $obj);
            }
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
