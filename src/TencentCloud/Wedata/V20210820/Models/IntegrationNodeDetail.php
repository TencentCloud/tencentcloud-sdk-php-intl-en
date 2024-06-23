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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Integration Node Details
 *
 * @method string getName() Obtain Integration Node Name
 * @method void setName(string $Name) Set Integration Node Name
 * @method string getNodeType() Obtain Integration Node Type
 * @method void setNodeType(string $NodeType) Set Integration Node Type
 * @method string getDataSourceType() Obtain Node Data Source Type
 * @method void setDataSourceType(string $DataSourceType) Set Node Data Source Type
 * @method string getDescription() Obtain Node Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDescription(string $Description) Set Node Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatasourceId() Obtain Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceId(string $DatasourceId) Set Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getConfig() Obtain Node Configuration Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setConfig(array $Config) Set Node Configuration Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getExtConfig() Obtain Node Extension Configuration Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExtConfig(array $ExtConfig) Set Node Extension Configuration Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getSchema() Obtain Node Schema
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSchema(array $Schema) Set Node Schema
Note: This field may return null, indicating that no valid value can be obtained.
 * @method IntegrationNodeMapping getNodeMapping() Obtain Node Mapping
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNodeMapping(IntegrationNodeMapping $NodeMapping) Set Node Mapping
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwnerUin() Obtain owner uin
 * @method void setOwnerUin(string $OwnerUin) Set owner uin
 */
class IntegrationNodeDetail extends AbstractModel
{
    /**
     * @var string Integration Node Name
     */
    public $Name;

    /**
     * @var string Integration Node Type
     */
    public $NodeType;

    /**
     * @var string Node Data Source Type
     */
    public $DataSourceType;

    /**
     * @var string Node Description
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Description;

    /**
     * @var string Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceId;

    /**
     * @var array Node Configuration Information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Config;

    /**
     * @var array Node Extension Configuration Information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExtConfig;

    /**
     * @var array Node Schema
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Schema;

    /**
     * @var IntegrationNodeMapping Node Mapping
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $NodeMapping;

    /**
     * @var string owner uin
     */
    public $OwnerUin;

    /**
     * @param string $Name Integration Node Name
     * @param string $NodeType Integration Node Type
     * @param string $DataSourceType Node Data Source Type
     * @param string $Description Node Description
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatasourceId Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $Config Node Configuration Information
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $ExtConfig Node Extension Configuration Information
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $Schema Node Schema
Note: This field may return null, indicating that no valid value can be obtained.
     * @param IntegrationNodeMapping $NodeMapping Node Mapping
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OwnerUin owner uin
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("DataSourceType",$param) and $param["DataSourceType"] !== null) {
            $this->DataSourceType = $param["DataSourceType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = [];
            foreach ($param["Config"] as $key => $value){
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->Config, $obj);
            }
        }

        if (array_key_exists("ExtConfig",$param) and $param["ExtConfig"] !== null) {
            $this->ExtConfig = [];
            foreach ($param["ExtConfig"] as $key => $value){
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->ExtConfig, $obj);
            }
        }

        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = [];
            foreach ($param["Schema"] as $key => $value){
                $obj = new IntegrationNodeSchema();
                $obj->deserialize($value);
                array_push($this->Schema, $obj);
            }
        }

        if (array_key_exists("NodeMapping",$param) and $param["NodeMapping"] !== null) {
            $this->NodeMapping = new IntegrationNodeMapping();
            $this->NodeMapping->deserialize($param["NodeMapping"]);
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }
    }
}
