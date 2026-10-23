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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom Variable details.
 *
 * @method string getName() Obtain <p>Variable name. You need to fill in the complete prefix: user.zone.* refers to a site-level custom variable, and user.rule.* refers to a rule-level custom variable. The custom part after the prefix supports only uppercase and lowercase letters, digits, and underscores. Variable names are case-sensitive and cannot exceed 50 characters in length. Once a variable is created successfully, its name cannot be modified.</p>
 * @method void setName(string $Name) Set <p>Variable name. You need to fill in the complete prefix: user.zone.* refers to a site-level custom variable, and user.rule.* refers to a rule-level custom variable. The custom part after the prefix supports only uppercase and lowercase letters, digits, and underscores. Variable names are case-sensitive and cannot exceed 50 characters in length. Once a variable is created successfully, its name cannot be modified.</p>
 * @method string getInitialValue() Obtain <p>Initial value of the variable. Supports the use of constant strings, variables, and formulas. Length cannot exceed 255 characters.</p>
 * @method void setInitialValue(string $InitialValue) Set <p>Initial value of the variable. Supports the use of constant strings, variables, and formulas. Length cannot exceed 255 characters.</p>
 * @method string getDescription() Obtain <p>Variable description. Length limited to no more than 60 characters.</p>
 * @method void setDescription(string $Description) Set <p>Variable description. Length limited to no more than 60 characters.</p>
 */
class CustomVariable extends AbstractModel
{
    /**
     * @var string <p>Variable name. You need to fill in the complete prefix: user.zone.* refers to a site-level custom variable, and user.rule.* refers to a rule-level custom variable. The custom part after the prefix supports only uppercase and lowercase letters, digits, and underscores. Variable names are case-sensitive and cannot exceed 50 characters in length. Once a variable is created successfully, its name cannot be modified.</p>
     */
    public $Name;

    /**
     * @var string <p>Initial value of the variable. Supports the use of constant strings, variables, and formulas. Length cannot exceed 255 characters.</p>
     */
    public $InitialValue;

    /**
     * @var string <p>Variable description. Length limited to no more than 60 characters.</p>
     */
    public $Description;

    /**
     * @param string $Name <p>Variable name. You need to fill in the complete prefix: user.zone.* refers to a site-level custom variable, and user.rule.* refers to a rule-level custom variable. The custom part after the prefix supports only uppercase and lowercase letters, digits, and underscores. Variable names are case-sensitive and cannot exceed 50 characters in length. Once a variable is created successfully, its name cannot be modified.</p>
     * @param string $InitialValue <p>Initial value of the variable. Supports the use of constant strings, variables, and formulas. Length cannot exceed 255 characters.</p>
     * @param string $Description <p>Variable description. Length limited to no more than 60 characters.</p>
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

        if (array_key_exists("InitialValue",$param) and $param["InitialValue"] !== null) {
            $this->InitialValue = $param["InitialValue"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
