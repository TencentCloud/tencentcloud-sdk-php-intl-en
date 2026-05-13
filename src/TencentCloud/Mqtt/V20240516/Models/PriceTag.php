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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Price tag information
 *
 * @method string getName() Obtain Billing name refers to the category of billable items for specifications. The pricing name for specific specifications can be found in the returned results of the DescribeProductSKUList API.
 * @method void setName(string $Name) Set Billing name refers to the category of billable items for specifications. The pricing name for specific specifications can be found in the returned results of the DescribeProductSKUList API.
 * @method string getCategory() Obtain Billing category, pricing name subclass. For the billing category of specific specifications, see the returned results in DescribeProductSKUList API.
 * @method void setCategory(string $Category) Set Billing category, pricing name subclass. For the billing category of specific specifications, see the returned results in DescribeProductSKUList API.
 * @method string getCode() Obtain Billing item tag is a subproject of the billing Category under the pricing Name (Name), representing a specific charge. For the billing item tag of the specification, see 
DescribeProductSKUList API returned results.
 * @method void setCode(string $Code) Set Billing item tag is a subproject of the billing Category under the pricing Name (Name), representing a specific charge. For the billing item tag of the specification, see 
DescribeProductSKUList API returned results.
 * @method integer getStep() Obtain Billing step length indicates the billing quantity of the billing item tag (Code) under the billing category (Category) for the pricing name (Name). For the field value of specific specifications, refer to DescribeProductSKUList API.
 * @method void setStep(integer $Step) Set Billing step length indicates the billing quantity of the billing item tag (Code) under the billing category (Category) for the pricing name (Name). For the field value of specific specifications, refer to DescribeProductSKUList API.
 */
class PriceTag extends AbstractModel
{
    /**
     * @var string Billing name refers to the category of billable items for specifications. The pricing name for specific specifications can be found in the returned results of the DescribeProductSKUList API.
     */
    public $Name;

    /**
     * @var string Billing category, pricing name subclass. For the billing category of specific specifications, see the returned results in DescribeProductSKUList API.
     */
    public $Category;

    /**
     * @var string Billing item tag is a subproject of the billing Category under the pricing Name (Name), representing a specific charge. For the billing item tag of the specification, see 
DescribeProductSKUList API returned results.
     */
    public $Code;

    /**
     * @var integer Billing step length indicates the billing quantity of the billing item tag (Code) under the billing category (Category) for the pricing name (Name). For the field value of specific specifications, refer to DescribeProductSKUList API.
     */
    public $Step;

    /**
     * @param string $Name Billing name refers to the category of billable items for specifications. The pricing name for specific specifications can be found in the returned results of the DescribeProductSKUList API.
     * @param string $Category Billing category, pricing name subclass. For the billing category of specific specifications, see the returned results in DescribeProductSKUList API.
     * @param string $Code Billing item tag is a subproject of the billing Category under the pricing Name (Name), representing a specific charge. For the billing item tag of the specification, see 
DescribeProductSKUList API returned results.
     * @param integer $Step Billing step length indicates the billing quantity of the billing item tag (Code) under the billing category (Category) for the pricing name (Name). For the field value of specific specifications, refer to DescribeProductSKUList API.
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
