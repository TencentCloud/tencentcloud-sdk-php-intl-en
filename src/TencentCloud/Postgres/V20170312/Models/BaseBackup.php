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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Database data backup information
 *
 * @method string getDBInstanceId() Obtain Instance ID
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID
 * @method string getId() Obtain Unique ID of a backup file
 * @method void setId(string $Id) Set Unique ID of a backup file
 * @method string getName() Obtain Backup file name.
 * @method void setName(string $Name) Set Backup file name.
 * @method string getBackupMethod() Obtain Backup method, including physical and logical.
 * @method void setBackupMethod(string $BackupMethod) Set Backup method, including physical and logical.
 * @method string getBackupMode() Obtain Backup mode, including automatic and manual.
 * @method void setBackupMode(string $BackupMode) Set Backup mode, including automatic and manual.
 * @method string getState() Obtain Backup task status
 * @method void setState(string $State) Set Backup task status
 * @method integer getSize() Obtain Backup set size in bytes
 * @method void setSize(integer $Size) Set Backup set size in bytes
 * @method string getStartTime() Obtain Backup start time
 * @method void setStartTime(string $StartTime) Set Backup start time
 * @method string getFinishTime() Obtain Backup end time
 * @method void setFinishTime(string $FinishTime) Set Backup end time
 * @method string getExpireTime() Obtain Backup expiration time
 * @method void setExpireTime(string $ExpireTime) Set Backup expiration time
 */
class BaseBackup extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $DBInstanceId;

    /**
     * @var string Unique ID of a backup file
     */
    public $Id;

    /**
     * @var string Backup file name.
     */
    public $Name;

    /**
     * @var string Backup method, including physical and logical.
     */
    public $BackupMethod;

    /**
     * @var string Backup mode, including automatic and manual.
     */
    public $BackupMode;

    /**
     * @var string Backup task status
     */
    public $State;

    /**
     * @var integer Backup set size in bytes
     */
    public $Size;

    /**
     * @var string Backup start time
     */
    public $StartTime;

    /**
     * @var string Backup end time
     */
    public $FinishTime;

    /**
     * @var string Backup expiration time
     */
    public $ExpireTime;

    /**
     * @param string $DBInstanceId Instance ID
     * @param string $Id Unique ID of a backup file
     * @param string $Name Backup file name.
     * @param string $BackupMethod Backup method, including physical and logical.
     * @param string $BackupMode Backup mode, including automatic and manual.
     * @param string $State Backup task status
     * @param integer $Size Backup set size in bytes
     * @param string $StartTime Backup start time
     * @param string $FinishTime Backup end time
     * @param string $ExpireTime Backup expiration time
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BackupMode",$param) and $param["BackupMode"] !== null) {
            $this->BackupMode = $param["BackupMode"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
