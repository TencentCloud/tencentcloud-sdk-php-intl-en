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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Group Robot Subscription Configuration
 *
 * @method string getHookType() Obtain Group Robot Type, currently supports Feishu
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setHookType(string $HookType) Set Group Robot Type, currently supports Feishu
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getHookAddress() Obtain Group Robot Webhook Address, configuration method refer to https://intl.cloud.tencent.com/document/product/1254/70736?from_cn_redirect=1
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setHookAddress(string $HookAddress) Set Group Robot Webhook Address, configuration method refer to https://intl.cloud.tencent.com/document/product/1254/70736?from_cn_redirect=1
Note: This field may return null, indicating that no valid value can be obtained.
 */
class SubscribeWebHook extends AbstractModel
{
    /**
     * @var string Group Robot Type, currently supports Feishu
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $HookType;

    /**
     * @var string Group Robot Webhook Address, configuration method refer to https://intl.cloud.tencent.com/document/product/1254/70736?from_cn_redirect=1
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $HookAddress;

    /**
     * @param string $HookType Group Robot Type, currently supports Feishu
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $HookAddress Group Robot Webhook Address, configuration method refer to https://intl.cloud.tencent.com/document/product/1254/70736?from_cn_redirect=1
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("HookType",$param) and $param["HookType"] !== null) {
            $this->HookType = $param["HookType"];
        }

        if (array_key_exists("HookAddress",$param) and $param["HookAddress"] !== null) {
            $this->HookAddress = $param["HookAddress"];
        }
    }
}
