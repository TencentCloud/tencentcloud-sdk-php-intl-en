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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * > Key-value pair filters used for conditional queries, such as filtering results by ID, name, and state.
> * If there are multiple `Filter` parameters, they are evaluated using the logical `AND` operator.
> * If a `Filter` contains multiple `Values`, they are evaluated using the logical `OR` operator.
>
> Take [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) as an example. You can use the following filters to query the instances in availability zone (`zone`) Guangzhou Zone 1 ***and*** whose billing plan (`instance-charge-type`) is pay-as-you-go:
```
Filters.0.Name=zone
&Filters.0.Values.0=ap-guangzhou-1
&Filters.1.Name=instance-charge-type
&Filters.1.Values.0=POSTPAID_BY_HOUR
```
 *
 * @method string getName() Obtain Filters.
 * @method void setName(string $Name) Set Filters.
 * @method array getValues() Obtain Filter values.
 * @method void setValues(array $Values) Set Filter values.
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
