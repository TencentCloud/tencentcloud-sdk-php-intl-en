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
 * DNS record.
 *
 * @method string getZoneId() Obtain Site ID.<br>Note: ZoneId is for output usage only. It cannot be used as an input parameter in ModifyDnsRecords. If this parameter is input, it will be ignored.
 * @method void setZoneId(string $ZoneId) Set Site ID.<br>Note: ZoneId is for output usage only. It cannot be used as an input parameter in ModifyDnsRecords. If this parameter is input, it will be ignored.
 * @method string getRecordId() Obtain DNS record ID.
 * @method void setRecordId(string $RecordId) Set DNS record ID.
 * @method string getName() Obtain DNS record name.
 * @method void setName(string $Name) Set DNS record name.
 * @method string getType() Obtain DNS record type. Valid values:
<li>A: Point the domain name to a public IPv4 address, for example 8.8.8.8;</li>
<li>AAAA: point the domain name to a public IPv6 address;</li>
<li>MX: for email servers. When multiple MX records exist, lower priority means higher preference;</li>
<li>CNAME: Point the domain to another domain, which then resolves the final IP;</li>
<li>TXT: Identifies and describes a domain name, commonly used for domain name verification and SPF records (anti-spam);</li>
<li>NS: If you need to delegate subdomain resolution to another DNS service provider, you need to add an NS record. NS records cannot be added for the root domain;</li>
<li>CAA: specify the CA that can issue certificates for this site;</li>
<li>SRV: identifies that a server used a service, commonly seen in directory management of Microsoft systems.</li>
 * @method void setType(string $Type) Set DNS record type. Valid values:
