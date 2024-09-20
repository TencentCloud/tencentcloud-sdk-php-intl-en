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
 * @method integer getMonitorId() Obtain pk
 * @method void setMonitorId(integer $MonitorId) Set pk
 * @method integer getMetricId() Obtain Monitoring metric ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMetricId(integer $MetricId) Set Monitoring metric ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getObjectTypeId() Obtain Object type ID of the monitoring metric
 * @method void setObjectTypeId(integer $ObjectTypeId) Set Object type ID of the monitoring metric
 * @method string getMetricName() Obtain Metric name
 * @method void setMetricName(string $MetricName) Set Metric name
 * @method string getMetricChineseName() Obtain Metric in Chinese
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMetricChineseName(string $MetricChineseName) Set Metric in Chinese
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TemplateMonitor extends AbstractModel
{
    /**
     * @var integer pk
     */
    public $MonitorId;

    /**
     * @var integer Monitoring metric ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MetricId;

    /**
     * @var integer Object type ID of the monitoring metric
     */
    public $ObjectTypeId;

    /**
     * @var string Metric name
     */
    public $MetricName;

    /**
     * @var string Metric in Chinese
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MetricChineseName;

    /**
     * @param integer $MonitorId pk
     * @param integer $MetricId Monitoring metric ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ObjectTypeId Object type ID of the monitoring metric
     * @param string $MetricName Metric name
     * @param string $MetricChineseName Metric in Chinese
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
        if (array_key_exists("MonitorId",$param) and $param["MonitorId"] !== null) {
            $this->MonitorId = $param["MonitorId"];
        }

        if (array_key_exists("MetricId",$param) and $param["MetricId"] !== null) {
            $this->MetricId = $param["MetricId"];
        }

        if (array_key_exists("ObjectTypeId",$param) and $param["ObjectTypeId"] !== null) {
            $this->ObjectTypeId = $param["ObjectTypeId"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("MetricChineseName",$param) and $param["MetricChineseName"] !== null) {
            $this->MetricChineseName = $param["MetricChineseName"];
        }
    }
}
