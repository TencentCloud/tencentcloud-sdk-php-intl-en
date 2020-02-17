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

namespace TencentCloud\Tke\V20180525;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tke\V20180525\Models as Models;

/**
* @method Models\AddExistedInstancesResponse AddExistedInstances(Models\AddExistedInstancesRequest $req) This API is used to add one or more existing instances to a cluster.
* @method Models\CreateClusterResponse CreateCluster(Models\CreateClusterRequest $req) This API is used to create a cluster.
* @method Models\CreateClusterAsGroupResponse CreateClusterAsGroup(Models\CreateClusterAsGroupRequest $req) 为已经存在的集群创建伸缩组
* @method Models\CreateClusterEndpointResponse CreateClusterEndpoint(Models\CreateClusterEndpointRequest $req) 创建集群访问端口(独立集群开启内网/外网访问，托管集群支持开启内网访问)
* @method Models\CreateClusterEndpointVipResponse CreateClusterEndpointVip(Models\CreateClusterEndpointVipRequest $req) 创建托管集群外网访问端口（老的方式，仅支持托管集群外网端口）
* @method Models\CreateClusterInstancesResponse CreateClusterInstances(Models\CreateClusterInstancesRequest $req) This API is used to create one or more nodes in a cluster.
* @method Models\CreateClusterRouteTableResponse CreateClusterRouteTable(Models\CreateClusterRouteTableRequest $req) This API is used to create a cluster route table.
* @method Models\DeleteClusterResponse DeleteCluster(Models\DeleteClusterRequest $req) This API is used to delete a cluster. (Cloud API v3).
* @method Models\DeleteClusterAsGroupsResponse DeleteClusterAsGroups(Models\DeleteClusterAsGroupsRequest $req) 删除集群伸缩组
* @method Models\DeleteClusterEndpointResponse DeleteClusterEndpoint(Models\DeleteClusterEndpointRequest $req) 删除集群访问端口(独立集群开启内网/外网访问，托管集群支持开启内网访问)
* @method Models\DeleteClusterEndpointVipResponse DeleteClusterEndpointVip(Models\DeleteClusterEndpointVipRequest $req) 删除托管集群外网访问端口（老的方式，仅支持托管集群外网端口）
* @method Models\DeleteClusterInstancesResponse DeleteClusterInstances(Models\DeleteClusterInstancesRequest $req) This API is used to delete one or more nodes from a cluster.
* @method Models\DeleteClusterRouteResponse DeleteClusterRoute(Models\DeleteClusterRouteRequest $req) This API is used to delete a cluster route.
* @method Models\DeleteClusterRouteTableResponse DeleteClusterRouteTable(Models\DeleteClusterRouteTableRequest $req) This API is used to delete cluster a route table.
* @method Models\DescribeClusterEndpointStatusResponse DescribeClusterEndpointStatus(Models\DescribeClusterEndpointStatusRequest $req) 查询集群访问端口状态(独立集群开启内网/外网访问，托管集群支持开启内网访问)
* @method Models\DescribeClusterEndpointVipStatusResponse DescribeClusterEndpointVipStatus(Models\DescribeClusterEndpointVipStatusRequest $req) 查询集群开启端口流程状态(仅支持托管集群外网端口)
* @method Models\DescribeClusterInstancesResponse DescribeClusterInstances(Models\DescribeClusterInstancesRequest $req)  This API is used to query information of one or more instances in a cluster. 
* @method Models\DescribeClusterRouteTablesResponse DescribeClusterRouteTables(Models\DescribeClusterRouteTablesRequest $req) This API is used to query one or more cluster route tables.
* @method Models\DescribeClusterRoutesResponse DescribeClusterRoutes(Models\DescribeClusterRoutesRequest $req) This API is used to query cluster routes.
* @method Models\DescribeClusterSecurityResponse DescribeClusterSecurity(Models\DescribeClusterSecurityRequest $req) This API is used to query the key information of a cluster.
* @method Models\DescribeClustersResponse DescribeClusters(Models\DescribeClustersRequest $req) This API is used to query clusters list.
* @method Models\DescribeExistedInstancesResponse DescribeExistedInstances(Models\DescribeExistedInstancesRequest $req) This API is used to query one or more existing node and determine whether they can be added to a cluster.
* @method Models\DescribeRouteTableConflictsResponse DescribeRouteTableConflicts(Models\DescribeRouteTableConflictsRequest $req) This API is used to query the list of route table conflicts.
* @method Models\ModifyClusterEndpointSPResponse ModifyClusterEndpointSP(Models\ModifyClusterEndpointSPRequest $req) 修改托管集群外网端口的安全策略（老的方式，仅支持托管集群外网端口）
 */

class TkeClient extends AbstractClient
{
    protected $endpoint = "tke.tencentcloudapi.com";

    protected $version = "2018-05-25";

    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("tke")."\\"."V20180525\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
