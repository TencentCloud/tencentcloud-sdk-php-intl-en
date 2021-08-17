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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePayType request structure.
 *
 * @method string getArea() Obtain Specifies a service region.
`mainland`: queries billing methods within Mainland China;
`overseas`: queries billing methods outside Mainland China.
Default value: `mainland`.
 * @method void setArea(string $Area) Set Specifies a service region.
`mainland`: queries billing methods within Mainland China;
`overseas`: queries billing methods outside Mainland China.
Default value: `mainland`.
 * @method string getProduct() Obtain Specifies the product to query, either `cdn` (default) or `ecdn`.
 * @method void setProduct(string $Product) Set Specifies the product to query, either `cdn` (default) or `ecdn`.
 */
class DescribePayTypeRequest extends AbstractModel
{
    /**
     * @var string Specifies a service region.
`mainland`: queries billing methods within Mainland China;
`overseas`: queries billing methods outside Mainland China.
Default value: `mainland`.
     */
    public $Area;

    /**
     * @var string Specifies the product to query, either `cdn` (default) or `ecdn`.
     */
    public $Product;

    /**
     * @param string $Area Specifies a service region.
`mainland`: queries billing methods within Mainland China;
`overseas`: queries billing methods outside Mainland China.
Default value: `mainland`.
     * @param string $Product Specifies the product to query, either `cdn` (default) or `ecdn`.
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
        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
