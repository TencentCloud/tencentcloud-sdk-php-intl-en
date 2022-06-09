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
 * Product details
 *
 * @method string getProductId() Obtain Product ID
 * @method void setProductId(string $ProductId) Set Product ID
 * @method string getProductName() Obtain Product name
 * @method void setProductName(string $ProductName) Set Product name
 * @method ProductMetadata getProductMetadata() Obtain Product metadata
 * @method void setProductMetadata(ProductMetadata $ProductMetadata) Set Product metadata
 * @method ProductProperties getProductProperties() Obtain Product properties
 * @method void setProductProperties(ProductProperties $ProductProperties) Set Product properties
 */
class ProductInfo extends AbstractModel
{
    /**
     * @var string Product ID
     */
    public $ProductId;

    /**
     * @var string Product name
     */
    public $ProductName;

    /**
     * @var ProductMetadata Product metadata
     */
    public $ProductMetadata;

    /**
     * @var ProductProperties Product properties
     */
    public $ProductProperties;

    /**
     * @param string $ProductId Product ID
     * @param string $ProductName Product name
     * @param ProductMetadata $ProductMetadata Product metadata
     * @param ProductProperties $ProductProperties Product properties
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ProductMetadata",$param) and $param["ProductMetadata"] !== null) {
            $this->ProductMetadata = new ProductMetadata();
            $this->ProductMetadata->deserialize($param["ProductMetadata"]);
        }

        if (array_key_exists("ProductProperties",$param) and $param["ProductProperties"] !== null) {
            $this->ProductProperties = new ProductProperties();
            $this->ProductProperties->deserialize($param["ProductProperties"]);
        }
    }
}
