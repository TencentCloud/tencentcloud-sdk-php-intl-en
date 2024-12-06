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
 * DescribeAssetImageRegistryDetail response structure.
 *
 * @method string getImageDigest() Obtain Image digest
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageDigest(string $ImageDigest) Set Image digest
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getImageRepoAddress() Obtain Image address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageRepoAddress(string $ImageRepoAddress) Set Image address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegistryType() Obtain Image type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegistryType(string $RegistryType) Set Image type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getImageName() Obtain Repository name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageName(string $ImageName) Set Repository name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getImageTag() Obtain Image tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageTag(string $ImageTag) Set Image tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScanTime() Obtain Scan time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanTime(string $ScanTime) Set Scan time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScanStatus() Obtain Scanning status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanStatus(string $ScanStatus) Set Scanning status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVulCnt() Obtain Number of vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVulCnt(integer $VulCnt) Set Number of vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVirusCnt() Obtain Number of viruses and trojans
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVirusCnt(integer $VirusCnt) Set Number of viruses and trojans
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRiskCnt() Obtain Number of risky behaviors
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskCnt(integer $RiskCnt) Set Number of risky behaviors
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSentiveInfoCnt() Obtain Number of sensitive data items
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSentiveInfoCnt(integer $SentiveInfoCnt) Set Number of sensitive data items
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOsName() Obtain Image system
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOsName(string $OsName) Set Image system
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScanVirusError() Obtain Trojan scan error
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanVirusError(string $ScanVirusError) Set Trojan scan error
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScanVulError() Obtain Vulnerability scan error
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanVulError(string $ScanVulError) Set Vulnerability scan error
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLayerInfo() Obtain Layer file information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLayerInfo(string $LayerInfo) Set Layer file information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceName() Obtain Instance name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) Set Instance name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNamespace() Obtain Namespace
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNamespace(string $Namespace) Set Namespace
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScanRiskError() Obtain High-risk scan error
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanRiskError(string $ScanRiskError) Set High-risk scan error
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScanVirusProgress() Obtain Trojan scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanVirusProgress(integer $ScanVirusProgress) Set Trojan scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScanVulProgress() Obtain Vulnerability scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanVulProgress(integer $ScanVulProgress) Set Vulnerability scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScanRiskProgress() Obtain Sensitive data scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanRiskProgress(integer $ScanRiskProgress) Set Sensitive data scanning progress
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
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsAuthorized(integer $IsAuthorized) Set Licensing status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getImageSize() Obtain Image size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageSize(integer $ImageSize) Set Image size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getImageId() Obtain Image ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageId(string $ImageId) Set Image ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegistryRegion() Obtain Image region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegistryRegion(string $RegistryRegion) Set Image region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getImageCreateTime() Obtain Image creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageCreateTime(string $ImageCreateTime) Set Image creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeAssetImageRegistryDetailResponse extends AbstractModel
{
    /**
     * @var string Image digest
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageDigest;

    /**
     * @var string Image address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageRepoAddress;

    /**
     * @var string Image type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegistryType;

    /**
     * @var string Repository name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageName;

    /**
     * @var string Image tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageTag;

    /**
     * @var string Scan time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanTime;

    /**
     * @var string Scanning status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanStatus;

    /**
     * @var integer Number of vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VulCnt;

    /**
     * @var integer Number of viruses and trojans
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VirusCnt;

    /**
     * @var integer Number of risky behaviors
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskCnt;

    /**
     * @var integer Number of sensitive data items
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $SentiveInfoCnt;

    /**
     * @var string Image system
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var string Layer file information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LayerInfo;

    /**
     * @var string Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Instance name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var string Namespace
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Namespace;

    /**
     * @var string High-risk scan error
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanRiskError;

    /**
     * @var integer Trojan scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanVirusProgress;

    /**
     * @var integer Vulnerability scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanVulProgress;

    /**
     * @var integer Sensitive data scanning progress
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
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsAuthorized;

    /**
     * @var integer Image size
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageSize;

    /**
     * @var string Image ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageId;

    /**
     * @var string Image region
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegistryRegion;

    /**
     * @var string Image creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageCreateTime;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ImageDigest Image digest
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ImageRepoAddress Image address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RegistryType Image type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ImageName Repository name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ImageTag Image tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ScanTime Scan time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ScanStatus Scanning status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VulCnt Number of vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VirusCnt Number of viruses and trojans
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RiskCnt Number of risky behaviors
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SentiveInfoCnt Number of sensitive data items
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OsName Image system
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ScanVirusError Trojan scan error
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ScanVulError Vulnerability scan error
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LayerInfo Layer file information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceName Instance name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Namespace Namespace
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ScanRiskError High-risk scan error
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ScanVirusProgress Trojan scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ScanVulProgress Vulnerability scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ScanRiskProgress Sensitive data scanning progress
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
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ImageSize Image size
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ImageId Image ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RegistryRegion Image region
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ImageCreateTime Image creation time
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("ScanVirusError",$param) and $param["ScanVirusError"] !== null) {
            $this->ScanVirusError = $param["ScanVirusError"];
        }

        if (array_key_exists("ScanVulError",$param) and $param["ScanVulError"] !== null) {
            $this->ScanVulError = $param["ScanVulError"];
        }

        if (array_key_exists("LayerInfo",$param) and $param["LayerInfo"] !== null) {
            $this->LayerInfo = $param["LayerInfo"];
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

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("RegistryRegion",$param) and $param["RegistryRegion"] !== null) {
            $this->RegistryRegion = $param["RegistryRegion"];
        }

        if (array_key_exists("ImageCreateTime",$param) and $param["ImageCreateTime"] !== null) {
            $this->ImageCreateTime = $param["ImageCreateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
