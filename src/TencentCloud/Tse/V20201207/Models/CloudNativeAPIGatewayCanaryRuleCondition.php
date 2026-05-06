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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Condition configuration in grayscale rule
 *
 * @method string getType() Obtain Condition type, support path, method, query, header, cookie, body, and system.
 * @method void setType(string $Type) Set Condition type, support path, method, query, header, cookie, body, and system.
 * @method string getKey() Obtain Parameter name.
 * @method void setKey(string $Key) Set Parameter name.
 * @method string getOperator() Obtain Operator, supports "le", "eq", "lt", "ne", "ge", "gt", "regex", "exists", "in", "not in", "prefix", "exact", "regex"
 * @method void setOperator(string $Operator) Set Operator, supports "le", "eq", "lt", "ne", "ge", "gt", "regex", "exists", "in", "not in", "prefix", "exact", "regex"
 * @method string getValue() Obtain Target parameter value
 * @method void setValue(string $Value) Set Target parameter value
 * @method string getDelimiter() Obtain Separator. This parameter is valid only when Operator is in or not in. Supported values: comma, semicolon, space, line break.
 * @method void setDelimiter(string $Delimiter) Set Separator. This parameter is valid only when Operator is in or not in. Supported values: comma, semicolon, space, line break.
 * @method string getGlobalConfigId() Obtain Global configuration Id
 * @method void setGlobalConfigId(string $GlobalConfigId) Set Global configuration Id
 * @method string getGlobalConfigName() Obtain Global configuration name
 * @method void setGlobalConfigName(string $GlobalConfigName) Set Global configuration name
 */
class CloudNativeAPIGatewayCanaryRuleCondition extends AbstractModel
{
    /**
     * @var string Condition type, support path, method, query, header, cookie, body, and system.
     */
    public $Type;

    /**
     * @var string Parameter name.
     */
    public $Key;

    /**
     * @var string Operator, supports "le", "eq", "lt", "ne", "ge", "gt", "regex", "exists", "in", "not in", "prefix", "exact", "regex"
     */
    public $Operator;

    /**
     * @var string Target parameter value
     */
    public $Value;

    /**
     * @var string Separator. This parameter is valid only when Operator is in or not in. Supported values: comma, semicolon, space, line break.
     */
    public $Delimiter;

    /**
     * @var string Global configuration Id
     */
    public $GlobalConfigId;

    /**
     * @var string Global configuration name
     */
    public $GlobalConfigName;

    /**
     * @param string $Type Condition type, support path, method, query, header, cookie, body, and system.
     * @param string $Key Parameter name.
     * @param string $Operator Operator, supports "le", "eq", "lt", "ne", "ge", "gt", "regex", "exists", "in", "not in", "prefix", "exact", "regex"
     * @param string $Value Target parameter value
     * @param string $Delimiter Separator. This parameter is valid only when Operator is in or not in. Supported values: comma, semicolon, space, line break.
     * @param string $GlobalConfigId Global configuration Id
     * @param string $GlobalConfigName Global configuration name
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Delimiter",$param) and $param["Delimiter"] !== null) {
            $this->Delimiter = $param["Delimiter"];
        }

        if (array_key_exists("GlobalConfigId",$param) and $param["GlobalConfigId"] !== null) {
            $this->GlobalConfigId = $param["GlobalConfigId"];
        }

        if (array_key_exists("GlobalConfigName",$param) and $param["GlobalConfigName"] !== null) {
            $this->GlobalConfigName = $param["GlobalConfigName"];
        }
    }
}
