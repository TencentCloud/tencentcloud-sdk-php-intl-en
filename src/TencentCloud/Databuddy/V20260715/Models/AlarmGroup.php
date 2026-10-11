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
 * Alarm group
 *
 * @method string getChannelId() Obtain <p>Notification channel ID, which can be obtained through the notification channel APIs of the basic platform</p>
 * @method void setChannelId(string $ChannelId) Set <p>Notification channel ID, which can be obtained through the notification channel APIs of the basic platform</p>
 * @method string getChannelName() Obtain <p>Notification channel name, which can be a user group name or email address</p>
 * @method void setChannelName(string $ChannelName) Set <p>Notification channel name, which can be a user group name or email address</p>
 * @method boolean getIsEmailChannel() Obtain <p>Whether to enable the email channel. Default value: false</p>
 * @method void setIsEmailChannel(boolean $IsEmailChannel) Set <p>Whether to enable the email channel. Default value: false</p>
 * @method array getAlarmConditions() Obtain <p>Alarm condition list. Value: <br>START: Start up<br>SUCCESS: Success<br>FAILURE: Failure<br>MONITOR_INDICATOR_ALARM: Monitoring metric alarm</p>
 * @method void setAlarmConditions(array $AlarmConditions) Set <p>Alarm condition list. Value: <br>START: Start up<br>SUCCESS: Success<br>FAILURE: Failure<br>MONITOR_INDICATOR_ALARM: Monitoring metric alarm</p>
 * @method integer getChannelType() Obtain <p>Notification channel type. Value: 0 unspecified, 1 Email, 2 Webhook, 3 Teams, 4 Slack</p>
 * @method void setChannelType(integer $ChannelType) Set <p>Notification channel type. Value: 0 unspecified, 1 Email, 2 Webhook, 3 Teams, 4 Slack</p>
 */
class AlarmGroup extends AbstractModel
{
    /**
     * @var string <p>Notification channel ID, which can be obtained through the notification channel APIs of the basic platform</p>
     */
    public $ChannelId;

    /**
     * @var string <p>Notification channel name, which can be a user group name or email address</p>
     */
    public $ChannelName;

    /**
     * @var boolean <p>Whether to enable the email channel. Default value: false</p>
     */
    public $IsEmailChannel;

    /**
     * @var array <p>Alarm condition list. Value: <br>START: Start up<br>SUCCESS: Success<br>FAILURE: Failure<br>MONITOR_INDICATOR_ALARM: Monitoring metric alarm</p>
     */
    public $AlarmConditions;

    /**
     * @var integer <p>Notification channel type. Value: 0 unspecified, 1 Email, 2 Webhook, 3 Teams, 4 Slack</p>
     */
    public $ChannelType;

    /**
     * @param string $ChannelId <p>Notification channel ID, which can be obtained through the notification channel APIs of the basic platform</p>
     * @param string $ChannelName <p>Notification channel name, which can be a user group name or email address</p>
     * @param boolean $IsEmailChannel <p>Whether to enable the email channel. Default value: false</p>
     * @param array $AlarmConditions <p>Alarm condition list. Value: <br>START: Start up<br>SUCCESS: Success<br>FAILURE: Failure<br>MONITOR_INDICATOR_ALARM: Monitoring metric alarm</p>
     * @param integer $ChannelType <p>Notification channel type. Value: 0 unspecified, 1 Email, 2 Webhook, 3 Teams, 4 Slack</p>
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("IsEmailChannel",$param) and $param["IsEmailChannel"] !== null) {
            $this->IsEmailChannel = $param["IsEmailChannel"];
        }

        if (array_key_exists("AlarmConditions",$param) and $param["AlarmConditions"] !== null) {
            $this->AlarmConditions = $param["AlarmConditions"];
        }

        if (array_key_exists("ChannelType",$param) and $param["ChannelType"] !== null) {
            $this->ChannelType = $param["ChannelType"];
        }
    }
}
