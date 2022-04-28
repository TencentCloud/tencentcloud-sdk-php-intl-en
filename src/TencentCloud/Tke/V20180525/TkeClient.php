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
 * @method Models\AcquireClusterAdminRoleResponse AcquireClusterAdminRole(Models\AcquireClusterAdminRoleRequest $req) This API can be called to acquire the ClusterRole tke:admin. By setting a CAM policy, you can grant permission of this API to a sub-account that has higher permission in CAM. In this way, this sub-account can call this API directly to acquire the admin role of a Kubernetes cluster.
 * @method Models\AddExistedInstancesResponse AddExistedInstances(Models\AddExistedInstancesRequest $req) This API is used to add one or more existing instances to a cluster.
 * @method Models\AddNodeToNodePoolResponse AddNodeToNodePool(Models\AddNodeToNodePoolRequest $req) This API is used to move nodes in a cluster to a node pool.
 * @method Models\AddVpcCniSubnetsResponse AddVpcCniSubnets(Models\AddVpcCniSubnetsRequest $req) This API is used to add subnets in the container network for a VPC-CNI cluster.
 * @method Models\CheckInstancesUpgradeAbleResponse CheckInstancesUpgradeAble(Models\CheckInstancesUpgradeAbleRequest $req) This API is used to check which nodes can be upgraded in the given node list. 
 * @method Models\CreateClusterResponse CreateCluster(Models\CreateClusterRequest $req) This API is used to create a cluster.
 * @method Models\CreateClusterAsGroupResponse CreateClusterAsGroup(Models\CreateClusterAsGroupRequest $req) Create a scaling group for an existing cluster
 * @method Models\CreateClusterEndpointResponse CreateClusterEndpoint(Models\CreateClusterEndpointRequest $req) Create a cluster access port (intranet / extranet access is enabled for independent clusters, and intranet access is supported for managed clusters)
 * @method Models\CreateClusterEndpointVipResponse CreateClusterEndpointVip(Models\CreateClusterEndpointVipRequest $req) Create an external network access port for the managed cluster (the old way, only the external network port for the managed cluster is supported)
 * @method Models\CreateClusterInstancesResponse CreateClusterInstances(Models\CreateClusterInstancesRequest $req) This API is used to create one or more nodes in a cluster.
 * @method Models\CreateClusterNodePoolResponse CreateClusterNodePool(Models\CreateClusterNodePoolRequest $req) This API is used to create a node pool.
 * @method Models\CreateClusterNodePoolFromExistingAsgResponse CreateClusterNodePoolFromExistingAsg(Models\CreateClusterNodePoolFromExistingAsgRequest $req) This API is used to upgrade a scaling group to a node pool.
 * @method Models\CreateClusterRouteTableResponse CreateClusterRouteTable(Models\CreateClusterRouteTableRequest $req) This API is used to create a cluster route table.
 * @method Models\CreatePrometheusAlertRuleResponse CreatePrometheusAlertRule(Models\CreatePrometheusAlertRuleRequest $req) This API is used to create an alarm rule.
 * @method Models\DeleteClusterResponse DeleteCluster(Models\DeleteClusterRequest $req) This API is used to delete a cluster. (Cloud API v3).
 * @method Models\DeleteClusterAsGroupsResponse DeleteClusterAsGroups(Models\DeleteClusterAsGroupsRequest $req) Delete a cluster scaling group
 * @method Models\DeleteClusterEndpointResponse DeleteClusterEndpoint(Models\DeleteClusterEndpointRequest $req) Delete the cluster access port (intranet / extranet access is enabled for independent clusters, and intranet access is supported for managed clusters)
 * @method Models\DeleteClusterEndpointVipResponse DeleteClusterEndpointVip(Models\DeleteClusterEndpointVipRequest $req) Delete the external network access port of the managed cluster (the old way, only the external network port of the managed cluster is supported)
 * @method Models\DeleteClusterInstancesResponse DeleteClusterInstances(Models\DeleteClusterInstancesRequest $req) This API is used to delete one or more nodes from a cluster.
 * @method Models\DeleteClusterNodePoolResponse DeleteClusterNodePool(Models\DeleteClusterNodePoolRequest $req) This API is used to delete a node pool.
 * @method Models\DeleteClusterRouteResponse DeleteClusterRoute(Models\DeleteClusterRouteRequest $req) This API is used to delete a cluster route.
 * @method Models\DeleteClusterRouteTableResponse DeleteClusterRouteTable(Models\DeleteClusterRouteTableRequest $req) This API is used to delete cluster a route table.
 * @method Models\DeletePrometheusAlertRuleResponse DeletePrometheusAlertRule(Models\DeletePrometheusAlertRuleRequest $req) This API is used to delete an alarm rule.
 * @method Models\DescribeAvailableClusterVersionResponse DescribeAvailableClusterVersion(Models\DescribeAvailableClusterVersionRequest $req) This API is used to obtain all versions that the cluster can upgrade to.
 * @method Models\DescribeClusterAsGroupOptionResponse DescribeClusterAsGroupOption(Models\DescribeClusterAsGroupOptionRequest $req) Cluster auto scaling configuration
 * @method Models\DescribeClusterAsGroupsResponse DescribeClusterAsGroups(Models\DescribeClusterAsGroupsRequest $req) Cluster-associated scaling group list
 * @method Models\DescribeClusterAuthenticationOptionsResponse DescribeClusterAuthenticationOptions(Models\DescribeClusterAuthenticationOptionsRequest $req) This API is used to query cluster authentication configuration.
 * @method Models\DescribeClusterCommonNamesResponse DescribeClusterCommonNames(Models\DescribeClusterCommonNamesRequest $req) This API is used to obtain the CommonName from the kube-apiserver client certificate that corresponding to the sub-account in RBAC authorization mode. 
 * @method Models\DescribeClusterEndpointStatusResponse DescribeClusterEndpointStatus(Models\DescribeClusterEndpointStatusRequest $req) Query cluster access port status (intranet / extranet access is enabled for independent clusters, and intranet access is supported for managed clusters)
 * @method Models\DescribeClusterEndpointVipStatusResponse DescribeClusterEndpointVipStatus(Models\DescribeClusterEndpointVipStatusRequest $req) Query cluster open port process status (only supports external ports of the managed cluster)
 * @method Models\DescribeClusterInstancesResponse DescribeClusterInstances(Models\DescribeClusterInstancesRequest $req)  This API is used to query information of one or more instances in a cluster. 
 * @method Models\DescribeClusterKubeconfigResponse DescribeClusterKubeconfig(Models\DescribeClusterKubeconfigRequest $req) This API is used to obtain the cluster kubeconfig file. Different sub-accounts have their own kubeconfig files. The kubeconfig file contains the kube-apiserver client certificate of the corresponding sub-account. By default, the client certificate is created when this API is called for the first time, and the certificate is valid for 20 years with no permissions granted. For the cluster owner or primary account, the cluster-admin permission is granted by default.
 * @method Models\DescribeClusterLevelAttributeResponse DescribeClusterLevelAttribute(Models\DescribeClusterLevelAttributeRequest $req) This API is used to obtain the cluster model.
 * @method Models\DescribeClusterLevelChangeRecordsResponse DescribeClusterLevelChangeRecords(Models\DescribeClusterLevelChangeRecordsRequest $req) This API is used to query the cluster model adjustment history.
 * @method Models\DescribeClusterNodePoolDetailResponse DescribeClusterNodePoolDetail(Models\DescribeClusterNodePoolDetailRequest $req) This API is used to query detailed information of a node pool.
 * @method Models\DescribeClusterNodePoolsResponse DescribeClusterNodePools(Models\DescribeClusterNodePoolsRequest $req) This API is used to query the node pool list
 * @method Models\DescribeClusterRouteTablesResponse DescribeClusterRouteTables(Models\DescribeClusterRouteTablesRequest $req) This API is used to query one or more cluster route tables.
 * @method Models\DescribeClusterRoutesResponse DescribeClusterRoutes(Models\DescribeClusterRoutesRequest $req) This API is used to query cluster routes.
 * @method Models\DescribeClusterSecurityResponse DescribeClusterSecurity(Models\DescribeClusterSecurityRequest $req) This API is used to query the key information of a cluster.
 * @method Models\DescribeClusterStatusResponse DescribeClusterStatus(Models\DescribeClusterStatusRequest $req) This API is used to query the information of clusters under the current account.
 * @method Models\DescribeClustersResponse DescribeClusters(Models\DescribeClustersRequest $req) This API is used to query clusters list.
 * @method Models\DescribeEnableVpcCniProgressResponse DescribeEnableVpcCniProgress(Models\DescribeEnableVpcCniProgressRequest $req) This API is used to query the task progress of enabling VPC-CNI mode.
 * @method Models\DescribeExistedInstancesResponse DescribeExistedInstances(Models\DescribeExistedInstancesRequest $req) This API is used to query one or more existing node and determine whether they can be added to a cluster.
 * @method Models\DescribeImagesResponse DescribeImages(Models\DescribeImagesRequest $req) This API is used to get image information.
 * @method Models\DescribePrometheusInstanceResponse DescribePrometheusInstance(Models\DescribePrometheusInstanceRequest $req) This API is used to obtain the instance details.
 * @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) This API is used to obtain all regions supported by TKE.
 * @method Models\DescribeResourceUsageResponse DescribeResourceUsage(Models\DescribeResourceUsageRequest $req) This API is used to query the cluster resource usage.
 * @method Models\DescribeRouteTableConflictsResponse DescribeRouteTableConflicts(Models\DescribeRouteTableConflictsRequest $req) This API is used to query the list of route table conflicts.
 * @method Models\DescribeTKEEdgeScriptResponse DescribeTKEEdgeScript(Models\DescribeTKEEdgeScriptRequest $req) This API is used to query the URL of TKE edge script.
 * @method Models\DescribeVersionsResponse DescribeVersions(Models\DescribeVersionsRequest $req) This API is used to query cluster version information.
 * @method Models\DescribeVpcCniPodLimitsResponse DescribeVpcCniPodLimits(Models\DescribeVpcCniPodLimitsRequest $req) This API is used to query the maximum number of Pods in the VPC-CNI network mode supported by the models in the specified availability zone of the current user and region.
 * @method Models\DisableClusterDeletionProtectionResponse DisableClusterDeletionProtection(Models\DisableClusterDeletionProtectionRequest $req) This API is used to disable cluster deletion protection.
 * @method Models\EnableClusterDeletionProtectionResponse EnableClusterDeletionProtection(Models\EnableClusterDeletionProtectionRequest $req) This API is used to enable cluster deletion protection.
 * @method Models\EnableVpcCniNetworkTypeResponse EnableVpcCniNetworkType(Models\EnableVpcCniNetworkTypeRequest $req) This API is used to enable the VPC-CNI network mode for GR clusters.
 * @method Models\GetClusterLevelPriceResponse GetClusterLevelPrice(Models\GetClusterLevelPriceRequest $req) Obtaining the price of specified cluster model
 * @method Models\GetUpgradeInstanceProgressResponse GetUpgradeInstanceProgress(Models\GetUpgradeInstanceProgressRequest $req) This API is used to obtain the current progress of the node upgrade. 
 * @method Models\ModifyClusterAsGroupAttributeResponse ModifyClusterAsGroupAttribute(Models\ModifyClusterAsGroupAttributeRequest $req) Modify cluster scaling group attributes
 * @method Models\ModifyClusterAsGroupOptionAttributeResponse ModifyClusterAsGroupOptionAttribute(Models\ModifyClusterAsGroupOptionAttributeRequest $req) This API is used to modify cluster auto scaling attributes.
 * @method Models\ModifyClusterAttributeResponse ModifyClusterAttribute(Models\ModifyClusterAttributeRequest $req) This API is used to modify cluster attributes.
 * @method Models\ModifyClusterAuthenticationOptionsResponse ModifyClusterAuthenticationOptions(Models\ModifyClusterAuthenticationOptionsRequest $req) This API is used to modify cluster authentication configuration.
 * @method Models\ModifyClusterEndpointSPResponse ModifyClusterEndpointSP(Models\ModifyClusterEndpointSPRequest $req) Modify the security policy of the external port of the managed cluster (the old way, only the external port of the managed cluster is supported)
 * @method Models\ModifyClusterNodePoolResponse ModifyClusterNodePool(Models\ModifyClusterNodePoolRequest $req) This API is used to edit a node pool.
 * @method Models\ModifyNodePoolInstanceTypesResponse ModifyNodePoolInstanceTypes(Models\ModifyNodePoolInstanceTypesRequest $req) This API is used to modify the model of instances in a node pool.
 * @method Models\ModifyPrometheusAlertRuleResponse ModifyPrometheusAlertRule(Models\ModifyPrometheusAlertRuleRequest $req) This API is used to modify an alarm rule. 
 * @method Models\RemoveNodeFromNodePoolResponse RemoveNodeFromNodePool(Models\RemoveNodeFromNodePoolRequest $req) This API is used to remove a node from a node pool but retain it in the cluster.
 * @method Models\SetNodePoolNodeProtectionResponse SetNodePoolNodeProtection(Models\SetNodePoolNodeProtectionRequest $req) This API is used to enable removal protection for the nodes automatically created by the scaling group in a node pool.
 * @method Models\UpdateClusterVersionResponse UpdateClusterVersion(Models\UpdateClusterVersionRequest $req) This API is used to upgrade the master component of the cluster to the specified version.
 * @method Models\UpgradeClusterInstancesResponse UpgradeClusterInstances(Models\UpgradeClusterInstancesRequest $req) This API is used to upgrade one or more work nodes in the cluster. 
 */

class TkeClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tke.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tke";

    /**
     * @var string
     */
    protected $version = "2018-05-25";

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
        $respClass = "TencentCloud"."\\".ucfirst("tke")."\\"."V20180525\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
