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
 * List of image repositories
 *
 * @method string getImageDigest() Obtain Image digest
 * @method void setImageDigest(string $ImageDigest) Set Image digest
 * @method string getImageRepoAddress() Obtain Image repository address
 * @method void setImageRepoAddress(string $ImageRepoAddress) Set Image repository address
 * @method string getRegistryType() Obtain Repository type
 * @method void setRegistryType(string $RegistryType) Set Repository type
 * @method string getImageName() Obtain Image name
 * @method void setImageName(string $ImageName) Set Image name
 * @method string getImageTag() Obtain Image tag
 * @method void setImageTag(string $ImageTag) Set Image tag
 * @method integer getImageSize() Obtain Image size
 * @method void setImageSize(integer $ImageSize) Set Image size
 * @method string getScanTime() Obtain Last scan time
 * @method void setScanTime(string $ScanTime) Set Last scan time
 * @method string getScanStatus() Obtain Scanning status
 * @method void setScanStatus(string $ScanStatus) Set Scanning status
 * @method integer getVulCnt() Obtain Number of vulnerabilities
 * @method void setVulCnt(integer $VulCnt) Set Number of vulnerabilities
 * @method integer getVirusCnt() Obtain Number of viruses and trojans
 * @method void setVirusCnt(integer $VirusCnt) Set Number of viruses and trojans
 * @method integer getRiskCnt() Obtain Number of risky behaviors
 * @method void setRiskCnt(integer $RiskCnt) Set Number of risky behaviors
 * @method integer getSentiveInfoCnt() Obtain Number of sensitive data items
 * @method void setSentiveInfoCnt(integer $SentiveInfoCnt) Set Number of sensitive data items
 * @method boolean getIsTrustImage() Obtain Whether it is a trusted image
 * @method void setIsTrustImage(boolean $IsTrustImage) Set Whether it is a trusted image
 * @method string getOsName() Obtain Image system
 * @method void setOsName(string $OsName) Set Image system
 * @method string getScanVirusError() Obtain Trojan scan error
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanVirusError(string $ScanVirusError) Set Trojan scan error
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScanVulError() Obtain Vulnerability scan error
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanVulError(string $ScanVulError) Set Vulnerability scan error
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getNamespace() Obtain Namespace
 * @method void setNamespace(string $Namespace) Set Namespace
 * @method string getScanRiskError() Obtain High-risk scan error
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanRiskError(string $ScanRiskError) Set High-risk scan error
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScanVirusProgress() Obtain Sensitive data scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanVirusProgress(integer $ScanVirusProgress) Set Sensitive data scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScanVulProgress() Obtain Trojan scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanVulProgress(integer $ScanVulProgress) Set Trojan scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScanRiskProgress() Obtain Vulnerability scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanRiskProgress(integer $ScanRiskProgress) Set Vulnerability scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScanRemainTime() Obtain Remaining scan time in seconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanRemainTime(integer $ScanRemainTime) Set Remaining scan time in seconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCveStatus() Obtain CVE scanning status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCveStatus(string $CveStatus) Set CVE scanning status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRiskStatus() Obtain High-risk scanning status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskStatus(string $RiskStatus) Set High-risk scanning status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVirusStatus() Obtain Trojan scanning status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVirusStatus(string $VirusStatus) Set Trojan scanning status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProgress() Obtain Overall progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProgress(integer $Progress) Set Overall progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsAuthorized() Obtain Licensing status
 * @method void setIsAuthorized(integer $IsAuthorized) Set Licensing status
 * @method string getRegistryRegion() Obtain Repository region
 * @method void setRegistryRegion(string $RegistryRegion) Set Repository region
 * @method integer getId() Obtain List of IDs
 * @method void setId(integer $Id) Set List of IDs
 * @method string getImageId() Obtain Image ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageId(string $ImageId) Set Image ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getImageCreateTime() Obtain Image creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageCreateTime(string $ImageCreateTime) Set Image creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsLatestImage() Obtain Whether it is the latest image tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsLatestImage(boolean $IsLatestImage) Set Whether it is the latest image tag
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ImageRepoInfo extends AbstractModel
{
    /**
     * @var string Image digest
     */
    public $ImageDigest;

    /**
     * @var string Image repository address
     */
    public $ImageRepoAddress;

    /**
     * @var string Repository type
     */
    public $RegistryType;

    /**
     * @var string Image name
     */
    public $ImageName;

    /**
     * @var string Image tag
     */
    public $ImageTag;

    /**
     * @var integer Image size
     */
    public $ImageSize;

    /**
     * @var string Last scan time
     */
    public $ScanTime;

    /**
     * @var string Scanning status
     */
    public $ScanStatus;

    /**
     * @var integer Number of vulnerabilities
     */
    public $VulCnt;

    /**
     * @var integer Number of viruses and trojans
     */
    public $VirusCnt;

    /**
     * @var integer Number of risky behaviors
     */
    public $RiskCnt;

    /**
     * @var integer Number of sensitive data items
     * @deprecated
     */
    public $SentiveInfoCnt;

    /**
     * @var boolean Whether it is a trusted image
     */
    public $IsTrustImage;

    /**
     * @var string Image system
     */
    public $OsName;

    /**
     * @var string Trojan scan error
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanVirusError;

    /**
     * @var string Vulnerability scan error
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanVulError;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Namespace
     */
    public $Namespace;

    /**
     * @var string High-risk scan error
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanRiskError;

    /**
     * @var integer Sensitive data scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanVirusProgress;

    /**
     * @var integer Trojan scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanVulProgress;

    /**
     * @var integer Vulnerability scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanRiskProgress;

    /**
     * @var integer Remaining scan time in seconds
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanRemainTime;

    /**
     * @var string CVE scanning status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CveStatus;

    /**
     * @var string High-risk scanning status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskStatus;

    /**
     * @var string Trojan scanning status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VirusStatus;

    /**
     * @var integer Overall progress
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Progress;

    /**
     * @var integer Licensing status
     */
    public $IsAuthorized;

    /**
     * @var string Repository region
     */
    public $RegistryRegion;

    /**
     * @var integer List of IDs
     */
    public $Id;

    /**
     * @var string Image ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageId;

    /**
     * @var string Image creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageCreateTime;

    /**
     * @var boolean Whether it is the latest image tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsLatestImage;

    /**
     * @param string $ImageDigest Image digest
     * @param string $ImageRepoAddress Image repository address
     * @param string $RegistryType Repository type
     * @param string $ImageName Image name
     * @param string $ImageTag Image tag
     * @param integer $ImageSize Image size
     * @param string $ScanTime Last scan time
     * @param string $ScanStatus Scanning status
     * @param integer $VulCnt Number of vulnerabilities
     * @param integer $VirusCnt Number of viruses and trojans
     * @param integer $RiskCnt Number of risky behaviors
     * @param integer $SentiveInfoCnt Number of sensitive data items
     * @param boolean $IsTrustImage Whether it is a trusted image
     * @param string $OsName Image system
     * @param string $ScanVirusError Trojan scan error
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ScanVulError Vulnerability scan error
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param string $Namespace Namespace
     * @param string $ScanRiskError High-risk scan error
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ScanVirusProgress Sensitive data scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ScanVulProgress Trojan scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ScanRiskProgress Vulnerability scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ScanRemainTime Remaining scan time in seconds
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CveStatus CVE scanning status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RiskStatus High-risk scanning status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VirusStatus Trojan scanning status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Progress Overall progress
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsAuthorized Licensing status
     * @param string $RegistryRegion Repository region
     * @param integer $Id List of IDs
     * @param string $ImageId Image ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ImageCreateTime Image creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsLatestImage Whether it is the latest image tag
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
        if (array_key_exists("ImageDigest",$param) and $param["ImageDigest"] !== null) {
            $this->ImageDigest = $param["ImageDigest"];
        }

        if (array_key_exists("ImageRepoAddress",$param) and $param["ImageRepoAddress"] !== null) {
            $this->ImageRepoAddress = $param["ImageRepoAddress"];
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

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
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

        if (array_key_exists("RiskCnt",$param) and $param["RiskCnt"] !== null) {
            $this->RiskCnt = $param["RiskCnt"];
        }

        if (array_key_exists("SentiveInfoCnt",$param) and $param["SentiveInfoCnt"] !== null) {
            $this->SentiveInfoCnt = $param["SentiveInfoCnt"];
        }

        if (array_key_exists("IsTrustImage",$param) and $param["IsTrustImage"] !== null) {
            $this->IsTrustImage = $param["IsTrustImage"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("ScanVirusError",$param) and $param["ScanVirusError"] !== null) {
            $this->ScanVirusError = $param["ScanVirusError"];
        }

        if (array_key_exists("ScanVulError",$param) and $param["ScanVulError"] !== null) {
            $this->ScanVulError = $param["ScanVulError"];
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

        if (array_key_exists("ScanRiskError",$param) and $param["ScanRiskError"] !== null) {
            $this->ScanRiskError = $param["ScanRiskError"];
        }

        if (array_key_exists("ScanVirusProgress",$param) and $param["ScanVirusProgress"] !== null) {
            $this->ScanVirusProgress = $param["ScanVirusProgress"];
        }

        if (array_key_exists("ScanVulProgress",$param) and $param["ScanVulProgress"] !== null) {
            $this->ScanVulProgress = $param["ScanVulProgress"];
        }

        if (array_key_exists("ScanRiskProgress",$param) and $param["ScanRiskProgress"] !== null) {
            $this->ScanRiskProgress = $param["ScanRiskProgress"];
        }

        if (array_key_exists("ScanRemainTime",$param) and $param["ScanRemainTime"] !== null) {
            $this->ScanRemainTime = $param["ScanRemainTime"];
        }

        if (array_key_exists("CveStatus",$param) and $param["CveStatus"] !== null) {
            $this->CveStatus = $param["CveStatus"];
        }

        if (array_key_exists("RiskStatus",$param) and $param["RiskStatus"] !== null) {
            $this->RiskStatus = $param["RiskStatus"];
        }

        if (array_key_exists("VirusStatus",$param) and $param["VirusStatus"] !== null) {
            $this->VirusStatus = $param["VirusStatus"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
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
    }
}
