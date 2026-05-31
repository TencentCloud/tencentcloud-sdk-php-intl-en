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
 * Mapping relationship
 *
 * @method string getSrcInstanceId() Obtain Source instance Id
 * @method void setSrcInstanceId(string $SrcInstanceId) Set Source instance Id
 * @method string getDatabaseName() Obtain Database name.
 * @method void setDatabaseName(string $DatabaseName) Set Database name.
 * @method string getTableName() Obtain Table name
 * @method void setTableName(string $TableName) Set Table name
 * @method string getMapDatabaseName() Obtain Map database name
 * @method void setMapDatabaseName(string $MapDatabaseName) Set Map database name
 * @method string getMapTableName() Obtain Mapping table name
 * @method void setMapTableName(string $MapTableName) Set Mapping table name
 * @method string getStatus() Obtain Synchronization status
 * @method void setStatus(string $Status) Set Synchronization status
 * @method float getProcess() Obtain Sync progress
 * @method void setProcess(float $Process) Set Sync progress
 * @method integer getLag() Obtain Delay
 * @method void setLag(integer $Lag) Set Delay
 * @method string getMessage() Obtain Message
 * @method void setMessage(string $Message) Set Message
 * @method boolean getIsPrimary() Obtain Whether it is the main table
 * @method void setIsPrimary(boolean $IsPrimary) Set Whether it is the main table
 * @method string getVirtualColValue() Obtain Virtual column padding value
 * @method void setVirtualColValue(string $VirtualColValue) Set Virtual column padding value
 */
class TableMappingObject extends AbstractModel
{
    /**
     * @var string Source instance Id
     */
    public $SrcInstanceId;

    /**
     * @var string Database name.
     */
    public $DatabaseName;

    /**
     * @var string Table name
     */
    public $TableName;

    /**
     * @var string Map database name
     */
    public $MapDatabaseName;

    /**
     * @var string Mapping table name
     */
    public $MapTableName;

    /**
     * @var string Synchronization status
     */
    public $Status;

    /**
     * @var float Sync progress
     */
    public $Process;

    /**
     * @var integer Delay
     */
    public $Lag;

    /**
     * @var string Message
     */
    public $Message;

    /**
     * @var boolean Whether it is the main table
     */
    public $IsPrimary;

    /**
     * @var string Virtual column padding value
     */
    public $VirtualColValue;

    /**
     * @param string $SrcInstanceId Source instance Id
     * @param string $DatabaseName Database name.
     * @param string $TableName Table name
     * @param string $MapDatabaseName Map database name
     * @param string $MapTableName Mapping table name
     * @param string $Status Synchronization status
     * @param float $Process Sync progress
     * @param integer $Lag Delay
     * @param string $Message Message
     * @param boolean $IsPrimary Whether it is the main table
     * @param string $VirtualColValue Virtual column padding value
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
        if (array_key_exists("SrcInstanceId",$param) and $param["SrcInstanceId"] !== null) {
            $this->SrcInstanceId = $param["SrcInstanceId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("MapDatabaseName",$param) and $param["MapDatabaseName"] !== null) {
            $this->MapDatabaseName = $param["MapDatabaseName"];
        }

        if (array_key_exists("MapTableName",$param) and $param["MapTableName"] !== null) {
            $this->MapTableName = $param["MapTableName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Process",$param) and $param["Process"] !== null) {
            $this->Process = $param["Process"];
        }

        if (array_key_exists("Lag",$param) and $param["Lag"] !== null) {
            $this->Lag = $param["Lag"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("IsPrimary",$param) and $param["IsPrimary"] !== null) {
            $this->IsPrimary = $param["IsPrimary"];
        }

        if (array_key_exists("VirtualColValue",$param) and $param["VirtualColValue"] !== null) {
            $this->VirtualColValue = $param["VirtualColValue"];
        }
    }
}
