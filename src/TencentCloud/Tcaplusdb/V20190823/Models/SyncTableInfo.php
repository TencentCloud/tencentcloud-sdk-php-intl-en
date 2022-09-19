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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TcaplusDB cache table information
 *
 * @method integer getTargetTableSplitNum() Obtain Sharded table quantity of the target cache table
 * @method void setTargetTableSplitNum(integer $TargetTableSplitNum) Set Sharded table quantity of the target cache table
 * @method array getTargetTableNamePrefix() Obtain Prefix of the target cache table name
 * @method void setTargetTableNamePrefix(array $TargetTableNamePrefix) Set Prefix of the target cache table name
 * @method string getTargetSyncDBInstanceId() Obtain Instance ID of the cache database
 * @method void setTargetSyncDBInstanceId(string $TargetSyncDBInstanceId) Set Instance ID of the cache database
 * @method string getTargetDatabaseName() Obtain Name of the database where the cache table resides
 * @method void setTargetDatabaseName(string $TargetDatabaseName) Set Name of the database where the cache table resides
 * @method integer getStatus() Obtain Caching status. Valid values: `0` (creating), `1` (caching), `2` (disabled), `-1` (deleted).
 * @method void setStatus(integer $Status) Set Caching status. Valid values: `0` (creating), `1` (caching), `2` (disabled), `-1` (deleted).
 * @method string getClusterId() Obtain ID of cluster where the table resides
 * @method void setClusterId(string $ClusterId) Set ID of cluster where the table resides
 * @method integer getTableGroupId() Obtain The ID of the table group where the table resides
 * @method void setTableGroupId(integer $TableGroupId) Set The ID of the table group where the table resides
 * @method string getTableName() Obtain Table name
 * @method void setTableName(string $TableName) Set Table name
 * @method string getTableId() Obtain Table ID
 * @method void setTableId(string $TableId) Set Table ID
 * @method array getKeyFieldMapping() Obtain Mapping from the primary key field of the TcaplusDB table to the field of the target cache table
 * @method void setKeyFieldMapping(array $KeyFieldMapping) Set Mapping from the primary key field of the TcaplusDB table to the field of the target cache table
 * @method array getValueFieldMapping() Obtain Mapping of TcaplusDB table field to target cache table field
 * @method void setValueFieldMapping(array $ValueFieldMapping) Set Mapping of TcaplusDB table field to target cache table field
 */
class SyncTableInfo extends AbstractModel
{
    /**
     * @var integer Sharded table quantity of the target cache table
     */
    public $TargetTableSplitNum;

    /**
     * @var array Prefix of the target cache table name
     */
    public $TargetTableNamePrefix;

    /**
     * @var string Instance ID of the cache database
     */
    public $TargetSyncDBInstanceId;

    /**
     * @var string Name of the database where the cache table resides
     */
    public $TargetDatabaseName;

    /**
     * @var integer Caching status. Valid values: `0` (creating), `1` (caching), `2` (disabled), `-1` (deleted).
     */
    public $Status;

    /**
     * @var string ID of cluster where the table resides
     */
    public $ClusterId;

    /**
     * @var integer The ID of the table group where the table resides
     */
    public $TableGroupId;

    /**
     * @var string Table name
     */
    public $TableName;

    /**
     * @var string Table ID
     */
    public $TableId;

    /**
     * @var array Mapping from the primary key field of the TcaplusDB table to the field of the target cache table
     */
    public $KeyFieldMapping;

    /**
     * @var array Mapping of TcaplusDB table field to target cache table field
     */
    public $ValueFieldMapping;

    /**
     * @param integer $TargetTableSplitNum Sharded table quantity of the target cache table
     * @param array $TargetTableNamePrefix Prefix of the target cache table name
     * @param string $TargetSyncDBInstanceId Instance ID of the cache database
     * @param string $TargetDatabaseName Name of the database where the cache table resides
     * @param integer $Status Caching status. Valid values: `0` (creating), `1` (caching), `2` (disabled), `-1` (deleted).
     * @param string $ClusterId ID of cluster where the table resides
     * @param integer $TableGroupId The ID of the table group where the table resides
     * @param string $TableName Table name
     * @param string $TableId Table ID
     * @param array $KeyFieldMapping Mapping from the primary key field of the TcaplusDB table to the field of the target cache table
     * @param array $ValueFieldMapping Mapping of TcaplusDB table field to target cache table field
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
        if (array_key_exists("TargetTableSplitNum",$param) and $param["TargetTableSplitNum"] !== null) {
            $this->TargetTableSplitNum = $param["TargetTableSplitNum"];
        }

        if (array_key_exists("TargetTableNamePrefix",$param) and $param["TargetTableNamePrefix"] !== null) {
            $this->TargetTableNamePrefix = $param["TargetTableNamePrefix"];
        }

        if (array_key_exists("TargetSyncDBInstanceId",$param) and $param["TargetSyncDBInstanceId"] !== null) {
            $this->TargetSyncDBInstanceId = $param["TargetSyncDBInstanceId"];
        }

        if (array_key_exists("TargetDatabaseName",$param) and $param["TargetDatabaseName"] !== null) {
            $this->TargetDatabaseName = $param["TargetDatabaseName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("KeyFieldMapping",$param) and $param["KeyFieldMapping"] !== null) {
            $this->KeyFieldMapping = [];
            foreach ($param["KeyFieldMapping"] as $key => $value){
                $obj = new SyncTableField();
                $obj->deserialize($value);
                array_push($this->KeyFieldMapping, $obj);
            }
        }

        if (array_key_exists("ValueFieldMapping",$param) and $param["ValueFieldMapping"] !== null) {
            $this->ValueFieldMapping = [];
            foreach ($param["ValueFieldMapping"] as $key => $value){
                $obj = new SyncTableField();
                $obj->deserialize($value);
                array_push($this->ValueFieldMapping, $obj);
            }
        }
    }
}
