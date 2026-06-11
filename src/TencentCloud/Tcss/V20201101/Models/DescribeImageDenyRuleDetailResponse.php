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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImageDenyRuleDetail response structure.
 *
 * @method integer getID() Obtain Rule ID
 * @method void setID(integer $ID) Set Rule ID
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method string getRuleType() Obtain Rule Type. RULE_RISK: Risk; RULE_PRIVILEGE: Privilege
 * @method void setRuleType(string $RuleType) Set Rule Type. RULE_RISK: Risk; RULE_PRIVILEGE: Privilege
 * @method integer getEffectImageCount() Obtain Number of Effective Images
 * @method void setEffectImageCount(integer $EffectImageCount) Set Number of Effective Images
 * @method integer getIsEffectAllImage() Obtain Application to All Scanned Images. 0: Select All Images; 1: Custom Images
 * @method void setIsEffectAllImage(integer $IsEffectAllImage) Set Application to All Scanned Images. 0: Select All Images; 1: Custom Images
 * @method string getEffectTime() Obtain Rule Effective Start Time
 * @method void setEffectTime(string $EffectTime) Set Rule Effective Start Time
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method string getOperationUin() Obtain Operator
 * @method void setOperationUin(string $OperationUin) Set Operator
 * @method string getEffectStatus() Obtain Effective Status. IN_THE_TEST: Observing; IN_EFFECT: Effective
 * @method void setEffectStatus(string $EffectStatus) Set Effective Status. IN_THE_TEST: Observing; IN_EFFECT: Effective
 * @method string getRuleDescription() Obtain Rule description
 * @method void setRuleDescription(string $RuleDescription) Set Rule description
 * @method integer getStatus() Obtain Enable Status. 0: Enabled; 1: Disabled
 * @method void setStatus(integer $Status) Set Enable Status. 0: Enabled; 1: Disabled
 * @method integer getVul() Obtain Vulnerability. 0: Not Selected; 1: Selected
 * @method void setVul(integer $Vul) Set Vulnerability. 0: Not Selected; 1: Selected
 * @method array getCVEIDSet() Obtain CVE ID
 * @method void setCVEIDSet(array $CVEIDSet) Set CVE ID
 * @method array getComponentSet() Obtain Component ID
 * @method void setComponentSet(array $ComponentSet) Set Component ID
 * @method array getVulClassSet() Obtain Vulnerability category
 * @method void setVulClassSet(array $VulClassSet) Set Vulnerability category
 * @method array getVulLevelSet() Obtain Vulnerability level
 * @method void setVulLevelSet(array $VulLevelSet) Set Vulnerability level
 * @method array getVulLabelSet() Obtain vulnerability tag
 * @method void setVulLabelSet(array $VulLabelSet) Set vulnerability tag
 * @method integer getVirus() Obtain Trojan. 0: Not Selected; 1: Selected
 * @method void setVirus(integer $Virus) Set Trojan. 0: Not Selected; 1: Selected
 * @method array getVirusMD5Set() Obtain Trojan MD5 List
 * @method void setVirusMD5Set(array $VirusMD5Set) Set Trojan MD5 List
 * @method array getVirusLevelSet() Obtain Trojan Level
 * @method void setVirusLevelSet(array $VirusLevelSet) Set Trojan Level
 * @method array getVirusName() Obtain Virus name
 * @method void setVirusName(array $VirusName) Set Virus name
 * @method integer getRisk() Obtain Sensitive Information. 0: Not Selected; 1: Selected
 * @method void setRisk(integer $Risk) Set Sensitive Information. 0: Not Selected; 1: Selected
 * @method array getRiskLevelSet() Obtain Sensitivity Level
 * @method void setRiskLevelSet(array $RiskLevelSet) Set Sensitivity Level
 * @method array getRiskType() Obtain Sensitive Information Classification
 * @method void setRiskType(array $RiskType) Set Sensitive Information Classification
 * @method integer getPrivilegeRun() Obtain Privileged Startup. 0: Not Allowed; 1: Allowed
 * @method void setPrivilegeRun(integer $PrivilegeRun) Set Privileged Startup. 0: Not Allowed; 1: Allowed
 * @method array getPrivilegeDetail() Obtain Privilege type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrivilegeDetail(array $PrivilegeDetail) Set Privilege type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getEffectImageSet() Obtain Image ID List
 * @method void setEffectImageSet(array $EffectImageSet) Set Image ID List
 * @method integer getEffectDay() Obtain Effective After X Days
 * @method void setEffectDay(integer $EffectDay) Set Effective After X Days
 * @method string getRuleID() Obtain Rule ID
 * @method void setRuleID(string $RuleID) Set Rule ID
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeImageDenyRuleDetailResponse extends AbstractModel
{
    /**
     * @var integer Rule ID
     */
    public $ID;

    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var string Rule Type. RULE_RISK: Risk; RULE_PRIVILEGE: Privilege
     */
    public $RuleType;

    /**
     * @var integer Number of Effective Images
     */
    public $EffectImageCount;

    /**
     * @var integer Application to All Scanned Images. 0: Select All Images; 1: Custom Images
     */
    public $IsEffectAllImage;

    /**
     * @var string Rule Effective Start Time
     */
    public $EffectTime;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var string Operator
     */
    public $OperationUin;

    /**
     * @var string Effective Status. IN_THE_TEST: Observing; IN_EFFECT: Effective
     */
    public $EffectStatus;

    /**
     * @var string Rule description
     */
    public $RuleDescription;

    /**
     * @var integer Enable Status. 0: Enabled; 1: Disabled
     */
    public $Status;

    /**
     * @var integer Vulnerability. 0: Not Selected; 1: Selected
     */
    public $Vul;

    /**
     * @var array CVE ID
     */
    public $CVEIDSet;

    /**
     * @var array Component ID
     */
    public $ComponentSet;

    /**
     * @var array Vulnerability category
     */
    public $VulClassSet;

    /**
     * @var array Vulnerability level
     */
    public $VulLevelSet;

    /**
     * @var array vulnerability tag
     */
    public $VulLabelSet;

    /**
     * @var integer Trojan. 0: Not Selected; 1: Selected
     */
    public $Virus;

    /**
     * @var array Trojan MD5 List
     */
    public $VirusMD5Set;

    /**
     * @var array Trojan Level
     */
    public $VirusLevelSet;

    /**
     * @var array Virus name
     */
    public $VirusName;

    /**
     * @var integer Sensitive Information. 0: Not Selected; 1: Selected
     */
    public $Risk;

    /**
     * @var array Sensitivity Level
     */
    public $RiskLevelSet;

    /**
     * @var array Sensitive Information Classification
     */
    public $RiskType;

    /**
     * @var integer Privileged Startup. 0: Not Allowed; 1: Allowed
     */
    public $PrivilegeRun;

    /**
     * @var array Privilege type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PrivilegeDetail;

    /**
     * @var array Image ID List
     */
    public $EffectImageSet;

    /**
     * @var integer Effective After X Days
     */
    public $EffectDay;

    /**
     * @var string Rule ID
     */
    public $RuleID;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $ID Rule ID
     * @param string $RuleName Rule name
     * @param string $RuleType Rule Type. RULE_RISK: Risk; RULE_PRIVILEGE: Privilege
     * @param integer $EffectImageCount Number of Effective Images
     * @param integer $IsEffectAllImage Application to All Scanned Images. 0: Select All Images; 1: Custom Images
     * @param string $EffectTime Rule Effective Start Time
     * @param string $UpdateTime Update time
     * @param string $OperationUin Operator
     * @param string $EffectStatus Effective Status. IN_THE_TEST: Observing; IN_EFFECT: Effective
     * @param string $RuleDescription Rule description
     * @param integer $Status Enable Status. 0: Enabled; 1: Disabled
     * @param integer $Vul Vulnerability. 0: Not Selected; 1: Selected
     * @param array $CVEIDSet CVE ID
     * @param array $ComponentSet Component ID
     * @param array $VulClassSet Vulnerability category
     * @param array $VulLevelSet Vulnerability level
     * @param array $VulLabelSet vulnerability tag
     * @param integer $Virus Trojan. 0: Not Selected; 1: Selected
     * @param array $VirusMD5Set Trojan MD5 List
     * @param array $VirusLevelSet Trojan Level
     * @param array $VirusName Virus name
     * @param integer $Risk Sensitive Information. 0: Not Selected; 1: Selected
     * @param array $RiskLevelSet Sensitivity Level
     * @param array $RiskType Sensitive Information Classification
     * @param integer $PrivilegeRun Privileged Startup. 0: Not Allowed; 1: Allowed
     * @param array $PrivilegeDetail Privilege type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $EffectImageSet Image ID List
     * @param integer $EffectDay Effective After X Days
     * @param string $RuleID Rule ID
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("EffectImageCount",$param) and $param["EffectImageCount"] !== null) {
            $this->EffectImageCount = $param["EffectImageCount"];
        }

        if (array_key_exists("IsEffectAllImage",$param) and $param["IsEffectAllImage"] !== null) {
            $this->IsEffectAllImage = $param["IsEffectAllImage"];
        }

        if (array_key_exists("EffectTime",$param) and $param["EffectTime"] !== null) {
            $this->EffectTime = $param["EffectTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("OperationUin",$param) and $param["OperationUin"] !== null) {
            $this->OperationUin = $param["OperationUin"];
        }

        if (array_key_exists("EffectStatus",$param) and $param["EffectStatus"] !== null) {
            $this->EffectStatus = $param["EffectStatus"];
        }

        if (array_key_exists("RuleDescription",$param) and $param["RuleDescription"] !== null) {
            $this->RuleDescription = $param["RuleDescription"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Vul",$param) and $param["Vul"] !== null) {
            $this->Vul = $param["Vul"];
        }

        if (array_key_exists("CVEIDSet",$param) and $param["CVEIDSet"] !== null) {
            $this->CVEIDSet = $param["CVEIDSet"];
        }

        if (array_key_exists("ComponentSet",$param) and $param["ComponentSet"] !== null) {
            $this->ComponentSet = $param["ComponentSet"];
        }

        if (array_key_exists("VulClassSet",$param) and $param["VulClassSet"] !== null) {
            $this->VulClassSet = $param["VulClassSet"];
        }

        if (array_key_exists("VulLevelSet",$param) and $param["VulLevelSet"] !== null) {
            $this->VulLevelSet = $param["VulLevelSet"];
        }

        if (array_key_exists("VulLabelSet",$param) and $param["VulLabelSet"] !== null) {
            $this->VulLabelSet = $param["VulLabelSet"];
        }

        if (array_key_exists("Virus",$param) and $param["Virus"] !== null) {
            $this->Virus = $param["Virus"];
        }

        if (array_key_exists("VirusMD5Set",$param) and $param["VirusMD5Set"] !== null) {
            $this->VirusMD5Set = $param["VirusMD5Set"];
        }

        if (array_key_exists("VirusLevelSet",$param) and $param["VirusLevelSet"] !== null) {
            $this->VirusLevelSet = $param["VirusLevelSet"];
        }

        if (array_key_exists("VirusName",$param) and $param["VirusName"] !== null) {
            $this->VirusName = $param["VirusName"];
        }

        if (array_key_exists("Risk",$param) and $param["Risk"] !== null) {
            $this->Risk = $param["Risk"];
        }

        if (array_key_exists("RiskLevelSet",$param) and $param["RiskLevelSet"] !== null) {
            $this->RiskLevelSet = $param["RiskLevelSet"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("PrivilegeRun",$param) and $param["PrivilegeRun"] !== null) {
            $this->PrivilegeRun = $param["PrivilegeRun"];
        }

        if (array_key_exists("PrivilegeDetail",$param) and $param["PrivilegeDetail"] !== null) {
            $this->PrivilegeDetail = $param["PrivilegeDetail"];
        }

        if (array_key_exists("EffectImageSet",$param) and $param["EffectImageSet"] !== null) {
            $this->EffectImageSet = $param["EffectImageSet"];
        }

        if (array_key_exists("EffectDay",$param) and $param["EffectDay"] !== null) {
            $this->EffectDay = $param["EffectDay"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
