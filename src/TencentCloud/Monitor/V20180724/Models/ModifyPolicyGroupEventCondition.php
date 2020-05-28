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
 * Modification of the event alarm condition passed in by the alarm policy group.
 *
 * @method integer getEventId() Obtain Event ID.
 * @method void setEventId(integer $EventId) Set Event ID.
 * @method integer getAlarmNotifyType() Obtain Alarm sending and convergence type. The value 0 indicates that alarms are sent consecutively. The value 1 indicates that alarms are sent exponentially.
 * @method void setAlarmNotifyType(integer $AlarmNotifyType) Set Alarm sending and convergence type. The value 0 indicates that alarms are sent consecutively. The value 1 indicates that alarms are sent exponentially.
 * @method integer getAlarmNotifyPeriod() Obtain Alarm sending period in seconds. If the value is less than 0, no alarm will be triggered. If the value is 0, an alarm will be triggered only once. If the value is greater than 0, an alarm will be triggered at the interval of triggerTime.
 * @method void setAlarmNotifyPeriod(integer $AlarmNotifyPeriod) Set Alarm sending period in seconds. If the value is less than 0, no alarm will be triggered. If the value is 0, an alarm will be triggered only once. If the value is greater than 0, an alarm will be triggered at the interval of triggerTime.
 * @method integer getRuleId() Obtain Rule ID. No filling means new addition while filling in ruleId means to modify existing rules.
 * @method void setRuleId(integer $RuleId) Set Rule ID. No filling means new addition while filling in ruleId means to modify existing rules.
 */
class ModifyPolicyGroupEventCondition extends AbstractModel
{
    /**
     * @var integer Event ID.
     */
    public $EventId;

    /**
     * @var integer Alarm sending and convergence type. The value 0 indicates that alarms are sent consecutively. The value 1 indicates that alarms are sent exponentially.
     */
    public $AlarmNotifyType;

    /**
     * @var integer Alarm sending period in seconds. If the value is less than 0, no alarm will be triggered. If the value is 0, an alarm will be triggered only once. If the value is greater than 0, an alarm will be triggered at the interval of triggerTime.
     */
    public $AlarmNotifyPeriod;

    /**
     * @var integer Rule ID. No filling means new addition while filling in ruleId means to modify existing rules.
     */
    public $RuleId;

    /**
     * @param integer $EventId Event ID.
     * @param integer $AlarmNotifyType Alarm sending and convergence type. The value 0 indicates that alarms are sent consecutively. The value 1 indicates that alarms are sent exponentially.
     * @param integer $AlarmNotifyPeriod Alarm sending period in seconds. If the value is less than 0, no alarm will be triggered. If the value is 0, an alarm will be triggered only once. If the value is greater than 0, an alarm will be triggered at the interval of triggerTime.
     * @param integer $RuleId Rule ID. No filling means new addition while filling in ruleId means to modify existing rules.
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("AlarmNotifyType",$param) and $param["AlarmNotifyType"] !== null) {
            $this->AlarmNotifyType = $param["AlarmNotifyType"];
        }

        if (array_key_exists("AlarmNotifyPeriod",$param) and $param["AlarmNotifyPeriod"] !== null) {
            $this->AlarmNotifyPeriod = $param["AlarmNotifyPeriod"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
