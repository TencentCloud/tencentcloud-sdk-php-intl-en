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
 * DescribeRecordList request structure.
 *
 * @method string getDomain() Obtain The domain for which DNS records are to be obtained.
 * @method void setDomain(string $Domain) Set The domain for which DNS records are to be obtained.
 * @method integer getDomainId() Obtain The ID of the domain whose DNS records are requested. If `DomainId` is passed in, `Domain` is ignored. You can view all `Domain` and `DomainId` values via the `DescribeDomainList` API.
 * @method void setDomainId(integer $DomainId) Set The ID of the domain whose DNS records are requested. If `DomainId` is passed in, `Domain` is ignored. You can view all `Domain` and `DomainId` values via the `DescribeDomainList` API.
 * @method string getSubdomain() Obtain The host header of a DNS record. If this parameter is passed in, only the DNS record corresponding to this host header will be returned.
 * @method void setSubdomain(string $Subdomain) Set The host header of a DNS record. If this parameter is passed in, only the DNS record corresponding to this host header will be returned.
 * @method string getRecordType() Obtain The type of DNS record, such as A, CNAME, NS, AAAA, explicit URL, implicit URL, CAA, or SPF record.
 * @method void setRecordType(string $RecordType) Set The type of DNS record, such as A, CNAME, NS, AAAA, explicit URL, implicit URL, CAA, or SPF record.
 * @method string getRecordLine() Obtain The name of the split zone for which DNS records are requested. You can view split zones allowed by this domain via the `DescribeRecordLineList` API.
 * @method void setRecordLine(string $RecordLine) Set The name of the split zone for which DNS records are requested. You can view split zones allowed by this domain via the `DescribeRecordLineList` API.
 * @method string getRecordLineId() Obtain The ID of the split zone for which DNS records are requested. If `RecordLineId` is passed in, `RecordLine` is ignored. You can view split zones allowed by this domain via the `DescribeRecordLineList` API.
 * @method void setRecordLineId(string $RecordLineId) Set The ID of the split zone for which DNS records are requested. If `RecordLineId` is passed in, `RecordLine` is ignored. You can view split zones allowed by this domain via the `DescribeRecordLineList` API.
 * @method integer getGroupId() Obtain The group ID passed in to get DNS records in the group.
 * @method void setGroupId(integer $GroupId) Set The group ID passed in to get DNS records in the group.
 * @method string getKeyword() Obtain The keyword for searching for DNS records. Host headers and record values are supported.
 * @method void setKeyword(string $Keyword) Set The keyword for searching for DNS records. Host headers and record values are supported.
 * @method string getSortField() Obtain The sorting field. Available values: `name`, `line`, `type`, `value`, `weight`, `mx`, and `ttl,updated_on`.
 * @method void setSortField(string $SortField) Set The sorting field. Available values: `name`, `line`, `type`, `value`, `weight`, `mx`, and `ttl,updated_on`.
 * @method string getSortType() Obtain The sorting type. Valid values: `ASC` (ascending, default), `DESC` (descending).
 * @method void setSortType(string $SortType) Set The sorting type. Valid values: `ASC` (ascending, default), `DESC` (descending).
 * @method integer getOffset() Obtain The offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set The offset. Default value: `0`.
 * @method integer getLimit() Obtain The limit. It defaults to 100 and can be up to 3,000.
 * @method void setLimit(integer $Limit) Set The limit. It defaults to 100 and can be up to 3,000.
 */
class DescribeRecordListRequest extends AbstractModel
{
    /**
     * @var string The domain for which DNS records are to be obtained.
     */
    public $Domain;

    /**
     * @var integer The ID of the domain whose DNS records are requested. If `DomainId` is passed in, `Domain` is ignored. You can view all `Domain` and `DomainId` values via the `DescribeDomainList` API.
     */
    public $DomainId;

    /**
     * @var string The host header of a DNS record. If this parameter is passed in, only the DNS record corresponding to this host header will be returned.
     */
    public $Subdomain;

    /**
     * @var string The type of DNS record, such as A, CNAME, NS, AAAA, explicit URL, implicit URL, CAA, or SPF record.
     */
    public $RecordType;

    /**
     * @var string The name of the split zone for which DNS records are requested. You can view split zones allowed by this domain via the `DescribeRecordLineList` API.
     */
    public $RecordLine;

    /**
     * @var string The ID of the split zone for which DNS records are requested. If `RecordLineId` is passed in, `RecordLine` is ignored. You can view split zones allowed by this domain via the `DescribeRecordLineList` API.
     */
    public $RecordLineId;

    /**
     * @var integer The group ID passed in to get DNS records in the group.
     */
    public $GroupId;

    /**
     * @var string The keyword for searching for DNS records. Host headers and record values are supported.
     */
    public $Keyword;

    /**
     * @var string The sorting field. Available values: `name`, `line`, `type`, `value`, `weight`, `mx`, and `ttl,updated_on`.
     */
    public $SortField;

    /**
     * @var string The sorting type. Valid values: `ASC` (ascending, default), `DESC` (descending).
     */
    public $SortType;

    /**
     * @var integer The offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer The limit. It defaults to 100 and can be up to 3,000.
     */
    public $Limit;

    /**
     * @param string $Domain The domain for which DNS records are to be obtained.
     * @param integer $DomainId The ID of the domain whose DNS records are requested. If `DomainId` is passed in, `Domain` is ignored. You can view all `Domain` and `DomainId` values via the `DescribeDomainList` API.
     * @param string $Subdomain The host header of a DNS record. If this parameter is passed in, only the DNS record corresponding to this host header will be returned.
     * @param string $RecordType The type of DNS record, such as A, CNAME, NS, AAAA, explicit URL, implicit URL, CAA, or SPF record.
     * @param string $RecordLine The name of the split zone for which DNS records are requested. You can view split zones allowed by this domain via the `DescribeRecordLineList` API.
     * @param string $RecordLineId The ID of the split zone for which DNS records are requested. If `RecordLineId` is passed in, `RecordLine` is ignored. You can view split zones allowed by this domain via the `DescribeRecordLineList` API.
     * @param integer $GroupId The group ID passed in to get DNS records in the group.
     * @param string $Keyword The keyword for searching for DNS records. Host headers and record values are supported.
     * @param string $SortField The sorting field. Available values: `name`, `line`, `type`, `value`, `weight`, `mx`, and `ttl,updated_on`.
     * @param string $SortType The sorting type. Valid values: `ASC` (ascending, default), `DESC` (descending).
     * @param integer $Offset The offset. Default value: `0`.
     * @param integer $Limit The limit. It defaults to 100 and can be up to 3,000.
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

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("Subdomain",$param) and $param["Subdomain"] !== null) {
            $this->Subdomain = $param["Subdomain"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("RecordLine",$param) and $param["RecordLine"] !== null) {
            $this->RecordLine = $param["RecordLine"];
        }

        if (array_key_exists("RecordLineId",$param) and $param["RecordLineId"] !== null) {
            $this->RecordLineId = $param["RecordLineId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("SortField",$param) and $param["SortField"] !== null) {
            $this->SortField = $param["SortField"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
