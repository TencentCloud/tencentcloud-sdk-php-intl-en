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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Notification history for each alert
 *
 * @method string getNotifyId() Obtain Unique notification ID.
 * @method void setNotifyId(string $NotifyId) Set Unique notification ID.
 * @method string getPolicyId() Obtain Alert policy ID
 * @method void setPolicyId(string $PolicyId) Set Alert policy ID
 * @method string getSessionId() Obtain Alarm cycle iD
 * @method void setSessionId(string $SessionId) Set Alarm cycle iD
 * @method integer getNotifyTime() Obtain Notification time in Unix timestamp (in seconds).
 * @method void setNotifyTime(integer $NotifyTime) Set Notification time in Unix timestamp (in seconds).
 * @method integer getTriggerTime() Obtain Trigger time in Unix timestamp (in seconds).
 * @method void setTriggerTime(integer $TriggerTime) Set Trigger time in Unix timestamp (in seconds).
 * @method string getTriggerLevel() Obtain Alarm severity level. Valid values: None, Note, Warn, and Serious.
 * @method void setTriggerLevel(string $TriggerLevel) Set Alarm severity level. Valid values: None, Note, Warn, and Serious.
 * @method string getAlarmContent() Obtain alert content
 * @method void setAlarmContent(string $AlarmContent) Set alert content
 * @method string getAlarmObject() Obtain Alarm object
 * @method void setAlarmObject(string $AlarmObject) Set Alarm object
 * @method array getChannelSet() Obtain Alarm notification channel collection involved this time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setChannelSet(array $ChannelSet) Set Alarm notification channel collection involved this time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getChannelsReceivers() Obtain Recipient information of the channel
 * @method void setChannelsReceivers(array $ChannelsReceivers) Set Recipient information of the channel
 * @method string getPolicyName() Obtain Alarm policy name
 * @method void setPolicyName(string $PolicyName) Set Alarm policy name
 * @method string getPromeInstanceID() Obtain Prometheus Instance ID, valid only when MT_PROME
 * @method void setPromeInstanceID(string $PromeInstanceID) Set Prometheus Instance ID, valid only when MT_PROME
 * @method string getPromeInstanceRegion() Obtain Region of the Prometheus Instance. Valid at that time only for MT_PROME.
 * @method void setPromeInstanceRegion(string $PromeInstanceRegion) Set Region of the Prometheus Instance. Valid at that time only for MT_PROME.
 * @method array getNotices() Obtain Notification template related configuration information
 * @method void setNotices(array $Notices) Set Notification template related configuration information
 * @method string getTriggerStatus() Obtain Alarm trigger status. Valid values: Trigger and Recovery.
 * @method void setTriggerStatus(string $TriggerStatus) Set Alarm trigger status. Valid values: Trigger and Recovery.
 * @method string getPromeConsoleURL() Obtain Console page address related to the present Prometheus notification history, valid only when MR_PROME
 * @method void setPromeConsoleURL(string $PromeConsoleURL) Set Console page address related to the present Prometheus notification history, valid only when MR_PROME
 * @method array getLabels() Obtain Alarm label
 * @method void setLabels(array $Labels) Set Alarm label
 */
class AlarmNotifyHistory extends AbstractModel
{
    /**
     * @var string Unique notification ID.
     */
    public $NotifyId;

    /**
     * @var string Alert policy ID
     */
    public $PolicyId;

    /**
     * @var string Alarm cycle iD
     */
    public $SessionId;

    /**
     * @var integer Notification time in Unix timestamp (in seconds).
     */
    public $NotifyTime;

    /**
     * @var integer Trigger time in Unix timestamp (in seconds).
     */
    public $TriggerTime;

    /**
     * @var string Alarm severity level. Valid values: None, Note, Warn, and Serious.
     */
    public $TriggerLevel;

    /**
     * @var string alert content
     */
    public $AlarmContent;

    /**
     * @var string Alarm object
     */
    public $AlarmObject;

    /**
     * @var array Alarm notification channel collection involved this time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ChannelSet;

    /**
     * @var array Recipient information of the channel
     */
    public $ChannelsReceivers;

    /**
     * @var string Alarm policy name
     */
    public $PolicyName;

    /**
     * @var string Prometheus Instance ID, valid only when MT_PROME
     */
    public $PromeInstanceID;

