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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Access key Alarm record.
 *
 * @method string getName() Obtain <p>Alarm name</p>
 * @method void setName(string $Name) Set <p>Alarm name</p>
 * @method integer getLevel() Obtain <p>Alarm level<br>0-Unavailable 1-Notification 2-Low risk 3-Medium risk 4-High risk 5-Critical</p>
 * @method void setLevel(integer $Level) Set <p>Alarm level<br>0-Unavailable 1-Notification 2-Low risk 3-Medium risk 4-High risk 5-Critical</p>
 * @method integer getID() Obtain <p>Alarm record ID</p>
 * @method void setID(integer $ID) Set <p>Alarm record ID</p>
 * @method integer getAlarmRuleID() Obtain <p>Alarm rule ID</p>
 * @method void setAlarmRuleID(integer $AlarmRuleID) Set <p>Alarm rule ID</p>
 * @method integer getAlarmType() Obtain <p>Alarm type<br>0 Abnormal call<br>1 Leak monitoring</p>
 * @method void setAlarmType(integer $AlarmType) Set <p>Alarm type<br>0 Abnormal call<br>1 Leak monitoring</p>
 * @method string getAccessKey() Obtain <p>Access key</p>
 * @method void setAccessKey(string $AccessKey) Set <p>Access key</p>
 * @method integer getAccessKeyID() Obtain <p>Access Key ID</p>
 * @method void setAccessKeyID(integer $AccessKeyID) Set <p>Access Key ID</p>
 * @method string getAccessKeyRemark() Obtain <p>Access key remark</p>
 * @method void setAccessKeyRemark(string $AccessKeyRemark) Set <p>Access key remark</p>
 * @method string getLastAlarmTime() Obtain <p>Last alarm time</p>
 * @method void setLastAlarmTime(string $LastAlarmTime) Set <p>Last alarm time</p>
 * @method integer getStatus() Obtain <p>Alarm status<br>0-unprocessed 1-processed 2-ignored</p>
 * @method void setStatus(integer $Status) Set <p>Alarm status<br>0-unprocessed 1-processed 2-ignored</p>
 * @method string getDate() Obtain <p>Aggregate date</p>
 * @method void setDate(string $Date) Set <p>Aggregate date</p>
 * @method array getTag() Obtain <p>Alarm tag</p>
 * @method void setTag(array $Tag) Set <p>Alarm tag</p>
 * @method string getUin() Obtain <p>Uin of the main account</p>
 * @method void setUin(string $Uin) Set <p>Uin of the main account</p>
 * @method string getNickname() Obtain <p>Nickname of the main account</p>
 * @method void setNickname(string $Nickname) Set <p>Nickname of the main account</p>
 * @method string getSubUin() Obtain <p>Sub-account Uin</p>
 * @method void setSubUin(string $SubUin) Set <p>Sub-account Uin</p>
 * @method string getSubNickname() Obtain <p>Sub-account nickname</p>
 * @method void setSubNickname(string $SubNickname) Set <p>Sub-account nickname</p>
 * @method integer getType() Obtain <p>Account type<br>0 Root account AK 1 Sub-account AK 2 Temporary key</p>
 * @method void setType(integer $Type) Set <p>Account type<br>0 Root account AK 1 Sub-account AK 2 Temporary key</p>
 * @method integer getAppID() Obtain <p>App ID</p>
 * @method void setAppID(integer $AppID) Set <p>App ID</p>
 * @method array getLeakEvidence() Obtain <p>Leakage evidence</p>
 * @method void setLeakEvidence(array $LeakEvidence) Set <p>Leakage evidence</p>
 * @method boolean getIsSupportEditWhiteAccount() Obtain <p>Whether support editing trust account</p>
 * @method void setIsSupportEditWhiteAccount(boolean $IsSupportEditWhiteAccount) Set <p>Whether support editing trust account</p>
 * @method string getEvidence() Obtain <p>Alert evidence</p>
 * @method void setEvidence(string $Evidence) Set <p>Alert evidence</p>
 * @method string getRuleKey() Obtain <p>Alarm rule flag</p>
 * @method void setRuleKey(string $RuleKey) Set <p>Alarm rule flag</p>
 * @method integer getCloudType() Obtain <p>Cloud vendor type 0:Tencent Cloud 1:Amazon Web Services 2:Microsoft Azure 3:Google Cloud 4:Alibaba Cloud 5:Huawei Cloud</p>
 * @method void setCloudType(integer $CloudType) Set <p>Cloud vendor type 0:Tencent Cloud 1:Amazon Web Services 2:Microsoft Azure 3:Google Cloud 4:Alibaba Cloud 5:Huawei Cloud</p>
 * @method integer getAIStatus() Obtain <p>Alarm AI analysis status<br>-1 Analysis failed<br>0 Not analyzed<br>1 Under analysis<br>2 Analysis successful, real alarm<br>3 Analysis successful, suspicious alarm</p>
 * @method void setAIStatus(integer $AIStatus) Set <p>Alarm AI analysis status<br>-1 Analysis failed<br>0 Not analyzed<br>1 Under analysis<br>2 Analysis successful, real alarm<br>3 Analysis successful, suspicious alarm</p>
 * @method integer getFirstAlarmTimestamp() Obtain <p>First alarm timestamp (in seconds)</p>
 * @method void setFirstAlarmTimestamp(integer $FirstAlarmTimestamp) Set <p>First alarm timestamp (in seconds)</p>
 * @method integer getLastAlarmTimestamp() Obtain <p>Last alarm timestamp (in seconds)</p>
 * @method void setLastAlarmTimestamp(integer $LastAlarmTimestamp) Set <p>Last alarm timestamp (in seconds)</p>
 * @method string getAIFailedReason() Obtain <p>AI analysis failure description. Empty string if not failed.</p>
 * @method void setAIFailedReason(string $AIFailedReason) Set <p>AI analysis failure description. Empty string if not failed.</p>
 */
