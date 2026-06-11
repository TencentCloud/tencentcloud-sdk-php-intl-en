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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specific Tool Call Function call
 *
 * @method string getName() Obtain <p>Function name</p>
 * @method void setName(string $Name) Set <p>Function name</p>
 * @method string getArguments() Obtain <p>Function parameter, usually a json string</p>
 * @method void setArguments(string $Arguments) Set <p>Function parameter, usually a json string</p>
 */
class ToolCallFunction extends AbstractModel
{
    /**
     * @var string <p>Function name</p>
     */
    public $Name;

    /**
     * @var string <p>Function parameter, usually a json string</p>
     */
    public $Arguments;

    /**
     * @param string $Name <p>Function name</p>
     * @param string $Arguments <p>Function parameter, usually a json string</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Arguments",$param) and $param["Arguments"] !== null) {
            $this->Arguments = $param["Arguments"];
        }
    }
}
