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
 * DescribeSkillScanAlertDetail response structure.
 *
 * @method integer getID() Obtain <p>Alarm record ID</p>
 * @method void setID(integer $ID) Set <p>Alarm record ID</p>
 * @method integer getAppID() Obtain <p>Tenant AppID</p>
 * @method void setAppID(integer $AppID) Set <p>Tenant AppID</p>
 * @method string getUUID() Obtain <p>Host UUID</p>
 * @method void setUUID(string $UUID) Set <p>Host UUID</p>
 * @method string getHostIP() Obtain <p>Host IP address</p>
 * @method void setHostIP(string $HostIP) Set <p>Host IP address</p>
 * @method string getInstanceID() Obtain <p>Instance ID<br>Parameter format: such as ins-xxxxxxxx</p>
 * @method void setInstanceID(string $InstanceID) Set <p>Instance ID<br>Parameter format: such as ins-xxxxxxxx</p>
 * @method string getInstanceName() Obtain <p>Instance name.</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name.</p>
 * @method string getBelongAssetType() Obtain <p>Asset type affiliation<br>Enumeration values:<br>HOST: Host<br>CONTAINER: Container</p>
 * @method void setBelongAssetType(string $BelongAssetType) Set <p>Asset type affiliation<br>Enumeration values:<br>HOST: Host<br>CONTAINER: Container</p>
 * @method string getSkillName() Obtain <p>Skill name</p>
 * @method void setSkillName(string $SkillName) Set <p>Skill name</p>
 * @method string getSkillPath() Obtain <p>Skill file path</p>
 * @method void setSkillPath(string $SkillPath) Set <p>Skill file path</p>
 * @method string getScope() Obtain <p>Skill application scope</p>
 * @method void setScope(string $Scope) Set <p>Skill application scope</p>
 * @method string getVersion() Obtain <p>Skill version number</p>
 * @method void setVersion(string $Version) Set <p>Skill version number</p>
 * @method string getContentHash() Obtain <p>SHA256 hash of file content<br>Parameter format: sha256:&lt;64-digit hex&gt;</p>
 * @method void setContentHash(string $ContentHash) Set <p>SHA256 hash of file content<br>Parameter format: sha256:&lt;64-digit hex&gt;</p>
 * @method string getRiskLevel() Obtain <p>Risk level<br>Enumeration values:<br>malicious: Malicious<br>suspicious: Suspicious</p>
 * @method void setRiskLevel(string $RiskLevel) Set <p>Risk level<br>Enumeration values:<br>malicious: Malicious<br>suspicious: Suspicious</p>
 * @method integer getSecurityScore() Obtain <p>Security score<br>Value range: [0, 100]</p>
 * @method void setSecurityScore(integer $SecurityScore) Set <p>Security score<br>Value range: [0, 100]</p>
 * @method string getPrimaryRuleID() Obtain <p>Main matched rule ID</p>
 * @method void setPrimaryRuleID(string $PrimaryRuleID) Set <p>Main matched rule ID</p>
 * @method integer getEngineVersion() Obtain <p>Detection engine version number</p>
 * @method void setEngineVersion(integer $EngineVersion) Set <p>Detection engine version number</p>
 * @method integer getStatus() Obtain <p>Processing status<br>Enumeration values:<br>0: unprocessed<br>1: processed<br>2: ignored<br>3: trusted</p>
 * @method void setStatus(integer $Status) Set <p>Processing status<br>Enumeration values:<br>0: unprocessed<br>1: processed<br>2: ignored<br>3: trusted</p>
 * @method string getLevel() Obtain <p>Alarm level<br>Enumeration values:<br>high: High risk<br>medium: Medium risk</p>
 * @method void setLevel(string $Level) Set <p>Alarm level<br>Enumeration values:<br>high: High risk<br>medium: Medium risk</p>
 * @method string getCreateTime() Obtain <p>First detection time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
 * @method void setCreateTime(string $CreateTime) Set <p>First detection time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
 * @method string getSkillDescription() Obtain <p>Skill feature description (engine real-time query return)</p>
 * @method void setSkillDescription(string $SkillDescription) Set <p>Skill feature description (engine real-time query return)</p>
 * @method string getRiskDescription() Obtain <p>Comprehensive risk abstract summarizing the primary risks/attack chains identified in this detection (query in real time via engine). Returns copywriting in English when Language=en-US is passed.</p>
 * @method void setRiskDescription(string $RiskDescription) Set <p>Comprehensive risk abstract summarizing the primary risks/attack chains identified in this detection (query in real time via engine). Returns copywriting in English when Language=en-US is passed.</p>
 * @method string getMitigation() Obtain <p>Handling suggestions (real-time query by engine)</p>
 * @method void setMitigation(string $Mitigation) Set <p>Handling suggestions (real-time query by engine)</p>
 * @method array getCapabilityTags() Obtain <p>Skill capacity tag list (returned by engine real-time query)</p>
 * @method void setCapabilityTags(array $CapabilityTags) Set <p>Skill capacity tag list (returned by engine real-time query)</p>
 * @method array getRuleCatalog() Obtain <p>Fusion rule directory list (returned by engine query in real time)</p>
 * @method void setRuleCatalog(array $RuleCatalog) Set <p>Fusion rule directory list (returned by engine query in real time)</p>
 * @method array getScanItems() Obtain <p>Scan result details list (returned by engine query in real time)</p>
 * @method void setScanItems(array $ScanItems) Set <p>Scan result details list (returned by engine query in real time)</p>
 * @method string getReportURL() Obtain <p>Detection report link (returned by real-time query from the engine)</p>
 * @method void setReportURL(string $ReportURL) Set <p>Detection report link (returned by real-time query from the engine)</p>
 * @method string getScannedAt() Obtain <p>Scan complete time (returned by the engine in real-time query)<br>Parameter format: ISO8601 format</p>
 * @method void setScannedAt(string $ScannedAt) Set <p>Scan complete time (returned by the engine in real-time query)<br>Parameter format: ISO8601 format</p>
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeSkillScanAlertDetailResponse extends AbstractModel
{
    /**
     * @var integer <p>Alarm record ID</p>
     */
    public $ID;

    /**
     * @var integer <p>Tenant AppID</p>
     */
    public $AppID;

    /**
     * @var string <p>Host UUID</p>
     */
    public $UUID;

    /**
     * @var string <p>Host IP address</p>
     */
    public $HostIP;

    /**
     * @var string <p>Instance ID<br>Parameter format: such as ins-xxxxxxxx</p>
     */
    public $InstanceID;

    /**
     * @var string <p>Instance name.</p>
     */
    public $InstanceName;

    /**
     * @var string <p>Asset type affiliation<br>Enumeration values:<br>HOST: Host<br>CONTAINER: Container</p>
     */
    public $BelongAssetType;

    /**
     * @var string <p>Skill name</p>
     */
    public $SkillName;

    /**
     * @var string <p>Skill file path</p>
     */
    public $SkillPath;

    /**
     * @var string <p>Skill application scope</p>
     */
    public $Scope;

    /**
     * @var string <p>Skill version number</p>
     */
    public $Version;

    /**
     * @var string <p>SHA256 hash of file content<br>Parameter format: sha256:&lt;64-digit hex&gt;</p>
     */
    public $ContentHash;

    /**
     * @var string <p>Risk level<br>Enumeration values:<br>malicious: Malicious<br>suspicious: Suspicious</p>
     */
    public $RiskLevel;

    /**
     * @var integer <p>Security score<br>Value range: [0, 100]</p>
     */
    public $SecurityScore;

    /**
     * @var string <p>Main matched rule ID</p>
     */
    public $PrimaryRuleID;

    /**
     * @var integer <p>Detection engine version number</p>
     */
    public $EngineVersion;

    /**
     * @var integer <p>Processing status<br>Enumeration values:<br>0: unprocessed<br>1: processed<br>2: ignored<br>3: trusted</p>
     */
    public $Status;

    /**
     * @var string <p>Alarm level<br>Enumeration values:<br>high: High risk<br>medium: Medium risk</p>
     */
    public $Level;

    /**
     * @var string <p>First detection time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Skill feature description (engine real-time query return)</p>
     */
    public $SkillDescription;

    /**
     * @var string <p>Comprehensive risk abstract summarizing the primary risks/attack chains identified in this detection (query in real time via engine). Returns copywriting in English when Language=en-US is passed.</p>
     */
    public $RiskDescription;

    /**
     * @var string <p>Handling suggestions (real-time query by engine)</p>
     */
    public $Mitigation;

    /**
     * @var array <p>Skill capacity tag list (returned by engine real-time query)</p>
     */
    public $CapabilityTags;

    /**
     * @var array <p>Fusion rule directory list (returned by engine query in real time)</p>
     */
    public $RuleCatalog;

    /**
     * @var array <p>Scan result details list (returned by engine query in real time)</p>
     */
    public $ScanItems;

    /**
     * @var string <p>Detection report link (returned by real-time query from the engine)</p>
     */
    public $ReportURL;

    /**
     * @var string <p>Scan complete time (returned by the engine in real-time query)<br>Parameter format: ISO8601 format</p>
     */
    public $ScannedAt;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $ID <p>Alarm record ID</p>
     * @param integer $AppID <p>Tenant AppID</p>
     * @param string $UUID <p>Host UUID</p>
     * @param string $HostIP <p>Host IP address</p>
     * @param string $InstanceID <p>Instance ID<br>Parameter format: such as ins-xxxxxxxx</p>
     * @param string $InstanceName <p>Instance name.</p>
     * @param string $BelongAssetType <p>Asset type affiliation<br>Enumeration values:<br>HOST: Host<br>CONTAINER: Container</p>
     * @param string $SkillName <p>Skill name</p>
     * @param string $SkillPath <p>Skill file path</p>
     * @param string $Scope <p>Skill application scope</p>
     * @param string $Version <p>Skill version number</p>
     * @param string $ContentHash <p>SHA256 hash of file content<br>Parameter format: sha256:&lt;64-digit hex&gt;</p>
     * @param string $RiskLevel <p>Risk level<br>Enumeration values:<br>malicious: Malicious<br>suspicious: Suspicious</p>
     * @param integer $SecurityScore <p>Security score<br>Value range: [0, 100]</p>
     * @param string $PrimaryRuleID <p>Main matched rule ID</p>
     * @param integer $EngineVersion <p>Detection engine version number</p>
     * @param integer $Status <p>Processing status<br>Enumeration values:<br>0: unprocessed<br>1: processed<br>2: ignored<br>3: trusted</p>
     * @param string $Level <p>Alarm level<br>Enumeration values:<br>high: High risk<br>medium: Medium risk</p>
     * @param string $CreateTime <p>First detection time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
     * @param string $SkillDescription <p>Skill feature description (engine real-time query return)</p>
     * @param string $RiskDescription <p>Comprehensive risk abstract summarizing the primary risks/attack chains identified in this detection (query in real time via engine). Returns copywriting in English when Language=en-US is passed.</p>
     * @param string $Mitigation <p>Handling suggestions (real-time query by engine)</p>
     * @param array $CapabilityTags <p>Skill capacity tag list (returned by engine real-time query)</p>
     * @param array $RuleCatalog <p>Fusion rule directory list (returned by engine query in real time)</p>
     * @param array $ScanItems <p>Scan result details list (returned by engine query in real time)</p>
     * @param string $ReportURL <p>Detection report link (returned by real-time query from the engine)</p>
     * @param string $ScannedAt <p>Scan complete time (returned by the engine in real-time query)<br>Parameter format: ISO8601 format</p>
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

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("UUID",$param) and $param["UUID"] !== null) {
            $this->UUID = $param["UUID"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("BelongAssetType",$param) and $param["BelongAssetType"] !== null) {
            $this->BelongAssetType = $param["BelongAssetType"];
        }

        if (array_key_exists("SkillName",$param) and $param["SkillName"] !== null) {
            $this->SkillName = $param["SkillName"];
        }

        if (array_key_exists("SkillPath",$param) and $param["SkillPath"] !== null) {
            $this->SkillPath = $param["SkillPath"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ContentHash",$param) and $param["ContentHash"] !== null) {
            $this->ContentHash = $param["ContentHash"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("SecurityScore",$param) and $param["SecurityScore"] !== null) {
            $this->SecurityScore = $param["SecurityScore"];
        }

        if (array_key_exists("PrimaryRuleID",$param) and $param["PrimaryRuleID"] !== null) {
            $this->PrimaryRuleID = $param["PrimaryRuleID"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SkillDescription",$param) and $param["SkillDescription"] !== null) {
            $this->SkillDescription = $param["SkillDescription"];
        }

        if (array_key_exists("RiskDescription",$param) and $param["RiskDescription"] !== null) {
            $this->RiskDescription = $param["RiskDescription"];
        }

        if (array_key_exists("Mitigation",$param) and $param["Mitigation"] !== null) {
            $this->Mitigation = $param["Mitigation"];
        }

        if (array_key_exists("CapabilityTags",$param) and $param["CapabilityTags"] !== null) {
            $this->CapabilityTags = [];
            foreach ($param["CapabilityTags"] as $key => $value){
                $obj = new SkillCapabilityTag();
                $obj->deserialize($value);
                array_push($this->CapabilityTags, $obj);
            }
        }

        if (array_key_exists("RuleCatalog",$param) and $param["RuleCatalog"] !== null) {
            $this->RuleCatalog = [];
            foreach ($param["RuleCatalog"] as $key => $value){
                $obj = new SkillRuleCatalogItem();
                $obj->deserialize($value);
                array_push($this->RuleCatalog, $obj);
            }
        }

        if (array_key_exists("ScanItems",$param) and $param["ScanItems"] !== null) {
            $this->ScanItems = [];
            foreach ($param["ScanItems"] as $key => $value){
                $obj = new SkillScanEngineResult();
                $obj->deserialize($value);
                array_push($this->ScanItems, $obj);
            }
        }

        if (array_key_exists("ReportURL",$param) and $param["ReportURL"] !== null) {
            $this->ReportURL = $param["ReportURL"];
        }

        if (array_key_exists("ScannedAt",$param) and $param["ScannedAt"] !== null) {
            $this->ScannedAt = $param["ScannedAt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
