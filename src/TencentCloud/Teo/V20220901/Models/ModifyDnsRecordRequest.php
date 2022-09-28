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
 * ModifyDnsRecord request structure.
 *
 * @method string getDnsRecordId() Obtain The record ID.
 * @method void setDnsRecordId(string $DnsRecordId) Set The record ID.
 * @method string getZoneId() Obtain The site ID.
 * @method void setZoneId(string $ZoneId) Set The site ID.
 * @method string getDnsRecordType() Obtain The DNS record type. Values:
<li>`A`: Point a domain name to an IPv4 address, such as 8.8.8.8.</li>
<li>`AAAA`: Point a domain name to an IPv6 address.</li>
<li>`MX`: It is used for email servers. The record value and priority parameters are provided by email service providers. If there are multiple MX records, the lower the priority value, the higher the priority.</li>
<li>`CNAME`: Point a domain name to another domain name that can be resolved to an IP address.</li>
<li>`TXT`: Identify and describe a domain name. It is usually used for domain verification and as SPF records (for anti-spam).</li>
<li>`NS`: If you need to authorize a subdomain name to another DNS service provider for DNS resolution, you need to add an NS record. You cannot add an NS record for a root domain name.</li>
<li>`CAA`: Specify CAs to issue certificates for sites.</li>
<li>`SRV`: Identify a service used by a server. It is commonly used in Microsoft directory management.</li>
 * @method void setDnsRecordType(string $DnsRecordType) Set The DNS record type. Values:
<li>`A`: Point a domain name to an IPv4 address, such as 8.8.8.8.</li>
<li>`AAAA`: Point a domain name to an IPv6 address.</li>
<li>`MX`: It is used for email servers. The record value and priority parameters are provided by email service providers. If there are multiple MX records, the lower the priority value, the higher the priority.</li>
<li>`CNAME`: Point a domain name to another domain name that can be resolved to an IP address.</li>
<li>`TXT`: Identify and describe a domain name. It is usually used for domain verification and as SPF records (for anti-spam).</li>
<li>`NS`: If you need to authorize a subdomain name to another DNS service provider for DNS resolution, you need to add an NS record. You cannot add an NS record for a root domain name.</li>
<li>`CAA`: Specify CAs to issue certificates for sites.</li>
<li>`SRV`: Identify a service used by a server. It is commonly used in Microsoft directory management.</li>
 * @method string getDnsRecordName() Obtain The record name, which consists of the host record and site name. Note that the original configuration will be used if this field is not specified.
 * @method void setDnsRecordName(string $DnsRecordName) Set The record name, which consists of the host record and site name. Note that the original configuration will be used if this field is not specified.
 * @method string getContent() Obtain The record content. Note that the original configuration will be used if this field is not specified.
 * @method void setContent(string $Content) Set The record content. Note that the original configuration will be used if this field is not specified.
 * @method integer getTTL() Obtain TTL (in seconds). The smaller the value, the faster the record changes take effect. Default value: 300. Note that the original configuration will be used if this field is not specified.
 * @method void setTTL(integer $TTL) Set TTL (in seconds). The smaller the value, the faster the record changes take effect. Default value: 300. Note that the original configuration will be used if this field is not specified.
 * @method integer getPriority() Obtain Specifies a value in the range 1–50 when you make changes to the MX records. A smaller value indicates higher priority. Note that the default value 0 will be used if this field is not specified.
 * @method void setPriority(integer $Priority) Set Specifies a value in the range 1–50 when you make changes to the MX records. A smaller value indicates higher priority. Note that the default value 0 will be used if this field is not specified.
 * @method string getMode() Obtain The proxy mode. Values:
<li>`dns_only`: Only DNS</li>
<li>`proxied`: Proxied</li></li>The original configuration will apply if this field is not specified.
 * @method void setMode(string $Mode) Set The proxy mode. Values:
<li>`dns_only`: Only DNS</li>
<li>`proxied`: Proxied</li></li>The original configuration will apply if this field is not specified.
 */
class ModifyDnsRecordRequest extends AbstractModel
{
    /**
     * @var string The record ID.
     */
    public $DnsRecordId;

    /**
     * @var string The site ID.
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
    public $DnsRecordType;

    /**
     * @var string The record name, which consists of the host record and site name. Note that the original configuration will be used if this field is not specified.
     */
    public $DnsRecordName;

    /**
     * @var string The record content. Note that the original configuration will be used if this field is not specified.
     */
    public $Content;

    /**
     * @var integer TTL (in seconds). The smaller the value, the faster the record changes take effect. Default value: 300. Note that the original configuration will be used if this field is not specified.
     */
    public $TTL;

    /**
     * @var integer Specifies a value in the range 1–50 when you make changes to the MX records. A smaller value indicates higher priority. Note that the default value 0 will be used if this field is not specified.
     */
    public $Priority;

    /**
     * @var string The proxy mode. Values:
<li>`dns_only`: Only DNS</li>
<li>`proxied`: Proxied</li></li>The original configuration will apply if this field is not specified.
     */
    public $Mode;

    /**
     * @param string $DnsRecordId The record ID.
     * @param string $ZoneId The site ID.
     * @param string $DnsRecordType The DNS record type. Values:
<li>`A`: Point a domain name to an IPv4 address, such as 8.8.8.8.</li>
<li>`AAAA`: Point a domain name to an IPv6 address.</li>
<li>`MX`: It is used for email servers. The record value and priority parameters are provided by email service providers. If there are multiple MX records, the lower the priority value, the higher the priority.</li>
<li>`CNAME`: Point a domain name to another domain name that can be resolved to an IP address.</li>
<li>`TXT`: Identify and describe a domain name. It is usually used for domain verification and as SPF records (for anti-spam).</li>
<li>`NS`: If you need to authorize a subdomain name to another DNS service provider for DNS resolution, you need to add an NS record. You cannot add an NS record for a root domain name.</li>
<li>`CAA`: Specify CAs to issue certificates for sites.</li>
<li>`SRV`: Identify a service used by a server. It is commonly used in Microsoft directory management.</li>
     * @param string $DnsRecordName The record name, which consists of the host record and site name. Note that the original configuration will be used if this field is not specified.
     * @param string $Content The record content. Note that the original configuration will be used if this field is not specified.
     * @param integer $TTL TTL (in seconds). The smaller the value, the faster the record changes take effect. Default value: 300. Note that the original configuration will be used if this field is not specified.
     * @param integer $Priority Specifies a value in the range 1–50 when you make changes to the MX records. A smaller value indicates higher priority. Note that the default value 0 will be used if this field is not specified.
     * @param string $Mode The proxy mode. Values:
<li>`dns_only`: Only DNS</li>
<li>`proxied`: Proxied</li></li>The original configuration will apply if this field is not specified.
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
        if (array_key_exists("DnsRecordId",$param) and $param["DnsRecordId"] !== null) {
            $this->DnsRecordId = $param["DnsRecordId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("DnsRecordType",$param) and $param["DnsRecordType"] !== null) {
            $this->DnsRecordType = $param["DnsRecordType"];
        }

        if (array_key_exists("DnsRecordName",$param) and $param["DnsRecordName"] !== null) {
            $this->DnsRecordName = $param["DnsRecordName"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }
    }
}
