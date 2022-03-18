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
 * Information on recipients in the policy template list (API v2018)
 *
 * @method integer getEndTime() Obtain End time of a valid time period.
 * @method void setEndTime(integer $EndTime) Set End time of a valid time period.
 * @method integer getNeedSendNotice() Obtain Whether it is required to send notifications.
 * @method void setNeedSendNotice(integer $NeedSendNotice) Set Whether it is required to send notifications.
 * @method array getNotifyWay() Obtain Alarm receiving channel.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setNotifyWay(array $NotifyWay) Set Alarm receiving channel.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getPersonInterval() Obtain Alarm call intervals for individuals in seconds.
 * @method void setPersonInterval(integer $PersonInterval) Set Alarm call intervals for individuals in seconds.
 * @method array getReceiverGroupList() Obtain Message recipient group list.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setReceiverGroupList(array $ReceiverGroupList) Set Message recipient group list.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getReceiverType() Obtain Recipient type.
 * @method void setReceiverType(string $ReceiverType) Set Recipient type.
 * @method array getReceiverUserList() Obtain Recipient list. The list of recipient IDs that is queried by a platform API.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setReceiverUserList(array $ReceiverUserList) Set Recipient list. The list of recipient IDs that is queried by a platform API.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getRecoverNotify() Obtain Alarm resolution notification method.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setRecoverNotify(array $RecoverNotify) Set Alarm resolution notification method.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getRoundInterval() Obtain Alarm call interval per round in seconds.
 * @method void setRoundInterval(integer $RoundInterval) Set Alarm call interval per round in seconds.
 * @method integer getRoundNumber() Obtain Number of alarm call rounds.
 * @method void setRoundNumber(integer $RoundNumber) Set Number of alarm call rounds.
 * @method array getSendFor() Obtain Alarm call notification time. Valid values: `OCCUR` (indicating that a notification is sent when the alarm is triggered) and `RECOVER` (indicating that a notification is sent when the alarm is resolved).
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSendFor(array $SendFor) Set Alarm call notification time. Valid values: `OCCUR` (indicating that a notification is sent when the alarm is triggered) and `RECOVER` (indicating that a notification is sent when the alarm is resolved).
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getStartTime() Obtain Start time of a valid time period.
 * @method void setStartTime(integer $StartTime) Set Start time of a valid time period.
 * @method array getUIDList() Obtain UID of the alarm call recipient.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setUIDList(array $UIDList) Set UID of the alarm call recipient.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class PolicyGroupReceiverInfo extends AbstractModel
{
    /**
     * @var integer End time of a valid time period.
     */
    public $EndTime;

    /**
     * @var integer Whether it is required to send notifications.
     */
    public $NeedSendNotice;

    /**
     * @var array Alarm receiving channel.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $NotifyWay;

    /**
     * @var integer Alarm call intervals for individuals in seconds.
     */
    public $PersonInterval;

    /**
     * @var array Message recipient group list.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ReceiverGroupList;

    /**
     * @var string Recipient type.
     */
    public $ReceiverType;

    /**
     * @var array Recipient list. The list of recipient IDs that is queried by a platform API.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ReceiverUserList;

    /**
     * @var array Alarm resolution notification method.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $RecoverNotify;

    /**
     * @var integer Alarm call interval per round in seconds.
     */
    public $RoundInterval;

    /**
     * @var integer Number of alarm call rounds.
     */
    public $RoundNumber;

    /**
     * @var array Alarm call notification time. Valid values: `OCCUR` (indicating that a notification is sent when the alarm is triggered) and `RECOVER` (indicating that a notification is sent when the alarm is resolved).
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $SendFor;

    /**
     * @var integer Start time of a valid time period.
     */
    public $StartTime;

    /**
     * @var array UID of the alarm call recipient.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $UIDList;

    /**
     * @param integer $EndTime End time of a valid time period.
     * @param integer $NeedSendNotice Whether it is required to send notifications.
     * @param array $NotifyWay Alarm receiving channel.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $PersonInterval Alarm call intervals for individuals in seconds.
     * @param array $ReceiverGroupList Message recipient group list.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ReceiverType Recipient type.
     * @param array $ReceiverUserList Recipient list. The list of recipient IDs that is queried by a platform API.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $RecoverNotify Alarm resolution notification method.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $RoundInterval Alarm call interval per round in seconds.
     * @param integer $RoundNumber Number of alarm call rounds.
     * @param array $SendFor Alarm call notification time. Valid values: `OCCUR` (indicating that a notification is sent when the alarm is triggered) and `RECOVER` (indicating that a notification is sent when the alarm is resolved).
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $StartTime Start time of a valid time period.
     * @param array $UIDList UID of the alarm call recipient.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("NeedSendNotice",$param) and $param["NeedSendNotice"] !== null) {
            $this->NeedSendNotice = $param["NeedSendNotice"];
        }

        if (array_key_exists("NotifyWay",$param) and $param["NotifyWay"] !== null) {
            $this->NotifyWay = $param["NotifyWay"];
        }

        if (array_key_exists("PersonInterval",$param) and $param["PersonInterval"] !== null) {
            $this->PersonInterval = $param["PersonInterval"];
        }

        if (array_key_exists("ReceiverGroupList",$param) and $param["ReceiverGroupList"] !== null) {
            $this->ReceiverGroupList = $param["ReceiverGroupList"];
        }

        if (array_key_exists("ReceiverType",$param) and $param["ReceiverType"] !== null) {
            $this->ReceiverType = $param["ReceiverType"];
        }

        if (array_key_exists("ReceiverUserList",$param) and $param["ReceiverUserList"] !== null) {
            $this->ReceiverUserList = $param["ReceiverUserList"];
        }

        if (array_key_exists("RecoverNotify",$param) and $param["RecoverNotify"] !== null) {
            $this->RecoverNotify = $param["RecoverNotify"];
        }

        if (array_key_exists("RoundInterval",$param) and $param["RoundInterval"] !== null) {
            $this->RoundInterval = $param["RoundInterval"];
        }

        if (array_key_exists("RoundNumber",$param) and $param["RoundNumber"] !== null) {
            $this->RoundNumber = $param["RoundNumber"];
        }

        if (array_key_exists("SendFor",$param) and $param["SendFor"] !== null) {
            $this->SendFor = $param["SendFor"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("UIDList",$param) and $param["UIDList"] !== null) {
            $this->UIDList = $param["UIDList"];
        }
    }
}
