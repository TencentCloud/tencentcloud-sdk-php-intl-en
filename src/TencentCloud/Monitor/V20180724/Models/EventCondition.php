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
 * Event alarm conditions
 *
 * @method string getAlarmNotifyPeriod() Obtain Alarm notification frequency.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setAlarmNotifyPeriod(string $AlarmNotifyPeriod) Set Alarm notification frequency.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getAlarmNotifyType() Obtain Predefined repeated notification policy. `0`: One-time alarm; `1`: exponential alarm; `2`: consecutive alarm
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setAlarmNotifyType(string $AlarmNotifyType) Set Predefined repeated notification policy. `0`: One-time alarm; `1`: exponential alarm; `2`: consecutive alarm
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getEventID() Obtain Event ID.
 * @method void setEventID(string $EventID) Set Event ID.
 * @method string getEventDisplayName() Obtain Displayed event name.
 * @method void setEventDisplayName(string $EventDisplayName) Set Displayed event name.
 * @method string getRuleID() Obtain Rule ID.
 * @method void setRuleID(string $RuleID) Set Rule ID.
 */
class EventCondition extends AbstractModel
{
    /**
     * @var string Alarm notification frequency.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $AlarmNotifyPeriod;

    /**
     * @var string Predefined repeated notification policy. `0`: One-time alarm; `1`: exponential alarm; `2`: consecutive alarm
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $AlarmNotifyType;

    /**
     * @var string Event ID.
     */
    public $EventID;

    /**
     * @var string Displayed event name.
     */
    public $EventDisplayName;

    /**
     * @var string Rule ID.
     */
    public $RuleID;

    /**
     * @param string $AlarmNotifyPeriod Alarm notification frequency.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $AlarmNotifyType Predefined repeated notification policy. `0`: One-time alarm; `1`: exponential alarm; `2`: consecutive alarm
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $EventID Event ID.
     * @param string $EventDisplayName Displayed event name.
     * @param string $RuleID Rule ID.
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
        if (array_key_exists("AlarmNotifyPeriod",$param) and $param["AlarmNotifyPeriod"] !== null) {
            $this->AlarmNotifyPeriod = $param["AlarmNotifyPeriod"];
        }

        if (array_key_exists("AlarmNotifyType",$param) and $param["AlarmNotifyType"] !== null) {
            $this->AlarmNotifyType = $param["AlarmNotifyType"];
        }

        if (array_key_exists("EventID",$param) and $param["EventID"] !== null) {
            $this->EventID = $param["EventID"];
        }

        if (array_key_exists("EventDisplayName",$param) and $param["EventDisplayName"] !== null) {
            $this->EventDisplayName = $param["EventDisplayName"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }
    }
}
