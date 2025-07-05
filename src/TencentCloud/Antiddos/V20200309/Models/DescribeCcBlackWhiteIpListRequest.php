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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCcBlackWhiteIpList request structure.
 *
 * @method string getBusiness() Obtain Anti-DDoS service type. Valid values: `bgpip-multip` (Anti-DDoS Pro) and `bgpip` (Anti-DDoS Advanced).
 * @method void setBusiness(string $Business) Set Anti-DDoS service type. Valid values: `bgpip-multip` (Anti-DDoS Pro) and `bgpip` (Anti-DDoS Advanced).
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getOffset() Obtain Starting offset of the page. Value: (number of pages – 1) * items per page.
 * @method void setOffset(integer $Offset) Set Starting offset of the page. Value: (number of pages – 1) * items per page.
 * @method integer getLimit() Obtain Number of results returned in one page
 * @method void setLimit(integer $Limit) Set Number of results returned in one page
 * @method string getIp() Obtain IP address, which is required when an Anti-DDoS Advanced instance is used.
 * @method void setIp(string $Ip) Set IP address, which is required when an Anti-DDoS Advanced instance is used.
 * @method string getDomain() Obtain Domain name, which is required when an Anti-DDoS Advanced instance is used.
 * @method void setDomain(string $Domain) Set Domain name, which is required when an Anti-DDoS Advanced instance is used.
 * @method string getProtocol() Obtain Protocol, which is required when an Anti-DDoS Advanced instance is used.
 * @method void setProtocol(string $Protocol) Set Protocol, which is required when an Anti-DDoS Advanced instance is used.
 * @method string getFilterIp() Obtain Specifies a blocklist/allowlist IP.
 * @method void setFilterIp(string $FilterIp) Set Specifies a blocklist/allowlist IP.
 * @method string getFilterType() Obtain Specifies whether is an IP blocklist or IP allowlist.
 * @method void setFilterType(string $FilterType) Set Specifies whether is an IP blocklist or IP allowlist.
 */
class DescribeCcBlackWhiteIpListRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS service type. Valid values: `bgpip-multip` (Anti-DDoS Pro) and `bgpip` (Anti-DDoS Advanced).
     */
    public $Business;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer Starting offset of the page. Value: (number of pages – 1) * items per page.
     */
    public $Offset;

    /**
     * @var integer Number of results returned in one page
     */
    public $Limit;

    /**
     * @var string IP address, which is required when an Anti-DDoS Advanced instance is used.
     */
    public $Ip;

    /**
     * @var string Domain name, which is required when an Anti-DDoS Advanced instance is used.
     */
    public $Domain;

    /**
     * @var string Protocol, which is required when an Anti-DDoS Advanced instance is used.
     */
    public $Protocol;

    /**
     * @var string Specifies a blocklist/allowlist IP.
     */
    public $FilterIp;

    /**
     * @var string Specifies whether is an IP blocklist or IP allowlist.
     */
    public $FilterType;

    /**
     * @param string $Business Anti-DDoS service type. Valid values: `bgpip-multip` (Anti-DDoS Pro) and `bgpip` (Anti-DDoS Advanced).
     * @param string $InstanceId Instance ID
     * @param integer $Offset Starting offset of the page. Value: (number of pages – 1) * items per page.
     * @param integer $Limit Number of results returned in one page
     * @param string $Ip IP address, which is required when an Anti-DDoS Advanced instance is used.
     * @param string $Domain Domain name, which is required when an Anti-DDoS Advanced instance is used.
     * @param string $Protocol Protocol, which is required when an Anti-DDoS Advanced instance is used.
     * @param string $FilterIp Specifies a blocklist/allowlist IP.
     * @param string $FilterType Specifies whether is an IP blocklist or IP allowlist.
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("FilterIp",$param) and $param["FilterIp"] !== null) {
            $this->FilterIp = $param["FilterIp"];
        }

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }
    }
}
