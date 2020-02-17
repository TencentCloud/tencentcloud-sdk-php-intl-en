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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getName() Obtain Field to be filtered.
 * @method void setName(string $Name) Set Field to be filtered.
 * @method array getValues() Obtain Filter value of the field.
 * @method void setValues(array $Values) Set Filter value of the field.
 */

/**
 *>Key-value pair filters for conditional filtering queries, such as filtering ID, name, status, etc.
> * If there are multiple `Filter`, the relationship among them is logical `AND`.
> * If there are multiple `Values` in the same `Filter`, the relationship among the `Values` in the same `Filter` is logical `OR`.
>
> Take the `Filter` in the API [DescribeInstances](https://cloud.tencent.com/document/api/213/9388) as an example. We can use the following filters to query the instance that resides in the availability zone (`zone`) of Guangzhou Zone 1 ***and*** is billed (`instance-charge-type`) on a prepaid basis ***or*** on a pay-as-you-go basis:
```
Filters.0.Name=zone
&Filters.0.Values.1=ap-guangzhou-1
&Filters.1.Name=instance-charge-type
&Filters.1.Values.1=PREPAID
&Filters.1.Values.2=POSTPAID_BY_HOUR
```
 */
class Filter extends AbstractModel
{
    /**
     * @var string Field to be filtered.
     */
    public $Name;

    /**
     * @var array Filter value of the field.
     */
    public $Values;
    /**
     * @param string $Name Field to be filtered.
     * @param array $Values Filter value of the field.
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
