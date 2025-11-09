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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * When the origin IP range is updated, this field will be returned with the next version's effective origin IP range, including a comparison with the currently effective origin IP range.
 *
 * @method integer getVersion() Obtain Specifies the version number.
 * @method void setVersion(integer $Version) Set Specifies the version number.
 * @method Addresses getEntireAddresses() Obtain Describes the IP range details for origin servers.
 * @method void setEntireAddresses(Addresses $EntireAddresses) Set Describes the IP range details for origin servers.
 * @method Addresses getAddedAddresses() Obtain The latest origin IP range newly added compared with the origin IP range in MultiPathGatewayCurrentOrginACL.
 * @method void setAddedAddresses(Addresses $AddedAddresses) Set The latest origin IP range newly added compared with the origin IP range in MultiPathGatewayCurrentOrginACL.
 * @method Addresses getRemovedAddresses() Obtain Specifies the latest IP address range removed from the origin IP range in MultiPathGatewayCurrentOrginACL compared with the original.
 * @method void setRemovedAddresses(Addresses $RemovedAddresses) Set Specifies the latest IP address range removed from the origin IP range in MultiPathGatewayCurrentOrginACL compared with the original.
 * @method Addresses getNoChangeAddresses() Obtain The latest origin IP range unchanged compared with the origin IP range in MultiPathGatewayCurrentOrginACL.
 * @method void setNoChangeAddresses(Addresses $NoChangeAddresses) Set The latest origin IP range unchanged compared with the origin IP range in MultiPathGatewayCurrentOrginACL.
 */
class MultiPathGatewayNextOriginACL extends AbstractModel
{
    /**
     * @var integer Specifies the version number.
     */
    public $Version;

    /**
     * @var Addresses Describes the IP range details for origin servers.
     */
    public $EntireAddresses;

    /**
     * @var Addresses The latest origin IP range newly added compared with the origin IP range in MultiPathGatewayCurrentOrginACL.
     */
    public $AddedAddresses;

    /**
     * @var Addresses Specifies the latest IP address range removed from the origin IP range in MultiPathGatewayCurrentOrginACL compared with the original.
     */
    public $RemovedAddresses;

    /**
     * @var Addresses The latest origin IP range unchanged compared with the origin IP range in MultiPathGatewayCurrentOrginACL.
     */
    public $NoChangeAddresses;

    /**
     * @param integer $Version Specifies the version number.
     * @param Addresses $EntireAddresses Describes the IP range details for origin servers.
     * @param Addresses $AddedAddresses The latest origin IP range newly added compared with the origin IP range in MultiPathGatewayCurrentOrginACL.
     * @param Addresses $RemovedAddresses Specifies the latest IP address range removed from the origin IP range in MultiPathGatewayCurrentOrginACL compared with the original.
     * @param Addresses $NoChangeAddresses The latest origin IP range unchanged compared with the origin IP range in MultiPathGatewayCurrentOrginACL.
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("EntireAddresses",$param) and $param["EntireAddresses"] !== null) {
            $this->EntireAddresses = new Addresses();
            $this->EntireAddresses->deserialize($param["EntireAddresses"]);
        }

        if (array_key_exists("AddedAddresses",$param) and $param["AddedAddresses"] !== null) {
            $this->AddedAddresses = new Addresses();
            $this->AddedAddresses->deserialize($param["AddedAddresses"]);
        }

        if (array_key_exists("RemovedAddresses",$param) and $param["RemovedAddresses"] !== null) {
            $this->RemovedAddresses = new Addresses();
            $this->RemovedAddresses->deserialize($param["RemovedAddresses"]);
        }

        if (array_key_exists("NoChangeAddresses",$param) and $param["NoChangeAddresses"] !== null) {
            $this->NoChangeAddresses = new Addresses();
            $this->NoChangeAddresses->deserialize($param["NoChangeAddresses"]);
        }
    }
}
