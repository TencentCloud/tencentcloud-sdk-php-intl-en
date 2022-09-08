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
 * Recipient information.
 *
 * @method integer getStartTime() Obtain Start time of the alarm period. Value range: [0,86400). Convert the Unix timestamp to Beijing time and then remove the date. For example, 7200 indicates “10:0:0”.
 * @method void setStartTime(integer $StartTime) Set Start time of the alarm period. Value range: [0,86400). Convert the Unix timestamp to Beijing time and then remove the date. For example, 7200 indicates “10:0:0”.
 * @method integer getEndTime() Obtain End time of the alarm period. The meaning is the same as that of StartTime.
 * @method void setEndTime(integer $EndTime) Set End time of the alarm period. The meaning is the same as that of StartTime.
 * @method array getNotifyWay() Obtain Alarm notification method. Valid values: "SMS", "SITE", "EMAIL", "CALL", and "WECHAT".
 * @method void setNotifyWay(array $NotifyWay) Set Alarm notification method. Valid values: "SMS", "SITE", "EMAIL", "CALL", and "WECHAT".
 * @method string getReceiverType() Obtain Recipient type. Valid values: group and user.
 * @method void setReceiverType(string $ReceiverType) Set Recipient type. Valid values: group and user.
 * @method integer getId() Obtain ReceiverId
 * @method void setId(integer $Id) Set ReceiverId
 * @method array getSendFor() Obtain Alarm call notification time. Valid values: OCCUR (indicating that a notice is sent when the alarm is triggered) and RECOVER (indicating that a notice is sent when the alarm is recovered).
 * @method void setSendFor(array $SendFor) Set Alarm call notification time. Valid values: OCCUR (indicating that a notice is sent when the alarm is triggered) and RECOVER (indicating that a notice is sent when the alarm is recovered).
 * @method array getUidList() Obtain UID of the phone call alarm.
 * @method void setUidList(array $UidList) Set UID of the phone call alarm.
 * @method integer getRoundNumber() Obtain Number of alarm call rounds.
 * @method void setRoundNumber(integer $RoundNumber) Set Number of alarm call rounds.
 * @method integer getPersonInterval() Obtain Alarm call intervals for individuals in seconds.
 * @method void setPersonInterval(integer $PersonInterval) Set Alarm call intervals for individuals in seconds.
 * @method integer getRoundInterval() Obtain Intervals of alarm call rounds in seconds.
 * @method void setRoundInterval(integer $RoundInterval) Set Intervals of alarm call rounds in seconds.
 * @method array getRecoverNotify() Obtain Notification method when an alarm is recovered. Valid value: SMS.
 * @method void setRecoverNotify(array $RecoverNotify) Set Notification method when an alarm is recovered. Valid value: SMS.
 * @method integer getNeedSendNotice() Obtain Whether to send an alarm call delivery notice. The value 0 indicates that no notice needs to be sent. The value 1 indicates that a notice needs to be sent.
 * @method void setNeedSendNotice(integer $NeedSendNotice) Set Whether to send an alarm call delivery notice. The value 0 indicates that no notice needs to be sent. The value 1 indicates that a notice needs to be sent.
 * @method array getReceiverGroupList() Obtain Recipient group list. The list of recipient group IDs that is queried by API.
 * @method void setReceiverGroupList(array $ReceiverGroupList) Set Recipient group list. The list of recipient group IDs that is queried by API.
 * @method array getReceiverUserList() Obtain Recipient list. The list of recipient IDs that is queried by API.
 * @method void setReceiverUserList(array $ReceiverUserList) Set Recipient list. The list of recipient IDs that is queried by API.
 * @method string getReceiveLanguage() Obtain Language of received alarms. Enumerated values: zh-CN and en-US.
 * @method void setReceiveLanguage(string $ReceiveLanguage) Set Language of received alarms. Enumerated values: zh-CN and en-US.
 */
class ReceiverInfo extends AbstractModel
{
    /**
     * @var integer Start time of the alarm period. Value range: [0,86400). Convert the Unix timestamp to Beijing time and then remove the date. For example, 7200 indicates “10:0:0”.
     */
    public $StartTime;

    /**
     * @var integer End time of the alarm period. The meaning is the same as that of StartTime.
     */
    public $EndTime;

    /**
     * @var array Alarm notification method. Valid values: "SMS", "SITE", "EMAIL", "CALL", and "WECHAT".
     */
    public $NotifyWay;

    /**
     * @var string Recipient type. Valid values: group and user.
     */
    public $ReceiverType;

    /**
     * @var integer ReceiverId
     */
    public $Id;

    /**
     * @var array Alarm call notification time. Valid values: OCCUR (indicating that a notice is sent when the alarm is triggered) and RECOVER (indicating that a notice is sent when the alarm is recovered).
     */
    public $SendFor;

