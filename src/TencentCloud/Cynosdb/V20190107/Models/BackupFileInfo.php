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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Backup file information
 *
 * @method integer getSnapshotId() Obtain <p>Snapshot file ID, abandoned, please use BackupId</p>
 * @method void setSnapshotId(integer $SnapshotId) Set <p>Snapshot file ID, abandoned, please use BackupId</p>
 * @method string getFileName() Obtain <p>Backup file name</p>
 * @method void setFileName(string $FileName) Set <p>Backup file name</p>
 * @method integer getFileSize() Obtain <p>Backup file size</p>
 * @method void setFileSize(integer $FileSize) Set <p>Backup file size</p>
 * @method string getStartTime() Obtain <p>Backup start time.</p>
 * @method void setStartTime(string $StartTime) Set <p>Backup start time.</p>
 * @method string getFinishTime() Obtain <p>Backup completion time.</p>
 * @method void setFinishTime(string $FinishTime) Set <p>Backup completion time.</p>
 * @method string getBackupType() Obtain <p>Backup type: snapshot, snapshot backup; logic, logical backup</p>
 * @method void setBackupType(string $BackupType) Set <p>Backup type: snapshot, snapshot backup; logic, logical backup</p>
 * @method string getBackupMethod() Obtain <p>Backup method: auto, automatic backup; manual, manual backup</p>
 * @method void setBackupMethod(string $BackupMethod) Set <p>Backup method: auto, automatic backup; manual, manual backup</p>
 * @method string getBackupStatus() Obtain <p>Backup file status: success: backup successful; fail: backup failed; creating: backup file being created; deleting: backup file deleting</p>
 * @method void setBackupStatus(string $BackupStatus) Set <p>Backup file status: success: backup successful; fail: backup failed; creating: backup file being created; deleting: backup file deleting</p>
 * @method string getSnapshotTime() Obtain <p>Backup file time</p>
 * @method void setSnapshotTime(string $SnapshotTime) Set <p>Backup file time</p>
 * @method integer getBackupId() Obtain <p>Backup ID</p>
 * @method void setBackupId(integer $BackupId) Set <p>Backup ID</p>
 * @method string getSnapShotType() Obtain <p>Snapshot type. Value range: full, full; increment, incremental</p>
 * @method void setSnapShotType(string $SnapShotType) Set <p>Snapshot type. Value range: full, full; increment, incremental</p>
 * @method string getBackupName() Obtain <p>Backup file remark</p>
 * @method void setBackupName(string $BackupName) Set <p>Backup file remark</p>
 * @method string getCopyStatus() Obtain <p>Delivery status</p>
 * @method void setCopyStatus(string $CopyStatus) Set <p>Delivery status</p>
 * @method string getEncryptKeyId() Obtain <p>Key id</p>
 * @method void setEncryptKeyId(string $EncryptKeyId) Set <p>Key id</p>
 * @method string getEncryptRegion() Obtain <p>Key region</p>
 * @method void setEncryptRegion(string $EncryptRegion) Set <p>Key region</p>
 * @method array getVaultInfos() Obtain <p>Safe info</p>
 * @method void setVaultInfos(array $VaultInfos) Set <p>Safe info</p>
 * @method string getBackupPeriodStrategy() Obtain <p>Backup cycle policy</p>
 * @method void setBackupPeriodStrategy(string $BackupPeriodStrategy) Set <p>Backup cycle policy</p>
 */
class BackupFileInfo extends AbstractModel
{
    /**
     * @var integer <p>Snapshot file ID, abandoned, please use BackupId</p>
     */
    public $SnapshotId;

    /**
     * @var string <p>Backup file name</p>
     */
    public $FileName;

    /**
     * @var integer <p>Backup file size</p>
     */
    public $FileSize;

    /**
     * @var string <p>Backup start time.</p>
     */
    public $StartTime;

    /**
     * @var string <p>Backup completion time.</p>
     */
    public $FinishTime;

    /**
     * @var string <p>Backup type: snapshot, snapshot backup; logic, logical backup</p>
     */
    public $BackupType;

