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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Backup details
 *
 * @method string getName() Obtain Backup filename
 * @method void setName(string $Name) Set Backup filename
 * @method integer getSize() Obtain Backup file size in bytes
 * @method void setSize(integer $Size) Set Backup file size in bytes
 * @method string getDate() Obtain Backup snapshot time in the format of yyyy-MM-dd HH:mm:ss, such as 2016-03-17 02:10:37
 * @method void setDate(string $Date) Set Backup snapshot time in the format of yyyy-MM-dd HH:mm:ss, such as 2016-03-17 02:10:37
 * @method string getIntranetUrl() Obtain Download address
 * @method void setIntranetUrl(string $IntranetUrl) Set Download address
 * @method string getInternetUrl() Obtain Download address
 * @method void setInternetUrl(string $InternetUrl) Set Download address
 * @method string getType() Obtain Log type. Valid values: `logical` (logical cold backup), `physical` (physical cold backup).
 * @method void setType(string $Type) Set Log type. Valid values: `logical` (logical cold backup), `physical` (physical cold backup).
 * @method integer getBackupId() Obtain Backup subtask ID, which is used when backup files are deleted
 * @method void setBackupId(integer $BackupId) Set Backup subtask ID, which is used when backup files are deleted
 * @method string getStatus() Obtain Backup task status. Valid values: `SUCCESS` (backup succeeded), `FAILED` (backup failed), `RUNNING` (backup is in progress).
 * @method void setStatus(string $Status) Set Backup task status. Valid values: `SUCCESS` (backup succeeded), `FAILED` (backup failed), `RUNNING` (backup is in progress).
 * @method string getFinishTime() Obtain Backup task completion time
 * @method void setFinishTime(string $FinishTime) Set Backup task completion time
 * @method string getCreator() Obtain (This field will be disused and is thus not recommended) backup creator. Valid values: `SYSTEM` (created by system), `Uin` (initiator's `Uin` value).
 * @method void setCreator(string $Creator) Set (This field will be disused and is thus not recommended) backup creator. Valid values: `SYSTEM` (created by system), `Uin` (initiator's `Uin` value).
 * @method string getStartTime() Obtain Backup task start time
 * @method void setStartTime(string $StartTime) Set Backup task start time
 * @method string getMethod() Obtain Backup method. Valid values: `full` (full backup), `partial` (partial backup).
 * @method void setMethod(string $Method) Set Backup method. Valid values: `full` (full backup), `partial` (partial backup).
 * @method string getWay() Obtain Backup mode. Valid values: `manual` (manual backup), `automatic` (automatic backup).
 * @method void setWay(string $Way) Set Backup mode. Valid values: `manual` (manual backup), `automatic` (automatic backup).
 * @method string getManualBackupName() Obtain Manual backup alias
 * @method void setManualBackupName(string $ManualBackupName) Set Manual backup alias
 */
class BackupInfo extends AbstractModel
{
    /**
     * @var string Backup filename
     */
    public $Name;

    /**
     * @var integer Backup file size in bytes
     */
    public $Size;

    /**
     * @var string Backup snapshot time in the format of yyyy-MM-dd HH:mm:ss, such as 2016-03-17 02:10:37
     */
    public $Date;

    /**
     * @var string Download address
     */
    public $IntranetUrl;

    /**
     * @var string Download address
     */
    public $InternetUrl;

    /**
     * @var string Log type. Valid values: `logical` (logical cold backup), `physical` (physical cold backup).
     */
    public $Type;

    /**
     * @var integer Backup subtask ID, which is used when backup files are deleted
     */
    public $BackupId;

    /**
     * @var string Backup task status. Valid values: `SUCCESS` (backup succeeded), `FAILED` (backup failed), `RUNNING` (backup is in progress).
     */
    public $Status;

    /**
     * @var string Backup task completion time
     */
    public $FinishTime;

    /**
     * @var string (This field will be disused and is thus not recommended) backup creator. Valid values: `SYSTEM` (created by system), `Uin` (initiator's `Uin` value).
     */
    public $Creator;

    /**
     * @var string Backup task start time
     */
    public $StartTime;

    /**
     * @var string Backup method. Valid values: `full` (full backup), `partial` (partial backup).
     */
    public $Method;

    /**
     * @var string Backup mode. Valid values: `manual` (manual backup), `automatic` (automatic backup).
     */
    public $Way;

    /**
     * @var string Manual backup alias
     */
    public $ManualBackupName;

    /**
     * @param string $Name Backup filename
     * @param integer $Size Backup file size in bytes
     * @param string $Date Backup snapshot time in the format of yyyy-MM-dd HH:mm:ss, such as 2016-03-17 02:10:37
     * @param string $IntranetUrl Download address
     * @param string $InternetUrl Download address
     * @param string $Type Log type. Valid values: `logical` (logical cold backup), `physical` (physical cold backup).
     * @param integer $BackupId Backup subtask ID, which is used when backup files are deleted
     * @param string $Status Backup task status. Valid values: `SUCCESS` (backup succeeded), `FAILED` (backup failed), `RUNNING` (backup is in progress).
     * @param string $FinishTime Backup task completion time
     * @param string $Creator (This field will be disused and is thus not recommended) backup creator. Valid values: `SYSTEM` (created by system), `Uin` (initiator's `Uin` value).
     * @param string $StartTime Backup task start time
     * @param string $Method Backup method. Valid values: `full` (full backup), `partial` (partial backup).
     * @param string $Way Backup mode. Valid values: `manual` (manual backup), `automatic` (automatic backup).
     * @param string $ManualBackupName Manual backup alias
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

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("IntranetUrl",$param) and $param["IntranetUrl"] !== null) {
            $this->IntranetUrl = $param["IntranetUrl"];
        }

        if (array_key_exists("InternetUrl",$param) and $param["InternetUrl"] !== null) {
            $this->InternetUrl = $param["InternetUrl"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Way",$param) and $param["Way"] !== null) {
            $this->Way = $param["Way"];
        }

        if (array_key_exists("ManualBackupName",$param) and $param["ManualBackupName"] !== null) {
            $this->ManualBackupName = $param["ManualBackupName"];
        }
    }
}
