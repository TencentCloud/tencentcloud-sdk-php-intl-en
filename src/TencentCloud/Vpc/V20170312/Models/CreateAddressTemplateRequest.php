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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getAddressTemplateName() Obtain The name of the IP address template
 * @method void setAddressTemplateName(string $AddressTemplateName) Set The name of the IP address template
 * @method array getAddresses() Obtain Address information, including IP, CIDR and IP address range.
 * @method void setAddresses(array $Addresses) Set Address information, including IP, CIDR and IP address range.
 */

/**
 *CreateAddressTemplate request structure.
 */
class CreateAddressTemplateRequest extends AbstractModel
{
    /**
     * @var string The name of the IP address template
     */
    public $AddressTemplateName;

    /**
     * @var array Address information, including IP, CIDR and IP address range.
     */
    public $Addresses;
    /**
     * @param string $AddressTemplateName The name of the IP address template
     * @param array $Addresses Address information, including IP, CIDR and IP address range.
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
        if (array_key_exists("AddressTemplateName",$param) and $param["AddressTemplateName"] !== null) {
            $this->AddressTemplateName = $param["AddressTemplateName"];
        }

        if (array_key_exists("Addresses",$param) and $param["Addresses"] !== null) {
            $this->Addresses = $param["Addresses"];
        }
    }
}
