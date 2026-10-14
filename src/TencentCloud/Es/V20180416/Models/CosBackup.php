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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ES cos auto backup information
 *
 * @method boolean getIsAutoBackup() Obtain <p>Whether to enable cos automatic backup</p>
 * @method void setIsAutoBackup(boolean $IsAutoBackup) Set <p>Whether to enable cos automatic backup</p>
 * @method string getBackupTime() Obtain <p>Automatic backup execution time (accurate to the hour), e.g. "22:00"</p>
 * @method void setBackupTime(string $BackupTime) Set <p>Automatic backup execution time (accurate to the hour), e.g. "22:00"</p>
 * @method string getSnapshotName() Obtain <p>Backup snapshot prefix</p>
 * @method void setSnapshotName(string $SnapshotName) Set <p>Backup snapshot prefix</p>
 * @method integer getEsRepositoryType() Obtain <p>0 (Tencent Cloud repository); 1 (customer repository)</p>
 * @method void setEsRepositoryType(integer $EsRepositoryType) Set <p>0 (Tencent Cloud repository); 1 (customer repository)</p>
 * @method string getPaasEsRepository() Obtain <p>Managed snapshot repository name.</p>
 * @method void setPaasEsRepository(string $PaasEsRepository) Set <p>Managed snapshot repository name.</p>
 * @method string getUserEsRepository() Obtain <p>Customer snapshot repository name</p>
 * @method void setUserEsRepository(string $UserEsRepository) Set <p>Customer snapshot repository name</p>
 * @method string getCosBasePath() Obtain <p>cos storage folder directory</p>
 * @method void setCosBasePath(string $CosBasePath) Set <p>cos storage folder directory</p>
 * @method integer getStorageDuration() Obtain <p>Snapshot storage cycle in days</p>
 * @method void setStorageDuration(integer $StorageDuration) Set <p>Snapshot storage cycle in days</p>
 * @method integer getAutoBackupInterval() Obtain <p>Auto backup frequency in hours.</p>
 * @method void setAutoBackupInterval(integer $AutoBackupInterval) Set <p>Auto backup frequency in hours.</p>
 * @method integer getCosRetention() Obtain <p>Backup lock. Valid values: 0 (not locked) and 1 (locked).</p>
 * @method void setCosRetention(integer $CosRetention) Set <p>Backup lock. Valid values: 0 (not locked) and 1 (locked).</p>
 * @method string getRetainUntilDate() Obtain <p>Lock expiration date, such as 2022-12-10T08:34:48.000Z.</p>
 * @method void setRetainUntilDate(string $RetainUntilDate) Set <p>Lock expiration date, such as 2022-12-10T08:34:48.000Z.</p>
 * @method integer getRetentionGraceTime() Obtain <p>Lock grace period</p>
 * @method void setRetentionGraceTime(integer $RetentionGraceTime) Set <p>Lock grace period</p>
 * @method integer getRemoteCos() Obtain <p>Cross-region backup. Valid values: 0 (disabled) and 1 (enabled).</p>
 * @method void setRemoteCos(integer $RemoteCos) Set <p>Cross-region backup. Valid values: 0 (disabled) and 1 (enabled).</p>
 * @method string getRemoteCosRegion() Obtain <p>Region name for cross-regional backup, such as ap-guangzhou.</p>
 * @method void setRemoteCosRegion(string $RemoteCosRegion) Set <p>Region name for cross-regional backup, such as ap-guangzhou.</p>
 * @method string getStrategyName() Obtain <p>Policy name.</p>
 * @method void setStrategyName(string $StrategyName) Set <p>Policy name.</p>
 * @method string getIndices() Obtain <p>Backup index list. If left empty, it means to back up all indexes.</p>
 * @method void setIndices(string $Indices) Set <p>Backup index list. If left empty, it means to back up all indexes.</p>
 * @method integer getMultiAz() Obtain <p>cos multi-AZ backup. 0: single AZ; 1: multi-AZ</p>
 * @method void setMultiAz(integer $MultiAz) Set <p>cos multi-AZ backup. 0: single AZ; 1: multi-AZ</p>
 * @method string getMaxSnapshotPerSec() Obtain <p>Maximum speed of write to the repository per node max_snapshot_bytes_per_sec, default 40m</p>
 * @method void setMaxSnapshotPerSec(string $MaxSnapshotPerSec) Set <p>Maximum speed of write to the repository per node max_snapshot_bytes_per_sec, default 40m</p>
 * @method string getMaxRestorePerSec() Obtain <p>Maximum speed of reading the repository per node max_restore_bytes_per_sec. Default is 40m before 710, and default unlimited from 710 onwards</p>
 * @method void setMaxRestorePerSec(string $MaxRestorePerSec) Set <p>Maximum speed of reading the repository per node max_restore_bytes_per_sec. Default is 40m before 710, and default unlimited from 710 onwards</p>
 * @method string getCreateTime() Obtain <p>Policy creation time</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Policy creation time</p>
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 */
class CosBackup extends AbstractModel
{
    /**
     * @var boolean <p>Whether to enable cos automatic backup</p>
     */
    public $IsAutoBackup;

