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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Monitoring metrics
 *
 * @method integer getTaskMonitorId() Obtain Experiment monitoring metric ID
 * @method void setTaskMonitorId(integer $TaskMonitorId) Set Experiment monitoring metric ID
 * @method integer getMetricId() Obtain Monitoring metric ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMetricId(integer $MetricId) Set Monitoring metric ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskMonitorObjectTypeId() Obtain Object type ID of the monitoring metric
 * @method void setTaskMonitorObjectTypeId(integer $TaskMonitorObjectTypeId) Set Object type ID of the monitoring metric
 * @method string getMetricName() Obtain Metric name
 * @method void setMetricName(string $MetricName) Set Metric name
 * @method array getInstancesIds() Obtain Instance ID list
 * @method void setInstancesIds(array $InstancesIds) Set Instance ID list
 * @method string getMetricChineseName() Obtain Metric in Chinese
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMetricChineseName(string $MetricChineseName) Set Metric in Chinese
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUnit() Obtain Unit
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnit(string $Unit) Set Unit
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TaskMonitor extends AbstractModel
{
    /**
     * @var integer Experiment monitoring metric ID
     */
    public $TaskMonitorId;

    /**
     * @var integer Monitoring metric ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MetricId;

    /**
     * @var integer Object type ID of the monitoring metric
     */
    public $TaskMonitorObjectTypeId;

    /**
     * @var string Metric name
     */
    public $MetricName;

    /**
     * @var array Instance ID list
     */
    public $InstancesIds;

    /**
     * @var string Metric in Chinese
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MetricChineseName;

    /**
     * @var string Unit
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Unit;

    /**
     * @param integer $TaskMonitorId Experiment monitoring metric ID
     * @param integer $MetricId Monitoring metric ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskMonitorObjectTypeId Object type ID of the monitoring metric
     * @param string $MetricName Metric name
     * @param array $InstancesIds Instance ID list
     * @param string $MetricChineseName Metric in Chinese
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Unit Unit
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
        if (array_key_exists("TaskMonitorId",$param) and $param["TaskMonitorId"] !== null) {
            $this->TaskMonitorId = $param["TaskMonitorId"];
        }

        if (array_key_exists("MetricId",$param) and $param["MetricId"] !== null) {
            $this->MetricId = $param["MetricId"];
        }

        if (array_key_exists("TaskMonitorObjectTypeId",$param) and $param["TaskMonitorObjectTypeId"] !== null) {
            $this->TaskMonitorObjectTypeId = $param["TaskMonitorObjectTypeId"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("InstancesIds",$param) and $param["InstancesIds"] !== null) {
            $this->InstancesIds = $param["InstancesIds"];
        }

        if (array_key_exists("MetricChineseName",$param) and $param["MetricChineseName"] !== null) {
            $this->MetricChineseName = $param["MetricChineseName"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }
    }
}
