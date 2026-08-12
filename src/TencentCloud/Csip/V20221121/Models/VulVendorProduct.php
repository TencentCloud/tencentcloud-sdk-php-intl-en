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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Vulnerability Impact Manufacturer and Product
 *
 * @method string getVendor() Obtain <p>supplier</p>
 * @method void setVendor(string $Vendor) Set <p>supplier</p>
 * @method string getProduct() Obtain <p>Product name.</p>
 * @method void setProduct(string $Product) Set <p>Product name.</p>
 * @method array getVersionRange() Obtain <p>Affected version</p>
 * @method void setVersionRange(array $VersionRange) Set <p>Affected version</p>
 */
class VulVendorProduct extends AbstractModel
{
    /**
     * @var string <p>supplier</p>
     */
    public $Vendor;

    /**
     * @var string <p>Product name.</p>
     */
    public $Product;

    /**
     * @var array <p>Affected version</p>
     */
    public $VersionRange;

    /**
     * @param string $Vendor <p>supplier</p>
     * @param string $Product <p>Product name.</p>
     * @param array $VersionRange <p>Affected version</p>
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
        if (array_key_exists("Vendor",$param) and $param["Vendor"] !== null) {
            $this->Vendor = $param["Vendor"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("VersionRange",$param) and $param["VersionRange"] !== null) {
            $this->VersionRange = $param["VersionRange"];
        }
    }
}
