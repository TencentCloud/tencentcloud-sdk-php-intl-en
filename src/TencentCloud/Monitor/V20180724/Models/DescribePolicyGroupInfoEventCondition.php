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
 * Event alarm conditions output by the policy query
 *
 * @method integer getEventId() Obtain Event ID.
 * @method void setEventId(integer $EventId) Set Event ID.
 * @method integer getRuleId() Obtain Event alarm rule ID.
 * @method void setRuleId(integer $RuleId) Set Event alarm rule ID.
 * @method string getEventShowName() Obtain Event name.
 * @method void setEventShowName(string $EventShowName) Set Event name.
 * @method integer getAlarmNotifyPeriod() Obtain Alarm sending period in seconds. The value <0 indicates that no alarm will be triggered. The value 0 indicates that an alarm is triggered only once. The value >0 indicates that an alarm is triggered at the interval of triggerTime.
 * @method void setAlarmNotifyPeriod(integer $AlarmNotifyPeriod) Set Alarm sending period in seconds. The value <0 indicates that no alarm will be triggered. The value 0 indicates that an alarm is triggered only once. The value >0 indicates that an alarm is triggered at the interval of triggerTime.
 * @method integer getAlarmNotifyType() Obtain Alarm sending and converging type. The value 0 indicates that alarms are sent consecutively. The value 1 indicates that alarms are sent exponentially.
 * @method void setAlarmNotifyType(integer $AlarmNotifyType) Set Alarm sending and converging type. The value 0 indicates that alarms are sent consecutively. The value 1 indicates that alarms are sent exponentially.
 */
class DescribePolicyGroupInfoEventCondition extends AbstractModel
{
    /**
     * @var integer Event ID.
     */
    public $EventId;

    /**
     * @var integer Event alarm rule ID.
     */
    public $RuleId;

    /**
     * @var string Event name.
     */
    public $EventShowName;

    /**
     * @var integer Alarm sending period in seconds. The value <0 indicates that no alarm will be triggered. The value 0 indicates that an alarm is triggered only once. The value >0 indicates that an alarm is triggered at the interval of triggerTime.
     */
    public $AlarmNotifyPeriod;

    /**
     * @var integer Alarm sending and converging type. The value 0 indicates that alarms are sent consecutively. The value 1 indicates that alarms are sent exponentially.
     */
    public $AlarmNotifyType;

    /**
     * @param integer $EventId Event ID.
     * @param integer $RuleId Event alarm rule ID.
     * @param string $EventShowName Event name.
     * @param integer $AlarmNotifyPeriod Alarm sending period in seconds. The value <0 indicates that no alarm will be triggered. The value 0 indicates that an alarm is triggered only once. The value >0 indicates that an alarm is triggered at the interval of triggerTime.
     * @param integer $AlarmNotifyType Alarm sending and converging type. The value 0 indicates that alarms are sent consecutively. The value 1 indicates that alarms are sent exponentially.
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

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("EventShowName",$param) and $param["EventShowName"] !== null) {
            $this->EventShowName = $param["EventShowName"];
        }

        if (array_key_exists("AlarmNotifyPeriod",$param) and $param["AlarmNotifyPeriod"] !== null) {
            $this->AlarmNotifyPeriod = $param["AlarmNotifyPeriod"];
        }

        if (array_key_exists("AlarmNotifyType",$param) and $param["AlarmNotifyType"] !== null) {
            $this->AlarmNotifyType = $param["AlarmNotifyType"];
        }
    }
}
