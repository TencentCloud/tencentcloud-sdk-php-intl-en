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
 * CreateAddressTemplate request structure.
 *
 * @method string getAddressTemplateName() Obtain IP address template name.
 * @method void setAddressTemplateName(string $AddressTemplateName) Set IP address template name.
 * @method array getAddresses() Obtain The address information can be presented by the IP, CIDR block or IP address range. Either Addresses or AddressesExtra is required.
 * @method void setAddresses(array $Addresses) Set The address information can be presented by the IP, CIDR block or IP address range. Either Addresses or AddressesExtra is required.
 * @method array getAddressesExtra() Obtain The address information can contain remarks and be presented by the IP, CIDR block or IP address range. Either Addresses or AddressesExtra is required.
 * @method void setAddressesExtra(array $AddressesExtra) Set The address information can contain remarks and be presented by the IP, CIDR block or IP address range. Either Addresses or AddressesExtra is required.
 */
class CreateAddressTemplateRequest extends AbstractModel
{
    /**
     * @var string IP address template name.
     */
    public $AddressTemplateName;

    /**
     * @var array The address information can be presented by the IP, CIDR block or IP address range. Either Addresses or AddressesExtra is required.
     */
    public $Addresses;

    /**
     * @var array The address information can contain remarks and be presented by the IP, CIDR block or IP address range. Either Addresses or AddressesExtra is required.
     */
    public $AddressesExtra;

    /**
     * @param string $AddressTemplateName IP address template name.
     * @param array $Addresses The address information can be presented by the IP, CIDR block or IP address range. Either Addresses or AddressesExtra is required.
     * @param array $AddressesExtra The address information can contain remarks and be presented by the IP, CIDR block or IP address range. Either Addresses or AddressesExtra is required.
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

        if (array_key_exists("AddressesExtra",$param) and $param["AddressesExtra"] !== null) {
            $this->AddressesExtra = [];
            foreach ($param["AddressesExtra"] as $key => $value){
                $obj = new AddressInfo();
                $obj->deserialize($value);
                array_push($this->AddressesExtra, $obj);
            }
        }
    }
}
