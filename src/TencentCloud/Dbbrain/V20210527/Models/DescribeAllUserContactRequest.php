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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAllUserContact request structure.
 *
 * @method string getProduct() Obtain Service type, which is fixed to `mysql`.
 * @method void setProduct(string $Product) Set Service type, which is fixed to `mysql`.
 * @method array getNames() Obtain Array of recipient names. Fuzzy search is supported.
 * @method void setNames(array $Names) Set Array of recipient names. Fuzzy search is supported.
 */
class DescribeAllUserContactRequest extends AbstractModel
{
    /**
     * @var string Service type, which is fixed to `mysql`.
     */
    public $Product;

    /**
     * @var array Array of recipient names. Fuzzy search is supported.
     */
    public $Names;

    /**
     * @param string $Product Service type, which is fixed to `mysql`.
     * @param array $Names Array of recipient names. Fuzzy search is supported.
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Names",$param) and $param["Names"] !== null) {
            $this->Names = $param["Names"];
        }
    }
}
