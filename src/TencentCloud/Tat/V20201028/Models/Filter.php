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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * > Key-value pair filters for conditional filtering queries, such as filtering ID, name, and status.
> * If there are multiple `Filter` parameters, the relationship among them is the logical `AND`.
> * If there are multiple `Values` for the same `Filter`, the relationship among the `Values` for the same `Filter` is the logical `OR`.
>
> Take the [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) API as an example. You can use the following filters to query the instances whose availability zone (`zone`) is Guangzhou 1 ***and*** billing method (`instance-charge-type`) is prepaid ***or*** pay-as-you-go:
```
Filters.0.Name=zone
&Filters.0.Values.0=ap-guangzhou-1
&Filters.1.Name=instance-charge-type
&Filters.1.Values.0=PREPAID
&Filters.1.Values.1=POSTPAID_BY_HOUR
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
