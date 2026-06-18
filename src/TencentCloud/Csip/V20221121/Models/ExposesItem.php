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
 * Exposed assets.
 *
 * @method string getProvider() Obtain <p>Cloud vendor</p>
 * @method void setProvider(string $Provider) Set <p>Cloud vendor</p>
 * @method string getCloudAccountName() Obtain <p>Cloud account name</p>
 * @method void setCloudAccountName(string $CloudAccountName) Set <p>Cloud account name</p>
 * @method string getCloudAccountId() Obtain <p>Cloud Account</p>
 * @method void setCloudAccountId(string $CloudAccountId) Set <p>Cloud Account</p>
 * @method string getDomain() Obtain <p>Domain name</p>
 * @method void setDomain(string $Domain) Set <p>Domain name</p>
 * @method string getIp() Obtain <p>IP</p>
 * @method void setIp(string $Ip) Set <p>IP</p>
 * @method string getPort() Obtain <p>Port or port range</p>
 * @method void setPort(string $Port) Set <p>Port or port range</p>
 * @method string getStatus() Obtain <p>Open</p>
 * @method void setStatus(string $Status) Set <p>Open</p>
 * @method string getRiskType() Obtain <p>Risk type</p>
 * @method void setRiskType(string $RiskType) Set <p>Risk type</p>
 * @method string getAclType() Obtain <p>acl type</p>
 * @method void setAclType(string $AclType) Set <p>acl type</p>
 * @method string getAclList() Obtain <p>acl list</p>
 * @method void setAclList(string $AclList) Set <p>acl list</p>
 * @method string getAssetId() Obtain <p>Asset ID</p>
 * @method void setAssetId(string $AssetId) Set <p>Asset ID</p>
 * @method string getInstanceName() Obtain <p>Instance name</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name</p>
 * @method string getAssetType() Obtain <p>Asset type</p>
 * @method void setAssetType(string $AssetType) Set <p>Asset type</p>
 * @method integer getPortServiceCount() Obtain <p>Number of port services</p>
 * @method void setPortServiceCount(integer $PortServiceCount) Set <p>Number of port services</p>
 * @method integer getHighRiskPortServiceCount() Obtain <p>Number of high-risk ports</p>
 * @method void setHighRiskPortServiceCount(integer $HighRiskPortServiceCount) Set <p>Number of high-risk ports</p>
 * @method integer getWebAppCount() Obtain <p>Number of web applications</p>
 * @method void setWebAppCount(integer $WebAppCount) Set <p>Number of web applications</p>
 * @method integer getRiskWebAppCount() Obtain <p>Number of web applications at risk</p>
 * @method void setRiskWebAppCount(integer $RiskWebAppCount) Set <p>Number of web applications at risk</p>
 * @method integer getWeakPasswordCount() Obtain <p>Number of weak passwords.</p>
 * @method void setWeakPasswordCount(integer $WeakPasswordCount) Set <p>Number of weak passwords.</p>
 * @method integer getVulCount() Obtain <p>Vulnerability count</p>
 * @method void setVulCount(integer $VulCount) Set <p>Vulnerability count</p>
 * @method string getCreateTime() Obtain <p>First discovery time</p>
 * @method void setCreateTime(string $CreateTime) Set <p>First discovery time</p>
 * @method string getUpdateTime() Obtain <p>Latest update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Latest update time.</p>
 * @method string getAssetTypeName() Obtain <p>Instance Type Name</p>
 * @method void setAssetTypeName(string $AssetTypeName) Set <p>Instance Type Name</p>
 * @method string getDisplayStatus() Obtain <p>Open status</p>
 * @method void setDisplayStatus(string $DisplayStatus) Set <p>Open status</p>
 * @method string getDisplayRiskType() Obtain <p>Port status</p>
 * @method void setDisplayRiskType(string $DisplayRiskType) Set <p>Port status</p>
 * @method string getScanTaskStatus() Obtain <p>Scan task status</p>
 * @method void setScanTaskStatus(string $ScanTaskStatus) Set <p>Scan task status</p>
 * @method string getUuid() Obtain <p>uuid</p>
 * @method void setUuid(string $Uuid) Set <p>uuid</p>
 * @method string getHasScan() Obtain <p>Whether a security check has been performed</p>
 * @method void setHasScan(string $HasScan) Set <p>Whether a security check has been performed</p>
 * @method integer getAppId() Obtain <p>Tenant ID</p>
 * @method void setAppId(integer $AppId) Set <p>Tenant ID</p>
 * @method string getAppIdStr() Obtain <p>Tenant ID string</p>
 * @method void setAppIdStr(string $AppIdStr) Set <p>Tenant ID string</p>
 * @method integer getExposureID() Obtain <p>Record ID</p>
 * @method void setExposureID(integer $ExposureID) Set <p>Record ID</p>
 * @method integer getPortDetectCount() Obtain <p>Number of open ports</p>
 * @method void setPortDetectCount(integer $PortDetectCount) Set <p>Number of open ports</p>
 * @method string getPortDetectResult() Obtain <p>Port exposure result</p>
 * @method void setPortDetectResult(string $PortDetectResult) Set <p>Port exposure result</p>
 * @method string getTag() Obtain <p>Tag.</p>
 * @method void setTag(string $Tag) Set <p>Tag.</p>
 * @method string getComment() Obtain <p>Remark</p>
 * @method void setComment(string $Comment) Set <p>Remark</p>
 * @method integer getToGovernedRiskCount() Obtain <p>Number of risks to be governed</p>
 * @method void setToGovernedRiskCount(integer $ToGovernedRiskCount) Set <p>Number of risks to be governed</p>
 * @method string getToGovernedRiskContent() Obtain <p>Risk content to be governed</p>
 * @method void setToGovernedRiskContent(string $ToGovernedRiskContent) Set <p>Risk content to be governed</p>
 * @method string getAssetTypeIconURL() Obtain <p>Type icon of asset</p>
 * @method void setAssetTypeIconURL(string $AssetTypeIconURL) Set <p>Type icon of asset</p>
 * @method string getAssetTypeIconSolidURL() Obtain <p>Asset type 3D icon</p>
 * @method void setAssetTypeIconSolidURL(string $AssetTypeIconSolidURL) Set <p>Asset type 3D icon</p>
 */
