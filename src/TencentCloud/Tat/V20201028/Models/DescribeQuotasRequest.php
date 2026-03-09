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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeQuotas request structure.
 *
 * @method array getResourceNames() Obtain Resource name

Value is:.

- COMMAND: COMMAND.
-REGISTER_CODE: managed instance registration code.
 * @method void setResourceNames(array $ResourceNames) Set Resource name

Value is:.

- COMMAND: COMMAND.
-REGISTER_CODE: managed instance registration code.
 */
class DescribeQuotasRequest extends AbstractModel
{
    /**
     * @var array Resource name

Value is:.

- COMMAND: COMMAND.
-REGISTER_CODE: managed instance registration code.
     */
    public $ResourceNames;

    /**
     * @param array $ResourceNames Resource name

Value is:.

- COMMAND: COMMAND.
-REGISTER_CODE: managed instance registration code.
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
        if (array_key_exists("ResourceNames",$param) and $param["ResourceNames"] !== null) {
            $this->ResourceNames = $param["ResourceNames"];
        }
    }
}
