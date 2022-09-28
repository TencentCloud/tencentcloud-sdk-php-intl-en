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
 * DNS record
 *
 * @method string getDnsRecordId() Obtain The record ID.
 * @method void setDnsRecordId(string $DnsRecordId) Set The record ID.
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
 * @method string getDnsRecordName() Obtain The record name.
 * @method void setDnsRecordName(string $DnsRecordName) Set The record name.
 * @method string getContent() Obtain The record value.
 * @method void setContent(string $Content) Set The record value.
 * @method string getMode() Obtain The proxy mode. Values:
<li>`dns_only`: Only DNS</li>
<li>`proxied`: Proxied</li>
 * @method void setMode(string $Mode) Set The proxy mode. Values:
<li>`dns_only`: Only DNS</li>
<li>`proxied`: Proxied</li>
 * @method integer getTTL() Obtain TTL (in seconds). The smaller the value, the faster the record changes take effect.
 * @method void setTTL(integer $TTL) Set TTL (in seconds). The smaller the value, the faster the record changes take effect.
 * @method integer getPriority() Obtain The MX record priority. The smaller the value, the higher the priority.
 * @method void setPriority(integer $Priority) Set The MX record priority. The smaller the value, the higher the priority.
 * @method string getCreatedOn() Obtain The creation time.
 * @method void setCreatedOn(string $CreatedOn) Set The creation time.
 * @method string getModifiedOn() Obtain The modification time.
 * @method void setModifiedOn(string $ModifiedOn) Set The modification time.
 * @method boolean getLocked() Obtain The lock status of the domain name.
 * @method void setLocked(boolean $Locked) Set The lock status of the domain name.
 * @method string getZoneId() Obtain The site ID.
 * @method void setZoneId(string $ZoneId) Set The site ID.
 * @method string getZoneName() Obtain The site name.
 * @method void setZoneName(string $ZoneName) Set The site name.
 * @method string getStatus() Obtain The DNS record status. Values:
<li>`active`: Activated</li>
<li>`pending`: Deactivated</li>
 * @method void setStatus(string $Status) Set The DNS record status. Values:
<li>`active`: Activated</li>
<li>`pending`: Deactivated</li>
 * @method string getCname() Obtain The CNAME address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCname(string $Cname) Set The CNAME address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDomainStatus() Obtain The service used by the domain name. Values:
<li>`lb`: Load balancing</li>
<li>`security`: Security protection</li>
<li>`l4`: L4 proxy</li>
 * @method void setDomainStatus(array $DomainStatus) Set The service used by the domain name. Values:
<li>`lb`: Load balancing</li>
<li>`security`: Security protection</li>
<li>`l4`: L4 proxy</li>
 */
class DnsRecord extends AbstractModel
{
    /**
     * @var string The record ID.
     */
    public $DnsRecordId;

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
     * @var string The record name.
     */
    public $DnsRecordName;

    /**
     * @var string The record value.
     */
    public $Content;

    /**
     * @var string The proxy mode. Values:
<li>`dns_only`: Only DNS</li>
<li>`proxied`: Proxied</li>
     */
    public $Mode;

    /**
     * @var integer TTL (in seconds). The smaller the value, the faster the record changes take effect.
     */
    public $TTL;

    /**
     * @var integer The MX record priority. The smaller the value, the higher the priority.
     */
    public $Priority;

    /**
     * @var string The creation time.
     */
    public $CreatedOn;

    /**
     * @var string The modification time.
     */
    public $ModifiedOn;

    /**
     * @var boolean The lock status of the domain name.
     */
    public $Locked;

    /**
     * @var string The site ID.
     */
    public $ZoneId;

    /**
     * @var string The site name.
     */
    public $ZoneName;

    /**
     * @var string The DNS record status. Values:
<li>`active`: Activated</li>
<li>`pending`: Deactivated</li>
     */
    public $Status;

    /**
     * @var string The CNAME address.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Cname;

    /**
     * @var array The service used by the domain name. Values:
<li>`lb`: Load balancing</li>
<li>`security`: Security protection</li>
<li>`l4`: L4 proxy</li>
     */
    public $DomainStatus;

    /**
     * @param string $DnsRecordId The record ID.
     * @param string $DnsRecordType The DNS record type. Values:
<li>`A`: Point a domain name to an IPv4 address, such as 8.8.8.8.</li>
<li>`AAAA`: Point a domain name to an IPv6 address.</li>
<li>`MX`: It is used for email servers. The record value and priority parameters are provided by email service providers. If there are multiple MX records, the lower the priority value, the higher the priority.</li>
<li>`CNAME`: Point a domain name to another domain name that can be resolved to an IP address.</li>
<li>`TXT`: Identify and describe a domain name. It is usually used for domain verification and as SPF records (for anti-spam).</li>
<li>`NS`: If you need to authorize a subdomain name to another DNS service provider for DNS resolution, you need to add an NS record. You cannot add an NS record for a root domain name.</li>
<li>`CAA`: Specify CAs to issue certificates for sites.</li>
<li>`SRV`: Identify a service used by a server. It is commonly used in Microsoft directory management.</li>
     * @param string $DnsRecordName The record name.
     * @param string $Content The record value.
     * @param string $Mode The proxy mode. Values:
<li>`dns_only`: Only DNS</li>
<li>`proxied`: Proxied</li>
     * @param integer $TTL TTL (in seconds). The smaller the value, the faster the record changes take effect.
     * @param integer $Priority The MX record priority. The smaller the value, the higher the priority.
     * @param string $CreatedOn The creation time.
     * @param string $ModifiedOn The modification time.
     * @param boolean $Locked The lock status of the domain name.
     * @param string $ZoneId The site ID.
     * @param string $ZoneName The site name.
     * @param string $Status The DNS record status. Values:
<li>`active`: Activated</li>
<li>`pending`: Deactivated</li>
     * @param string $Cname The CNAME address.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DomainStatus The service used by the domain name. Values:
<li>`lb`: Load balancing</li>
<li>`security`: Security protection</li>
<li>`l4`: L4 proxy</li>
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

        if (array_key_exists("DnsRecordType",$param) and $param["DnsRecordType"] !== null) {
            $this->DnsRecordType = $param["DnsRecordType"];
        }

        if (array_key_exists("DnsRecordName",$param) and $param["DnsRecordName"] !== null) {
            $this->DnsRecordName = $param["DnsRecordName"];
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

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }

        if (array_key_exists("Locked",$param) and $param["Locked"] !== null) {
            $this->Locked = $param["Locked"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("DomainStatus",$param) and $param["DomainStatus"] !== null) {
            $this->DomainStatus = $param["DomainStatus"];
        }
    }
}
