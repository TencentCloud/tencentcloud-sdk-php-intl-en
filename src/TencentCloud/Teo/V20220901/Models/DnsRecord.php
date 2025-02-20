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
 * @method string getZoneId() Obtain Zone id.<br>note: zoneid is for output parameter use only and cannot be used as an input parameter in modifydnsrecords. if this parameter is passed, it will be ignored.
 * @method void setZoneId(string $ZoneId) Set Zone id.<br>note: zoneid is for output parameter use only and cannot be used as an input parameter in modifydnsrecords. if this parameter is passed, it will be ignored.
 * @method string getRecordId() Obtain DNS record id.
 * @method void setRecordId(string $RecordId) Set DNS record id.
 * @method string getName() Obtain DNS record name.
 * @method void setName(string $Name) Set DNS record name.
 * @method string getType() Obtain DNS record type. valid values are:.
<Li>A: point the domain to a public network ipv4 address, such as 8.8.8.8;</li>.
<Li>AAAA: point the domain to a public network ipv6 address;</li>.
<Li>MX: used for email servers. when there are multiple mx records, the lower the priority, the higher the precedence;</li>.
<Li>CNAME: point the domain to another domain name, which will resolve to the final ip address;</li>.
<Li>TXT: identify and describe the domain, commonly used for domain verification and spf records (anti-spam);</li>.
<Li>NS: if you need to delegate the resolution of a subdomain to another dns service provider, you need to add an ns record. ns records cannot be added to the root domain name;</li>.
<Li>CAA: specifies the ca that can issue certificates for this site;</li>.
<Li>SRV: indicates that a server is using a service, commonly seen in microsoft system directory management.</li>.
 * @method void setType(string $Type) Set DNS record type. valid values are:.
