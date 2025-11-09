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
 * 
 *
 * @method integer getCpu() Obtain 
 * @method void setCpu(integer $Cpu) Set 
 * @method integer getMemory() Obtain 
 * @method void setMemory(integer $Memory) Set 
 * @method integer getStorageLimit() Obtain 
 * @method void setStorageLimit(integer $StorageLimit) Set 
 * @method string getOriginalClusterId() Obtain 
 * @method void setOriginalClusterId(string $OriginalClusterId) Set 
 * @method string getOriginalClusterName() Obtain 
 * @method void setOriginalClusterName(string $OriginalClusterName) Set 
 * @method string getRollbackStrategy() Obtain 
 * @method void setRollbackStrategy(string $RollbackStrategy) Set 
 * @method string getSnapshotTime() Obtain 
 * @method void setSnapshotTime(string $SnapshotTime) Set 
 * @method integer getMinCpu() Obtain Minimum CPU when rolling back to a serverlessls cluster.
 * @method void setMinCpu(integer $MinCpu) Set Minimum CPU when rolling back to a serverlessls cluster.
 * @method integer getMaxCpu() Obtain Maximum CPU when rolling back to a serverlessls cluster.
 * @method void setMaxCpu(integer $MaxCpu) Set Maximum CPU when rolling back to a serverlessls cluster.
 * @method integer getSnapShotId() Obtain Snapshot ID.
 * @method void setSnapShotId(integer $SnapShotId) Set Snapshot ID.
 * @method array getRollbackDatabases() Obtain 
 * @method void setRollbackDatabases(array $RollbackDatabases) Set 
 * @method array getRollbackTables() Obtain 
 * @method void setRollbackTables(array $RollbackTables) Set 
 * @method string getBackupFileName() Obtain Specifies the backup file name.
 * @method void setBackupFileName(string $BackupFileName) Set Specifies the backup file name.
 * @method RollbackProcessInfo getRollbackProcess() Obtain Rollback process.
 * @method void setRollbackProcess(RollbackProcessInfo $RollbackProcess) Set Rollback process.
 */
class RollbackData extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Cpu;

    /**
     * @var integer 
     */
    public $Memory;

    /**
     * @var integer 
     */
    public $StorageLimit;

    /**
     * @var string 
     */
    public $OriginalClusterId;

    /**
     * @var string 
     */
    public $OriginalClusterName;

    /**
     * @var string 
     */
    public $RollbackStrategy;

    /**
     * @var string 
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
     * @var array 
     */
    public $RollbackDatabases;

    /**
     * @var array 
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
     * @param integer $Cpu 
     * @param integer $Memory 
     * @param integer $StorageLimit 
     * @param string $OriginalClusterId 
     * @param string $OriginalClusterName 
     * @param string $RollbackStrategy 
     * @param string $SnapshotTime 
     * @param integer $MinCpu Minimum CPU when rolling back to a serverlessls cluster.
     * @param integer $MaxCpu Maximum CPU when rolling back to a serverlessls cluster.
     * @param integer $SnapShotId Snapshot ID.
     * @param array $RollbackDatabases 
     * @param array $RollbackTables 
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
