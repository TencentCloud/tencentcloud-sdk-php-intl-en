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
 * DescribeAssetImageRegistryDetail response structure.
 *
 * @method string getImageDigest() Obtain Image Digest
 * @method void setImageDigest(string $ImageDigest) Set Image Digest
 * @method string getImageRepoAddress() Obtain Image address.
 * @method void setImageRepoAddress(string $ImageRepoAddress) Set Image address.
 * @method string getRegistryType() Obtain Image type
 * @method void setRegistryType(string $RegistryType) Set Image type
 * @method string getImageName() Obtain Repository name
 * @method void setImageName(string $ImageName) Set Repository name
 * @method string getImageTag() Obtain Mirror version
 * @method void setImageTag(string $ImageTag) Set Mirror version
 * @method string getScanTime() Obtain Scan time
 * @method void setScanTime(string $ScanTime) Set Scan time
 * @method string getScanStatus() Obtain scan status
 * @method void setScanStatus(string $ScanStatus) Set scan status
 * @method integer getVulCnt() Obtain Number of security vulnerabilities
 * @method void setVulCnt(integer $VulCnt) Set Number of security vulnerabilities
 * @method integer getVirusCnt() Obtain Number of Trojan viruses
 * @method void setVirusCnt(integer $VirusCnt) Set Number of Trojan viruses
 * @method integer getRiskCnt() Obtain Number of risky behaviors
 * @method void setRiskCnt(integer $RiskCnt) Set Number of risky behaviors
 * @method integer getSentiveInfoCnt() Obtain Number of sensitive data items
 * @method void setSentiveInfoCnt(integer $SentiveInfoCnt) Set Number of sensitive data items
 * @method string getOsName() Obtain Image system.
 * @method void setOsName(string $OsName) Set Image system.
 * @method string getScanVirusError() Obtain Trojan scan error
 * @method void setScanVirusError(string $ScanVirusError) Set Trojan scan error
 * @method string getScanVulError() Obtain Vulnerability scanning error
 * @method void setScanVulError(string $ScanVulError) Set Vulnerability scanning error
 * @method string getLayerInfo() Obtain Layer file information
 * @method void setLayerInfo(string $LayerInfo) Set Layer file information
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method string getNamespace() Obtain Namespace
 * @method void setNamespace(string $Namespace) Set Namespace
 * @method string getScanRiskError() Obtain High risk scan error
 * @method void setScanRiskError(string $ScanRiskError) Set High risk scan error
 * @method integer getScanVirusProgress() Obtain Trojan information scan progress
 * @method void setScanVirusProgress(integer $ScanVirusProgress) Set Trojan information scan progress
 * @method integer getScanVulProgress() Obtain Vulnerability scan progress.
 * @method void setScanVulProgress(integer $ScanVulProgress) Set Vulnerability scan progress.
 * @method integer getScanRiskProgress() Obtain Sensitive scanning progress
 * @method void setScanRiskProgress(integer $ScanRiskProgress) Set Sensitive scanning progress
 * @method integer getScanRemainTime() Obtain Remaining scan time (seconds)
 * @method void setScanRemainTime(integer $ScanRemainTime) Set Remaining scan time (seconds)
 * @method string getCveStatus() Obtain cve scan status
 * @method void setCveStatus(string $CveStatus) Set cve scan status
 * @method string getRiskStatus() Obtain High risk scan status
 * @method void setRiskStatus(string $RiskStatus) Set High risk scan status
 * @method string getVirusStatus() Obtain Trojan scan status
 * @method void setVirusStatus(string $VirusStatus) Set Trojan scan status
 * @method integer getProgress() Obtain Overall progress
 * @method void setProgress(integer $Progress) Set Overall progress
 * @method integer getIsAuthorized() Obtain Authorization status
 * @method void setIsAuthorized(integer $IsAuthorized) Set Authorization status
 * @method integer getImageSize() Obtain Image size
 * @method void setImageSize(integer $ImageSize) Set Image size
 * @method string getImageId() Obtain Image ID.
 * @method void setImageId(string $ImageId) Set Image ID.
 * @method string getRegistryRegion() Obtain Image Zone
 * @method void setRegistryRegion(string $RegistryRegion) Set Image Zone
 * @method string getImageCreateTime() Obtain Image Creation Time
 * @method void setImageCreateTime(string $ImageCreateTime) Set Image Creation Time
 * @method integer getSensitiveInfoCnt() Obtain Number of sensitive data items
 * @method void setSensitiveInfoCnt(integer $SensitiveInfoCnt) Set Number of sensitive data items
 * @method integer getId() Obtain 
 * @method void setId(integer $Id) Set 
 * @method string getSolution() Obtain Solution
 * @method void setSolution(string $Solution) Set Solution
 * @method string getReason() Obtain Reason
 * @method void setReason(string $Reason) Set Reason
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeAssetImageRegistryDetailResponse extends AbstractModel
{
    /**
     * @var string Image Digest
     */
    public $ImageDigest;

    /**
     * @var string Image address.
     */
    public $ImageRepoAddress;

    /**
     * @var string Image type
     */
    public $RegistryType;

    /**
     * @var string Repository name
     */
    public $ImageName;

    /**
     * @var string Mirror version
     */
    public $ImageTag;

    /**
     * @var string Scan time
     */
    public $ScanTime;

    /**
     * @var string scan status
     */
    public $ScanStatus;

    /**
     * @var integer Number of security vulnerabilities
     */
    public $VulCnt;

    /**
     * @var integer Number of Trojan viruses
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
     * @var string Image system.
     */
    public $OsName;

    /**
     * @var string Trojan scan error
     */
    public $ScanVirusError;

    /**
     * @var string Vulnerability scanning error
     */
    public $ScanVulError;

    /**
     * @var string Layer file information
     */
    public $LayerInfo;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var string Namespace
     */
    public $Namespace;

    /**
     * @var string High risk scan error
     */
    public $ScanRiskError;

    /**
     * @var integer Trojan information scan progress
     */
    public $ScanVirusProgress;

    /**
     * @var integer Vulnerability scan progress.
     */
    public $ScanVulProgress;

    /**
     * @var integer Sensitive scanning progress
     */
    public $ScanRiskProgress;

    /**
     * @var integer Remaining scan time (seconds)
     */
    public $ScanRemainTime;

    /**
     * @var string cve scan status
     */
    public $CveStatus;

    /**
     * @var string High risk scan status
     */
    public $RiskStatus;

    /**
     * @var string Trojan scan status
     */
    public $VirusStatus;

    /**
     * @var integer Overall progress
     */
    public $Progress;

    /**
     * @var integer Authorization status
     */
    public $IsAuthorized;

    /**
     * @var integer Image size
     */
    public $ImageSize;

    /**
     * @var string Image ID.
     */
    public $ImageId;

    /**
     * @var string Image Zone
     */
    public $RegistryRegion;

    /**
     * @var string Image Creation Time
     */
    public $ImageCreateTime;

    /**
     * @var integer Number of sensitive data items
     */
    public $SensitiveInfoCnt;

    /**
     * @var integer 
     */
    public $Id;

    /**
     * @var string Solution
     */
    public $Solution;

    /**
     * @var string Reason
     */
    public $Reason;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ImageDigest Image Digest
     * @param string $ImageRepoAddress Image address.
     * @param string $RegistryType Image type
     * @param string $ImageName Repository name
     * @param string $ImageTag Mirror version
     * @param string $ScanTime Scan time
     * @param string $ScanStatus scan status
     * @param integer $VulCnt Number of security vulnerabilities
     * @param integer $VirusCnt Number of Trojan viruses
     * @param integer $RiskCnt Number of risky behaviors
     * @param integer $SentiveInfoCnt Number of sensitive data items
     * @param string $OsName Image system.
     * @param string $ScanVirusError Trojan scan error
     * @param string $ScanVulError Vulnerability scanning error
     * @param string $LayerInfo Layer file information
     * @param string $InstanceId Instance ID.
     * @param string $InstanceName Instance name.
     * @param string $Namespace Namespace
     * @param string $ScanRiskError High risk scan error
     * @param integer $ScanVirusProgress Trojan information scan progress
     * @param integer $ScanVulProgress Vulnerability scan progress.
     * @param integer $ScanRiskProgress Sensitive scanning progress
     * @param integer $ScanRemainTime Remaining scan time (seconds)
     * @param string $CveStatus cve scan status
     * @param string $RiskStatus High risk scan status
     * @param string $VirusStatus Trojan scan status
     * @param integer $Progress Overall progress
     * @param integer $IsAuthorized Authorization status
     * @param integer $ImageSize Image size
     * @param string $ImageId Image ID.
     * @param string $RegistryRegion Image Zone
     * @param string $ImageCreateTime Image Creation Time
     * @param integer $SensitiveInfoCnt Number of sensitive data items
     * @param integer $Id 
     * @param string $Solution Solution
     * @param string $Reason Reason
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

        if (array_key_exists("SensitiveInfoCnt",$param) and $param["SensitiveInfoCnt"] !== null) {
            $this->SensitiveInfoCnt = $param["SensitiveInfoCnt"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
