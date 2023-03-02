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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Statistics on the DNS query volume of a subdomain
 *
 * @method string getDnsFormat() Obtain `DATE`: Daily; `HOUR`: Hourly
 * @method void setDnsFormat(string $DnsFormat) Set `DATE`: Daily; `HOUR`: Hourly
 * @method integer getDnsTotal() Obtain Total DNS query volume for the current statistical period
 * @method void setDnsTotal(integer $DnsTotal) Set Total DNS query volume for the current statistical period
 * @method string getDomain() Obtain The queried domain
 * @method void setDomain(string $Domain) Set The queried domain
 * @method string getStartDate() Obtain Start date of the current statistical period
 * @method void setStartDate(string $StartDate) Set Start date of the current statistical period
 * @method string getEndDate() Obtain End date of the current statistical period
 * @method void setEndDate(string $EndDate) Set End date of the current statistical period
 * @method string getSubdomain() Obtain Subdomain
 * @method void setSubdomain(string $Subdomain) Set Subdomain
 */
class SubdomainAnalyticsInfo extends AbstractModel
{
    /**
     * @var string `DATE`: Daily; `HOUR`: Hourly
     */
    public $DnsFormat;

    /**
     * @var integer Total DNS query volume for the current statistical period
     */
    public $DnsTotal;

    /**
     * @var string The queried domain
     */
    public $Domain;

    /**
     * @var string Start date of the current statistical period
     */
    public $StartDate;

    /**
     * @var string End date of the current statistical period
     */
    public $EndDate;

    /**
     * @var string Subdomain
     */
    public $Subdomain;

    /**
     * @param string $DnsFormat `DATE`: Daily; `HOUR`: Hourly
     * @param integer $DnsTotal Total DNS query volume for the current statistical period
     * @param string $Domain The queried domain
     * @param string $StartDate Start date of the current statistical period
     * @param string $EndDate End date of the current statistical period
     * @param string $Subdomain Subdomain
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
        if (array_key_exists("DnsFormat",$param) and $param["DnsFormat"] !== null) {
            $this->DnsFormat = $param["DnsFormat"];
        }

        if (array_key_exists("DnsTotal",$param) and $param["DnsTotal"] !== null) {
            $this->DnsTotal = $param["DnsTotal"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("Subdomain",$param) and $param["Subdomain"] !== null) {
            $this->Subdomain = $param["Subdomain"];
        }
    }
}