class AccessKeyAlarm extends AbstractModel
{
    /**
     * @var string <p>Alarm name</p>
     */
    public $Name;

    /**
     * @var integer <p>Alarm level<br>0-Unavailable 1-Notification 2-Low risk 3-Medium risk 4-High risk 5-Critical</p>
     */
    public $Level;

    /**
     * @var integer <p>Alarm record ID</p>
     */
    public $ID;

    /**
     * @var integer <p>Alarm rule ID</p>
     */
    public $AlarmRuleID;

    /**
     * @var integer <p>Alarm type<br>0 Abnormal call<br>1 Leak monitoring</p>
     */
    public $AlarmType;

    /**
     * @var string <p>Access key</p>
     */
    public $AccessKey;

    /**
     * @var integer <p>Access Key ID</p>
     */
    public $AccessKeyID;

    /**
     * @var string <p>Access key remark</p>
     */
    public $AccessKeyRemark;

    /**
     * @var string <p>Last alarm time</p>
     */
    public $LastAlarmTime;

    /**
     * @var integer <p>Alarm status<br>0-unprocessed 1-processed 2-ignored</p>
     */
    public $Status;

    /**
     * @var string <p>Aggregate date</p>
     */
    public $Date;

    /**
     * @var array <p>Alarm tag</p>
     */
    public $Tag;

    /**
     * @var string <p>Uin of the main account</p>
     */
    public $Uin;

    /**
     * @var string <p>Nickname of the main account</p>
     */
    public $Nickname;

    /**
     * @var string <p>Sub-account Uin</p>
     */
    public $SubUin;

    /**
     * @var string <p>Sub-account nickname</p>
     */
    public $SubNickname;

    /**
     * @var integer <p>Account type<br>0 Root account AK 1 Sub-account AK 2 Temporary key</p>
     */
    public $Type;

    /**
     * @var integer <p>App ID</p>
     */
    public $AppID;

    /**
     * @var array <p>Leakage evidence</p>
     */
    public $LeakEvidence;

    /**
     * @var boolean <p>Whether support editing trust account</p>
     */
    public $IsSupportEditWhiteAccount;

    /**
     * @var string <p>Alert evidence</p>
     */
    public $Evidence;

    /**
     * @var string <p>Alarm rule flag</p>
     */
    public $RuleKey;

    /**
     * @var integer <p>Cloud vendor type 0:Tencent Cloud 1:Amazon Web Services 2:Microsoft Azure 3:Google Cloud 4:Alibaba Cloud 5:Huawei Cloud</p>
     */
    public $CloudType;

    /**
     * @var integer <p>Alarm AI analysis status<br>-1 Analysis failed<br>0 Not analyzed<br>1 Under analysis<br>2 Analysis successful, real alarm<br>3 Analysis successful, suspicious alarm</p>
     */
    public $AIStatus;

    /**
     * @var integer <p>First alarm timestamp (in seconds)</p>
     */
    public $FirstAlarmTimestamp;

    /**
     * @var integer <p>Last alarm timestamp (in seconds)</p>
     */
    public $LastAlarmTimestamp;

    /**
     * @var string <p>AI analysis failure description. Empty string if not failed.</p>
     */
    public $AIFailedReason;

