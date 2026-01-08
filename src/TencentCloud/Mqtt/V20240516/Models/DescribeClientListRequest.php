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
 * DescribeClientList request structure.
 *
 * @method string getInstanceId() Obtain tencent cloud MQTT instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.comom/document/api/1778/111029?from_cn_redirect=1) api or console.
 * @method void setInstanceId(string $InstanceId) Set tencent cloud MQTT instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.comom/document/api/1778/111029?from_cn_redirect=1) api or console.
 * @method string getClientId() Obtain Client ID
 * @method void setClientId(string $ClientId) Set Client ID
 * @method string getNumber() Obtain Limit on the number of clients. Maximum value: 1024. Default value: 1024.
 * @method void setNumber(string $Number) Set Limit on the number of clients. Maximum value: 1024. Default value: 1024.
 */
class DescribeClientListRequest extends AbstractModel
{
    /**
     * @var string tencent cloud MQTT instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.comom/document/api/1778/111029?from_cn_redirect=1) api or console.
     */
    public $InstanceId;

    /**
     * @var string Client ID
     */
    public $ClientId;

    /**
     * @var string Limit on the number of clients. Maximum value: 1024. Default value: 1024.
     */
    public $Number;

    /**
     * @param string $InstanceId tencent cloud MQTT instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.comom/document/api/1778/111029?from_cn_redirect=1) api or console.
     * @param string $ClientId Client ID
     * @param string $Number Limit on the number of clients. Maximum value: 1024. Default value: 1024.
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

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }
    }
}
