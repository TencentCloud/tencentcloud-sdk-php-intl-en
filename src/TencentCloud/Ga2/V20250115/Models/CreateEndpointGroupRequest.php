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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEndpointGroup request structure.
 *
 * @method string getGlobalAcceleratorId() Obtain <p>Global acceleration instance ID.</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) Set <p>Global acceleration instance ID.</p>
 * @method string getListenerId() Obtain <p>Listener ID.</p>
 * @method void setListenerId(string $ListenerId) Set <p>Listener ID.</p>
 * @method string getEndpointGroupType() Obtain <p>Node group type.</p><p>Enumeration values:</p><ul><li>VIRTUAL: custom endpoint node group</li><li>DEFAULT: default terminal node group</li></ul>
 * @method void setEndpointGroupType(string $EndpointGroupType) Set <p>Node group type.</p><p>Enumeration values:</p><ul><li>VIRTUAL: custom endpoint node group</li><li>DEFAULT: default terminal node group</li></ul>
 * @method EndpointGroupConfiguration getEndpointGroupConfiguration() Obtain <p>Terminal node group configuration.</p>
 * @method void setEndpointGroupConfiguration(EndpointGroupConfiguration $EndpointGroupConfiguration) Set <p>Terminal node group configuration.</p>
 */
class CreateEndpointGroupRequest extends AbstractModel
{
    /**
     * @var string <p>Global acceleration instance ID.</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @var string <p>Listener ID.</p>
     */
    public $ListenerId;

    /**
     * @var string <p>Node group type.</p><p>Enumeration values:</p><ul><li>VIRTUAL: custom endpoint node group</li><li>DEFAULT: default terminal node group</li></ul>
     */
    public $EndpointGroupType;

    /**
     * @var EndpointGroupConfiguration <p>Terminal node group configuration.</p>
     */
    public $EndpointGroupConfiguration;

    /**
     * @param string $GlobalAcceleratorId <p>Global acceleration instance ID.</p>
     * @param string $ListenerId <p>Listener ID.</p>
     * @param string $EndpointGroupType <p>Node group type.</p><p>Enumeration values:</p><ul><li>VIRTUAL: custom endpoint node group</li><li>DEFAULT: default terminal node group</li></ul>
     * @param EndpointGroupConfiguration $EndpointGroupConfiguration <p>Terminal node group configuration.</p>
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
        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("EndpointGroupType",$param) and $param["EndpointGroupType"] !== null) {
            $this->EndpointGroupType = $param["EndpointGroupType"];
        }

        if (array_key_exists("EndpointGroupConfiguration",$param) and $param["EndpointGroupConfiguration"] !== null) {
            $this->EndpointGroupConfiguration = new EndpointGroupConfiguration();
            $this->EndpointGroupConfiguration->deserialize($param["EndpointGroupConfiguration"]);
        }
    }
}
