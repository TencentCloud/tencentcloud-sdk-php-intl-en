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
 * Image repository scan task information
 *
 * @method integer getId() Obtain <p>Task ID.</p>
 * @method void setId(integer $Id) Set <p>Task ID.</p>
 * @method integer getTimedScanConfigId() Obtain <p>Scheduled scan task id.</p>
 * @method void setTimedScanConfigId(integer $TimedScanConfigId) Set <p>Scheduled scan task id.</p>
 * @method array getAutoMatchMode() Obtain <p>Automatic matching mode</p><p>Enumeration values:</p><ul><li>BY_CLUSTER: Select by cluster</li><li>LATEST_VERSION: Scan the latest version image only</li><li>LOCAL_IMAGE: Local image</li></ul>
 * @method void setAutoMatchMode(array $AutoMatchMode) Set <p>Automatic matching mode</p><p>Enumeration values:</p><ul><li>BY_CLUSTER: Select by cluster</li><li>LATEST_VERSION: Scan the latest version image only</li><li>LOCAL_IMAGE: Local image</li></ul>
 * @method string getScopeMode() Obtain <p>Scan asset mode</p><p>Enumeration values:</p><ul><li>ALL: All</li><li>MANUAL: Manual selection</li><li>AUTO_MATCH: Automatic matching</li></ul>
 * @method void setScopeMode(string $ScopeMode) Set <p>Scan asset mode</p><p>Enumeration values:</p><ul><li>ALL: All</li><li>MANUAL: Manual selection</li><li>AUTO_MATCH: Automatic matching</li></ul>
 * @method string getTriggerType() Obtain <p>Task trigger type</p><p>Enumeration values:</p><ul><li>TIMED: scheduled task</li><li>MANUAL: manual triggering</li></ul>
 * @method void setTriggerType(string $TriggerType) Set <p>Task trigger type</p><p>Enumeration values:</p><ul><li>TIMED: scheduled task</li><li>MANUAL: manual triggering</li></ul>
 * @method array getScanType() Obtain <p>Scan category</p><p>Enumeration values:</p><ul><li>CVE: vulnerability</li><li>RISK: risk</li><li>VIRUS: Trojan</li></ul>
 * @method void setScanType(array $ScanType) Set <p>Scan category</p><p>Enumeration values:</p><ul><li>CVE: vulnerability</li><li>RISK: risk</li><li>VIRUS: Trojan</li></ul>
 * @method array getImageIds() Obtain <p>Image id scanned</p>
 * @method void setImageIds(array $ImageIds) Set <p>Image id scanned</p>
 * @method string getStatus() Obtain <p>Task status</p><p>Enumeration values:</p><ul><li>RUNNING: Executing</li><li>SUCCESS: Task successful</li><li>TIMEOUT: Task timeout</li><li>FAILED: Task failure</li><li>CANCELLED: Canceled</li></ul>
 * @method void setStatus(string $Status) Set <p>Task status</p><p>Enumeration values:</p><ul><li>RUNNING: Executing</li><li>SUCCESS: Task successful</li><li>TIMEOUT: Task timeout</li><li>FAILED: Task failure</li><li>CANCELLED: Canceled</li></ul>
 * @method string getOwnerAccountName() Obtain <p>Scheduled task associated account name</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) Set <p>Scheduled task associated account name</p>
 * @method integer getOwnerAppId() Obtain <p>appid of the account associated with the scheduled task</p>
 * @method void setOwnerAppId(integer $OwnerAppId) Set <p>appid of the account associated with the scheduled task</p>
 * @method string getOwnerUin() Obtain <p>uin of the associated account for the scheduled task</p>
 * @method void setOwnerUin(string $OwnerUin) Set <p>uin of the associated account for the scheduled task</p>
 * @method integer getScanImageCount() Obtain <p>Scan image count</p>
 * @method void setScanImageCount(integer $ScanImageCount) Set <p>Scan image count</p>
 * @method integer getSuccessImageCount() Obtain <p>Image count scanned successfully</p>
 * @method void setSuccessImageCount(integer $SuccessImageCount) Set <p>Image count scanned successfully</p>
 * @method integer getFailureImageCount() Obtain <p>Image count of scan failure</p>
 * @method void setFailureImageCount(integer $FailureImageCount) Set <p>Image count of scan failure</p>
 * @method integer getIgnoredImageCount() Obtain <p>Number of images ignored by the task</p>
 * @method void setIgnoredImageCount(integer $IgnoredImageCount) Set <p>Number of images ignored by the task</p>
 * @method integer getCancelledImageCount() Obtain <p>Task cancelled image count</p>
 * @method void setCancelledImageCount(integer $CancelledImageCount) Set <p>Task cancelled image count</p>
 * @method string getScanStartTime() Obtain <p>Scan start time</p><p>Parameter format: hh:mm</p>
 * @method void setScanStartTime(string $ScanStartTime) Set <p>Scan start time</p><p>Parameter format: hh:mm</p>
 * @method string getScanEndTime() Obtain <p>Scan stop time</p><p>Parameter format: hh:mm</p>
 * @method void setScanEndTime(string $ScanEndTime) Set <p>Scan stop time</p><p>Parameter format: hh:mm</p>
 * @method integer getTimeout() Obtain <p>Timeout period, in seconds</p>
 * @method void setTimeout(integer $Timeout) Set <p>Timeout period, in seconds</p>
 * @method string getCancelReason() Obtain <p>Task cancellation reason</p>
 * @method void setCancelReason(string $CancelReason) Set <p>Task cancellation reason</p>
 * @method string getName() Obtain <p>Task name</p>
 * @method void setName(string $Name) Set <p>Task name</p>
 * @method ImageScanScheduleConfig getSchedule() Obtain <p>Scan task scheduling configuration</p>
 * @method void setSchedule(ImageScanScheduleConfig $Schedule) Set <p>Scan task scheduling configuration</p>
 * @method ImageScanAssetTarget getTarget() Obtain <p>Scan task target</p>
 * @method void setTarget(ImageScanAssetTarget $Target) Set <p>Scan task target</p>
 * @method ImageScanRegistryFilter getFilter() Obtain <p>Scan task filtering configuration</p>
 * @method void setFilter(ImageScanRegistryFilter $Filter) Set <p>Scan task filtering configuration</p>
 */
