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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateStreamLiveInputSecurityGroup request structure.
 *
 * @method string getName() Obtain Input security group name, which can contain case-sensitive letters, digits, and underscores and must be unique at the region level
 * @method void setName(string $Name) Set Input security group name, which can contain case-sensitive letters, digits, and underscores and must be unique at the region level
 * @method array getWhitelist() Obtain Allowlist entries. Quantity: [1, 10]
 * @method void setWhitelist(array $Whitelist) Set Allowlist entries. Quantity: [1, 10]
 */
class CreateStreamLiveInputSecurityGroupRequest extends AbstractModel
{
    /**
     * @var string Input security group name, which can contain case-sensitive letters, digits, and underscores and must be unique at the region level
     */
    public $Name;

    /**
     * @var array Allowlist entries. Quantity: [1, 10]
     */
    public $Whitelist;

    /**
     * @param string $Name Input security group name, which can contain case-sensitive letters, digits, and underscores and must be unique at the region level
     * @param array $Whitelist Allowlist entries. Quantity: [1, 10]
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
