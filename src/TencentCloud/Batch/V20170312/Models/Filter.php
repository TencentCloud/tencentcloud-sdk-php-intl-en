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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getName() 获取Filters.
 * @method void setName(string $Name) 设置Filters.
 * @method array getValues() 获取Filter values.
 * @method void setValues(array $Values) 设置Filter values.
 */

/**
 *> Describes key-value pair filters used for conditional queries, such as filtering results by ID, name and state.
> * If there are multiple `Filter` parameters, the relationship among them will be logical `AND`.
> * If there are multiple `Values` for the same `Filter`, the relationship among the `Values` for the same `Filter` will be logical `OR`.
>
> Take the [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) API as an example. You can use the following filters to query the instances whose availability zone (`zone`) is Guangzhou Zone 1 ***and*** billing method (`instance-charge-type`) is prepaid ***or*** pay-as-you-go:
```
Filters.0.Name=zone
&Filters.0.Values.0=ap-guangzhou-1
&Filters.1.Name=instance-charge-type
&Filters.1.Values.0=PREPAID
&Filters.1.Values.1=POSTPAID_BY_HOUR
```
 */
class Filter extends AbstractModel
{
    /**
     * @var string Filters.
     */
    public $Name;

    /**
     * @var array Filter values.
     */
    public $Values;
    /**
     * @param string $Name Filters.
     * @param array $Values Filter values.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
