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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node specifications.
 *
 * @method string getNodeType() Obtain Node type.
 * @method void setNodeType(string $NodeType) Set Node type.
 * @method string getNodeName() Obtain Node type name.
 * @method void setNodeName(string $NodeName) Set Node type name.
 * @method array getTypes() Obtain Types array.
 * @method void setTypes(array $Types) Set Types array.
 * @method array getCmnTypes() Obtain List of cloud-hosted node instance specifications.
 * @method void setCmnTypes(array $CmnTypes) Set List of cloud-hosted node instance specifications.
 */
class DescribeNodeSpec extends AbstractModel
{
    /**
     * @var string Node type.
     */
    public $NodeType;

    /**
     * @var string Node type name.
     */
    public $NodeName;

    /**
     * @var array Types array.
     */
    public $Types;

    /**
     * @var array List of cloud-hosted node instance specifications.
     */
    public $CmnTypes;

    /**
     * @param string $NodeType Node type.
     * @param string $NodeName Node type name.
     * @param array $Types Types array.
     * @param array $CmnTypes List of cloud-hosted node instance specifications.
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
        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = [];
            foreach ($param["Types"] as $key => $value){
                $obj = new NodeSpecType();
                $obj->deserialize($value);
                array_push($this->Types, $obj);
            }
        }

        if (array_key_exists("CmnTypes",$param) and $param["CmnTypes"] !== null) {
            $this->CmnTypes = [];
            foreach ($param["CmnTypes"] as $key => $value){
                $obj = new NodeSpecType();
                $obj->deserialize($value);
                array_push($this->CmnTypes, $obj);
            }
        }
    }
}
