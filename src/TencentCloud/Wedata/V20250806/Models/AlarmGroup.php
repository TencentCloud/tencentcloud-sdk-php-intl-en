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
 * Alarm rule recipient configuration.
 *
 * @method array getAlarmEscalationRecipientIds() Obtain Specifies the list of Alarm escalation recipient ids.
If the Alarm recipient or supervisor does not confirm the Alarm within the Alarm interval, an Alarm will be sent to the next-level superior.
 * @method void setAlarmEscalationRecipientIds(array $AlarmEscalationRecipientIds) Set Specifies the list of Alarm escalation recipient ids.
If the Alarm recipient or supervisor does not confirm the Alarm within the Alarm interval, an Alarm will be sent to the next-level superior.
 * @method integer getAlarmEscalationInterval() Obtain Escalation interval for alarms.
 * @method void setAlarmEscalationInterval(integer $AlarmEscalationInterval) Set Escalation interval for alarms.
 * @method NotificationFatigue getNotificationFatigue() Obtain Alarm notification fatigue configuration.
 * @method void setNotificationFatigue(NotificationFatigue $NotificationFatigue) Set Alarm notification fatigue configuration.
 * @method array getAlarmWays() Obtain Alarm channel. valid values: 1. mail, 2. sms, 3. wechat, 4. voice, 5. wecom, 6. Http, 7. wecom group, 8. lark group, 9. dingtalk group, 10. Slack group, 11. Teams group (default: 1. mail). only select one channel.
 * @method void setAlarmWays(array $AlarmWays) Set Alarm channel. valid values: 1. mail, 2. sms, 3. wechat, 4. voice, 5. wecom, 6. Http, 7. wecom group, 8. lark group, 9. dingtalk group, 10. Slack group, 11. Teams group (default: 1. mail). only select one channel.
 * @method array getWebHooks() Obtain webhook url list for wecom group/lark group/dingtalk group/Slack group/Teams group.
 * @method void setWebHooks(array $WebHooks) Set webhook url list for wecom group/lark group/dingtalk group/Slack group/Teams group.
 * @method integer getAlarmRecipientType() Obtain Alarm recipient type: 1. specified personnel, 2. task owner, 3. duty schedule (default: 1. specified personnel).
 * @method void setAlarmRecipientType(integer $AlarmRecipientType) Set Alarm recipient type: 1. specified personnel, 2. task owner, 3. duty schedule (default: 1. specified personnel).
 * @method array getAlarmRecipientIds() Obtain Specifies different business ids based on AlarmRecipientType. valid values: 1 (designated personnel): Alarm recipient id list. 2 (task owner): no configuration required. 3 (duty schedule): schedule id list.
 * @method void setAlarmRecipientIds(array $AlarmRecipientIds) Set Specifies different business ids based on AlarmRecipientType. valid values: 1 (designated personnel): Alarm recipient id list. 2 (task owner): no configuration required. 3 (duty schedule): schedule id list.
 */
class AlarmGroup extends AbstractModel
{
    /**
     * @var array Specifies the list of Alarm escalation recipient ids.
If the Alarm recipient or supervisor does not confirm the Alarm within the Alarm interval, an Alarm will be sent to the next-level superior.
     */
    public $AlarmEscalationRecipientIds;

    /**
     * @var integer Escalation interval for alarms.
     */
    public $AlarmEscalationInterval;

    /**
     * @var NotificationFatigue Alarm notification fatigue configuration.
     */
    public $NotificationFatigue;

    /**
     * @var array Alarm channel. valid values: 1. mail, 2. sms, 3. wechat, 4. voice, 5. wecom, 6. Http, 7. wecom group, 8. lark group, 9. dingtalk group, 10. Slack group, 11. Teams group (default: 1. mail). only select one channel.
     */
    public $AlarmWays;

    /**
     * @var array webhook url list for wecom group/lark group/dingtalk group/Slack group/Teams group.
     */
    public $WebHooks;

    /**
     * @var integer Alarm recipient type: 1. specified personnel, 2. task owner, 3. duty schedule (default: 1. specified personnel).
     */
    public $AlarmRecipientType;

    /**
     * @var array Specifies different business ids based on AlarmRecipientType. valid values: 1 (designated personnel): Alarm recipient id list. 2 (task owner): no configuration required. 3 (duty schedule): schedule id list.
     */
    public $AlarmRecipientIds;

    /**
     * @param array $AlarmEscalationRecipientIds Specifies the list of Alarm escalation recipient ids.
If the Alarm recipient or supervisor does not confirm the Alarm within the Alarm interval, an Alarm will be sent to the next-level superior.
     * @param integer $AlarmEscalationInterval Escalation interval for alarms.
     * @param NotificationFatigue $NotificationFatigue Alarm notification fatigue configuration.
     * @param array $AlarmWays Alarm channel. valid values: 1. mail, 2. sms, 3. wechat, 4. voice, 5. wecom, 6. Http, 7. wecom group, 8. lark group, 9. dingtalk group, 10. Slack group, 11. Teams group (default: 1. mail). only select one channel.
     * @param array $WebHooks webhook url list for wecom group/lark group/dingtalk group/Slack group/Teams group.
     * @param integer $AlarmRecipientType Alarm recipient type: 1. specified personnel, 2. task owner, 3. duty schedule (default: 1. specified personnel).
     * @param array $AlarmRecipientIds Specifies different business ids based on AlarmRecipientType. valid values: 1 (designated personnel): Alarm recipient id list. 2 (task owner): no configuration required. 3 (duty schedule): schedule id list.
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
        if (array_key_exists("AlarmEscalationRecipientIds",$param) and $param["AlarmEscalationRecipientIds"] !== null) {
            $this->AlarmEscalationRecipientIds = $param["AlarmEscalationRecipientIds"];
        }

        if (array_key_exists("AlarmEscalationInterval",$param) and $param["AlarmEscalationInterval"] !== null) {
            $this->AlarmEscalationInterval = $param["AlarmEscalationInterval"];
        }

        if (array_key_exists("NotificationFatigue",$param) and $param["NotificationFatigue"] !== null) {
            $this->NotificationFatigue = new NotificationFatigue();
            $this->NotificationFatigue->deserialize($param["NotificationFatigue"]);
        }

        if (array_key_exists("AlarmWays",$param) and $param["AlarmWays"] !== null) {
            $this->AlarmWays = $param["AlarmWays"];
        }

        if (array_key_exists("WebHooks",$param) and $param["WebHooks"] !== null) {
            $this->WebHooks = [];
            foreach ($param["WebHooks"] as $key => $value){
                $obj = new AlarmWayWebHook();
                $obj->deserialize($value);
                array_push($this->WebHooks, $obj);
            }
        }

        if (array_key_exists("AlarmRecipientType",$param) and $param["AlarmRecipientType"] !== null) {
            $this->AlarmRecipientType = $param["AlarmRecipientType"];
        }

        if (array_key_exists("AlarmRecipientIds",$param) and $param["AlarmRecipientIds"] !== null) {
            $this->AlarmRecipientIds = $param["AlarmRecipientIds"];
        }
    }
}
