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
 * DeleteEndpointGroups request structure.
 *
 * @method string getGlobalAcceleratorId() Obtain Global acceleration instance ID.
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) Set Global acceleration instance ID.
 * @method string getListenerId() Obtain Listener ID.
 * @method void setListenerId(string $ListenerId) Set Listener ID.
 * @method array getEndpointGroupIds() Obtain Terminal node group ID.
 * @method void setEndpointGroupIds(array $EndpointGroupIds) Set Terminal node group ID.
 */
class DeleteEndpointGroupsRequest extends AbstractModel
{
    /**
     * @var string Global acceleration instance ID.
     */
    public $GlobalAcceleratorId;

    /**
     * @var string Listener ID.
     */
    public $ListenerId;

    /**
     * @var array Terminal node group ID.
     */
    public $EndpointGroupIds;

    /**
     * @param string $GlobalAcceleratorId Global acceleration instance ID.
     * @param string $ListenerId Listener ID.
     * @param array $EndpointGroupIds Terminal node group ID.
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

        if (array_key_exists("EndpointGroupIds",$param) and $param["EndpointGroupIds"] !== null) {
            $this->EndpointGroupIds = $param["EndpointGroupIds"];
        }
    }
}
