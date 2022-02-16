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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node information of the proxy
 *
 * @method string getProxyNodeId() Obtain Proxy node ID
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setProxyNodeId(string $ProxyNodeId) Set Proxy node ID
Note: this field may return `null`, indicating that no valid value can be found.
 * @method integer getProxyNodeConnections() Obtain Current number of connections to the node
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setProxyNodeConnections(integer $ProxyNodeConnections) Set Current number of connections to the node
Note: this field may return `null`, indicating that no valid value can be found.
 * @method integer getProxyNodeCpu() Obtain CPU
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setProxyNodeCpu(integer $ProxyNodeCpu) Set CPU
Note: this field may return `null`, indicating that no valid value can be found.
 * @method integer getProxyNodeMem() Obtain Memory
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setProxyNodeMem(integer $ProxyNodeMem) Set Memory
Note: this field may return `null`, indicating that no valid value can be found.
 * @method string getProxyStatus() Obtain Node status:
init (applying)
online (active)
offline (inactive)
destroy (destroyed)
recovering (recovering from fault)
error (failed)
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setProxyStatus(string $ProxyStatus) Set Node status:
init (applying)
online (active)
offline (inactive)
destroy (destroyed)
recovering (recovering from fault)
error (failed)
Note: this field may return `null`, indicating that no valid value can be found.
 */
class ProxyNodeInfo extends AbstractModel
{
    /**
     * @var string Proxy node ID
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $ProxyNodeId;

    /**
     * @var integer Current number of connections to the node
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $ProxyNodeConnections;

    /**
     * @var integer CPU
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $ProxyNodeCpu;

    /**
     * @var integer Memory
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $ProxyNodeMem;

    /**
     * @var string Node status:
init (applying)
online (active)
offline (inactive)
destroy (destroyed)
recovering (recovering from fault)
error (failed)
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $ProxyStatus;

    /**
     * @param string $ProxyNodeId Proxy node ID
Note: this field may return `null`, indicating that no valid value can be found.
     * @param integer $ProxyNodeConnections Current number of connections to the node
Note: this field may return `null`, indicating that no valid value can be found.
     * @param integer $ProxyNodeCpu CPU
Note: this field may return `null`, indicating that no valid value can be found.
     * @param integer $ProxyNodeMem Memory
Note: this field may return `null`, indicating that no valid value can be found.
     * @param string $ProxyStatus Node status:
init (applying)
online (active)
offline (inactive)
destroy (destroyed)
recovering (recovering from fault)
error (failed)
Note: this field may return `null`, indicating that no valid value can be found.
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
        if (array_key_exists("ProxyNodeId",$param) and $param["ProxyNodeId"] !== null) {
            $this->ProxyNodeId = $param["ProxyNodeId"];
        }

        if (array_key_exists("ProxyNodeConnections",$param) and $param["ProxyNodeConnections"] !== null) {
            $this->ProxyNodeConnections = $param["ProxyNodeConnections"];
        }

        if (array_key_exists("ProxyNodeCpu",$param) and $param["ProxyNodeCpu"] !== null) {
            $this->ProxyNodeCpu = $param["ProxyNodeCpu"];
        }

        if (array_key_exists("ProxyNodeMem",$param) and $param["ProxyNodeMem"] !== null) {
            $this->ProxyNodeMem = $param["ProxyNodeMem"];
        }

        if (array_key_exists("ProxyStatus",$param) and $param["ProxyStatus"] !== null) {
            $this->ProxyStatus = $param["ProxyStatus"];
        }
    }
}
