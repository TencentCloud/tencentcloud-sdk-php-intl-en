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
 * Throttling rule Filter
 *
 * @method string getKey() Obtain Key of throttling conditions
 * @method void setKey(string $Key) Set Key of throttling conditions
 * @method array getValues() Obtain Values of throttling conditions
 * @method void setValues(array $Values) Set Values of throttling conditions
 * @method string getOperator() Obtain operator
 * @method void setOperator(string $Operator) Set operator
 * @method string getName() Obtain name in header or query
 * @method void setName(string $Name) Set name in header or query
 */
class RuleFilter extends AbstractModel
{
    /**
     * @var string Key of throttling conditions
     */
    public $Key;

    /**
     * @var array Values of throttling conditions
     */
    public $Values;

    /**
     * @var string operator
     */
    public $Operator;

    /**
     * @var string name in header or query
     */
    public $Name;

    /**
     * @param string $Key Key of throttling conditions
     * @param array $Values Values of throttling conditions
     * @param string $Operator operator
     * @param string $Name name in header or query
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
