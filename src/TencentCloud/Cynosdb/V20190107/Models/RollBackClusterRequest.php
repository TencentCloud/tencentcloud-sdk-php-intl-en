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
 * RollBackCluster request structure.
 *
 * @method string getClusterId() Obtain Cluster ID.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
 * @method string getRollbackStrategy() Obtain Rollback policy. timeRollback - roll back by time point; snapRollback - roll back by backup file.
 * @method void setRollbackStrategy(string $RollbackStrategy) Set Rollback policy. timeRollback - roll back by time point; snapRollback - roll back by backup file.
 * @method integer getRollbackId() Obtain Backup file ID. This parameter is required when the rollback policy is rolling back by backup file.
 * @method void setRollbackId(integer $RollbackId) Set Backup file ID. This parameter is required when the rollback policy is rolling back by backup file.
 * @method string getExpectTime() Obtain Expected rollback time. This parameter is required when the rollback policy is timeRollback (roll back by time point).
 * @method void setExpectTime(string $ExpectTime) Set Expected rollback time. This parameter is required when the rollback policy is timeRollback (roll back by time point).
 * @method integer getExpectTimeThresh() Obtain Expected threshold (deprecated).
 * @method void setExpectTimeThresh(integer $ExpectTimeThresh) Set Expected threshold (deprecated).
 * @method array getRollbackDatabases() Obtain List of rollback databases.
 * @method void setRollbackDatabases(array $RollbackDatabases) Set List of rollback databases.
 * @method array getRollbackTables() Obtain List of rollback databases and tables.
 * @method void setRollbackTables(array $RollbackTables) Set List of rollback databases and tables.
 * @method string getRollbackMode() Obtain Mode of rolling back by time point. full: normal; db: fast; table: ultra-fast (the default value is normal).
 * @method void setRollbackMode(string $RollbackMode) Set Mode of rolling back by time point. full: normal; db: fast; table: ultra-fast (the default value is normal).
 */
class RollBackClusterRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $ClusterId;

    /**
     * @var string Rollback policy. timeRollback - roll back by time point; snapRollback - roll back by backup file.
     */
    public $RollbackStrategy;

    /**
     * @var integer Backup file ID. This parameter is required when the rollback policy is rolling back by backup file.
     */
    public $RollbackId;

    /**
     * @var string Expected rollback time. This parameter is required when the rollback policy is timeRollback (roll back by time point).
     */
    public $ExpectTime;

    /**
     * @var integer Expected threshold (deprecated).
     */
    public $ExpectTimeThresh;

    /**
     * @var array List of rollback databases.
     */
    public $RollbackDatabases;

    /**
     * @var array List of rollback databases and tables.
     */
    public $RollbackTables;

    /**
     * @var string Mode of rolling back by time point. full: normal; db: fast; table: ultra-fast (the default value is normal).
     */
    public $RollbackMode;

    /**
     * @param string $ClusterId Cluster ID.
     * @param string $RollbackStrategy Rollback policy. timeRollback - roll back by time point; snapRollback - roll back by backup file.
     * @param integer $RollbackId Backup file ID. This parameter is required when the rollback policy is rolling back by backup file.
     * @param string $ExpectTime Expected rollback time. This parameter is required when the rollback policy is timeRollback (roll back by time point).
     * @param integer $ExpectTimeThresh Expected threshold (deprecated).
     * @param array $RollbackDatabases List of rollback databases.
     * @param array $RollbackTables List of rollback databases and tables.
     * @param string $RollbackMode Mode of rolling back by time point. full: normal; db: fast; table: ultra-fast (the default value is normal).
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

        if (array_key_exists("RollbackStrategy",$param) and $param["RollbackStrategy"] !== null) {
            $this->RollbackStrategy = $param["RollbackStrategy"];
        }

        if (array_key_exists("RollbackId",$param) and $param["RollbackId"] !== null) {
            $this->RollbackId = $param["RollbackId"];
        }

        if (array_key_exists("ExpectTime",$param) and $param["ExpectTime"] !== null) {
            $this->ExpectTime = $param["ExpectTime"];
        }

        if (array_key_exists("ExpectTimeThresh",$param) and $param["ExpectTimeThresh"] !== null) {
            $this->ExpectTimeThresh = $param["ExpectTimeThresh"];
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

        if (array_key_exists("RollbackMode",$param) and $param["RollbackMode"] !== null) {
            $this->RollbackMode = $param["RollbackMode"];
        }
    }
}
