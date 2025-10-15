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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Alarm rule project fluctuation rate Alarm configuration information.
 *
 * @method string getAlarmType() Obtain Alarm type

projectFailureInstanceUpwardFluctuationAlarm: specifies the upward fluctuation alert for failed instances.

projectSuccessInstanceDownwardFluctuationAlarm: specifies the downward fluctuation alert for successful instances.
 * @method void setAlarmType(string $AlarmType) Set Alarm type

projectFailureInstanceUpwardFluctuationAlarm: specifies the upward fluctuation alert for failed instances.

projectSuccessInstanceDownwardFluctuationAlarm: specifies the downward fluctuation alert for successful instances.
 * @method integer getInstanceThresholdCountPercent() Obtain Alarm threshold for the downward fluctuation ratio of the number of successful instances.
Alarm threshold for the upward fluctuation ratio of the number of failed instances.
 * @method void setInstanceThresholdCountPercent(integer $InstanceThresholdCountPercent) Set Alarm threshold for the downward fluctuation ratio of the number of successful instances.
Alarm threshold for the upward fluctuation ratio of the number of failed instances.
 * @method integer getInstanceThresholdCount() Obtain Cumulative instance number fluctuation threshold.
 * @method void setInstanceThresholdCount(integer $InstanceThresholdCount) Set Cumulative instance number fluctuation threshold.
 * @method integer getStabilizeThreshold() Obtain Stability threshold count (debounce configuration statistical cycle count).
 * @method void setStabilizeThreshold(integer $StabilizeThreshold) Set Stability threshold count (debounce configuration statistical cycle count).
 * @method integer getStabilizeStatisticsCycle() Obtain Stability statistical cycle (anti-shake configuration statistical cycle count).
 * @method void setStabilizeStatisticsCycle(integer $StabilizeStatisticsCycle) Set Stability statistical cycle (anti-shake configuration statistical cycle count).
 * @method boolean getIsCumulant() Obtain Specifies whether to use cumulative calculation. valid values: false (consecutive), true (cumulative).
 * @method void setIsCumulant(boolean $IsCumulant) Set Specifies whether to use cumulative calculation. valid values: false (consecutive), true (cumulative).
 * @method integer getInstanceCount() Obtain Cumulative number of instances for the current day.
Specifies the downward fluctuation of failed instance count on the day.
 * @method void setInstanceCount(integer $InstanceCount) Set Cumulative number of instances for the current day.
Specifies the downward fluctuation of failed instance count on the day.
 */
class ProjectInstanceStatisticsAlarmInfo extends AbstractModel
{
    /**
     * @var string Alarm type

projectFailureInstanceUpwardFluctuationAlarm: specifies the upward fluctuation alert for failed instances.

projectSuccessInstanceDownwardFluctuationAlarm: specifies the downward fluctuation alert for successful instances.
     */
    public $AlarmType;

    /**
     * @var integer Alarm threshold for the downward fluctuation ratio of the number of successful instances.
Alarm threshold for the upward fluctuation ratio of the number of failed instances.
     */
    public $InstanceThresholdCountPercent;

    /**
     * @var integer Cumulative instance number fluctuation threshold.
     */
    public $InstanceThresholdCount;

    /**
     * @var integer Stability threshold count (debounce configuration statistical cycle count).
     */
    public $StabilizeThreshold;

    /**
     * @var integer Stability statistical cycle (anti-shake configuration statistical cycle count).
     */
    public $StabilizeStatisticsCycle;

    /**
     * @var boolean Specifies whether to use cumulative calculation. valid values: false (consecutive), true (cumulative).
     */
    public $IsCumulant;

    /**
     * @var integer Cumulative number of instances for the current day.
Specifies the downward fluctuation of failed instance count on the day.
     */
    public $InstanceCount;

    /**
     * @param string $AlarmType Alarm type

projectFailureInstanceUpwardFluctuationAlarm: specifies the upward fluctuation alert for failed instances.

projectSuccessInstanceDownwardFluctuationAlarm: specifies the downward fluctuation alert for successful instances.
     * @param integer $InstanceThresholdCountPercent Alarm threshold for the downward fluctuation ratio of the number of successful instances.
Alarm threshold for the upward fluctuation ratio of the number of failed instances.
     * @param integer $InstanceThresholdCount Cumulative instance number fluctuation threshold.
     * @param integer $StabilizeThreshold Stability threshold count (debounce configuration statistical cycle count).
     * @param integer $StabilizeStatisticsCycle Stability statistical cycle (anti-shake configuration statistical cycle count).
     * @param boolean $IsCumulant Specifies whether to use cumulative calculation. valid values: false (consecutive), true (cumulative).
     * @param integer $InstanceCount Cumulative number of instances for the current day.
Specifies the downward fluctuation of failed instance count on the day.
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
        if (array_key_exists("AlarmType",$param) and $param["AlarmType"] !== null) {
            $this->AlarmType = $param["AlarmType"];
        }

        if (array_key_exists("InstanceThresholdCountPercent",$param) and $param["InstanceThresholdCountPercent"] !== null) {
            $this->InstanceThresholdCountPercent = $param["InstanceThresholdCountPercent"];
        }

        if (array_key_exists("InstanceThresholdCount",$param) and $param["InstanceThresholdCount"] !== null) {
            $this->InstanceThresholdCount = $param["InstanceThresholdCount"];
        }

        if (array_key_exists("StabilizeThreshold",$param) and $param["StabilizeThreshold"] !== null) {
            $this->StabilizeThreshold = $param["StabilizeThreshold"];
        }

        if (array_key_exists("StabilizeStatisticsCycle",$param) and $param["StabilizeStatisticsCycle"] !== null) {
            $this->StabilizeStatisticsCycle = $param["StabilizeStatisticsCycle"];
        }

        if (array_key_exists("IsCumulant",$param) and $param["IsCumulant"] !== null) {
            $this->IsCumulant = $param["IsCumulant"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }
    }
}
