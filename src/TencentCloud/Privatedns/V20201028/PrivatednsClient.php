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

namespace TencentCloud\Privatedns\V20201028;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Privatedns\V20201028\Models as Models;

/**
 * @method Models\CreateEndPointResponse CreateEndPoint(Models\CreateEndPointRequest $req) This API is used to create an endpoint.
 * @method Models\CreateEndPointAndEndPointServiceResponse CreateEndPointAndEndPointService(Models\CreateEndPointAndEndPointServiceRequest $req) This API is used to create an endpoint and an endpoint service simultaneously.
 * @method Models\CreateExtendEndpointResponse CreateExtendEndpoint(Models\CreateExtendEndpointRequest $req) This API is used to create an endpoint.
 * @method Models\CreateForwardRuleResponse CreateForwardRule(Models\CreateForwardRuleRequest $req) This API is used to create a custom forwarding rule.
 * @method Models\CreatePrivateDNSAccountResponse CreatePrivateDNSAccount(Models\CreatePrivateDNSAccountRequest $req) This API is used to create a Private DNS account.
 * @method Models\CreatePrivateZoneResponse CreatePrivateZone(Models\CreatePrivateZoneRequest $req) This API is used to create a private domain.
 * @method Models\CreatePrivateZoneRecordResponse CreatePrivateZoneRecord(Models\CreatePrivateZoneRecordRequest $req) This API is used to add a DNS record for a private domain.
 * @method Models\DeleteEndPointResponse DeleteEndPoint(Models\DeleteEndPointRequest $req) Deletes an endpoint
 * @method Models\DeleteForwardRuleResponse DeleteForwardRule(Models\DeleteForwardRuleRequest $req) This API is used to delete a forwarding rule and stop forwarding.
 * @method Models\DeletePrivateZoneRecordResponse DeletePrivateZoneRecord(Models\DeletePrivateZoneRecordRequest $req) This API is used to delete a DNS record for a private domain.
 * @method Models\DescribeAccountVpcListResponse DescribeAccountVpcList(Models\DescribeAccountVpcListRequest $req) This API is used to get the VPC list of a Private DNS account.
 * @method Models\DescribeAuditLogResponse DescribeAuditLog(Models\DescribeAuditLogRequest $req) This API is used to get the list of operation logs.
 * @method Models\DescribeDashboardResponse DescribeDashboard(Models\DescribeDashboardRequest $req) This API is used to get the overview of private DNS records.
 * @method Models\DescribeEndPointListResponse DescribeEndPointList(Models\DescribeEndPointListRequest $req) This API is used to obtain the endpoint list.
 * @method Models\DescribeEndPointRegionResponse DescribeEndPointRegion(Models\DescribeEndPointRegionRequest $req) This API is used to query the regions where the endpoint is enabled.
 * @method Models\DescribeExtendEndpointListResponse DescribeExtendEndpointList(Models\DescribeExtendEndpointListRequest $req) This API is used to obtain the endpoint list.
 * @method Models\DescribeForwardRuleResponse DescribeForwardRule(Models\DescribeForwardRuleRequest $req) This API is used to query forwarding rules.
 * @method Models\DescribeForwardRuleListResponse DescribeForwardRuleList(Models\DescribeForwardRuleListRequest $req) This API is used to query the forwarding rule list.
 * @method Models\DescribePrivateDNSAccountListResponse DescribePrivateDNSAccountList(Models\DescribePrivateDNSAccountListRequest $req) This API is used to get the list of Private DNS accounts.
 * @method Models\DescribePrivateZoneListResponse DescribePrivateZoneList(Models\DescribePrivateZoneListRequest $req) This API is used to obtain the private domain list.
 * @method Models\DescribePrivateZoneRecordListResponse DescribePrivateZoneRecordList(Models\DescribePrivateZoneRecordListRequest $req) This API is used to get the list of records for a private domain.
 * @method Models\DescribePrivateZoneServiceResponse DescribePrivateZoneService(Models\DescribePrivateZoneServiceRequest $req) This API is used to query the Private DNS activation status.
 * @method Models\DescribeQuotaUsageResponse DescribeQuotaUsage(Models\DescribeQuotaUsageRequest $req) This API is used to query quota usage.
 * @method Models\DescribeRequestDataResponse DescribeRequestData(Models\DescribeRequestDataRequest $req) This API is used to get the DNS request volume of a private domain.
 * @method Models\ModifyForwardRuleResponse ModifyForwardRule(Models\ModifyForwardRuleRequest $req) This API is used to modify a forwarding rule.
 * @method Models\ModifyPrivateZoneResponse ModifyPrivateZone(Models\ModifyPrivateZoneRequest $req) This API is used to modify a private domain.
 * @method Models\ModifyPrivateZoneRecordResponse ModifyPrivateZoneRecord(Models\ModifyPrivateZoneRecordRequest $req) This API is used to modify a DNS record for a private domain.
 * @method Models\ModifyPrivateZoneVpcResponse ModifyPrivateZoneVpc(Models\ModifyPrivateZoneVpcRequest $req) This API is used to modify the VPC associated with a private domain.
 * @method Models\ModifyRecordsStatusResponse ModifyRecordsStatus(Models\ModifyRecordsStatusRequest $req) This API is used to modify the DNS record status.
 * @method Models\SubscribePrivateZoneServiceResponse SubscribePrivateZoneService(Models\SubscribePrivateZoneServiceRequest $req) This API is used to activate the Private DNS service.
 */

class PrivatednsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "privatedns.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "privatedns";

    /**
     * @var string
     */
    protected $version = "2020-10-28";

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
        $respClass = "TencentCloud"."\\".ucfirst("privatedns")."\\"."V20201028\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
