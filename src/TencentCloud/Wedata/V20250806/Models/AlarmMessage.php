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
 * Alarm information.
 *
 * @method integer getAlarmMessageId() Obtain Alarm message Id.
 * @method void setAlarmMessageId(integer $AlarmMessageId) Set Alarm message Id.
 * @method string getAlarmTime() Obtain Alarm time. the same Alarm may be sent multiple times, only the latest Alarm time is displayed.
 * @method void setAlarmTime(string $AlarmTime) Set Alarm time. the same Alarm may be sent multiple times, only the latest Alarm time is displayed.
 * @method string getTaskName() Obtain Task name.
 * @method void setTaskName(string $TaskName) Set Task name.
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getCurRunDate() Obtain Instance data time of the task.
 * @method void setCurRunDate(string $CurRunDate) Set Instance data time of the task.
 * @method string getAlarmReason() Obtain Indicates the Alarm cause.
 * @method void setAlarmReason(string $AlarmReason) Set Indicates the Alarm cause.
 * @method integer getAlarmLevel() Obtain Alarm level. 1. ordinary, 2. important, 3. critical.
 * @method void setAlarmLevel(integer $AlarmLevel) Set Alarm level. 1. ordinary, 2. important, 3. critical.
 * @method string getAlarmRuleId() Obtain Specifies the Id of the Alarm rule.
 * @method void setAlarmRuleId(string $AlarmRuleId) Set Specifies the Id of the Alarm rule.
 * @method array getAlarmWays() Obtain Alarm channel specifies the notification methods: 1. mail, 2. sms, 3. wechat, 4. voice, 5. wecom, 6. Http, 7. wecom group, 8. lark group, 9. dingtalk group, 10. Slack group, 11. Teams group (default: 1. mail).
 * @method void setAlarmWays(array $AlarmWays) Set Alarm channel specifies the notification methods: 1. mail, 2. sms, 3. wechat, 4. voice, 5. wecom, 6. Http, 7. wecom group, 8. lark group, 9. dingtalk group, 10. Slack group, 11. Teams group (default: 1. mail).
 * @method array getAlarmRecipients() Obtain Alarm recipient
 * @method void setAlarmRecipients(array $AlarmRecipients) Set Alarm recipient
 */
class AlarmMessage extends AbstractModel
{
    /**
     * @var integer Alarm message Id.
     */
    public $AlarmMessageId;

    /**
     * @var string Alarm time. the same Alarm may be sent multiple times, only the latest Alarm time is displayed.
     */
    public $AlarmTime;

    /**
     * @var string Task name.
     */
    public $TaskName;

    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string Instance data time of the task.
     */
    public $CurRunDate;

    /**
     * @var string Indicates the Alarm cause.
     */
    public $AlarmReason;

    /**
     * @var integer Alarm level. 1. ordinary, 2. important, 3. critical.
     */
    public $AlarmLevel;

    /**
     * @var string Specifies the Id of the Alarm rule.
     */
    public $AlarmRuleId;

    /**
     * @var array Alarm channel specifies the notification methods: 1. mail, 2. sms, 3. wechat, 4. voice, 5. wecom, 6. Http, 7. wecom group, 8. lark group, 9. dingtalk group, 10. Slack group, 11. Teams group (default: 1. mail).
     */
    public $AlarmWays;

    /**
     * @var array Alarm recipient
     */
    public $AlarmRecipients;

    /**
     * @param integer $AlarmMessageId Alarm message Id.
     * @param string $AlarmTime Alarm time. the same Alarm may be sent multiple times, only the latest Alarm time is displayed.
     * @param string $TaskName Task name.
     * @param string $TaskId Task ID
     * @param string $CurRunDate Instance data time of the task.
     * @param string $AlarmReason Indicates the Alarm cause.
     * @param integer $AlarmLevel Alarm level. 1. ordinary, 2. important, 3. critical.
     * @param string $AlarmRuleId Specifies the Id of the Alarm rule.
     * @param array $AlarmWays Alarm channel specifies the notification methods: 1. mail, 2. sms, 3. wechat, 4. voice, 5. wecom, 6. Http, 7. wecom group, 8. lark group, 9. dingtalk group, 10. Slack group, 11. Teams group (default: 1. mail).
     * @param array $AlarmRecipients Alarm recipient
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
        if (array_key_exists("AlarmMessageId",$param) and $param["AlarmMessageId"] !== null) {
            $this->AlarmMessageId = $param["AlarmMessageId"];
        }

        if (array_key_exists("AlarmTime",$param) and $param["AlarmTime"] !== null) {
            $this->AlarmTime = $param["AlarmTime"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("AlarmReason",$param) and $param["AlarmReason"] !== null) {
            $this->AlarmReason = $param["AlarmReason"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("AlarmRuleId",$param) and $param["AlarmRuleId"] !== null) {
            $this->AlarmRuleId = $param["AlarmRuleId"];
        }

        if (array_key_exists("AlarmWays",$param) and $param["AlarmWays"] !== null) {
            $this->AlarmWays = $param["AlarmWays"];
        }

        if (array_key_exists("AlarmRecipients",$param) and $param["AlarmRecipients"] !== null) {
            $this->AlarmRecipients = $param["AlarmRecipients"];
        }
    }
}
