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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Backup download task information
 *
 * @method string getCreateTime() Obtain Task creation time.
 * @method void setCreateTime(string $CreateTime) Set Task creation time.
 * @method string getBackupName() Obtain Backup file name.
 * @method void setBackupName(string $BackupName) Set Backup file name.
 * @method string getReplicaSetId() Obtain Shard name.
 * @method void setReplicaSetId(string $ReplicaSetId) Set Shard name.
 * @method integer getBackupSize() Obtain Backup data size, in bytes.
 * @method void setBackupSize(integer $BackupSize) Set Backup data size, in bytes.
 * @method integer getStatus() Obtain Task status.
- 0: wait for execution.
- 1: downloading.
- 2: download completed.
- 3: download failed.
- 4: wait for retry.
 * @method void setStatus(integer $Status) Set Task status.
- 0: wait for execution.
- 1: downloading.
- 2: download completed.
- 3: download failed.
- 4: wait for retry.
 * @method integer getPercent() Obtain Task progress percentage.
 * @method void setPercent(integer $Percent) Set Task progress percentage.
 * @method integer getTimeSpend() Obtain Duration, in seconds.
 * @method void setTimeSpend(integer $TimeSpend) Set Duration, in seconds.
 * @method string getUrl() Obtain Download link for backup data.
 * @method void setUrl(string $Url) Set Download link for backup data.
 * @method integer getBackupMethod() Obtain Backup method.
- 0: logical backup.
- 1: physical backup.
- 3: snapshot backup.
**Note**:
1. The General Edition instance supports logical and physical backup. The Cloud Disk Edition instance supports physical and snapshot backup, but does not support logical backup currently.
2. Physical backup is not supported when storage encryption is enabled for the instance.
 * @method void setBackupMethod(integer $BackupMethod) Set Backup method.
- 0: logical backup.
- 1: physical backup.
- 3: snapshot backup.
**Note**:
1. The General Edition instance supports logical and physical backup. The Cloud Disk Edition instance supports physical and snapshot backup, but does not support logical backup currently.
2. Physical backup is not supported when storage encryption is enabled for the instance.
 * @method string getBackupDesc() Obtain Specified remarks for initiating backup tasks.
 * @method void setBackupDesc(string $BackupDesc) Set Specified remarks for initiating backup tasks.
 * @method string getRegion() Obtain Region information.
 * @method void setRegion(string $Region) Set Region information.
 * @method string getBucket() Obtain Bucket information.
 * @method void setBucket(string $Bucket) Set Bucket information.
 */
class BackupDownloadTask extends AbstractModel
{
    /**
     * @var string Task creation time.
     */
    public $CreateTime;

    /**
     * @var string Backup file name.
     */
    public $BackupName;

    /**
     * @var string Shard name.
     */
    public $ReplicaSetId;

    /**
     * @var integer Backup data size, in bytes.
     */
    public $BackupSize;

    /**
     * @var integer Task status.
- 0: wait for execution.
- 1: downloading.
- 2: download completed.
- 3: download failed.
- 4: wait for retry.
     */
    public $Status;

    /**
     * @var integer Task progress percentage.
     */
    public $Percent;

    /**
     * @var integer Duration, in seconds.
     */
    public $TimeSpend;

    /**
     * @var string Download link for backup data.
     */
    public $Url;

    /**
     * @var integer Backup method.
- 0: logical backup.
- 1: physical backup.
- 3: snapshot backup.
**Note**:
1. The General Edition instance supports logical and physical backup. The Cloud Disk Edition instance supports physical and snapshot backup, but does not support logical backup currently.
2. Physical backup is not supported when storage encryption is enabled for the instance.
     */
    public $BackupMethod;

    /**
     * @var string Specified remarks for initiating backup tasks.
     */
    public $BackupDesc;

    /**
     * @var string Region information.
     */
    public $Region;

    /**
     * @var string Bucket information.
     */
    public $Bucket;

    /**
     * @param string $CreateTime Task creation time.
     * @param string $BackupName Backup file name.
     * @param string $ReplicaSetId Shard name.
     * @param integer $BackupSize Backup data size, in bytes.
     * @param integer $Status Task status.
- 0: wait for execution.
- 1: downloading.
- 2: download completed.
- 3: download failed.
- 4: wait for retry.
     * @param integer $Percent Task progress percentage.
     * @param integer $TimeSpend Duration, in seconds.
     * @param string $Url Download link for backup data.
     * @param integer $BackupMethod Backup method.
- 0: logical backup.
- 1: physical backup.
- 3: snapshot backup.
**Note**:
1. The General Edition instance supports logical and physical backup. The Cloud Disk Edition instance supports physical and snapshot backup, but does not support logical backup currently.
2. Physical backup is not supported when storage encryption is enabled for the instance.
     * @param string $BackupDesc Specified remarks for initiating backup tasks.
     * @param string $Region Region information.
     * @param string $Bucket Bucket information.
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }
    }
}
