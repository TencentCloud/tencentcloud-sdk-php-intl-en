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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTable request structure.
 *
 * @method string getInstanceId() Obtain Resource ID, which is the TCHouse-D resource ID used for table creation.
 * @method void setInstanceId(string $InstanceId) Set Resource ID, which is the TCHouse-D resource ID used for table creation.
 * @method string getDbName() Obtain The database where the table is located; if it does not exist, create one.
 * @method void setDbName(string $DbName) Set The database where the table is located; if it does not exist, create one.
 * @method string getTableName() Obtain Name of the table to be created
 * @method void setTableName(string $TableName) Set Name of the table to be created
 * @method string getKeysType() Obtain Table data model: 
AGG_KEY: aggregation model; 
UNI_KEY: primary key model; 
DUP_KEY: detail model
 * @method void setKeysType(string $KeysType) Set Table data model: 
AGG_KEY: aggregation model; 
UNI_KEY: primary key model; 
DUP_KEY: detail model
 * @method array getColumns() Obtain Column information of the table
 * @method void setColumns(array $Columns) Set Column information of the table
 * @method Distribution getDistribution() Obtain Bucket information
 * @method void setDistribution(Distribution $Distribution) Set Bucket information
 * @method string getUserName() Obtain Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method void setUserName(string $UserName) Set Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method string getPassWord() Obtain Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method void setPassWord(string $PassWord) Set Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method array getIndexInfos() Obtain Index information. The inverted index and N-Gram index can be configured through this parameter. The Prefix index is related to the sort key and key column, and do not require additional configuration. Configure bloom_filter_columns in the table attribute when BloomFilter index is required.
 * @method void setIndexInfos(array $IndexInfos) Set Index information. The inverted index and N-Gram index can be configured through this parameter. The Prefix index is related to the sort key and key column, and do not require additional configuration. Configure bloom_filter_columns in the table attribute when BloomFilter index is required.
 * @method Partition getPartition() Obtain Partition information
 * @method void setPartition(Partition $Partition) Set Partition information
 * @method string getTableComment() Obtain Table description
 * @method void setTableComment(string $TableComment) Set Table description
 * @method array getProperties() Obtain Table attribute
 * @method void setProperties(array $Properties) Set Table attribute
 */
class CreateTableRequest extends AbstractModel
{
    /**
     * @var string Resource ID, which is the TCHouse-D resource ID used for table creation.
     */
    public $InstanceId;

    /**
     * @var string The database where the table is located; if it does not exist, create one.
     */
    public $DbName;

    /**
     * @var string Name of the table to be created
     */
    public $TableName;

    /**
     * @var string Table data model: 
AGG_KEY: aggregation model; 
UNI_KEY: primary key model; 
DUP_KEY: detail model
     */
    public $KeysType;

    /**
     * @var array Column information of the table
     */
    public $Columns;

    /**
     * @var Distribution Bucket information
     */
    public $Distribution;

    /**
     * @var string Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     */
    public $UserName;

    /**
     * @var string Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     */
    public $PassWord;

    /**
     * @var array Index information. The inverted index and N-Gram index can be configured through this parameter. The Prefix index is related to the sort key and key column, and do not require additional configuration. Configure bloom_filter_columns in the table attribute when BloomFilter index is required.
     */
    public $IndexInfos;

    /**
     * @var Partition Partition information
     */
    public $Partition;

    /**
     * @var string Table description
     */
    public $TableComment;

    /**
     * @var array Table attribute
     */
    public $Properties;

    /**
     * @param string $InstanceId Resource ID, which is the TCHouse-D resource ID used for table creation.
     * @param string $DbName The database where the table is located; if it does not exist, create one.
     * @param string $TableName Name of the table to be created
     * @param string $KeysType Table data model: 
AGG_KEY: aggregation model; 
UNI_KEY: primary key model; 
DUP_KEY: detail model
     * @param array $Columns Column information of the table
     * @param Distribution $Distribution Bucket information
     * @param string $UserName Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     * @param string $PassWord Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     * @param array $IndexInfos Index information. The inverted index and N-Gram index can be configured through this parameter. The Prefix index is related to the sort key and key column, and do not require additional configuration. Configure bloom_filter_columns in the table attribute when BloomFilter index is required.
     * @param Partition $Partition Partition information
     * @param string $TableComment Table description
     * @param array $Properties Table attribute
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

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("KeysType",$param) and $param["KeysType"] !== null) {
            $this->KeysType = $param["KeysType"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new Column();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }

        if (array_key_exists("Distribution",$param) and $param["Distribution"] !== null) {
            $this->Distribution = new Distribution();
            $this->Distribution->deserialize($param["Distribution"]);
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("PassWord",$param) and $param["PassWord"] !== null) {
            $this->PassWord = $param["PassWord"];
        }

        if (array_key_exists("IndexInfos",$param) and $param["IndexInfos"] !== null) {
            $this->IndexInfos = [];
            foreach ($param["IndexInfos"] as $key => $value){
                $obj = new IndexInfo();
                $obj->deserialize($value);
                array_push($this->IndexInfos, $obj);
            }
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = new Partition();
            $this->Partition->deserialize($param["Partition"]);
        }

        if (array_key_exists("TableComment",$param) and $param["TableComment"] !== null) {
            $this->TableComment = $param["TableComment"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new Property();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }
    }
}
