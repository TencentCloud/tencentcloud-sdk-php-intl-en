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
 * ModifyNetworkApplication request structure.
 *
 * @method string getNetworkAppId() Obtain <p>Web application id</p>
 * @method void setNetworkAppId(string $NetworkAppId) Set <p>Web application id</p>
 * @method string getName() Obtain <p>Network application name: Length not exceeding 64 characters, name must be unique.</p><ul><li>Can only contain the following characters:<ul><li>Letters (a-z and A-Z)</li><li>Numbers</li><li>Underscore</li><li>Hyphen (minus sign)</li><li>Chinese characters</li></ul></li><li>At least one character</li><li>Cannot contain spaces</li><li>Cannot contain other special characters (such as @, #, $, % etc.)</li></ul>
 * @method void setName(string $Name) Set <p>Network application name: Length not exceeding 64 characters, name must be unique.</p><ul><li>Can only contain the following characters:<ul><li>Letters (a-z and A-Z)</li><li>Numbers</li><li>Underscore</li><li>Hyphen (minus sign)</li><li>Chinese characters</li></ul></li><li>At least one character</li><li>Cannot contain spaces</li><li>Cannot contain other special characters (such as @, #, $, % etc.)</li></ul>
 */
class ModifyNetworkApplicationRequest extends AbstractModel
{
    /**
     * @var string <p>Web application id</p>
     */
    public $NetworkAppId;

    /**
     * @var string <p>Network application name: Length not exceeding 64 characters, name must be unique.</p><ul><li>Can only contain the following characters:<ul><li>Letters (a-z and A-Z)</li><li>Numbers</li><li>Underscore</li><li>Hyphen (minus sign)</li><li>Chinese characters</li></ul></li><li>At least one character</li><li>Cannot contain spaces</li><li>Cannot contain other special characters (such as @, #, $, % etc.)</li></ul>
     */
    public $Name;

    /**
     * @param string $NetworkAppId <p>Web application id</p>
     * @param string $Name <p>Network application name: Length not exceeding 64 characters, name must be unique.</p><ul><li>Can only contain the following characters:<ul><li>Letters (a-z and A-Z)</li><li>Numbers</li><li>Underscore</li><li>Hyphen (minus sign)</li><li>Chinese characters</li></ul></li><li>At least one character</li><li>Cannot contain spaces</li><li>Cannot contain other special characters (such as @, #, $, % etc.)</li></ul>
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
        if (array_key_exists("NetworkAppId",$param) and $param["NetworkAppId"] !== null) {
            $this->NetworkAppId = $param["NetworkAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
