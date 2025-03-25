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

namespace TencentCloud\Cdc\V20201214;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cdc\V20201214\Models as Models;

/**
 * @method Models\CreateDedicatedClusterResponse CreateDedicatedCluster(Models\CreateDedicatedClusterRequest $req) This API is used to create a CDC.
 * @method Models\CreateDedicatedClusterOrderResponse CreateDedicatedClusterOrder(Models\CreateDedicatedClusterOrderRequest $req) This API is used to create a CDC order.
 * @method Models\CreateSiteResponse CreateSite(Models\CreateSiteRequest $req) This API is used to create a site.
 * @method Models\DeleteDedicatedClustersResponse DeleteDedicatedClusters(Models\DeleteDedicatedClustersRequest $req) This API is used to delete a CDC.
 * @method Models\DeleteSitesResponse DeleteSites(Models\DeleteSitesRequest $req) This API is used to delete a site.
 * @method Models\DescribeDedicatedClusterCosCapacityResponse DescribeDedicatedClusterCosCapacity(Models\DescribeDedicatedClusterCosCapacityRequest $req) This API is used to query the Cloud Object Storage (COS) capacity of the CDC.
 * @method Models\DescribeDedicatedClusterHostStatisticsResponse DescribeDedicatedClusterHostStatistics(Models\DescribeDedicatedClusterHostStatisticsRequest $req) This API is used to query the statistic information of the host in the CDC.
 * @method Models\DescribeDedicatedClusterHostsResponse DescribeDedicatedClusterHosts(Models\DescribeDedicatedClusterHostsRequest $req) This API is used to query host information of the CDC
 * @method Models\DescribeDedicatedClusterInstanceTypesResponse DescribeDedicatedClusterInstanceTypes(Models\DescribeDedicatedClusterInstanceTypesRequest $req) This API is used to query instance types supported by the CDC.
 * @method Models\DescribeDedicatedClusterOrdersResponse DescribeDedicatedClusterOrders(Models\DescribeDedicatedClusterOrdersRequest $req) This API is used to query the list of CDC orders.
 * @method Models\DescribeDedicatedClusterOverviewResponse DescribeDedicatedClusterOverview(Models\DescribeDedicatedClusterOverviewRequest $req) This API is used to query the overview of the CDC
 * @method Models\DescribeDedicatedClusterTypesResponse DescribeDedicatedClusterTypes(Models\DescribeDedicatedClusterTypesRequest $req) This API is used to query the configuration list of the CDC.
 * @method Models\DescribeDedicatedClustersResponse DescribeDedicatedClusters(Models\DescribeDedicatedClustersRequest $req) This API is used to query the CDC list.
 * @method Models\DescribeDedicatedSupportedZonesResponse DescribeDedicatedSupportedZones(Models\DescribeDedicatedSupportedZonesRequest $req) This API is used to query the list of AZs supported by the CDC.
 * @method Models\DescribeSitesResponse DescribeSites(Models\DescribeSitesRequest $req) This API is used to query the site list.
 * @method Models\DescribeSitesDetailResponse DescribeSitesDetail(Models\DescribeSitesDetailRequest $req) This API is used to query site details.
 * @method Models\ModifyDedicatedClusterInfoResponse ModifyDedicatedClusterInfo(Models\ModifyDedicatedClusterInfoRequest $req) This API is used to modify the CDC information.
 * @method Models\ModifyOrderStatusResponse ModifyOrderStatus(Models\ModifyOrderStatusRequest $req) This API is used to modify the status of large and small orders.
 * @method Models\ModifySiteDeviceInfoResponse ModifySiteDeviceInfo(Models\ModifySiteDeviceInfoRequest $req) This API is used to modify the information about devices in the equipment room.
 * @method Models\ModifySiteInfoResponse ModifySiteInfo(Models\ModifySiteInfoRequest $req) This API is used to modify the equipment room information.
 */

class CdcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cdc.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cdc";

    /**
     * @var string
     */
    protected $version = "2020-12-14";

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
        $respClass = "TencentCloud"."\\".ucfirst("cdc")."\\"."V20201214\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
