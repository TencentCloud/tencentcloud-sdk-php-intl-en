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
 * Image asset information
 *
 * @method string getImageRepoAddress() Obtain <p>Image repository address</p>
 * @method void setImageRepoAddress(string $ImageRepoAddress) Set <p>Image repository address</p>
 * @method string getImageDigest() Obtain <p>Image digests.</p>
 * @method void setImageDigest(string $ImageDigest) Set <p>Image digests.</p>
 * @method string getRegistryType() Obtain <p>Image repository type</p>
 * @method void setRegistryType(string $RegistryType) Set <p>Image repository type</p>
 * @method string getImageName() Obtain <p>Image name.</p>
 * @method void setImageName(string $ImageName) Set <p>Image name.</p>
 * @method string getImageTag() Obtain <p>Image tag</p>
 * @method void setImageTag(string $ImageTag) Set <p>Image tag</p>
 * @method integer getImageSize() Obtain <p>Image size.</p>
 * @method void setImageSize(integer $ImageSize) Set <p>Image size.</p>
 * @method string getLatestScanTime() Obtain <p>Last scan time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method void setLatestScanTime(string $LatestScanTime) Set <p>Last scan time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method string getScanStatus() Obtain <p>Scan status</p><p>Enumeration values:</p><ul><li>INIT: Unscanned</li><li>SCANNING: Scanning</li><li>FINISH: Scan successful</li><li>TIMEOUT: Scan timeout</li><li>FAILED: Scan failure</li><li>STOPPING: Terminating</li><li>CANCELLED: Scan canceled</li><li>CREATING: Scan task under creation</li><li>LICENSE_NOT_ENOUGH: Insufficient license</li></ul>
 * @method void setScanStatus(string $ScanStatus) Set <p>Scan status</p><p>Enumeration values:</p><ul><li>INIT: Unscanned</li><li>SCANNING: Scanning</li><li>FINISH: Scan successful</li><li>TIMEOUT: Scan timeout</li><li>FAILED: Scan failure</li><li>STOPPING: Terminating</li><li>CANCELLED: Scan canceled</li><li>CREATING: Scan task under creation</li><li>LICENSE_NOT_ENOUGH: Insufficient license</li></ul>
 * @method integer getVulCnt() Obtain <p>Number of vulnerabilities</p>
 * @method void setVulCnt(integer $VulCnt) Set <p>Number of vulnerabilities</p>
 * @method integer getVirusCnt() Obtain <p>Number of Trojans</p>
 * @method void setVirusCnt(integer $VirusCnt) Set <p>Number of Trojans</p>
 * @method integer getSensitiveCnt() Obtain <p>Number of sensitive information entries.</p>
 * @method void setSensitiveCnt(integer $SensitiveCnt) Set <p>Number of sensitive information entries.</p>
 * @method string getOsName() Obtain <p>Image operating system</p>
 * @method void setOsName(string $OsName) Set <p>Image operating system</p>
 * @method string getInstanceId() Obtain <p>id of the associated repository instance</p>
 * @method void setInstanceId(string $InstanceId) Set <p>id of the associated repository instance</p>
 * @method string getInstanceName() Obtain <p>Name of the associated mirror repository instance</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Name of the associated mirror repository instance</p>
 * @method string getNamespace() Obtain <p>Namespace.</p>
 * @method void setNamespace(string $Namespace) Set <p>Namespace.</p>
 * @method integer getIsAuthorized() Obtain <p>Whether to authorize</p>
 * @method void setIsAuthorized(integer $IsAuthorized) Set <p>Whether to authorize</p>
 * @method string getRegistryRegion() Obtain <p>region where the image repository is located</p>
 * @method void setRegistryRegion(string $RegistryRegion) Set <p>region where the image repository is located</p>
 * @method string getId() Obtain <p>id</p>
 * @method void setId(string $Id) Set <p>id</p>
 * @method string getImageId() Obtain <p>Image ID.</p>
 * @method void setImageId(string $ImageId) Set <p>Image ID.</p>
 * @method string getImageCreateTime() Obtain <p>Image creation time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method void setImageCreateTime(string $ImageCreateTime) Set <p>Image creation time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method boolean getIsLatestImage() Obtain <p>Is it the latest image?</p>
 * @method void setIsLatestImage(boolean $IsLatestImage) Set <p>Is it the latest image?</p>
 * @method integer getLowLevelVulCnt() Obtain <p>Number of low-risk vulnerabilities</p>
 * @method void setLowLevelVulCnt(integer $LowLevelVulCnt) Set <p>Number of low-risk vulnerabilities</p>
 * @method integer getMediumLevelVulCnt() Obtain <p>Medium-risk vulnerability count</p>
 * @method void setMediumLevelVulCnt(integer $MediumLevelVulCnt) Set <p>Medium-risk vulnerability count</p>
 * @method integer getHighLevelVulCnt() Obtain <p>Number of high-risk vulnerabilities</p>
 * @method void setHighLevelVulCnt(integer $HighLevelVulCnt) Set <p>Number of high-risk vulnerabilities</p>
 * @method integer getCriticalLevelVulCnt() Obtain <p>Number of critical risk vulnerabilities</p>
 * @method void setCriticalLevelVulCnt(integer $CriticalLevelVulCnt) Set <p>Number of critical risk vulnerabilities</p>
 * @method string getOwnerAccountName() Obtain <p>Associated account name</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) Set <p>Associated account name</p>
 * @method integer getOwnerAppId() Obtain <p>appid of the associated account</p>
 * @method void setOwnerAppId(integer $OwnerAppId) Set <p>appid of the associated account</p>
 * @method string getOwnerUin() Obtain <p>Associated account uin</p>
 * @method void setOwnerUin(string $OwnerUin) Set <p>Associated account uin</p>
 * @method integer getLowLevelVirusCnt() Obtain <p>Number of low-risk trojans</p>
 * @method void setLowLevelVirusCnt(integer $LowLevelVirusCnt) Set <p>Number of low-risk trojans</p>
 * @method integer getMediumLevelVirusCnt() Obtain <p>Number of medium-risk trojans</p>
 * @method void setMediumLevelVirusCnt(integer $MediumLevelVirusCnt) Set <p>Number of medium-risk trojans</p>
 * @method integer getHighLevelVirusCnt() Obtain <p>Number of high-risk trojans</p>
 * @method void setHighLevelVirusCnt(integer $HighLevelVirusCnt) Set <p>Number of high-risk trojans</p>
 * @method integer getCriticalLevelVirusCnt() Obtain <p>Number of severe trojans</p>
 * @method void setCriticalLevelVirusCnt(integer $CriticalLevelVirusCnt) Set <p>Number of severe trojans</p>
 * @method integer getEmergencyVulCnt() Obtain <p>Number of emergency vulnerabilities</p>
 * @method void setEmergencyVulCnt(integer $EmergencyVulCnt) Set <p>Number of emergency vulnerabilities</p>
 * @method integer getLowLevelSensitiveCnt() Obtain <p>Number of low-risk sensitive data items</p>
 * @method void setLowLevelSensitiveCnt(integer $LowLevelSensitiveCnt) Set <p>Number of low-risk sensitive data items</p>
 * @method integer getMediumLevelSensitiveCnt() Obtain <p>Number of medium-risk sensitive data items</p>
 * @method void setMediumLevelSensitiveCnt(integer $MediumLevelSensitiveCnt) Set <p>Number of medium-risk sensitive data items</p>
 * @method integer getHighLevelSensitiveCnt() Obtain <p>Number of high-risk sensitive data items</p>
 * @method void setHighLevelSensitiveCnt(integer $HighLevelSensitiveCnt) Set <p>Number of high-risk sensitive data items</p>
 * @method integer getCriticalLevelSensitiveCnt() Obtain <p>Number of severe sensitive data items</p>
 * @method void setCriticalLevelSensitiveCnt(integer $CriticalLevelSensitiveCnt) Set <p>Number of severe sensitive data items</p>
 * @method integer getRiskCnt() Obtain <p>Risk count</p>
 * @method void setRiskCnt(integer $RiskCnt) Set <p>Risk count</p>
 * @method string getScanFailReason() Obtain <p>Scan failure reason</p>
 * @method void setScanFailReason(string $ScanFailReason) Set <p>Scan failure reason</p>
 * @method string getScanSolution() Obtain <p>Solution to scan failure</p>
 * @method void setScanSolution(string $ScanSolution) Set <p>Solution to scan failure</p>
 * @method RegionInfo getRegionInfo() Obtain <p>Region information.</p>
 * @method void setRegionInfo(RegionInfo $RegionInfo) Set <p>Region information.</p>
 * @method integer getScanTaskId() Obtain <p>Most recent scan task Id.</p>
 * @method void setScanTaskId(integer $ScanTaskId) Set <p>Most recent scan task Id.</p>
 */
