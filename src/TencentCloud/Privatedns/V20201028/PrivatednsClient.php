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
 * @method Models\CreatePrivateZoneResponse CreatePrivateZone(Models\CreatePrivateZoneRequest $req) This API is used to create a private domain.
 * @method Models\CreatePrivateZoneRecordResponse CreatePrivateZoneRecord(Models\CreatePrivateZoneRecordRequest $req) This API is used to add a DNS record for a private domain.
 * @method Models\DeletePrivateZoneResponse DeletePrivateZone(Models\DeletePrivateZoneRequest $req) This API is used to delete a private domain and stop DNS.
 * @method Models\DeletePrivateZoneRecordResponse DeletePrivateZoneRecord(Models\DeletePrivateZoneRecordRequest $req) This API is used to delete a DNS record for a private domain.
 * @method Models\DescribeAuditLogResponse DescribeAuditLog(Models\DescribeAuditLogRequest $req) This API is used to get the list of operation logs.
 * @method Models\DescribeDashboardResponse DescribeDashboard(Models\DescribeDashboardRequest $req) This API is used to get the overview of private DNS records.
 * @method Models\DescribePrivateZoneResponse DescribePrivateZone(Models\DescribePrivateZoneRequest $req) This API is used to get the private domain information.
 * @method Models\DescribePrivateZoneListResponse DescribePrivateZoneList(Models\DescribePrivateZoneListRequest $req) This API is used to get the list of private domains.
 * @method Models\DescribePrivateZoneRecordListResponse DescribePrivateZoneRecordList(Models\DescribePrivateZoneRecordListRequest $req) This API is used to get the list of records for a private domain.
 * @method Models\DescribePrivateZoneServiceResponse DescribePrivateZoneService(Models\DescribePrivateZoneServiceRequest $req) This API is used to query the Private DNS activation status.
 * @method Models\DescribeRequestDataResponse DescribeRequestData(Models\DescribeRequestDataRequest $req) This API is used to get the DNS request volume of a private domain.
 * @method Models\ModifyPrivateZoneResponse ModifyPrivateZone(Models\ModifyPrivateZoneRequest $req) This API is used to modify a private domain.
 * @method Models\ModifyPrivateZoneRecordResponse ModifyPrivateZoneRecord(Models\ModifyPrivateZoneRecordRequest $req) This API is used to modify a DNS record for a private domain.
 * @method Models\ModifyPrivateZoneVpcResponse ModifyPrivateZoneVpc(Models\ModifyPrivateZoneVpcRequest $req) This API is used to modify the VPC associated with a private domain.
 * @method Models\SubscribePrivateZoneServiceResponse SubscribePrivateZoneService(Models\SubscribePrivateZoneServiceRequest $req) This API is used to activate the Private DNS service.
 */

class PrivatednsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "privatedns.tencentcloudapi.com";

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