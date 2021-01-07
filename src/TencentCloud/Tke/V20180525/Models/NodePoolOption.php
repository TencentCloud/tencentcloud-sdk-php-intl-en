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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The options for adding the existing node to the node pool
 *
 * @method boolean getAddToNodePool() Obtain Whether to add to the node pool.
 * @method void setAddToNodePool(boolean $AddToNodePool) Set Whether to add to the node pool.
 * @method string getNodePoolId() Obtain Node pool ID
 * @method void setNodePoolId(string $NodePoolId) Set Node pool ID
 * @method boolean getInheritConfigurationFromNodePool() Obtain Whether to inherit the node pool configuration.
 * @method void setInheritConfigurationFromNodePool(boolean $InheritConfigurationFromNodePool) Set Whether to inherit the node pool configuration.
 */
class NodePoolOption extends AbstractModel
{
    /**
     * @var boolean Whether to add to the node pool.
     */
    public $AddToNodePool;

    /**
     * @var string Node pool ID
     */
    public $NodePoolId;

    /**
     * @var boolean Whether to inherit the node pool configuration.
     */
    public $InheritConfigurationFromNodePool;

    /**
     * @param boolean $AddToNodePool Whether to add to the node pool.
     * @param string $NodePoolId Node pool ID
     * @param boolean $InheritConfigurationFromNodePool Whether to inherit the node pool configuration.
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
        if (array_key_exists("AddToNodePool",$param) and $param["AddToNodePool"] !== null) {
            $this->AddToNodePool = $param["AddToNodePool"];
        }

        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("InheritConfigurationFromNodePool",$param) and $param["InheritConfigurationFromNodePool"] !== null) {
            $this->InheritConfigurationFromNodePool = $param["InheritConfigurationFromNodePool"];
        }
    }
}
