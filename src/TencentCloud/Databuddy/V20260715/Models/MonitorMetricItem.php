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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Single monitoring metric
 *
 * @method string getMetricType() Obtain Monitoring Metric Types. There are three types: 1. RUN_DURATION (running time) 2. WAIT_DURATION (waiting duration) 3. COMPLETION_TIME (completion time)
 * @method void setMetricType(string $MetricType) Set Monitoring Metric Types. There are three types: 1. RUN_DURATION (running time) 2. WAIT_DURATION (waiting duration) 3. COMPLETION_TIME (completion time)
 * @method string getWarningThreshold() Obtain Alarm threshold in milliseconds. For COMPLETION_TIME: calculated from 00:00 of the current day.
 * @method void setWarningThreshold(string $WarningThreshold) Set Alarm threshold in milliseconds. For COMPLETION_TIME: calculated from 00:00 of the current day.
 * @method string getTimeoutThreshold() Obtain Timeout threshold in milliseconds. For COMPLETION_TIME, it is calculated from 00:00 of the current day.
 * @method void setTimeoutThreshold(string $TimeoutThreshold) Set Timeout threshold in milliseconds. For COMPLETION_TIME, it is calculated from 00:00 of the current day.
 */
class MonitorMetricItem extends AbstractModel
{
    /**
     * @var string Monitoring Metric Types. There are three types: 1. RUN_DURATION (running time) 2. WAIT_DURATION (waiting duration) 3. COMPLETION_TIME (completion time)
     */
    public $MetricType;

    /**
     * @var string Alarm threshold in milliseconds. For COMPLETION_TIME: calculated from 00:00 of the current day.
     */
    public $WarningThreshold;

    /**
     * @var string Timeout threshold in milliseconds. For COMPLETION_TIME, it is calculated from 00:00 of the current day.
     */
    public $TimeoutThreshold;

    /**
     * @param string $MetricType Monitoring Metric Types. There are three types: 1. RUN_DURATION (running time) 2. WAIT_DURATION (waiting duration) 3. COMPLETION_TIME (completion time)
     * @param string $WarningThreshold Alarm threshold in milliseconds. For COMPLETION_TIME: calculated from 00:00 of the current day.
     * @param string $TimeoutThreshold Timeout threshold in milliseconds. For COMPLETION_TIME, it is calculated from 00:00 of the current day.
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
        if (array_key_exists("MetricType",$param) and $param["MetricType"] !== null) {
            $this->MetricType = $param["MetricType"];
        }

        if (array_key_exists("WarningThreshold",$param) and $param["WarningThreshold"] !== null) {
            $this->WarningThreshold = $param["WarningThreshold"];
        }

        if (array_key_exists("TimeoutThreshold",$param) and $param["TimeoutThreshold"] !== null) {
            $this->TimeoutThreshold = $param["TimeoutThreshold"];
        }
    }
}
