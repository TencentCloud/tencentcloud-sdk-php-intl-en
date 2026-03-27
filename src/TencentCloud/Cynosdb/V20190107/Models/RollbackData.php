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
 * Rollback Task Information
 *
 * @method integer getCpu() Obtain Instance CPU
 * @method void setCpu(integer $Cpu) Set Instance CPU
 * @method integer getMemory() Obtain Instance Memory
 * @method void setMemory(integer $Memory) Set Instance Memory
 * @method integer getStorageLimit() Obtain Cluster storage limit
 * @method void setStorageLimit(integer $StorageLimit) Set Cluster storage limit
 * @method string getOriginalClusterId() Obtain Original Cluster id
 * @method void setOriginalClusterId(string $OriginalClusterId) Set Original Cluster id
 * @method string getOriginalClusterName() Obtain Original Cluster Name
 * @method void setOriginalClusterName(string $OriginalClusterName) Set Original Cluster Name
 * @method string getRollbackStrategy() Obtain Rollback Method
 * @method void setRollbackStrategy(string $RollbackStrategy) Set Rollback Method
 * @method string getSnapshotTime() Obtain Snapshot Time
 * @method void setSnapshotTime(string $SnapshotTime) Set Snapshot Time
 * @method integer getMinCpu() Obtain Minimum CPU when rolling back to a serverlessls cluster.
 * @method void setMinCpu(integer $MinCpu) Set Minimum CPU when rolling back to a serverlessls cluster.
 * @method integer getMaxCpu() Obtain Maximum CPU when rolling back to a serverlessls cluster.
 * @method void setMaxCpu(integer $MaxCpu) Set Maximum CPU when rolling back to a serverlessls cluster.
 * @method integer getSnapShotId() Obtain Snapshot ID.
 * @method void setSnapShotId(integer $SnapShotId) Set Snapshot ID.
 * @method array getRollbackDatabases() Obtain Rollback Database
 * @method void setRollbackDatabases(array $RollbackDatabases) Set Rollback Database
 * @method array getRollbackTables() Obtain Rollback Data Table
 * @method void setRollbackTables(array $RollbackTables) Set Rollback Data Table
 * @method string getBackupFileName() Obtain Specifies the backup file name.
 * @method void setBackupFileName(string $BackupFileName) Set Specifies the backup file name.
 * @method RollbackProcessInfo getRollbackProcess() Obtain Rollback process.
 * @method void setRollbackProcess(RollbackProcessInfo $RollbackProcess) Set Rollback process.
 */
class RollbackData extends AbstractModel
{
    /**
     * @var integer Instance CPU
     */
    public $Cpu;

    /**
     * @var integer Instance Memory
     */
    public $Memory;

    /**
     * @var integer Cluster storage limit
     */
    public $StorageLimit;

    /**
     * @var string Original Cluster id
     */
    public $OriginalClusterId;

    /**
     * @var string Original Cluster Name
     */
    public $OriginalClusterName;

    /**
     * @var string Rollback Method
     */
    public $RollbackStrategy;

    /**
     * @var string Snapshot Time
     */
    public $SnapshotTime;

    /**
     * @var integer Minimum CPU when rolling back to a serverlessls cluster.
     */
    public $MinCpu;

    /**
     * @var integer Maximum CPU when rolling back to a serverlessls cluster.
     */
    public $MaxCpu;

    /**
     * @var integer Snapshot ID.
     */
    public $SnapShotId;

    /**
     * @var array Rollback Database
     */
    public $RollbackDatabases;

    /**
     * @var array Rollback Data Table
     */
    public $RollbackTables;

    /**
     * @var string Specifies the backup file name.
     */
    public $BackupFileName;

    /**
     * @var RollbackProcessInfo Rollback process.
     */
    public $RollbackProcess;

    /**
     * @param integer $Cpu Instance CPU
     * @param integer $Memory Instance Memory
     * @param integer $StorageLimit Cluster storage limit
     * @param string $OriginalClusterId Original Cluster id
     * @param string $OriginalClusterName Original Cluster Name
     * @param string $RollbackStrategy Rollback Method
     * @param string $SnapshotTime Snapshot Time
     * @param integer $MinCpu Minimum CPU when rolling back to a serverlessls cluster.
     * @param integer $MaxCpu Maximum CPU when rolling back to a serverlessls cluster.
     * @param integer $SnapShotId Snapshot ID.
     * @param array $RollbackDatabases Rollback Database
     * @param array $RollbackTables Rollback Data Table
     * @param string $BackupFileName Specifies the backup file name.
     * @param RollbackProcessInfo $RollbackProcess Rollback process.
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
        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
        }

        if (array_key_exists("OriginalClusterId",$param) and $param["OriginalClusterId"] !== null) {
            $this->OriginalClusterId = $param["OriginalClusterId"];
        }

        if (array_key_exists("OriginalClusterName",$param) and $param["OriginalClusterName"] !== null) {
            $this->OriginalClusterName = $param["OriginalClusterName"];
        }

        if (array_key_exists("RollbackStrategy",$param) and $param["RollbackStrategy"] !== null) {
            $this->RollbackStrategy = $param["RollbackStrategy"];
        }

        if (array_key_exists("SnapshotTime",$param) and $param["SnapshotTime"] !== null) {
            $this->SnapshotTime = $param["SnapshotTime"];
        }

        if (array_key_exists("MinCpu",$param) and $param["MinCpu"] !== null) {
            $this->MinCpu = $param["MinCpu"];
        }

        if (array_key_exists("MaxCpu",$param) and $param["MaxCpu"] !== null) {
            $this->MaxCpu = $param["MaxCpu"];
        }

        if (array_key_exists("SnapShotId",$param) and $param["SnapShotId"] !== null) {
            $this->SnapShotId = $param["SnapShotId"];
        }

        if (array_key_exists("RollbackDatabases",$param) and $param["RollbackDatabases"] !== null) {
            $this->RollbackDatabases = [];
            foreach ($param["RollbackDatabases"] as $key => $value){
                $obj = new RollbackDatabase();
                $obj->deserialize($value);
                array_push($this->RollbackDatabases, $obj);
            }
        }

        if (array_key_exists("RollbackTables",$param) and $param["RollbackTables"] !== null) {
            $this->RollbackTables = [];
            foreach ($param["RollbackTables"] as $key => $value){
                $obj = new RollbackTable();
                $obj->deserialize($value);
                array_push($this->RollbackTables, $obj);
            }
        }

        if (array_key_exists("BackupFileName",$param) and $param["BackupFileName"] !== null) {
            $this->BackupFileName = $param["BackupFileName"];
        }

        if (array_key_exists("RollbackProcess",$param) and $param["RollbackProcess"] !== null) {
            $this->RollbackProcess = new RollbackProcessInfo();
            $this->RollbackProcess->deserialize($param["RollbackProcess"]);
        }
    }
}