class ExposesItem extends AbstractModel
{
    /**
     * @var string <p>Cloud vendor</p>
     */
    public $Provider;

    /**
     * @var string <p>Cloud account name</p>
     */
    public $CloudAccountName;

    /**
     * @var string <p>Cloud Account</p>
     */
    public $CloudAccountId;

    /**
     * @var string <p>Domain name</p>
     */
    public $Domain;

    /**
     * @var string <p>IP</p>
     */
    public $Ip;

    /**
     * @var string <p>Port or port range</p>
     */
    public $Port;

    /**
     * @var string <p>Open</p>
     */
    public $Status;

    /**
     * @var string <p>Risk type</p>
     */
    public $RiskType;

    /**
     * @var string <p>acl type</p>
     */
    public $AclType;

    /**
     * @var string <p>acl list</p>
     */
    public $AclList;

    /**
     * @var string <p>Asset ID</p>
     */
    public $AssetId;

    /**
     * @var string <p>Instance name</p>
     */
    public $InstanceName;

    /**
     * @var string <p>Asset type</p>
     */
    public $AssetType;

    /**
     * @var integer <p>Number of port services</p>
     */
    public $PortServiceCount;

    /**
     * @var integer <p>Number of high-risk ports</p>
     */
    public $HighRiskPortServiceCount;

    /**
     * @var integer <p>Number of web applications</p>
     */
    public $WebAppCount;

    /**
     * @var integer <p>Number of web applications at risk</p>
     */
    public $RiskWebAppCount;

    /**
     * @var integer <p>Number of weak passwords.</p>
     */
    public $WeakPasswordCount;

