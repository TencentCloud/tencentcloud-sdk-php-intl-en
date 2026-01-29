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
 * @method string getName() Obtain Alarm name.
 * @method void setName(string $Name) Set Alarm name.
 * @method integer getLevel() Obtain Alarm level.
0 - unavailable 1 - Note 2 - low risk 3 - medium risk 4 - high risk 5 - critical.
 * @method void setLevel(integer $Level) Set Alarm level.
0 - unavailable 1 - Note 2 - low risk 3 - medium risk 4 - high risk 5 - critical.
 * @method integer getID() Obtain Alarm record ID.
 * @method void setID(integer $ID) Set Alarm record ID.
 * @method integer getAlarmRuleID() Obtain Alarm rule ID.
 * @method void setAlarmRuleID(integer $AlarmRuleID) Set Alarm rule ID.
 * @method integer getAlarmType() Obtain Alarm type
Abnormal call.
Leak monitoring.
 * @method void setAlarmType(integer $AlarmType) Set Alarm type
Abnormal call.
Leak monitoring.
 * @method string getAccessKey() Obtain Access key.
 * @method void setAccessKey(string $AccessKey) Set Access key.
 * @method integer getAccessKeyID() Obtain Access key ID.
 * @method void setAccessKeyID(integer $AccessKeyID) Set Access key ID.
 * @method string getAccessKeyRemark() Obtain Access key remark.
 * @method void setAccessKeyRemark(string $AccessKeyRemark) Set Access key remark.
 * @method string getLastAlarmTime() Obtain Last Alarm Time
 * @method void setLastAlarmTime(string $LastAlarmTime) Set Last Alarm Time
 * @method integer getStatus() Obtain Alarm status.
0 - unprocessed 1 - processed 2 - ignored.
 * @method void setStatus(integer $Status) Set Alarm status.
0 - unprocessed 1 - processed 2 - ignored.
 * @method string getDate() Obtain Aggregate date.
 * @method void setDate(string $Date) Set Aggregate date.
 * @method array getTag() Obtain Alarm Tag.
 * @method void setTag(array $Tag) Set Alarm Tag.
 * @method string getUin() Obtain Account associate Uin belonging to main account.
 * @method void setUin(string $Uin) Set Account associate Uin belonging to main account.
 * @method string getNickname() Obtain Nickname of the main account.
 * @method void setNickname(string $Nickname) Set Nickname of the main account.
 * @method string getSubUin() Obtain Sub-Account Uin belonging to.
 * @method void setSubUin(string $SubUin) Set Sub-Account Uin belonging to.
 * @method string getSubNickname() Obtain Sub-Account nickname.
 * @method void setSubNickname(string $SubNickname) Set Sub-Account nickname.
 * @method integer getType() Obtain Account type.
0 root account AK 1 sub-account AK 2 temporary key.
 * @method void setType(integer $Type) Set Account type.
0 root account AK 1 sub-account AK 2 temporary key.
 * @method integer getAppID() Obtain App ID
 * @method void setAppID(integer $AppID) Set App ID
 * @method array getLeakEvidence() Obtain Leakage evidence.
 * @method void setLeakEvidence(array $LeakEvidence) Set Leakage evidence.
 * @method boolean getIsSupportEditWhiteAccount() Obtain Whether editing a trusted account is supported.
 * @method void setIsSupportEditWhiteAccount(boolean $IsSupportEditWhiteAccount) Set Whether editing a trusted account is supported.
 * @method string getEvidence() Obtain Alarm evidence.
 * @method void setEvidence(string $Evidence) Set Alarm evidence.
 * @method string getRuleKey() Obtain Alarm rule flag.
 * @method void setRuleKey(string $RuleKey) Set Alarm rule flag.
 * @method integer getCloudType() Obtain Cloud vendor type 0: tencent cloud 1: amazon web services 2: microsoft azure 3: google cloud 4: alibaba cloud 5: huawei cloud.
 * @method void setCloudType(integer $CloudType) Set Cloud vendor type 0: tencent cloud 1: amazon web services 2: microsoft azure 3: google cloud 4: alibaba cloud 5: huawei cloud.
 * @method integer getAIStatus() Obtain Alarm AI analysis status.
-Analysis failed.
0 not analyzed.
Under analysis.
2 analysis successful, real Alarm.
3 analysis successful, suspicious Alarm.
 * @method void setAIStatus(integer $AIStatus) Set Alarm AI analysis status.
-Analysis failed.
0 not analyzed.
Under analysis.
2 analysis successful, real Alarm.
3 analysis successful, suspicious Alarm.
 * @method integer getFirstAlarmTimestamp() Obtain First Alarm timestamp (in seconds).
 * @method void setFirstAlarmTimestamp(integer $FirstAlarmTimestamp) Set First Alarm timestamp (in seconds).
 * @method integer getLastAlarmTimestamp() Obtain Last Alarm timestamp (in seconds).
 * @method void setLastAlarmTimestamp(integer $LastAlarmTimestamp) Set Last Alarm timestamp (in seconds).
 */
