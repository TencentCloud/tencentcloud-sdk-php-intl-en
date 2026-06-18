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
 * User Behavior Analysis Policy
 *
 * @method string getRuleID() Obtain Policy ID
 * @method void setRuleID(string $RuleID) Set Policy ID
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method integer getRuleType() Obtain Policy type
System policy
custom policy
 * @method void setRuleType(integer $RuleType) Set Policy type
System policy
custom policy
 * @method integer getRuleLevel() Obtain Policy level
Prompt.
1: low
2: Medium risk
3: High risk
4: Critical
 * @method void setRuleLevel(integer $RuleLevel) Set Policy level
Prompt.
1: low
2: Medium risk
3: High risk
4: Critical
 * @method string getRuleContent() Obtain Policy content
 * @method void setRuleContent(string $RuleContent) Set Policy content
 * @method boolean getRuleStatus() Obtain Policy switch
 * @method void setRuleStatus(boolean $RuleStatus) Set Policy switch
 * @method integer getHitCount() Obtain Number of hits
 * @method void setHitCount(integer $HitCount) Set Number of hits
 * @method string getAppID() Obtain Associated account Appid.
 * @method void setAppID(string $AppID) Set Associated account Appid.
 * @method string getMemberID() Obtain Multi-account, member ID
 * @method void setMemberID(string $MemberID) Set Multi-account, member ID
 * @method string getUin() Obtain Uin
 * @method void setUin(string $Uin) Set Uin
 * @method string getNickname() Obtain Nickname
 * @method void setNickname(string $Nickname) Set Nickname
 * @method UebaCustomRule getCustomRuleDetail() Obtain Custom rule specific content
 * @method void setCustomRuleDetail(UebaCustomRule $CustomRuleDetail) Set Custom rule specific content
 * @method integer getCloudType() Obtain Cloud type
0 Tencent Cloud
aws:1
 * @method void setCloudType(integer $CloudType) Set Cloud type
0 Tencent Cloud
aws:1
 */
class UebaRule extends AbstractModel
{
    /**
     * @var string Policy ID
     */
    public $RuleID;

    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var integer Policy type
System policy
custom policy
     */
    public $RuleType;

    /**
     * @var integer Policy level
Prompt.
1: low
2: Medium risk
3: High risk
4: Critical
     */
    public $RuleLevel;

    /**
     * @var string Policy content
     */
    public $RuleContent;

    /**
     * @var boolean Policy switch
     */
    public $RuleStatus;

    /**
     * @var integer Number of hits
     */
    public $HitCount;

    /**
     * @var string Associated account Appid.
     */
    public $AppID;

    /**
     * @var string Multi-account, member ID
     */
    public $MemberID;

    /**
     * @var string Uin
     */
    public $Uin;

    /**
     * @var string Nickname
     */
    public $Nickname;

    /**
     * @var UebaCustomRule Custom rule specific content
     */
    public $CustomRuleDetail;

    /**
     * @var integer Cloud type
0 Tencent Cloud
aws:1
     */
    public $CloudType;

    /**
     * @param string $RuleID Policy ID
     * @param string $RuleName Rule name
     * @param integer $RuleType Policy type
System policy
custom policy
     * @param integer $RuleLevel Policy level
Prompt.
1: low
2: Medium risk
3: High risk
4: Critical
     * @param string $RuleContent Policy content
     * @param boolean $RuleStatus Policy switch
     * @param integer $HitCount Number of hits
     * @param string $AppID Associated account Appid.
     * @param string $MemberID Multi-account, member ID
     * @param string $Uin Uin
     * @param string $Nickname Nickname
     * @param UebaCustomRule $CustomRuleDetail Custom rule specific content
     * @param integer $CloudType Cloud type
0 Tencent Cloud
aws:1
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
        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RuleLevel",$param) and $param["RuleLevel"] !== null) {
            $this->RuleLevel = $param["RuleLevel"];
        }

        if (array_key_exists("RuleContent",$param) and $param["RuleContent"] !== null) {
            $this->RuleContent = $param["RuleContent"];
        }

        if (array_key_exists("RuleStatus",$param) and $param["RuleStatus"] !== null) {
            $this->RuleStatus = $param["RuleStatus"];
        }

        if (array_key_exists("HitCount",$param) and $param["HitCount"] !== null) {
            $this->HitCount = $param["HitCount"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("MemberID",$param) and $param["MemberID"] !== null) {
            $this->MemberID = $param["MemberID"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("CustomRuleDetail",$param) and $param["CustomRuleDetail"] !== null) {
            $this->CustomRuleDetail = new UebaCustomRule();
            $this->CustomRuleDetail->deserialize($param["CustomRuleDetail"]);
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }
    }
}
