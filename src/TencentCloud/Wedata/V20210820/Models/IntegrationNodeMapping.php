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
 * Integrated Node Mapping
 *
 * @method string getSourceId() Obtain Source Node ID
 * @method void setSourceId(string $SourceId) Set Source Node ID
 * @method string getSinkId() Obtain Target Node ID
 * @method void setSinkId(string $SinkId) Set Target Node ID
 * @method array getSourceSchema() Obtain Source Node Schema
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSourceSchema(array $SourceSchema) Set Source Node Schema
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getSchemaMappings() Obtain Node Schema Mapping
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSchemaMappings(array $SchemaMappings) Set Node Schema Mapping
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getExtConfig() Obtain Node Mapping Extended Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExtConfig(array $ExtConfig) Set Node Mapping Extended Information
Note: This field may return null, indicating that no valid value can be obtained.
 */
class IntegrationNodeMapping extends AbstractModel
{
    /**
     * @var string Source Node ID
     */
    public $SourceId;

    /**
     * @var string Target Node ID
     */
    public $SinkId;

    /**
     * @var array Source Node Schema
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SourceSchema;

    /**
     * @var array Node Schema Mapping
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SchemaMappings;

    /**
     * @var array Node Mapping Extended Information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExtConfig;

    /**
     * @param string $SourceId Source Node ID
     * @param string $SinkId Target Node ID
     * @param array $SourceSchema Source Node Schema
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $SchemaMappings Node Schema Mapping
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $ExtConfig Node Mapping Extended Information
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("SinkId",$param) and $param["SinkId"] !== null) {
            $this->SinkId = $param["SinkId"];
        }

        if (array_key_exists("SourceSchema",$param) and $param["SourceSchema"] !== null) {
            $this->SourceSchema = [];
            foreach ($param["SourceSchema"] as $key => $value){
                $obj = new IntegrationNodeSchema();
                $obj->deserialize($value);
                array_push($this->SourceSchema, $obj);
            }
        }

        if (array_key_exists("SchemaMappings",$param) and $param["SchemaMappings"] !== null) {
            $this->SchemaMappings = [];
            foreach ($param["SchemaMappings"] as $key => $value){
                $obj = new IntegrationNodeSchemaMapping();
                $obj->deserialize($value);
                array_push($this->SchemaMappings, $obj);
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
    }
}
