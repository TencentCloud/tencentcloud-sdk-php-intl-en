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
 * Scan task record item
 *
 * @method integer getTaskId() Obtain <p>Task primary key ID</p>
 * @method void setTaskId(integer $TaskId) Set <p>Task primary key ID</p>
 * @method string getTaskName() Obtain <p>Task name, for example, Malware_20260702_030000</p>
 * @method void setTaskName(string $TaskName) Set <p>Task name, for example, Malware_20260702_030000</p>
 * @method string getTriggerType() Obtain <p>Scan type</p><p>Enumeration values:</p><ul><li>MANNAL: Manual scan</li><li>CYCLE: Scheduled scan</li></ul>
 * @method void setTriggerType(string $TriggerType) Set <p>Scan type</p><p>Enumeration values:</p><ul><li>MANNAL: Manual scan</li><li>CYCLE: Scheduled scan</li></ul>
 * @method string getScheduleDesc() Obtain <p>Scheduled scheduling description (has a value when ScanType=1), for example, "Every day at 03:00:00"</p>
 * @method void setScheduleDesc(string $ScheduleDesc) Set <p>Scheduled scheduling description (has a value when ScanType=1), for example, "Every day at 03:00:00"</p>
 * @method string getTaskType() Obtain <p>Task asset type: 0=host scan, 1=container scan</p>
 * @method void setTaskType(string $TaskType) Set <p>Task asset type: 0=host scan, 1=container scan</p>
 * @method array getTargetAppIDs() Obtain <p>AppId list of accounts involved in scanning target</p>
 * @method void setTargetAppIDs(array $TargetAppIDs) Set <p>AppId list of accounts involved in scanning target</p>
 * @method string getAccountName() Obtain <p>Task creator account name</p>
 * @method void setAccountName(string $AccountName) Set <p>Task creator account name</p>
 * @method integer getCloudType() Obtain <p>Cloud type: 0=Tencent Cloud, 1=AWS, 2=Azure, 4=Alibaba Cloud</p>
 * @method void setCloudType(integer $CloudType) Set <p>Cloud type: 0=Tencent Cloud, 1=AWS, 2=Azure, 4=Alibaba Cloud</p>
 * @method string getAssetSelectionType() Obtain <p>Asset selection method: all=all assets, tag=select by tag, direct=direct selection</p>
 * @method void setAssetSelectionType(string $AssetSelectionType) Set <p>Asset selection method: all=all assets, tag=select by tag, direct=direct selection</p>
 * @method integer getTotalAssetCount() Obtain <p>Total number of assets scanned</p>
 * @method void setTotalAssetCount(integer $TotalAssetCount) Set <p>Total number of assets scanned</p>
 * @method integer getCreateAppID() Obtain <p>Creator account AppId (the frontend judges operation permission based on this)</p>
 * @method void setCreateAppID(integer $CreateAppID) Set <p>Creator account AppId (the frontend judges operation permission based on this)</p>
 * @method string getCreator() Obtain <p>Creator account uin</p>
 * @method void setCreator(string $Creator) Set <p>Creator account uin</p>
 * @method string getCreatorName() Obtain <p>Creator account name</p>
 * @method void setCreatorName(string $CreatorName) Set <p>Creator account name</p>
 * @method integer getCreatorCloudType() Obtain <p>Creator cloud type: 0=Tencent Cloud, 1=AWS, 2=Azure, 4=Alibaba Cloud</p>
 * @method void setCreatorCloudType(integer $CreatorCloudType) Set <p>Creator cloud type: 0=Tencent Cloud, 1=AWS, 2=Azure, 4=Alibaba Cloud</p>
 * @method string getStartTime() Obtain <p>Task start time. Format: 2006-01-02 15:04:05</p>
 * @method void setStartTime(string $StartTime) Set <p>Task start time. Format: 2006-01-02 15:04:05</p>
 * @method string getEndTime() Obtain <p>Task end time. If not ended, it is an empty string</p>
 * @method void setEndTime(string $EndTime) Set <p>Task end time. If not ended, it is an empty string</p>
 * @method string getStatus() Obtain <p>WAIT: pending scan, SCANNING: scan in progress, FINISHED: completed, FAILED: failure, CANCELED: stopped</p><p>Enumeration values:</p><ul><li>WAIT: pending scan</li><li>SCANNING: scan in progress</li><li>FINISHED: completed</li><li>FAILED: failure</li><li>CANCELED: stopped</li></ul>
 * @method void setStatus(string $Status) Set <p>WAIT: pending scan, SCANNING: scan in progress, FINISHED: completed, FAILED: failure, CANCELED: stopped</p><p>Enumeration values:</p><ul><li>WAIT: pending scan</li><li>SCANNING: scan in progress</li><li>FINISHED: completed</li><li>FAILED: failure</li><li>CANCELED: stopped</li></ul>
 */
class EDRScanRecordItem extends AbstractModel
{
    /**
     * @var integer <p>Task primary key ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>Task name, for example, Malware_20260702_030000</p>
     */
    public $TaskName;

    /**
     * @var string <p>Scan type</p><p>Enumeration values:</p><ul><li>MANNAL: Manual scan</li><li>CYCLE: Scheduled scan</li></ul>
     */
    public $TriggerType;

