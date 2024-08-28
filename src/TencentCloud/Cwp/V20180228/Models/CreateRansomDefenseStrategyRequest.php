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
 * CreateRansomDefenseStrategy request structure.
 *
 * @method string getName() Obtain Policy name
 * @method void setName(string $Name) Set Policy name
 * @method string getHour() Obtain Scheduled snapshot execution time (0-23): 01:00; 23:00.
 * @method void setHour(string $Hour) Set Scheduled snapshot execution time (0-23): 01:00; 23:00.
 * @method integer getId() Obtain Policy ID: Modify the policy when filling in the ID. Otherwise, add a new policy.
 * @method void setId(integer $Id) Set Policy ID: Modify the policy when filling in the ID. Otherwise, add a new policy.
 * @method string getDescription() Obtain Policy Remarks
 * @method void setDescription(string $Description) Set Policy Remarks
 * @method integer getStatus() Obtain Whether to enable: 0 Off, 1 On.
 * @method void setStatus(integer $Status) Set Whether to enable: 0 Off, 1 On.
 * @method integer getIsAll() Obtain Apply to all machines or not. 0: No; 1: Yes
 * @method void setIsAll(integer $IsAll) Set Apply to all machines or not. 0: No; 1: Yes
 * @method string getIncludeDir() Obtain Include directories, separated by semicolons (;).
 * @method void setIncludeDir(string $IncludeDir) Set Include directories, separated by semicolons (;).
 * @method string getExcludeDir() Obtain Exclude directories, separated by semicolons (;).
 * @method void setExcludeDir(string $ExcludeDir) Set Exclude directories, separated by semicolons (;).
 * @method integer getBackupType() Obtain Backup pattern: 0 weekly, 1 daily.
 * @method void setBackupType(integer $BackupType) Set Backup pattern: 0 weekly, 1 daily.
 * @method string getWeekday() Obtain Scheduled task execution days in a week (1-7): 1; 2; 7.
 * @method void setWeekday(string $Weekday) Set Scheduled task execution days in a week (1-7): 1; 2; 7.
 * @method integer getSaveDay() Obtain Retention Period: 0 Permanent.
 * @method void setSaveDay(integer $SaveDay) Set Retention Period: 0 Permanent.
 * @method array getMachines() Obtain Bound Host List
 * @method void setMachines(array $Machines) Set Bound Host List
 */
class CreateRansomDefenseStrategyRequest extends AbstractModel
{
    /**
     * @var string Policy name
     */
    public $Name;

    /**
     * @var string Scheduled snapshot execution time (0-23): 01:00; 23:00.
     */
    public $Hour;

    /**
     * @var integer Policy ID: Modify the policy when filling in the ID. Otherwise, add a new policy.
     */
    public $Id;

    /**
     * @var string Policy Remarks
     */
    public $Description;

    /**
     * @var integer Whether to enable: 0 Off, 1 On.
     */
    public $Status;

    /**
     * @var integer Apply to all machines or not. 0: No; 1: Yes
     */
    public $IsAll;

    /**
     * @var string Include directories, separated by semicolons (;).
     */
    public $IncludeDir;

    /**
     * @var string Exclude directories, separated by semicolons (;).
     */
    public $ExcludeDir;

    /**
     * @var integer Backup pattern: 0 weekly, 1 daily.
     */
    public $BackupType;

    /**
     * @var string Scheduled task execution days in a week (1-7): 1; 2; 7.
     */
    public $Weekday;

    /**
     * @var integer Retention Period: 0 Permanent.
     */
    public $SaveDay;

    /**
     * @var array Bound Host List
     */
    public $Machines;

    /**
     * @param string $Name Policy name
     * @param string $Hour Scheduled snapshot execution time (0-23): 01:00; 23:00.
     * @param integer $Id Policy ID: Modify the policy when filling in the ID. Otherwise, add a new policy.
     * @param string $Description Policy Remarks
     * @param integer $Status Whether to enable: 0 Off, 1 On.
     * @param integer $IsAll Apply to all machines or not. 0: No; 1: Yes
     * @param string $IncludeDir Include directories, separated by semicolons (;).
     * @param string $ExcludeDir Exclude directories, separated by semicolons (;).
     * @param integer $BackupType Backup pattern: 0 weekly, 1 daily.
     * @param string $Weekday Scheduled task execution days in a week (1-7): 1; 2; 7.
     * @param integer $SaveDay Retention Period: 0 Permanent.
     * @param array $Machines Bound Host List
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Hour",$param) and $param["Hour"] !== null) {
            $this->Hour = $param["Hour"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
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

        if (array_key_exists("SaveDay",$param) and $param["SaveDay"] !== null) {
            $this->SaveDay = $param["SaveDay"];
        }

        if (array_key_exists("Machines",$param) and $param["Machines"] !== null) {
            $this->Machines = [];
            foreach ($param["Machines"] as $key => $value){
                $obj = new RansomDefenseStrategyMachineInfo();
                $obj->deserialize($value);
                array_push($this->Machines, $obj);
            }
        }
    }
}
