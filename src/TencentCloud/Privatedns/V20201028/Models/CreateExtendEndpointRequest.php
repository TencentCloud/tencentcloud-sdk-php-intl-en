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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateExtendEndpoint request structure.
 *
 * @method string getEndpointName() Obtain Outbound endpoint name.
 * @method void setEndpointName(string $EndpointName) Set Outbound endpoint name.
 * @method string getEndpointRegion() Obtain The region of the outbound endpoint must be consistent with the region of the forwarding target VIP.
 * @method void setEndpointRegion(string $EndpointRegion) Set The region of the outbound endpoint must be consistent with the region of the forwarding target VIP.
 * @method ForwardIp getForwardIp() Obtain Forwarding target.
 * @method void setForwardIp(ForwardIp $ForwardIp) Set Forwarding target.
 */
class CreateExtendEndpointRequest extends AbstractModel
{
    /**
     * @var string Outbound endpoint name.
     */
    public $EndpointName;

    /**
     * @var string The region of the outbound endpoint must be consistent with the region of the forwarding target VIP.
     */
    public $EndpointRegion;

    /**
     * @var ForwardIp Forwarding target.
     */
    public $ForwardIp;

    /**
     * @param string $EndpointName Outbound endpoint name.
     * @param string $EndpointRegion The region of the outbound endpoint must be consistent with the region of the forwarding target VIP.
     * @param ForwardIp $ForwardIp Forwarding target.
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
        if (array_key_exists("EndpointName",$param) and $param["EndpointName"] !== null) {
            $this->EndpointName = $param["EndpointName"];
        }

        if (array_key_exists("EndpointRegion",$param) and $param["EndpointRegion"] !== null) {
            $this->EndpointRegion = $param["EndpointRegion"];
        }

        if (array_key_exists("ForwardIp",$param) and $param["ForwardIp"] !== null) {
            $this->ForwardIp = new ForwardIp();
            $this->ForwardIp->deserialize($param["ForwardIp"]);
        }
    }
}
