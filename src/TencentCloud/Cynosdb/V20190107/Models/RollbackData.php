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
 * Rollback task information.
 *
 * @method integer getCpu() Obtain Instance CPU.
 * @method void setCpu(integer $Cpu) Set Instance CPU.
 * @method integer getMemory() Obtain Instance memory.
 * @method void setMemory(integer $Memory) Set Instance memory.
 * @method integer getStorageLimit() Obtain Cluster storage upper limit.
 * @method void setStorageLimit(integer $StorageLimit) Set Cluster storage upper limit.
 * @method string getOriginalClusterId() Obtain Original cluster ID.
 * @method void setOriginalClusterId(string $OriginalClusterId) Set Original cluster ID.
 * @method string getOriginalClusterName() Obtain Original cluster name.
 * @method void setOriginalClusterName(string $OriginalClusterName) Set Original cluster name.
 * @method string getRollbackStrategy() Obtain Rollback method.
 * @method void setRollbackStrategy(string $RollbackStrategy) Set Rollback method.
 * @method string getSnapshotTime() Obtain Snapshot time.
 * @method void setSnapshotTime(string $SnapshotTime) Set Snapshot time.
 * @method integer getMinCpu() Obtain Roll back to the Serverless cluster with minimum CPU.
 * @method void setMinCpu(integer $MinCpu) Set Roll back to the Serverless cluster with minimum CPU.
 * @method integer getMaxCpu() Obtain Roll back to the Serverless cluster with maximum CPU.
 * @method void setMaxCpu(integer $MaxCpu) Set Roll back to the Serverless cluster with maximum CPU.
 * @method integer getSnapShotId() Obtain Snapshot ID.
 * @method void setSnapShotId(integer $SnapShotId) Set Snapshot ID.
 * @method array getRollbackDatabases() Obtain Rollback database.
 * @method void setRollbackDatabases(array $RollbackDatabases) Set Rollback database.
 * @method array getRollbackTables() Obtain Rollback data table.
 * @method void setRollbackTables(array $RollbackTables) Set Rollback data table.
 * @method string getBackupFileName() Obtain Specifies the backup file name.
 * @method void setBackupFileName(string $BackupFileName) Set Specifies the backup file name.
 * @method RollbackProcessInfo getRollbackProcess() Obtain Rollback process.
 * @method void setRollbackProcess(RollbackProcessInfo $RollbackProcess) Set Rollback process.
 */
class RollbackData extends AbstractModel
{
    /**
     * @var integer Instance CPU.
     */
    public $Cpu;

    /**
     * @var integer Instance memory.
     */
    public $Memory;

    /**
     * @var integer Cluster storage upper limit.
     */
    public $StorageLimit;

    /**
     * @var string Original cluster ID.
     */
    public $OriginalClusterId;

    /**
     * @var string Original cluster name.
     */
    public $OriginalClusterName;

    /**
     * @var string Rollback method.
     */
    public $RollbackStrategy;

    /**
     * @var string Snapshot time.
     */
    public $SnapshotTime;

    /**
     * @var integer Roll back to the Serverless cluster with minimum CPU.
     */
    public $MinCpu;

    /**
     * @var integer Roll back to the Serverless cluster with maximum CPU.
     */
    public $MaxCpu;

    /**
     * @var integer Snapshot ID.
     */
    public $SnapShotId;

    /**
     * @var array Rollback database.
     */
    public $RollbackDatabases;

    /**
     * @var array Rollback data table.
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
     * @param integer $Cpu Instance CPU.
     * @param integer $Memory Instance memory.
     * @param integer $StorageLimit Cluster storage upper limit.
     * @param string $OriginalClusterId Original cluster ID.
     * @param string $OriginalClusterName Original cluster name.
     * @param string $RollbackStrategy Rollback method.
     * @param string $SnapshotTime Snapshot time.
     * @param integer $MinCpu Roll back to the Serverless cluster with minimum CPU.
     * @param integer $MaxCpu Roll back to the Serverless cluster with maximum CPU.
     * @param integer $SnapShotId Snapshot ID.
     * @param array $RollbackDatabases Rollback database.
     * @param array $RollbackTables Rollback data table.
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
