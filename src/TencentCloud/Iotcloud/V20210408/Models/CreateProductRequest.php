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
namespace TencentCloud\Iotcloud\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProduct request structure.
 *
 * @method string getProductName() Obtain Product name, which cannot be same as that of an existing product. Naming rule: [a-zA-Z0-9:_-]{1,32}.
 * @method void setProductName(string $ProductName) Set Product name, which cannot be same as that of an existing product. Naming rule: [a-zA-Z0-9:_-]{1,32}.
 * @method ProductProperties getProductProperties() Obtain Product properties
 * @method void setProductProperties(ProductProperties $ProductProperties) Set Product properties
 * @method string getSkey() Obtain Skey, which is required to create a CLAA product.
 * @method void setSkey(string $Skey) Set Skey, which is required to create a CLAA product.
 */
class CreateProductRequest extends AbstractModel
{
    /**
     * @var string Product name, which cannot be same as that of an existing product. Naming rule: [a-zA-Z0-9:_-]{1,32}.
     */
    public $ProductName;

    /**
     * @var ProductProperties Product properties
     */
    public $ProductProperties;

    /**
     * @var string Skey, which is required to create a CLAA product.
     */
    public $Skey;

    /**
     * @param string $ProductName Product name, which cannot be same as that of an existing product. Naming rule: [a-zA-Z0-9:_-]{1,32}.
     * @param ProductProperties $ProductProperties Product properties
     * @param string $Skey Skey, which is required to create a CLAA product.
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
        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ProductProperties",$param) and $param["ProductProperties"] !== null) {
            $this->ProductProperties = new ProductProperties();
            $this->ProductProperties->deserialize($param["ProductProperties"]);
        }

        if (array_key_exists("Skey",$param) and $param["Skey"] !== null) {
            $this->Skey = $param["Skey"];
        }
    }
}
