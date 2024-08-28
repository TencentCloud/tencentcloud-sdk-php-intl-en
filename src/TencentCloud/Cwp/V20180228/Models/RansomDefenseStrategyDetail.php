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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The TagList node in the data HostList corresponding to the host list query API
 *
 * @method integer getId() Obtain Policy ID
 * @method void setId(integer $Id) Set Policy ID
 * @method string getUin() Obtain Operating UIN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUin(string $Uin) Set Operating UIN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Policy name
 * @method void setName(string $Name) Set Policy name
 * @method string getDescription() Obtain Policy Remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Policy Remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Enabling Status: 0 Disabled, 1 Enabled.
 * @method void setStatus(integer $Status) Set Enabling Status: 0 Disabled, 1 Enabled.
 * @method integer getIsAll() Obtain Whether it takes effect for all hosts.
 * @method void setIsAll(integer $IsAll) Set Whether it takes effect for all hosts.
 * @method string getIncludeDir() Obtain Includes directories, separated by semicolons (;).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIncludeDir(string $IncludeDir) Set Includes directories, separated by semicolons (;).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExcludeDir() Obtain Includes directories, separated by semicolons (;).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExcludeDir(string $ExcludeDir) Set Includes directories, separated by semicolons (;).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBackupType() Obtain Backup pattern: 0 weekly, 1 daily.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupType(integer $BackupType) Set Backup pattern: 0 weekly, 1 daily.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWeekday() Obtain Backup days in a week (1-7): 1; 2; 3; 4.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWeekday(string $Weekday) Set Backup days in a week (1-7): 1; 2; 3; 4.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHour() Obtain Backup Execution Time Point (0-23): 11:00; 12:00
 * @method void setHour(string $Hour) Set Backup Execution Time Point (0-23): 11:00; 12:00
 * @method integer getSaveDay() Obtain Storage Days, 0 for Permanent
 * @method void setSaveDay(integer $SaveDay) Set Storage Days, 0 for Permanent
 * @method string getCreateTime() Obtain Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModifyTime() Obtain Last modification time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Last modification time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMachineCount() Obtain Number of Bound Machines
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineCount(integer $MachineCount) Set Number of Bound Machines
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEventCount() Obtain Policy Associated Event Count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEventCount(integer $EventCount) Set Policy Associated Event Count
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RansomDefenseStrategyDetail extends AbstractModel
{
    /**
     * @var integer Policy ID
     */
    public $Id;

    /**
     * @var string Operating UIN
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uin;

    /**
     * @var string Policy name
     */
    public $Name;

    /**
     * @var string Policy Remarks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var integer Enabling Status: 0 Disabled, 1 Enabled.
     */
    public $Status;

    /**
     * @var integer Whether it takes effect for all hosts.
     */
    public $IsAll;

    /**
     * @var string Includes directories, separated by semicolons (;).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IncludeDir;

    /**
     * @var string Includes directories, separated by semicolons (;).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExcludeDir;

    /**
     * @var integer Backup pattern: 0 weekly, 1 daily.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupType;

    /**
     * @var string Backup days in a week (1-7): 1; 2; 3; 4.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Weekday;

    /**
     * @var string Backup Execution Time Point (0-23): 11:00; 12:00
     */
    public $Hour;

    /**
     * @var integer Storage Days, 0 for Permanent
     */
    public $SaveDay;

    /**
     * @var string Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Last modification time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModifyTime;

    /**
     * @var integer Number of Bound Machines
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineCount;

    /**
     * @var integer Policy Associated Event Count
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EventCount;

    /**
     * @param integer $Id Policy ID
     * @param string $Uin Operating UIN
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Policy name
     * @param string $Description Policy Remarks
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Enabling Status: 0 Disabled, 1 Enabled.
     * @param integer $IsAll Whether it takes effect for all hosts.
     * @param string $IncludeDir Includes directories, separated by semicolons (;).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExcludeDir Includes directories, separated by semicolons (;).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BackupType Backup pattern: 0 weekly, 1 daily.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Weekday Backup days in a week (1-7): 1; 2; 3; 4.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Hour Backup Execution Time Point (0-23): 11:00; 12:00
     * @param integer $SaveDay Storage Days, 0 for Permanent
     * @param string $CreateTime Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModifyTime Last modification time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MachineCount Number of Bound Machines
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EventCount Policy Associated Event Count
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsAll",$param) and $param["IsAll"] !== null) {
            $this->IsAll = $param["IsAll"];
        }

        if (array_key_exists("IncludeDir",$param) and $param["IncludeDir"] !== null) {
            $this->IncludeDir = $param["IncludeDir"];
        }

        if (array_key_exists("ExcludeDir",$param) and $param["ExcludeDir"] !== null) {
            $this->ExcludeDir = $param["ExcludeDir"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("Weekday",$param) and $param["Weekday"] !== null) {
            $this->Weekday = $param["Weekday"];
        }

        if (array_key_exists("Hour",$param) and $param["Hour"] !== null) {
            $this->Hour = $param["Hour"];
        }

        if (array_key_exists("SaveDay",$param) and $param["SaveDay"] !== null) {
            $this->SaveDay = $param["SaveDay"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("MachineCount",$param) and $param["MachineCount"] !== null) {
            $this->MachineCount = $param["MachineCount"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }
    }
}
