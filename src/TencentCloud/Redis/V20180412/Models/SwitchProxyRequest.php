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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SwitchProxy request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method string getProxyID() Obtain Proxy ID of an instance, which can be obtained through NodeId of the response parameter **Proxy** of the API [DescribeInstanceNodeInfo](https://intl.cloud.tencent.com/document/product/239/48603?from_cn_redirect=1).
 * @method void setProxyID(string $ProxyID) Set Proxy ID of an instance, which can be obtained through NodeId of the response parameter **Proxy** of the API [DescribeInstanceNodeInfo](https://intl.cloud.tencent.com/document/product/239/48603?from_cn_redirect=1).
 */
class SwitchProxyRequest extends AbstractModel
{
    /**
     * @var string Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     */
    public $InstanceId;

    /**
     * @var string Proxy ID of an instance, which can be obtained through NodeId of the response parameter **Proxy** of the API [DescribeInstanceNodeInfo](https://intl.cloud.tencent.com/document/product/239/48603?from_cn_redirect=1).
     */
    public $ProxyID;

    /**
     * @param string $InstanceId Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     * @param string $ProxyID Proxy ID of an instance, which can be obtained through NodeId of the response parameter **Proxy** of the API [DescribeInstanceNodeInfo](https://intl.cloud.tencent.com/document/product/239/48603?from_cn_redirect=1).
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

        if (array_key_exists("ProxyID",$param) and $param["ProxyID"] !== null) {
            $this->ProxyID = $param["ProxyID"];
        }
    }
}
