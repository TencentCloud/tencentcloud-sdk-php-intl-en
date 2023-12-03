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
 * @method string getArea() Obtain Specifies the service area.
`mainland`: Queries billing methods available in the Chinese mainland.
`overseas`: Queries billing methods available in the regions outside the Chinese mainland.
`Global`: Queries billing methods available across the globe.
If it is not specified, it defaults to `mainland`.
 * @method void setArea(string $Area) Set Specifies the service area.
`mainland`: Queries billing methods available in the Chinese mainland.
`overseas`: Queries billing methods available in the regions outside the Chinese mainland.
`Global`: Queries billing methods available across the globe.
If it is not specified, it defaults to `mainland`.
 * @method string getProduct() Obtain Specifies the product to query, either `cdn` (default) or `ecdn`.
 * @method void setProduct(string $Product) Set Specifies the product to query, either `cdn` (default) or `ecdn`.
 * @method string getType() Obtain Specifies resources.
`flux`: Traffic package
`https`: HTTPS requests
It defaults to `flux` if not specified. 
 * @method void setType(string $Type) Set Specifies resources.
`flux`: Traffic package
`https`: HTTPS requests
It defaults to `flux` if not specified. 
 */
class DescribePayTypeRequest extends AbstractModel
{
    /**
     * @var string Specifies the service area.
`mainland`: Queries billing methods available in the Chinese mainland.
`overseas`: Queries billing methods available in the regions outside the Chinese mainland.
`Global`: Queries billing methods available across the globe.
If it is not specified, it defaults to `mainland`.
     */
    public $Area;

    /**
     * @var string Specifies the product to query, either `cdn` (default) or `ecdn`.
     */
    public $Product;

    /**
     * @var string Specifies resources.
`flux`: Traffic package
`https`: HTTPS requests
It defaults to `flux` if not specified. 
     */
    public $Type;

    /**
     * @param string $Area Specifies the service area.
`mainland`: Queries billing methods available in the Chinese mainland.
`overseas`: Queries billing methods available in the regions outside the Chinese mainland.
`Global`: Queries billing methods available across the globe.
If it is not specified, it defaults to `mainland`.
     * @param string $Product Specifies the product to query, either `cdn` (default) or `ecdn`.
     * @param string $Type Specifies resources.
`flux`: Traffic package
`https`: HTTPS requests
It defaults to `flux` if not specified. 
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
