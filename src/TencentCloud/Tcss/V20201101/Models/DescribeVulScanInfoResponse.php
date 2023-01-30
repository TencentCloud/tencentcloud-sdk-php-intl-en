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
 * DescribeVulScanInfo response structure.
 *
 * @method integer getLocalImageScanCount() Obtain Total number of local images scanned this time
 * @method void setLocalImageScanCount(integer $LocalImageScanCount) Set Total number of local images scanned this time
 * @method integer getIgnoreVulCount() Obtain Number of ignored vulnerabilities
 * @method void setIgnoreVulCount(integer $IgnoreVulCount) Set Number of ignored vulnerabilities
 * @method string getScanStartTime() Obtain Start time of the vulnerability scan
 * @method void setScanStartTime(string $ScanStartTime) Set Start time of the vulnerability scan
 * @method string getScanEndTime() Obtain End time of the vulnerability scan
 * @method void setScanEndTime(string $ScanEndTime) Set End time of the vulnerability scan
 * @method integer getFoundRiskImageCount() Obtain Number of images found to be at risk
 * @method void setFoundRiskImageCount(integer $FoundRiskImageCount) Set Number of images found to be at risk
 * @method integer getFoundVulCount() Obtain Number of vulnerabilities found in local images
 * @method void setFoundVulCount(integer $FoundVulCount) Set Number of vulnerabilities found in local images
 * @method float getScanProgress() Obtain Scanning progress
 * @method void setScanProgress(float $ScanProgress) Set Scanning progress
 * @method integer getRegistryImageScanCount() Obtain Total number of repository images scanned this time
 * @method void setRegistryImageScanCount(integer $RegistryImageScanCount) Set Total number of repository images scanned this time
 * @method integer getLocalTaskID() Obtain ID of the last task to scan local images for vulnerabilities
 * @method void setLocalTaskID(integer $LocalTaskID) Set ID of the last task to scan local images for vulnerabilities
 * @method string getStatus() Obtain Scanning status. Valid values: `NOT_SCAN` (not scanned); `SCANNING` (scanning); `SCANNED` (scanned); `CANCELED` (stopped).
 * @method void setStatus(string $Status) Set Scanning status. Valid values: `NOT_SCAN` (not scanned); `SCANNING` (scanning); `SCANNED` (scanned); `CANCELED` (stopped).
 * @method float getRemainingTime() Obtain Remaining time in seconds
 * @method void setRemainingTime(float $RemainingTime) Set Remaining time in seconds
 * @method integer getRegistryTaskID() Obtain ID of the last task to scan repository images for vulnerabilities
 * @method void setRegistryTaskID(integer $RegistryTaskID) Set ID of the last task to scan repository images for vulnerabilities
 * @method integer getRegistryFoundVulCount() Obtain Number of vulnerabilities found in the repository
 * @method void setRegistryFoundVulCount(integer $RegistryFoundVulCount) Set Number of vulnerabilities found in the repository
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeVulScanInfoResponse extends AbstractModel
{
    /**
     * @var integer Total number of local images scanned this time
     */
    public $LocalImageScanCount;

    /**
     * @var integer Number of ignored vulnerabilities
     */
    public $IgnoreVulCount;

    /**
     * @var string Start time of the vulnerability scan
     */
    public $ScanStartTime;

    /**
     * @var string End time of the vulnerability scan
     */
    public $ScanEndTime;

    /**
     * @var integer Number of images found to be at risk
     */
    public $FoundRiskImageCount;

    /**
     * @var integer Number of vulnerabilities found in local images
     */
    public $FoundVulCount;

    /**
     * @var float Scanning progress
     */
    public $ScanProgress;

    /**
     * @var integer Total number of repository images scanned this time
     */
    public $RegistryImageScanCount;

    /**
     * @var integer ID of the last task to scan local images for vulnerabilities
     */
    public $LocalTaskID;

    /**
     * @var string Scanning status. Valid values: `NOT_SCAN` (not scanned); `SCANNING` (scanning); `SCANNED` (scanned); `CANCELED` (stopped).
     */
    public $Status;

    /**
     * @var float Remaining time in seconds
     */
    public $RemainingTime;

    /**
     * @var integer ID of the last task to scan repository images for vulnerabilities
     */
    public $RegistryTaskID;

    /**
     * @var integer Number of vulnerabilities found in the repository
     */
    public $RegistryFoundVulCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $LocalImageScanCount Total number of local images scanned this time
     * @param integer $IgnoreVulCount Number of ignored vulnerabilities
     * @param string $ScanStartTime Start time of the vulnerability scan
     * @param string $ScanEndTime End time of the vulnerability scan
     * @param integer $FoundRiskImageCount Number of images found to be at risk
     * @param integer $FoundVulCount Number of vulnerabilities found in local images
     * @param float $ScanProgress Scanning progress
     * @param integer $RegistryImageScanCount Total number of repository images scanned this time
     * @param integer $LocalTaskID ID of the last task to scan local images for vulnerabilities
     * @param string $Status Scanning status. Valid values: `NOT_SCAN` (not scanned); `SCANNING` (scanning); `SCANNED` (scanned); `CANCELED` (stopped).
     * @param float $RemainingTime Remaining time in seconds
     * @param integer $RegistryTaskID ID of the last task to scan repository images for vulnerabilities
     * @param integer $RegistryFoundVulCount Number of vulnerabilities found in the repository
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("LocalImageScanCount",$param) and $param["LocalImageScanCount"] !== null) {
            $this->LocalImageScanCount = $param["LocalImageScanCount"];
        }

        if (array_key_exists("IgnoreVulCount",$param) and $param["IgnoreVulCount"] !== null) {
            $this->IgnoreVulCount = $param["IgnoreVulCount"];
        }

        if (array_key_exists("ScanStartTime",$param) and $param["ScanStartTime"] !== null) {
            $this->ScanStartTime = $param["ScanStartTime"];
        }

        if (array_key_exists("ScanEndTime",$param) and $param["ScanEndTime"] !== null) {
            $this->ScanEndTime = $param["ScanEndTime"];
        }

        if (array_key_exists("FoundRiskImageCount",$param) and $param["FoundRiskImageCount"] !== null) {
            $this->FoundRiskImageCount = $param["FoundRiskImageCount"];
        }

        if (array_key_exists("FoundVulCount",$param) and $param["FoundVulCount"] !== null) {
            $this->FoundVulCount = $param["FoundVulCount"];
        }

        if (array_key_exists("ScanProgress",$param) and $param["ScanProgress"] !== null) {
            $this->ScanProgress = $param["ScanProgress"];
        }

        if (array_key_exists("RegistryImageScanCount",$param) and $param["RegistryImageScanCount"] !== null) {
            $this->RegistryImageScanCount = $param["RegistryImageScanCount"];
        }

        if (array_key_exists("LocalTaskID",$param) and $param["LocalTaskID"] !== null) {
            $this->LocalTaskID = $param["LocalTaskID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RemainingTime",$param) and $param["RemainingTime"] !== null) {
            $this->RemainingTime = $param["RemainingTime"];
        }

        if (array_key_exists("RegistryTaskID",$param) and $param["RegistryTaskID"] !== null) {
            $this->RegistryTaskID = $param["RegistryTaskID"];
        }

        if (array_key_exists("RegistryFoundVulCount",$param) and $param["RegistryFoundVulCount"] !== null) {
            $this->RegistryFoundVulCount = $param["RegistryFoundVulCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
