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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom script for node pools
 *
 * @method string getPreInit() Obtain Custom script before node initialization
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setPreInit(string $PreInit) Set Custom script before node initialization
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getPostInit() Obtain Custom script after node initialization
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setPostInit(string $PostInit) Set Custom script after node initialization
Note: This field may return "null", indicating that no valid value can be obtained.
 */
class LifecycleConfig extends AbstractModel
{
    /**
     * @var string Custom script before node initialization
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $PreInit;

    /**
     * @var string Custom script after node initialization
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $PostInit;

    /**
     * @param string $PreInit Custom script before node initialization
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $PostInit Custom script after node initialization
Note: This field may return "null", indicating that no valid value can be obtained.
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
        if (array_key_exists("PreInit",$param) and $param["PreInit"] !== null) {
            $this->PreInit = $param["PreInit"];
        }

        if (array_key_exists("PostInit",$param) and $param["PostInit"] !== null) {
            $this->PostInit = $param["PostInit"];
        }
    }
}