<li>A: Point the domain name to a public IPv4 address, for example 8.8.8.8;</li>
<li>AAAA: point the domain name to a public IPv6 address;</li>
<li>MX: for email servers. When multiple MX records exist, lower priority means higher preference;</li>
<li>CNAME: Point the domain to another domain, which then resolves the final IP;</li>
<li>TXT: Identifies and describes a domain name, commonly used for domain name verification and SPF records (anti-spam);</li>
<li>NS: If you need to delegate subdomain resolution to another DNS service provider, you need to add an NS record. NS records cannot be added for the root domain;</li>
<li>CAA: specify the CA that can issue certificates for this site;</li>
<li>SRV: identifies that a server used a service, commonly seen in directory management of Microsoft systems.</li>
 * @method string getLocation() Obtain DNS record resolution route. If not specified, it defaults to Default, which means the default resolution route and represents that it takes effect in all regions.<br>Route configuration is applicable only when Type (DNS record type) is A, AAAA, or CNAME.<br>For values, see [Resolution routes and corresponding code enumeration](https://www.tencentcloud.com/document/product/1552/112542?from_cn_redirect=1).
 * @method void setLocation(string $Location) Set DNS record resolution route. If not specified, it defaults to Default, which means the default resolution route and represents that it takes effect in all regions.<br>Route configuration is applicable only when Type (DNS record type) is A, AAAA, or CNAME.<br>For values, see [Resolution routes and corresponding code enumeration](https://www.tencentcloud.com/document/product/1552/112542?from_cn_redirect=1).
 * @method string getContent() Obtain DNS record content. Fill in the corresponding content based on the Type value.
 * @method void setContent(string $Content) Set DNS record content. Fill in the corresponding content based on the Type value.
 * @method integer getTTL() Obtain Cache time. Value range: 60–86400. A smaller value means the modification record takes effect faster in each region. Unit: seconds.
 * @method void setTTL(integer $TTL) Set Cache time. Value range: 60–86400. A smaller value means the modification record takes effect faster in each region. Unit: seconds.
 * @method integer getWeight() Obtain DNS record weight. Value range: -1 to 100. -1 means no weight is assigned, and 0 indicates no parsing. Weight configuration is applicable only when Type (DNS record type) is A, AAAA, or CNAME.
 * @method void setWeight(integer $Weight) Set DNS record weight. Value range: -1 to 100. -1 means no weight is assigned, and 0 indicates no parsing. Weight configuration is applicable only when Type (DNS record type) is A, AAAA, or CNAME.
 * @method integer getPriority() Obtain MX record priority. Value range: 0–50. A smaller value indicates a higher priority.
 * @method void setPriority(integer $Priority) Set MX record priority. Value range: 0–50. A smaller value indicates a higher priority.
 * @method string getStatus() Obtain DNS record resolution status. Valid values: <li>enable: effective;</li><li>disable: disabled.</li>Note: Status is for output only. It cannot be used as an input parameter in ModifyDnsRecords and will be ignored if provided.
 * @method void setStatus(string $Status) Set DNS record resolution status. Valid values: <li>enable: effective;</li><li>disable: disabled.</li>Note: Status is for output only. It cannot be used as an input parameter in ModifyDnsRecords and will be ignored if provided.
 * @method string getCreatedOn() Obtain Creation time.<br>Note: CreatedOn is for output only and cannot be used as an input parameter in ModifyDnsRecords. If this parameter is input, it will be ignored.
 * @method void setCreatedOn(string $CreatedOn) Set Creation time.<br>Note: CreatedOn is for output only and cannot be used as an input parameter in ModifyDnsRecords. If this parameter is input, it will be ignored.
 * @method string getModifiedOn() Obtain Last modified.<br>Note: ModifiedOn is for output only and cannot be used as an input parameter in ModifyDnsRecords. If this parameter is input, it will be ignored.
 * @method void setModifiedOn(string $ModifiedOn) Set Last modified.<br>Note: ModifiedOn is for output only and cannot be used as an input parameter in ModifyDnsRecords. If this parameter is input, it will be ignored.
 */
class DnsRecord extends AbstractModel
{
    /**
     * @var string Site ID.<br>Note: ZoneId is for output usage only. It cannot be used as an input parameter in ModifyDnsRecords. If this parameter is input, it will be ignored.
     */
    public $ZoneId;

    /**
     * @var string DNS record ID.
     */
    public $RecordId;

    /**
     * @var string DNS record name.
     */
    public $Name;

    /**
     * @var string DNS record type. Valid values:
<li>A: Point the domain name to a public IPv4 address, for example 8.8.8.8;</li>
<li>AAAA: point the domain name to a public IPv6 address;</li>
<li>MX: for email servers. When multiple MX records exist, lower priority means higher preference;</li>
<li>CNAME: Point the domain to another domain, which then resolves the final IP;</li>
<li>TXT: Identifies and describes a domain name, commonly used for domain name verification and SPF records (anti-spam);</li>
<li>NS: If you need to delegate subdomain resolution to another DNS service provider, you need to add an NS record. NS records cannot be added for the root domain;</li>
<li>CAA: specify the CA that can issue certificates for this site;</li>
<li>SRV: identifies that a server used a service, commonly seen in directory management of Microsoft systems.</li>
     */
    public $Type;

    /**
     * @var string DNS record resolution route. If not specified, it defaults to Default, which means the default resolution route and represents that it takes effect in all regions.<br>Route configuration is applicable only when Type (DNS record type) is A, AAAA, or CNAME.<br>For values, see [Resolution routes and corresponding code enumeration](https://www.tencentcloud.com/document/product/1552/112542?from_cn_redirect=1).
     */
    public $Location;

    /**
     * @var string DNS record content. Fill in the corresponding content based on the Type value.
     */
    public $Content;

    /**
     * @var integer Cache time. Value range: 60–86400. A smaller value means the modification record takes effect faster in each region. Unit: seconds.
     */
    public $TTL;

    /**
     * @var integer DNS record weight. Value range: -1 to 100. -1 means no weight is assigned, and 0 indicates no parsing. Weight configuration is applicable only when Type (DNS record type) is A, AAAA, or CNAME.
     */
    public $Weight;

    /**
     * @var integer MX record priority. Value range: 0–50. A smaller value indicates a higher priority.
     */
    public $Priority;

    /**
     * @var string DNS record resolution status. Valid values: <li>enable: effective;</li><li>disable: disabled.</li>Note: Status is for output only. It cannot be used as an input parameter in ModifyDnsRecords and will be ignored if provided.
     */
    public $Status;

    /**
     * @var string Creation time.<br>Note: CreatedOn is for output only and cannot be used as an input parameter in ModifyDnsRecords. If this parameter is input, it will be ignored.
     */
    public $CreatedOn;

    /**
     * @var string Last modified.<br>Note: ModifiedOn is for output only and cannot be used as an input parameter in ModifyDnsRecords. If this parameter is input, it will be ignored.
     */
    public $ModifiedOn;

    /**
     * @param string $ZoneId Site ID.<br>Note: ZoneId is for output usage only. It cannot be used as an input parameter in ModifyDnsRecords. If this parameter is input, it will be ignored.
     * @param string $RecordId DNS record ID.
     * @param string $Name DNS record name.
     * @param string $Type DNS record type. Valid values:
<li>A: Point the domain name to a public IPv4 address, for example 8.8.8.8;</li>
<li>AAAA: point the domain name to a public IPv6 address;</li>
<li>MX: for email servers. When multiple MX records exist, lower priority means higher preference;</li>
<li>CNAME: Point the domain to another domain, which then resolves the final IP;</li>
<li>TXT: Identifies and describes a domain name, commonly used for domain name verification and SPF records (anti-spam);</li>
<li>NS: If you need to delegate subdomain resolution to another DNS service provider, you need to add an NS record. NS records cannot be added for the root domain;</li>
<li>CAA: specify the CA that can issue certificates for this site;</li>
<li>SRV: identifies that a server used a service, commonly seen in directory management of Microsoft systems.</li>
     * @param string $Location DNS record resolution route. If not specified, it defaults to Default, which means the default resolution route and represents that it takes effect in all regions.<br>Route configuration is applicable only when Type (DNS record type) is A, AAAA, or CNAME.<br>For values, see [Resolution routes and corresponding code enumeration](https://www.tencentcloud.com/document/product/1552/112542?from_cn_redirect=1).
     * @param string $Content DNS record content. Fill in the corresponding content based on the Type value.
     * @param integer $TTL Cache time. Value range: 60–86400. A smaller value means the modification record takes effect faster in each region. Unit: seconds.
     * @param integer $Weight DNS record weight. Value range: -1 to 100. -1 means no weight is assigned, and 0 indicates no parsing. Weight configuration is applicable only when Type (DNS record type) is A, AAAA, or CNAME.
     * @param integer $Priority MX record priority. Value range: 0–50. A smaller value indicates a higher priority.
     * @param string $Status DNS record resolution status. Valid values: <li>enable: effective;</li><li>disable: disabled.</li>Note: Status is for output only. It cannot be used as an input parameter in ModifyDnsRecords and will be ignored if provided.
     * @param string $CreatedOn Creation time.<br>Note: CreatedOn is for output only and cannot be used as an input parameter in ModifyDnsRecords. If this parameter is input, it will be ignored.
     * @param string $ModifiedOn Last modified.<br>Note: ModifiedOn is for output only and cannot be used as an input parameter in ModifyDnsRecords. If this parameter is input, it will be ignored.
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

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }
    }
}
