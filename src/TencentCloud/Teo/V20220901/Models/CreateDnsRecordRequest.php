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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDnsRecord request structure.
 *
 * @method string getZoneId() Obtain The site ID of the DNS record.
 * @method void setZoneId(string $ZoneId) Set The site ID of the DNS record.
 * @method string getType() Obtain The DNS record type. Values:
<li>`A`: Point a domain name to an IPv4 address, such as 8.8.8.8.</li>
<li>`AAAA`: Point a domain name to an IPv6 address.</li>
<li>`MX`: It is used for email servers. The record value and priority parameters are provided by email service providers. If there are multiple MX records, the lower the priority value, the higher the priority.</li>
<li>`CNAME`: Point a domain name to another domain name that can be resolved to an IP address.</li>
<li>`TXT`: Identify and describe a domain name. It is usually used for domain verification and as SPF records (for anti-spam).</li>
<li>`NS`: If you need to authorize a subdomain name to another DNS service provider for DNS resolution, you need to add an NS record. You cannot add an NS record for a root domain name.</li>
<li>`CAA`: Specify CAs to issue certificates for sites.</li>
<li>`SRV`: Identify a service used by a server. It is commonly used in Microsoft directory management.</li>
 * @method void setType(string $Type) Set The DNS record type. Values:
<li>`A`: Point a domain name to an IPv4 address, such as 8.8.8.8.</li>
<li>`AAAA`: Point a domain name to an IPv6 address.</li>
<li>`MX`: It is used for email servers. The record value and priority parameters are provided by email service providers. If there are multiple MX records, the lower the priority value, the higher the priority.</li>
<li>`CNAME`: Point a domain name to another domain name that can be resolved to an IP address.</li>
<li>`TXT`: Identify and describe a domain name. It is usually used for domain verification and as SPF records (for anti-spam).</li>
<li>`NS`: If you need to authorize a subdomain name to another DNS service provider for DNS resolution, you need to add an NS record. You cannot add an NS record for a root domain name.</li>
<li>`CAA`: Specify CAs to issue certificates for sites.</li>
<li>`SRV`: Identify a service used by a server. It is commonly used in Microsoft directory management.</li>
 * @method string getName() Obtain The DNS record name.
 * @method void setName(string $Name) Set The DNS record name.
 * @method string getContent() Obtain The DNS record content.
 * @method void setContent(string $Content) Set The DNS record content.
 * @method string getMode() Obtain The proxy mode. Values:
<li>`dns_only`: Only DNS</li>
<li>`proxied`: Proxied</li>
 * @method void setMode(string $Mode) Set The proxy mode. Values:
<li>`dns_only`: Only DNS</li>
<li>`proxied`: Proxied</li>
 * @method integer getTTL() Obtain TTL (in seconds). The smaller the value, the faster the record changes take effect. Default value: 300
 * @method void setTTL(integer $TTL) Set TTL (in seconds). The smaller the value, the faster the record changes take effect. Default value: 300
 * @method integer getPriority() Obtain Specifies a value in the range 1–50 when you make changes to the MX records. A smaller value indicates higher priority. Note that the default value 0 will be used if this field is not specified.
 * @method void setPriority(integer $Priority) Set Specifies a value in the range 1–50 when you make changes to the MX records. A smaller value indicates higher priority. Note that the default value 0 will be used if this field is not specified.
 */
class CreateDnsRecordRequest extends AbstractModel
{
    /**
     * @var string The site ID of the DNS record.
     */
    public $ZoneId;

    /**
     * @var string The DNS record type. Values:
<li>`A`: Point a domain name to an IPv4 address, such as 8.8.8.8.</li>
<li>`AAAA`: Point a domain name to an IPv6 address.</li>
<li>`MX`: It is used for email servers. The record value and priority parameters are provided by email service providers. If there are multiple MX records, the lower the priority value, the higher the priority.</li>
<li>`CNAME`: Point a domain name to another domain name that can be resolved to an IP address.</li>
<li>`TXT`: Identify and describe a domain name. It is usually used for domain verification and as SPF records (for anti-spam).</li>
<li>`NS`: If you need to authorize a subdomain name to another DNS service provider for DNS resolution, you need to add an NS record. You cannot add an NS record for a root domain name.</li>
<li>`CAA`: Specify CAs to issue certificates for sites.</li>
<li>`SRV`: Identify a service used by a server. It is commonly used in Microsoft directory management.</li>
     */
    public $Type;

    /**
     * @var string The DNS record name.
     */
    public $Name;

    /**
     * @var string The DNS record content.
     */
    public $Content;

    /**
     * @var string The proxy mode. Values:
<li>`dns_only`: Only DNS</li>
<li>`proxied`: Proxied</li>
     */
    public $Mode;

    /**
     * @var integer TTL (in seconds). The smaller the value, the faster the record changes take effect. Default value: 300
     */
    public $TTL;

    /**
     * @var integer Specifies a value in the range 1–50 when you make changes to the MX records. A smaller value indicates higher priority. Note that the default value 0 will be used if this field is not specified.
     */
    public $Priority;

    /**
     * @param string $ZoneId The site ID of the DNS record.
     * @param string $Type The DNS record type. Values:
<li>`A`: Point a domain name to an IPv4 address, such as 8.8.8.8.</li>
<li>`AAAA`: Point a domain name to an IPv6 address.</li>
<li>`MX`: It is used for email servers. The record value and priority parameters are provided by email service providers. If there are multiple MX records, the lower the priority value, the higher the priority.</li>
<li>`CNAME`: Point a domain name to another domain name that can be resolved to an IP address.</li>
<li>`TXT`: Identify and describe a domain name. It is usually used for domain verification and as SPF records (for anti-spam).</li>
<li>`NS`: If you need to authorize a subdomain name to another DNS service provider for DNS resolution, you need to add an NS record. You cannot add an NS record for a root domain name.</li>
<li>`CAA`: Specify CAs to issue certificates for sites.</li>
<li>`SRV`: Identify a service used by a server. It is commonly used in Microsoft directory management.</li>
     * @param string $Name The DNS record name.
     * @param string $Content The DNS record content.
     * @param string $Mode The proxy mode. Values:
<li>`dns_only`: Only DNS</li>
<li>`proxied`: Proxied</li>
     * @param integer $TTL TTL (in seconds). The smaller the value, the faster the record changes take effect. Default value: 300
     * @param integer $Priority Specifies a value in the range 1–50 when you make changes to the MX records. A smaller value indicates higher priority. Note that the default value 0 will be used if this field is not specified.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