class ImageAssetInfo extends AbstractModel
{
    /**
     * @var string <p>Image repository address</p>
     */
    public $ImageRepoAddress;

    /**
     * @var string <p>Image digests.</p>
     */
    public $ImageDigest;

    /**
     * @var string <p>Image repository type</p>
     */
    public $RegistryType;

    /**
     * @var string <p>Image name.</p>
     */
    public $ImageName;

    /**
     * @var string <p>Image tag</p>
     */
    public $ImageTag;

    /**
     * @var integer <p>Image size.</p>
     */
    public $ImageSize;

    /**
     * @var string <p>Last scan time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     */
    public $LatestScanTime;

    /**
     * @var string <p>Scan status</p><p>Enumeration values:</p><ul><li>INIT: Unscanned</li><li>SCANNING: Scanning</li><li>FINISH: Scan successful</li><li>TIMEOUT: Scan timeout</li><li>FAILED: Scan failure</li><li>STOPPING: Terminating</li><li>CANCELLED: Scan canceled</li><li>CREATING: Scan task under creation</li><li>LICENSE_NOT_ENOUGH: Insufficient license</li></ul>
     */
    public $ScanStatus;

    /**
     * @var integer <p>Number of vulnerabilities</p>
     */
    public $VulCnt;

    /**
     * @var integer <p>Number of Trojans</p>
     */
    public $VirusCnt;

