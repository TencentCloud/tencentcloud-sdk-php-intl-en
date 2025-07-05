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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddUserContact request structure.
 *
 * @method string getName() Obtain Contact name, which needs to be unique and can contain 2-60 characters, supporting uppercase and lowercase letters, numbers, and underline “_”. It cannot start with “_”.
 * @method void setName(string $Name) Set Contact name, which needs to be unique and can contain 2-60 characters, supporting uppercase and lowercase letters, numbers, and underline “_”. It cannot start with “_”.
 * @method string getContactInfo() Obtain Email address, which can contain uppercase and lowercase letters, numbers, and underline “_”, and cannot start with “_”.
 * @method void setContactInfo(string $ContactInfo) Set Email address, which can contain uppercase and lowercase letters, numbers, and underline “_”, and cannot start with “_”.
 * @method string getProduct() Obtain Service type, which is fixed to “mysql”.
 * @method void setProduct(string $Product) Set Service type, which is fixed to “mysql”.
 */
class AddUserContactRequest extends AbstractModel
{
    /**
     * @var string Contact name, which needs to be unique and can contain 2-60 characters, supporting uppercase and lowercase letters, numbers, and underline “_”. It cannot start with “_”.
     */
    public $Name;

    /**
     * @var string Email address, which can contain uppercase and lowercase letters, numbers, and underline “_”, and cannot start with “_”.
     */
    public $ContactInfo;

    /**
     * @var string Service type, which is fixed to “mysql”.
     */
    public $Product;

    /**
     * @param string $Name Contact name, which needs to be unique and can contain 2-60 characters, supporting uppercase and lowercase letters, numbers, and underline “_”. It cannot start with “_”.
     * @param string $ContactInfo Email address, which can contain uppercase and lowercase letters, numbers, and underline “_”, and cannot start with “_”.
     * @param string $Product Service type, which is fixed to “mysql”.
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

        if (array_key_exists("ContactInfo",$param) and $param["ContactInfo"] !== null) {
            $this->ContactInfo = $param["ContactInfo"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
