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
 * ModifyAddressTemplateAttribute request structure.
 *
 * @method string getAddressTemplateId() Obtain IP address template instance ID, such as `ipm-mdunqeb6`.
 * @method void setAddressTemplateId(string $AddressTemplateId) Set IP address template instance ID, such as `ipm-mdunqeb6`.
 * @method string getAddressTemplateName() Obtain IP address template name.
 * @method void setAddressTemplateName(string $AddressTemplateName) Set IP address template name.
 * @method array getAddresses() Obtain Address information, including IP, CIDR and IP address range.
 * @method void setAddresses(array $Addresses) Set Address information, including IP, CIDR and IP address range.
 */
class ModifyAddressTemplateAttributeRequest extends AbstractModel
{
    /**
     * @var string IP address template instance ID, such as `ipm-mdunqeb6`.
     */
    public $AddressTemplateId;

    /**
     * @var string IP address template name.
     */
    public $AddressTemplateName;

    /**
     * @var array Address information, including IP, CIDR and IP address range.
     */
    public $Addresses;

    /**
     * @param string $AddressTemplateId IP address template instance ID, such as `ipm-mdunqeb6`.
     * @param string $AddressTemplateName IP address template name.
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
        if (array_key_exists("AddressTemplateId",$param) and $param["AddressTemplateId"] !== null) {
            $this->AddressTemplateId = $param["AddressTemplateId"];
        }

        if (array_key_exists("AddressTemplateName",$param) and $param["AddressTemplateName"] !== null) {
            $this->AddressTemplateName = $param["AddressTemplateName"];
        }

        if (array_key_exists("Addresses",$param) and $param["Addresses"] !== null) {
            $this->Addresses = $param["Addresses"];
        }
    }
}
