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
 * Details of a cluster security check item
 *
 * @method integer getCheckItemId() Obtain Unique Check Item ID
 * @method void setCheckItemId(integer $CheckItemId) Set Unique Check Item ID
 * @method string getName() Obtain Name of the risk item
 * @method void setName(string $Name) Set Name of the risk item
 * @method string getItemDetail() Obtain Check Item Details
 * @method void setItemDetail(string $ItemDetail) Set Check Item Details
 * @method string getRiskLevel() Obtain Threat Level: Serious, High, Medium, Hint
 * @method void setRiskLevel(string $RiskLevel) Set Threat Level: Serious, High, Medium, Hint
 * @method string getRiskTarget() Obtain Check Object and Risk Object: Runc, Kubelet, Containerd, and Pods
 * @method void setRiskTarget(string $RiskTarget) Set Check Object and Risk Object: Runc, Kubelet, Containerd, and Pods
 * @method string getRiskType() Obtain Risk Category. CVERisk: Vulnerability Risk; ConfigRisk: Configuration Risk
 * @method void setRiskType(string $RiskType) Set Risk Category. CVERisk: Vulnerability Risk; ConfigRisk: Configuration Risk
 * @method string getRiskAttribute() Obtain Risk Type of Check Item. PrivilegePromotion: Privilege Promotion; RefuseService: Refuse of Service; DirectoryEscape: Directory Traversal; UnauthorizedAccess: Unauthorized Access; PrivilegeAndAccessControl: Permission and Access Control Issues; SensitiveInfoLeak: Sensitive Information Leakage
 * @method void setRiskAttribute(string $RiskAttribute) Set Risk Type of Check Item. PrivilegePromotion: Privilege Promotion; RefuseService: Refuse of Service; DirectoryEscape: Directory Traversal; UnauthorizedAccess: Unauthorized Access; PrivilegeAndAccessControl: Permission and Access Control Issues; SensitiveInfoLeak: Sensitive Information Leakage
 * @method string getRiskProperty() Obtain Risk Characteristics Tag
ExistEXP: With EXP
ExistPOC: With POD
NoNeedReboot: No Need of Reboot
ServerRestart: Service Reboot
RemoteInfoLeak: Remote Information Leakage
RemoteRefuseService: Remote Refuse Service
RemoteExploit: Remote Exploitation
RemoteExecute: Remote Execution
 * @method void setRiskProperty(string $RiskProperty) Set Risk Characteristics Tag
ExistEXP: With EXP
ExistPOC: With POD
NoNeedReboot: No Need of Reboot
ServerRestart: Service Reboot
RemoteInfoLeak: Remote Information Leakage
RemoteRefuseService: Remote Refuse Service
RemoteExploit: Remote Exploitation
RemoteExecute: Remote Execution
 * @method string getCVENumber() Obtain CVE id
 * @method void setCVENumber(string $CVENumber) Set CVE id
 * @method string getDiscoverTime() Obtain Disclosure time
 * @method void setDiscoverTime(string $DiscoverTime) Set Disclosure time
 * @method string getSolution() Obtain Solution
 * @method void setSolution(string $Solution) Set Solution
 * @method string getCVSS() Obtain CVSS Information, Used for Drawing
 * @method void setCVSS(string $CVSS) Set CVSS Information, Used for Drawing
 * @method string getCVSSScore() Obtain CVSS score
 * @method void setCVSSScore(string $CVSSScore) Set CVSS score
 * @method string getRelateLink() Obtain Reference link
 * @method void setRelateLink(string $RelateLink) Set Reference link
 * @method string getAffectedType() Obtain Impact Type: Node or Workload
 * @method void setAffectedType(string $AffectedType) Set Impact Type: Node or Workload
 * @method string getAffectedVersion() Obtain Affected Version Information
 * @method void setAffectedVersion(string $AffectedVersion) Set Affected Version Information
 * @method integer getIgnoredAssetNum() Obtain Number of Ignored Assets
 * @method void setIgnoredAssetNum(integer $IgnoredAssetNum) Set Number of Ignored Assets
 * @method boolean getIsIgnored() Obtain Whether to Ignore the Check Item
 * @method void setIsIgnored(boolean $IsIgnored) Set Whether to Ignore the Check Item
 * @method string getRiskAssessment() Obtain Affected Critique
 * @method void setRiskAssessment(string $RiskAssessment) Set Affected Critique
 */
class ClusterCheckItem extends AbstractModel
{
    /**
     * @var integer Unique Check Item ID
     */
    public $CheckItemId;

    /**
     * @var string Name of the risk item
     */
    public $Name;

    /**
     * @var string Check Item Details
     */
    public $ItemDetail;

    /**
     * @var string Threat Level: Serious, High, Medium, Hint
     */
    public $RiskLevel;

    /**
     * @var string Check Object and Risk Object: Runc, Kubelet, Containerd, and Pods
     */
    public $RiskTarget;

    /**
     * @var string Risk Category. CVERisk: Vulnerability Risk; ConfigRisk: Configuration Risk
     */
    public $RiskType;

    /**
     * @var string Risk Type of Check Item. PrivilegePromotion: Privilege Promotion; RefuseService: Refuse of Service; DirectoryEscape: Directory Traversal; UnauthorizedAccess: Unauthorized Access; PrivilegeAndAccessControl: Permission and Access Control Issues; SensitiveInfoLeak: Sensitive Information Leakage
     */
    public $RiskAttribute;