    /**
     * @var integer <p>Number of sensitive information entries.</p>
     */
    public $SensitiveCnt;

    /**
     * @var string <p>Image operating system</p>
     */
    public $OsName;

    /**
     * @var string <p>id of the associated repository instance</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Name of the associated mirror repository instance</p>
     */
    public $InstanceName;

    /**
     * @var string <p>Namespace.</p>
     */
    public $Namespace;

    /**
     * @var integer <p>Whether to authorize</p>
     */
    public $IsAuthorized;

    /**
     * @var string <p>region where the image repository is located</p>
     */
    public $RegistryRegion;

    /**
     * @var string <p>id</p>
     */
    public $Id;

    /**
     * @var string <p>Image ID.</p>
     */
    public $ImageId;

    /**
     * @var string <p>Image creation time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     */
    public $ImageCreateTime;

    /**
     * @var boolean <p>Is it the latest image?</p>
     */
    public $IsLatestImage;

    /**
     * @var integer <p>Number of low-risk vulnerabilities</p>
     */
    public $LowLevelVulCnt;

    /**
     * @var integer <p>Medium-risk vulnerability count</p>
     */
    public $MediumLevelVulCnt;

    /**
     * @var integer <p>Number of high-risk vulnerabilities</p>
     */
    public $HighLevelVulCnt;

    /**
     * @var integer <p>Number of critical risk vulnerabilities</p>
     */
    public $CriticalLevelVulCnt;

    /**
     * @var string <p>Associated account name</p>
     */
    public $OwnerAccountName;

    /**
     * @var integer <p>appid of the associated account</p>
     */
    public $OwnerAppId;

    /**
     * @var string <p>Associated account uin</p>
     */
    public $OwnerUin;

    /**
     * @var integer <p>Number of low-risk trojans</p>
     */
    public $LowLevelVirusCnt;

    /**
     * @var integer <p>Number of medium-risk trojans</p>
     */
    public $MediumLevelVirusCnt;

    /**
     * @var integer <p>Number of high-risk trojans</p>
     */
    public $HighLevelVirusCnt;

    /**
     * @var integer <p>Number of severe trojans</p>
     */
    public $CriticalLevelVirusCnt;

    /**
     * @var integer <p>Number of emergency vulnerabilities</p>
     */
    public $EmergencyVulCnt;

    /**
     * @var integer <p>Number of low-risk sensitive data items</p>
     */
    public $LowLevelSensitiveCnt;

    /**
     * @var integer <p>Number of medium-risk sensitive data items</p>
     */
    public $MediumLevelSensitiveCnt;

    /**
     * @var integer <p>Number of high-risk sensitive data items</p>
     */
    public $HighLevelSensitiveCnt;

    /**
     * @var integer <p>Number of severe sensitive data items</p>
     */
    public $CriticalLevelSensitiveCnt;

    /**
     * @var integer <p>Risk count</p>
     */
    public $RiskCnt;

    /**
     * @var string <p>Scan failure reason</p>
     */
    public $ScanFailReason;

    /**
     * @var string <p>Solution to scan failure</p>
     */
    public $ScanSolution;

    /**
     * @var RegionInfo <p>Region information.</p>
     */
    public $RegionInfo;

