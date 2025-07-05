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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Filter
 *
 * @method string getName() Obtain Filter field name
 * @method void setName(string $Name) Set Filter field name
 * @method string getValue() Obtain Filter field value
 * @method void setValue(string $Value) Set Filter field value
 * @method array getValues() Obtain Filter field value
 * @method void setValues(array $Values) Set Filter field value
 */
class Filter extends AbstractModel
{
    /**
     * @var string Filter field name
     */
    public $Name;

    /**
     * @var string Filter field value
     */
    public $Value;

    /**
     * @var array Filter field value
     */
    public $Values;

    /**
     * @param string $Name Filter field name
     * @param string $Value Filter field value
     * @param array $Values Filter field value
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
