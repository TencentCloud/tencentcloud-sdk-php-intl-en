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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node information
 *
 * @method string getNodeType() Obtain Node type: Master/Core/Task/Router/Common
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setNodeType(string $NodeType) Set Node type: Master/Core/Task/Router/Common
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getNodeSize() Obtain Number of nodes
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setNodeSize(integer $NodeSize) Set Number of nodes
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class ShortNodeInfo extends AbstractModel
{
    /**
     * @var string Node type: Master/Core/Task/Router/Common
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $NodeType;

    /**
     * @var integer Number of nodes
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $NodeSize;

    /**
     * @param string $NodeType Node type: Master/Core/Task/Router/Common
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $NodeSize Number of nodes
Note: This field may return `null`, indicating that no valid value can be obtained.
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

        if (array_key_exists("NodeSize",$param) and $param["NodeSize"] !== null) {
            $this->NodeSize = $param["NodeSize"];
        }
    }
}
