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
 * Exclusive DDoS protection configuration.
 *
 * @method string getProtectionOption() Obtain Specify the protection scope of standalone DDoS. Value:
<li> protect_all_domains: exclusive DDoS protection takes effect for all domains in the site. Newly added domain names automatically enable exclusive DDoS protection. When the input parameter is protect_all_domains, the input parameter DomainDDoSProtections will not be processed;</li>
<li> protect_specified_domains: only applicable to specified domains. The specific scope can be specified via the DomainDDoSProtection parameter.</li>
 * @method void setProtectionOption(string $ProtectionOption) Set Specify the protection scope of standalone DDoS. Value:
<li> protect_all_domains: exclusive DDoS protection takes effect for all domains in the site. Newly added domain names automatically enable exclusive DDoS protection. When the input parameter is protect_all_domains, the input parameter DomainDDoSProtections will not be processed;</li>
<li> protect_specified_domains: only applicable to specified domains. The specific scope can be specified via the DomainDDoSProtection parameter.</li>
 * @method array getDomainDDoSProtections() Obtain Exclusive DDoS protection configuration of the domain. In the input parameter scenario:
<li> When ProtectionOption remains protect_specified_domains: domains not filled in keep their exclusive DDoS protection configuration unchanged, and explicitly specified domains are updated based on the input parameter;</li>
<li> When ProtectionOption is switched from protect_all_domains to protect_specified_domains: if DomainDDoSProtections is empty, exclusive DDoS protection is disabled for all domain names under the site; if DomainDDoSProtections is not empty, exclusive DDoS protection is disabled or retained for the specified domain names in the parameter, and exclusive DDoS protection is disabled for the rest of the unlisted domain names.</li>
 * @method void setDomainDDoSProtections(array $DomainDDoSProtections) Set Exclusive DDoS protection configuration of the domain. In the input parameter scenario:
<li> When ProtectionOption remains protect_specified_domains: domains not filled in keep their exclusive DDoS protection configuration unchanged, and explicitly specified domains are updated based on the input parameter;</li>
<li> When ProtectionOption is switched from protect_all_domains to protect_specified_domains: if DomainDDoSProtections is empty, exclusive DDoS protection is disabled for all domain names under the site; if DomainDDoSProtections is not empty, exclusive DDoS protection is disabled or retained for the specified domain names in the parameter, and exclusive DDoS protection is disabled for the rest of the unlisted domain names.</li>
 * @method array getSharedCNAMEDDoSProtections() Obtain Configuration of exclusive DDoS protection with a shared CNAME. Used only as an output parameter.
 * @method void setSharedCNAMEDDoSProtections(array $SharedCNAMEDDoSProtections) Set Configuration of exclusive DDoS protection with a shared CNAME. Used only as an output parameter.
 */
class DDoSProtection extends AbstractModel
{
    /**
     * @var string Specify the protection scope of standalone DDoS. Value:
<li> protect_all_domains: exclusive DDoS protection takes effect for all domains in the site. Newly added domain names automatically enable exclusive DDoS protection. When the input parameter is protect_all_domains, the input parameter DomainDDoSProtections will not be processed;</li>
<li> protect_specified_domains: only applicable to specified domains. The specific scope can be specified via the DomainDDoSProtection parameter.</li>
     */
    public $ProtectionOption;

    /**
     * @var array Exclusive DDoS protection configuration of the domain. In the input parameter scenario:
<li> When ProtectionOption remains protect_specified_domains: domains not filled in keep their exclusive DDoS protection configuration unchanged, and explicitly specified domains are updated based on the input parameter;</li>
<li> When ProtectionOption is switched from protect_all_domains to protect_specified_domains: if DomainDDoSProtections is empty, exclusive DDoS protection is disabled for all domain names under the site; if DomainDDoSProtections is not empty, exclusive DDoS protection is disabled or retained for the specified domain names in the parameter, and exclusive DDoS protection is disabled for the rest of the unlisted domain names.</li>
     */
    public $DomainDDoSProtections;

    /**
     * @var array Configuration of exclusive DDoS protection with a shared CNAME. Used only as an output parameter.
     */
    public $SharedCNAMEDDoSProtections;

    /**
     * @param string $ProtectionOption Specify the protection scope of standalone DDoS. Value:
<li> protect_all_domains: exclusive DDoS protection takes effect for all domains in the site. Newly added domain names automatically enable exclusive DDoS protection. When the input parameter is protect_all_domains, the input parameter DomainDDoSProtections will not be processed;</li>
<li> protect_specified_domains: only applicable to specified domains. The specific scope can be specified via the DomainDDoSProtection parameter.</li>
     * @param array $DomainDDoSProtections Exclusive DDoS protection configuration of the domain. In the input parameter scenario:
<li> When ProtectionOption remains protect_specified_domains: domains not filled in keep their exclusive DDoS protection configuration unchanged, and explicitly specified domains are updated based on the input parameter;</li>
<li> When ProtectionOption is switched from protect_all_domains to protect_specified_domains: if DomainDDoSProtections is empty, exclusive DDoS protection is disabled for all domain names under the site; if DomainDDoSProtections is not empty, exclusive DDoS protection is disabled or retained for the specified domain names in the parameter, and exclusive DDoS protection is disabled for the rest of the unlisted domain names.</li>
     * @param array $SharedCNAMEDDoSProtections Configuration of exclusive DDoS protection with a shared CNAME. Used only as an output parameter.
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
        if (array_key_exists("ProtectionOption",$param) and $param["ProtectionOption"] !== null) {
            $this->ProtectionOption = $param["ProtectionOption"];
        }

        if (array_key_exists("DomainDDoSProtections",$param) and $param["DomainDDoSProtections"] !== null) {
            $this->DomainDDoSProtections = [];
            foreach ($param["DomainDDoSProtections"] as $key => $value){
                $obj = new DomainDDoSProtection();
                $obj->deserialize($value);
                array_push($this->DomainDDoSProtections, $obj);
            }
        }

        if (array_key_exists("SharedCNAMEDDoSProtections",$param) and $param["SharedCNAMEDDoSProtections"] !== null) {
            $this->SharedCNAMEDDoSProtections = [];
            foreach ($param["SharedCNAMEDDoSProtections"] as $key => $value){
                $obj = new DomainDDoSProtection();
                $obj->deserialize($value);
                array_push($this->SharedCNAMEDDoSProtections, $obj);
            }
        }
    }
}
