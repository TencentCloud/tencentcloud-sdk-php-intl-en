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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom driver information
 *
 * @method string getAddress() Obtain URL of custom GPU driver address
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setAddress(string $Address) Set URL of custom GPU driver address
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class CustomDriver extends AbstractModel
{
    /**
     * @var string URL of custom GPU driver address
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Address;

    /**
     * @param string $Address URL of custom GPU driver address
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }
    }
}
