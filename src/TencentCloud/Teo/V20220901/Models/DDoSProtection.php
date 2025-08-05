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
 * Exclusive Anti-DDoS protection configuration.
 *
 * @method string getProtectionOption() Obtain Specifies the protection scope of standalone DDoS. valid values:.
<li>protect_all_domains: specifies exclusive Anti-DDoS protection for all domain names in the site. newly added domain names automatically enable exclusive Anti-DDoS protection. when this parameter is specified, DomainDDoSProtections will not be processed.</li>.
<li>protect_specified_domains: only applicable to specified domains. specific scope can be set via DomainDDoSProtection parameter.</li>.
 * @method void setProtectionOption(string $ProtectionOption) Set Specifies the protection scope of standalone DDoS. valid values:.
<li>protect_all_domains: specifies exclusive Anti-DDoS protection for all domain names in the site. newly added domain names automatically enable exclusive Anti-DDoS protection. when this parameter is specified, DomainDDoSProtections will not be processed.</li>.
<li>protect_specified_domains: only applicable to specified domains. specific scope can be set via DomainDDoSProtection parameter.</li>.
 * @method array getDomainDDoSProtections() Obtain Anti-DDoS configuration of the domain. specifies the exclusive ddos protection settings for the domain in request parameters.
<li>When ProtectionOption remains protect_specified_domains, the domain names not filled in keep their exclusive Anti-DDoS protection configuration unchanged, while explicitly specified domain names are updated according to the input parameters.</li>.
<li>When ProtectionOption switches from protect_all_domains to protect_specified_domains: if DomainDDoSProtections is empty, disable exclusive DDoS protection for all domains under the site; if DomainDDoSProtections is not empty, disable or maintain exclusive DDoS protection for the domain names specified in the parameter, and disable exclusive DDoS protection for other unlisted domain names.</li>.
 * @method void setDomainDDoSProtections(array $DomainDDoSProtections) Set Anti-DDoS configuration of the domain. specifies the exclusive ddos protection settings for the domain in request parameters.
<li>When ProtectionOption remains protect_specified_domains, the domain names not filled in keep their exclusive Anti-DDoS protection configuration unchanged, while explicitly specified domain names are updated according to the input parameters.</li>.
<li>When ProtectionOption switches from protect_all_domains to protect_specified_domains: if DomainDDoSProtections is empty, disable exclusive DDoS protection for all domains under the site; if DomainDDoSProtections is not empty, disable or maintain exclusive DDoS protection for the domain names specified in the parameter, and disable exclusive DDoS protection for other unlisted domain names.</li>.
 * @method array getSharedCNAMEDDoSProtections() Obtain Specifies the exclusive DDoS protection configuration of a shared CNAME. used as an output parameter.
 * @method void setSharedCNAMEDDoSProtections(array $SharedCNAMEDDoSProtections) Set Specifies the exclusive DDoS protection configuration of a shared CNAME. used as an output parameter.
 */
class DDoSProtection extends AbstractModel
{
    /**
     * @var string Specifies the protection scope of standalone DDoS. valid values:.
<li>protect_all_domains: specifies exclusive Anti-DDoS protection for all domain names in the site. newly added domain names automatically enable exclusive Anti-DDoS protection. when this parameter is specified, DomainDDoSProtections will not be processed.</li>.
<li>protect_specified_domains: only applicable to specified domains. specific scope can be set via DomainDDoSProtection parameter.</li>.
     */
    public $ProtectionOption;

    /**
     * @var array Anti-DDoS configuration of the domain. specifies the exclusive ddos protection settings for the domain in request parameters.
<li>When ProtectionOption remains protect_specified_domains, the domain names not filled in keep their exclusive Anti-DDoS protection configuration unchanged, while explicitly specified domain names are updated according to the input parameters.</li>.
<li>When ProtectionOption switches from protect_all_domains to protect_specified_domains: if DomainDDoSProtections is empty, disable exclusive DDoS protection for all domains under the site; if DomainDDoSProtections is not empty, disable or maintain exclusive DDoS protection for the domain names specified in the parameter, and disable exclusive DDoS protection for other unlisted domain names.</li>.
     */
    public $DomainDDoSProtections;

    /**
     * @var array Specifies the exclusive DDoS protection configuration of a shared CNAME. used as an output parameter.
     */
    public $SharedCNAMEDDoSProtections;

    /**
     * @param string $ProtectionOption Specifies the protection scope of standalone DDoS. valid values:.
<li>protect_all_domains: specifies exclusive Anti-DDoS protection for all domain names in the site. newly added domain names automatically enable exclusive Anti-DDoS protection. when this parameter is specified, DomainDDoSProtections will not be processed.</li>.
<li>protect_specified_domains: only applicable to specified domains. specific scope can be set via DomainDDoSProtection parameter.</li>.
     * @param array $DomainDDoSProtections Anti-DDoS configuration of the domain. specifies the exclusive ddos protection settings for the domain in request parameters.
<li>When ProtectionOption remains protect_specified_domains, the domain names not filled in keep their exclusive Anti-DDoS protection configuration unchanged, while explicitly specified domain names are updated according to the input parameters.</li>.
<li>When ProtectionOption switches from protect_all_domains to protect_specified_domains: if DomainDDoSProtections is empty, disable exclusive DDoS protection for all domains under the site; if DomainDDoSProtections is not empty, disable or maintain exclusive DDoS protection for the domain names specified in the parameter, and disable exclusive DDoS protection for other unlisted domain names.</li>.
     * @param array $SharedCNAMEDDoSProtections Specifies the exclusive DDoS protection configuration of a shared CNAME. used as an output parameter.
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
