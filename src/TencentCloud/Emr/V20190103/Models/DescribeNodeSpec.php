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
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTypes(array $Types) Set Types array.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCmnTypes() Obtain Cloud Managed Node (M Node) model specifications list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCmnTypes(array $CmnTypes) Set Cloud Managed Node (M Node) model specifications list.
Note: This field may return null, indicating that no valid values can be obtained.
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
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Types;

    /**
     * @var array Cloud Managed Node (M Node) model specifications list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CmnTypes;

    /**
     * @param string $NodeType Node type.
     * @param string $NodeName Node type name.
     * @param array $Types Types array.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $CmnTypes Cloud Managed Node (M Node) model specifications list.
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
