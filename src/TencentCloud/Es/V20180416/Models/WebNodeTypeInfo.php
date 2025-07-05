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
 * Visual node configuration
 *
 * @method integer getNodeNum() Obtain Number of visual nodes. The value is always `1`.
 * @method void setNodeNum(integer $NodeNum) Set Number of visual nodes. The value is always `1`.
 * @method string getNodeType() Obtain Visual node specification
 * @method void setNodeType(string $NodeType) Set Visual node specification
 */
class WebNodeTypeInfo extends AbstractModel
{
    /**
     * @var integer Number of visual nodes. The value is always `1`.
     */
    public $NodeNum;

    /**
     * @var string Visual node specification
     */
    public $NodeType;

    /**
     * @param integer $NodeNum Number of visual nodes. The value is always `1`.
     * @param string $NodeType Visual node specification
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
