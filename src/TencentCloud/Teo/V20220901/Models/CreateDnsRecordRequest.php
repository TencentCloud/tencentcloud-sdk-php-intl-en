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
 * @method string getZoneId() Obtain Zone id.
 * @method void setZoneId(string $ZoneId) Set Zone id.
 * @method string getName() Obtain DNS record name. if the domain name is in chinese, korean, or japanese, it needs to be converted to punycode before input.
 * @method void setName(string $Name) Set DNS record name. if the domain name is in chinese, korean, or japanese, it needs to be converted to punycode before input.
 * @method string getType() Obtain DNS record type. valid values are: <li>a: points the domain name to an external ipv4 address, such as 8.8.8.8;</li><li>aaaa: points the domain name to an external ipv6 address;</li><li>mx: used for email servers. when there are multiple mx records, the lower the priority value, the higher the priority;</li><li>cname: points the domain name to another domain name, which then resolves to the final ip address;</li><li>txt: identifies and describes the domain name, commonly used for domain verification and spf records (anti-spam);</li><li>ns: if you need to delegate the subdomain to another dns service provider for resolution, you need to add an ns record. the root domain cannot add ns records;</li><li>caa: specifies the ca that can issue certificates for this site;</li><li>srv: identifies a server using a service, commonly used in microsoft's directory management.</li>.
