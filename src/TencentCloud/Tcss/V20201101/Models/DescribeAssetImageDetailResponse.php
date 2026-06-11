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
 * DescribeAssetImageDetail response structure.
 *
 * @method string getImageID() Obtain <p>Image ID.</p>
 * @method void setImageID(string $ImageID) Set <p>Image ID.</p>
 * @method string getImageName() Obtain <p>Image name.</p>
 * @method void setImageName(string $ImageName) Set <p>Image name.</p>
 * @method string getImageDigest() Obtain <p>Image digests.</p>
 * @method void setImageDigest(string $ImageDigest) Set <p>Image digests.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method integer getSize() Obtain <p>Image size.</p>
 * @method void setSize(integer $Size) Set <p>Image size.</p>
 * @method integer getHostCnt() Obtain <p>Number of associated hosts (including normal nodes and super nodes).</p>
 * @method void setHostCnt(integer $HostCnt) Set <p>Number of associated hosts (including normal nodes and super nodes).</p>
 * @method integer getContainerCnt() Obtain <p>Number of associated containers.</p>
 * @method void setContainerCnt(integer $ContainerCnt) Set <p>Number of associated containers.</p>
 * @method integer getSuperNodeCnt() Obtain <p>Number of super nodes.</p>
 * @method void setSuperNodeCnt(integer $SuperNodeCnt) Set <p>Number of super nodes.</p>
 * @method string getScanTime() Obtain <p>Last scan time.</p>
 * @method void setScanTime(string $ScanTime) Set <p>Last scan time.</p>
 * @method integer getVulCnt() Obtain <p>Number of vulnerabilities.</p>
 * @method void setVulCnt(integer $VulCnt) Set <p>Number of vulnerabilities.</p>
 * @method integer getRiskCnt() Obtain <p>Number of risky behaviors.</p>
 * @method void setRiskCnt(integer $RiskCnt) Set <p>Number of risky behaviors.</p>
 * @method integer getSensitiveInfoCnt() Obtain <p>Number of sensitive information entries.</p>
 * @method void setSensitiveInfoCnt(integer $SensitiveInfoCnt) Set <p>Number of sensitive information entries.</p>
 * @method boolean getIsTrustImage() Obtain <p>Whether the image is trusted.</p>
 * @method void setIsTrustImage(boolean $IsTrustImage) Set <p>Whether the image is trusted.</p>
 * @method string getOsName() Obtain <p>Image OS.</p>
 * @method void setOsName(string $OsName) Set <p>Image OS.</p>
 * @method string getAgentError() Obtain <p>Agent image scan error.</p>
 * @method void setAgentError(string $AgentError) Set <p>Agent image scan error.</p>
 * @method string getScanError() Obtain <p>Backend image scan error.</p>
 * @method void setScanError(string $ScanError) Set <p>Backend image scan error.</p>
 * @method string getArchitecture() Obtain <p>System architecture.</p>
 * @method void setArchitecture(string $Architecture) Set <p>System architecture.</p>
 * @method string getAuthor() Obtain <p>Author.</p>
 * @method void setAuthor(string $Author) Set <p>Author.</p>
 * @method string getBuildHistory() Obtain <p>Build history.</p>
 * @method void setBuildHistory(string $BuildHistory) Set <p>Build history.</p>
 * @method integer getScanVirusProgress() Obtain <p>Trojan scan progress.</p>
 * @method void setScanVirusProgress(integer $ScanVirusProgress) Set <p>Trojan scan progress.</p>
 * @method integer getScanVulProgress() Obtain <p>Vulnerability scan progress.</p>
 * @method void setScanVulProgress(integer $ScanVulProgress) Set <p>Vulnerability scan progress.</p>
 * @method integer getScanRiskProgress() Obtain <p>Sensitive information scan progress.</p>
 * @method void setScanRiskProgress(integer $ScanRiskProgress) Set <p>Sensitive information scan progress.</p>
 * @method string getScanVirusError() Obtain <p>Trojan scan error.</p>
 * @method void setScanVirusError(string $ScanVirusError) Set <p>Trojan scan error.</p>
 * @method string getScanVulError() Obtain <p>Vulnerability scan error.</p>
 * @method void setScanVulError(string $ScanVulError) Set <p>Vulnerability scan error.</p>
 * @method string getScanRiskError() Obtain <p>Sensitive information error.</p>
 * @method void setScanRiskError(string $ScanRiskError) Set <p>Sensitive information error.</p>
 * @method string getScanStatus() Obtain <p>Image scan status.</p>
 * @method void setScanStatus(string $ScanStatus) Set <p>Image scan status.</p>
 * @method integer getVirusCnt() Obtain <p>Number of Trojans and viruses.</p>
 * @method void setVirusCnt(integer $VirusCnt) Set <p>Number of Trojans and viruses.</p>
 * @method integer getStatus() Obtain <p>Image scan status.</p>
 * @method void setStatus(integer $Status) Set <p>Image scan status.</p>
 * @method integer getRemainScanTime() Obtain <p>Remaining scan time.</p>
 * @method void setRemainScanTime(integer $RemainScanTime) Set <p>Remaining scan time.</p>
 * @method integer getIsAuthorized() Obtain <p>Whether authorization is performed. 1 indicates authorized and 0 indicates unauthorized.</p>
 * @method void setIsAuthorized(integer $IsAuthorized) Set <p>Whether authorization is performed. 1 indicates authorized and 0 indicates unauthorized.</p>
 * @method string getSolution() Obtain <p>Solution.</p>
 * @method void setSolution(string $Solution) Set <p>Solution.</p>
 * @method string getReason() Obtain <p>Reason.</p>
 * @method void setReason(string $Reason) Set <p>Reason.</p>
 * @method array getRepoDigests() Obtain <p>Repository digests.</p>
 * @method void setRepoDigests(array $RepoDigests) Set <p>Repository digests.</p>
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeAssetImageDetailResponse extends AbstractModel
{
    /**
     * @var string <p>Image ID.</p>
     */
    public $ImageID;

    /**
     * @var string <p>Image name.</p>
     */
    public $ImageName;

    /**
     * @var string <p>Image digests.</p>
     */
    public $ImageDigest;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>Image size.</p>
     */
    public $Size;

    /**
     * @var integer <p>Number of associated hosts (including normal nodes and super nodes).</p>
     */
    public $HostCnt;

    /**
     * @var integer <p>Number of associated containers.</p>
     */
    public $ContainerCnt;

    /**
     * @var integer <p>Number of super nodes.</p>
     */
    public $SuperNodeCnt;

    /**
     * @var string <p>Last scan time.</p>
     */
    public $ScanTime;

    /**
     * @var integer <p>Number of vulnerabilities.</p>
     */
    public $VulCnt;

    /**
     * @var integer <p>Number of risky behaviors.</p>
     */
    public $RiskCnt;

    /**
     * @var integer <p>Number of sensitive information entries.</p>
     */
    public $SensitiveInfoCnt;

    /**
     * @var boolean <p>Whether the image is trusted.</p>
     */
    public $IsTrustImage;

    /**
     * @var string <p>Image OS.</p>
     */
    public $OsName;

    /**
     * @var string <p>Agent image scan error.</p>
     */
    public $AgentError;

    /**
     * @var string <p>Backend image scan error.</p>
     */
    public $ScanError;

    /**
     * @var string <p>System architecture.</p>
     */
    public $Architecture;

    /**
     * @var string <p>Author.</p>
     */
    public $Author;

    /**
     * @var string <p>Build history.</p>
     */
    public $BuildHistory;

    /**
     * @var integer <p>Trojan scan progress.</p>
     */
    public $ScanVirusProgress;

    /**
     * @var integer <p>Vulnerability scan progress.</p>
     */
    public $ScanVulProgress;

    /**
     * @var integer <p>Sensitive information scan progress.</p>
     */
    public $ScanRiskProgress;

    /**
     * @var string <p>Trojan scan error.</p>
     */
    public $ScanVirusError;

    /**
     * @var string <p>Vulnerability scan error.</p>
     */
    public $ScanVulError;

    /**
     * @var string <p>Sensitive information error.</p>
     */
    public $ScanRiskError;

    /**
     * @var string <p>Image scan status.</p>
     */
    public $ScanStatus;

    /**
     * @var integer <p>Number of Trojans and viruses.</p>
     */
    public $VirusCnt;

    /**
     * @var integer <p>Image scan status.</p>
     */
    public $Status;

    /**
     * @var integer <p>Remaining scan time.</p>
     */
    public $RemainScanTime;

    /**
     * @var integer <p>Whether authorization is performed. 1 indicates authorized and 0 indicates unauthorized.</p>
     */
    public $IsAuthorized;

    /**
     * @var string <p>Solution.</p>
     */
    public $Solution;

    /**
     * @var string <p>Reason.</p>
     */
    public $Reason;

    /**
     * @var array <p>Repository digests.</p>
     */
    public $RepoDigests;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ImageID <p>Image ID.</p>
     * @param string $ImageName <p>Image name.</p>
     * @param string $ImageDigest <p>Image digests.</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param integer $Size <p>Image size.</p>
     * @param integer $HostCnt <p>Number of associated hosts (including normal nodes and super nodes).</p>
     * @param integer $ContainerCnt <p>Number of associated containers.</p>
     * @param integer $SuperNodeCnt <p>Number of super nodes.</p>
     * @param string $ScanTime <p>Last scan time.</p>
     * @param integer $VulCnt <p>Number of vulnerabilities.</p>
     * @param integer $RiskCnt <p>Number of risky behaviors.</p>
     * @param integer $SensitiveInfoCnt <p>Number of sensitive information entries.</p>
     * @param boolean $IsTrustImage <p>Whether the image is trusted.</p>
     * @param string $OsName <p>Image OS.</p>
     * @param string $AgentError <p>Agent image scan error.</p>
     * @param string $ScanError <p>Backend image scan error.</p>
     * @param string $Architecture <p>System architecture.</p>
     * @param string $Author <p>Author.</p>
     * @param string $BuildHistory <p>Build history.</p>
     * @param integer $ScanVirusProgress <p>Trojan scan progress.</p>
     * @param integer $ScanVulProgress <p>Vulnerability scan progress.</p>
     * @param integer $ScanRiskProgress <p>Sensitive information scan progress.</p>
     * @param string $ScanVirusError <p>Trojan scan error.</p>
     * @param string $ScanVulError <p>Vulnerability scan error.</p>
     * @param string $ScanRiskError <p>Sensitive information error.</p>
     * @param string $ScanStatus <p>Image scan status.</p>
     * @param integer $VirusCnt <p>Number of Trojans and viruses.</p>
     * @param integer $Status <p>Image scan status.</p>
     * @param integer $RemainScanTime <p>Remaining scan time.</p>
     * @param integer $IsAuthorized <p>Whether authorization is performed. 1 indicates authorized and 0 indicates unauthorized.</p>
     * @param string $Solution <p>Solution.</p>
     * @param string $Reason <p>Reason.</p>
     * @param array $RepoDigests <p>Repository digests.</p>
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

        if (array_key_exists("ImageDigest",$param) and $param["ImageDigest"] !== null) {
            $this->ImageDigest = $param["ImageDigest"];
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

        if (array_key_exists("SuperNodeCnt",$param) and $param["SuperNodeCnt"] !== null) {
            $this->SuperNodeCnt = $param["SuperNodeCnt"];
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

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("RepoDigests",$param) and $param["RepoDigests"] !== null) {
            $this->RepoDigests = $param["RepoDigests"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
