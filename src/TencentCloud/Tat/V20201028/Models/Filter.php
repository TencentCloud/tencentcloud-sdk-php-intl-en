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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes the key-value pair filter, which is used for conditional filtering queries. for example, filter by ID, name, and status.
- if there are multiple `Filter`s, the logical relationship between them is `AND`.
- if there are multiple Values in the same Filter, the relationship between Values under the same Filter is logical OR.
> 
Take the `Filters` of the [DescribeCommands](https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1) api as an example. if we need to query commands with the `command-name` "print working directory" and the `command-type` "POWERSHELL" or "BAT", it can be implemented as follows:.
```
Filters.0.Name=command-name
&Filters.0.Values.0=Print working directory.

&Filters.1.Name=command-type
&Filters.1.Values.0=POWERSHELL
&Filters.1.Values.1=BAT
```
 *
 * @method string getName() Obtain Field to be filtered.
 * @method void setName(string $Name) Set Field to be filtered.
 * @method array getValues() Obtain Filter values of the field.
 * @method void setValues(array $Values) Set Filter values of the field.
 */
class Filter extends AbstractModel
{
    /**
     * @var string Field to be filtered.
     */
    public $Name;

    /**
     * @var array Filter values of the field.
     */
    public $Values;

    /**
     * @param string $Name Field to be filtered.
     * @param array $Values Filter values of the field.
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