    /**
     * @param string $Name <p>Alarm name</p>
     * @param integer $Level <p>Alarm level<br>0-Unavailable 1-Notification 2-Low risk 3-Medium risk 4-High risk 5-Critical</p>
     * @param integer $ID <p>Alarm record ID</p>
     * @param integer $AlarmRuleID <p>Alarm rule ID</p>
     * @param integer $AlarmType <p>Alarm type<br>0 Abnormal call<br>1 Leak monitoring</p>
     * @param string $AccessKey <p>Access key</p>
     * @param integer $AccessKeyID <p>Access Key ID</p>
     * @param string $AccessKeyRemark <p>Access key remark</p>
     * @param string $LastAlarmTime <p>Last alarm time</p>
     * @param integer $Status <p>Alarm status<br>0-unprocessed 1-processed 2-ignored</p>
     * @param string $Date <p>Aggregate date</p>
     * @param array $Tag <p>Alarm tag</p>
     * @param string $Uin <p>Uin of the main account</p>
     * @param string $Nickname <p>Nickname of the main account</p>
     * @param string $SubUin <p>Sub-account Uin</p>
     * @param string $SubNickname <p>Sub-account nickname</p>
     * @param integer $Type <p>Account type<br>0 Root account AK 1 Sub-account AK 2 Temporary key</p>
     * @param integer $AppID <p>App ID</p>
     * @param array $LeakEvidence <p>Leakage evidence</p>
     * @param boolean $IsSupportEditWhiteAccount <p>Whether support editing trust account</p>
     * @param string $Evidence <p>Alert evidence</p>
     * @param string $RuleKey <p>Alarm rule flag</p>
     * @param integer $CloudType <p>Cloud vendor type 0:Tencent Cloud 1:Amazon Web Services 2:Microsoft Azure 3:Google Cloud 4:Alibaba Cloud 5:Huawei Cloud</p>
     * @param integer $AIStatus <p>Alarm AI analysis status<br>-1 Analysis failed<br>0 Not analyzed<br>1 Under analysis<br>2 Analysis successful, real alarm<br>3 Analysis successful, suspicious alarm</p>
     * @param integer $FirstAlarmTimestamp <p>First alarm timestamp (in seconds)</p>
     * @param integer $LastAlarmTimestamp <p>Last alarm timestamp (in seconds)</p>
     * @param string $AIFailedReason <p>AI analysis failure description. Empty string if not failed.</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("AlarmRuleID",$param) and $param["AlarmRuleID"] !== null) {
            $this->AlarmRuleID = $param["AlarmRuleID"];
        }

        if (array_key_exists("AlarmType",$param) and $param["AlarmType"] !== null) {
            $this->AlarmType = $param["AlarmType"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("AccessKeyID",$param) and $param["AccessKeyID"] !== null) {
            $this->AccessKeyID = $param["AccessKeyID"];
        }

        if (array_key_exists("AccessKeyRemark",$param) and $param["AccessKeyRemark"] !== null) {
            $this->AccessKeyRemark = $param["AccessKeyRemark"];
        }

        if (array_key_exists("LastAlarmTime",$param) and $param["LastAlarmTime"] !== null) {
            $this->LastAlarmTime = $param["LastAlarmTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("SubNickname",$param) and $param["SubNickname"] !== null) {
            $this->SubNickname = $param["SubNickname"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("LeakEvidence",$param) and $param["LeakEvidence"] !== null) {
            $this->LeakEvidence = $param["LeakEvidence"];
        }

        if (array_key_exists("IsSupportEditWhiteAccount",$param) and $param["IsSupportEditWhiteAccount"] !== null) {
            $this->IsSupportEditWhiteAccount = $param["IsSupportEditWhiteAccount"];
        }

        if (array_key_exists("Evidence",$param) and $param["Evidence"] !== null) {
            $this->Evidence = $param["Evidence"];
        }

        if (array_key_exists("RuleKey",$param) and $param["RuleKey"] !== null) {
            $this->RuleKey = $param["RuleKey"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("AIStatus",$param) and $param["AIStatus"] !== null) {
            $this->AIStatus = $param["AIStatus"];
        }

        if (array_key_exists("FirstAlarmTimestamp",$param) and $param["FirstAlarmTimestamp"] !== null) {
            $this->FirstAlarmTimestamp = $param["FirstAlarmTimestamp"];
        }

        if (array_key_exists("LastAlarmTimestamp",$param) and $param["LastAlarmTimestamp"] !== null) {
            $this->LastAlarmTimestamp = $param["LastAlarmTimestamp"];
        }

        if (array_key_exists("AIFailedReason",$param) and $param["AIFailedReason"] !== null) {
            $this->AIFailedReason = $param["AIFailedReason"];
        }
    }
}
