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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Client IP header
 *
 * @method string getSwitch() Obtain Specifies whether to enable client IP header
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSwitch(string $Switch) Set Specifies whether to enable client IP header
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getHeaderName() Obtain Name of the origin-pull client IP request header
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setHeaderName(string $HeaderName) Set Name of the origin-pull client IP request header
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class ClientIp extends AbstractModel
{
    /**
     * @var string Specifies whether to enable client IP header
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Switch;

    /**
     * @var string Name of the origin-pull client IP request header
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $HeaderName;

    /**
     * @param string $Switch Specifies whether to enable client IP header
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $HeaderName Name of the origin-pull client IP request header
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("HeaderName",$param) and $param["HeaderName"] !== null) {
            $this->HeaderName = $param["HeaderName"];
        }
    }
}
