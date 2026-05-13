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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Price tag information. A complete price tag includes the billing category and the billing item.
 *
 * @method string getName() Obtain Pricing name. Enumeration values are as follows:

-tps: TPS base price
-stepTps: TPS step length
 * @method void setName(string $Name) Set Pricing name. Enumeration values are as follows:

-tps: TPS base price
-stepTps: TPS step length
 * @method string getCategory() Obtain Billing category
 * @method void setCategory(string $Category) Set Billing category
 * @method string getCode() Obtain Tag of the billable item.
 * @method void setCode(string $Code) Set Tag of the billable item.
 * @method integer getStep() Obtain Step size corresponding to the billing item.
 * @method void setStep(integer $Step) Set Step size corresponding to the billing item.
 */
class PriceTag extends AbstractModel
{
    /**
     * @var string Pricing name. Enumeration values are as follows:

-tps: TPS base price
-stepTps: TPS step length
     */
    public $Name;

    /**
     * @var string Billing category
     */
    public $Category;

    /**
     * @var string Tag of the billable item.
     */
    public $Code;

    /**
     * @var integer Step size corresponding to the billing item.
     */
    public $Step;

    /**
     * @param string $Name Pricing name. Enumeration values are as follows:

-tps: TPS base price
-stepTps: TPS step length
     * @param string $Category Billing category
     * @param string $Code Tag of the billable item.
     * @param integer $Step Step size corresponding to the billing item.
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

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Step",$param) and $param["Step"] !== null) {
            $this->Step = $param["Step"];
        }
    }
}