Different record types, such as srv and caa records, have different requirements for host record names and record value formats. for detailed descriptions and format examples of each record type, please refer to: [introduction to dns record types](https://intl.cloud.tencent.com/document/product/1552/90453?from_cn_redirect=1#2f681022-91ab-4a9e-ac3d-0a6c454d954e).
 * @method void setType(string $Type) Set DNS record type. valid values are: <li>a: points the domain name to an external ipv4 address, such as 8.8.8.8;</li><li>aaaa: points the domain name to an external ipv6 address;</li><li>mx: used for email servers. when there are multiple mx records, the lower the priority value, the higher the priority;</li><li>cname: points the domain name to another domain name, which then resolves to the final ip address;</li><li>txt: identifies and describes the domain name, commonly used for domain verification and spf records (anti-spam);</li><li>ns: if you need to delegate the subdomain to another dns service provider for resolution, you need to add an ns record. the root domain cannot add ns records;</li><li>caa: specifies the ca that can issue certificates for this site;</li><li>srv: identifies a server using a service, commonly used in microsoft's directory management.</li>.
Different record types, such as srv and caa records, have different requirements for host record names and record value formats. for detailed descriptions and format examples of each record type, please refer to: [introduction to dns record types](https://intl.cloud.tencent.com/document/product/1552/90453?from_cn_redirect=1#2f681022-91ab-4a9e-ac3d-0a6c454d954e).
 * @method string getContent() Obtain DNS record content. fill in the corresponding content according to the type value. if the domain name is in chinese, korean, or japanese, it needs to be converted to punycode before input.
 * @method void setContent(string $Content) Set DNS record content. fill in the corresponding content according to the type value. if the domain name is in chinese, korean, or japanese, it needs to be converted to punycode before input.
 * @method string getLocation() Obtain DNS record resolution route. if not specified, the default is default, which means the default resolution route and is effective in all regions.

- resolution route configuration is only applicable when type (dns record type) is a, aaaa, or cname.
- resolution route configuration is only applicable to standard version and enterprise edition packages. for valid values, please refer to: [resolution routes and corresponding code enumeration](https://intl.cloud.tencent.com/document/product/1552/112542?from_cn_redirect=1).
 * @method void setLocation(string $Location) Set DNS record resolution route. if not specified, the default is default, which means the default resolution route and is effective in all regions.

- resolution route configuration is only applicable when type (dns record type) is a, aaaa, or cname.
- resolution route configuration is only applicable to standard version and enterprise edition packages. for valid values, please refer to: [resolution routes and corresponding code enumeration](https://intl.cloud.tencent.com/document/product/1552/112542?from_cn_redirect=1).
 * @method integer getTTL() Obtain Cache time. users can specify a value range of 60-86400. the smaller the value, the faster the modification records will take effect in all regions. default value: 300. unit: seconds.
 * @method void setTTL(integer $TTL) Set Cache time. users can specify a value range of 60-86400. the smaller the value, the faster the modification records will take effect in all regions. default value: 300. unit: seconds.
 * @method integer getWeight() Obtain DNS record weight. users can specify a value range of -1 to 100. a value of 0 means no resolution. if not specified, the default is -1, which means no weight is set. weight configuration is only applicable when type (dns record type) is a, aaaa, or cname.<br>note: for the same subdomain, different dns records with the same resolution route should either all have weights set or none have weights set.
 * @method void setWeight(integer $Weight) Set DNS record weight. users can specify a value range of -1 to 100. a value of 0 means no resolution. if not specified, the default is -1, which means no weight is set. weight configuration is only applicable when type (dns record type) is a, aaaa, or cname.<br>note: for the same subdomain, different dns records with the same resolution route should either all have weights set or none have weights set.
 * @method integer getPriority() Obtain MX record priority, which takes effect only when type (dns record type) is mx. the smaller the value, the higher the priority. users can specify a value range of 0–50. the default value is 0 if not specified.
 * @method void setPriority(integer $Priority) Set MX record priority, which takes effect only when type (dns record type) is mx. the smaller the value, the higher the priority. users can specify a value range of 0–50. the default value is 0 if not specified.
 */
class CreateDnsRecordRequest extends AbstractModel
{
    /**
     * @var string Zone id.
     */
    public $ZoneId;

    /**
     * @var string DNS record name. if the domain name is in chinese, korean, or japanese, it needs to be converted to punycode before input.
     */
    public $Name;

    /**
     * @var string DNS record type. valid values are: <li>a: points the domain name to an external ipv4 address, such as 8.8.8.8;</li><li>aaaa: points the domain name to an external ipv6 address;</li><li>mx: used for email servers. when there are multiple mx records, the lower the priority value, the higher the priority;</li><li>cname: points the domain name to another domain name, which then resolves to the final ip address;</li><li>txt: identifies and describes the domain name, commonly used for domain verification and spf records (anti-spam);</li><li>ns: if you need to delegate the subdomain to another dns service provider for resolution, you need to add an ns record. the root domain cannot add ns records;</li><li>caa: specifies the ca that can issue certificates for this site;</li><li>srv: identifies a server using a service, commonly used in microsoft's directory management.</li>.
Different record types, such as srv and caa records, have different requirements for host record names and record value formats. for detailed descriptions and format examples of each record type, please refer to: [introduction to dns record types](https://intl.cloud.tencent.com/document/product/1552/90453?from_cn_redirect=1#2f681022-91ab-4a9e-ac3d-0a6c454d954e).
     */
    public $Type;

    /**
     * @var string DNS record content. fill in the corresponding content according to the type value. if the domain name is in chinese, korean, or japanese, it needs to be converted to punycode before input.
     */
    public $Content;

    /**
     * @var string DNS record resolution route. if not specified, the default is default, which means the default resolution route and is effective in all regions.

- resolution route configuration is only applicable when type (dns record type) is a, aaaa, or cname.
- resolution route configuration is only applicable to standard version and enterprise edition packages. for valid values, please refer to: [resolution routes and corresponding code enumeration](https://intl.cloud.tencent.com/document/product/1552/112542?from_cn_redirect=1).
     */
    public $Location;

    /**
     * @var integer Cache time. users can specify a value range of 60-86400. the smaller the value, the faster the modification records will take effect in all regions. default value: 300. unit: seconds.
     */
    public $TTL;

    /**
     * @var integer DNS record weight. users can specify a value range of -1 to 100. a value of 0 means no resolution. if not specified, the default is -1, which means no weight is set. weight configuration is only applicable when type (dns record type) is a, aaaa, or cname.<br>note: for the same subdomain, different dns records with the same resolution route should either all have weights set or none have weights set.
     */
    public $Weight;

    /**
     * @var integer MX record priority, which takes effect only when type (dns record type) is mx. the smaller the value, the higher the priority. users can specify a value range of 0–50. the default value is 0 if not specified.
     */
    public $Priority;

    /**
     * @param string $ZoneId Zone id.
     * @param string $Name DNS record name. if the domain name is in chinese, korean, or japanese, it needs to be converted to punycode before input.
     * @param string $Type DNS record type. valid values are: <li>a: points the domain name to an external ipv4 address, such as 8.8.8.8;</li><li>aaaa: points the domain name to an external ipv6 address;</li><li>mx: used for email servers. when there are multiple mx records, the lower the priority value, the higher the priority;</li><li>cname: points the domain name to another domain name, which then resolves to the final ip address;</li><li>txt: identifies and describes the domain name, commonly used for domain verification and spf records (anti-spam);</li><li>ns: if you need to delegate the subdomain to another dns service provider for resolution, you need to add an ns record. the root domain cannot add ns records;</li><li>caa: specifies the ca that can issue certificates for this site;</li><li>srv: identifies a server using a service, commonly used in microsoft's directory management.</li>.
Different record types, such as srv and caa records, have different requirements for host record names and record value formats. for detailed descriptions and format examples of each record type, please refer to: [introduction to dns record types](https://intl.cloud.tencent.com/document/product/1552/90453?from_cn_redirect=1#2f681022-91ab-4a9e-ac3d-0a6c454d954e).
     * @param string $Content DNS record content. fill in the corresponding content according to the type value. if the domain name is in chinese, korean, or japanese, it needs to be converted to punycode before input.
     * @param string $Location DNS record resolution route. if not specified, the default is default, which means the default resolution route and is effective in all regions.

- resolution route configuration is only applicable when type (dns record type) is a, aaaa, or cname.
- resolution route configuration is only applicable to standard version and enterprise edition packages. for valid values, please refer to: [resolution routes and corresponding code enumeration](https://intl.cloud.tencent.com/document/product/1552/112542?from_cn_redirect=1).
     * @param integer $TTL Cache time. users can specify a value range of 60-86400. the smaller the value, the faster the modification records will take effect in all regions. default value: 300. unit: seconds.
     * @param integer $Weight DNS record weight. users can specify a value range of -1 to 100. a value of 0 means no resolution. if not specified, the default is -1, which means no weight is set. weight configuration is only applicable when type (dns record type) is a, aaaa, or cname.<br>note: for the same subdomain, different dns records with the same resolution route should either all have weights set or none have weights set.
     * @param integer $Priority MX record priority, which takes effect only when type (dns record type) is mx. the smaller the value, the higher the priority. users can specify a value range of 0–50. the default value is 0 if not specified.
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
