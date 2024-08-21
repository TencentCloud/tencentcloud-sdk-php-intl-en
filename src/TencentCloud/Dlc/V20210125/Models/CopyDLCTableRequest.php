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
 * CopyDLCTable request structure.
 *
 * @method array getSourceData() Obtain Description of the source data table name
 * @method void setSourceData(array $SourceData) Set Description of the source data table name
 * @method string getDestinationDatabaseName() Obtain Target database name
 * @method void setDestinationDatabaseName(string $DestinationDatabaseName) Set Target database name
 * @method string getDestinationTableName() Obtain Target data table name
 * @method void setDestinationTableName(string $DestinationTableName) Set Target data table name
 * @method string getDataEngineName() Obtain Engine name
 * @method void setDataEngineName(string $DataEngineName) Set Engine name
 * @method boolean getIsCreateTable() Obtain Whether to create a new table
 * @method void setIsCreateTable(boolean $IsCreateTable) Set Whether to create a new table
 * @method string getCatalog() Obtain Catalog name
 * @method void setCatalog(string $Catalog) Set Catalog name
 * @method string getResourceGroupName() Obtain Resource group name
 * @method void setResourceGroupName(string $ResourceGroupName) Set Resource group name
 */
class CopyDLCTableRequest extends AbstractModel
{
    /**
     * @var array Description of the source data table name
     */
    public $SourceData;

    /**
     * @var string Target database name
     */
    public $DestinationDatabaseName;

    /**
     * @var string Target data table name
     */
    public $DestinationTableName;

    /**
     * @var string Engine name
     */
    public $DataEngineName;

    /**
     * @var boolean Whether to create a new table
     */
    public $IsCreateTable;

    /**
     * @var string Catalog name
     */
    public $Catalog;

    /**
     * @var string Resource group name
     */
    public $ResourceGroupName;

    /**
     * @param array $SourceData Description of the source data table name
     * @param string $DestinationDatabaseName Target database name
     * @param string $DestinationTableName Target data table name
     * @param string $DataEngineName Engine name
     * @param boolean $IsCreateTable Whether to create a new table
     * @param string $Catalog Catalog name
     * @param string $ResourceGroupName Resource group name
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
        if (array_key_exists("SourceData",$param) and $param["SourceData"] !== null) {
            $this->SourceData = [];
            foreach ($param["SourceData"] as $key => $value){
                $obj = new DMSSourceDatabaseInfo();
                $obj->deserialize($value);
                array_push($this->SourceData, $obj);
            }
        }

        if (array_key_exists("DestinationDatabaseName",$param) and $param["DestinationDatabaseName"] !== null) {
            $this->DestinationDatabaseName = $param["DestinationDatabaseName"];
        }

        if (array_key_exists("DestinationTableName",$param) and $param["DestinationTableName"] !== null) {
            $this->DestinationTableName = $param["DestinationTableName"];
        }

        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("IsCreateTable",$param) and $param["IsCreateTable"] !== null) {
            $this->IsCreateTable = $param["IsCreateTable"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }
    }
}
