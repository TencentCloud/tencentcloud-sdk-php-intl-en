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
 * DescribeSubdomainAnalytics request structure.
 *
 * @method string getDomain() Obtain The domain of the DNS query volume to be queried
 * @method void setDomain(string $Domain) Set The domain of the DNS query volume to be queried
 * @method string getStartDate() Obtain Query start date in the format of `YYYY-MM-DD`
 * @method void setStartDate(string $StartDate) Set Query start date in the format of `YYYY-MM-DD`
 * @method string getEndDate() Obtain Query end date in the format of `YYYY-MM-DD`
 * @method void setEndDate(string $EndDate) Set Query end date in the format of `YYYY-MM-DD`
 * @method string getSubdomain() Obtain The subdomain of the DNS query volume to be queried
 * @method void setSubdomain(string $Subdomain) Set The subdomain of the DNS query volume to be queried
 * @method string getDnsFormat() Obtain `DATE`: Daily. `HOUR`: Hourly
 * @method void setDnsFormat(string $DnsFormat) Set `DATE`: Daily. `HOUR`: Hourly
 * @method integer getDomainId() Obtain The domain ID. `DomainId` takes priority over `Domain`. If `DomainId` is passed in, `Domain` is ignored. You can view all `Domain` and `DomainId` values via the `DescribeDomainList` API.
 * @method void setDomainId(integer $DomainId) Set The domain ID. `DomainId` takes priority over `Domain`. If `DomainId` is passed in, `Domain` is ignored. You can view all `Domain` and `DomainId` values via the `DescribeDomainList` API.
 */
class DescribeSubdomainAnalyticsRequest extends AbstractModel
{
    /**
     * @var string The domain of the DNS query volume to be queried
     */
    public $Domain;

    /**
     * @var string Query start date in the format of `YYYY-MM-DD`
     */
    public $StartDate;

    /**
     * @var string Query end date in the format of `YYYY-MM-DD`
     */
    public $EndDate;

    /**
     * @var string The subdomain of the DNS query volume to be queried
     */
    public $Subdomain;

    /**
     * @var string `DATE`: Daily. `HOUR`: Hourly
     */
    public $DnsFormat;

    /**
     * @var integer The domain ID. `DomainId` takes priority over `Domain`. If `DomainId` is passed in, `Domain` is ignored. You can view all `Domain` and `DomainId` values via the `DescribeDomainList` API.
     */
    public $DomainId;

    /**
     * @param string $Domain The domain of the DNS query volume to be queried
     * @param string $StartDate Query start date in the format of `YYYY-MM-DD`
     * @param string $EndDate Query end date in the format of `YYYY-MM-DD`
     * @param string $Subdomain The subdomain of the DNS query volume to be queried
     * @param string $DnsFormat `DATE`: Daily. `HOUR`: Hourly
     * @param integer $DomainId The domain ID. `DomainId` takes priority over `Domain`. If `DomainId` is passed in, `Domain` is ignored. You can view all `Domain` and `DomainId` values via the `DescribeDomainList` API.
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

        if (array_key_exists("DnsFormat",$param) and $param["DnsFormat"] !== null) {
            $this->DnsFormat = $param["DnsFormat"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }
    }
}
