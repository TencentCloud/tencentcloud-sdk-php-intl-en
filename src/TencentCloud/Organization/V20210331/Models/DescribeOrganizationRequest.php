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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOrganization request structure.
 *
 * @method string getLang() Obtain Valid values: `en` (Tencent Cloud International); `zh` (Tencent Cloud).
 * @method void setLang(string $Lang) Set Valid values: `en` (Tencent Cloud International); `zh` (Tencent Cloud).
 * @method string getProduct() Obtain Abbreviation of the trusted service, which is required during querying the trusted service admin.
 * @method void setProduct(string $Product) Set Abbreviation of the trusted service, which is required during querying the trusted service admin.
 */
class DescribeOrganizationRequest extends AbstractModel
{
    /**
     * @var string Valid values: `en` (Tencent Cloud International); `zh` (Tencent Cloud).
     */
    public $Lang;

    /**
     * @var string Abbreviation of the trusted service, which is required during querying the trusted service admin.
     */
    public $Product;

    /**
     * @param string $Lang Valid values: `en` (Tencent Cloud International); `zh` (Tencent Cloud).
     * @param string $Product Abbreviation of the trusted service, which is required during querying the trusted service admin.
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
        if (array_key_exists("Lang",$param) and $param["Lang"] !== null) {
            $this->Lang = $param["Lang"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
