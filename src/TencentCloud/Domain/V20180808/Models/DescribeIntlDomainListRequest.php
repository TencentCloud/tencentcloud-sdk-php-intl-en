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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIntlDomainList request structure.
 *
 * @method integer getOffset() Obtain The page number in pagination cases.
 * @method void setOffset(integer $Offset) Set The page number in pagination cases.
 * @method integer getLimit() Obtain The number of records on each page in pagination cases.
 * @method void setLimit(integer $Limit) Set The number of records on each page in pagination cases.
 * @method string getKeyWord() Obtain The domain keyword for fuzzy search.
 * @method void setKeyWord(string $KeyWord) Set The domain keyword for fuzzy search.
 * @method integer getOrderByRegTime() Obtain The registration time sort order. Valid values: `1` (descending), `2` (ascending).
 * @method void setOrderByRegTime(integer $OrderByRegTime) Set The registration time sort order. Valid values: `1` (descending), `2` (ascending).
 * @method integer getOrderByExpireTime() Obtain The expiration time sort order. Valid values: `1` (descending), `2` (ascending).
 * @method void setOrderByExpireTime(integer $OrderByExpireTime) Set The expiration time sort order. Valid values: `1` (descending), `2` (ascending).
 * @method string getStatus() Obtain The domain status.
`all`: All domains.
`UrgentNeedRenew`: The domains that are in urgent need of renewal.
`RedemptionPending`: The domains that are in urgent need of redemption.
`nosubmit`: The domains with unverified identities.
`tran`: The domains that are being transferred in.
 * @method void setStatus(string $Status) Set The domain status.
`all`: All domains.
`UrgentNeedRenew`: The domains that are in urgent need of renewal.
`RedemptionPending`: The domains that are in urgent need of redemption.
`nosubmit`: The domains with unverified identities.
`tran`: The domains that are being transferred in.
 * @method integer getDnsStatus() Obtain The DNS type. Valid values: `1` (DNSPod), `2` (others).
 * @method void setDnsStatus(integer $DnsStatus) Set The DNS type. Valid values: `1` (DNSPod), `2` (others).
 * @method integer getOrderByDomainName() Obtain The domain sort order. Valid values: `1` (descending), `2` (ascending).
 * @method void setOrderByDomainName(integer $OrderByDomainName) Set The domain sort order. Valid values: `1` (descending), `2` (ascending).
 */
class DescribeIntlDomainListRequest extends AbstractModel
{
    /**
     * @var integer The page number in pagination cases.
     */
    public $Offset;

    /**
     * @var integer The number of records on each page in pagination cases.
     */
    public $Limit;

    /**
     * @var string The domain keyword for fuzzy search.
     */
    public $KeyWord;

    /**
     * @var integer The registration time sort order. Valid values: `1` (descending), `2` (ascending).
     */
    public $OrderByRegTime;

    /**
     * @var integer The expiration time sort order. Valid values: `1` (descending), `2` (ascending).
     */
    public $OrderByExpireTime;

    /**
     * @var string The domain status.
`all`: All domains.
`UrgentNeedRenew`: The domains that are in urgent need of renewal.
`RedemptionPending`: The domains that are in urgent need of redemption.
`nosubmit`: The domains with unverified identities.
`tran`: The domains that are being transferred in.
     */
    public $Status;

    /**
     * @var integer The DNS type. Valid values: `1` (DNSPod), `2` (others).
     */
    public $DnsStatus;

    /**
     * @var integer The domain sort order. Valid values: `1` (descending), `2` (ascending).
     */
    public $OrderByDomainName;

    /**
     * @param integer $Offset The page number in pagination cases.
     * @param integer $Limit The number of records on each page in pagination cases.
     * @param string $KeyWord The domain keyword for fuzzy search.
     * @param integer $OrderByRegTime The registration time sort order. Valid values: `1` (descending), `2` (ascending).
     * @param integer $OrderByExpireTime The expiration time sort order. Valid values: `1` (descending), `2` (ascending).
     * @param string $Status The domain status.
`all`: All domains.
`UrgentNeedRenew`: The domains that are in urgent need of renewal.
`RedemptionPending`: The domains that are in urgent need of redemption.
`nosubmit`: The domains with unverified identities.
`tran`: The domains that are being transferred in.
     * @param integer $DnsStatus The DNS type. Valid values: `1` (DNSPod), `2` (others).
     * @param integer $OrderByDomainName The domain sort order. Valid values: `1` (descending), `2` (ascending).
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("KeyWord",$param) and $param["KeyWord"] !== null) {
            $this->KeyWord = $param["KeyWord"];
        }

        if (array_key_exists("OrderByRegTime",$param) and $param["OrderByRegTime"] !== null) {
            $this->OrderByRegTime = $param["OrderByRegTime"];
        }

        if (array_key_exists("OrderByExpireTime",$param) and $param["OrderByExpireTime"] !== null) {
            $this->OrderByExpireTime = $param["OrderByExpireTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DnsStatus",$param) and $param["DnsStatus"] !== null) {
            $this->DnsStatus = $param["DnsStatus"];
        }

        if (array_key_exists("OrderByDomainName",$param) and $param["OrderByDomainName"] !== null) {
            $this->OrderByDomainName = $param["OrderByDomainName"];
        }
    }
}
