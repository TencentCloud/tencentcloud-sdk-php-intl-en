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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddUserContact request structure.
 *
 * @method string getName() Obtain Recipient name, which can contain up to 20 letters, digits, spaces, and symbols `!@#$%^&*()_+-=()` and cannot begin with an underscore.
 * @method void setName(string $Name) Set Recipient name, which can contain up to 20 letters, digits, spaces, and symbols `!@#$%^&*()_+-=()` and cannot begin with an underscore.
 * @method string getContactInfo() Obtain Email address, which can contain letters, digits, underscores, and the @ symbol, cannot begin with an underscore, and must be unique.
 * @method void setContactInfo(string $ContactInfo) Set Email address, which can contain letters, digits, underscores, and the @ symbol, cannot begin with an underscore, and must be unique.
 * @method string getProduct() Obtain Service type, which is fixed to `mysql`.
 * @method void setProduct(string $Product) Set Service type, which is fixed to `mysql`.
 */
class AddUserContactRequest extends AbstractModel
{
    /**
     * @var string Recipient name, which can contain up to 20 letters, digits, spaces, and symbols `!@#$%^&*()_+-=()` and cannot begin with an underscore.
     */
    public $Name;

    /**
     * @var string Email address, which can contain letters, digits, underscores, and the @ symbol, cannot begin with an underscore, and must be unique.
     */
    public $ContactInfo;

    /**
     * @var string Service type, which is fixed to `mysql`.
     */
    public $Product;

    /**
     * @param string $Name Recipient name, which can contain up to 20 letters, digits, spaces, and symbols `!@#$%^&*()_+-=()` and cannot begin with an underscore.
     * @param string $ContactInfo Email address, which can contain letters, digits, underscores, and the @ symbol, cannot begin with an underscore, and must be unique.
     * @param string $Product Service type, which is fixed to `mysql`.
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
