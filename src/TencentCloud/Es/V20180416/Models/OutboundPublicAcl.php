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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node outbound access information
 *
 * @method string getNodeType() Obtain Node types with permission for node outbound access
 * @method void setNodeType(string $NodeType) Set Node types with permission for node outbound access
 * @method array getWhiteHostList() Obtain Allowlist for outbound access from nodes
 * @method void setWhiteHostList(array $WhiteHostList) Set Allowlist for outbound access from nodes
 */
class OutboundPublicAcl extends AbstractModel
{
    /**
     * @var string Node types with permission for node outbound access
     */
    public $NodeType;

    /**
     * @var array Allowlist for outbound access from nodes
     */
    public $WhiteHostList;

    /**
     * @param string $NodeType Node types with permission for node outbound access
     * @param array $WhiteHostList Allowlist for outbound access from nodes
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

        if (array_key_exists("WhiteHostList",$param) and $param["WhiteHostList"] !== null) {
            $this->WhiteHostList = $param["WhiteHostList"];
        }
    }
}
