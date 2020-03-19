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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getFileName() Obtain Filename
 * @method void setFileName(string $FileName) Set Filename
 * @method integer getSize() Obtain File size in KB
 * @method void setSize(integer $Size) Set File size in KB
 * @method string getStartTime() Obtain Backup start time
 * @method void setStartTime(string $StartTime) Set Backup start time
 * @method string getEndTime() Obtain Backup end time
 * @method void setEndTime(string $EndTime) Set Backup end time
 * @method string getInternalAddr() Obtain Download address for private network
 * @method void setInternalAddr(string $InternalAddr) Set Download address for private network
 * @method string getExternalAddr() Obtain Download address for public network
 * @method void setExternalAddr(string $ExternalAddr) Set Download address for public network
 * @method integer getId() Obtain Unique ID of backup file, which will be used by the `RestoreInstance` API
 * @method void setId(integer $Id) Set Unique ID of backup file, which will be used by the `RestoreInstance` API
 * @method integer getStatus() Obtain Backup file status (0: creating, 1: succeeded, 2: failed)
 * @method void setStatus(integer $Status) Set Backup file status (0: creating, 1: succeeded, 2: failed)
 * @method array getDBs() Obtain List of databases for multi-database backup
 * @method void setDBs(array $DBs) Set List of databases for multi-database backup
 * @method integer getStrategy() Obtain Backup policy (0: instance backup, 1: multi-database backup)
 * @method void setStrategy(integer $Strategy) Set Backup policy (0: instance backup, 1: multi-database backup)
 * @method integer getBackupWay() Obtain Backup mode. 0: scheduled, 1: manual
 * @method void setBackupWay(integer $BackupWay) Set Backup mode. 0: scheduled, 1: manual
 */

/**
 *Backup file details
 */
class Backup extends AbstractModel
{
    /**
     * @var string Filename
     */
    public $FileName;

    /**
     * @var integer File size in KB
     */
    public $Size;

    /**
     * @var string Backup start time
     */
    public $StartTime;

    /**
     * @var string Backup end time
     */
    public $EndTime;

    /**
     * @var string Download address for private network
     */
    public $InternalAddr;

    /**
     * @var string Download address for public network
     */
    public $ExternalAddr;

    /**
     * @var integer Unique ID of backup file, which will be used by the `RestoreInstance` API
     */
    public $Id;

    /**
     * @var integer Backup file status (0: creating, 1: succeeded, 2: failed)
     */
    public $Status;

    /**
     * @var array List of databases for multi-database backup
     */
    public $DBs;

    /**
     * @var integer Backup policy (0: instance backup, 1: multi-database backup)
     */
    public $Strategy;

    /**
     * @var integer Backup mode. 0: scheduled, 1: manual
     */
    public $BackupWay;
    /**
     * @param string $FileName Filename
     * @param integer $Size File size in KB
     * @param string $StartTime Backup start time
     * @param string $EndTime Backup end time
     * @param string $InternalAddr Download address for private network
     * @param string $ExternalAddr Download address for public network
     * @param integer $Id Unique ID of backup file, which will be used by the `RestoreInstance` API
     * @param integer $Status Backup file status (0: creating, 1: succeeded, 2: failed)
     * @param array $DBs List of databases for multi-database backup
     * @param integer $Strategy Backup policy (0: instance backup, 1: multi-database backup)
     * @param integer $BackupWay Backup mode. 0: scheduled, 1: manual
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("InternalAddr",$param) and $param["InternalAddr"] !== null) {
            $this->InternalAddr = $param["InternalAddr"];
        }

        if (array_key_exists("ExternalAddr",$param) and $param["ExternalAddr"] !== null) {
            $this->ExternalAddr = $param["ExternalAddr"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DBs",$param) and $param["DBs"] !== null) {
            $this->DBs = $param["DBs"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("BackupWay",$param) and $param["BackupWay"] !== null) {
            $this->BackupWay = $param["BackupWay"];
        }
    }
}
