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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBackUpSchedule request structure.
 *
 * @method integer getScheduleId() Obtain Required to be uploaded when editing
 * @method void setScheduleId(integer $ScheduleId) Set Required to be uploaded when editing
 * @method string getWeekDays() Obtain Selected weeks, separated by commas.
Discarded: Use ScheduleInfo.
 * @method void setWeekDays(string $WeekDays) Set Selected weeks, separated by commas.
Discarded: Use ScheduleInfo.
 * @method integer getExecuteHour() Obtain Hour for executing the backup taskDiscarded: Use ScheduleInfo.
 * @method void setExecuteHour(integer $ExecuteHour) Set Hour for executing the backup taskDiscarded: Use ScheduleInfo.
 * @method array getBackUpTables() Obtain Backup table list
 * @method void setBackUpTables(array $BackUpTables) Set Backup table list
 * @method integer getBackupType() Obtain 0: default; 1: one-time backup for the remote Doris
 * @method void setBackupType(integer $BackupType) Set 0: default; 1: one-time backup for the remote Doris
 * @method DorisSourceInfo getDorisSourceInfo() Obtain Connection information of the remote doris cluster
 * @method void setDorisSourceInfo(DorisSourceInfo $DorisSourceInfo) Set Connection information of the remote doris cluster
 * @method integer getBackupTimeType() Obtain 0: default; 1: one-time backup; 2: remote backup
 * @method void setBackupTimeType(integer $BackupTimeType) Set 0: default; 1: one-time backup; 2: remote backup
 * @method integer getRestoreType() Obtain 0: default; 1: immediate recovery after the backup is completed.
 * @method void setRestoreType(integer $RestoreType) Set 0: default; 1: immediate recovery after the backup is completed.
 * @method integer getAuthType() Obtain 0: default; 1: connecting to COS using a custom key.
 * @method void setAuthType(integer $AuthType) Set 0: default; 1: connecting to COS using a custom key.
 * @method CosSourceInfo getCosSourceInfo() Obtain Cos certification information
 * @method void setCosSourceInfo(CosSourceInfo $CosSourceInfo) Set Cos certification information
 */
class CreateBackUpScheduleRequest extends AbstractModel
{
    /**
     * @var integer Required to be uploaded when editing
     */
    public $ScheduleId;

    /**
     * @var string Selected weeks, separated by commas.
Discarded: Use ScheduleInfo.
     */
    public $WeekDays;

    /**
     * @var integer Hour for executing the backup taskDiscarded: Use ScheduleInfo.
     */
    public $ExecuteHour;

    /**
     * @var array Backup table list
     */
    public $BackUpTables;

    /**
     * @var integer 0: default; 1: one-time backup for the remote Doris
     */
    public $BackupType;

    /**
     * @var DorisSourceInfo Connection information of the remote doris cluster
     */
    public $DorisSourceInfo;

    /**
     * @var integer 0: default; 1: one-time backup; 2: remote backup
     */
    public $BackupTimeType;

    /**
     * @var integer 0: default; 1: immediate recovery after the backup is completed.
     */
    public $RestoreType;

    /**
     * @var integer 0: default; 1: connecting to COS using a custom key.
     */
    public $AuthType;

    /**
     * @var CosSourceInfo Cos certification information
     */
    public $CosSourceInfo;

    /**
     * @param integer $ScheduleId Required to be uploaded when editing
     * @param string $WeekDays Selected weeks, separated by commas.
Discarded: Use ScheduleInfo.
     * @param integer $ExecuteHour Hour for executing the backup taskDiscarded: Use ScheduleInfo.
     * @param array $BackUpTables Backup table list
     * @param integer $BackupType 0: default; 1: one-time backup for the remote Doris
     * @param DorisSourceInfo $DorisSourceInfo Connection information of the remote doris cluster
     * @param integer $BackupTimeType 0: default; 1: one-time backup; 2: remote backup
     * @param integer $RestoreType 0: default; 1: immediate recovery after the backup is completed.
     * @param integer $AuthType 0: default; 1: connecting to COS using a custom key.
     * @param CosSourceInfo $CosSourceInfo Cos certification information
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
        if (array_key_exists("ScheduleId",$param) and $param["ScheduleId"] !== null) {
            $this->ScheduleId = $param["ScheduleId"];
        }

        if (array_key_exists("WeekDays",$param) and $param["WeekDays"] !== null) {
            $this->WeekDays = $param["WeekDays"];
        }

        if (array_key_exists("ExecuteHour",$param) and $param["ExecuteHour"] !== null) {
            $this->ExecuteHour = $param["ExecuteHour"];
        }

        if (array_key_exists("BackUpTables",$param) and $param["BackUpTables"] !== null) {
            $this->BackUpTables = [];
            foreach ($param["BackUpTables"] as $key => $value){
                $obj = new BackupTableContent();
                $obj->deserialize($value);
                array_push($this->BackUpTables, $obj);
            }
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("DorisSourceInfo",$param) and $param["DorisSourceInfo"] !== null) {
            $this->DorisSourceInfo = new DorisSourceInfo();
            $this->DorisSourceInfo->deserialize($param["DorisSourceInfo"]);
        }

        if (array_key_exists("BackupTimeType",$param) and $param["BackupTimeType"] !== null) {
            $this->BackupTimeType = $param["BackupTimeType"];
        }

        if (array_key_exists("RestoreType",$param) and $param["RestoreType"] !== null) {
            $this->RestoreType = $param["RestoreType"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("CosSourceInfo",$param) and $param["CosSourceInfo"] !== null) {
            $this->CosSourceInfo = new CosSourceInfo();
            $this->CosSourceInfo->deserialize($param["CosSourceInfo"]);
        }
    }
}
