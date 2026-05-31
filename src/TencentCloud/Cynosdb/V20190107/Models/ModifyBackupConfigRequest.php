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
 * ModifyBackupConfig request structure.
 *
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method integer getBackupTimeBeg() Obtain <p>Indicates the full backup start time, [0-24*3600]. For example, 0:00, 1:00, and 2:00 are 0, 3600, and 7200 respectively.</p>
 * @method void setBackupTimeBeg(integer $BackupTimeBeg) Set <p>Indicates the full backup start time, [0-24*3600]. For example, 0:00, 1:00, and 2:00 are 0, 3600, and 7200 respectively.</p>
 * @method integer getBackupTimeEnd() Obtain <p>Indicates the full backup end time, [0-24*3600]. For example, 0:00, 1:00, and 2:00 are 0, 3600, and 7200 respectively.</p>
 * @method void setBackupTimeEnd(integer $BackupTimeEnd) Set <p>Indicates the full backup end time, [0-24*3600]. For example, 0:00, 1:00, and 2:00 are 0, 3600, and 7200 respectively.</p>
 * @method integer getReserveDuration() Obtain <p>Indicates the backup retention period in seconds. Backups will be cleaned up longer than this time. Seven days is represented as 3600<em>24</em>7=604800. The maximum value is 158112000.</p>
 * @method void setReserveDuration(integer $ReserveDuration) Set <p>Indicates the backup retention period in seconds. Backups will be cleaned up longer than this time. Seven days is represented as 3600<em>24</em>7=604800. The maximum value is 158112000.</p>
 * @method array getBackupFreq() Obtain <p>This parameter currently does not support modification and is not required. Backup frequency is an array of length 7, corresponding to Monday to Sunday backup method, full-full backup, increment-incremental backup.</p>
 * @method void setBackupFreq(array $BackupFreq) Set <p>This parameter currently does not support modification and is not required. Backup frequency is an array of length 7, corresponding to Monday to Sunday backup method, full-full backup, increment-incremental backup.</p>
 * @method string getBackupType() Obtain <p>This parameter currently does not support modification. No need to specify.</p>
 * @method void setBackupType(string $BackupType) Set <p>This parameter currently does not support modification. No need to specify.</p>
 * @method LogicBackupConfigInfo getLogicBackupConfig() Obtain <p>Logical backup configuration</p>
 * @method void setLogicBackupConfig(LogicBackupConfigInfo $LogicBackupConfig) Set <p>Logical backup configuration</p>
 * @method boolean getDeleteAutoLogicBackup() Obtain <p>Whether to delete automatic logical backup</p>
 * @method void setDeleteAutoLogicBackup(boolean $DeleteAutoLogicBackup) Set <p>Whether to delete automatic logical backup</p>
 * @method SnapshotBackupConfig getSnapshotSecondaryBackupConfig() Obtain <p>Second-level snapshot backup parameter</p>
 * @method void setSnapshotSecondaryBackupConfig(SnapshotBackupConfig $SnapshotSecondaryBackupConfig) Set <p>Second-level snapshot backup parameter</p>
 * @method SparseBackupConfig getSparseBackupConfig() Obtain <p>Sparse backup configuration</p>
 * @method void setSparseBackupConfig(SparseBackupConfig $SparseBackupConfig) Set <p>Sparse backup configuration</p>
 */
class ModifyBackupConfigRequest extends AbstractModel
{
    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>Indicates the full backup start time, [0-24*3600]. For example, 0:00, 1:00, and 2:00 are 0, 3600, and 7200 respectively.</p>
     */
    public $BackupTimeBeg;

    /**
     * @var integer <p>Indicates the full backup end time, [0-24*3600]. For example, 0:00, 1:00, and 2:00 are 0, 3600, and 7200 respectively.</p>
     */
    public $BackupTimeEnd;

    /**
     * @var integer <p>Indicates the backup retention period in seconds. Backups will be cleaned up longer than this time. Seven days is represented as 3600<em>24</em>7=604800. The maximum value is 158112000.</p>
     */
    public $ReserveDuration;

