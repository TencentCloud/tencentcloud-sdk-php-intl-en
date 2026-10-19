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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource type.
 *
 * @method string getProduct() Obtain product
 * @method void setProduct(string $Product) Set product
 * @method string getProductName() Obtain Product name
 * @method void setProductName(string $ProductName) Set Product name
 * @method string getResourceType() Obtain Resource type.
 * @method void setResourceType(string $ResourceType) Set Resource type.
 * @method string getResourceTypeName() Obtain Resource type name
 * @method void setResourceTypeName(string $ResourceTypeName) Set Resource type name
 * @method string getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
 */
class UserConfigResource extends AbstractModel
{
    /**
     * @var string product
     */
    public $Product;

    /**
     * @var string Product name
     */
    public $ProductName;

    /**
     * @var string Resource type.
     */
    public $ResourceType;

    /**
     * @var string Resource type name
     */
    public $ResourceTypeName;

    /**
     * @var string Update time.
     */
    public $UpdateTime;

    /**
     * @param string $Product product
     * @param string $ProductName Product name
     * @param string $ResourceType Resource type.
     * @param string $ResourceTypeName Resource type name
     * @param string $UpdateTime Update time.
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

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceTypeName",$param) and $param["ResourceTypeName"] !== null) {
            $this->ResourceTypeName = $param["ResourceTypeName"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
