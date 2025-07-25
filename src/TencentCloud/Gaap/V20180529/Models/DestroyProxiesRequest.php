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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DestroyProxies request structure.
 *
 * @method integer getForce() Obtain The identifier for forced deletion
1: this connection list is deleted forcibly regardless of whether the origin server has been bound.
0: this connection list cannot be deleted if the origin server has been bound.
If this identifier is 0, the deletion can be performed only when all the connections have not been bound to any origin servers.
 * @method void setForce(integer $Force) Set The identifier for forced deletion
1: this connection list is deleted forcibly regardless of whether the origin server has been bound.
0: this connection list cannot be deleted if the origin server has been bound.
If this identifier is 0, the deletion can be performed only when all the connections have not been bound to any origin servers.
 * @method array getInstanceIds() Obtain List of connection instance IDs; It's an old parameter, please switch to ProxyIds.
 * @method void setInstanceIds(array $InstanceIds) Set List of connection instance IDs; It's an old parameter, please switch to ProxyIds.
 * @method string getClientToken() Obtain A string used to ensure the idempotency of the request, which is generated by the user and must be unique to each request. The maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
For more information, please see How to Ensure Idempotence.
 * @method void setClientToken(string $ClientToken) Set A string used to ensure the idempotency of the request, which is generated by the user and must be unique to each request. The maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
For more information, please see How to Ensure Idempotence.
 * @method array getProxyIds() Obtain List of connection instance IDs; It's a new parameter.
 * @method void setProxyIds(array $ProxyIds) Set List of connection instance IDs; It's a new parameter.
 */
class DestroyProxiesRequest extends AbstractModel
{
    /**
     * @var integer The identifier for forced deletion
1: this connection list is deleted forcibly regardless of whether the origin server has been bound.
0: this connection list cannot be deleted if the origin server has been bound.
If this identifier is 0, the deletion can be performed only when all the connections have not been bound to any origin servers.
     */
    public $Force;

    /**
     * @var array List of connection instance IDs; It's an old parameter, please switch to ProxyIds.
     */
    public $InstanceIds;

    /**
     * @var string A string used to ensure the idempotency of the request, which is generated by the user and must be unique to each request. The maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
For more information, please see How to Ensure Idempotence.
     */
    public $ClientToken;

    /**
     * @var array List of connection instance IDs; It's a new parameter.
     */
    public $ProxyIds;

    /**
     * @param integer $Force The identifier for forced deletion
1: this connection list is deleted forcibly regardless of whether the origin server has been bound.
0: this connection list cannot be deleted if the origin server has been bound.
If this identifier is 0, the deletion can be performed only when all the connections have not been bound to any origin servers.
     * @param array $InstanceIds List of connection instance IDs; It's an old parameter, please switch to ProxyIds.
     * @param string $ClientToken A string used to ensure the idempotency of the request, which is generated by the user and must be unique to each request. The maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.
For more information, please see How to Ensure Idempotence.
     * @param array $ProxyIds List of connection instance IDs; It's a new parameter.
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
        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("ProxyIds",$param) and $param["ProxyIds"] !== null) {
            $this->ProxyIds = $param["ProxyIds"];
        }
    }
}
