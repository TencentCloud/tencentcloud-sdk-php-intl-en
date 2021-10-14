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
 * The list of tables to which the specified fields belong
 *
 * @method string getTableGroupId() Obtain ID of the table group where the table resides
 * @method void setTableGroupId(string $TableGroupId) Set ID of the table group where the table resides
 * @method string getTableName() Obtain Table name
 * @method void setTableName(string $TableName) Set Table name
 * @method string getTableInstanceId() Obtain Table ID
 * @method void setTableInstanceId(string $TableInstanceId) Set Table ID
 * @method string getTableIdlType() Obtain Table description language. Valid values: `PROTO`, `TDR`
 * @method void setTableIdlType(string $TableIdlType) Set Table description language. Valid values: `PROTO`, `TDR`
 * @method string getTableType() Obtain Table data structure. Valid values: `GENERIC`, `LIST`
 * @method void setTableType(string $TableType) Set Table data structure. Valid values: `GENERIC`, `LIST`
 * @method array getSelectedFields() Obtain The list of fields on which indexes will be created, table caching enabled, or data subscription enabled
 * @method void setSelectedFields(array $SelectedFields) Set The list of fields on which indexes will be created, table caching enabled, or data subscription enabled
 * @method integer getShardNum() Obtain The number of index shards
 * @method void setShardNum(integer $ShardNum) Set The number of index shards
 * @method KafkaInfo getKafkaInfo() Obtain CKafka instance information
 * @method void setKafkaInfo(KafkaInfo $KafkaInfo) Set CKafka instance information
 */
class SelectedTableWithField extends AbstractModel
{
    /**
     * @var string ID of the table group where the table resides
     */
    public $TableGroupId;

    /**
     * @var string Table name
     */
    public $TableName;

    /**
     * @var string Table ID
     */
    public $TableInstanceId;

    /**
     * @var string Table description language. Valid values: `PROTO`, `TDR`
     */
    public $TableIdlType;

    /**
     * @var string Table data structure. Valid values: `GENERIC`, `LIST`
     */
    public $TableType;

    /**
     * @var array The list of fields on which indexes will be created, table caching enabled, or data subscription enabled
     */
    public $SelectedFields;

    /**
     * @var integer The number of index shards
     */
    public $ShardNum;

    /**
     * @var KafkaInfo CKafka instance information
     */
    public $KafkaInfo;

    /**
     * @param string $TableGroupId ID of the table group where the table resides
     * @param string $TableName Table name
     * @param string $TableInstanceId Table ID
     * @param string $TableIdlType Table description language. Valid values: `PROTO`, `TDR`
     * @param string $TableType Table data structure. Valid values: `GENERIC`, `LIST`
     * @param array $SelectedFields The list of fields on which indexes will be created, table caching enabled, or data subscription enabled
     * @param integer $ShardNum The number of index shards
     * @param KafkaInfo $KafkaInfo CKafka instance information
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
        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableInstanceId",$param) and $param["TableInstanceId"] !== null) {
            $this->TableInstanceId = $param["TableInstanceId"];
        }

        if (array_key_exists("TableIdlType",$param) and $param["TableIdlType"] !== null) {
            $this->TableIdlType = $param["TableIdlType"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }

        if (array_key_exists("SelectedFields",$param) and $param["SelectedFields"] !== null) {
            $this->SelectedFields = [];
            foreach ($param["SelectedFields"] as $key => $value){
                $obj = new FieldInfo();
                $obj->deserialize($value);
                array_push($this->SelectedFields, $obj);
            }
        }

        if (array_key_exists("ShardNum",$param) and $param["ShardNum"] !== null) {
            $this->ShardNum = $param["ShardNum"];
        }

        if (array_key_exists("KafkaInfo",$param) and $param["KafkaInfo"] !== null) {
            $this->KafkaInfo = new KafkaInfo();
            $this->KafkaInfo->deserialize($param["KafkaInfo"]);
        }
    }
}