    /**
     * @var string <p>Automatic backup execution time (accurate to the hour), e.g. "22:00"</p>
     */
    public $BackupTime;

    /**
     * @var string <p>Backup snapshot prefix</p>
     */
    public $SnapshotName;

    /**
     * @var integer <p>0 (Tencent Cloud repository); 1 (customer repository)</p>
     */
    public $EsRepositoryType;

    /**
     * @var string <p>Managed snapshot repository name.</p>
     */
    public $PaasEsRepository;

    /**
     * @var string <p>Customer snapshot repository name</p>
     */
    public $UserEsRepository;

    /**
     * @var string <p>cos storage folder directory</p>
     */
    public $CosBasePath;

    /**
     * @var integer <p>Snapshot storage cycle in days</p>
     */
    public $StorageDuration;

    /**
     * @var integer <p>Auto backup frequency in hours.</p>
     */
    public $AutoBackupInterval;

    /**
     * @var integer <p>Backup lock. Valid values: 0 (not locked) and 1 (locked).</p>
     */
    public $CosRetention;

    /**
     * @var string <p>Lock expiration date, such as 2022-12-10T08:34:48.000Z.</p>
     */
    public $RetainUntilDate;

    /**
     * @var integer <p>Lock grace period</p>
     */
    public $RetentionGraceTime;

    /**
     * @var integer <p>Cross-region backup. Valid values: 0 (disabled) and 1 (enabled).</p>
     */
    public $RemoteCos;

    /**
     * @var string <p>Region name for cross-regional backup, such as ap-guangzhou.</p>
     */
    public $RemoteCosRegion;

    /**
     * @var string <p>Policy name.</p>
     */
    public $StrategyName;

    /**
     * @var string <p>Backup index list. If left empty, it means to back up all indexes.</p>
     */
    public $Indices;

    /**
     * @var integer <p>cos multi-AZ backup. 0: single AZ; 1: multi-AZ</p>
     */
    public $MultiAz;

    /**
     * @var string <p>Maximum speed of write to the repository per node max_snapshot_bytes_per_sec, default 40m</p>
     */
    public $MaxSnapshotPerSec;

    /**
     * @var string <p>Maximum speed of reading the repository per node max_restore_bytes_per_sec. Default is 40m before 710, and default unlimited from 710 onwards</p>
     */
    public $MaxRestorePerSec;

