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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateStreamLinkSecurityGroup request structure.
 *
 * @method string getName() Obtain <p>Security group name, supporting letters, digits, and underscores, unique within a Region.</p>
 * @method void setName(string $Name) Set <p>Security group name, supporting letters, digits, and underscores, unique within a Region.</p>
 * @method array getWhitelist() Obtain <p>Allowlist, maximum number: 10.</p>
 * @method void setWhitelist(array $Whitelist) Set <p>Allowlist, maximum number: 10.</p>
 */
class CreateStreamLinkSecurityGroupRequest extends AbstractModel
{
    /**
     * @var string <p>Security group name, supporting letters, digits, and underscores, unique within a Region.</p>
     */
    public $Name;

    /**
     * @var array <p>Allowlist, maximum number: 10.</p>
     */
    public $Whitelist;

    /**
     * @param string $Name <p>Security group name, supporting letters, digits, and underscores, unique within a Region.</p>
     * @param array $Whitelist <p>Allowlist, maximum number: 10.</p>
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

        if (array_key_exists("Whitelist",$param) and $param["Whitelist"] !== null) {
            $this->Whitelist = $param["Whitelist"];
        }
    }
}
