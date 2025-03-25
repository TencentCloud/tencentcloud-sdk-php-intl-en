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

namespace TencentCloud\Gwlb\V20240906;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Gwlb\V20240906\Models as Models;

/**
 * @method Models\AssociateTargetGroupsResponse AssociateTargetGroups(Models\AssociateTargetGroupsRequest $req) This API is used to bind target groups to a CLB.This is an async API. After the API return succeeds, you can call the DescribeTaskStatus API with the returned RequestID as an input parameter to check whether this task is successful.
 * @method Models\CreateGatewayLoadBalancerResponse CreateGatewayLoadBalancer(Models\CreateGatewayLoadBalancerRequest $req) This API is used to create a GWLB instance. To use the GWLB service, you must purchase one or more GWLB instances. After this API is called successfully, a unique ID for the GWLB instance will be returned.Note: The default purchase quota for each account in each region is 10.This is an async API. After the API is called successfully, you can use the DescribeGatewayLoadBalancers API to query the status of the GWLB instance (such as creating and normal) to determine whether the creation is successful.
 * @method Models\CreateTargetGroupResponse CreateTargetGroup(Models\CreateTargetGroupRequest $req) This API is used to create a target group. This feature is in beta testing. If you need to use it, please [submit a ticket](https://console.cloud.tencent.com/workorder/category?level1_id=6&level2_id=163&source=0&data_title=%E8%B4%9F%E8%BD%BD%E5%9D%87%E8%A1%A1%20LB&step=1).
 * @method Models\DeleteGatewayLoadBalancerResponse DeleteGatewayLoadBalancer(Models\DeleteGatewayLoadBalancerRequest $req) This API is used to delete one or more specified GWLB instances. After successful deletion, the GWLB instances will be unbound from the backend service.This is an async API. After the API return succeeds, you can call the DescribeTaskStatus API with the returned RequestId as an input parameter to check whether this task is successful.
 * @method Models\DeleteTargetGroupsResponse DeleteTargetGroups(Models\DeleteTargetGroupsRequest $req) This API is used to delete a target group.
 * @method Models\DeregisterTargetGroupInstancesResponse DeregisterTargetGroupInstances(Models\DeregisterTargetGroupInstancesRequest $req) This API is used to unbind a server from a target group.
This is an async API. After the API return succeeds, you can call the DescribeTaskStatus API with the returned RequestID as an input parameter to check whether this task is successful.
 * @method Models\DescribeGatewayLoadBalancersResponse DescribeGatewayLoadBalancers(Models\DescribeGatewayLoadBalancersRequest $req) This API is used to query the list of GWLB instances in a region.
 * @method Models\DescribeTargetGroupInstanceStatusResponse DescribeTargetGroupInstanceStatus(Models\DescribeTargetGroupInstanceStatusRequest $req) This API is used to query the backend service status of a target group. Currently, only GWLB type target groups support querying backend service status.
 * @method Models\DescribeTargetGroupInstancesResponse DescribeTargetGroupInstances(Models\DescribeTargetGroupInstancesRequest $req) This API is used to obtain information on servers bound to a target group.
 * @method Models\DescribeTargetGroupListResponse DescribeTargetGroupList(Models\DescribeTargetGroupListRequest $req) This API is used to obtain a target group list.
 * @method Models\DescribeTargetGroupsResponse DescribeTargetGroups(Models\DescribeTargetGroupsRequest $req) This API is used to query target group information.
 * @method Models\DescribeTaskStatusResponse DescribeTaskStatus(Models\DescribeTaskStatusRequest $req) This API is used to query the execution status of an async task. After non-query APIs (for example, used to create/delete CLB instances) are called successfully, this API needs to be used to query whether the task is successful.
 * @method Models\DisassociateTargetGroupsResponse DisassociateTargetGroups(Models\DisassociateTargetGroupsRequest $req) This API is used to disassociate a CLB from a target group.This is an async API. After the API return succeeds, you can call the DescribeTaskStatus API with the returned RequestID as an input parameter to check whether this task is successful.
 * @method Models\InquirePriceCreateGatewayLoadBalancerResponse InquirePriceCreateGatewayLoadBalancer(Models\InquirePriceCreateGatewayLoadBalancerRequest $req) This API is used to query the price for creating a GWLB.
 * @method Models\ModifyGatewayLoadBalancerAttributeResponse ModifyGatewayLoadBalancerAttribute(Models\ModifyGatewayLoadBalancerAttributeRequest $req) This API is used to modify the attributes of a CLB instance. It supports modifying the name and bandwidth cap of the CLB instance.
 * @method Models\ModifyTargetGroupAttributeResponse ModifyTargetGroupAttribute(Models\ModifyTargetGroupAttributeRequest $req) This API is used to modify the name, health check, and other attributes of the target group.
 * @method Models\ModifyTargetGroupInstancesWeightResponse ModifyTargetGroupInstancesWeight(Models\ModifyTargetGroupInstancesWeightRequest $req) This API is used to modify the server weight of a target group.This is an async API. After the API return succeeds, you can call the DescribeTaskStatus API with the returned RequestID as an input parameter to check whether this task is successful.
 * @method Models\RegisterTargetGroupInstancesResponse RegisterTargetGroupInstances(Models\RegisterTargetGroupInstancesRequest $req) This API is used to register servers to a target group.This is an async API. After the API return succeeds, you can call the DescribeTaskStatus API with the returned RequestID as an input parameter to check whether this task is successful.
 */

class GwlbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "gwlb.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "gwlb";

    /**
     * @var string
     */
    protected $version = "2024-09-06";

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
        $respClass = "TencentCloud"."\\".ucfirst("gwlb")."\\"."V20240906\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
