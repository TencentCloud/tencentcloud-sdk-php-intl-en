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
 * Table details
 *
 * @method string getTableName() Obtain Table name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTableName(string $TableName) Set Table name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTableInstanceId() Obtain Table instance ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTableInstanceId(string $TableInstanceId) Set Table instance ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTableType() Obtain Table data structure type, such as `GENERIC` or `LIST`
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTableType(string $TableType) Set Table data structure type, such as `GENERIC` or `LIST`
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTableIdlType() Obtain Table data interface description language (IDL) type, such as `PROTO` or `TDR`
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTableIdlType(string $TableIdlType) Set Table data interface description language (IDL) type, such as `PROTO` or `TDR`
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getClusterId() Obtain ID of the cluster where a table resides
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClusterId(string $ClusterId) Set ID of the cluster where a table resides
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getClusterName() Obtain Name of the cluster where a table resides
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClusterName(string $ClusterName) Set Name of the cluster where a table resides
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTableGroupId() Obtain ID of the table group where a table resides
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTableGroupId(string $TableGroupId) Set ID of the table group where a table resides
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTableGroupName() Obtain Name of the table group where a table resides
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTableGroupName(string $TableGroupName) Set Name of the table group where a table resides
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getKeyStruct() Obtain JSON string of table's primary key field structure
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setKeyStruct(string $KeyStruct) Set JSON string of table's primary key field structure
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getValueStruct() Obtain JSON string of table non-primary key field structure
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setValueStruct(string $ValueStruct) Set JSON string of table non-primary key field structure
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getShardingKeySet() Obtain Table shardkey set, which is valid for PROTO-type tables
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setShardingKeySet(string $ShardingKeySet) Set Table shardkey set, which is valid for PROTO-type tables
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getIndexStruct() Obtain Table index key field set, which is valid for PROTO-type tables
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIndexStruct(string $IndexStruct) Set Table index key field set, which is valid for PROTO-type tables
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getListElementNum() Obtain Number of LIST-type table elements
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setListElementNum(integer $ListElementNum) Set Number of LIST-type table elements
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getIdlFiles() Obtain Information list of IDL files associated with table
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIdlFiles(array $IdlFiles) Set Information list of IDL files associated with table
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getReservedVolume() Obtain Reserved table capacity in GB
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setReservedVolume(integer $ReservedVolume) Set Reserved table capacity in GB
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getReservedReadQps() Obtain Reserved table read QPS
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setReservedReadQps(integer $ReservedReadQps) Set Reserved table read QPS
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getReservedWriteQps() Obtain Reserved table write QPS
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setReservedWriteQps(integer $ReservedWriteQps) Set Reserved table write QPS
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getTableSize() Obtain Actual table data size in MB
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTableSize(integer $TableSize) Set Actual table data size in MB
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Table status
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Table status
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain Table creation time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedTime(string $CreatedTime) Set Table creation time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUpdatedTime() Obtain Table's last modified time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUpdatedTime(string $UpdatedTime) Set Table's last modified time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMemo() Obtain Table remarks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMemo(string $Memo) Set Table remarks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ErrorInfo getError() Obtain Error message
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setError(ErrorInfo $Error) Set Error message
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApiAccessId() Obtain TcaplusDB SDK data access ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiAccessId(string $ApiAccessId) Set TcaplusDB SDK data access ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSortFieldNum() Obtain Number of SORTLIST-type table sort fields
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSortFieldNum(integer $SortFieldNum) Set Number of SORTLIST-type table sort fields
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSortRule() Obtain Sort order of SORTLIST-type tables
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSortRule(integer $SortRule) Set Sort order of SORTLIST-type tables
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDbClusterInfoStruct() Obtain Information about global indexes, table caching, or data subscription
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDbClusterInfoStruct(string $DbClusterInfoStruct) Set Information about global indexes, table caching, or data subscription
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getTxhBackupExpireDay() Obtain The number of days after which the table Txh backup files will be expire and deleted.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setTxhBackupExpireDay(integer $TxhBackupExpireDay) Set The number of days after which the table Txh backup files will be expire and deleted.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method SyncTableInfo getSyncTableInfo() Obtain Cached information of the table
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSyncTableInfo(SyncTableInfo $SyncTableInfo) Set Cached information of the table
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TableInfoNew extends AbstractModel
{
    /**
     * @var string Table name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TableName;

    /**
     * @var string Table instance ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TableInstanceId;

    /**
     * @var string Table data structure type, such as `GENERIC` or `LIST`
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TableType;

    /**
     * @var string Table data interface description language (IDL) type, such as `PROTO` or `TDR`
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TableIdlType;

    /**
     * @var string ID of the cluster where a table resides
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterId;

    /**
     * @var string Name of the cluster where a table resides
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterName;

    /**
     * @var string ID of the table group where a table resides
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TableGroupId;

    /**
     * @var string Name of the table group where a table resides
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TableGroupName;

    /**
     * @var string JSON string of table's primary key field structure
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $KeyStruct;

    /**
     * @var string JSON string of table non-primary key field structure
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ValueStruct;

    /**
     * @var string Table shardkey set, which is valid for PROTO-type tables
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ShardingKeySet;

    /**
     * @var string Table index key field set, which is valid for PROTO-type tables
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IndexStruct;

    /**
     * @var integer Number of LIST-type table elements
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ListElementNum;

    /**
     * @var array Information list of IDL files associated with table
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IdlFiles;

    /**
     * @var integer Reserved table capacity in GB
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ReservedVolume;

    /**
     * @var integer Reserved table read QPS
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ReservedReadQps;

    /**
     * @var integer Reserved table write QPS
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ReservedWriteQps;

    /**
     * @var integer Actual table data size in MB
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TableSize;

    /**
     * @var string Table status
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Table creation time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedTime;

    /**
     * @var string Table's last modified time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UpdatedTime;

    /**
     * @var string Table remarks
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Memo;

    /**
     * @var ErrorInfo Error message
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Error;

    /**
     * @var string TcaplusDB SDK data access ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiAccessId;

    /**
     * @var integer Number of SORTLIST-type table sort fields
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SortFieldNum;

    /**
     * @var integer Sort order of SORTLIST-type tables
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SortRule;

    /**
     * @var string Information about global indexes, table caching, or data subscription
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DbClusterInfoStruct;

    /**
     * @var integer The number of days after which the table Txh backup files will be expire and deleted.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $TxhBackupExpireDay;

    /**
     * @var SyncTableInfo Cached information of the table
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SyncTableInfo;

    /**
     * @param string $TableName Table name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TableInstanceId Table instance ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TableType Table data structure type, such as `GENERIC` or `LIST`
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TableIdlType Table data interface description language (IDL) type, such as `PROTO` or `TDR`
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterId ID of the cluster where a table resides
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterName Name of the cluster where a table resides
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TableGroupId ID of the table group where a table resides
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TableGroupName Name of the table group where a table resides
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $KeyStruct JSON string of table's primary key field structure
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ValueStruct JSON string of table non-primary key field structure
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ShardingKeySet Table shardkey set, which is valid for PROTO-type tables
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $IndexStruct Table index key field set, which is valid for PROTO-type tables
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ListElementNum Number of LIST-type table elements
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $IdlFiles Information list of IDL files associated with table
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ReservedVolume Reserved table capacity in GB
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ReservedReadQps Reserved table read QPS
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ReservedWriteQps Reserved table write QPS
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $TableSize Actual table data size in MB
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Status Table status
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedTime Table creation time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UpdatedTime Table's last modified time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Memo Table remarks
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ErrorInfo $Error Error message
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApiAccessId TcaplusDB SDK data access ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $SortFieldNum Number of SORTLIST-type table sort fields
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $SortRule Sort order of SORTLIST-type tables
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DbClusterInfoStruct Information about global indexes, table caching, or data subscription
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $TxhBackupExpireDay The number of days after which the table Txh backup files will be expire and deleted.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param SyncTableInfo $SyncTableInfo Cached information of the table
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableInstanceId",$param) and $param["TableInstanceId"] !== null) {
            $this->TableInstanceId = $param["TableInstanceId"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }

        if (array_key_exists("TableIdlType",$param) and $param["TableIdlType"] !== null) {
            $this->TableIdlType = $param["TableIdlType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("TableGroupName",$param) and $param["TableGroupName"] !== null) {
            $this->TableGroupName = $param["TableGroupName"];
        }

        if (array_key_exists("KeyStruct",$param) and $param["KeyStruct"] !== null) {
            $this->KeyStruct = $param["KeyStruct"];
        }

        if (array_key_exists("ValueStruct",$param) and $param["ValueStruct"] !== null) {
            $this->ValueStruct = $param["ValueStruct"];
        }

        if (array_key_exists("ShardingKeySet",$param) and $param["ShardingKeySet"] !== null) {
            $this->ShardingKeySet = $param["ShardingKeySet"];
        }

        if (array_key_exists("IndexStruct",$param) and $param["IndexStruct"] !== null) {
            $this->IndexStruct = $param["IndexStruct"];
        }

        if (array_key_exists("ListElementNum",$param) and $param["ListElementNum"] !== null) {
            $this->ListElementNum = $param["ListElementNum"];
        }

        if (array_key_exists("IdlFiles",$param) and $param["IdlFiles"] !== null) {
            $this->IdlFiles = [];
            foreach ($param["IdlFiles"] as $key => $value){
                $obj = new IdlFileInfo();
                $obj->deserialize($value);
                array_push($this->IdlFiles, $obj);
            }
        }

        if (array_key_exists("ReservedVolume",$param) and $param["ReservedVolume"] !== null) {
            $this->ReservedVolume = $param["ReservedVolume"];
        }

        if (array_key_exists("ReservedReadQps",$param) and $param["ReservedReadQps"] !== null) {
            $this->ReservedReadQps = $param["ReservedReadQps"];
        }

        if (array_key_exists("ReservedWriteQps",$param) and $param["ReservedWriteQps"] !== null) {
            $this->ReservedWriteQps = $param["ReservedWriteQps"];
        }

        if (array_key_exists("TableSize",$param) and $param["TableSize"] !== null) {
            $this->TableSize = $param["TableSize"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("Memo",$param) and $param["Memo"] !== null) {
            $this->Memo = $param["Memo"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = new ErrorInfo();
            $this->Error->deserialize($param["Error"]);
        }

        if (array_key_exists("ApiAccessId",$param) and $param["ApiAccessId"] !== null) {
            $this->ApiAccessId = $param["ApiAccessId"];
        }

        if (array_key_exists("SortFieldNum",$param) and $param["SortFieldNum"] !== null) {
            $this->SortFieldNum = $param["SortFieldNum"];
        }

        if (array_key_exists("SortRule",$param) and $param["SortRule"] !== null) {
            $this->SortRule = $param["SortRule"];
        }

        if (array_key_exists("DbClusterInfoStruct",$param) and $param["DbClusterInfoStruct"] !== null) {
            $this->DbClusterInfoStruct = $param["DbClusterInfoStruct"];
        }

        if (array_key_exists("TxhBackupExpireDay",$param) and $param["TxhBackupExpireDay"] !== null) {
            $this->TxhBackupExpireDay = $param["TxhBackupExpireDay"];
        }

        if (array_key_exists("SyncTableInfo",$param) and $param["SyncTableInfo"] !== null) {
            $this->SyncTableInfo = new SyncTableInfo();
            $this->SyncTableInfo->deserialize($param["SyncTableInfo"]);
        }
    }
}