    /**
     * @var array <p>This parameter currently does not support modification and is not required. Backup frequency is an array of length 7, corresponding to Monday to Sunday backup method, full-full backup, increment-incremental backup.</p>
     */
    public $BackupFreq;

    /**
     * @var string <p>This parameter currently does not support modification. No need to specify.</p>
     */
    public $BackupType;

    /**
     * @var LogicBackupConfigInfo <p>Logical backup configuration</p>
     */
    public $LogicBackupConfig;

    /**
     * @var boolean <p>Whether to delete automatic logical backup</p>
     */
    public $DeleteAutoLogicBackup;

    /**
     * @var SnapshotBackupConfig <p>Second-level snapshot backup parameter</p>
     */
    public $SnapshotSecondaryBackupConfig;

    /**
     * @var SparseBackupConfig <p>Sparse backup configuration</p>
     */
    public $SparseBackupConfig;

    /**
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param integer $BackupTimeBeg <p>Indicates the full backup start time, [0-24*3600]. For example, 0:00, 1:00, and 2:00 are 0, 3600, and 7200 respectively.</p>
     * @param integer $BackupTimeEnd <p>Indicates the full backup end time, [0-24*3600]. For example, 0:00, 1:00, and 2:00 are 0, 3600, and 7200 respectively.</p>
     * @param integer $ReserveDuration <p>Indicates the backup retention period in seconds. Backups will be cleaned up longer than this time. Seven days is represented as 3600<em>24</em>7=604800. The maximum value is 158112000.</p>
     * @param array $BackupFreq <p>This parameter currently does not support modification and is not required. Backup frequency is an array of length 7, corresponding to Monday to Sunday backup method, full-full backup, increment-incremental backup.</p>
     * @param string $BackupType <p>This parameter currently does not support modification. No need to specify.</p>
     * @param LogicBackupConfigInfo $LogicBackupConfig <p>Logical backup configuration</p>
     * @param boolean $DeleteAutoLogicBackup <p>Whether to delete automatic logical backup</p>
     * @param SnapshotBackupConfig $SnapshotSecondaryBackupConfig <p>Second-level snapshot backup parameter</p>
     * @param SparseBackupConfig $SparseBackupConfig <p>Sparse backup configuration</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("BackupTimeBeg",$param) and $param["BackupTimeBeg"] !== null) {
            $this->BackupTimeBeg = $param["BackupTimeBeg"];
        }

        if (array_key_exists("BackupTimeEnd",$param) and $param["BackupTimeEnd"] !== null) {
            $this->BackupTimeEnd = $param["BackupTimeEnd"];
        }

        if (array_key_exists("ReserveDuration",$param) and $param["ReserveDuration"] !== null) {
            $this->ReserveDuration = $param["ReserveDuration"];
        }

        if (array_key_exists("BackupFreq",$param) and $param["BackupFreq"] !== null) {
            $this->BackupFreq = $param["BackupFreq"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("LogicBackupConfig",$param) and $param["LogicBackupConfig"] !== null) {
            $this->LogicBackupConfig = new LogicBackupConfigInfo();
            $this->LogicBackupConfig->deserialize($param["LogicBackupConfig"]);
        }

        if (array_key_exists("DeleteAutoLogicBackup",$param) and $param["DeleteAutoLogicBackup"] !== null) {
            $this->DeleteAutoLogicBackup = $param["DeleteAutoLogicBackup"];
        }

        if (array_key_exists("SnapshotSecondaryBackupConfig",$param) and $param["SnapshotSecondaryBackupConfig"] !== null) {
            $this->SnapshotSecondaryBackupConfig = new SnapshotBackupConfig();
            $this->SnapshotSecondaryBackupConfig->deserialize($param["SnapshotSecondaryBackupConfig"]);
        }

        if (array_key_exists("SparseBackupConfig",$param) and $param["SparseBackupConfig"] !== null) {
            $this->SparseBackupConfig = new SparseBackupConfig();
            $this->SparseBackupConfig->deserialize($param["SparseBackupConfig"]);
        }
    }
}
