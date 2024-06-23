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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Alert Metrics
 *
 * @method string getId() Obtain Metric ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setId(string $Id) Set Metric ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getAlarmIndicator() Obtain Alert Metrics, 0 for task failure, 1 for task execution timeout, 2 for task stop, 3 for task pause, 4 read speed, 5 write speed, 6 read throughput, 7 write throughput, 8 dirty data byte count, 9 number of dirty data entries, 10 task exception, 11 task detection anomaly, 12 restart times, 13 task delay, 14 number of restarts within the last 20 minutes, 15 transmission delay, 16 business delay, 50 offline package CPU usage rate, 51 offline package memory usage rate, 52 offline package parallelism utilization, 53 number of instances queued for offline packages, 54 real-time package resource utilization, 55 number of tasks running in real-time packages
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAlarmIndicator(integer $AlarmIndicator) Set Alert Metrics, 0 for task failure, 1 for task execution timeout, 2 for task stop, 3 for task pause, 4 read speed, 5 write speed, 6 read throughput, 7 write throughput, 8 dirty data byte count, 9 number of dirty data entries, 10 task exception, 11 task detection anomaly, 12 restart times, 13 task delay, 14 number of restarts within the last 20 minutes, 15 transmission delay, 16 business delay, 50 offline package CPU usage rate, 51 offline package memory usage rate, 52 offline package parallelism utilization, 53 number of instances queued for offline packages, 54 real-time package resource utilization, 55 number of tasks running in real-time packages
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getAlarmIndicatorDesc() Obtain Alert Metric Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAlarmIndicatorDesc(string $AlarmIndicatorDesc) Set Alert Metric Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTriggerType() Obtain Metric Threshold, 1 for the first run failure of an offline task, 2 for all retries failed of an offline task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTriggerType(integer $TriggerType) Set Metric Threshold, 1 for the first run failure of an offline task, 2 for all retries failed of an offline task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getEstimatedTime() Obtain Estimated timeout duration, minute level
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEstimatedTime(integer $EstimatedTime) Set Estimated timeout duration, minute level
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getOperator() Obtain Alert threshold operator, 1 Greater than, 2 Less than
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOperator(integer $Operator) Set Alert threshold operator, 1 Greater than, 2 Less than
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getAlarmIndicatorUnit() Obtain Alert metric threshold unit: ms (milliseconds), s (seconds), min (minutes)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAlarmIndicatorUnit(string $AlarmIndicatorUnit) Set Alert metric threshold unit: ms (milliseconds), s (seconds), min (minutes)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDuration() Obtain Alert Interval
 * @method void setDuration(integer $Duration) Set Alert Interval
 * @method string getDurationUnit() Obtain Alert interval unit: hour, minute, day
 * @method void setDurationUnit(string $DurationUnit) Set Alert interval unit: hour, minute, day
 * @method integer getMaxTimes() Obtain Maximum number of alerts within a cycle
 * @method void setMaxTimes(integer $MaxTimes) Set Maximum number of alerts within a cycle
 * @method float getThreshold() Obtain Metric Threshold
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setThreshold(float $Threshold) Set Metric Threshold
Note: This field may return null, indicating that no valid value can be obtained.
 */
class AlarmIndicatorInfo extends AbstractModel
{
    /**
     * @var string Metric ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Id;

    /**
     * @var integer Alert Metrics, 0 for task failure, 1 for task execution timeout, 2 for task stop, 3 for task pause, 4 read speed, 5 write speed, 6 read throughput, 7 write throughput, 8 dirty data byte count, 9 number of dirty data entries, 10 task exception, 11 task detection anomaly, 12 restart times, 13 task delay, 14 number of restarts within the last 20 minutes, 15 transmission delay, 16 business delay, 50 offline package CPU usage rate, 51 offline package memory usage rate, 52 offline package parallelism utilization, 53 number of instances queued for offline packages, 54 real-time package resource utilization, 55 number of tasks running in real-time packages
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AlarmIndicator;

    /**
     * @var string Alert Metric Description
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AlarmIndicatorDesc;

    /**
     * @var integer Metric Threshold, 1 for the first run failure of an offline task, 2 for all retries failed of an offline task
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TriggerType;

    /**
     * @var integer Estimated timeout duration, minute level
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EstimatedTime;

    /**
     * @var integer Alert threshold operator, 1 Greater than, 2 Less than
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Operator;

    /**
     * @var string Alert metric threshold unit: ms (milliseconds), s (seconds), min (minutes)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AlarmIndicatorUnit;

    /**
     * @var integer Alert Interval
     */
    public $Duration;

    /**
     * @var string Alert interval unit: hour, minute, day
     */
    public $DurationUnit;

    /**
     * @var integer Maximum number of alerts within a cycle
     */
    public $MaxTimes;

    /**
     * @var float Metric Threshold
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Threshold;

    /**
     * @param string $Id Metric ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $AlarmIndicator Alert Metrics, 0 for task failure, 1 for task execution timeout, 2 for task stop, 3 for task pause, 4 read speed, 5 write speed, 6 read throughput, 7 write throughput, 8 dirty data byte count, 9 number of dirty data entries, 10 task exception, 11 task detection anomaly, 12 restart times, 13 task delay, 14 number of restarts within the last 20 minutes, 15 transmission delay, 16 business delay, 50 offline package CPU usage rate, 51 offline package memory usage rate, 52 offline package parallelism utilization, 53 number of instances queued for offline packages, 54 real-time package resource utilization, 55 number of tasks running in real-time packages
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $AlarmIndicatorDesc Alert Metric Description
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TriggerType Metric Threshold, 1 for the first run failure of an offline task, 2 for all retries failed of an offline task
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $EstimatedTime Estimated timeout duration, minute level
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Operator Alert threshold operator, 1 Greater than, 2 Less than
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $AlarmIndicatorUnit Alert metric threshold unit: ms (milliseconds), s (seconds), min (minutes)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Duration Alert Interval
     * @param string $DurationUnit Alert interval unit: hour, minute, day
     * @param integer $MaxTimes Maximum number of alerts within a cycle
     * @param float $Threshold Metric Threshold
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AlarmIndicator",$param) and $param["AlarmIndicator"] !== null) {
            $this->AlarmIndicator = $param["AlarmIndicator"];
        }

        if (array_key_exists("AlarmIndicatorDesc",$param) and $param["AlarmIndicatorDesc"] !== null) {
            $this->AlarmIndicatorDesc = $param["AlarmIndicatorDesc"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("EstimatedTime",$param) and $param["EstimatedTime"] !== null) {
            $this->EstimatedTime = $param["EstimatedTime"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("AlarmIndicatorUnit",$param) and $param["AlarmIndicatorUnit"] !== null) {
            $this->AlarmIndicatorUnit = $param["AlarmIndicatorUnit"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("DurationUnit",$param) and $param["DurationUnit"] !== null) {
            $this->DurationUnit = $param["DurationUnit"];
        }

        if (array_key_exists("MaxTimes",$param) and $param["MaxTimes"] !== null) {
            $this->MaxTimes = $param["MaxTimes"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }
    }
}
