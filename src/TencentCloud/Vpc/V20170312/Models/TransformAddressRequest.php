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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TransformAddress request structure.
 *
 * @method string getInstanceId() Obtain The ID of the instance with a common public IP to be operated on, such as `ins-11112222`. You can query the instance ID by logging into the [CVM console](https://console.cloud.tencent.com/cvm). You can also obtain the parameter value from the `InstanceId` field in the returned result of the API [DescribeInstances](https://intl.cloud.tencent.com/document/product/213/33256).
 * @method void setInstanceId(string $InstanceId) Set The ID of the instance with a common public IP to be operated on, such as `ins-11112222`. You can query the instance ID by logging into the [CVM console](https://console.cloud.tencent.com/cvm). You can also obtain the parameter value from the `InstanceId` field in the returned result of the API [DescribeInstances](https://intl.cloud.tencent.com/document/product/213/33256).
 */
class TransformAddressRequest extends AbstractModel
{
    /**
     * @var string The ID of the instance with a common public IP to be operated on, such as `ins-11112222`. You can query the instance ID by logging into the [CVM console](https://console.cloud.tencent.com/cvm). You can also obtain the parameter value from the `InstanceId` field in the returned result of the API [DescribeInstances](https://intl.cloud.tencent.com/document/product/213/33256).
     */
    public $InstanceId;

    /**
     * @param string $InstanceId The ID of the instance with a common public IP to be operated on, such as `ins-11112222`. You can query the instance ID by logging into the [CVM console](https://console.cloud.tencent.com/cvm). You can also obtain the parameter value from the `InstanceId` field in the returned result of the API [DescribeInstances](https://intl.cloud.tencent.com/document/product/213/33256).
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
