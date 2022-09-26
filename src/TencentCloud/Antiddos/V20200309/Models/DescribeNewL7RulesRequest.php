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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNewL7Rules request structure.
 *
 * @method string getBusiness() Obtain Anti-DDoS service type (`bgpip`: Anti-DDoS Advanced)
 * @method void setBusiness(string $Business) Set Anti-DDoS service type (`bgpip`: Anti-DDoS Advanced)
 * @method array getStatusList() Obtain (Optional) Searches by rule status. Valid values: `0` (Successfully configured), `1` (Being configured), `2` (Configuration failed), `3` (Being deleted), `5` (Deletion failed), `6` (awaiting configuration), `7` (awaiting deletion), and `8` (awaiting certificate configuration).
 * @method void setStatusList(array $StatusList) Set (Optional) Searches by rule status. Valid values: `0` (Successfully configured), `1` (Being configured), `2` (Configuration failed), `3` (Being deleted), `5` (Deletion failed), `6` (awaiting configuration), `7` (awaiting deletion), and `8` (awaiting certificate configuration).
 * @method string getDomain() Obtain (Optional) Searches by domain name.
 * @method void setDomain(string $Domain) Set (Optional) Searches by domain name.
 * @method string getIp() Obtain (Optional) Searches by IP.
 * @method void setIp(string $Ip) Set (Optional) Searches by IP.
 * @method integer getLimit() Obtain Number of items in a page. Returned results are not paged if you enter “0”.
 * @method void setLimit(integer $Limit) Set Number of items in a page. Returned results are not paged if you enter “0”.
 * @method integer getOffset() Obtain Starting offset of the page. Value: (number of pages – 1) * items per page.
 * @method void setOffset(integer $Offset) Set Starting offset of the page. Value: (number of pages – 1) * items per page.
 * @method array getProtocolList() Obtain (Optional) Searches by forwarding protocol. Values: [http, https, http/https]
 * @method void setProtocolList(array $ProtocolList) Set (Optional) Searches by forwarding protocol. Values: [http, https, http/https]
 * @method string getCname() Obtain CNAME of the Anti-DDoS Advanced instance
 * @method void setCname(string $Cname) Set CNAME of the Anti-DDoS Advanced instance
 */
class DescribeNewL7RulesRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS service type (`bgpip`: Anti-DDoS Advanced)
     */
    public $Business;

    /**
     * @var array (Optional) Searches by rule status. Valid values: `0` (Successfully configured), `1` (Being configured), `2` (Configuration failed), `3` (Being deleted), `5` (Deletion failed), `6` (awaiting configuration), `7` (awaiting deletion), and `8` (awaiting certificate configuration).
     */
    public $StatusList;

    /**
     * @var string (Optional) Searches by domain name.
     */
    public $Domain;

    /**
     * @var string (Optional) Searches by IP.
     */
    public $Ip;

    /**
     * @var integer Number of items in a page. Returned results are not paged if you enter “0”.
     */
    public $Limit;

    /**
     * @var integer Starting offset of the page. Value: (number of pages – 1) * items per page.
     */
    public $Offset;

    /**
     * @var array (Optional) Searches by forwarding protocol. Values: [http, https, http/https]
     */
    public $ProtocolList;

    /**
     * @var string CNAME of the Anti-DDoS Advanced instance
     */
    public $Cname;

    /**
     * @param string $Business Anti-DDoS service type (`bgpip`: Anti-DDoS Advanced)
     * @param array $StatusList (Optional) Searches by rule status. Valid values: `0` (Successfully configured), `1` (Being configured), `2` (Configuration failed), `3` (Being deleted), `5` (Deletion failed), `6` (awaiting configuration), `7` (awaiting deletion), and `8` (awaiting certificate configuration).
     * @param string $Domain (Optional) Searches by domain name.
     * @param string $Ip (Optional) Searches by IP.
     * @param integer $Limit Number of items in a page. Returned results are not paged if you enter “0”.
     * @param integer $Offset Starting offset of the page. Value: (number of pages – 1) * items per page.
     * @param array $ProtocolList (Optional) Searches by forwarding protocol. Values: [http, https, http/https]
     * @param string $Cname CNAME of the Anti-DDoS Advanced instance
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

        if (array_key_exists("StatusList",$param) and $param["StatusList"] !== null) {
            $this->StatusList = $param["StatusList"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ProtocolList",$param) and $param["ProtocolList"] !== null) {
            $this->ProtocolList = $param["ProtocolList"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }
    }
}
