<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * >Key-Value pair filter for conditional filtering queries, such as filtering name
> * If there are multiple `Filter` parameters, the relationship among them is the logical `AND`.
> * If there are multiple `Values` for the same `Filter`, the relationship among the `Values` is the logical `OR`.
>
> Taking the `Filter` in the `DescribeInstances` API as an example, you can use the following filters to query the instance whose name (`instance-name`) is `test` ***and*** private IP (`private-ip-address`) is 10.10.10.10:
```
Filters.0.Name=instance-name
&Filters.0.Values.0=test
&Filters.1.Name=private-ip-address
&Filters.1.Values.0=10.10.10.10
```
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
