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
 * Auto-backup to COS for ES
 *
 * @method boolean getIsAutoBackup() Obtain Whether to enable auto-backup to COS
 * @method void setIsAutoBackup(boolean $IsAutoBackup) Set Whether to enable auto-backup to COS
 * @method string getBackupTime() Obtain Auto-backup time (accurate down to the hour), such as "22:00"
 * @method void setBackupTime(string $BackupTime) Set Auto-backup time (accurate down to the hour), such as "22:00"
 * @method string getSnapshotName() Obtain Backup snapshot prefix.
 * @method void setSnapshotName(string $SnapshotName) Set Backup snapshot prefix.
 * @method integer getEsRepositoryType() Obtain Valid values: 0 (Tencent Cloud repository) and 1 (customer repository).
 * @method void setEsRepositoryType(integer $EsRepositoryType) Set Valid values: 0 (Tencent Cloud repository) and 1 (customer repository).
 * @method string getPaasEsRepository() Obtain Managed snapshot repository name.
 * @method void setPaasEsRepository(string $PaasEsRepository) Set Managed snapshot repository name.
 * @method string getUserEsRepository() Obtain Customer snapshot repository name.
 * @method void setUserEsRepository(string $UserEsRepository) Set Customer snapshot repository name.
 * @method string getCosBasePath() Obtain COS storage folder directory.
 * @method void setCosBasePath(string $CosBasePath) Set COS storage folder directory.
 * @method integer getStorageDuration() Obtain Snapshot storage cycle in days.
 * @method void setStorageDuration(integer $StorageDuration) Set Snapshot storage cycle in days.
 * @method integer getAutoBackupInterval() Obtain Auto backup frequency in hours.
 * @method void setAutoBackupInterval(integer $AutoBackupInterval) Set Auto backup frequency in hours.
 * @method integer getCosRetention() Obtain Backup lock. Valid values: 0 (not locked) and 1 (locked).
 * @method void setCosRetention(integer $CosRetention) Set Backup lock. Valid values: 0 (not locked) and 1 (locked).
 * @method string getRetainUntilDate() Obtain Lock expiration date, such as 2022-12-10T08:34:48.000Z.
 * @method void setRetainUntilDate(string $RetainUntilDate) Set Lock expiration date, such as 2022-12-10T08:34:48.000Z.
 * @method integer getRetentionGraceTime() Obtain Lock grace period.
 * @method void setRetentionGraceTime(integer $RetentionGraceTime) Set Lock grace period.
 * @method integer getRemoteCos() Obtain Cross-region backup. Valid values: 0 (disabled) and 1 (enabled).
 * @method void setRemoteCos(integer $RemoteCos) Set Cross-region backup. Valid values: 0 (disabled) and 1 (enabled).
 * @method string getRemoteCosRegion() Obtain Region name for cross-region backup, such as ap-guangzhou.
 * @method void setRemoteCosRegion(string $RemoteCosRegion) Set Region name for cross-region backup, such as ap-guangzhou.
 * @method string getStrategyName() Obtain Policy name.
 * @method void setStrategyName(string $StrategyName) Set Policy name.
 * @method string getIndices() Obtain Backup index list. If left empty, it means to back up all indexes.
 * @method void setIndices(string $Indices) Set Backup index list. If left empty, it means to back up all indexes.
 * @method integer getMultiAz() Obtain 
 * @method void setMultiAz(integer $MultiAz) Set 
 * @method string getCreateTime() Obtain Policy creation time.
 * @method void setCreateTime(string $CreateTime) Set Policy creation time.
 */
class CosBackup extends AbstractModel
{
    /**
     * @var boolean Whether to enable auto-backup to COS
     */
    public $IsAutoBackup;

    /**
     * @var string Auto-backup time (accurate down to the hour), such as "22:00"
     */
    public $BackupTime;

    /**
     * @var string Backup snapshot prefix.
     */
    public $SnapshotName;

    /**
     * @var integer Valid values: 0 (Tencent Cloud repository) and 1 (customer repository).
     */
    public $EsRepositoryType;

    /**
     * @var string Managed snapshot repository name.
     */
    public $PaasEsRepository;

    /**
     * @var string Customer snapshot repository name.
     */
    public $UserEsRepository;

    /**
     * @var string COS storage folder directory.
     */
    public $CosBasePath;

    /**
     * @var integer Snapshot storage cycle in days.
     */
    public $StorageDuration;

    /**
     * @var integer Auto backup frequency in hours.
     */
    public $AutoBackupInterval;

    /**
     * @var integer Backup lock. Valid values: 0 (not locked) and 1 (locked).
     */
    public $CosRetention;

    /**
     * @var string Lock expiration date, such as 2022-12-10T08:34:48.000Z.
     */
    public $RetainUntilDate;

    /**
     * @var integer Lock grace period.
     */
    public $RetentionGraceTime;

    /**
     * @var integer Cross-region backup. Valid values: 0 (disabled) and 1 (enabled).
     */
    public $RemoteCos;

    /**
     * @var string Region name for cross-region backup, such as ap-guangzhou.
     */
    public $RemoteCosRegion;

    /**
     * @var string Policy name.
     */
    public $StrategyName;

    /**
     * @var string Backup index list. If left empty, it means to back up all indexes.
     */
    public $Indices;

    /**
     * @var integer 
     */
    public $MultiAz;

    /**
     * @var string Policy creation time.
     */
    public $CreateTime;

    /**
     * @param boolean $IsAutoBackup Whether to enable auto-backup to COS
     * @param string $BackupTime Auto-backup time (accurate down to the hour), such as "22:00"
     * @param string $SnapshotName Backup snapshot prefix.
     * @param integer $EsRepositoryType Valid values: 0 (Tencent Cloud repository) and 1 (customer repository).
     * @param string $PaasEsRepository Managed snapshot repository name.
     * @param string $UserEsRepository Customer snapshot repository name.
     * @param string $CosBasePath COS storage folder directory.
     * @param integer $StorageDuration Snapshot storage cycle in days.
     * @param integer $AutoBackupInterval Auto backup frequency in hours.
     * @param integer $CosRetention Backup lock. Valid values: 0 (not locked) and 1 (locked).
     * @param string $RetainUntilDate Lock expiration date, such as 2022-12-10T08:34:48.000Z.
     * @param integer $RetentionGraceTime Lock grace period.
     * @param integer $RemoteCos Cross-region backup. Valid values: 0 (disabled) and 1 (enabled).
     * @param string $RemoteCosRegion Region name for cross-region backup, such as ap-guangzhou.
     * @param string $StrategyName Policy name.
     * @param string $Indices Backup index list. If left empty, it means to back up all indexes.
     * @param integer $MultiAz 
     * @param string $CreateTime Policy creation time.
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
