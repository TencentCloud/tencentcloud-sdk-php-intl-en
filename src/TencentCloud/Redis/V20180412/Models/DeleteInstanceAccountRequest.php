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
 * DeleteInstanceAccount request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method string getAccountName() Obtain Sub-account name. Log in to the [Redis console](https://console.tencentcloud.com/redis) and switch to the **Account Management** page to obtain it. For details, see [Managing Account](https://www.tencentcloud.com/document/product/239/34590).
 * @method void setAccountName(string $AccountName) Set Sub-account name. Log in to the [Redis console](https://console.tencentcloud.com/redis) and switch to the **Account Management** page to obtain it. For details, see [Managing Account](https://www.tencentcloud.com/document/product/239/34590).
 */
class DeleteInstanceAccountRequest extends AbstractModel
{
    /**
     * @var string Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     */
    public $InstanceId;

    /**
     * @var string Sub-account name. Log in to the [Redis console](https://console.tencentcloud.com/redis) and switch to the **Account Management** page to obtain it. For details, see [Managing Account](https://www.tencentcloud.com/document/product/239/34590).
     */
    public $AccountName;

    /**
     * @param string $InstanceId Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     * @param string $AccountName Sub-account name. Log in to the [Redis console](https://console.tencentcloud.com/redis) and switch to the **Account Management** page to obtain it. For details, see [Managing Account](https://www.tencentcloud.com/document/product/239/34590).
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

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }
    }
}
