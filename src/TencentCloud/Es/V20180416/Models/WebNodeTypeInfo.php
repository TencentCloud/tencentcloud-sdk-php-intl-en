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
 * Visualize node configuration
 *
 * @method integer getNodeNum() Obtain Number of nodes to visualize, fixed as 1
 * @method void setNodeNum(integer $NodeNum) Set Number of nodes to visualize, fixed as 1
 * @method string getNodeType() Obtain Visualize node specifications
 * @method void setNodeType(string $NodeType) Set Visualize node specifications
 */
class WebNodeTypeInfo extends AbstractModel
{
    /**
     * @var integer Number of nodes to visualize, fixed as 1
     */
    public $NodeNum;

    /**
     * @var string Visualize node specifications
     */
    public $NodeType;

    /**
     * @param integer $NodeNum Number of nodes to visualize, fixed as 1
     * @param string $NodeType Visualize node specifications
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
        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }
    }
}
