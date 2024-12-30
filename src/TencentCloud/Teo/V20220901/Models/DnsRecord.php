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
 * @method string getZoneId() Obtain Site ID. 
Note: ZoneId is only used as an output parameter and cannot be used as an input parameter in ModifyDnsRecords. If this parameter is passed, it will be ignored.
 * @method void setZoneId(string $ZoneId) Set Site ID. 
Note: ZoneId is only used as an output parameter and cannot be used as an input parameter in ModifyDnsRecords. If this parameter is passed, it will be ignored.
 * @method string getRecordId() Obtain DNS record ID.
 * @method void setRecordId(string $RecordId) Set DNS record ID.
 * @method string getName() Obtain DNS record name.
 * @method void setName(string $Name) Set DNS record name.
 * @method string getType() Obtain DNS record type, with possible values: <li>A: Points the domain name to an external IPv4 address, such as 8.8.8.8;</li> <li>AAAA: Points the domain name to an external IPv6 address;</li> <li>MX: Used for mail servers. When there are multiple MX records, the lower the priority value, the higher the priority;</li> <li>CNAME: Points the domain name to another domain name, which then resolves to the final IP address;</li> <li>TXT: Identifies and describes the domain name, commonly used for domain verification and SPF records (anti-spam);</li> <li>NS: If you need to delegate the subdomain to another DNS service provider for resolution, you need to add an NS record. NS records cannot be added to the root domain;</li> <li>CAA: Specifies the CA that can issue certificates for this site;</li> <li>SRV: Identifies a server that uses a specific service, commonly used in Microsoft's directory management.</li>
 * @method void setType(string $Type) Set DNS record type, with possible values: <li>A: Points the domain name to an external IPv4 address, such as 8.8.8.8;</li> <li>AAAA: Points the domain name to an external IPv6 address;</li> <li>MX: Used for mail servers. When there are multiple MX records, the lower the priority value, the higher the priority;</li> <li>CNAME: Points the domain name to another domain name, which then resolves to the final IP address;</li> <li>TXT: Identifies and describes the domain name, commonly used for domain verification and SPF records (anti-spam);</li> <li>NS: If you need to delegate the subdomain to another DNS service provider for resolution, you need to add an NS record. NS records cannot be added to the root domain;</li> <li>CAA: Specifies the CA that can issue certificates for this site;</li> <li>SRV: Identifies a server that uses a specific service, commonly used in Microsoft's directory management.</li>
 * @method string getLocation() Obtain DNS record resolution line. If not specified, the default is Default, which means the default resolution line and is effective for all regions. The resolution line configuration is only applicable when Type (DNS record type) is A, AAAA, or CNAME. For values, please refer to: [Resolution Line and Corresponding Code Enumeration](https://www.tencentcloud.com/zh/document/product/1145/67229).
 * @method void setLocation(string $Location) Set DNS record resolution line. If not specified, the default is Default, which means the default resolution line and is effective for all regions. The resolution line configuration is only applicable when Type (DNS record type) is A, AAAA, or CNAME. For values, please refer to: [Resolution Line and Corresponding Code Enumeration](https://www.tencentcloud.com/zh/document/product/1145/67229).
 * @method string getContent() Obtain DNS record content. Fill in the corresponding content according to the Type value.
 * @method void setContent(string $Content) Set DNS record content. Fill in the corresponding content according to the Type value.
 * @method integer getTTL() Obtain Cache time, with a range of 60~86400. The smaller the value, the faster the record modification takes effect in various regions. Unit: seconds.
 * @method void setTTL(integer $TTL) Set Cache time, with a range of 60~86400. The smaller the value, the faster the record modification takes effect in various regions. Unit: seconds.
 * @method integer getWeight() Obtain DNS record weight, with a range of -1~100. A value of -1 means no weight is assigned, and a value of 0 means no resolution. Weight configuration is only applicable when Type (DNS record type) is A, AAAA, or CNAME.
 * @method void setWeight(integer $Weight) Set DNS record weight, with a range of -1~100. A value of -1 means no weight is assigned, and a value of 0 means no resolution. Weight configuration is only applicable when Type (DNS record type) is A, AAAA, or CNAME.
 * @method integer getPriority() Obtain MX record priority, with a range of 0~50. The smaller the value, the higher the priority.
 * @method void setPriority(integer $Priority) Set MX record priority, with a range of 0~50. The smaller the value, the higher the priority.
 * @method string getStatus() Obtain DNS record resolution status, with possible values: <li>enable: Effective;</li> <li>disable: Disabled.</li> Note: Status is only used as an output parameter and cannot be used as an input parameter in ModifyDnsRecords. If this parameter is passed, it will be ignored.
 * @method void setStatus(string $Status) Set DNS record resolution status, with possible values: <li>enable: Effective;</li> <li>disable: Disabled.</li> Note: Status is only used as an output parameter and cannot be used as an input parameter in ModifyDnsRecords. If this parameter is passed, it will be ignored.
 * @method string getCreatedOn() Obtain The creation time.
Note: CreatedOn is only used as an output parameter and cannot be used as an input parameter in ModifyDnsRecords. If this parameter is passed, it will be ignored.
 * @method void setCreatedOn(string $CreatedOn) Set The creation time.
Note: CreatedOn is only used as an output parameter and cannot be used as an input parameter in ModifyDnsRecords. If this parameter is passed, it will be ignored.
 * @method string getModifiedOn() Obtain The modification time.
Note: ModifiedOn is only used as an output parameter and cannot be used as an input parameter in ModifyDnsRecords. If this parameter is passed, it will be ignored.
 * @method void setModifiedOn(string $ModifiedOn) Set The modification time.
Note: ModifiedOn is only used as an output parameter and cannot be used as an input parameter in ModifyDnsRecords. If this parameter is passed, it will be ignored.
 */
class DnsRecord extends AbstractModel
{
    /**
     * @var string Site ID. 
Note: ZoneId is only used as an output parameter and cannot be used as an input parameter in ModifyDnsRecords. If this parameter is passed, it will be ignored.
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
     * @var string DNS record type, with possible values: <li>A: Points the domain name to an external IPv4 address, such as 8.8.8.8;</li> <li>AAAA: Points the domain name to an external IPv6 address;</li> <li>MX: Used for mail servers. When there are multiple MX records, the lower the priority value, the higher the priority;</li> <li>CNAME: Points the domain name to another domain name, which then resolves to the final IP address;</li> <li>TXT: Identifies and describes the domain name, commonly used for domain verification and SPF records (anti-spam);</li> <li>NS: If you need to delegate the subdomain to another DNS service provider for resolution, you need to add an NS record. NS records cannot be added to the root domain;</li> <li>CAA: Specifies the CA that can issue certificates for this site;</li> <li>SRV: Identifies a server that uses a specific service, commonly used in Microsoft's directory management.</li>
     */
    public $Type;

    /**
     * @var string DNS record resolution line. If not specified, the default is Default, which means the default resolution line and is effective for all regions. The resolution line configuration is only applicable when Type (DNS record type) is A, AAAA, or CNAME. For values, please refer to: [Resolution Line and Corresponding Code Enumeration](https://www.tencentcloud.com/zh/document/product/1145/67229).
     */
    public $Location;

    /**
     * @var string DNS record content. Fill in the corresponding content according to the Type value.
     */
    public $Content;

    /**
     * @var integer Cache time, with a range of 60~86400. The smaller the value, the faster the record modification takes effect in various regions. Unit: seconds.
     */
    public $TTL;

    /**
     * @var integer DNS record weight, with a range of -1~100. A value of -1 means no weight is assigned, and a value of 0 means no resolution. Weight configuration is only applicable when Type (DNS record type) is A, AAAA, or CNAME.
     */
    public $Weight;

    /**
     * @var integer MX record priority, with a range of 0~50. The smaller the value, the higher the priority.
     */
    public $Priority;

    /**
     * @var string DNS record resolution status, with possible values: <li>enable: Effective;</li> <li>disable: Disabled.</li> Note: Status is only used as an output parameter and cannot be used as an input parameter in ModifyDnsRecords. If this parameter is passed, it will be ignored.
     */
    public $Status;

    /**
     * @var string The creation time.
Note: CreatedOn is only used as an output parameter and cannot be used as an input parameter in ModifyDnsRecords. If this parameter is passed, it will be ignored.
     */
    public $CreatedOn;

    /**
     * @var string The modification time.
Note: ModifiedOn is only used as an output parameter and cannot be used as an input parameter in ModifyDnsRecords. If this parameter is passed, it will be ignored.
     */
    public $ModifiedOn;

    /**
     * @param string $ZoneId Site ID. 
Note: ZoneId is only used as an output parameter and cannot be used as an input parameter in ModifyDnsRecords. If this parameter is passed, it will be ignored.
     * @param string $RecordId DNS record ID.
     * @param string $Name DNS record name.
     * @param string $Type DNS record type, with possible values: <li>A: Points the domain name to an external IPv4 address, such as 8.8.8.8;</li> <li>AAAA: Points the domain name to an external IPv6 address;</li> <li>MX: Used for mail servers. When there are multiple MX records, the lower the priority value, the higher the priority;</li> <li>CNAME: Points the domain name to another domain name, which then resolves to the final IP address;</li> <li>TXT: Identifies and describes the domain name, commonly used for domain verification and SPF records (anti-spam);</li> <li>NS: If you need to delegate the subdomain to another DNS service provider for resolution, you need to add an NS record. NS records cannot be added to the root domain;</li> <li>CAA: Specifies the CA that can issue certificates for this site;</li> <li>SRV: Identifies a server that uses a specific service, commonly used in Microsoft's directory management.</li>
     * @param string $Location DNS record resolution line. If not specified, the default is Default, which means the default resolution line and is effective for all regions. The resolution line configuration is only applicable when Type (DNS record type) is A, AAAA, or CNAME. For values, please refer to: [Resolution Line and Corresponding Code Enumeration](https://www.tencentcloud.com/zh/document/product/1145/67229).
     * @param string $Content DNS record content. Fill in the corresponding content according to the Type value.
     * @param integer $TTL Cache time, with a range of 60~86400. The smaller the value, the faster the record modification takes effect in various regions. Unit: seconds.
     * @param integer $Weight DNS record weight, with a range of -1~100. A value of -1 means no weight is assigned, and a value of 0 means no resolution. Weight configuration is only applicable when Type (DNS record type) is A, AAAA, or CNAME.
     * @param integer $Priority MX record priority, with a range of 0~50. The smaller the value, the higher the priority.
     * @param string $Status DNS record resolution status, with possible values: <li>enable: Effective;</li> <li>disable: Disabled.</li> Note: Status is only used as an output parameter and cannot be used as an input parameter in ModifyDnsRecords. If this parameter is passed, it will be ignored.
     * @param string $CreatedOn The creation time.
Note: CreatedOn is only used as an output parameter and cannot be used as an input parameter in ModifyDnsRecords. If this parameter is passed, it will be ignored.
     * @param string $ModifiedOn The modification time.
Note: ModifiedOn is only used as an output parameter and cannot be used as an input parameter in ModifyDnsRecords. If this parameter is passed, it will be ignored.
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
