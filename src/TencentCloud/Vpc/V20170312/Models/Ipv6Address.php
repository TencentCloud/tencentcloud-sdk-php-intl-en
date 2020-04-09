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
 * `IPv6` address information.
 *
 * @method string getAddress() Obtain `IPv6` address, such as `3402:4e00:20:100:0:8cd9:2a67:71f3`
 * @method void setAddress(string $Address) Set `IPv6` address, such as `3402:4e00:20:100:0:8cd9:2a67:71f3`
 * @method boolean getPrimary() Obtain Whether it is a primary `IP`.
 * @method void setPrimary(boolean $Primary) Set Whether it is a primary `IP`.
 * @method string getAddressId() Obtain The `ID` of the `EIP` instance, such as `eip-hxlqja90`.
 * @method void setAddressId(string $AddressId) Set The `ID` of the `EIP` instance, such as `eip-hxlqja90`.
 * @method string getDescription() Obtain Message description
 * @method void setDescription(string $Description) Set Message description
 * @method boolean getIsWanIpBlocked() Obtain Whether the public IP is blocked.
 * @method void setIsWanIpBlocked(boolean $IsWanIpBlocked) Set Whether the public IP is blocked.
 * @method string getState() Obtain `IPv6` address status:
<li>`PENDING`: Creating</li>
<li>`MIGRATING`: Migrating</li>
<li>`DELETING`: Deleting</li>
<li>`AVAILABLE`: Available</li>
 * @method void setState(string $State) Set `IPv6` address status:
<li>`PENDING`: Creating</li>
<li>`MIGRATING`: Migrating</li>
<li>`DELETING`: Deleting</li>
<li>`AVAILABLE`: Available</li>
 */
class Ipv6Address extends AbstractModel
{
    /**
     * @var string `IPv6` address, such as `3402:4e00:20:100:0:8cd9:2a67:71f3`
     */
    public $Address;

    /**
     * @var boolean Whether it is a primary `IP`.
     */
    public $Primary;

    /**
     * @var string The `ID` of the `EIP` instance, such as `eip-hxlqja90`.
     */
    public $AddressId;

    /**
     * @var string Message description
     */
    public $Description;

    /**
     * @var boolean Whether the public IP is blocked.
     */
    public $IsWanIpBlocked;

    /**
     * @var string `IPv6` address status:
<li>`PENDING`: Creating</li>
<li>`MIGRATING`: Migrating</li>
<li>`DELETING`: Deleting</li>
<li>`AVAILABLE`: Available</li>
     */
    public $State;

    /**
     * @param string $Address `IPv6` address, such as `3402:4e00:20:100:0:8cd9:2a67:71f3`
     * @param boolean $Primary Whether it is a primary `IP`.
     * @param string $AddressId The `ID` of the `EIP` instance, such as `eip-hxlqja90`.
     * @param string $Description Message description
     * @param boolean $IsWanIpBlocked Whether the public IP is blocked.
     * @param string $State `IPv6` address status:
<li>`PENDING`: Creating</li>
<li>`MIGRATING`: Migrating</li>
<li>`DELETING`: Deleting</li>
<li>`AVAILABLE`: Available</li>
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
