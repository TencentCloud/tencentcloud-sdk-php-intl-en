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
 * Count of nodes in the proxy node availability zone
 *
 * @method string getProxyNodeZone() Obtain proxy node availability zone
 * @method void setProxyNodeZone(string $ProxyNodeZone) Set proxy node availability zone
 * @method integer getProxyNodeCount() Obtain Number of proxy nodes.
 * @method void setProxyNodeCount(integer $ProxyNodeCount) Set Number of proxy nodes.
 */
class ProxyZone extends AbstractModel
{
    /**
     * @var string proxy node availability zone
     */
    public $ProxyNodeZone;

    /**
     * @var integer Number of proxy nodes.
     */
    public $ProxyNodeCount;

    /**
     * @param string $ProxyNodeZone proxy node availability zone
     * @param integer $ProxyNodeCount Number of proxy nodes.
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
        if (array_key_exists("ProxyNodeZone",$param) and $param["ProxyNodeZone"] !== null) {
            $this->ProxyNodeZone = $param["ProxyNodeZone"];
        }

        if (array_key_exists("ProxyNodeCount",$param) and $param["ProxyNodeCount"] !== null) {
            $this->ProxyNodeCount = $param["ProxyNodeCount"];
        }
    }
}
