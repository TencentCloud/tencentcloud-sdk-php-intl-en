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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Backup download task information
 *
 * @method string getCreateTime() Obtain Task creation time
 * @method void setCreateTime(string $CreateTime) Set Task creation time
 * @method string getBackupName() Obtain Backup name
 * @method void setBackupName(string $BackupName) Set Backup name
 * @method string getReplicaSetId() Obtain Shard name
 * @method void setReplicaSetId(string $ReplicaSetId) Set Shard name
 * @method integer getBackupSize() Obtain Backup size in bytes
 * @method void setBackupSize(integer $BackupSize) Set Backup size in bytes
 * @method integer getStatus() Obtain Task status. Valid values: `0` (waiting for execution), `1` (downloading), `2` (downloaded), `3` (download failed), `4` (waiting for retry)
 * @method void setStatus(integer $Status) Set Task status. Valid values: `0` (waiting for execution), `1` (downloading), `2` (downloaded), `3` (download failed), `4` (waiting for retry)
 * @method integer getPercent() Obtain Task progress in percentage
 * @method void setPercent(integer $Percent) Set Task progress in percentage
 * @method integer getTimeSpend() Obtain Task duration in seconds
 * @method void setTimeSpend(integer $TimeSpend) Set Task duration in seconds
 * @method string getUrl() Obtain Backup download address
 * @method void setUrl(string $Url) Set Backup download address
 * @method integer getBackupMethod() Obtain Backup type of the backup file. Valid values: `0` (logical backup), `1` (physical backup)
 * @method void setBackupMethod(integer $BackupMethod) Set Backup type of the backup file. Valid values: `0` (logical backup), `1` (physical backup)
 * @method string getBackupDesc() Obtain Backup description you set when starting a backup task
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setBackupDesc(string $BackupDesc) Set Backup description you set when starting a backup task
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class BackupDownloadTask extends AbstractModel
{
    /**
     * @var string Task creation time
     */
    public $CreateTime;

    /**
     * @var string Backup name
     */
    public $BackupName;

    /**
     * @var string Shard name
     */
    public $ReplicaSetId;

    /**
     * @var integer Backup size in bytes
     */
    public $BackupSize;

    /**
     * @var integer Task status. Valid values: `0` (waiting for execution), `1` (downloading), `2` (downloaded), `3` (download failed), `4` (waiting for retry)
     */
    public $Status;

    /**
     * @var integer Task progress in percentage
     */
    public $Percent;

    /**
     * @var integer Task duration in seconds
     */
    public $TimeSpend;

    /**
     * @var string Backup download address
     */
    public $Url;

    /**
     * @var integer Backup type of the backup file. Valid values: `0` (logical backup), `1` (physical backup)
     */
    public $BackupMethod;

    /**
     * @var string Backup description you set when starting a backup task
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $BackupDesc;

    /**
     * @param string $CreateTime Task creation time
     * @param string $BackupName Backup name
     * @param string $ReplicaSetId Shard name
     * @param integer $BackupSize Backup size in bytes
     * @param integer $Status Task status. Valid values: `0` (waiting for execution), `1` (downloading), `2` (downloaded), `3` (download failed), `4` (waiting for retry)
     * @param integer $Percent Task progress in percentage
     * @param integer $TimeSpend Task duration in seconds
     * @param string $Url Backup download address
     * @param integer $BackupMethod Backup type of the backup file. Valid values: `0` (logical backup), `1` (physical backup)
     * @param string $BackupDesc Backup description you set when starting a backup task
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }

        if (array_key_exists("ReplicaSetId",$param) and $param["ReplicaSetId"] !== null) {
            $this->ReplicaSetId = $param["ReplicaSetId"];
        }

        if (array_key_exists("BackupSize",$param) and $param["BackupSize"] !== null) {
            $this->BackupSize = $param["BackupSize"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("TimeSpend",$param) and $param["TimeSpend"] !== null) {
            $this->TimeSpend = $param["TimeSpend"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BackupDesc",$param) and $param["BackupDesc"] !== null) {
            $this->BackupDesc = $param["BackupDesc"];
        }
    }
}