class AccessKeyAlarm extends AbstractModel
{
    /**
     * @var string Alarm name.
     */
    public $Name;

    /**
     * @var integer Alarm level.
0 - unavailable 1 - Note 2 - low risk 3 - medium risk 4 - high risk 5 - critical.
     */
    public $Level;

    /**
     * @var integer Alarm record ID.
     */
    public $ID;

    /**
     * @var integer Alarm rule ID.
     */
    public $AlarmRuleID;

    /**
     * @var integer Alarm type
Abnormal call.
Leak monitoring.
     */
    public $AlarmType;

    /**
     * @var string Access key.
     */
    public $AccessKey;

    /**
     * @var integer Access key ID.
     */
    public $AccessKeyID;

    /**
     * @var string Access key remark.
     */
    public $AccessKeyRemark;

    /**
     * @var string Last Alarm Time
     */
    public $LastAlarmTime;

    /**
     * @var integer Alarm status.
0 - unprocessed 1 - processed 2 - ignored.
     */
    public $Status;

    /**
     * @var string Aggregate date.
     */
    public $Date;

    /**
     * @var array Alarm Tag.
     */
    public $Tag;

    /**
     * @var string Account associate Uin belonging to main account.
     */
    public $Uin;

    /**
     * @var string Nickname of the main account.
     */
    public $Nickname;

    /**
     * @var string Sub-Account Uin belonging to.
     */
    public $SubUin;

    /**
     * @var string Sub-Account nickname.
     */
    public $SubNickname;

    /**
     * @var integer Account type.
0 root account AK 1 sub-account AK 2 temporary key.
     */
    public $Type;

    /**
     * @var integer App ID
     */
    public $AppID;

    /**
     * @var array Leakage evidence.
     */
    public $LeakEvidence;

    /**
     * @var boolean Whether editing a trusted account is supported.
     */
    public $IsSupportEditWhiteAccount;

    /**
     * @var string Alarm evidence.
     */
    public $Evidence;

    /**
     * @var string Alarm rule flag.
     */
    public $RuleKey;

    /**
     * @var integer Cloud vendor type 0: tencent cloud 1: amazon web services 2: microsoft azure 3: google cloud 4: alibaba cloud 5: huawei cloud.
     */
    public $CloudType;

    /**
     * @var integer Alarm AI analysis status.
-Analysis failed.
0 not analyzed.
Under analysis.
2 analysis successful, real Alarm.
3 analysis successful, suspicious Alarm.
     */
    public $AIStatus;

    /**
     * @var integer First Alarm timestamp (in seconds).
     */
    public $FirstAlarmTimestamp;

    /**
     * @var integer Last Alarm timestamp (in seconds).
     */
    public $LastAlarmTimestamp;

    /**
     * @param string $Name Alarm name.
     * @param integer $Level Alarm level.
0 - unavailable 1 - Note 2 - low risk 3 - medium risk 4 - high risk 5 - critical.
     * @param integer $ID Alarm record ID.
     * @param integer $AlarmRuleID Alarm rule ID.
     * @param integer $AlarmType Alarm type
Abnormal call.
Leak monitoring.
     * @param string $AccessKey Access key.
     * @param integer $AccessKeyID Access key ID.
     * @param string $AccessKeyRemark Access key remark.
     * @param string $LastAlarmTime Last Alarm Time
     * @param integer $Status Alarm status.
0 - unprocessed 1 - processed 2 - ignored.
     * @param string $Date Aggregate date.
     * @param array $Tag Alarm Tag.
     * @param string $Uin Account associate Uin belonging to main account.
     * @param string $Nickname Nickname of the main account.
     * @param string $SubUin Sub-Account Uin belonging to.
     * @param string $SubNickname Sub-Account nickname.
     * @param integer $Type Account type.
0 root account AK 1 sub-account AK 2 temporary key.
     * @param integer $AppID App ID
     * @param array $LeakEvidence Leakage evidence.
     * @param boolean $IsSupportEditWhiteAccount Whether editing a trusted account is supported.
     * @param string $Evidence Alarm evidence.
     * @param string $RuleKey Alarm rule flag.
     * @param integer $CloudType Cloud vendor type 0: tencent cloud 1: amazon web services 2: microsoft azure 3: google cloud 4: alibaba cloud 5: huawei cloud.
     * @param integer $AIStatus Alarm AI analysis status.
-Analysis failed.
0 not analyzed.
Under analysis.
2 analysis successful, real Alarm.
3 analysis successful, suspicious Alarm.
     * @param integer $FirstAlarmTimestamp First Alarm timestamp (in seconds).
     * @param integer $LastAlarmTimestamp Last Alarm timestamp (in seconds).
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
    }
}
