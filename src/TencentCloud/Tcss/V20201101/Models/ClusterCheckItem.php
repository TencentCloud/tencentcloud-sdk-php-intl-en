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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of a cluster security check item
 *
 * @method integer getCheckItemId() Obtain Unique ID of the check item
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCheckItemId(integer $CheckItemId) Set Unique ID of the check item
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Name of the risk item
 * @method void setName(string $Name) Set Name of the risk item
 * @method string getItemDetail() Obtain Detailed description of the check item
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setItemDetail(string $ItemDetail) Set Detailed description of the check item
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRiskLevel() Obtain Severity. Valid values: `Serious` (critical); `High` (high); `Middle` (medium); `Hint` (prompt).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskLevel(string $RiskLevel) Set Severity. Valid values: `Serious` (critical); `High` (high); `Middle` (medium); `Hint` (prompt).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRiskTarget() Obtain Check target and risky target. Valid values: `Runc`, `Kubelet`, `Containerd`, `Pods`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskTarget(string $RiskTarget) Set Check target and risky target. Valid values: `Runc`, `Kubelet`, `Containerd`, `Pods`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRiskType() Obtain Risk type. Valid values: `CVERisk` (vulnerability risk); `ConfigRisk` (configuration risk).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskType(string $RiskType) Set Risk type. Valid values: `CVERisk` (vulnerability risk); `ConfigRisk` (configuration risk).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRiskAttribute() Obtain Risk type of the check item. Valid values: `PrivilegePromotion` (privilege escalation); `RefuseService` (service rejected); `DirectoryEscape` (directory traversal); `UnauthorizedAccess` (unauthorized access); `PrivilegeAndAccessControl` (permissions, privileges, and access controls); `SensitiveInfoLeak` (sensitive data leakage).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskAttribute(string $RiskAttribute) Set Risk type of the check item. Valid values: `PrivilegePromotion` (privilege escalation); `RefuseService` (service rejected); `DirectoryEscape` (directory traversal); `UnauthorizedAccess` (unauthorized access); `PrivilegeAndAccessControl` (permissions, privileges, and access controls); `SensitiveInfoLeak` (sensitive data leakage).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRiskProperty() Obtain Risk characteristic and tag. Valid values: `ExistEXP` (an EXP exists); `ExistPOC` (a POC exists); `NoNeedReboot` (restart not required); `ServerRestart` (service restart); `RemoteInfoLeak` (remote information leakage); `RemoteRefuseService` (remote denial of service); `RemoteExploit` (remote exploit); `RemoteExecute` (remote execution).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskProperty(string $RiskProperty) Set Risk characteristic and tag. Valid values: `ExistEXP` (an EXP exists); `ExistPOC` (a POC exists); `NoNeedReboot` (restart not required); `ServerRestart` (service restart); `RemoteInfoLeak` (remote information leakage); `RemoteRefuseService` (remote denial of service); `RemoteExploit` (remote exploit); `RemoteExecute` (remote execution).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCVENumber() Obtain CVE No.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCVENumber(string $CVENumber) Set CVE No.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDiscoverTime() Obtain Disclosure time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiscoverTime(string $DiscoverTime) Set Disclosure time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSolution() Obtain Solution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSolution(string $Solution) Set Solution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCVSS() Obtain CVSS information, which is used for drawing.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCVSS(string $CVSS) Set CVSS information, which is used for drawing.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCVSSScore() Obtain CVSS score
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCVSSScore(string $CVSSScore) Set CVSS score
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRelateLink() Obtain Reference link
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRelateLink(string $RelateLink) Set Reference link
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAffectedType() Obtain Affected type. Valid values: `Node`, `Workload`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAffectedType(string $AffectedType) Set Affected type. Valid values: `Node`, `Workload`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAffectedVersion() Obtain Affected version information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAffectedVersion(string $AffectedVersion) Set Affected version information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIgnoredAssetNum() Obtain Number of ignored assets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIgnoredAssetNum(integer $IgnoredAssetNum) Set Number of ignored assets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsIgnored() Obtain Whether to ignore the check item
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsIgnored(boolean $IsIgnored) Set Whether to ignore the check item
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRiskAssessment() Obtain Impact assessment
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskAssessment(string $RiskAssessment) Set Impact assessment
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ClusterCheckItem extends AbstractModel
{
    /**
     * @var integer Unique ID of the check item
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CheckItemId;

    /**
     * @var string Name of the risk item
     */
    public $Name;

    /**
     * @var string Detailed description of the check item
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ItemDetail;

    /**
     * @var string Severity. Valid values: `Serious` (critical); `High` (high); `Middle` (medium); `Hint` (prompt).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskLevel;

    /**
     * @var string Check target and risky target. Valid values: `Runc`, `Kubelet`, `Containerd`, `Pods`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskTarget;

    /**
     * @var string Risk type. Valid values: `CVERisk` (vulnerability risk); `ConfigRisk` (configuration risk).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskType;

    /**
     * @var string Risk type of the check item. Valid values: `PrivilegePromotion` (privilege escalation); `RefuseService` (service rejected); `DirectoryEscape` (directory traversal); `UnauthorizedAccess` (unauthorized access); `PrivilegeAndAccessControl` (permissions, privileges, and access controls); `SensitiveInfoLeak` (sensitive data leakage).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskAttribute;

    /**
     * @var string Risk characteristic and tag. Valid values: `ExistEXP` (an EXP exists); `ExistPOC` (a POC exists); `NoNeedReboot` (restart not required); `ServerRestart` (service restart); `RemoteInfoLeak` (remote information leakage); `RemoteRefuseService` (remote denial of service); `RemoteExploit` (remote exploit); `RemoteExecute` (remote execution).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskProperty;

    /**
     * @var string CVE No.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CVENumber;

    /**
     * @var string Disclosure time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiscoverTime;

    /**
     * @var string Solution
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Solution;

    /**
     * @var string CVSS information, which is used for drawing.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CVSS;

    /**
     * @var string CVSS score
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CVSSScore;

    /**
     * @var string Reference link
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RelateLink;

    /**
     * @var string Affected type. Valid values: `Node`, `Workload`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AffectedType;

    /**
     * @var string Affected version information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AffectedVersion;

    /**
     * @var integer Number of ignored assets
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IgnoredAssetNum;

    /**
     * @var boolean Whether to ignore the check item
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsIgnored;

    /**
     * @var string Impact assessment
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskAssessment;

    /**
     * @param integer $CheckItemId Unique ID of the check item
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Name of the risk item
     * @param string $ItemDetail Detailed description of the check item
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RiskLevel Severity. Valid values: `Serious` (critical); `High` (high); `Middle` (medium); `Hint` (prompt).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RiskTarget Check target and risky target. Valid values: `Runc`, `Kubelet`, `Containerd`, `Pods`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RiskType Risk type. Valid values: `CVERisk` (vulnerability risk); `ConfigRisk` (configuration risk).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RiskAttribute Risk type of the check item. Valid values: `PrivilegePromotion` (privilege escalation); `RefuseService` (service rejected); `DirectoryEscape` (directory traversal); `UnauthorizedAccess` (unauthorized access); `PrivilegeAndAccessControl` (permissions, privileges, and access controls); `SensitiveInfoLeak` (sensitive data leakage).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RiskProperty Risk characteristic and tag. Valid values: `ExistEXP` (an EXP exists); `ExistPOC` (a POC exists); `NoNeedReboot` (restart not required); `ServerRestart` (service restart); `RemoteInfoLeak` (remote information leakage); `RemoteRefuseService` (remote denial of service); `RemoteExploit` (remote exploit); `RemoteExecute` (remote execution).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CVENumber CVE No.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DiscoverTime Disclosure time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Solution Solution
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CVSS CVSS information, which is used for drawing.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CVSSScore CVSS score
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RelateLink Reference link
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AffectedType Affected type. Valid values: `Node`, `Workload`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AffectedVersion Affected version information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IgnoredAssetNum Number of ignored assets
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsIgnored Whether to ignore the check item
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RiskAssessment Impact assessment
Note: This field may return null, indicating that no valid values can be obtained.
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