    /**
     * @var string Region of the Prometheus Instance. Valid at that time only for MT_PROME.
     */
    public $PromeInstanceRegion;

    /**
     * @var array Notification template related configuration information
     */
    public $Notices;

    /**
     * @var string Alarm trigger status. Valid values: Trigger and Recovery.
     */
    public $TriggerStatus;

    /**
     * @var string Console page address related to the present Prometheus notification history, valid only when MR_PROME
     */
    public $PromeConsoleURL;

    /**
     * @var array Alarm label
     */
    public $Labels;

    /**
     * @param string $NotifyId Unique notification ID.
     * @param string $PolicyId Alert policy ID
     * @param string $SessionId Alarm cycle iD
     * @param integer $NotifyTime Notification time in Unix timestamp (in seconds).
     * @param integer $TriggerTime Trigger time in Unix timestamp (in seconds).
     * @param string $TriggerLevel Alarm severity level. Valid values: None, Note, Warn, and Serious.
     * @param string $AlarmContent alert content
     * @param string $AlarmObject Alarm object
     * @param array $ChannelSet Alarm notification channel collection involved this time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ChannelsReceivers Recipient information of the channel
     * @param string $PolicyName Alarm policy name
     * @param string $PromeInstanceID Prometheus Instance ID, valid only when MT_PROME
     * @param string $PromeInstanceRegion Region of the Prometheus Instance. Valid at that time only for MT_PROME.
     * @param array $Notices Notification template related configuration information
     * @param string $TriggerStatus Alarm trigger status. Valid values: Trigger and Recovery.
     * @param string $PromeConsoleURL Console page address related to the present Prometheus notification history, valid only when MR_PROME
     * @param array $Labels Alarm label
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
        if (array_key_exists("NotifyId",$param) and $param["NotifyId"] !== null) {
            $this->NotifyId = $param["NotifyId"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("NotifyTime",$param) and $param["NotifyTime"] !== null) {
            $this->NotifyTime = $param["NotifyTime"];
        }

        if (array_key_exists("TriggerTime",$param) and $param["TriggerTime"] !== null) {
            $this->TriggerTime = $param["TriggerTime"];
        }

        if (array_key_exists("TriggerLevel",$param) and $param["TriggerLevel"] !== null) {
            $this->TriggerLevel = $param["TriggerLevel"];
        }

        if (array_key_exists("AlarmContent",$param) and $param["AlarmContent"] !== null) {
            $this->AlarmContent = $param["AlarmContent"];
        }

        if (array_key_exists("AlarmObject",$param) and $param["AlarmObject"] !== null) {
            $this->AlarmObject = $param["AlarmObject"];
        }

        if (array_key_exists("ChannelSet",$param) and $param["ChannelSet"] !== null) {
            $this->ChannelSet = $param["ChannelSet"];
        }

        if (array_key_exists("ChannelsReceivers",$param) and $param["ChannelsReceivers"] !== null) {
            $this->ChannelsReceivers = [];
            foreach ($param["ChannelsReceivers"] as $key => $value){
                $obj = new ChannelsReceivers();
                $obj->deserialize($value);
                array_push($this->ChannelsReceivers, $obj);
            }
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("PromeInstanceID",$param) and $param["PromeInstanceID"] !== null) {
            $this->PromeInstanceID = $param["PromeInstanceID"];
        }

        if (array_key_exists("PromeInstanceRegion",$param) and $param["PromeInstanceRegion"] !== null) {
            $this->PromeInstanceRegion = $param["PromeInstanceRegion"];
        }

        if (array_key_exists("Notices",$param) and $param["Notices"] !== null) {
            $this->Notices = [];
            foreach ($param["Notices"] as $key => $value){
                $obj = new NotifyRelatedNotice();
                $obj->deserialize($value);
                array_push($this->Notices, $obj);
            }
        }

        if (array_key_exists("TriggerStatus",$param) and $param["TriggerStatus"] !== null) {
            $this->TriggerStatus = $param["TriggerStatus"];
        }

        if (array_key_exists("PromeConsoleURL",$param) and $param["PromeConsoleURL"] !== null) {
            $this->PromeConsoleURL = $param["PromeConsoleURL"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new AlarmLable();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }
    }
}