    /**
     * @var array UID of the phone call alarm.
     */
    public $UidList;

    /**
     * @var integer Number of alarm call rounds.
     */
    public $RoundNumber;

    /**
     * @var integer Alarm call intervals for individuals in seconds.
     */
    public $PersonInterval;

    /**
     * @var integer Intervals of alarm call rounds in seconds.
     */
    public $RoundInterval;

    /**
     * @var array Notification method when an alarm is recovered. Valid value: SMS.
     */
    public $RecoverNotify;

    /**
     * @var integer Whether to send an alarm call delivery notice. The value 0 indicates that no notice needs to be sent. The value 1 indicates that a notice needs to be sent.
     */
    public $NeedSendNotice;

    /**
     * @var array Recipient group list. The list of recipient group IDs that is queried by API.
     */
    public $ReceiverGroupList;

    /**
     * @var array Recipient list. The list of recipient IDs that is queried by API.
     */
    public $ReceiverUserList;

    /**
     * @var string Language of received alarms. Enumerated values: zh-CN and en-US.
     */
    public $ReceiveLanguage;

    /**
     * @param integer $StartTime Start time of the alarm period. Value range: [0,86400). Convert the Unix timestamp to Beijing time and then remove the date. For example, 7200 indicates “10:0:0”.
     * @param integer $EndTime End time of the alarm period. The meaning is the same as that of StartTime.
     * @param array $NotifyWay Alarm notification method. Valid values: "SMS", "SITE", "EMAIL", "CALL", and "WECHAT".
     * @param string $ReceiverType Recipient type. Valid values: group and user.
     * @param integer $Id ReceiverId
     * @param array $SendFor Alarm call notification time. Valid values: OCCUR (indicating that a notice is sent when the alarm is triggered) and RECOVER (indicating that a notice is sent when the alarm is recovered).
     * @param array $UidList UID of the phone call alarm.
     * @param integer $RoundNumber Number of alarm call rounds.
     * @param integer $PersonInterval Alarm call intervals for individuals in seconds.
     * @param integer $RoundInterval Intervals of alarm call rounds in seconds.
     * @param array $RecoverNotify Notification method when an alarm is recovered. Valid value: SMS.
     * @param integer $NeedSendNotice Whether to send an alarm call delivery notice. The value 0 indicates that no notice needs to be sent. The value 1 indicates that a notice needs to be sent.
     * @param array $ReceiverGroupList Recipient group list. The list of recipient group IDs that is queried by API.
     * @param array $ReceiverUserList Recipient list. The list of recipient IDs that is queried by API.
     * @param string $ReceiveLanguage Language of received alarms. Enumerated values: zh-CN and en-US.
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("NotifyWay",$param) and $param["NotifyWay"] !== null) {
            $this->NotifyWay = $param["NotifyWay"];
        }

        if (array_key_exists("ReceiverType",$param) and $param["ReceiverType"] !== null) {
            $this->ReceiverType = $param["ReceiverType"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("SendFor",$param) and $param["SendFor"] !== null) {
            $this->SendFor = $param["SendFor"];
        }

        if (array_key_exists("UidList",$param) and $param["UidList"] !== null) {
            $this->UidList = $param["UidList"];
        }

        if (array_key_exists("RoundNumber",$param) and $param["RoundNumber"] !== null) {
            $this->RoundNumber = $param["RoundNumber"];
        }

        if (array_key_exists("PersonInterval",$param) and $param["PersonInterval"] !== null) {
            $this->PersonInterval = $param["PersonInterval"];
        }

        if (array_key_exists("RoundInterval",$param) and $param["RoundInterval"] !== null) {
            $this->RoundInterval = $param["RoundInterval"];
        }

        if (array_key_exists("RecoverNotify",$param) and $param["RecoverNotify"] !== null) {
            $this->RecoverNotify = $param["RecoverNotify"];
        }

        if (array_key_exists("NeedSendNotice",$param) and $param["NeedSendNotice"] !== null) {
            $this->NeedSendNotice = $param["NeedSendNotice"];
        }

        if (array_key_exists("ReceiverGroupList",$param) and $param["ReceiverGroupList"] !== null) {
            $this->ReceiverGroupList = $param["ReceiverGroupList"];
        }

        if (array_key_exists("ReceiverUserList",$param) and $param["ReceiverUserList"] !== null) {
            $this->ReceiverUserList = $param["ReceiverUserList"];
        }

        if (array_key_exists("ReceiveLanguage",$param) and $param["ReceiveLanguage"] !== null) {
            $this->ReceiveLanguage = $param["ReceiveLanguage"];
        }
    }
}
