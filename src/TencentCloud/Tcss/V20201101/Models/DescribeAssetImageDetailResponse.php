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
 * DescribeAssetImageDetail response structure.
 *
 * @method string getImageID() Obtain Image ID
 * @method void setImageID(string $ImageID) Set Image ID
 * @method string getImageName() Obtain Image name
 * @method void setImageName(string $ImageName) Set Image name
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method integer getSize() Obtain Image size
 * @method void setSize(integer $Size) Set Image size
 * @method integer getHostCnt() Obtain Number of associated servers
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostCnt(integer $HostCnt) Set Number of associated servers
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getContainerCnt() Obtain Number of associated containers
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContainerCnt(integer $ContainerCnt) Set Number of associated containers
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScanTime() Obtain Last scan time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanTime(string $ScanTime) Set Last scan time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVulCnt() Obtain Number of vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVulCnt(integer $VulCnt) Set Number of vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRiskCnt() Obtain Number of risky behaviors
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskCnt(integer $RiskCnt) Set Number of risky behaviors
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSensitiveInfoCnt() Obtain Number of sensitive data items
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSensitiveInfoCnt(integer $SensitiveInfoCnt) Set Number of sensitive data items
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsTrustImage() Obtain Whether it is a trusted image
 * @method void setIsTrustImage(boolean $IsTrustImage) Set Whether it is a trusted image
 * @method string getOsName() Obtain Image system
 * @method void setOsName(string $OsName) Set Image system
 * @method string getAgentError() Obtain Image scan error in the agent
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAgentError(string $AgentError) Set Image scan error in the agent
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScanError() Obtain Image scan error on the backend
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanError(string $ScanError) Set Image scan error on the backend
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getArchitecture() Obtain System architecture
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setArchitecture(string $Architecture) Set System architecture
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAuthor() Obtain Author
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAuthor(string $Author) Set Author
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBuildHistory() Obtain Build history
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBuildHistory(string $BuildHistory) Set Build history
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScanVirusProgress() Obtain Trojan scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanVirusProgress(integer $ScanVirusProgress) Set Trojan scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScanVulProgress() Obtain Vulnerability scan progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanVulProgress(integer $ScanVulProgress) Set Vulnerability scan progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScanRiskProgress() Obtain Sensitive data scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanRiskProgress(integer $ScanRiskProgress) Set Sensitive data scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScanVirusError() Obtain Trojan scan error
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanVirusError(string $ScanVirusError) Set Trojan scan error
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScanVulError() Obtain Vulnerability scan error
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanVulError(string $ScanVulError) Set Vulnerability scan error
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScanRiskError() Obtain Sensitive data error
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanRiskError(string $ScanRiskError) Set Sensitive data error
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScanStatus() Obtain Image scanning status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanStatus(string $ScanStatus) Set Image scanning status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVirusCnt() Obtain Number of viruses and trojans
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVirusCnt(integer $VirusCnt) Set Number of viruses and trojans
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Image scanning status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Image scanning status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRemainScanTime() Obtain Remaining scan time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemainScanTime(integer $RemainScanTime) Set Remaining scan time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsAuthorized() Obtain Valid values: `1` (licensed); `0` (unlicensed).
 * @method void setIsAuthorized(integer $IsAuthorized) Set Valid values: `1` (licensed); `0` (unlicensed).
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeAssetImageDetailResponse extends AbstractModel
{
    /**
     * @var string Image ID
     */
    public $ImageID;

    /**
     * @var string Image name
     */
    public $ImageName;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var integer Image size
     */
    public $Size;

    /**
     * @var integer Number of associated servers
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostCnt;

    /**
     * @var integer Number of associated containers
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContainerCnt;

    /**
     * @var string Last scan time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanTime;

    /**
     * @var integer Number of vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VulCnt;

    /**
     * @var integer Number of risky behaviors
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskCnt;

    /**
     * @var integer Number of sensitive data items
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SensitiveInfoCnt;

    /**
     * @var boolean Whether it is a trusted image
     */
    public $IsTrustImage;

    /**
     * @var string Image system
     */
    public $OsName;

    /**
     * @var string Image scan error in the agent
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AgentError;

    /**
     * @var string Image scan error on the backend
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanError;

    /**
     * @var string System architecture
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Architecture;

    /**
     * @var string Author
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Author;

    /**
     * @var string Build history
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BuildHistory;

    /**
     * @var integer Trojan scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanVirusProgress;

    /**
     * @var integer Vulnerability scan progress
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanVulProgress;

    /**
     * @var integer Sensitive data scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanRiskProgress;

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
     * @var string Sensitive data error
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanRiskError;

    /**
     * @var string Image scanning status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanStatus;

    /**
     * @var integer Number of viruses and trojans
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VirusCnt;

    /**
     * @var integer Image scanning status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Remaining scan time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RemainScanTime;

    /**
     * @var integer Valid values: `1` (licensed); `0` (unlicensed).
     */
    public $IsAuthorized;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ImageID Image ID
     * @param string $ImageName Image name
     * @param string $CreateTime Creation time
     * @param integer $Size Image size
     * @param integer $HostCnt Number of associated servers
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ContainerCnt Number of associated containers
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ScanTime Last scan time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VulCnt Number of vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RiskCnt Number of risky behaviors
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SensitiveInfoCnt Number of sensitive data items
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsTrustImage Whether it is a trusted image
     * @param string $OsName Image system
     * @param string $AgentError Image scan error in the agent
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ScanError Image scan error on the backend
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Architecture System architecture
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Author Author
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BuildHistory Build history
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ScanVirusProgress Trojan scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ScanVulProgress Vulnerability scan progress
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ScanRiskProgress Sensitive data scanning progress
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ScanVirusError Trojan scan error
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ScanVulError Vulnerability scan error
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ScanRiskError Sensitive data error
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ScanStatus Image scanning status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VirusCnt Number of viruses and trojans
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Image scanning status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RemainScanTime Remaining scan time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsAuthorized Valid values: `1` (licensed); `0` (unlicensed).
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
        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("HostCnt",$param) and $param["HostCnt"] !== null) {
            $this->HostCnt = $param["HostCnt"];
        }

        if (array_key_exists("ContainerCnt",$param) and $param["ContainerCnt"] !== null) {
            $this->ContainerCnt = $param["ContainerCnt"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }

        if (array_key_exists("VulCnt",$param) and $param["VulCnt"] !== null) {
            $this->VulCnt = $param["VulCnt"];
        }

        if (array_key_exists("RiskCnt",$param) and $param["RiskCnt"] !== null) {
            $this->RiskCnt = $param["RiskCnt"];
        }

        if (array_key_exists("SensitiveInfoCnt",$param) and $param["SensitiveInfoCnt"] !== null) {
            $this->SensitiveInfoCnt = $param["SensitiveInfoCnt"];
        }

        if (array_key_exists("IsTrustImage",$param) and $param["IsTrustImage"] !== null) {
            $this->IsTrustImage = $param["IsTrustImage"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("AgentError",$param) and $param["AgentError"] !== null) {
            $this->AgentError = $param["AgentError"];
        }

        if (array_key_exists("ScanError",$param) and $param["ScanError"] !== null) {
            $this->ScanError = $param["ScanError"];
        }

        if (array_key_exists("Architecture",$param) and $param["Architecture"] !== null) {
            $this->Architecture = $param["Architecture"];
        }

        if (array_key_exists("Author",$param) and $param["Author"] !== null) {
            $this->Author = $param["Author"];
        }

        if (array_key_exists("BuildHistory",$param) and $param["BuildHistory"] !== null) {
            $this->BuildHistory = $param["BuildHistory"];
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

        if (array_key_exists("ScanVirusError",$param) and $param["ScanVirusError"] !== null) {
            $this->ScanVirusError = $param["ScanVirusError"];
        }

        if (array_key_exists("ScanVulError",$param) and $param["ScanVulError"] !== null) {
            $this->ScanVulError = $param["ScanVulError"];
        }

        if (array_key_exists("ScanRiskError",$param) and $param["ScanRiskError"] !== null) {
            $this->ScanRiskError = $param["ScanRiskError"];
        }

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
        }

        if (array_key_exists("VirusCnt",$param) and $param["VirusCnt"] !== null) {
            $this->VirusCnt = $param["VirusCnt"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RemainScanTime",$param) and $param["RemainScanTime"] !== null) {
            $this->RemainScanTime = $param["RemainScanTime"];
        }

        if (array_key_exists("IsAuthorized",$param) and $param["IsAuthorized"] !== null) {
            $this->IsAuthorized = $param["IsAuthorized"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