    /**
     * @var string <p>Backup method: auto, automatic backup; manual, manual backup</p>
     */
    public $BackupMethod;

    /**
     * @var string <p>Backup file status: success: backup successful; fail: backup failed; creating: backup file being created; deleting: backup file deleting</p>
     */
    public $BackupStatus;

    /**
     * @var string <p>Backup file time</p>
     */
    public $SnapshotTime;

    /**
     * @var integer <p>Backup ID</p>
     */
    public $BackupId;

    /**
     * @var string <p>Snapshot type. Value range: full, full; increment, incremental</p>
     */
    public $SnapShotType;

    /**
     * @var string <p>Backup file remark</p>
     */
    public $BackupName;

    /**
     * @var string <p>Delivery status</p>
     */
    public $CopyStatus;

    /**
     * @var string <p>Key id</p>
     */
    public $EncryptKeyId;

    /**
     * @var string <p>Key region</p>
     */
    public $EncryptRegion;

    /**
     * @var array <p>Safe info</p>
     */
    public $VaultInfos;

    /**
     * @var string <p>Backup cycle policy</p>
     */
    public $BackupPeriodStrategy;

    /**
     * @param integer $SnapshotId <p>Snapshot file ID, abandoned, please use BackupId</p>
     * @param string $FileName <p>Backup file name</p>
     * @param integer $FileSize <p>Backup file size</p>
     * @param string $StartTime <p>Backup start time.</p>
     * @param string $FinishTime <p>Backup completion time.</p>
     * @param string $BackupType <p>Backup type: snapshot, snapshot backup; logic, logical backup</p>
     * @param string $BackupMethod <p>Backup method: auto, automatic backup; manual, manual backup</p>
     * @param string $BackupStatus <p>Backup file status: success: backup successful; fail: backup failed; creating: backup file being created; deleting: backup file deleting</p>
     * @param string $SnapshotTime <p>Backup file time</p>
     * @param integer $BackupId <p>Backup ID</p>
     * @param string $SnapShotType <p>Snapshot type. Value range: full, full; increment, incremental</p>
     * @param string $BackupName <p>Backup file remark</p>
     * @param string $CopyStatus <p>Delivery status</p>
     * @param string $EncryptKeyId <p>Key id</p>
     * @param string $EncryptRegion <p>Key region</p>
     * @param array $VaultInfos <p>Safe info</p>
     * @param string $BackupPeriodStrategy <p>Backup cycle policy</p>
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
        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BackupStatus",$param) and $param["BackupStatus"] !== null) {
            $this->BackupStatus = $param["BackupStatus"];
        }

        if (array_key_exists("SnapshotTime",$param) and $param["SnapshotTime"] !== null) {
            $this->SnapshotTime = $param["SnapshotTime"];
        }

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("SnapShotType",$param) and $param["SnapShotType"] !== null) {
            $this->SnapShotType = $param["SnapShotType"];
        }

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }

        if (array_key_exists("CopyStatus",$param) and $param["CopyStatus"] !== null) {
            $this->CopyStatus = $param["CopyStatus"];
        }

        if (array_key_exists("EncryptKeyId",$param) and $param["EncryptKeyId"] !== null) {
            $this->EncryptKeyId = $param["EncryptKeyId"];
        }

        if (array_key_exists("EncryptRegion",$param) and $param["EncryptRegion"] !== null) {
            $this->EncryptRegion = $param["EncryptRegion"];
        }

        if (array_key_exists("VaultInfos",$param) and $param["VaultInfos"] !== null) {
            $this->VaultInfos = [];
            foreach ($param["VaultInfos"] as $key => $value){
                $obj = new VaultInfo();
                $obj->deserialize($value);
                array_push($this->VaultInfos, $obj);
            }
        }

        if (array_key_exists("BackupPeriodStrategy",$param) and $param["BackupPeriodStrategy"] !== null) {
            $this->BackupPeriodStrategy = $param["BackupPeriodStrategy"];
        }
    }
}
