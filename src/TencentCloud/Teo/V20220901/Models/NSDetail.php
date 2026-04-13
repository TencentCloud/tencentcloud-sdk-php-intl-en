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
 * NS access type site parameter description.
 *
 * @method string getCnameSpeedUp() Obtain Specifies whether CNAME acceleration is enabled. valid values:.
<Li>Enabled: specifies whether the feature is enabled.</li>.
<li>disabled: specifies that the feature is turned off.</li>.
 * @method void setCnameSpeedUp(string $CnameSpeedUp) Set Specifies whether CNAME acceleration is enabled. valid values:.
<Li>Enabled: specifies whether the feature is enabled.</li>.
<li>disabled: specifies that the feature is turned off.</li>.
 * @method integer getIsFake() Obtain Existence of a site with the same name. valid values:.
<Li>0: no site with the same name exists.</li>.
<Li>Specifies the name already exists.</li>.
 * @method void setIsFake(integer $IsFake) Set Existence of a site with the same name. valid values:.
<Li>0: no site with the same name exists.</li>.
<Li>Specifies the name already exists.</li>.
 * @method OwnershipVerification getOwnershipVerification() Obtain Ownership verification information. for sites with NS access type, switching the current NS server to the designated NS server of tencent cloud EdgeOne is deemed as passing the ownership verification. for details, refer to [site/domain ownership verification](https://www.tencentcloud.comom/document/product/1552/70789?from_cn_redirect=1).
 * @method void setOwnershipVerification(OwnershipVerification $OwnershipVerification) Set Ownership verification information. for sites with NS access type, switching the current NS server to the designated NS server of tencent cloud EdgeOne is deemed as passing the ownership verification. for details, refer to [site/domain ownership verification](https://www.tencentcloud.comom/document/product/1552/70789?from_cn_redirect=1).
 * @method array getOriginalNameServers() Obtain Lists the NS servers currently in use by the selected site detected by EdgeOne.
 * @method void setOriginalNameServers(array $OriginalNameServers) Set Lists the NS servers currently in use by the selected site detected by EdgeOne.
 * @method array getNameServers() Obtain Lists the NS servers allocated by tencent cloud EdgeOne. requires pointing the current site's NS servers to this address for the changes to take effect.
 * @method void setNameServers(array $NameServers) Set Lists the NS servers allocated by tencent cloud EdgeOne. requires pointing the current site's NS servers to this address for the changes to take effect.
 * @method VanityNameServers getVanityNameServers() Obtain Specifies the user-customized NS server domain name information. if enabled, the NS needs to be pointed to this address in the registered vendor of the domains.
 * @method void setVanityNameServers(VanityNameServers $VanityNameServers) Set Specifies the user-customized NS server domain name information. if enabled, the NS needs to be pointed to this address in the registered vendor of the domains.
 * @method array getVanityNameServersIps() Obtain Describes the IP address information of the user-customized NS server.
 * @method void setVanityNameServersIps(array $VanityNameServersIps) Set Describes the IP address information of the user-customized NS server.
 */
class NSDetail extends AbstractModel
{
    /**
     * @var string Specifies whether CNAME acceleration is enabled. valid values:.
<Li>Enabled: specifies whether the feature is enabled.</li>.
<li>disabled: specifies that the feature is turned off.</li>.
     */
    public $CnameSpeedUp;

    /**
     * @var integer Existence of a site with the same name. valid values:.
<Li>0: no site with the same name exists.</li>.
<Li>Specifies the name already exists.</li>.
     */
    public $IsFake;

    /**
     * @var OwnershipVerification Ownership verification information. for sites with NS access type, switching the current NS server to the designated NS server of tencent cloud EdgeOne is deemed as passing the ownership verification. for details, refer to [site/domain ownership verification](https://www.tencentcloud.comom/document/product/1552/70789?from_cn_redirect=1).
     */
    public $OwnershipVerification;

    /**
     * @var array Lists the NS servers currently in use by the selected site detected by EdgeOne.
     */
    public $OriginalNameServers;

    /**
     * @var array Lists the NS servers allocated by tencent cloud EdgeOne. requires pointing the current site's NS servers to this address for the changes to take effect.
     */
    public $NameServers;

    /**
     * @var VanityNameServers Specifies the user-customized NS server domain name information. if enabled, the NS needs to be pointed to this address in the registered vendor of the domains.
     */
    public $VanityNameServers;

    /**
     * @var array Describes the IP address information of the user-customized NS server.
     */
    public $VanityNameServersIps;

    /**
     * @param string $CnameSpeedUp Specifies whether CNAME acceleration is enabled. valid values:.
<Li>Enabled: specifies whether the feature is enabled.</li>.
<li>disabled: specifies that the feature is turned off.</li>.
     * @param integer $IsFake Existence of a site with the same name. valid values:.
<Li>0: no site with the same name exists.</li>.
<Li>Specifies the name already exists.</li>.
     * @param OwnershipVerification $OwnershipVerification Ownership verification information. for sites with NS access type, switching the current NS server to the designated NS server of tencent cloud EdgeOne is deemed as passing the ownership verification. for details, refer to [site/domain ownership verification](https://www.tencentcloud.comom/document/product/1552/70789?from_cn_redirect=1).
     * @param array $OriginalNameServers Lists the NS servers currently in use by the selected site detected by EdgeOne.
     * @param array $NameServers Lists the NS servers allocated by tencent cloud EdgeOne. requires pointing the current site's NS servers to this address for the changes to take effect.
     * @param VanityNameServers $VanityNameServers Specifies the user-customized NS server domain name information. if enabled, the NS needs to be pointed to this address in the registered vendor of the domains.
     * @param array $VanityNameServersIps Describes the IP address information of the user-customized NS server.
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
