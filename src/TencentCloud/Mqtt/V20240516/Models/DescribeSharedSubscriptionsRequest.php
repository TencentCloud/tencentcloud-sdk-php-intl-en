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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSharedSubscriptions request structure.
 *
 * @method string getInstanceId() Obtain Tencent Cloud MQTT instance ID can be obtained from the [DescribeInstanceList](https://www.tencentcloud.com/document/api/1778/111029?from_cn_redirect=1) api or the console.
 * @method void setInstanceId(string $InstanceId) Set Tencent Cloud MQTT instance ID can be obtained from the [DescribeInstanceList](https://www.tencentcloud.com/document/api/1778/111029?from_cn_redirect=1) api or the console.
 * @method string getSharedName() Obtain Shared subscription group name
 * @method void setSharedName(string $SharedName) Set Shared subscription group name
 */
class DescribeSharedSubscriptionsRequest extends AbstractModel
{
    /**
     * @var string Tencent Cloud MQTT instance ID can be obtained from the [DescribeInstanceList](https://www.tencentcloud.com/document/api/1778/111029?from_cn_redirect=1) api or the console.
     */
    public $InstanceId;

    /**
     * @var string Shared subscription group name
     */
    public $SharedName;

    /**
     * @param string $InstanceId Tencent Cloud MQTT instance ID can be obtained from the [DescribeInstanceList](https://www.tencentcloud.com/document/api/1778/111029?from_cn_redirect=1) api or the console.
     * @param string $SharedName Shared subscription group name
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

        if (array_key_exists("SharedName",$param) and $param["SharedName"] !== null) {
            $this->SharedName = $param["SharedName"];
        }
    }
}
