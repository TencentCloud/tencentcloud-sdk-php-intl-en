<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getInstanceId() Obtain TencentDB instance ID
 * @method void setInstanceId(string $InstanceId) Set TencentDB instance ID
 * @method string getStrategy() Obtain Rollback policy. Value range: table, db, full. Default value: full. Table: expedited rollback mode, where only the selected table-level backups and binlogs are imported; for cross-table rollback, if the associated tables are not selected simultaneously, the rollback will fail; the parameter `Databases` must be empty under this mode. db: fast rollback mode, where only the selected database-level backups and binlogs are imported; for cross-database rollback, if the associated databases are not selected simultaneously, the rollback will fail. full: ordinary rollback mode, which imports all the backups and binlogs of the instance at a relatively low speed.
 * @method void setStrategy(string $Strategy) Set Rollback policy. Value range: table, db, full. Default value: full. Table: expedited rollback mode, where only the selected table-level backups and binlogs are imported; for cross-table rollback, if the associated tables are not selected simultaneously, the rollback will fail; the parameter `Databases` must be empty under this mode. db: fast rollback mode, where only the selected database-level backups and binlogs are imported; for cross-database rollback, if the associated databases are not selected simultaneously, the rollback will fail. full: ordinary rollback mode, which imports all the backups and binlogs of the instance at a relatively low speed.
 * @method string getRollbackTime() Obtain Database rollback time in the format of yyyy-mm-dd hh:mm:ss
 * @method void setRollbackTime(string $RollbackTime) Set Database rollback time in the format of yyyy-mm-dd hh:mm:ss
 * @method array getDatabases() Obtain Information of the databases to be rolled back, which means rollback at the database level
 * @method void setDatabases(array $Databases) Set Information of the databases to be rolled back, which means rollback at the database level
 * @method array getTables() Obtain Information of the tables to be rolled back, which means rollback at the table level
 * @method void setTables(array $Tables) Set Information of the tables to be rolled back, which means rollback at the table level
 */
class RollbackInstancesInfo extends AbstractModel
{
    /**
     * @var string TencentDB instance ID
     */
    public $InstanceId;

    /**
     * @var string Rollback policy. Value range: table, db, full. Default value: full. Table: expedited rollback mode, where only the selected table-level backups and binlogs are imported; for cross-table rollback, if the associated tables are not selected simultaneously, the rollback will fail; the parameter `Databases` must be empty under this mode. db: fast rollback mode, where only the selected database-level backups and binlogs are imported; for cross-database rollback, if the associated databases are not selected simultaneously, the rollback will fail. full: ordinary rollback mode, which imports all the backups and binlogs of the instance at a relatively low speed.
     */
    public $Strategy;

    /**
     * @var string Database rollback time in the format of yyyy-mm-dd hh:mm:ss
     */
    public $RollbackTime;

    /**
     * @var array Information of the databases to be rolled back, which means rollback at the database level
     */
    public $Databases;

    /**
     * @var array Information of the tables to be rolled back, which means rollback at the table level
     */
    public $Tables;

    /**
     * @param string $InstanceId TencentDB instance ID
     * @param string $Strategy Rollback policy. Value range: table, db, full. Default value: full. Table: expedited rollback mode, where only the selected table-level backups and binlogs are imported; for cross-table rollback, if the associated tables are not selected simultaneously, the rollback will fail; the parameter `Databases` must be empty under this mode. db: fast rollback mode, where only the selected database-level backups and binlogs are imported; for cross-database rollback, if the associated databases are not selected simultaneously, the rollback will fail. full: ordinary rollback mode, which imports all the backups and binlogs of the instance at a relatively low speed.
     * @param string $RollbackTime Database rollback time in the format of yyyy-mm-dd hh:mm:ss
     * @param array $Databases Information of the databases to be rolled back, which means rollback at the database level
     * @param array $Tables Information of the tables to be rolled back, which means rollback at the table level
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
