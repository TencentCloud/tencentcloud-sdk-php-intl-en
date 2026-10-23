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
 * DescribeLibraDBClusterTableMapping request structure.
 *
 * @method string getClusterId() Obtain Analysis cluster ID
 * @method void setClusterId(string $ClusterId) Set Analysis cluster ID
 * @method string getInstanceId() Obtain Analysis engine instance ID
 * @method void setInstanceId(string $InstanceId) Set Analysis engine instance ID
 * @method string getNodeId() Obtain Node ID.
 * @method void setNodeId(string $NodeId) Set Node ID.
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method integer getLimit() Obtain Page record limit
 * @method void setLimit(integer $Limit) Set Page record limit
 * @method array getSrcSchemas() Obtain Source schema list
 * @method void setSrcSchemas(array $SrcSchemas) Set Source schema list
 * @method array getSrcTableName() Obtain Source table list
 * @method void setSrcTableName(array $SrcTableName) Set Source table list
 * @method array getStatusList() Obtain Status list
 * @method void setStatusList(array $StatusList) Set Status list
 * @method array getMapSchemas() Obtain Map database names
 * @method void setMapSchemas(array $MapSchemas) Set Map database names
 * @method array getMapTableName() Obtain Mapping table name
 * @method void setMapTableName(array $MapTableName) Set Mapping table name
 * @method boolean getMapSchemaNotEmpty() Obtain Whether to query records where the mapping database name is not empty
 * @method void setMapSchemaNotEmpty(boolean $MapSchemaNotEmpty) Set Whether to query records where the mapping database name is not empty
 * @method boolean getMapTableNameNotEmpty() Obtain Whether to query records where the mapping table name is not empty
 * @method void setMapTableNameNotEmpty(boolean $MapTableNameNotEmpty) Set Whether to query records where the mapping table name is not empty
 */
class DescribeLibraDBClusterTableMappingRequest extends AbstractModel
{
    /**
     * @var string Analysis cluster ID
     */
    public $ClusterId;

    /**
     * @var string Analysis engine instance ID
     */
    public $InstanceId;

    /**
     * @var string Node ID.
     */
    public $NodeId;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var integer Page record limit
     */
    public $Limit;

    /**
     * @var array Source schema list
     */
    public $SrcSchemas;

    /**
     * @var array Source table list
     */
    public $SrcTableName;

    /**
     * @var array Status list
     */
    public $StatusList;

    /**
     * @var array Map database names
     */
    public $MapSchemas;

    /**
     * @var array Mapping table name
     */
    public $MapTableName;

    /**
     * @var boolean Whether to query records where the mapping database name is not empty
     */
    public $MapSchemaNotEmpty;

    /**
     * @var boolean Whether to query records where the mapping table name is not empty
     */
    public $MapTableNameNotEmpty;

    /**
     * @param string $ClusterId Analysis cluster ID
     * @param string $InstanceId Analysis engine instance ID
     * @param string $NodeId Node ID.
     * @param integer $Offset Offset.
     * @param integer $Limit Page record limit
     * @param array $SrcSchemas Source schema list
     * @param array $SrcTableName Source table list
     * @param array $StatusList Status list
     * @param array $MapSchemas Map database names
     * @param array $MapTableName Mapping table name
     * @param boolean $MapSchemaNotEmpty Whether to query records where the mapping database name is not empty
     * @param boolean $MapTableNameNotEmpty Whether to query records where the mapping table name is not empty
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SrcSchemas",$param) and $param["SrcSchemas"] !== null) {
            $this->SrcSchemas = $param["SrcSchemas"];
        }

        if (array_key_exists("SrcTableName",$param) and $param["SrcTableName"] !== null) {
            $this->SrcTableName = $param["SrcTableName"];
        }

        if (array_key_exists("StatusList",$param) and $param["StatusList"] !== null) {
            $this->StatusList = $param["StatusList"];
        }

        if (array_key_exists("MapSchemas",$param) and $param["MapSchemas"] !== null) {
            $this->MapSchemas = $param["MapSchemas"];
        }

        if (array_key_exists("MapTableName",$param) and $param["MapTableName"] !== null) {
            $this->MapTableName = $param["MapTableName"];
        }

        if (array_key_exists("MapSchemaNotEmpty",$param) and $param["MapSchemaNotEmpty"] !== null) {
            $this->MapSchemaNotEmpty = $param["MapSchemaNotEmpty"];
        }

        if (array_key_exists("MapTableNameNotEmpty",$param) and $param["MapTableNameNotEmpty"] !== null) {
            $this->MapTableNameNotEmpty = $param["MapTableNameNotEmpty"];
        }
    }
}