    /**
     * @var string <p>Scheduled scheduling description (has a value when ScanType=1), for example, "Every day at 03:00:00"</p>
     */
    public $ScheduleDesc;

    /**
     * @var string <p>Task asset type: 0=host scan, 1=container scan</p>
     */
    public $TaskType;

    /**
     * @var array <p>AppId list of accounts involved in scanning target</p>
     */
    public $TargetAppIDs;

    /**
     * @var string <p>Task creator account name</p>
     */
    public $AccountName;

    /**
     * @var integer <p>Cloud type: 0=Tencent Cloud, 1=AWS, 2=Azure, 4=Alibaba Cloud</p>
     */
    public $CloudType;

    /**
     * @var string <p>Asset selection method: all=all assets, tag=select by tag, direct=direct selection</p>
     */
    public $AssetSelectionType;

    /**
     * @var integer <p>Total number of assets scanned</p>
     */
    public $TotalAssetCount;

    /**
     * @var integer <p>Creator account AppId (the frontend judges operation permission based on this)</p>
     */
    public $CreateAppID;

    /**
     * @var string <p>Creator account uin</p>
     */
    public $Creator;

    /**
     * @var string <p>Creator account name</p>
     */
    public $CreatorName;

    /**
     * @var integer <p>Creator cloud type: 0=Tencent Cloud, 1=AWS, 2=Azure, 4=Alibaba Cloud</p>
     */
    public $CreatorCloudType;

    /**
     * @var string <p>Task start time. Format: 2006-01-02 15:04:05</p>
     */
    public $StartTime;

    /**
     * @var string <p>Task end time. If not ended, it is an empty string</p>
     */
    public $EndTime;

    /**
     * @var string <p>WAIT: pending scan, SCANNING: scan in progress, FINISHED: completed, FAILED: failure, CANCELED: stopped</p><p>Enumeration values:</p><ul><li>WAIT: pending scan</li><li>SCANNING: scan in progress</li><li>FINISHED: completed</li><li>FAILED: failure</li><li>CANCELED: stopped</li></ul>
     */
    public $Status;

    /**
     * @param integer $TaskId <p>Task primary key ID</p>
     * @param string $TaskName <p>Task name, for example, Malware_20260702_030000</p>
     * @param string $TriggerType <p>Scan type</p><p>Enumeration values:</p><ul><li>MANNAL: Manual scan</li><li>CYCLE: Scheduled scan</li></ul>
     * @param string $ScheduleDesc <p>Scheduled scheduling description (has a value when ScanType=1), for example, "Every day at 03:00:00"</p>
     * @param string $TaskType <p>Task asset type: 0=host scan, 1=container scan</p>
     * @param array $TargetAppIDs <p>AppId list of accounts involved in scanning target</p>
     * @param string $AccountName <p>Task creator account name</p>
     * @param integer $CloudType <p>Cloud type: 0=Tencent Cloud, 1=AWS, 2=Azure, 4=Alibaba Cloud</p>
     * @param string $AssetSelectionType <p>Asset selection method: all=all assets, tag=select by tag, direct=direct selection</p>
     * @param integer $TotalAssetCount <p>Total number of assets scanned</p>
     * @param integer $CreateAppID <p>Creator account AppId (the frontend judges operation permission based on this)</p>
     * @param string $Creator <p>Creator account uin</p>
     * @param string $CreatorName <p>Creator account name</p>
     * @param integer $CreatorCloudType <p>Creator cloud type: 0=Tencent Cloud, 1=AWS, 2=Azure, 4=Alibaba Cloud</p>
     * @param string $StartTime <p>Task start time. Format: 2006-01-02 15:04:05</p>
     * @param string $EndTime <p>Task end time. If not ended, it is an empty string</p>
     * @param string $Status <p>WAIT: pending scan, SCANNING: scan in progress, FINISHED: completed, FAILED: failure, CANCELED: stopped</p><p>Enumeration values:</p><ul><li>WAIT: pending scan</li><li>SCANNING: scan in progress</li><li>FINISHED: completed</li><li>FAILED: failure</li><li>CANCELED: stopped</li></ul>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("ScheduleDesc",$param) and $param["ScheduleDesc"] !== null) {
            $this->ScheduleDesc = $param["ScheduleDesc"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TargetAppIDs",$param) and $param["TargetAppIDs"] !== null) {
            $this->TargetAppIDs = $param["TargetAppIDs"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("AssetSelectionType",$param) and $param["AssetSelectionType"] !== null) {
            $this->AssetSelectionType = $param["AssetSelectionType"];
        }

        if (array_key_exists("TotalAssetCount",$param) and $param["TotalAssetCount"] !== null) {
            $this->TotalAssetCount = $param["TotalAssetCount"];
        }

        if (array_key_exists("CreateAppID",$param) and $param["CreateAppID"] !== null) {
            $this->CreateAppID = $param["CreateAppID"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreatorName",$param) and $param["CreatorName"] !== null) {
            $this->CreatorName = $param["CreatorName"];
        }

        if (array_key_exists("CreatorCloudType",$param) and $param["CreatorCloudType"] !== null) {
            $this->CreatorCloudType = $param["CreatorCloudType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
