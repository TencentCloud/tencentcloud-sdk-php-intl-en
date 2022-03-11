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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IPv6 address information.
 *
 * @method string getAddress() Obtain IPv6 address, such as `3402:4e00:20:100:0:8cd9:2a67:71f3`
 * @method void setAddress(string $Address) Set IPv6 address, such as `3402:4e00:20:100:0:8cd9:2a67:71f3`
 * @method boolean getPrimary() Obtain Whether it is the primary IP.
 * @method void setPrimary(boolean $Primary) Set Whether it is the primary IP.
 * @method string getAddressId() Obtain EIP instance ID, such as `eip-hxlqja90`.
 * @method void setAddressId(string $AddressId) Set EIP instance ID, such as `eip-hxlqja90`.
 * @method string getDescription() Obtain Description.
 * @method void setDescription(string $Description) Set Description.
 * @method boolean getIsWanIpBlocked() Obtain Whether the public IP is blocked.
 * @method void setIsWanIpBlocked(boolean $IsWanIpBlocked) Set Whether the public IP is blocked.
 * @method string getState() Obtain IPv6 address status:
PENDING: generating
MIGRATING: migrating
DELETING: deleting
AVAILABLE: available
 * @method void setState(string $State) Set IPv6 address status:
PENDING: generating
MIGRATING: migrating
DELETING: deleting
AVAILABLE: available
 */
class Ipv6Address extends AbstractModel
{
    /**
     * @var string IPv6 address, such as `3402:4e00:20:100:0:8cd9:2a67:71f3`
     */
    public $Address;

    /**
     * @var boolean Whether it is the primary IP.
     */
    public $Primary;

    /**
     * @var string EIP instance ID, such as `eip-hxlqja90`.
     */
    public $AddressId;

    /**
     * @var string Description.
     */
    public $Description;

    /**
     * @var boolean Whether the public IP is blocked.
     */
    public $IsWanIpBlocked;

    /**
     * @var string IPv6 address status:
PENDING: generating
MIGRATING: migrating
DELETING: deleting
AVAILABLE: available
     */
    public $State;

    /**
     * @param string $Address IPv6 address, such as `3402:4e00:20:100:0:8cd9:2a67:71f3`
     * @param boolean $Primary Whether it is the primary IP.
     * @param string $AddressId EIP instance ID, such as `eip-hxlqja90`.
     * @param string $Description Description.
     * @param boolean $IsWanIpBlocked Whether the public IP is blocked.
     * @param string $State IPv6 address status:
PENDING: generating
MIGRATING: migrating
DELETING: deleting
AVAILABLE: available
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
        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Primary",$param) and $param["Primary"] !== null) {
            $this->Primary = $param["Primary"];
        }

        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IsWanIpBlocked",$param) and $param["IsWanIpBlocked"] !== null) {
            $this->IsWanIpBlocked = $param["IsWanIpBlocked"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