    /**
     * @var integer <p>Vulnerability count</p>
     */
    public $VulCount;

    /**
     * @var string <p>First discovery time</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Latest update time.</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>Instance Type Name</p>
     */
    public $AssetTypeName;

    /**
     * @var string <p>Open status</p>
     */
    public $DisplayStatus;

    /**
     * @var string <p>Port status</p>
     */
    public $DisplayRiskType;

    /**
     * @var string <p>Scan task status</p>
     */
    public $ScanTaskStatus;

    /**
     * @var string <p>uuid</p>
     */
    public $Uuid;

    /**
     * @var string <p>Whether a security check has been performed</p>
     */
    public $HasScan;

    /**
     * @var integer <p>Tenant ID</p>
     */
    public $AppId;

    /**
     * @var string <p>Tenant ID string</p>
     */
    public $AppIdStr;

    /**
     * @var integer <p>Record ID</p>
     */
    public $ExposureID;

    /**
     * @var integer <p>Number of open ports</p>
     */
    public $PortDetectCount;

    /**
     * @var string <p>Port exposure result</p>
     */
    public $PortDetectResult;

    /**
     * @var string <p>Tag.</p>
     */
    public $Tag;

    /**
     * @var string <p>Remark</p>
     */
    public $Comment;

    /**
     * @var integer <p>Number of risks to be governed</p>
     */
    public $ToGovernedRiskCount;

    /**
     * @var string <p>Risk content to be governed</p>
     */
    public $ToGovernedRiskContent;

    /**
     * @var string <p>Type icon of asset</p>
     */
    public $AssetTypeIconURL;

    /**
     * @var string <p>Asset type 3D icon</p>
     */
    public $AssetTypeIconSolidURL;

