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
namespace TencentCloud\Region\V20220627\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeZones request structure.
 *
 * @method string getProduct() Obtain Name of the product to be queried, such as cvm. for specific value, query the DescribeProducts api.
 * @method void setProduct(string $Product) Set Name of the product to be queried, such as cvm. for specific value, query the DescribeProducts api.
 * @method integer getScene() Obtain No input or 0 means no query [optional business allowlist], 1 means query [optional business allowlist]. if this parameter is set to 1, the allowlist will only be queried when no result is found in the business allowlist.
 * @method void setScene(integer $Scene) Set No input or 0 means no query [optional business allowlist], 1 means query [optional business allowlist]. if this parameter is set to 1, the allowlist will only be queried when no result is found in the business allowlist.
 */
class DescribeZonesRequest extends AbstractModel
{
    /**
     * @var string Name of the product to be queried, such as cvm. for specific value, query the DescribeProducts api.
     */
    public $Product;

    /**
     * @var integer No input or 0 means no query [optional business allowlist], 1 means query [optional business allowlist]. if this parameter is set to 1, the allowlist will only be queried when no result is found in the business allowlist.
     */
    public $Scene;

    /**
     * @param string $Product Name of the product to be queried, such as cvm. for specific value, query the DescribeProducts api.
     * @param integer $Scene No input or 0 means no query [optional business allowlist], 1 means query [optional business allowlist]. if this parameter is set to 1, the allowlist will only be queried when no result is found in the business allowlist.
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

        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }
    }
}
