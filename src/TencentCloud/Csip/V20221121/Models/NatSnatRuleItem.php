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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SNAT rule
 *
 * @method string getNatGatewaySnatId() Obtain <p>Gateway SNat ID</p>
 * @method void setNatGatewaySnatId(string $NatGatewaySnatId) Set <p>Gateway SNat ID</p>
 * @method string getResourceId() Obtain <p>Resource ID</p>
 * @method void setResourceId(string $ResourceId) Set <p>Resource ID</p>
 * @method string getResourceType() Obtain <p>Resource type.</p>
 * @method void setResourceType(string $ResourceType) Set <p>Resource type.</p>
 * @method string getPrivateIpAddress() Obtain <p>Private IP address.</p>
 * @method void setPrivateIpAddress(string $PrivateIpAddress) Set <p>Private IP address.</p>
 * @method string getPublicIpAddresses() Obtain <p>Public IP address.</p>
 * @method void setPublicIpAddresses(string $PublicIpAddresses) Set <p>Public IP address.</p>
 * @method string getDescription() Obtain <p>Description.</p>
 * @method void setDescription(string $Description) Set <p>Description.</p>
 * @method string getCreatedTime() Obtain <p>Creation time.</p>
 * @method void setCreatedTime(string $CreatedTime) Set <p>Creation time.</p>
 */
class NatSnatRuleItem extends AbstractModel
{
    /**
     * @var string <p>Gateway SNat ID</p>
     */
    public $NatGatewaySnatId;

    /**
     * @var string <p>Resource ID</p>
     */
    public $ResourceId;

    /**
     * @var string <p>Resource type.</p>
     */
    public $ResourceType;

    /**
     * @var string <p>Private IP address.</p>
     */
    public $PrivateIpAddress;

    /**
     * @var string <p>Public IP address.</p>
     */
    public $PublicIpAddresses;

    /**
     * @var string <p>Description.</p>
     */
    public $Description;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreatedTime;

    /**
     * @param string $NatGatewaySnatId <p>Gateway SNat ID</p>
     * @param string $ResourceId <p>Resource ID</p>
     * @param string $ResourceType <p>Resource type.</p>
     * @param string $PrivateIpAddress <p>Private IP address.</p>
     * @param string $PublicIpAddresses <p>Public IP address.</p>
     * @param string $Description <p>Description.</p>
     * @param string $CreatedTime <p>Creation time.</p>
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
        if (array_key_exists("NatGatewaySnatId",$param) and $param["NatGatewaySnatId"] !== null) {
            $this->NatGatewaySnatId = $param["NatGatewaySnatId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            $this->PrivateIpAddress = $param["PrivateIpAddress"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
