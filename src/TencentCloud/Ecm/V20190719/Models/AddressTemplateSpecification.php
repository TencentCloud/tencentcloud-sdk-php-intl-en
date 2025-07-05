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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP address template
 *
 * @method string getAddressId() Obtain IP address ID, such as `eipm-2uw6ujo6`.
 * @method void setAddressId(string $AddressId) Set IP address ID, such as `eipm-2uw6ujo6`.
 * @method string getAddressGroupId() Obtain IP address group ID, such as `eipmg-2uw6ujo6`.
 * @method void setAddressGroupId(string $AddressGroupId) Set IP address group ID, such as `eipmg-2uw6ujo6`.
 */
class AddressTemplateSpecification extends AbstractModel
{
    /**
     * @var string IP address ID, such as `eipm-2uw6ujo6`.
     */
    public $AddressId;

    /**
     * @var string IP address group ID, such as `eipmg-2uw6ujo6`.
     */
    public $AddressGroupId;

    /**
     * @param string $AddressId IP address ID, such as `eipm-2uw6ujo6`.
     * @param string $AddressGroupId IP address group ID, such as `eipmg-2uw6ujo6`.
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
        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }

        if (array_key_exists("AddressGroupId",$param) and $param["AddressGroupId"] !== null) {
            $this->AddressGroupId = $param["AddressGroupId"];
        }
    }
}
