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
 * DeleteCustomFunction request structure.
 *
 * @method string getClusterIdentifier() Obtain Cluster Instance ID
 * @method void setClusterIdentifier(string $ClusterIdentifier) Set Cluster Instance ID
 * @method string getFunctionId() Obtain Function ID
 * @method void setFunctionId(string $FunctionId) Set Function ID
 * @method string getProjectId() Obtain Project ID, required
 * @method void setProjectId(string $ProjectId) Set Project ID, required
 * @method string getFunctionName() Obtain Function Name
 * @method void setFunctionName(string $FunctionName) Set Function Name
 * @method string getFunctionType() Obtain Function Type, HIVE, SPARK, DLC, CDW_POSTGRESQL
 * @method void setFunctionType(string $FunctionType) Set Function Type, HIVE, SPARK, DLC, CDW_POSTGRESQL
 * @method string getDatabaseName() Obtain Database name
 * @method void setDatabaseName(string $DatabaseName) Set Database name
 * @method string getSchemaName() Obtain Pattern name
 * @method void setSchemaName(string $SchemaName) Set Pattern name
 * @method string getCommandFormat() Obtain Function Command Format
 * @method void setCommandFormat(string $CommandFormat) Set Function Command Format
 */
class DeleteCustomFunctionRequest extends AbstractModel
{
    /**
     * @var string Cluster Instance ID
     */
    public $ClusterIdentifier;

    /**
     * @var string Function ID
     */
    public $FunctionId;

    /**
     * @var string Project ID, required
     */
    public $ProjectId;

    /**
     * @var string Function Name
     */
    public $FunctionName;

    /**
     * @var string Function Type, HIVE, SPARK, DLC, CDW_POSTGRESQL
     */
    public $FunctionType;

    /**
     * @var string Database name
     */
    public $DatabaseName;

    /**
     * @var string Pattern name
     */
    public $SchemaName;

    /**
     * @var string Function Command Format
     */
    public $CommandFormat;

    /**
     * @param string $ClusterIdentifier Cluster Instance ID
     * @param string $FunctionId Function ID
     * @param string $ProjectId Project ID, required
     * @param string $FunctionName Function Name
     * @param string $FunctionType Function Type, HIVE, SPARK, DLC, CDW_POSTGRESQL
     * @param string $DatabaseName Database name
     * @param string $SchemaName Pattern name
     * @param string $CommandFormat Function Command Format
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
        if (array_key_exists("ClusterIdentifier",$param) and $param["ClusterIdentifier"] !== null) {
            $this->ClusterIdentifier = $param["ClusterIdentifier"];
        }

        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("FunctionType",$param) and $param["FunctionType"] !== null) {
            $this->FunctionType = $param["FunctionType"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("CommandFormat",$param) and $param["CommandFormat"] !== null) {
            $this->CommandFormat = $param["CommandFormat"];
        }
    }
}