    /**
     * @param string $Provider <p>Cloud vendor</p>
     * @param string $CloudAccountName <p>Cloud account name</p>
     * @param string $CloudAccountId <p>Cloud Account</p>
     * @param string $Domain <p>Domain name</p>
     * @param string $Ip <p>IP</p>
     * @param string $Port <p>Port or port range</p>
     * @param string $Status <p>Open</p>
     * @param string $RiskType <p>Risk type</p>
     * @param string $AclType <p>acl type</p>
     * @param string $AclList <p>acl list</p>
     * @param string $AssetId <p>Asset ID</p>
     * @param string $InstanceName <p>Instance name</p>
     * @param string $AssetType <p>Asset type</p>
     * @param integer $PortServiceCount <p>Number of port services</p>
     * @param integer $HighRiskPortServiceCount <p>Number of high-risk ports</p>
     * @param integer $WebAppCount <p>Number of web applications</p>
     * @param integer $RiskWebAppCount <p>Number of web applications at risk</p>
     * @param integer $WeakPasswordCount <p>Number of weak passwords.</p>
     * @param integer $VulCount <p>Vulnerability count</p>
     * @param string $CreateTime <p>First discovery time</p>
     * @param string $UpdateTime <p>Latest update time.</p>
     * @param string $AssetTypeName <p>Instance Type Name</p>
     * @param string $DisplayStatus <p>Open status</p>
     * @param string $DisplayRiskType <p>Port status</p>
     * @param string $ScanTaskStatus <p>Scan task status</p>
     * @param string $Uuid <p>uuid</p>
     * @param string $HasScan <p>Whether a security check has been performed</p>
     * @param integer $AppId <p>Tenant ID</p>
     * @param string $AppIdStr <p>Tenant ID string</p>
     * @param integer $ExposureID <p>Record ID</p>
     * @param integer $PortDetectCount <p>Number of open ports</p>
     * @param string $PortDetectResult <p>Port exposure result</p>
     * @param string $Tag <p>Tag.</p>
     * @param string $Comment <p>Remark</p>
     * @param integer $ToGovernedRiskCount <p>Number of risks to be governed</p>
     * @param string $ToGovernedRiskContent <p>Risk content to be governed</p>
     * @param string $AssetTypeIconURL <p>Type icon of asset</p>
     * @param string $AssetTypeIconSolidURL <p>Asset type 3D icon</p>
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
        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("CloudAccountName",$param) and $param["CloudAccountName"] !== null) {
            $this->CloudAccountName = $param["CloudAccountName"];
        }

        if (array_key_exists("CloudAccountId",$param) and $param["CloudAccountId"] !== null) {
            $this->CloudAccountId = $param["CloudAccountId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("AclType",$param) and $param["AclType"] !== null) {
            $this->AclType = $param["AclType"];
        }

        if (array_key_exists("AclList",$param) and $param["AclList"] !== null) {
            $this->AclList = $param["AclList"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("PortServiceCount",$param) and $param["PortServiceCount"] !== null) {
            $this->PortServiceCount = $param["PortServiceCount"];
        }

        if (array_key_exists("HighRiskPortServiceCount",$param) and $param["HighRiskPortServiceCount"] !== null) {
            $this->HighRiskPortServiceCount = $param["HighRiskPortServiceCount"];
        }

        if (array_key_exists("WebAppCount",$param) and $param["WebAppCount"] !== null) {
            $this->WebAppCount = $param["WebAppCount"];
        }

        if (array_key_exists("RiskWebAppCount",$param) and $param["RiskWebAppCount"] !== null) {
            $this->RiskWebAppCount = $param["RiskWebAppCount"];
        }

        if (array_key_exists("WeakPasswordCount",$param) and $param["WeakPasswordCount"] !== null) {
            $this->WeakPasswordCount = $param["WeakPasswordCount"];
        }

        if (array_key_exists("VulCount",$param) and $param["VulCount"] !== null) {
            $this->VulCount = $param["VulCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AssetTypeName",$param) and $param["AssetTypeName"] !== null) {
            $this->AssetTypeName = $param["AssetTypeName"];
        }

        if (array_key_exists("DisplayStatus",$param) and $param["DisplayStatus"] !== null) {
            $this->DisplayStatus = $param["DisplayStatus"];
        }

        if (array_key_exists("DisplayRiskType",$param) and $param["DisplayRiskType"] !== null) {
            $this->DisplayRiskType = $param["DisplayRiskType"];
        }

        if (array_key_exists("ScanTaskStatus",$param) and $param["ScanTaskStatus"] !== null) {
            $this->ScanTaskStatus = $param["ScanTaskStatus"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("HasScan",$param) and $param["HasScan"] !== null) {
            $this->HasScan = $param["HasScan"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AppIdStr",$param) and $param["AppIdStr"] !== null) {
            $this->AppIdStr = $param["AppIdStr"];
        }

        if (array_key_exists("ExposureID",$param) and $param["ExposureID"] !== null) {
            $this->ExposureID = $param["ExposureID"];
        }

        if (array_key_exists("PortDetectCount",$param) and $param["PortDetectCount"] !== null) {
            $this->PortDetectCount = $param["PortDetectCount"];
        }

        if (array_key_exists("PortDetectResult",$param) and $param["PortDetectResult"] !== null) {
            $this->PortDetectResult = $param["PortDetectResult"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("ToGovernedRiskCount",$param) and $param["ToGovernedRiskCount"] !== null) {
            $this->ToGovernedRiskCount = $param["ToGovernedRiskCount"];
        }

        if (array_key_exists("ToGovernedRiskContent",$param) and $param["ToGovernedRiskContent"] !== null) {
            $this->ToGovernedRiskContent = $param["ToGovernedRiskContent"];
        }

        if (array_key_exists("AssetTypeIconURL",$param) and $param["AssetTypeIconURL"] !== null) {
            $this->AssetTypeIconURL = $param["AssetTypeIconURL"];
        }

        if (array_key_exists("AssetTypeIconSolidURL",$param) and $param["AssetTypeIconSolidURL"] !== null) {
            $this->AssetTypeIconSolidURL = $param["AssetTypeIconSolidURL"];
        }
    }
}
