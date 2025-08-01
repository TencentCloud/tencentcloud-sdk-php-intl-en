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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DetachNetworkInterface request structure.
 *
 * @method string getNetworkInterfaceId() Obtain The ID of the ENI instance, such as `eni-m6dyj72l`.
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) Set The ID of the ENI instance, such as `eni-m6dyj72l`.
 * @method string getInstanceId() Obtain The ID of the CVM instance, such as `ins-r8hr2upy`.
 * @method void setInstanceId(string $InstanceId) Set The ID of the CVM instance, such as `ins-r8hr2upy`.
 */
class DetachNetworkInterfaceRequest extends AbstractModel
{
    /**
     * @var string The ID of the ENI instance, such as `eni-m6dyj72l`.
     */
    public $NetworkInterfaceId;

    /**
     * @var string The ID of the CVM instance, such as `ins-r8hr2upy`.
     */
    public $InstanceId;

    /**
     * @param string $NetworkInterfaceId The ID of the ENI instance, such as `eni-m6dyj72l`.
     * @param string $InstanceId The ID of the CVM instance, such as `ins-r8hr2upy`.
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
        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
