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
 * NS access type site parameter details.
 *
 * @method string getCnameSpeedUp() Obtain Whether CNAME acceleration is enabled. Valid values:
<li> enabled: Enable;</li>
<li> disabled: Disable.</li>
 * @method void setCnameSpeedUp(string $CnameSpeedUp) Set Whether CNAME acceleration is enabled. Valid values:
<li> enabled: Enable;</li>
<li> disabled: Disable.</li>
 * @method integer getIsFake() Obtain Existence of a site with the same name. Valid values:
<li> 0: No site with the same name exists;</li>
<li> 1: A site with the same name already exists.</li>
 * @method void setIsFake(integer $IsFake) Set Existence of a site with the same name. Valid values:
<li> 0: No site with the same name exists;</li>
<li> 1: A site with the same name already exists.</li>
 * @method OwnershipVerification getOwnershipVerification() Obtain Ownership verification information. For sites with NS access type, switching the current NS server to the NS server designated by Tencent Cloud EdgeOne is deemed as passing ownership verification. For details, see [Site/Domain Ownership Verification](https://www.tencentcloud.com/document/product/1552/70789?from_cn_redirect=1).
 * @method void setOwnershipVerification(OwnershipVerification $OwnershipVerification) Set Ownership verification information. For sites with NS access type, switching the current NS server to the NS server designated by Tencent Cloud EdgeOne is deemed as passing ownership verification. For details, see [Site/Domain Ownership Verification](https://www.tencentcloud.com/document/product/1552/70789?from_cn_redirect=1).
 * @method array getOriginalNameServers() Obtain List of NS servers currently in use by the site detected by EdgeOne.
 * @method void setOriginalNameServers(array $OriginalNameServers) Set List of NS servers currently in use by the site detected by EdgeOne.
 * @method array getNameServers() Obtain List of NS servers assigned by Tencent Cloud EdgeOne. Point the NS server of the current site to this address for the site to take effect.
 * @method void setNameServers(array $NameServers) Set List of NS servers assigned by Tencent Cloud EdgeOne. Point the NS server of the current site to this address for the site to take effect.
 * @method VanityNameServers getVanityNameServers() Obtain User-customized NS server domain info. If the custom NS service is enabled, the NS need to be pointed to this address at the domain name registered vendor.
 * @method void setVanityNameServers(VanityNameServers $VanityNameServers) Set User-customized NS server domain info. If the custom NS service is enabled, the NS need to be pointed to this address at the domain name registered vendor.
 * @method array getVanityNameServersIps() Obtain IP address information corresponding to the user-customized NS server.
 * @method void setVanityNameServersIps(array $VanityNameServersIps) Set IP address information corresponding to the user-customized NS server.
 */
class NSDetail extends AbstractModel
{
    /**
     * @var string Whether CNAME acceleration is enabled. Valid values:
<li> enabled: Enable;</li>
<li> disabled: Disable.</li>
     */
    public $CnameSpeedUp;

    /**
     * @var integer Existence of a site with the same name. Valid values:
<li> 0: No site with the same name exists;</li>
<li> 1: A site with the same name already exists.</li>
     */
    public $IsFake;

    /**
     * @var OwnershipVerification Ownership verification information. For sites with NS access type, switching the current NS server to the NS server designated by Tencent Cloud EdgeOne is deemed as passing ownership verification. For details, see [Site/Domain Ownership Verification](https://www.tencentcloud.com/document/product/1552/70789?from_cn_redirect=1).
     */
    public $OwnershipVerification;

    /**
     * @var array List of NS servers currently in use by the site detected by EdgeOne.
     */
    public $OriginalNameServers;

    /**
     * @var array List of NS servers assigned by Tencent Cloud EdgeOne. Point the NS server of the current site to this address for the site to take effect.
     */
    public $NameServers;

    /**
     * @var VanityNameServers User-customized NS server domain info. If the custom NS service is enabled, the NS need to be pointed to this address at the domain name registered vendor.
     */
    public $VanityNameServers;

    /**
     * @var array IP address information corresponding to the user-customized NS server.
     */
    public $VanityNameServersIps;

    /**
     * @param string $CnameSpeedUp Whether CNAME acceleration is enabled. Valid values:
<li> enabled: Enable;</li>
<li> disabled: Disable.</li>
     * @param integer $IsFake Existence of a site with the same name. Valid values:
<li> 0: No site with the same name exists;</li>
<li> 1: A site with the same name already exists.</li>
     * @param OwnershipVerification $OwnershipVerification Ownership verification information. For sites with NS access type, switching the current NS server to the NS server designated by Tencent Cloud EdgeOne is deemed as passing ownership verification. For details, see [Site/Domain Ownership Verification](https://www.tencentcloud.com/document/product/1552/70789?from_cn_redirect=1).
     * @param array $OriginalNameServers List of NS servers currently in use by the site detected by EdgeOne.
     * @param array $NameServers List of NS servers assigned by Tencent Cloud EdgeOne. Point the NS server of the current site to this address for the site to take effect.
     * @param VanityNameServers $VanityNameServers User-customized NS server domain info. If the custom NS service is enabled, the NS need to be pointed to this address at the domain name registered vendor.
     * @param array $VanityNameServersIps IP address information corresponding to the user-customized NS server.
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
        if (array_key_exists("CnameSpeedUp",$param) and $param["CnameSpeedUp"] !== null) {
            $this->CnameSpeedUp = $param["CnameSpeedUp"];
        }

        if (array_key_exists("IsFake",$param) and $param["IsFake"] !== null) {
            $this->IsFake = $param["IsFake"];
        }

        if (array_key_exists("OwnershipVerification",$param) and $param["OwnershipVerification"] !== null) {
            $this->OwnershipVerification = new OwnershipVerification();
            $this->OwnershipVerification->deserialize($param["OwnershipVerification"]);
        }

        if (array_key_exists("OriginalNameServers",$param) and $param["OriginalNameServers"] !== null) {
            $this->OriginalNameServers = $param["OriginalNameServers"];
        }

        if (array_key_exists("NameServers",$param) and $param["NameServers"] !== null) {
            $this->NameServers = $param["NameServers"];
        }

        if (array_key_exists("VanityNameServers",$param) and $param["VanityNameServers"] !== null) {
            $this->VanityNameServers = new VanityNameServers();
            $this->VanityNameServers->deserialize($param["VanityNameServers"]);
        }

        if (array_key_exists("VanityNameServersIps",$param) and $param["VanityNameServersIps"] !== null) {
            $this->VanityNameServersIps = [];
            foreach ($param["VanityNameServersIps"] as $key => $value){
                $obj = new VanityNameServersIps();
                $obj->deserialize($value);
                array_push($this->VanityNameServersIps, $obj);
            }
        }
    }
}