    /**
     * @var integer <p>Most recent scan task Id.</p>
     */
    public $ScanTaskId;

    /**
     * @param string $ImageRepoAddress <p>Image repository address</p>
     * @param string $ImageDigest <p>Image digests.</p>
     * @param string $RegistryType <p>Image repository type</p>
     * @param string $ImageName <p>Image name.</p>
     * @param string $ImageTag <p>Image tag</p>
     * @param integer $ImageSize <p>Image size.</p>
     * @param string $LatestScanTime <p>Last scan time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     * @param string $ScanStatus <p>Scan status</p><p>Enumeration values:</p><ul><li>INIT: Unscanned</li><li>SCANNING: Scanning</li><li>FINISH: Scan successful</li><li>TIMEOUT: Scan timeout</li><li>FAILED: Scan failure</li><li>STOPPING: Terminating</li><li>CANCELLED: Scan canceled</li><li>CREATING: Scan task under creation</li><li>LICENSE_NOT_ENOUGH: Insufficient license</li></ul>
     * @param integer $VulCnt <p>Number of vulnerabilities</p>
     * @param integer $VirusCnt <p>Number of Trojans</p>
     * @param integer $SensitiveCnt <p>Number of sensitive information entries.</p>
     * @param string $OsName <p>Image operating system</p>
     * @param string $InstanceId <p>id of the associated repository instance</p>
     * @param string $InstanceName <p>Name of the associated mirror repository instance</p>
     * @param string $Namespace <p>Namespace.</p>
     * @param integer $IsAuthorized <p>Whether to authorize</p>
     * @param string $RegistryRegion <p>region where the image repository is located</p>
     * @param string $Id <p>id</p>
     * @param string $ImageId <p>Image ID.</p>
     * @param string $ImageCreateTime <p>Image creation time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     * @param boolean $IsLatestImage <p>Is it the latest image?</p>
     * @param integer $LowLevelVulCnt <p>Number of low-risk vulnerabilities</p>
     * @param integer $MediumLevelVulCnt <p>Medium-risk vulnerability count</p>
     * @param integer $HighLevelVulCnt <p>Number of high-risk vulnerabilities</p>
     * @param integer $CriticalLevelVulCnt <p>Number of critical risk vulnerabilities</p>
     * @param string $OwnerAccountName <p>Associated account name</p>
     * @param integer $OwnerAppId <p>appid of the associated account</p>
     * @param string $OwnerUin <p>Associated account uin</p>
     * @param integer $LowLevelVirusCnt <p>Number of low-risk trojans</p>
     * @param integer $MediumLevelVirusCnt <p>Number of medium-risk trojans</p>
     * @param integer $HighLevelVirusCnt <p>Number of high-risk trojans</p>
     * @param integer $CriticalLevelVirusCnt <p>Number of severe trojans</p>
     * @param integer $EmergencyVulCnt <p>Number of emergency vulnerabilities</p>
     * @param integer $LowLevelSensitiveCnt <p>Number of low-risk sensitive data items</p>
     * @param integer $MediumLevelSensitiveCnt <p>Number of medium-risk sensitive data items</p>
     * @param integer $HighLevelSensitiveCnt <p>Number of high-risk sensitive data items</p>
     * @param integer $CriticalLevelSensitiveCnt <p>Number of severe sensitive data items</p>
     * @param integer $RiskCnt <p>Risk count</p>
     * @param string $ScanFailReason <p>Scan failure reason</p>
     * @param string $ScanSolution <p>Solution to scan failure</p>
     * @param RegionInfo $RegionInfo <p>Region information.</p>
     * @param integer $ScanTaskId <p>Most recent scan task Id.</p>
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
        if (array_key_exists("ImageRepoAddress",$param) and $param["ImageRepoAddress"] !== null) {
            $this->ImageRepoAddress = $param["ImageRepoAddress"];
        }

        if (array_key_exists("ImageDigest",$param) and $param["ImageDigest"] !== null) {
            $this->ImageDigest = $param["ImageDigest"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageTag",$param) and $param["ImageTag"] !== null) {
            $this->ImageTag = $param["ImageTag"];
        }

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }

        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
        }

        if (array_key_exists("VulCnt",$param) and $param["VulCnt"] !== null) {
            $this->VulCnt = $param["VulCnt"];
        }

        if (array_key_exists("VirusCnt",$param) and $param["VirusCnt"] !== null) {
            $this->VirusCnt = $param["VirusCnt"];
        }

        if (array_key_exists("SensitiveCnt",$param) and $param["SensitiveCnt"] !== null) {
            $this->SensitiveCnt = $param["SensitiveCnt"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("IsAuthorized",$param) and $param["IsAuthorized"] !== null) {
            $this->IsAuthorized = $param["IsAuthorized"];
        }

        if (array_key_exists("RegistryRegion",$param) and $param["RegistryRegion"] !== null) {
            $this->RegistryRegion = $param["RegistryRegion"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageCreateTime",$param) and $param["ImageCreateTime"] !== null) {
            $this->ImageCreateTime = $param["ImageCreateTime"];
        }

        if (array_key_exists("IsLatestImage",$param) and $param["IsLatestImage"] !== null) {
            $this->IsLatestImage = $param["IsLatestImage"];
        }

        if (array_key_exists("LowLevelVulCnt",$param) and $param["LowLevelVulCnt"] !== null) {
            $this->LowLevelVulCnt = $param["LowLevelVulCnt"];
        }

        if (array_key_exists("MediumLevelVulCnt",$param) and $param["MediumLevelVulCnt"] !== null) {
            $this->MediumLevelVulCnt = $param["MediumLevelVulCnt"];
        }

        if (array_key_exists("HighLevelVulCnt",$param) and $param["HighLevelVulCnt"] !== null) {
            $this->HighLevelVulCnt = $param["HighLevelVulCnt"];
        }

        if (array_key_exists("CriticalLevelVulCnt",$param) and $param["CriticalLevelVulCnt"] !== null) {
            $this->CriticalLevelVulCnt = $param["CriticalLevelVulCnt"];
        }

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("LowLevelVirusCnt",$param) and $param["LowLevelVirusCnt"] !== null) {
            $this->LowLevelVirusCnt = $param["LowLevelVirusCnt"];
        }

        if (array_key_exists("MediumLevelVirusCnt",$param) and $param["MediumLevelVirusCnt"] !== null) {
            $this->MediumLevelVirusCnt = $param["MediumLevelVirusCnt"];
        }

        if (array_key_exists("HighLevelVirusCnt",$param) and $param["HighLevelVirusCnt"] !== null) {
            $this->HighLevelVirusCnt = $param["HighLevelVirusCnt"];
        }

        if (array_key_exists("CriticalLevelVirusCnt",$param) and $param["CriticalLevelVirusCnt"] !== null) {
            $this->CriticalLevelVirusCnt = $param["CriticalLevelVirusCnt"];
        }

        if (array_key_exists("EmergencyVulCnt",$param) and $param["EmergencyVulCnt"] !== null) {
            $this->EmergencyVulCnt = $param["EmergencyVulCnt"];
        }

        if (array_key_exists("LowLevelSensitiveCnt",$param) and $param["LowLevelSensitiveCnt"] !== null) {
            $this->LowLevelSensitiveCnt = $param["LowLevelSensitiveCnt"];
        }

        if (array_key_exists("MediumLevelSensitiveCnt",$param) and $param["MediumLevelSensitiveCnt"] !== null) {
            $this->MediumLevelSensitiveCnt = $param["MediumLevelSensitiveCnt"];
        }

        if (array_key_exists("HighLevelSensitiveCnt",$param) and $param["HighLevelSensitiveCnt"] !== null) {
            $this->HighLevelSensitiveCnt = $param["HighLevelSensitiveCnt"];
        }

        if (array_key_exists("CriticalLevelSensitiveCnt",$param) and $param["CriticalLevelSensitiveCnt"] !== null) {
            $this->CriticalLevelSensitiveCnt = $param["CriticalLevelSensitiveCnt"];
        }

        if (array_key_exists("RiskCnt",$param) and $param["RiskCnt"] !== null) {
            $this->RiskCnt = $param["RiskCnt"];
        }

        if (array_key_exists("ScanFailReason",$param) and $param["ScanFailReason"] !== null) {
            $this->ScanFailReason = $param["ScanFailReason"];
        }

        if (array_key_exists("ScanSolution",$param) and $param["ScanSolution"] !== null) {
            $this->ScanSolution = $param["ScanSolution"];
        }

        if (array_key_exists("RegionInfo",$param) and $param["RegionInfo"] !== null) {
            $this->RegionInfo = new RegionInfo();
            $this->RegionInfo->deserialize($param["RegionInfo"]);
        }

        if (array_key_exists("ScanTaskId",$param) and $param["ScanTaskId"] !== null) {
            $this->ScanTaskId = $param["ScanTaskId"];
        }
    }
}
