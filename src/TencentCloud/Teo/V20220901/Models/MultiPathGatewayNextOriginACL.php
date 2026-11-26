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
 * When the origin-pull IP range is updated, this field will return the origin-pull IP range that will take effect in the next version, including a comparison with the currently effective origin-pull IP range.
 *
 * @method integer getVersion() Obtain Version.
 * @method void setVersion(integer $Version) Set Version.
 * @method Addresses getEntireAddresses() Obtain Origin-pull IP range details.
 * @method void setEntireAddresses(Addresses $EntireAddresses) Set Origin-pull IP range details.
 * @method Addresses getAddedAddresses() Obtain Latest origin-pull IP range compared with the newly-added part of the origin-pull IP range in MultiPathGatewayCurrentOrginACL.
 * @method void setAddedAddresses(Addresses $AddedAddresses) Set Latest origin-pull IP range compared with the newly-added part of the origin-pull IP range in MultiPathGatewayCurrentOrginACL.
 * @method Addresses getRemovedAddresses() Obtain Latest origin IP range compared with the part deleted from the origin IP range in MultiPathGatewayCurrentOrginACL.
 * @method void setRemovedAddresses(Addresses $RemovedAddresses) Set Latest origin IP range compared with the part deleted from the origin IP range in MultiPathGatewayCurrentOrginACL.
 * @method Addresses getNoChangeAddresses() Obtain The part of the latest origin-pull IP range that is unchanged compared with the origin-pull IP range in MultiPathGatewayCurrentOrginACL.
 * @method void setNoChangeAddresses(Addresses $NoChangeAddresses) Set The part of the latest origin-pull IP range that is unchanged compared with the origin-pull IP range in MultiPathGatewayCurrentOrginACL.
 */
class MultiPathGatewayNextOriginACL extends AbstractModel
{
    /**
     * @var integer Version.
     */
    public $Version;

    /**
     * @var Addresses Origin-pull IP range details.
     */
    public $EntireAddresses;

    /**
     * @var Addresses Latest origin-pull IP range compared with the newly-added part of the origin-pull IP range in MultiPathGatewayCurrentOrginACL.
     */
    public $AddedAddresses;

    /**
     * @var Addresses Latest origin IP range compared with the part deleted from the origin IP range in MultiPathGatewayCurrentOrginACL.
     */
    public $RemovedAddresses;

    /**
     * @var Addresses The part of the latest origin-pull IP range that is unchanged compared with the origin-pull IP range in MultiPathGatewayCurrentOrginACL.
     */
    public $NoChangeAddresses;

    /**
     * @param integer $Version Version.
     * @param Addresses $EntireAddresses Origin-pull IP range details.
     * @param Addresses $AddedAddresses Latest origin-pull IP range compared with the newly-added part of the origin-pull IP range in MultiPathGatewayCurrentOrginACL.
     * @param Addresses $RemovedAddresses Latest origin IP range compared with the part deleted from the origin IP range in MultiPathGatewayCurrentOrginACL.
     * @param Addresses $NoChangeAddresses The part of the latest origin-pull IP range that is unchanged compared with the origin-pull IP range in MultiPathGatewayCurrentOrginACL.
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
