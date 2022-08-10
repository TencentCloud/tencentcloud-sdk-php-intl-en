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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Web security configuration switch
 *
 * @method string getWebSwitch() Obtain Switch that controls all web security configuration: basic web protection, custom rules, and rate limiting
 * @method void setWebSwitch(string $WebSwitch) Set Switch that controls all web security configuration: basic web protection, custom rules, and rate limiting
 */
class SwitchConfig extends AbstractModel
{
    /**
     * @var string Switch that controls all web security configuration: basic web protection, custom rules, and rate limiting
     */
    public $WebSwitch;

    /**
     * @param string $WebSwitch Switch that controls all web security configuration: basic web protection, custom rules, and rate limiting
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
        if (array_key_exists("WebSwitch",$param) and $param["WebSwitch"] !== null) {
            $this->WebSwitch = $param["WebSwitch"];
        }
    }
}
