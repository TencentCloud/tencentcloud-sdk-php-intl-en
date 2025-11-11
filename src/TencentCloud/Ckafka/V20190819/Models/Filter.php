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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query filter.
Describes the key-value pair filter, which is used for conditional filtering queries. for example, filter by ID, name, and status.
If there are multiple filters, the logical relationship between them is AND.
If the same Filter contains multiple Values, the relationship between Values under the same Filter is logical OR.
>
 *
 * @method string getName() Obtain Field to be filtered.
 * @method void setName(string $Name) Set Field to be filtered.
 * @method array getValues() Obtain Filter value of field.
 * @method void setValues(array $Values) Set Filter value of field.
 */
class Filter extends AbstractModel
{
    /**
     * @var string Field to be filtered.
     */
    public $Name;

    /**
     * @var array Filter value of field.
     */
    public $Values;

    /**
     * @param string $Name Field to be filtered.
     * @param array $Values Filter value of field.
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
