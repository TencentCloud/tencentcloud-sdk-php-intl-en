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

namespace TencentCloud\Dnspod\V20210323;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dnspod\V20210323\Models as Models;

/**
 * @method Models\CreateDomainResponse CreateDomain(Models\CreateDomainRequest $req) This API is used to add a domain.
 * @method Models\CreateDomainAliasResponse CreateDomainAlias(Models\CreateDomainAliasRequest $req) This API is used to create a domain alias.
 * @method Models\CreateDomainBatchResponse CreateDomainBatch(Models\CreateDomainBatchRequest $req) This API is used to bulk add domains.
 * @method Models\CreateDomainGroupResponse CreateDomainGroup(Models\CreateDomainGroupRequest $req) This API is used to create a domain group.
 * @method Models\CreateRecordResponse CreateRecord(Models\CreateRecordRequest $req) This API is used to add a record.
 * @method Models\CreateRecordBatchResponse CreateRecordBatch(Models\CreateRecordBatchRequest $req) This API is used to bulk add records.
 * @method Models\CreateRecordGroupResponse CreateRecordGroup(Models\CreateRecordGroupRequest $req) This API is used to add a record group.
 * @method Models\DeleteDomainResponse DeleteDomain(Models\DeleteDomainRequest $req) This API is used to delete a domain.
 * @method Models\DeleteDomainAliasResponse DeleteDomainAlias(Models\DeleteDomainAliasRequest $req) This API is used to delete a domain alias.
 * @method Models\DeleteDomainBatchResponse DeleteDomainBatch(Models\DeleteDomainBatchRequest $req) This API is used to batch delete domains.
 * @method Models\DeleteRecordResponse DeleteRecord(Models\DeleteRecordRequest $req) This API is used to delete a record.
 * @method Models\DeleteRecordGroupResponse DeleteRecordGroup(Models\DeleteRecordGroupRequest $req) This API is used to delete a record group.
 * @method Models\DeleteShareDomainResponse DeleteShareDomain(Models\DeleteShareDomainRequest $req) This API is used to unshare a domain.
 * @method Models\DescribeDomainResponse DescribeDomain(Models\DescribeDomainRequest $req) This API is used to get the information of a domain.
 * @method Models\DescribeDomainAliasListResponse DescribeDomainAliasList(Models\DescribeDomainAliasListRequest $req) This API is used to get the list of domain aliases.
 * @method Models\DescribeDomainGroupListResponse DescribeDomainGroupList(Models\DescribeDomainGroupListRequest $req) This API is used to get the list of domain groups.
 * @method Models\DescribeDomainListResponse DescribeDomainList(Models\DescribeDomainListRequest $req) This API is used to get the list of domains.
 * @method Models\DescribeDomainLogListResponse DescribeDomainLogList(Models\DescribeDomainLogListRequest $req) This API is used to get the log of a domain.
 * @method Models\DescribeDomainPurviewResponse DescribeDomainPurview(Models\DescribeDomainPurviewRequest $req) This API is used to get the permissions of a domain.
 * @method Models\DescribeDomainShareInfoResponse DescribeDomainShareInfo(Models\DescribeDomainShareInfoRequest $req) This API is used to get the domain sharing information.
 * @method Models\DescribeRecordResponse DescribeRecord(Models\DescribeRecordRequest $req) This API is used to get the information of a record.
 * @method Models\DescribeRecordGroupListResponse DescribeRecordGroupList(Models\DescribeRecordGroupListRequest $req) This API is used to query the list of DNS record groups.
 * @method Models\DescribeRecordLineListResponse DescribeRecordLineList(Models\DescribeRecordLineListRequest $req) This API is used to get the split zones allowed by the domain level.
 * @method Models\DescribeRecordListResponse DescribeRecordList(Models\DescribeRecordListRequest $req) This API is used to get the DNS records of a domain.
 * @method Models\DescribeRecordTypeResponse DescribeRecordType(Models\DescribeRecordTypeRequest $req) This API is used to get the record type allowed by the domain level.
 * @method Models\DescribeSubdomainAnalyticsResponse DescribeSubdomainAnalytics(Models\DescribeSubdomainAnalyticsRequest $req) This API is used to collect statistics on the DNS query volume of a subdomain. It helps you understand the traffic and time period distribution and allows you to view statistics in the last three months. It is available only for domains under a paid plan.
 * @method Models\ModifyDomainLockResponse ModifyDomainLock(Models\ModifyDomainLockRequest $req) This API is used to lock a domain.
 * @method Models\ModifyDomainOwnerResponse ModifyDomainOwner(Models\ModifyDomainOwnerRequest $req) This API is used to transfer ownership of a domain.
 * @method Models\ModifyDomainRemarkResponse ModifyDomainRemark(Models\ModifyDomainRemarkRequest $req) This API is used to set the remarks of a domain.
 * @method Models\ModifyDomainStatusResponse ModifyDomainStatus(Models\ModifyDomainStatusRequest $req) This API is used to modify the status of a domain.
 * @method Models\ModifyDomainUnlockResponse ModifyDomainUnlock(Models\ModifyDomainUnlockRequest $req) This API is used to unlock a domain.
 * @method Models\ModifyRecordResponse ModifyRecord(Models\ModifyRecordRequest $req) This API is used to modify a record.
 * @method Models\ModifyRecordBatchResponse ModifyRecordBatch(Models\ModifyRecordBatchRequest $req) This API is used to bulk modify records.
 * @method Models\ModifyRecordGroupResponse ModifyRecordGroup(Models\ModifyRecordGroupRequest $req) This API is used to modify a record group.
 * @method Models\ModifyRecordRemarkResponse ModifyRecordRemark(Models\ModifyRecordRemarkRequest $req) This API is used to set the remarks of a record.
 * @method Models\ModifyRecordStatusResponse ModifyRecordStatus(Models\ModifyRecordStatusRequest $req) This API is used to modify the DNS record status.
 * @method Models\ModifyRecordToGroupResponse ModifyRecordToGroup(Models\ModifyRecordToGroupRequest $req) This API is used to add a record to a group.
 */

class DnspodClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dnspod.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dnspod";

    /**
     * @var string
     */
    protected $version = "2021-03-23";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("dnspod")."\\"."V20210323\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
