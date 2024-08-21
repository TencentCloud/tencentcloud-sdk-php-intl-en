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
 * Query table information object
 *
 * @method TableBaseInfo getTableBaseInfo() Obtain Basic information of the data table
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableBaseInfo(TableBaseInfo $TableBaseInfo) Set Basic information of the data table
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getColumns() Obtain Data table column information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setColumns(array $Columns) Set Data table column information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPartitions() Obtain Data table partition information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPartitions(array $Partitions) Set Data table partition information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLocation() Obtain Data storage path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLocation(string $Location) Set Data storage path
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getProperties() Obtain Data table attribute information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProperties(array $Properties) Set Data table attribute information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModifiedTime() Obtain Data table update information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModifiedTime(string $ModifiedTime) Set Data table update information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Database creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Database creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInputFormat() Obtain Data format
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInputFormat(string $InputFormat) Set Data format
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStorageSize() Obtain Data storage size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStorageSize(integer $StorageSize) Set Data storage size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRecordCount() Obtain Number of rows in the data table
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecordCount(integer $RecordCount) Set Number of rows in the data table
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMapMaterializedViewName() Obtain Materialized view name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMapMaterializedViewName(string $MapMaterializedViewName) Set Materialized view name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHeatValue() Obtain Visit hot spots
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHeatValue(integer $HeatValue) Set Visit hot spots
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ExternalDataConfiguration getExternalDataConfiguration() Obtain External table configuration information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExternalDataConfiguration(ExternalDataConfiguration $ExternalDataConfiguration) Set External table configuration information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DLCTable extends AbstractModel
{
    /**
     * @var TableBaseInfo Basic information of the data table
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableBaseInfo;

    /**
     * @var array Data table column information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Columns;

    /**
     * @var array Data table partition information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Partitions;

    /**
     * @var string Data storage path
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Location;

    /**
     * @var array Data table attribute information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Properties;

    /**
     * @var string Data table update information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModifiedTime;

    /**
     * @var string Database creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Data format
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InputFormat;

    /**
     * @var integer Data storage size
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StorageSize;

    /**
     * @var integer Number of rows in the data table
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RecordCount;

    /**
     * @var string Materialized view name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MapMaterializedViewName;

    /**
     * @var integer Visit hot spots
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HeatValue;

    /**
     * @var ExternalDataConfiguration External table configuration information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExternalDataConfiguration;

    /**
     * @param TableBaseInfo $TableBaseInfo Basic information of the data table
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Columns Data table column information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Partitions Data table partition information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Location Data storage path
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Properties Data table attribute information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModifiedTime Data table update information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Database creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InputFormat Data format
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StorageSize Data storage size
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RecordCount Number of rows in the data table
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MapMaterializedViewName Materialized view name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $HeatValue Visit hot spots
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ExternalDataConfiguration $ExternalDataConfiguration External table configuration information
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
        if (array_key_exists("TableBaseInfo",$param) and $param["TableBaseInfo"] !== null) {
            $this->TableBaseInfo = new TableBaseInfo();
            $this->TableBaseInfo->deserialize($param["TableBaseInfo"]);
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new TColumn();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = [];
            foreach ($param["Partitions"] as $key => $value){
                $obj = new TPartition();
                $obj->deserialize($value);
                array_push($this->Partitions, $obj);
            }
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new Property();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("InputFormat",$param) and $param["InputFormat"] !== null) {
            $this->InputFormat = $param["InputFormat"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("RecordCount",$param) and $param["RecordCount"] !== null) {
            $this->RecordCount = $param["RecordCount"];
        }

        if (array_key_exists("MapMaterializedViewName",$param) and $param["MapMaterializedViewName"] !== null) {
            $this->MapMaterializedViewName = $param["MapMaterializedViewName"];
        }

        if (array_key_exists("HeatValue",$param) and $param["HeatValue"] !== null) {
            $this->HeatValue = $param["HeatValue"];
        }

        if (array_key_exists("ExternalDataConfiguration",$param) and $param["ExternalDataConfiguration"] !== null) {
            $this->ExternalDataConfiguration = new ExternalDataConfiguration();
            $this->ExternalDataConfiguration->deserialize($param["ExternalDataConfiguration"]);
        }
    }
}
