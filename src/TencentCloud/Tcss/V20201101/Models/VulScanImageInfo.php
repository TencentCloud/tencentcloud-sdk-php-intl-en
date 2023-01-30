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
 * Information of the scanned image
 *
 * @method string getImageID() Obtain Image ID
 * @method void setImageID(string $ImageID) Set Image ID
 * @method string getImageName() Obtain Image name
 * @method void setImageName(string $ImageName) Set Image name
 * @method float getSize() Obtain Image size
 * @method void setSize(float $Size) Set Image size
 * @method string getScanStatus() Obtain Task status. Valid values: `SCANNING` (scanning); `FAILED` (failed); `FINISHED` (completed); `CANCELED` (canceled).
 * @method void setScanStatus(string $ScanStatus) Set Task status. Valid values: `SCANNING` (scanning); `FAILED` (failed); `FINISHED` (completed); `CANCELED` (canceled).
 * @method float getScanDuration() Obtain Scan duration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanDuration(float $ScanDuration) Set Scan duration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHighLevelVulCount() Obtain Number of high-risk vulnerabilities
 * @method void setHighLevelVulCount(integer $HighLevelVulCount) Set Number of high-risk vulnerabilities
 * @method integer getMediumLevelVulCount() Obtain Number of medium-risk vulnerabilities
 * @method void setMediumLevelVulCount(integer $MediumLevelVulCount) Set Number of medium-risk vulnerabilities
 * @method integer getLowLevelVulCount() Obtain Number of low-risk vulnerabilities
 * @method void setLowLevelVulCount(integer $LowLevelVulCount) Set Number of low-risk vulnerabilities
 * @method integer getCriticalLevelVulCount() Obtain Number of critical vulnerabilities
 * @method void setCriticalLevelVulCount(integer $CriticalLevelVulCount) Set Number of critical vulnerabilities
 * @method integer getTaskID() Obtain ID of the task to scan local images for vulnerabilities
 * @method void setTaskID(integer $TaskID) Set ID of the task to scan local images for vulnerabilities
 * @method string getScanStartTime() Obtain Start time of the vulnerability scan
 * @method void setScanStartTime(string $ScanStartTime) Set Start time of the vulnerability scan
 * @method string getScanEndTime() Obtain End time of the vulnerability scan
 * @method void setScanEndTime(string $ScanEndTime) Set End time of the vulnerability scan
 * @method string getErrorStatus() Obtain Cause of the failure. Valid values: `TIMEOUT` (timeout); `TOO_MANY` (too many tasks); `OFFLINE` (offline).
 * @method void setErrorStatus(string $ErrorStatus) Set Cause of the failure. Valid values: `TIMEOUT` (timeout); `TOO_MANY` (too many tasks); `OFFLINE` (offline).
 */
class VulScanImageInfo extends AbstractModel
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
     * @var float Image size
     */
    public $Size;

    /**
     * @var string Task status. Valid values: `SCANNING` (scanning); `FAILED` (failed); `FINISHED` (completed); `CANCELED` (canceled).
     */
    public $ScanStatus;

    /**
     * @var float Scan duration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanDuration;

    /**
     * @var integer Number of high-risk vulnerabilities
     */
    public $HighLevelVulCount;

    /**
     * @var integer Number of medium-risk vulnerabilities
     */
    public $MediumLevelVulCount;

    /**
     * @var integer Number of low-risk vulnerabilities
     */
    public $LowLevelVulCount;

    /**
     * @var integer Number of critical vulnerabilities
     */
    public $CriticalLevelVulCount;

    /**
     * @var integer ID of the task to scan local images for vulnerabilities
     */
    public $TaskID;

    /**
     * @var string Start time of the vulnerability scan
     */
    public $ScanStartTime;

    /**
     * @var string End time of the vulnerability scan
     */
    public $ScanEndTime;

    /**
     * @var string Cause of the failure. Valid values: `TIMEOUT` (timeout); `TOO_MANY` (too many tasks); `OFFLINE` (offline).
     */
    public $ErrorStatus;

    /**
     * @param string $ImageID Image ID
     * @param string $ImageName Image name
     * @param float $Size Image size
     * @param string $ScanStatus Task status. Valid values: `SCANNING` (scanning); `FAILED` (failed); `FINISHED` (completed); `CANCELED` (canceled).
     * @param float $ScanDuration Scan duration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $HighLevelVulCount Number of high-risk vulnerabilities
     * @param integer $MediumLevelVulCount Number of medium-risk vulnerabilities
     * @param integer $LowLevelVulCount Number of low-risk vulnerabilities
     * @param integer $CriticalLevelVulCount Number of critical vulnerabilities
     * @param integer $TaskID ID of the task to scan local images for vulnerabilities
     * @param string $ScanStartTime Start time of the vulnerability scan
     * @param string $ScanEndTime End time of the vulnerability scan
     * @param string $ErrorStatus Cause of the failure. Valid values: `TIMEOUT` (timeout); `TOO_MANY` (too many tasks); `OFFLINE` (offline).
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

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
        }

        if (array_key_exists("ScanDuration",$param) and $param["ScanDuration"] !== null) {
            $this->ScanDuration = $param["ScanDuration"];
        }

        if (array_key_exists("HighLevelVulCount",$param) and $param["HighLevelVulCount"] !== null) {
            $this->HighLevelVulCount = $param["HighLevelVulCount"];
        }

        if (array_key_exists("MediumLevelVulCount",$param) and $param["MediumLevelVulCount"] !== null) {
            $this->MediumLevelVulCount = $param["MediumLevelVulCount"];
        }

        if (array_key_exists("LowLevelVulCount",$param) and $param["LowLevelVulCount"] !== null) {
            $this->LowLevelVulCount = $param["LowLevelVulCount"];
        }

        if (array_key_exists("CriticalLevelVulCount",$param) and $param["CriticalLevelVulCount"] !== null) {
            $this->CriticalLevelVulCount = $param["CriticalLevelVulCount"];
        }

        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }

        if (array_key_exists("ScanStartTime",$param) and $param["ScanStartTime"] !== null) {
            $this->ScanStartTime = $param["ScanStartTime"];
        }

        if (array_key_exists("ScanEndTime",$param) and $param["ScanEndTime"] !== null) {
            $this->ScanEndTime = $param["ScanEndTime"];
        }

        if (array_key_exists("ErrorStatus",$param) and $param["ErrorStatus"] !== null) {
            $this->ErrorStatus = $param["ErrorStatus"];
        }
    }
}
