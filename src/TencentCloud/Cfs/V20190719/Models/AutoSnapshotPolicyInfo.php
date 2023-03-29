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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Snapshot policy information
 *
 * @method string getAutoSnapshotPolicyId() Obtain Snapshot policy ID
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) Set Snapshot policy ID
 * @method string getPolicyName() Obtain Snapshot policy name
 * @method void setPolicyName(string $PolicyName) Set Snapshot policy name
 * @method string getCreationTime() Obtain Snapshot policy creation time
 * @method void setCreationTime(string $CreationTime) Set Snapshot policy creation time
 * @method integer getFileSystemNums() Obtain Number of bound file systems
 * @method void setFileSystemNums(integer $FileSystemNums) Set Number of bound file systems
 * @method string getDayOfWeek() Obtain The specific day of the week on which to create a snapshot. This parameter is mutually exclusive with `DayOfMonth` and `IntervalDays`.
 * @method void setDayOfWeek(string $DayOfWeek) Set The specific day of the week on which to create a snapshot. This parameter is mutually exclusive with `DayOfMonth` and `IntervalDays`.
 * @method string getHour() Obtain The hour of a day at which to regularly back up the snapshot
 * @method void setHour(string $Hour) Set The hour of a day at which to regularly back up the snapshot
 * @method integer getIsActivated() Obtain Whether to activate the scheduled snapshot feature
 * @method void setIsActivated(integer $IsActivated) Set Whether to activate the scheduled snapshot feature
 * @method string getNextActiveTime() Obtain Next time to trigger snapshot
 * @method void setNextActiveTime(string $NextActiveTime) Set Next time to trigger snapshot
 * @method string getStatus() Obtain Snapshot policy status
 * @method void setStatus(string $Status) Set Snapshot policy status
 * @method integer getAppId() Obtain Account ID
 * @method void setAppId(integer $AppId) Set Account ID
 * @method integer getAliveDays() Obtain Retention period
 * @method void setAliveDays(integer $AliveDays) Set Retention period
 * @method string getRegionName() Obtain Region
 * @method void setRegionName(string $RegionName) Set Region
 * @method array getFileSystems() Obtain File system information
 * @method void setFileSystems(array $FileSystems) Set File system information
 * @method string getDayOfMonth() Obtain The specific day of the month on which to create a snapshot. This parameter is mutually exclusive with `DayOfWeek` and `IntervalDays`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDayOfMonth(string $DayOfMonth) Set The specific day of the month on which to create a snapshot. This parameter is mutually exclusive with `DayOfWeek` and `IntervalDays`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIntervalDays() Obtain The snapshot interval (1 to 365 days). This parameter is mutually exclusive with `DayOfWeek` and `DayOfMonth`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIntervalDays(integer $IntervalDays) Set The snapshot interval (1 to 365 days). This parameter is mutually exclusive with `DayOfWeek` and `DayOfMonth`.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AutoSnapshotPolicyInfo extends AbstractModel
{
    /**
     * @var string Snapshot policy ID
     */
    public $AutoSnapshotPolicyId;

    /**
     * @var string Snapshot policy name
     */
    public $PolicyName;

    /**
     * @var string Snapshot policy creation time
     */
    public $CreationTime;

    /**
     * @var integer Number of bound file systems
     */
    public $FileSystemNums;

    /**
     * @var string The specific day of the week on which to create a snapshot. This parameter is mutually exclusive with `DayOfMonth` and `IntervalDays`.
     */
    public $DayOfWeek;

    /**
     * @var string The hour of a day at which to regularly back up the snapshot
     */
    public $Hour;

    /**
     * @var integer Whether to activate the scheduled snapshot feature
     */
    public $IsActivated;

    /**
     * @var string Next time to trigger snapshot
     */
    public $NextActiveTime;

    /**
     * @var string Snapshot policy status
     */
    public $Status;

    /**
     * @var integer Account ID
     */
    public $AppId;

    /**
     * @var integer Retention period
     */
    public $AliveDays;

    /**
     * @var string Region
     */
    public $RegionName;

    /**
     * @var array File system information
     */
    public $FileSystems;

    /**
     * @var string The specific day of the month on which to create a snapshot. This parameter is mutually exclusive with `DayOfWeek` and `IntervalDays`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DayOfMonth;

    /**
     * @var integer The snapshot interval (1 to 365 days). This parameter is mutually exclusive with `DayOfWeek` and `DayOfMonth`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IntervalDays;

    /**
     * @param string $AutoSnapshotPolicyId Snapshot policy ID
     * @param string $PolicyName Snapshot policy name
     * @param string $CreationTime Snapshot policy creation time
     * @param integer $FileSystemNums Number of bound file systems
     * @param string $DayOfWeek The specific day of the week on which to create a snapshot. This parameter is mutually exclusive with `DayOfMonth` and `IntervalDays`.
     * @param string $Hour The hour of a day at which to regularly back up the snapshot
     * @param integer $IsActivated Whether to activate the scheduled snapshot feature
     * @param string $NextActiveTime Next time to trigger snapshot
     * @param string $Status Snapshot policy status
     * @param integer $AppId Account ID
     * @param integer $AliveDays Retention period
     * @param string $RegionName Region
     * @param array $FileSystems File system information
     * @param string $DayOfMonth The specific day of the month on which to create a snapshot. This parameter is mutually exclusive with `DayOfWeek` and `IntervalDays`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IntervalDays The snapshot interval (1 to 365 days). This parameter is mutually exclusive with `DayOfWeek` and `DayOfMonth`.
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
        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $this->AutoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("FileSystemNums",$param) and $param["FileSystemNums"] !== null) {
            $this->FileSystemNums = $param["FileSystemNums"];
        }

        if (array_key_exists("DayOfWeek",$param) and $param["DayOfWeek"] !== null) {
            $this->DayOfWeek = $param["DayOfWeek"];
        }

        if (array_key_exists("Hour",$param) and $param["Hour"] !== null) {
            $this->Hour = $param["Hour"];
        }

        if (array_key_exists("IsActivated",$param) and $param["IsActivated"] !== null) {
            $this->IsActivated = $param["IsActivated"];
        }

        if (array_key_exists("NextActiveTime",$param) and $param["NextActiveTime"] !== null) {
            $this->NextActiveTime = $param["NextActiveTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AliveDays",$param) and $param["AliveDays"] !== null) {
            $this->AliveDays = $param["AliveDays"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("FileSystems",$param) and $param["FileSystems"] !== null) {
            $this->FileSystems = [];
            foreach ($param["FileSystems"] as $key => $value){
                $obj = new FileSystemByPolicy();
                $obj->deserialize($value);
                array_push($this->FileSystems, $obj);
            }
        }

        if (array_key_exists("DayOfMonth",$param) and $param["DayOfMonth"] !== null) {
            $this->DayOfMonth = $param["DayOfMonth"];
        }

        if (array_key_exists("IntervalDays",$param) and $param["IntervalDays"] !== null) {
            $this->IntervalDays = $param["IntervalDays"];
        }
    }
}
