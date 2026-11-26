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
 * CreateDnsRecord request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getName() Obtain DNS record name. If it is a Chinese, Korean, or Japanese domain name, it needs to be converted to punycode before input.
 * @method void setName(string $Name) Set DNS record name. If it is a Chinese, Korean, or Japanese domain name, it needs to be converted to punycode before input.
 * @method string getType() Obtain DNS record type. Valid values: <li>A: point the domain to an external IPv4 address, for example 8.8.8.8;</li><li>AAAA: point the domain to an external IPv6 address;</li><li>MX: for email servers. If multiple MX records exist, a lower priority value indicates a higher priority;</li><li>CNAME: point the domain to another domain, which is then resolved to the final IP address;</li><li>TXT: identify and describe the domain, commonly used for domain verification and SPF records (anti-spam);</li><li>NS: if you need to use another DNS service provider to resolve a subdomain, an NS record needs to be added. An NS record cannot be added for the root domain;</li><li>CAA: specify the CA that can issue certificates for this site;</li><li>SRV: identify that a server uses a service, commonly used for directory management in Microsoft systems.</li>
Different record types, such as SRV and CAA records, have different requirements for the host record name and record value format. For detailed descriptions and format examples of each record type, see [DNS Record Type Introduction](https://www.tencentcloud.com/document/product/1552/90453?from_cn_redirect=1#2f681022-91ab-4a9e-ac3d-0a6c454d954e).
 * @method void setType(string $Type) Set DNS record type. Valid values: <li>A: point the domain to an external IPv4 address, for example 8.8.8.8;</li><li>AAAA: point the domain to an external IPv6 address;</li><li>MX: for email servers. If multiple MX records exist, a lower priority value indicates a higher priority;</li><li>CNAME: point the domain to another domain, which is then resolved to the final IP address;</li><li>TXT: identify and describe the domain, commonly used for domain verification and SPF records (anti-spam);</li><li>NS: if you need to use another DNS service provider to resolve a subdomain, an NS record needs to be added. An NS record cannot be added for the root domain;</li><li>CAA: specify the CA that can issue certificates for this site;</li><li>SRV: identify that a server uses a service, commonly used for directory management in Microsoft systems.</li>
Different record types, such as SRV and CAA records, have different requirements for the host record name and record value format. For detailed descriptions and format examples of each record type, see [DNS Record Type Introduction](https://www.tencentcloud.com/document/product/1552/90453?from_cn_redirect=1#2f681022-91ab-4a9e-ac3d-0a6c454d954e).
 * @method string getContent() Obtain DNS record content. Fill in the corresponding content based on the Type value. If it is a Chinese, Korean, or Japanese domain name, convert it to punycode before input.
 * @method void setContent(string $Content) Set DNS record content. Fill in the corresponding content based on the Type value. If it is a Chinese, Korean, or Japanese domain name, convert it to punycode before input.
 * @method string getLocation() Obtain DNS record resolution route. If not specified, it defaults to Default, which means the default parsing route and takes effect in all regions.

-Resolution line configuration is applicable only when Type (DNS record type) is A, AAAA, or CNAME.
- Route parsing line configuration is applicable only to the standard and enterprise plans. For values, see [Resolution Routes and Corresponding Code Enumeration](https://www.tencentcloud.com/document/product/1552/112542?from_cn_redirect=1).
 * @method void setLocation(string $Location) Set DNS record resolution route. If not specified, it defaults to Default, which means the default parsing route and takes effect in all regions.

-Resolution line configuration is applicable only when Type (DNS record type) is A, AAAA, or CNAME.
- Route parsing line configuration is applicable only to the standard and enterprise plans. For values, see [Resolution Routes and Corresponding Code Enumeration](https://www.tencentcloud.com/document/product/1552/112542?from_cn_redirect=1).
 * @method integer getTTL() Obtain Cache time. You can specify a range of 60–86400. A smaller value means modification records take effect faster in each region. Default value: 300. Unit: seconds.
 * @method void setTTL(integer $TTL) Set Cache time. You can specify a range of 60–86400. A smaller value means modification records take effect faster in each region. Default value: 300. Unit: seconds.
 * @method integer getWeight() Obtain DNS record weight. Users can specify a value range of -1 to 100. When set to 0, it means no parsing. If not specified, it defaults to -1, indicating no weight is set. Weight configuration is applicable only when Type (DNS record type) is A, AAAA, or CNAME.<br>Note: For different DNS records under the same subdomain and resolution route, set weight for all of them simultaneously or leave all of them unset.
 * @method void setWeight(integer $Weight) Set DNS record weight. Users can specify a value range of -1 to 100. When set to 0, it means no parsing. If not specified, it defaults to -1, indicating no weight is set. Weight configuration is applicable only when Type (DNS record type) is A, AAAA, or CNAME.<br>Note: For different DNS records under the same subdomain and resolution route, set weight for all of them simultaneously or leave all of them unset.
 * @method integer getPriority() Obtain MX record priority. This parameter is valid only when Type (DNS record type) is MX. A smaller value indicates higher priority. You can specify a value from 0 to 50. If not specified, the default is 0.
 * @method void setPriority(integer $Priority) Set MX record priority. This parameter is valid only when Type (DNS record type) is MX. A smaller value indicates higher priority. You can specify a value from 0 to 50. If not specified, the default is 0.
 */
class CreateDnsRecordRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string DNS record name. If it is a Chinese, Korean, or Japanese domain name, it needs to be converted to punycode before input.
     */
    public $Name;

    /**
     * @var string DNS record type. Valid values: <li>A: point the domain to an external IPv4 address, for example 8.8.8.8;</li><li>AAAA: point the domain to an external IPv6 address;</li><li>MX: for email servers. If multiple MX records exist, a lower priority value indicates a higher priority;</li><li>CNAME: point the domain to another domain, which is then resolved to the final IP address;</li><li>TXT: identify and describe the domain, commonly used for domain verification and SPF records (anti-spam);</li><li>NS: if you need to use another DNS service provider to resolve a subdomain, an NS record needs to be added. An NS record cannot be added for the root domain;</li><li>CAA: specify the CA that can issue certificates for this site;</li><li>SRV: identify that a server uses a service, commonly used for directory management in Microsoft systems.</li>
Different record types, such as SRV and CAA records, have different requirements for the host record name and record value format. For detailed descriptions and format examples of each record type, see [DNS Record Type Introduction](https://www.tencentcloud.com/document/product/1552/90453?from_cn_redirect=1#2f681022-91ab-4a9e-ac3d-0a6c454d954e).
     */
    public $Type;

    /**
     * @var string DNS record content. Fill in the corresponding content based on the Type value. If it is a Chinese, Korean, or Japanese domain name, convert it to punycode before input.
     */
    public $Content;

    /**
     * @var string DNS record resolution route. If not specified, it defaults to Default, which means the default parsing route and takes effect in all regions.

-Resolution line configuration is applicable only when Type (DNS record type) is A, AAAA, or CNAME.
- Route parsing line configuration is applicable only to the standard and enterprise plans. For values, see [Resolution Routes and Corresponding Code Enumeration](https://www.tencentcloud.com/document/product/1552/112542?from_cn_redirect=1).
     */
    public $Location;

    /**
     * @var integer Cache time. You can specify a range of 60–86400. A smaller value means modification records take effect faster in each region. Default value: 300. Unit: seconds.
     */
    public $TTL;

    /**
     * @var integer DNS record weight. Users can specify a value range of -1 to 100. When set to 0, it means no parsing. If not specified, it defaults to -1, indicating no weight is set. Weight configuration is applicable only when Type (DNS record type) is A, AAAA, or CNAME.<br>Note: For different DNS records under the same subdomain and resolution route, set weight for all of them simultaneously or leave all of them unset.
     */
    public $Weight;

    /**
     * @var integer MX record priority. This parameter is valid only when Type (DNS record type) is MX. A smaller value indicates higher priority. You can specify a value from 0 to 50. If not specified, the default is 0.
     */
    public $Priority;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $Name DNS record name. If it is a Chinese, Korean, or Japanese domain name, it needs to be converted to punycode before input.
     * @param string $Type DNS record type. Valid values: <li>A: point the domain to an external IPv4 address, for example 8.8.8.8;</li><li>AAAA: point the domain to an external IPv6 address;</li><li>MX: for email servers. If multiple MX records exist, a lower priority value indicates a higher priority;</li><li>CNAME: point the domain to another domain, which is then resolved to the final IP address;</li><li>TXT: identify and describe the domain, commonly used for domain verification and SPF records (anti-spam);</li><li>NS: if you need to use another DNS service provider to resolve a subdomain, an NS record needs to be added. An NS record cannot be added for the root domain;</li><li>CAA: specify the CA that can issue certificates for this site;</li><li>SRV: identify that a server uses a service, commonly used for directory management in Microsoft systems.</li>
Different record types, such as SRV and CAA records, have different requirements for the host record name and record value format. For detailed descriptions and format examples of each record type, see [DNS Record Type Introduction](https://www.tencentcloud.com/document/product/1552/90453?from_cn_redirect=1#2f681022-91ab-4a9e-ac3d-0a6c454d954e).
     * @param string $Content DNS record content. Fill in the corresponding content based on the Type value. If it is a Chinese, Korean, or Japanese domain name, convert it to punycode before input.
     * @param string $Location DNS record resolution route. If not specified, it defaults to Default, which means the default parsing route and takes effect in all regions.

-Resolution line configuration is applicable only when Type (DNS record type) is A, AAAA, or CNAME.
- Route parsing line configuration is applicable only to the standard and enterprise plans. For values, see [Resolution Routes and Corresponding Code Enumeration](https://www.tencentcloud.com/document/product/1552/112542?from_cn_redirect=1).
     * @param integer $TTL Cache time. You can specify a range of 60–86400. A smaller value means modification records take effect faster in each region. Default value: 300. Unit: seconds.
     * @param integer $Weight DNS record weight. Users can specify a value range of -1 to 100. When set to 0, it means no parsing. If not specified, it defaults to -1, indicating no weight is set. Weight configuration is applicable only when Type (DNS record type) is A, AAAA, or CNAME.<br>Note: For different DNS records under the same subdomain and resolution route, set weight for all of them simultaneously or leave all of them unset.
     * @param integer $Priority MX record priority. This parameter is valid only when Type (DNS record type) is MX. A smaller value indicates higher priority. You can specify a value from 0 to 50. If not specified, the default is 0.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
