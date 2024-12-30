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
 * @method string getName() Obtain The DNS record name.If the domain name is in Chinese, Korean, or Japanese, it needs to be converted to Punycode before being entered.
 * @method void setName(string $Name) Set The DNS record name.If the domain name is in Chinese, Korean, or Japanese, it needs to be converted to Punycode before being entered.
 * @method string getType() Obtain DNS record types include:

- A:Points the domain to an external IPv4 address, such as 8.8.8.8.
- AAAA: Points the domain to an external IPv6 address.
- MX: Used for mail servers. When multiple MX records exist, the one with the lowest priority value is preferred.
- CNAME: Points the domain to another domain, which then resolves to the final IP address.
- TXT: Provides identification and description for the domain, commonly used for domain verification and SPF records (anti-spam).
- NS: If you need to delegate a subdomain to another DNS service provider, you need to add an NS record. NS records cannot be added to the root domain.
- CAA: Specifies which Certificate Authorities (CAs) are allowed to issue certificates for the site.
- SRV: Indicates that a specific server is using a particular service, commonly used in Microsoft's directory management systems.

Different record types, such as SRV and CAA, have specific requirements for the host record name and record value format. For detailed descriptions and format examples of each record type, please refer to: [Introduction to DNS Record Types](https://www.tencentcloud.com/zh/document/product/1145/54764#2f681022-91ab-4a9e-ac3d-0a6c454d954e).
 * @method void setType(string $Type) Set DNS record types include:

- A:Points the domain to an external IPv4 address, such as 8.8.8.8.
- AAAA: Points the domain to an external IPv6 address.
- MX: Used for mail servers. When multiple MX records exist, the one with the lowest priority value is preferred.
- CNAME: Points the domain to another domain, which then resolves to the final IP address.
- TXT: Provides identification and description for the domain, commonly used for domain verification and SPF records (anti-spam).
- NS: If you need to delegate a subdomain to another DNS service provider, you need to add an NS record. NS records cannot be added to the root domain.
- CAA: Specifies which Certificate Authorities (CAs) are allowed to issue certificates for the site.
- SRV: Indicates that a specific server is using a particular service, commonly used in Microsoft's directory management systems.

Different record types, such as SRV and CAA, have specific requirements for the host record name and record value format. For detailed descriptions and format examples of each record type, please refer to: [Introduction to DNS Record Types](https://www.tencentcloud.com/zh/document/product/1145/54764#2f681022-91ab-4a9e-ac3d-0a6c454d954e).
 * @method string getContent() Obtain DNS record content should be filled in according to the corresponding Type value. If the domain name is in Chinese, Korean, or Japanese, it needs to be converted to Punycode before being entered.
 * @method void setContent(string $Content) Set DNS record content should be filled in according to the corresponding Type value. If the domain name is in Chinese, Korean, or Japanese, it needs to be converted to Punycode before being entered.
 * @method string getLocation() Obtain DNS record resolution location, if not specified, default to "Default," which means the default resolution location and is effective for all regions.
- Resolution location configuration is only applicable when the Type (DNS record type) is A, AAAA, or CNAME.
- Resolution location configuration is only available for Standard and Enterprise packages.

For the values, please refer to: [Resolution Lines and Corresponding Codes Enumeration](https://www.tencentcloud.com/zh/document/product/1145/67229).
 * @method void setLocation(string $Location) Set DNS record resolution location, if not specified, default to "Default," which means the default resolution location and is effective for all regions.
- Resolution location configuration is only applicable when the Type (DNS record type) is A, AAAA, or CNAME.
- Resolution location configuration is only available for Standard and Enterprise packages.

For the values, please refer to: [Resolution Lines and Corresponding Codes Enumeration](https://www.tencentcloud.com/zh/document/product/1145/67229).
 * @method integer getTTL() Obtain TTL (in seconds). The smaller the value, the faster the record changes take effect. Default value: 300
 * @method void setTTL(integer $TTL) Set TTL (in seconds). The smaller the value, the faster the record changes take effect. Default value: 300
 * @method integer getWeight() Obtain DNS record weight can be specified within the range of -1 to 100. Setting the weight to 0 means the record will not be resolved. If not specified, the default value is -1, indicating that no weight is set.

Weight configuration is only applicable when the Type (DNS record type) is A, AAAA, or CNAME.

Note: For the same subdomain, different DNS records on the same resolution line should either all have weights set or none should have weights set.
 * @method void setWeight(integer $Weight) Set DNS record weight can be specified within the range of -1 to 100. Setting the weight to 0 means the record will not be resolved. If not specified, the default value is -1, indicating that no weight is set.

Weight configuration is only applicable when the Type (DNS record type) is A, AAAA, or CNAME.

Note: For the same subdomain, different DNS records on the same resolution line should either all have weights set or none should have weights set.
 * @method integer getPriority() Obtain The MX record priority parameter is only effective when the Type (DNS record type) is MX. The smaller the value, the higher the priority. Users can specify a value in the range of 0 to 50. If not specified, the default value is 0.
 * @method void setPriority(integer $Priority) Set The MX record priority parameter is only effective when the Type (DNS record type) is MX. The smaller the value, the higher the priority. Users can specify a value in the range of 0 to 50. If not specified, the default value is 0.
 */
class CreateDnsRecordRequest extends AbstractModel
{
    /**
     * @var string The site ID of the DNS record.
     */
    public $ZoneId;

    /**
     * @var string The DNS record name.If the domain name is in Chinese, Korean, or Japanese, it needs to be converted to Punycode before being entered.
     */
    public $Name;

    /**
     * @var string DNS record types include:

- A:Points the domain to an external IPv4 address, such as 8.8.8.8.
- AAAA: Points the domain to an external IPv6 address.
- MX: Used for mail servers. When multiple MX records exist, the one with the lowest priority value is preferred.
- CNAME: Points the domain to another domain, which then resolves to the final IP address.
- TXT: Provides identification and description for the domain, commonly used for domain verification and SPF records (anti-spam).
- NS: If you need to delegate a subdomain to another DNS service provider, you need to add an NS record. NS records cannot be added to the root domain.
- CAA: Specifies which Certificate Authorities (CAs) are allowed to issue certificates for the site.
- SRV: Indicates that a specific server is using a particular service, commonly used in Microsoft's directory management systems.

Different record types, such as SRV and CAA, have specific requirements for the host record name and record value format. For detailed descriptions and format examples of each record type, please refer to: [Introduction to DNS Record Types](https://www.tencentcloud.com/zh/document/product/1145/54764#2f681022-91ab-4a9e-ac3d-0a6c454d954e).
     */
    public $Type;

    /**
     * @var string DNS record content should be filled in according to the corresponding Type value. If the domain name is in Chinese, Korean, or Japanese, it needs to be converted to Punycode before being entered.
     */
    public $Content;

    /**
     * @var string DNS record resolution location, if not specified, default to "Default," which means the default resolution location and is effective for all regions.
- Resolution location configuration is only applicable when the Type (DNS record type) is A, AAAA, or CNAME.
- Resolution location configuration is only available for Standard and Enterprise packages.

For the values, please refer to: [Resolution Lines and Corresponding Codes Enumeration](https://www.tencentcloud.com/zh/document/product/1145/67229).
     */
    public $Location;

    /**
     * @var integer TTL (in seconds). The smaller the value, the faster the record changes take effect. Default value: 300
     */
    public $TTL;

    /**
     * @var integer DNS record weight can be specified within the range of -1 to 100. Setting the weight to 0 means the record will not be resolved. If not specified, the default value is -1, indicating that no weight is set.

Weight configuration is only applicable when the Type (DNS record type) is A, AAAA, or CNAME.

Note: For the same subdomain, different DNS records on the same resolution line should either all have weights set or none should have weights set.
     */
    public $Weight;

    /**
     * @var integer The MX record priority parameter is only effective when the Type (DNS record type) is MX. The smaller the value, the higher the priority. Users can specify a value in the range of 0 to 50. If not specified, the default value is 0.
     */
    public $Priority;

    /**
     * @param string $ZoneId The site ID of the DNS record.
     * @param string $Name The DNS record name.If the domain name is in Chinese, Korean, or Japanese, it needs to be converted to Punycode before being entered.
     * @param string $Type DNS record types include:

- A:Points the domain to an external IPv4 address, such as 8.8.8.8.
- AAAA: Points the domain to an external IPv6 address.
- MX: Used for mail servers. When multiple MX records exist, the one with the lowest priority value is preferred.
- CNAME: Points the domain to another domain, which then resolves to the final IP address.
- TXT: Provides identification and description for the domain, commonly used for domain verification and SPF records (anti-spam).
- NS: If you need to delegate a subdomain to another DNS service provider, you need to add an NS record. NS records cannot be added to the root domain.
- CAA: Specifies which Certificate Authorities (CAs) are allowed to issue certificates for the site.
- SRV: Indicates that a specific server is using a particular service, commonly used in Microsoft's directory management systems.

Different record types, such as SRV and CAA, have specific requirements for the host record name and record value format. For detailed descriptions and format examples of each record type, please refer to: [Introduction to DNS Record Types](https://www.tencentcloud.com/zh/document/product/1145/54764#2f681022-91ab-4a9e-ac3d-0a6c454d954e).
     * @param string $Content DNS record content should be filled in according to the corresponding Type value. If the domain name is in Chinese, Korean, or Japanese, it needs to be converted to Punycode before being entered.
     * @param string $Location DNS record resolution location, if not specified, default to "Default," which means the default resolution location and is effective for all regions.
- Resolution location configuration is only applicable when the Type (DNS record type) is A, AAAA, or CNAME.
- Resolution location configuration is only available for Standard and Enterprise packages.

For the values, please refer to: [Resolution Lines and Corresponding Codes Enumeration](https://www.tencentcloud.com/zh/document/product/1145/67229).
     * @param integer $TTL TTL (in seconds). The smaller the value, the faster the record changes take effect. Default value: 300
     * @param integer $Weight DNS record weight can be specified within the range of -1 to 100. Setting the weight to 0 means the record will not be resolved. If not specified, the default value is -1, indicating that no weight is set.

Weight configuration is only applicable when the Type (DNS record type) is A, AAAA, or CNAME.

Note: For the same subdomain, different DNS records on the same resolution line should either all have weights set or none should have weights set.
     * @param integer $Priority The MX record priority parameter is only effective when the Type (DNS record type) is MX. The smaller the value, the higher the priority. Users can specify a value in the range of 0 to 50. If not specified, the default value is 0.
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
