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
 * DescribeVirusScanTaskStatus response structure.
 *
 * @method integer getContainerTotal() Obtain Number of scanned containers
 * @method void setContainerTotal(integer $ContainerTotal) Set Number of scanned containers
 * @method integer getRiskContainerCnt() Obtain Number of containers at risk
 * @method void setRiskContainerCnt(integer $RiskContainerCnt) Set Number of containers at risk
 * @method string getStatus() Obtain Scan task status:
`SCAN_NONE`: None. 
`SCAN_SCANNING`: Scanning.
`SCAN_FINISH`: Scanned. 
`SCAN_TIMEOUT`: Scan timed out.
`SCAN_CANCELING`: Canceling.
`SCAN_CANCELED`: Canceled.
 * @method void setStatus(string $Status) Set Scan task status:
`SCAN_NONE`: None. 
`SCAN_SCANNING`: Scanning.
`SCAN_FINISH`: Scanned. 
`SCAN_TIMEOUT`: Scan timed out.
`SCAN_CANCELING`: Canceling.
`SCAN_CANCELED`: Canceled.
 * @method integer getSchedule() Obtain Scanning progress
 * @method void setSchedule(integer $Schedule) Set Scanning progress
 * @method integer getContainerScanCnt() Obtain Number of scanned containers
 * @method void setContainerScanCnt(integer $ContainerScanCnt) Set Number of scanned containers
 * @method integer getRiskCnt() Obtain Number of risks
 * @method void setRiskCnt(integer $RiskCnt) Set Number of risks
 * @method integer getLeftSeconds() Obtain Remaining scan time
 * @method void setLeftSeconds(integer $LeftSeconds) Set Remaining scan time
 * @method string getStartTime() Obtain Scan start time
 * @method void setStartTime(string $StartTime) Set Scan start time
 * @method string getEndTime() Obtain Scan end time
 * @method void setEndTime(string $EndTime) Set Scan end time
 * @method string getScanType() Obtain Scan type. Valid values: `CYCLE` (periodic scan); `MANUAL` (manual scan).
 * @method void setScanType(string $ScanType) Set Scan type. Valid values: `CYCLE` (periodic scan); `MANUAL` (manual scan).
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeVirusScanTaskStatusResponse extends AbstractModel
{
    /**
     * @var integer Number of scanned containers
     */
    public $ContainerTotal;

    /**
     * @var integer Number of containers at risk
     */
    public $RiskContainerCnt;

    /**
     * @var string Scan task status:
`SCAN_NONE`: None. 
`SCAN_SCANNING`: Scanning.
`SCAN_FINISH`: Scanned. 
`SCAN_TIMEOUT`: Scan timed out.
`SCAN_CANCELING`: Canceling.
`SCAN_CANCELED`: Canceled.
     */
    public $Status;

    /**
     * @var integer Scanning progress
     */
    public $Schedule;

    /**
     * @var integer Number of scanned containers
     */
    public $ContainerScanCnt;

    /**
     * @var integer Number of risks
     */
    public $RiskCnt;

    /**
     * @var integer Remaining scan time
     */
    public $LeftSeconds;

    /**
     * @var string Scan start time
     */
    public $StartTime;

    /**
     * @var string Scan end time
     */
    public $EndTime;

    /**
     * @var string Scan type. Valid values: `CYCLE` (periodic scan); `MANUAL` (manual scan).
     */
    public $ScanType;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $ContainerTotal Number of scanned containers
     * @param integer $RiskContainerCnt Number of containers at risk
     * @param string $Status Scan task status:
`SCAN_NONE`: None. 
`SCAN_SCANNING`: Scanning.
`SCAN_FINISH`: Scanned. 
`SCAN_TIMEOUT`: Scan timed out.
`SCAN_CANCELING`: Canceling.
`SCAN_CANCELED`: Canceled.
     * @param integer $Schedule Scanning progress
     * @param integer $ContainerScanCnt Number of scanned containers
     * @param integer $RiskCnt Number of risks
     * @param integer $LeftSeconds Remaining scan time
     * @param string $StartTime Scan start time
     * @param string $EndTime Scan end time
     * @param string $ScanType Scan type. Valid values: `CYCLE` (periodic scan); `MANUAL` (manual scan).
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
        if (array_key_exists("ContainerTotal",$param) and $param["ContainerTotal"] !== null) {
            $this->ContainerTotal = $param["ContainerTotal"];
        }

        if (array_key_exists("RiskContainerCnt",$param) and $param["RiskContainerCnt"] !== null) {
            $this->RiskContainerCnt = $param["RiskContainerCnt"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Schedule",$param) and $param["Schedule"] !== null) {
            $this->Schedule = $param["Schedule"];
        }

        if (array_key_exists("ContainerScanCnt",$param) and $param["ContainerScanCnt"] !== null) {
            $this->ContainerScanCnt = $param["ContainerScanCnt"];
        }

        if (array_key_exists("RiskCnt",$param) and $param["RiskCnt"] !== null) {
            $this->RiskCnt = $param["RiskCnt"];
        }

        if (array_key_exists("LeftSeconds",$param) and $param["LeftSeconds"] !== null) {
            $this->LeftSeconds = $param["LeftSeconds"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
