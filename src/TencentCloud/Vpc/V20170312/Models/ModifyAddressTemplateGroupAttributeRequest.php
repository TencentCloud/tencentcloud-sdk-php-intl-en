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
 * ModifyAddressTemplateGroupAttribute request structure.
 *
 * @method string getAddressTemplateGroupId() Obtain IP address template group instance ID, such as `ipmg-2uw6ujo6`.
 * @method void setAddressTemplateGroupId(string $AddressTemplateGroupId) Set IP address template group instance ID, such as `ipmg-2uw6ujo6`.
 * @method string getAddressTemplateGroupName() Obtain IP address template group name.
 * @method void setAddressTemplateGroupName(string $AddressTemplateGroupName) Set IP address template group name.
 * @method array getAddressTemplateIds() Obtain IP address template instance ID, such as `ipm-mdunqeb6`.
 * @method void setAddressTemplateIds(array $AddressTemplateIds) Set IP address template instance ID, such as `ipm-mdunqeb6`.
 */
class ModifyAddressTemplateGroupAttributeRequest extends AbstractModel
{
    /**
     * @var string IP address template group instance ID, such as `ipmg-2uw6ujo6`.
     */
    public $AddressTemplateGroupId;

    /**
     * @var string IP address template group name.
     */
    public $AddressTemplateGroupName;

    /**
     * @var array IP address template instance ID, such as `ipm-mdunqeb6`.
     */
    public $AddressTemplateIds;

    /**
     * @param string $AddressTemplateGroupId IP address template group instance ID, such as `ipmg-2uw6ujo6`.
     * @param string $AddressTemplateGroupName IP address template group name.
     * @param array $AddressTemplateIds IP address template instance ID, such as `ipm-mdunqeb6`.
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
        if (array_key_exists("AddressTemplateGroupId",$param) and $param["AddressTemplateGroupId"] !== null) {
            $this->AddressTemplateGroupId = $param["AddressTemplateGroupId"];
        }

        if (array_key_exists("AddressTemplateGroupName",$param) and $param["AddressTemplateGroupName"] !== null) {
            $this->AddressTemplateGroupName = $param["AddressTemplateGroupName"];
        }

        if (array_key_exists("AddressTemplateIds",$param) and $param["AddressTemplateIds"] !== null) {
            $this->AddressTemplateIds = $param["AddressTemplateIds"];
        }
    }
}
