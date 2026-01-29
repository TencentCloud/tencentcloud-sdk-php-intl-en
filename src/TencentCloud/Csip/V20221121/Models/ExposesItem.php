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
 * @method string getProvider() Obtain Cloud service provider.
 * @method void setProvider(string $Provider) Set Cloud service provider.
 * @method string getCloudAccountName() Obtain Account name.
 * @method void setCloudAccountName(string $CloudAccountName) Set Account name.
 * @method string getCloudAccountId() Obtain Cloud account.
 * @method void setCloudAccountId(string $CloudAccountId) Set Cloud account.
 * @method string getDomain() Obtain Domain
 * @method void setDomain(string $Domain) Set Domain
 * @method string getIp() Obtain IP
 * @method void setIp(string $Ip) Set IP
 * @method string getPort() Obtain Port or port range.
 * @method void setPort(string $Port) Set Port or port range.
 * @method string getStatus() Obtain Open.
 * @method void setStatus(string $Status) Set Open.
 * @method string getRiskType() Obtain Risk type.
 * @method void setRiskType(string $RiskType) Set Risk type.
 * @method string getAclType() Obtain acl type.
 * @method void setAclType(string $AclType) Set acl type.
 * @method string getAclList() Obtain ACL list.
 * @method void setAclList(string $AclList) Set ACL list.
 * @method string getAssetId() Obtain Asset ID.
 * @method void setAssetId(string $AssetId) Set Asset ID.
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getAssetType() Obtain Asset type.
 * @method void setAssetType(string $AssetType) Set Asset type.
 * @method integer getPortServiceCount() Obtain Port service quantity.
 * @method void setPortServiceCount(integer $PortServiceCount) Set Port service quantity.
 * @method integer getHighRiskPortServiceCount() Obtain Number of high-risk ports.
 * @method void setHighRiskPortServiceCount(integer $HighRiskPortServiceCount) Set Number of high-risk ports.
 * @method integer getWebAppCount() Obtain Number of web applications.
 * @method void setWebAppCount(integer $WebAppCount) Set Number of web applications.
 * @method integer getRiskWebAppCount() Obtain Number of web applications at risk.
 * @method void setRiskWebAppCount(integer $RiskWebAppCount) Set Number of web applications at risk.
 * @method integer getWeakPasswordCount() Obtain Number of Weak Passwords
 * @method void setWeakPasswordCount(integer $WeakPasswordCount) Set Number of Weak Passwords
 * @method integer getVulCount() Obtain Number of vulnerabilities
 * @method void setVulCount(integer $VulCount) Set Number of vulnerabilities
 * @method string getCreateTime() Obtain First detection time
 * @method void setCreateTime(string $CreateTime) Set First detection time
 * @method string getUpdateTime() Obtain Latest update time.
 * @method void setUpdateTime(string $UpdateTime) Set Latest update time.
 * @method string getAssetTypeName() Obtain Instance Type Name
 * @method void setAssetTypeName(string $AssetTypeName) Set Instance Type Name
 * @method string getDisplayStatus() Obtain Open status.
 * @method void setDisplayStatus(string $DisplayStatus) Set Open status.
 * @method string getDisplayRiskType() Obtain Port status.
 * @method void setDisplayRiskType(string $DisplayRiskType) Set Port status.
 * @method string getScanTaskStatus() Obtain Scan task status.
 * @method void setScanTaskStatus(string $ScanTaskStatus) Set Scan task status.
 * @method string getUuid() Obtain uuid
 * @method void setUuid(string $Uuid) Set uuid
 * @method string getHasScan() Obtain Whether a security check has been performed.
 * @method void setHasScan(string $HasScan) Set Whether a security check has been performed.
 * @method integer getAppId() Obtain Tenant ID.
 * @method void setAppId(integer $AppId) Set Tenant ID.
 * @method string getAppIdStr() Obtain Tenant ID string.
 * @method void setAppIdStr(string $AppIdStr) Set Tenant ID string.
 * @method integer getExposureID() Obtain Record ID
 * @method void setExposureID(integer $ExposureID) Set Record ID
 * @method integer getPortDetectCount() Obtain Number of ports open.
 * @method void setPortDetectCount(integer $PortDetectCount) Set Number of ports open.
 * @method string getPortDetectResult() Obtain Port exposure result.
 * @method void setPortDetectResult(string $PortDetectResult) Set Port exposure result.
 * @method string getTag() Obtain Tag.
 * @method void setTag(string $Tag) Set Tag.
 * @method string getComment() Obtain Remarks
 * @method void setComment(string $Comment) Set Remarks
 * @method integer getToGovernedRiskCount() Obtain Number of risks to be governed.
 * @method void setToGovernedRiskCount(integer $ToGovernedRiskCount) Set Number of risks to be governed.
 * @method string getToGovernedRiskContent() Obtain Risk content to be governed.
 * @method void setToGovernedRiskContent(string $ToGovernedRiskContent) Set Risk content to be governed.
 */
