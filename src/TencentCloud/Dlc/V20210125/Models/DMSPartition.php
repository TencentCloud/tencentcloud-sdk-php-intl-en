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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Partition objects of the migrating metadata
 *
 * @method string getDatabaseName() Obtain Database name
 * @method void setDatabaseName(string $DatabaseName) Set Database name
 * @method string getSchemaName() Obtain Data directory name
 * @method void setSchemaName(string $SchemaName) Set Data directory name
 * @method string getTableName() Obtain Table name
 * @method void setTableName(string $TableName) Set Table name
 * @method integer getDataVersion() Obtain Data version
 * @method void setDataVersion(integer $DataVersion) Set Data version
 * @method string getName() Obtain Partition name
 * @method void setName(string $Name) Set Partition name
 * @method array getValues() Obtain Value List
 * @method void setValues(array $Values) Set Value List
 * @method integer getStorageSize() Obtain Storage size
 * @method void setStorageSize(integer $StorageSize) Set Storage size
 * @method integer getRecordCount() Obtain Number of records
 * @method void setRecordCount(integer $RecordCount) Set Number of records
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getModifiedTime() Obtain Modification time
 * @method void setModifiedTime(string $ModifiedTime) Set Modification time
 * @method string getLastAccessTime() Obtain Last access time
 * @method void setLastAccessTime(string $LastAccessTime) Set Last access time
 * @method array getParams() Obtain Additional attribute
 * @method void setParams(array $Params) Set Additional attribute
 * @method DMSSds getSds() Obtain Storage object
 * @method void setSds(DMSSds $Sds) Set Storage object
 */
class DMSPartition extends AbstractModel
{
    /**
     * @var string Database name
     */
    public $DatabaseName;

    /**
     * @var string Data directory name
     */
    public $SchemaName;

    /**
     * @var string Table name
     */
    public $TableName;

    /**
     * @var integer Data version
     */
    public $DataVersion;

    /**
     * @var string Partition name
     */
    public $Name;

    /**
     * @var array Value List
     */
    public $Values;

    /**
     * @var integer Storage size
     */
    public $StorageSize;

    /**
     * @var integer Number of records
     */
    public $RecordCount;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Modification time
     */
    public $ModifiedTime;

    /**
     * @var string Last access time
     */
    public $LastAccessTime;

    /**
     * @var array Additional attribute
     */
    public $Params;

    /**
     * @var DMSSds Storage object
     */
    public $Sds;

    /**
     * @param string $DatabaseName Database name
     * @param string $SchemaName Data directory name
     * @param string $TableName Table name
     * @param integer $DataVersion Data version
     * @param string $Name Partition name
     * @param array $Values Value List
     * @param integer $StorageSize Storage size
     * @param integer $RecordCount Number of records
     * @param string $CreateTime Creation time
     * @param string $ModifiedTime Modification time
     * @param string $LastAccessTime Last access time
     * @param array $Params Additional attribute
     * @param DMSSds $Sds Storage object
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("DataVersion",$param) and $param["DataVersion"] !== null) {
            $this->DataVersion = $param["DataVersion"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("RecordCount",$param) and $param["RecordCount"] !== null) {
            $this->RecordCount = $param["RecordCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("LastAccessTime",$param) and $param["LastAccessTime"] !== null) {
            $this->LastAccessTime = $param["LastAccessTime"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }

        if (array_key_exists("Sds",$param) and $param["Sds"] !== null) {
            $this->Sds = new DMSSds();
            $this->Sds->deserialize($param["Sds"]);
        }
    }
}
