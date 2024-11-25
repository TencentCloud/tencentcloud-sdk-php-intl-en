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
 * Private IP information
 *
 * @method string getPrivateIpAddress() Obtain Private IP address.
 * @method void setPrivateIpAddress(string $PrivateIpAddress) Set Private IP address.
 * @method boolean getPrimary() Obtain Whether it is a primary IP.
 * @method void setPrimary(boolean $Primary) Set Whether it is a primary IP.
 * @method string getPublicIpAddress() Obtain Public IP address.
 * @method void setPublicIpAddress(string $PublicIpAddress) Set Public IP address.
 * @method string getAddressId() Obtain EIP instance ID, such as `eip-11112222`.
 * @method void setAddressId(string $AddressId) Set EIP instance ID, such as `eip-11112222`.
 * @method string getDescription() Obtain Private IP description.
 * @method void setDescription(string $Description) Set Private IP description.
 * @method boolean getIsWanIpBlocked() Obtain Whether the public IP is blocked.
 * @method void setIsWanIpBlocked(boolean $IsWanIpBlocked) Set Whether the public IP is blocked.
 * @method string getState() Obtain IP status:
PENDING: Creating
MIGRATING: Migrating
DELETING: Deleting
AVAILABLE: Available
 * @method void setState(string $State) Set IP status:
PENDING: Creating
MIGRATING: Migrating
DELETING: Deleting
AVAILABLE: Available
 * @method string getQosLevel() Obtain IP service level. Values: PT` (Gold), `AU` (Silver), `AG `(Bronze) and DEFAULT` (Default).
 * @method void setQosLevel(string $QosLevel) Set IP service level. Values: PT` (Gold), `AU` (Silver), `AG `(Bronze) and DEFAULT` (Default).
 */
class PrivateIpAddressSpecification extends AbstractModel
{
    /**
     * @var string Private IP address.
     */
    public $PrivateIpAddress;

    /**
     * @var boolean Whether it is a primary IP.
     */
    public $Primary;

    /**
     * @var string Public IP address.
     */
    public $PublicIpAddress;

    /**
     * @var string EIP instance ID, such as `eip-11112222`.
     */
    public $AddressId;

    /**
     * @var string Private IP description.
     */
    public $Description;

    /**
     * @var boolean Whether the public IP is blocked.
     */
    public $IsWanIpBlocked;

    /**
     * @var string IP status:
PENDING: Creating
MIGRATING: Migrating
DELETING: Deleting
AVAILABLE: Available
     */
    public $State;

    /**
     * @var string IP service level. Values: PT` (Gold), `AU` (Silver), `AG `(Bronze) and DEFAULT` (Default).
     */
    public $QosLevel;

    /**
     * @param string $PrivateIpAddress Private IP address.
     * @param boolean $Primary Whether it is a primary IP.
     * @param string $PublicIpAddress Public IP address.
     * @param string $AddressId EIP instance ID, such as `eip-11112222`.
     * @param string $Description Private IP description.
     * @param boolean $IsWanIpBlocked Whether the public IP is blocked.
     * @param string $State IP status:
PENDING: Creating
MIGRATING: Migrating
DELETING: Deleting
AVAILABLE: Available
     * @param string $QosLevel IP service level. Values: PT` (Gold), `AU` (Silver), `AG `(Bronze) and DEFAULT` (Default).
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
        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            $this->PrivateIpAddress = $param["PrivateIpAddress"];
        }

        if (array_key_exists("Primary",$param) and $param["Primary"] !== null) {
            $this->Primary = $param["Primary"];
        }

        if (array_key_exists("PublicIpAddress",$param) and $param["PublicIpAddress"] !== null) {
            $this->PublicIpAddress = $param["PublicIpAddress"];
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

        if (array_key_exists("QosLevel",$param) and $param["QosLevel"] !== null) {
            $this->QosLevel = $param["QosLevel"];
        }
    }
}