    /**
     * @var string <p>Policy creation time</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @param boolean $IsAutoBackup <p>Whether to enable cos automatic backup</p>
     * @param string $BackupTime <p>Automatic backup execution time (accurate to the hour), e.g. "22:00"</p>
     * @param string $SnapshotName <p>Backup snapshot prefix</p>
     * @param integer $EsRepositoryType <p>0 (Tencent Cloud repository); 1 (customer repository)</p>
     * @param string $PaasEsRepository <p>Managed snapshot repository name.</p>
     * @param string $UserEsRepository <p>Customer snapshot repository name</p>
     * @param string $CosBasePath <p>cos storage folder directory</p>
     * @param integer $StorageDuration <p>Snapshot storage cycle in days</p>
     * @param integer $AutoBackupInterval <p>Auto backup frequency in hours.</p>
     * @param integer $CosRetention <p>Backup lock. Valid values: 0 (not locked) and 1 (locked).</p>
     * @param string $RetainUntilDate <p>Lock expiration date, such as 2022-12-10T08:34:48.000Z.</p>
     * @param integer $RetentionGraceTime <p>Lock grace period</p>
     * @param integer $RemoteCos <p>Cross-region backup. Valid values: 0 (disabled) and 1 (enabled).</p>
     * @param string $RemoteCosRegion <p>Region name for cross-regional backup, such as ap-guangzhou.</p>
     * @param string $StrategyName <p>Policy name.</p>
     * @param string $Indices <p>Backup index list. If left empty, it means to back up all indexes.</p>
     * @param integer $MultiAz <p>cos multi-AZ backup. 0: single AZ; 1: multi-AZ</p>
     * @param string $MaxSnapshotPerSec <p>Maximum speed of write to the repository per node max_snapshot_bytes_per_sec, default 40m</p>
     * @param string $MaxRestorePerSec <p>Maximum speed of reading the repository per node max_restore_bytes_per_sec. Default is 40m before 710, and default unlimited from 710 onwards</p>
     * @param string $CreateTime <p>Policy creation time</p>
     * @param string $InstanceId <p>Instance ID.</p>
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
        if (array_key_exists("IsAutoBackup",$param) and $param["IsAutoBackup"] !== null) {
            $this->IsAutoBackup = $param["IsAutoBackup"];
        }

        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("EsRepositoryType",$param) and $param["EsRepositoryType"] !== null) {
            $this->EsRepositoryType = $param["EsRepositoryType"];
        }

        if (array_key_exists("PaasEsRepository",$param) and $param["PaasEsRepository"] !== null) {
            $this->PaasEsRepository = $param["PaasEsRepository"];
        }

        if (array_key_exists("UserEsRepository",$param) and $param["UserEsRepository"] !== null) {
            $this->UserEsRepository = $param["UserEsRepository"];
        }

        if (array_key_exists("CosBasePath",$param) and $param["CosBasePath"] !== null) {
            $this->CosBasePath = $param["CosBasePath"];
        }

        if (array_key_exists("StorageDuration",$param) and $param["StorageDuration"] !== null) {
            $this->StorageDuration = $param["StorageDuration"];
        }

        if (array_key_exists("AutoBackupInterval",$param) and $param["AutoBackupInterval"] !== null) {
            $this->AutoBackupInterval = $param["AutoBackupInterval"];
        }

        if (array_key_exists("CosRetention",$param) and $param["CosRetention"] !== null) {
            $this->CosRetention = $param["CosRetention"];
        }

        if (array_key_exists("RetainUntilDate",$param) and $param["RetainUntilDate"] !== null) {
            $this->RetainUntilDate = $param["RetainUntilDate"];
        }

        if (array_key_exists("RetentionGraceTime",$param) and $param["RetentionGraceTime"] !== null) {
            $this->RetentionGraceTime = $param["RetentionGraceTime"];
        }

        if (array_key_exists("RemoteCos",$param) and $param["RemoteCos"] !== null) {
            $this->RemoteCos = $param["RemoteCos"];
        }

        if (array_key_exists("RemoteCosRegion",$param) and $param["RemoteCosRegion"] !== null) {
            $this->RemoteCosRegion = $param["RemoteCosRegion"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("Indices",$param) and $param["Indices"] !== null) {
            $this->Indices = $param["Indices"];
        }

        if (array_key_exists("MultiAz",$param) and $param["MultiAz"] !== null) {
            $this->MultiAz = $param["MultiAz"];
        }

        if (array_key_exists("MaxSnapshotPerSec",$param) and $param["MaxSnapshotPerSec"] !== null) {
            $this->MaxSnapshotPerSec = $param["MaxSnapshotPerSec"];
        }

        if (array_key_exists("MaxRestorePerSec",$param) and $param["MaxRestorePerSec"] !== null) {
            $this->MaxRestorePerSec = $param["MaxRestorePerSec"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