    /**
     * @var string Risk Characteristics Tag
ExistEXP: With EXP
ExistPOC: With POD
NoNeedReboot: No Need of Reboot
ServerRestart: Service Reboot
RemoteInfoLeak: Remote Information Leakage
RemoteRefuseService: Remote Refuse Service
RemoteExploit: Remote Exploitation
RemoteExecute: Remote Execution
     */
    public $RiskProperty;

    /**
     * @var string CVE id
     */
    public $CVENumber;

    /**
     * @var string Disclosure time
     */
    public $DiscoverTime;

    /**
     * @var string Solution
     */
    public $Solution;

    /**
     * @var string CVSS Information, Used for Drawing
     */
    public $CVSS;

    /**
     * @var string CVSS score
     */
    public $CVSSScore;

    /**
     * @var string Reference link
     */
    public $RelateLink;

    /**
     * @var string Impact Type: Node or Workload
     */
    public $AffectedType;

    /**
     * @var string Affected Version Information
     */
    public $AffectedVersion;

    /**
     * @var integer Number of Ignored Assets
     */
    public $IgnoredAssetNum;

    /**
     * @var boolean Whether to Ignore the Check Item
     */
    public $IsIgnored;

    /**
     * @var string Affected Critique
     */
    public $RiskAssessment;

    /**
     * @param integer $CheckItemId Unique Check Item ID
     * @param string $Name Name of the risk item
     * @param string $ItemDetail Check Item Details
     * @param string $RiskLevel Threat Level: Serious, High, Medium, Hint
     * @param string $RiskTarget Check Object and Risk Object: Runc, Kubelet, Containerd, and Pods
     * @param string $RiskType Risk Category. CVERisk: Vulnerability Risk; ConfigRisk: Configuration Risk
     * @param string $RiskAttribute Risk Type of Check Item. PrivilegePromotion: Privilege Promotion; RefuseService: Refuse of Service; DirectoryEscape: Directory Traversal; UnauthorizedAccess: Unauthorized Access; PrivilegeAndAccessControl: Permission and Access Control Issues; SensitiveInfoLeak: Sensitive Information Leakage
     * @param string $RiskProperty Risk Characteristics Tag
ExistEXP: With EXP
ExistPOC: With POD
NoNeedReboot: No Need of Reboot
ServerRestart: Service Reboot
RemoteInfoLeak: Remote Information Leakage
RemoteRefuseService: Remote Refuse Service
RemoteExploit: Remote Exploitation
RemoteExecute: Remote Execution
     * @param string $CVENumber CVE id
     * @param string $DiscoverTime Disclosure time
     * @param string $Solution Solution
     * @param string $CVSS CVSS Information, Used for Drawing
     * @param string $CVSSScore CVSS score
     * @param string $RelateLink Reference link
     * @param string $AffectedType Impact Type: Node or Workload
     * @param string $AffectedVersion Affected Version Information
     * @param integer $IgnoredAssetNum Number of Ignored Assets
     * @param boolean $IsIgnored Whether to Ignore the Check Item
     * @param string $RiskAssessment Affected Critique
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
        if (array_key_exists("CheckItemId",$param) and $param["CheckItemId"] !== null) {
            $this->CheckItemId = $param["CheckItemId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ItemDetail",$param) and $param["ItemDetail"] !== null) {
            $this->ItemDetail = $param["ItemDetail"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("RiskTarget",$param) and $param["RiskTarget"] !== null) {
            $this->RiskTarget = $param["RiskTarget"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("RiskAttribute",$param) and $param["RiskAttribute"] !== null) {
            $this->RiskAttribute = $param["RiskAttribute"];
        }

        if (array_key_exists("RiskProperty",$param) and $param["RiskProperty"] !== null) {
            $this->RiskProperty = $param["RiskProperty"];
        }

        if (array_key_exists("CVENumber",$param) and $param["CVENumber"] !== null) {
            $this->CVENumber = $param["CVENumber"];
        }

        if (array_key_exists("DiscoverTime",$param) and $param["DiscoverTime"] !== null) {
            $this->DiscoverTime = $param["DiscoverTime"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("CVSS",$param) and $param["CVSS"] !== null) {
            $this->CVSS = $param["CVSS"];
        }

        if (array_key_exists("CVSSScore",$param) and $param["CVSSScore"] !== null) {
            $this->CVSSScore = $param["CVSSScore"];
        }

        if (array_key_exists("RelateLink",$param) and $param["RelateLink"] !== null) {
            $this->RelateLink = $param["RelateLink"];
        }

        if (array_key_exists("AffectedType",$param) and $param["AffectedType"] !== null) {
            $this->AffectedType = $param["AffectedType"];
        }

        if (array_key_exists("AffectedVersion",$param) and $param["AffectedVersion"] !== null) {
            $this->AffectedVersion = $param["AffectedVersion"];
        }

        if (array_key_exists("IgnoredAssetNum",$param) and $param["IgnoredAssetNum"] !== null) {
            $this->IgnoredAssetNum = $param["IgnoredAssetNum"];
        }

        if (array_key_exists("IsIgnored",$param) and $param["IsIgnored"] !== null) {
            $this->IsIgnored = $param["IsIgnored"];
        }

        if (array_key_exists("RiskAssessment",$param) and $param["RiskAssessment"] !== null) {
            $this->RiskAssessment = $param["RiskAssessment"];
        }
    }
}
