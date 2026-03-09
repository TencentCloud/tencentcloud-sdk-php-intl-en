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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Lineage resource entity.
 *
 * @method string getResourceUniqueId() Obtain Original unique ID of the entity.
Remark: when the lineage is a table column, pass the table ResourceUniqueId::field name as the unique ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceUniqueId(string $ResourceUniqueId) Set Original unique ID of the entity.
Remark: when the lineage is a table column, pass the table ResourceUniqueId::field name as the unique ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResourceType() Obtain Entity type.
TABLE|METRIC|MODEL|SERVICE|COLUMN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceType(string $ResourceType) Set Entity type.
TABLE|METRIC|MODEL|SERVICE|COLUMN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPlatform() Obtain Source: WEDATA|THIRD.
Default wedata.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPlatform(string $Platform) Set Source: WEDATA|THIRD.
Default wedata.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResourceName() Obtain Service name: database name.table name | metric name | model name | field name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceName(string $ResourceName) Set Service name: database name.table name | metric name | model name | field name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Description: table type | metric description | model description | field description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description: table type | metric description | model description | field description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time.


Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time.


Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getResourceProperties() Obtain resource additional parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceProperties(array $ResourceProperties) Set resource additional parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLineageNodeId() Obtain Unique identifier symbol of the lineage node.
 * @method void setLineageNodeId(string $LineageNodeId) Set Unique identifier symbol of the lineage node.
 */
class LineageResouce extends AbstractModel
{
    /**
     * @var string Original unique ID of the entity.
Remark: when the lineage is a table column, pass the table ResourceUniqueId::field name as the unique ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceUniqueId;

    /**
     * @var string Entity type.
TABLE|METRIC|MODEL|SERVICE|COLUMN
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceType;

    /**
     * @var string Source: WEDATA|THIRD.
Default wedata.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Platform;

    /**
     * @var string Service name: database name.table name | metric name | model name | field name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceName;

    /**
     * @var string Description: table type | metric description | model description | field description.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Creation time.


Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var array resource additional parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceProperties;

    /**
     * @var string Unique identifier symbol of the lineage node.
     */
    public $LineageNodeId;

    /**
     * @param string $ResourceUniqueId Original unique ID of the entity.
Remark: when the lineage is a table column, pass the table ResourceUniqueId::field name as the unique ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResourceType Entity type.
TABLE|METRIC|MODEL|SERVICE|COLUMN
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Platform Source: WEDATA|THIRD.
Default wedata.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResourceName Service name: database name.table name | metric name | model name | field name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Description: table type | metric description | model description | field description.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time.


Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Update time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ResourceProperties resource additional parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LineageNodeId Unique identifier symbol of the lineage node.
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
        if (array_key_exists("ResourceUniqueId",$param) and $param["ResourceUniqueId"] !== null) {
            $this->ResourceUniqueId = $param["ResourceUniqueId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ResourceProperties",$param) and $param["ResourceProperties"] !== null) {
            $this->ResourceProperties = [];
            foreach ($param["ResourceProperties"] as $key => $value){
                $obj = new LineageProperty();
                $obj->deserialize($value);
                array_push($this->ResourceProperties, $obj);
            }
        }

        if (array_key_exists("LineageNodeId",$param) and $param["LineageNodeId"] !== null) {
            $this->LineageNodeId = $param["LineageNodeId"];
        }
    }
}