class ImageRegistryScanTaskInfo extends AbstractModel
{
    /**
     * @var integer <p>Task ID.</p>
     */
    public $Id;

    /**
     * @var integer <p>Scheduled scan task id.</p>
     */
    public $TimedScanConfigId;

    /**
     * @var array <p>Automatic matching mode</p><p>Enumeration values:</p><ul><li>BY_CLUSTER: Select by cluster</li><li>LATEST_VERSION: Scan the latest version image only</li><li>LOCAL_IMAGE: Local image</li></ul>
     */
    public $AutoMatchMode;

    /**
     * @var string <p>Scan asset mode</p><p>Enumeration values:</p><ul><li>ALL: All</li><li>MANUAL: Manual selection</li><li>AUTO_MATCH: Automatic matching</li></ul>
     */
    public $ScopeMode;

    /**
     * @var string <p>Task trigger type</p><p>Enumeration values:</p><ul><li>TIMED: scheduled task</li><li>MANUAL: manual triggering</li></ul>
     */
    public $TriggerType;

    /**
     * @var array <p>Scan category</p><p>Enumeration values:</p><ul><li>CVE: vulnerability</li><li>RISK: risk</li><li>VIRUS: Trojan</li></ul>
     */
    public $ScanType;

    /**
     * @var array <p>Image id scanned</p>
     */
    public $ImageIds;

    /**
     * @var string <p>Task status</p><p>Enumeration values:</p><ul><li>RUNNING: Executing</li><li>SUCCESS: Task successful</li><li>TIMEOUT: Task timeout</li><li>FAILED: Task failure</li><li>CANCELLED: Canceled</li></ul>
     */
    public $Status;

    /**
     * @var string <p>Scheduled task associated account name</p>
     */
    public $OwnerAccountName;

    /**
     * @var integer <p>appid of the account associated with the scheduled task</p>
     */
    public $OwnerAppId;

    /**
     * @var string <p>uin of the associated account for the scheduled task</p>
     */
    public $OwnerUin;

    /**
     * @var integer <p>Scan image count</p>
     */
    public $ScanImageCount;

    /**
     * @var integer <p>Image count scanned successfully</p>
     */
    public $SuccessImageCount;

    /**
     * @var integer <p>Image count of scan failure</p>
     */
    public $FailureImageCount;

    /**
     * @var integer <p>Number of images ignored by the task</p>
     */
    public $IgnoredImageCount;

    /**
     * @var integer <p>Task cancelled image count</p>
     */
    public $CancelledImageCount;

    /**
     * @var string <p>Scan start time</p><p>Parameter format: hh:mm</p>
     */
    public $ScanStartTime;

    /**
     * @var string <p>Scan stop time</p><p>Parameter format: hh:mm</p>
     */
    public $ScanEndTime;

    /**
     * @var integer <p>Timeout period, in seconds</p>
     */
    public $Timeout;

    /**
     * @var string <p>Task cancellation reason</p>
     */
    public $CancelReason;

    /**
     * @var string <p>Task name</p>
     */
    public $Name;

    /**
     * @var ImageScanScheduleConfig <p>Scan task scheduling configuration</p>
     */
    public $Schedule;

    /**
     * @var ImageScanAssetTarget <p>Scan task target</p>
     */
    public $Target;

    /**
     * @var ImageScanRegistryFilter <p>Scan task filtering configuration</p>
     */
    public $Filter;