class ExposesItem extends AbstractModel
{
    /**
     * @var string Cloud service provider.
     */
    public $Provider;

    /**
     * @var string Account name.
     */
    public $CloudAccountName;

    /**
     * @var string Cloud account.
     */
    public $CloudAccountId;

    /**
     * @var string Domain
     */
    public $Domain;

    /**
     * @var string IP
     */
    public $Ip;

    /**
     * @var string Port or port range.
     */
    public $Port;

    /**
     * @var string Open.
     */
    public $Status;

    /**
     * @var string Risk type.
     */
    public $RiskType;

    /**
     * @var string acl type.
     */
    public $AclType;

    /**
     * @var string ACL list.
     */
    public $AclList;

    /**
     * @var string Asset ID.
     */
    public $AssetId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Asset type.
     */
    public $AssetType;

    /**
     * @var integer Port service quantity.
     */
    public $PortServiceCount;

    /**
     * @var integer Number of high-risk ports.
     */
    public $HighRiskPortServiceCount;

    /**
     * @var integer Number of web applications.
     */
    public $WebAppCount;

    /**
     * @var integer Number of web applications at risk.
     */
    public $RiskWebAppCount;

    /**
     * @var integer Number of Weak Passwords
     */
    public $WeakPasswordCount;

    /**
     * @var integer Number of vulnerabilities
     */
    public $VulCount;

    /**
     * @var string First detection time
     */
    public $CreateTime;

    /**
     * @var string Latest update time.
     */
    public $UpdateTime;

    /**
     * @var string Instance Type Name
     */
    public $AssetTypeName;

    /**
     * @var string Open status.
     */
    public $DisplayStatus;

    /**
     * @var string Port status.
     */
    public $DisplayRiskType;

    /**
     * @var string Scan task status.
     */
    public $ScanTaskStatus;

    /**
     * @var string uuid
     */
    public $Uuid;

    /**
     * @var string Whether a security check has been performed.
     */
    public $HasScan;

    /**
     * @var integer Tenant ID.
     */
    public $AppId;

    /**
     * @var string Tenant ID string.
     */
    public $AppIdStr;

    /**
     * @var integer Record ID
     */
    public $ExposureID;

    /**
     * @var integer Number of ports open.
     */
    public $PortDetectCount;

    /**
     * @var string Port exposure result.
     */
    public $PortDetectResult;

    /**
     * @var string Tag.
     */
    public $Tag;

    /**
     * @var string Remarks
     */
    public $Comment;

    /**
     * @var integer Number of risks to be governed.
     */
    public $ToGovernedRiskCount;

    /**
     * @var string Risk content to be governed.
     */
    public $ToGovernedRiskContent;

    /**
     * @param string $Provider Cloud service provider.
     * @param string $CloudAccountName Account name.
     * @param string $CloudAccountId Cloud account.
     * @param string $Domain Domain
     * @param string $Ip IP
     * @param string $Port Port or port range.
     * @param string $Status Open.
     * @param string $RiskType Risk type.
     * @param string $AclType acl type.
     * @param string $AclList ACL list.
     * @param string $AssetId Asset ID.
     * @param string $InstanceName Instance name
     * @param string $AssetType Asset type.
     * @param integer $PortServiceCount Port service quantity.
     * @param integer $HighRiskPortServiceCount Number of high-risk ports.
     * @param integer $WebAppCount Number of web applications.
     * @param integer $RiskWebAppCount Number of web applications at risk.
     * @param integer $WeakPasswordCount Number of Weak Passwords
     * @param integer $VulCount Number of vulnerabilities
     * @param string $CreateTime First detection time
     * @param string $UpdateTime Latest update time.
     * @param string $AssetTypeName Instance Type Name
     * @param string $DisplayStatus Open status.
     * @param string $DisplayRiskType Port status.
     * @param string $ScanTaskStatus Scan task status.
     * @param string $Uuid uuid
     * @param string $HasScan Whether a security check has been performed.
     * @param integer $AppId Tenant ID.
     * @param string $AppIdStr Tenant ID string.
     * @param integer $ExposureID Record ID
     * @param integer $PortDetectCount Number of ports open.
     * @param string $PortDetectResult Port exposure result.
     * @param string $Tag Tag.
     * @param string $Comment Remarks
     * @param integer $ToGovernedRiskCount Number of risks to be governed.
     * @param string $ToGovernedRiskContent Risk content to be governed.
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
    }
}
