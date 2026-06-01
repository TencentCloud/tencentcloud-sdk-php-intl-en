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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of the instance for rollback
 *
 * @method string getInstanceId() Obtain Cloud database instance ID.
 * @method void setInstanceId(string $InstanceId) Set Cloud database instance ID.
 * @method string getStrategy() Obtain Rollback strategy. Optional values: table, db, full. table - Ultra-fast rollback mode, only imports selected table-level backups and binlog. If there are cross-table operations and the associated table hasn't been selected, it will cause rollback failure. In this mode, parameter Databases must be empty. db - Quick mode, only imports selected database-level backups and binlog. If there are cross-database operations and the associated database hasn't been selected, it will cause rollback failure. full - Standard rollback mode, imports backups and binlog of the entire instance, speed is not as fast.
 * @method void setStrategy(string $Strategy) Set Rollback strategy. Optional values: table, db, full. table - Ultra-fast rollback mode, only imports selected table-level backups and binlog. If there are cross-table operations and the associated table hasn't been selected, it will cause rollback failure. In this mode, parameter Databases must be empty. db - Quick mode, only imports selected database-level backups and binlog. If there are cross-database operations and the associated database hasn't been selected, it will cause rollback failure. full - Standard rollback mode, imports backups and binlog of the entire instance, speed is not as fast.
 * @method string getRollbackTime() Obtain Database rollback time in the format of yyyy-mm-dd hh:mm:ss.
 * @method void setRollbackTime(string $RollbackTime) Set Database rollback time in the format of yyyy-mm-dd hh:mm:ss.
 * @method array getDatabases() Obtain Database information to be rolled back, which means database rollback.
 * @method void setDatabases(array $Databases) Set Database information to be rolled back, which means database rollback.
 * @method array getTables() Obtain Database table information to be rolled back, which means rollback by table.
 * @method void setTables(array $Tables) Set Database table information to be rolled back, which means rollback by table.
 */
class RollbackInstancesInfo extends AbstractModel
{
    /**
     * @var string Cloud database instance ID.
     */
    public $InstanceId;

    /**
     * @var string Rollback strategy. Optional values: table, db, full. table - Ultra-fast rollback mode, only imports selected table-level backups and binlog. If there are cross-table operations and the associated table hasn't been selected, it will cause rollback failure. In this mode, parameter Databases must be empty. db - Quick mode, only imports selected database-level backups and binlog. If there are cross-database operations and the associated database hasn't been selected, it will cause rollback failure. full - Standard rollback mode, imports backups and binlog of the entire instance, speed is not as fast.
     */
    public $Strategy;

    /**
     * @var string Database rollback time in the format of yyyy-mm-dd hh:mm:ss.
     */
    public $RollbackTime;

    /**
     * @var array Database information to be rolled back, which means database rollback.
     */
    public $Databases;

    /**
     * @var array Database table information to be rolled back, which means rollback by table.
     */
    public $Tables;

    /**
     * @param string $InstanceId Cloud database instance ID.
     * @param string $Strategy Rollback strategy. Optional values: table, db, full. table - Ultra-fast rollback mode, only imports selected table-level backups and binlog. If there are cross-table operations and the associated table hasn't been selected, it will cause rollback failure. In this mode, parameter Databases must be empty. db - Quick mode, only imports selected database-level backups and binlog. If there are cross-database operations and the associated database hasn't been selected, it will cause rollback failure. full - Standard rollback mode, imports backups and binlog of the entire instance, speed is not as fast.
     * @param string $RollbackTime Database rollback time in the format of yyyy-mm-dd hh:mm:ss.
     * @param array $Databases Database information to be rolled back, which means database rollback.
     * @param array $Tables Database table information to be rolled back, which means rollback by table.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("RollbackTime",$param) and $param["RollbackTime"] !== null) {
            $this->RollbackTime = $param["RollbackTime"];
        }

        if (array_key_exists("Databases",$param) and $param["Databases"] !== null) {
            $this->Databases = [];
            foreach ($param["Databases"] as $key => $value){
                $obj = new RollbackDBName();
                $obj->deserialize($value);
                array_push($this->Databases, $obj);
            }
        }

        if (array_key_exists("Tables",$param) and $param["Tables"] !== null) {
            $this->Tables = [];
            foreach ($param["Tables"] as $key => $value){
                $obj = new RollbackTables();
                $obj->deserialize($value);
                array_push($this->Tables, $obj);
            }
        }
    }
}
