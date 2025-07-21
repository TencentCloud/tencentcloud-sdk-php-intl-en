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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteLifecycleHook request structure.
 *
 * @method string getLifecycleHookId() Obtain Lifecycle hook ID. calling the api [DescribeLifecycleHooks](https://intl.cloud.tencent.com/document/api/377/34452?from_cn_redirect=1) and retrieving the LifecycleHookId from the returned information obtains the lifecycle hook ID.
 * @method void setLifecycleHookId(string $LifecycleHookId) Set Lifecycle hook ID. calling the api [DescribeLifecycleHooks](https://intl.cloud.tencent.com/document/api/377/34452?from_cn_redirect=1) and retrieving the LifecycleHookId from the returned information obtains the lifecycle hook ID.
 */
class DeleteLifecycleHookRequest extends AbstractModel
{
    /**
     * @var string Lifecycle hook ID. calling the api [DescribeLifecycleHooks](https://intl.cloud.tencent.com/document/api/377/34452?from_cn_redirect=1) and retrieving the LifecycleHookId from the returned information obtains the lifecycle hook ID.
     */
    public $LifecycleHookId;

    /**
     * @param string $LifecycleHookId Lifecycle hook ID. calling the api [DescribeLifecycleHooks](https://intl.cloud.tencent.com/document/api/377/34452?from_cn_redirect=1) and retrieving the LifecycleHookId from the returned information obtains the lifecycle hook ID.
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
        if (array_key_exists("LifecycleHookId",$param) and $param["LifecycleHookId"] !== null) {
            $this->LifecycleHookId = $param["LifecycleHookId"];
        }
    }
}
