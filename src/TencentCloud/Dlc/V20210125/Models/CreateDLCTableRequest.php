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
 * CreateDLCTable request structure.
 *
 * @method TableBaseInfo getTableBaseInfo() Obtain Data table configuration information
 * @method void setTableBaseInfo(TableBaseInfo $TableBaseInfo) Set Data table configuration information
 * @method string getTableType() Obtain Table type
 * @method void setTableType(string $TableType) Set Table type
 * @method array getColumns() Obtain Data table column information
 * @method void setColumns(array $Columns) Set Data table column information
 * @method array getPartitions() Obtain Data table partition information
 * @method void setPartitions(array $Partitions) Set Data table partition information
 * @method array getProperties() Obtain Data table attribute information
 * @method void setProperties(array $Properties) Set Data table attribute information
 * @method ExternalDataConfiguration getExternalDataConfiguration() Obtain External table configuration information
 * @method void setExternalDataConfiguration(ExternalDataConfiguration $ExternalDataConfiguration) Set External table configuration information
 * @method string getDataEngineName() Obtain Engine name
 * @method void setDataEngineName(string $DataEngineName) Set Engine name
 * @method string getResourceGroupname() Obtain Resource group name
 * @method void setResourceGroupname(string $ResourceGroupname) Set Resource group name
 */
class CreateDLCTableRequest extends AbstractModel
{
    /**
     * @var TableBaseInfo Data table configuration information
     */
    public $TableBaseInfo;

    /**
     * @var string Table type
     */
    public $TableType;

    /**
     * @var array Data table column information
     */
    public $Columns;

    /**
     * @var array Data table partition information
     */
    public $Partitions;

    /**
     * @var array Data table attribute information
     */
    public $Properties;

    /**
     * @var ExternalDataConfiguration External table configuration information
     */
    public $ExternalDataConfiguration;

    /**
     * @var string Engine name
     */
    public $DataEngineName;

    /**
     * @var string Resource group name
     */
    public $ResourceGroupname;

    /**
     * @param TableBaseInfo $TableBaseInfo Data table configuration information
     * @param string $TableType Table type
     * @param array $Columns Data table column information
     * @param array $Partitions Data table partition information
     * @param array $Properties Data table attribute information
     * @param ExternalDataConfiguration $ExternalDataConfiguration External table configuration information
     * @param string $DataEngineName Engine name
     * @param string $ResourceGroupname Resource group name
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

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
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

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new Property();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("ExternalDataConfiguration",$param) and $param["ExternalDataConfiguration"] !== null) {
            $this->ExternalDataConfiguration = new ExternalDataConfiguration();
            $this->ExternalDataConfiguration->deserialize($param["ExternalDataConfiguration"]);
        }

        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("ResourceGroupname",$param) and $param["ResourceGroupname"] !== null) {
            $this->ResourceGroupname = $param["ResourceGroupname"];
        }
    }
}