<Li>A: point the domain to a public network ipv4 address, such as 8.8.8.8;</li>.
<Li>AAAA: point the domain to a public network ipv6 address;</li>.
<Li>MX: used for email servers. when there are multiple mx records, the lower the priority, the higher the precedence;</li>.
<Li>CNAME: point the domain to another domain name, which will resolve to the final ip address;</li>.
<Li>TXT: identify and describe the domain, commonly used for domain verification and spf records (anti-spam);</li>.
<Li>NS: if you need to delegate the resolution of a subdomain to another dns service provider, you need to add an ns record. ns records cannot be added to the root domain name;</li>.
<Li>CAA: specifies the ca that can issue certificates for this site;</li>.
<Li>SRV: indicates that a server is using a service, commonly seen in microsoft system directory management.</li>.
 * @method string getLocation() Obtain DNS record resolution route, if not specified, defaults to default, indicating the default resolution route, effective in all regions.<br>resolution route configuration only applies when type (dns record type) is a, aaaa, or cname.<br>for valid values, refer to: [resolution routes and corresponding code enumeration](https://intl.cloud.tencent.com/document/product/1552/112542?from_cn_redirect=1).
 * @method void setLocation(string $Location) Set DNS record resolution route, if not specified, defaults to default, indicating the default resolution route, effective in all regions.<br>resolution route configuration only applies when type (dns record type) is a, aaaa, or cname.<br>for valid values, refer to: [resolution routes and corresponding code enumeration](https://intl.cloud.tencent.com/document/product/1552/112542?from_cn_redirect=1).
 * @method string getContent() Obtain DNS record content. fill in the corresponding content based on the type value.
 * @method void setContent(string $Content) Set DNS record content. fill in the corresponding content based on the type value.
 * @method integer getTTL() Obtain Cache time. value range: 60–86400. the smaller the value, the faster the record modification will take effect globally. unit: seconds.
 * @method void setTTL(integer $TTL) Set Cache time. value range: 60–86400. the smaller the value, the faster the record modification will take effect globally. unit: seconds.
 * @method integer getWeight() Obtain DNS record weight. value range: -1–100. a value of -1 means no weight is assigned, and 0 means no parsing. weight configuration is only applicable when type (dns record type) is a, aaaa, or cname.
 * @method void setWeight(integer $Weight) Set DNS record weight. value range: -1–100. a value of -1 means no weight is assigned, and 0 means no parsing. weight configuration is only applicable when type (dns record type) is a, aaaa, or cname.
 * @method integer getPriority() Obtain MX record priority. value range: 0–50. the smaller the value, the higher the priority.
 * @method void setPriority(integer $Priority) Set MX record priority. value range: 0–50. the smaller the value, the higher the priority.
 * @method string getStatus() Obtain DNS record parsing status. valid values are: <li>enable: takes effect;</li><li>disable: disabled.</li> note: status is only used as an output parameter and cannot be used as an input parameter in modifydnsrecords. if this parameter is passed, it will be ignored.
 * @method void setStatus(string $Status) Set DNS record parsing status. valid values are: <li>enable: takes effect;</li><li>disable: disabled.</li> note: status is only used as an output parameter and cannot be used as an input parameter in modifydnsrecords. if this parameter is passed, it will be ignored.
 * @method string getCreatedOn() Obtain Creation time.<br>note: createdon is only used as an output parameter and cannot be used as an input parameter in modifydnsrecords. if this parameter is passed, it will be ignored.
 * @method void setCreatedOn(string $CreatedOn) Set Creation time.<br>note: createdon is only used as an output parameter and cannot be used as an input parameter in modifydnsrecords. if this parameter is passed, it will be ignored.
 * @method string getModifiedOn() Obtain Modification time.<br>note: modifiedon is for output parameter only and cannot be used as an input parameter in modifydnsrecords. if this parameter is passed, it will be ignored.
 * @method void setModifiedOn(string $ModifiedOn) Set Modification time.<br>note: modifiedon is for output parameter only and cannot be used as an input parameter in modifydnsrecords. if this parameter is passed, it will be ignored.
 */
class DnsRecord extends AbstractModel
{
    /**
     * @var string Zone id.<br>note: zoneid is for output parameter use only and cannot be used as an input parameter in modifydnsrecords. if this parameter is passed, it will be ignored.
     */
    public $ZoneId;

    /**
     * @var string DNS record id.
     */
    public $RecordId;

    /**
     * @var string DNS record name.
     */
    public $Name;

    /**
     * @var string DNS record type. valid values are:.
<Li>A: point the domain to a public network ipv4 address, such as 8.8.8.8;</li>.
<Li>AAAA: point the domain to a public network ipv6 address;</li>.
<Li>MX: used for email servers. when there are multiple mx records, the lower the priority, the higher the precedence;</li>.
<Li>CNAME: point the domain to another domain name, which will resolve to the final ip address;</li>.
<Li>TXT: identify and describe the domain, commonly used for domain verification and spf records (anti-spam);</li>.
<Li>NS: if you need to delegate the resolution of a subdomain to another dns service provider, you need to add an ns record. ns records cannot be added to the root domain name;</li>.
<Li>CAA: specifies the ca that can issue certificates for this site;</li>.
<Li>SRV: indicates that a server is using a service, commonly seen in microsoft system directory management.</li>.
     */
    public $Type;

    /**
     * @var string DNS record resolution route, if not specified, defaults to default, indicating the default resolution route, effective in all regions.<br>resolution route configuration only applies when type (dns record type) is a, aaaa, or cname.<br>for valid values, refer to: [resolution routes and corresponding code enumeration](https://intl.cloud.tencent.com/document/product/1552/112542?from_cn_redirect=1).
     */
    public $Location;

    /**
     * @var string DNS record content. fill in the corresponding content based on the type value.
     */
    public $Content;

    /**
     * @var integer Cache time. value range: 60–86400. the smaller the value, the faster the record modification will take effect globally. unit: seconds.
     */
    public $TTL;

    /**
     * @var integer DNS record weight. value range: -1–100. a value of -1 means no weight is assigned, and 0 means no parsing. weight configuration is only applicable when type (dns record type) is a, aaaa, or cname.
     */
    public $Weight;

    /**
     * @var integer MX record priority. value range: 0–50. the smaller the value, the higher the priority.
     */
    public $Priority;

    /**
     * @var string DNS record parsing status. valid values are: <li>enable: takes effect;</li><li>disable: disabled.</li> note: status is only used as an output parameter and cannot be used as an input parameter in modifydnsrecords. if this parameter is passed, it will be ignored.
     */
    public $Status;

    /**
     * @var string Creation time.<br>note: createdon is only used as an output parameter and cannot be used as an input parameter in modifydnsrecords. if this parameter is passed, it will be ignored.
     */
    public $CreatedOn;

    /**
     * @var string Modification time.<br>note: modifiedon is for output parameter only and cannot be used as an input parameter in modifydnsrecords. if this parameter is passed, it will be ignored.
     */
    public $ModifiedOn;

    /**
     * @param string $ZoneId Zone id.<br>note: zoneid is for output parameter use only and cannot be used as an input parameter in modifydnsrecords. if this parameter is passed, it will be ignored.
     * @param string $RecordId DNS record id.
     * @param string $Name DNS record name.
     * @param string $Type DNS record type. valid values are:.
<Li>A: point the domain to a public network ipv4 address, such as 8.8.8.8;</li>.
<Li>AAAA: point the domain to a public network ipv6 address;</li>.
<Li>MX: used for email servers. when there are multiple mx records, the lower the priority, the higher the precedence;</li>.
<Li>CNAME: point the domain to another domain name, which will resolve to the final ip address;</li>.
<Li>TXT: identify and describe the domain, commonly used for domain verification and spf records (anti-spam);</li>.
<Li>NS: if you need to delegate the resolution of a subdomain to another dns service provider, you need to add an ns record. ns records cannot be added to the root domain name;</li>.
<Li>CAA: specifies the ca that can issue certificates for this site;</li>.
<Li>SRV: indicates that a server is using a service, commonly seen in microsoft system directory management.</li>.
     * @param string $Location DNS record resolution route, if not specified, defaults to default, indicating the default resolution route, effective in all regions.<br>resolution route configuration only applies when type (dns record type) is a, aaaa, or cname.<br>for valid values, refer to: [resolution routes and corresponding code enumeration](https://intl.cloud.tencent.com/document/product/1552/112542?from_cn_redirect=1).
     * @param string $Content DNS record content. fill in the corresponding content based on the type value.
     * @param integer $TTL Cache time. value range: 60–86400. the smaller the value, the faster the record modification will take effect globally. unit: seconds.
     * @param integer $Weight DNS record weight. value range: -1–100. a value of -1 means no weight is assigned, and 0 means no parsing. weight configuration is only applicable when type (dns record type) is a, aaaa, or cname.
     * @param integer $Priority MX record priority. value range: 0–50. the smaller the value, the higher the priority.
     * @param string $Status DNS record parsing status. valid values are: <li>enable: takes effect;</li><li>disable: disabled.</li> note: status is only used as an output parameter and cannot be used as an input parameter in modifydnsrecords. if this parameter is passed, it will be ignored.
     * @param string $CreatedOn Creation time.<br>note: createdon is only used as an output parameter and cannot be used as an input parameter in modifydnsrecords. if this parameter is passed, it will be ignored.
     * @param string $ModifiedOn Modification time.<br>note: modifiedon is for output parameter only and cannot be used as an input parameter in modifydnsrecords. if this parameter is passed, it will be ignored.
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