    /**
     * @param integer $Id <p>Task ID.</p>
     * @param integer $TimedScanConfigId <p>Scheduled scan task id.</p>
     * @param array $AutoMatchMode <p>Automatic matching mode</p><p>Enumeration values:</p><ul><li>BY_CLUSTER: Select by cluster</li><li>LATEST_VERSION: Scan the latest version image only</li><li>LOCAL_IMAGE: Local image</li></ul>
     * @param string $ScopeMode <p>Scan asset mode</p><p>Enumeration values:</p><ul><li>ALL: All</li><li>MANUAL: Manual selection</li><li>AUTO_MATCH: Automatic matching</li></ul>
     * @param string $TriggerType <p>Task trigger type</p><p>Enumeration values:</p><ul><li>TIMED: scheduled task</li><li>MANUAL: manual triggering</li></ul>
     * @param array $ScanType <p>Scan category</p><p>Enumeration values:</p><ul><li>CVE: vulnerability</li><li>RISK: risk</li><li>VIRUS: Trojan</li></ul>
     * @param array $ImageIds <p>Image id scanned</p>
     * @param string $Status <p>Task status</p><p>Enumeration values:</p><ul><li>RUNNING: Executing</li><li>SUCCESS: Task successful</li><li>TIMEOUT: Task timeout</li><li>FAILED: Task failure</li><li>CANCELLED: Canceled</li></ul>
     * @param string $OwnerAccountName <p>Scheduled task associated account name</p>
     * @param integer $OwnerAppId <p>appid of the account associated with the scheduled task</p>
     * @param string $OwnerUin <p>uin of the associated account for the scheduled task</p>
     * @param integer $ScanImageCount <p>Scan image count</p>
     * @param integer $SuccessImageCount <p>Image count scanned successfully</p>
     * @param integer $FailureImageCount <p>Image count of scan failure</p>
     * @param integer $IgnoredImageCount <p>Number of images ignored by the task</p>
     * @param integer $CancelledImageCount <p>Task cancelled image count</p>
     * @param string $ScanStartTime <p>Scan start time</p><p>Parameter format: hh:mm</p>
     * @param string $ScanEndTime <p>Scan stop time</p><p>Parameter format: hh:mm</p>
     * @param integer $Timeout <p>Timeout period, in seconds</p>
     * @param string $CancelReason <p>Task cancellation reason</p>
     * @param string $Name <p>Task name</p>
     * @param ImageScanScheduleConfig $Schedule <p>Scan task scheduling configuration</p>
     * @param ImageScanAssetTarget $Target <p>Scan task target</p>
     * @param ImageScanRegistryFilter $Filter <p>Scan task filtering configuration</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TimedScanConfigId",$param) and $param["TimedScanConfigId"] !== null) {
            $this->TimedScanConfigId = $param["TimedScanConfigId"];
        }

        if (array_key_exists("AutoMatchMode",$param) and $param["AutoMatchMode"] !== null) {
            $this->AutoMatchMode = $param["AutoMatchMode"];
        }

        if (array_key_exists("ScopeMode",$param) and $param["ScopeMode"] !== null) {
            $this->ScopeMode = $param["ScopeMode"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }

        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("ScanImageCount",$param) and $param["ScanImageCount"] !== null) {
            $this->ScanImageCount = $param["ScanImageCount"];
        }

        if (array_key_exists("SuccessImageCount",$param) and $param["SuccessImageCount"] !== null) {
            $this->SuccessImageCount = $param["SuccessImageCount"];
        }

        if (array_key_exists("FailureImageCount",$param) and $param["FailureImageCount"] !== null) {
            $this->FailureImageCount = $param["FailureImageCount"];
        }

        if (array_key_exists("IgnoredImageCount",$param) and $param["IgnoredImageCount"] !== null) {
            $this->IgnoredImageCount = $param["IgnoredImageCount"];
        }

        if (array_key_exists("CancelledImageCount",$param) and $param["CancelledImageCount"] !== null) {
            $this->CancelledImageCount = $param["CancelledImageCount"];
        }

        if (array_key_exists("ScanStartTime",$param) and $param["ScanStartTime"] !== null) {
            $this->ScanStartTime = $param["ScanStartTime"];
        }

        if (array_key_exists("ScanEndTime",$param) and $param["ScanEndTime"] !== null) {
            $this->ScanEndTime = $param["ScanEndTime"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("CancelReason",$param) and $param["CancelReason"] !== null) {
            $this->CancelReason = $param["CancelReason"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Schedule",$param) and $param["Schedule"] !== null) {
            $this->Schedule = new ImageScanScheduleConfig();
            $this->Schedule->deserialize($param["Schedule"]);
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = new ImageScanAssetTarget();
            $this->Target->deserialize($param["Target"]);
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new ImageScanRegistryFilter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}
