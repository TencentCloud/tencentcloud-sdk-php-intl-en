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
 * @method Models\CheckEdgeClusterCIDRResponse CheckEdgeClusterCIDR(Models\CheckEdgeClusterCIDRRequest $req) This API is used to check if the CIDR block of a TKE Edge cluster conflicts with other CIDR blocks.
 * @method Models\CheckInstancesUpgradeAbleResponse CheckInstancesUpgradeAble(Models\CheckInstancesUpgradeAbleRequest $req) This API is used to query nodes eligible for an upgrade in the given node list.
 * @method Models\CreateBackupStorageLocationResponse CreateBackupStorageLocation(Models\CreateBackupStorageLocationRequest $req) This API is used to create a backup repository. You can specify the storage type (such as COS), the bucket region and the name. Up to 100 repositories can be created. Note that the settings of this API apply globally. You only need to create one backup repository, and back up TKE clusters in different regions in it.
 * @method Models\CreateCLSLogConfigResponse CreateCLSLogConfig(Models\CreateCLSLogConfigRequest $req) This API is used to create log collection configuration.
 * @method Models\CreateClusterResponse CreateCluster(Models\CreateClusterRequest $req) This API is used to create a cluster.
 * @method Models\CreateClusterEndpointResponse CreateClusterEndpoint(Models\CreateClusterEndpointRequest $req) This API is used to create a cluster access endpoint.
 * @method Models\CreateClusterEndpointVipResponse CreateClusterEndpointVip(Models\CreateClusterEndpointVipRequest $req) This API is used to create a public network access port for a managed cluster. Note: This API will be disused soon. Please call `CreateClusterEndpoint` instead.
 * @method Models\CreateClusterInstancesResponse CreateClusterInstances(Models\CreateClusterInstancesRequest $req) This API is used to create one or more nodes in a cluster.
 * @method Models\CreateClusterNodePoolResponse CreateClusterNodePool(Models\CreateClusterNodePoolRequest $req) This API is used to create a node pool.
 * @method Models\CreateClusterRouteTableResponse CreateClusterRouteTable(Models\CreateClusterRouteTableRequest $req) This API is used to create a cluster route table.
 * @method Models\CreateClusterVirtualNodeResponse CreateClusterVirtualNode(Models\CreateClusterVirtualNodeRequest $req) This API is used to create the Pay-as-you-go Super Node.
 * @method Models\CreateClusterVirtualNodePoolResponse CreateClusterVirtualNodePool(Models\CreateClusterVirtualNodePoolRequest $req) This API is used to create the Super Node Pool.
 * @method Models\CreateECMInstancesResponse CreateECMInstances(Models\CreateECMInstancesRequest $req) This API is used to create an ECM instance.
 * @method Models\CreateEdgeCVMInstancesResponse CreateEdgeCVMInstances(Models\CreateEdgeCVMInstancesRequest $req) This API is used to create CVM instances in the specified TKE edge cluster.
 * @method Models\CreateEdgeLogConfigResponse CreateEdgeLogConfig(Models\CreateEdgeLogConfigRequest $req) This API is used to create log collection configuration for a TKE Edge cluster.
 * @method Models\CreateEksLogConfigResponse CreateEksLogConfig(Models\CreateEksLogConfigRequest $req) This API is used to create Log Collection Configuration for Elastic Cluster.
 * @method Models\CreatePrometheusAlertRuleResponse CreatePrometheusAlertRule(Models\CreatePrometheusAlertRuleRequest $req) This API is used to create an alarm rule.
 * @method Models\CreateTKEEdgeClusterResponse CreateTKEEdgeCluster(Models\CreateTKEEdgeClusterRequest $req) This API is used to create a TKE Edge cluster.
 * @method Models\DeleteAddonResponse DeleteAddon(Models\DeleteAddonRequest $req) This API is used to delete an add-on.
 * @method Models\DeleteBackupStorageLocationResponse DeleteBackupStorageLocation(Models\DeleteBackupStorageLocationRequest $req) This API is used to delete a backup repository.
 * @method Models\DeleteClusterResponse DeleteCluster(Models\DeleteClusterRequest $req) This API is used to delete a cluster. (Cloud API v3).
 * @method Models\DeleteClusterAsGroupsResponse DeleteClusterAsGroups(Models\DeleteClusterAsGroupsRequest $req) Delete a cluster scaling group
 * @method Models\DeleteClusterEndpointResponse DeleteClusterEndpoint(Models\DeleteClusterEndpointRequest $req) This API is used to delete a cluster access endpoint.
 * @method Models\DeleteClusterEndpointVipResponse DeleteClusterEndpointVip(Models\DeleteClusterEndpointVipRequest $req) Delete the external network access port of the managed cluster (the old way, only the external network port of the managed cluster is supported)
 * @method Models\DeleteClusterInstancesResponse DeleteClusterInstances(Models\DeleteClusterInstancesRequest $req) This API is used to delete one or more nodes from a cluster.
 * @method Models\DeleteClusterNodePoolResponse DeleteClusterNodePool(Models\DeleteClusterNodePoolRequest $req) This API is used to delete a node pool.
 * @method Models\DeleteClusterRouteResponse DeleteClusterRoute(Models\DeleteClusterRouteRequest $req) This API is used to delete a cluster route.
 * @method Models\DeleteClusterRouteTableResponse DeleteClusterRouteTable(Models\DeleteClusterRouteTableRequest $req) This API is used to delete cluster a route table.
 * @method Models\DeleteClusterVirtualNodeResponse DeleteClusterVirtualNode(Models\DeleteClusterVirtualNodeRequest $req) This API is used to delete the super node.
 * @method Models\DeleteClusterVirtualNodePoolResponse DeleteClusterVirtualNodePool(Models\DeleteClusterVirtualNodePoolRequest $req) This API is used to delete the Super Node Pool.
 * @method Models\DeleteECMInstancesResponse DeleteECMInstances(Models\DeleteECMInstancesRequest $req) This API is used to delete one or more ECM instances.
 * @method Models\DeleteEdgeCVMInstancesResponse DeleteEdgeCVMInstances(Models\DeleteEdgeCVMInstancesRequest $req) This API is used to delete one or more edge CVM instances.
 * @method Models\DeleteEdgeClusterInstancesResponse DeleteEdgeClusterInstances(Models\DeleteEdgeClusterInstancesRequest $req) This API is used to delete one or more edge compute instances.
 * @method Models\DeleteLogConfigsResponse DeleteLogConfigs(Models\DeleteLogConfigsRequest $req) This API is used to delete collection rules within the cluster.
 * @method Models\DeletePrometheusAlertRuleResponse DeletePrometheusAlertRule(Models\DeletePrometheusAlertRuleRequest $req) This API is used to delete an alarm rule.
 * @method Models\DeleteTKEEdgeClusterResponse DeleteTKEEdgeCluster(Models\DeleteTKEEdgeClusterRequest $req) This API is used to delete a TKE Edge cluster.
 * @method Models\DescribeAddonResponse DescribeAddon(Models\DescribeAddonRequest $req) This API is used to query the list of add-ons.
 * @method Models\DescribeAddonValuesResponse DescribeAddonValues(Models\DescribeAddonValuesRequest $req) This API is used to query parameters of an add-on.
 * @method Models\DescribeAvailableClusterVersionResponse DescribeAvailableClusterVersion(Models\DescribeAvailableClusterVersionRequest $req) This API is used to obtain all versions that the cluster can upgrade to.
 * @method Models\DescribeAvailableTKEEdgeVersionResponse DescribeAvailableTKEEdgeVersion(Models\DescribeAvailableTKEEdgeVersionRequest $req) This API is used to check the edge component versions and K8s versions supported by TKE Edge.
 * @method Models\DescribeBackupStorageLocationsResponse DescribeBackupStorageLocations(Models\DescribeBackupStorageLocationsRequest $req) This API is used to query backup repositories.
 * @method Models\DescribeBatchModifyTagsStatusResponse DescribeBatchModifyTagsStatus(Models\DescribeBatchModifyTagsStatusRequest $req) This API is used to query batch modification Tag status.
 * @method Models\DescribeClusterAsGroupOptionResponse DescribeClusterAsGroupOption(Models\DescribeClusterAsGroupOptionRequest $req) Cluster auto scaling configuration
 * @method Models\DescribeClusterAsGroupsResponse DescribeClusterAsGroups(Models\DescribeClusterAsGroupsRequest $req) Cluster-associated scaling group list
 * @method Models\DescribeClusterAuthenticationOptionsResponse DescribeClusterAuthenticationOptions(Models\DescribeClusterAuthenticationOptionsRequest $req) This API is used to query cluster authentication configuration.
 * @method Models\DescribeClusterCommonNamesResponse DescribeClusterCommonNames(Models\DescribeClusterCommonNamesRequest $req) This API is used to obtain the CommonName from the kube-apiserver client certificate that corresponding to the sub-account in RBAC authorization mode. 
 * @method Models\DescribeClusterEndpointStatusResponse DescribeClusterEndpointStatus(Models\DescribeClusterEndpointStatusRequest $req) Query cluster access port status (intranet / extranet access is enabled for independent clusters, and intranet access is supported for managed clusters)
 * @method Models\DescribeClusterEndpointVipStatusResponse DescribeClusterEndpointVipStatus(Models\DescribeClusterEndpointVipStatusRequest $req) Query cluster open port process status (only supports external ports of the managed cluster)
 * @method Models\DescribeClusterEndpointsResponse DescribeClusterEndpoints(Models\DescribeClusterEndpointsRequest $req) This API is used to query cluster access addresses, including private network address, public network address, public network domain name, and security policy for public network access.
 * @method Models\DescribeClusterExtraArgsResponse DescribeClusterExtraArgs(Models\DescribeClusterExtraArgsRequest $req) This API is used to query custom parameters of a cluster.
 * @method Models\DescribeClusterInstancesResponse DescribeClusterInstances(Models\DescribeClusterInstancesRequest $req) This API is used to query information of node instances in a cluster.
 * @method Models\DescribeClusterKubeconfigResponse DescribeClusterKubeconfig(Models\DescribeClusterKubeconfigRequest $req) This API is used to obtain the cluster kubeconfig file. Different sub-accounts have their own kubeconfig files. The kubeconfig file contains the kube-apiserver client certificate of the corresponding sub-account. By default, the client certificate is created when this API is called for the first time, and the certificate is valid for 20 years with no permissions granted. For the cluster owner or primary account, the cluster-admin permission is granted by default.
 * @method Models\DescribeClusterLevelAttributeResponse DescribeClusterLevelAttribute(Models\DescribeClusterLevelAttributeRequest $req) This API is used to obtain the cluster model.
 * @method Models\DescribeClusterLevelChangeRecordsResponse DescribeClusterLevelChangeRecords(Models\DescribeClusterLevelChangeRecordsRequest $req) This API is used to query the cluster model adjustment history.
 * @method Models\DescribeClusterNodePoolDetailResponse DescribeClusterNodePoolDetail(Models\DescribeClusterNodePoolDetailRequest $req) This API is used to query detailed information of a node pool.
 * @method Models\DescribeClusterNodePoolsResponse DescribeClusterNodePools(Models\DescribeClusterNodePoolsRequest $req) This API is used to query the node pool list
 * @method Models\DescribeClusterRouteTablesResponse DescribeClusterRouteTables(Models\DescribeClusterRouteTablesRequest $req) This API is used to query one or more cluster route tables.
 * @method Models\DescribeClusterRoutesResponse DescribeClusterRoutes(Models\DescribeClusterRoutesRequest $req) This API is used to query cluster routes.
 * @method Models\DescribeClusterSecurityResponse DescribeClusterSecurity(Models\DescribeClusterSecurityRequest $req) This API is used to query the key information of a cluster.
 * @method Models\DescribeClusterStatusResponse DescribeClusterStatus(Models\DescribeClusterStatusRequest $req) This API is used to query the information of clusters under the current account.
 * @method Models\DescribeClusterVirtualNodeResponse DescribeClusterVirtualNode(Models\DescribeClusterVirtualNodeRequest $req) This API is used to view the Super Node list.
 * @method Models\DescribeClusterVirtualNodePoolsResponse DescribeClusterVirtualNodePools(Models\DescribeClusterVirtualNodePoolsRequest $req) This API is used to view the Super Node Pool list.
 * @method Models\DescribeClustersResponse DescribeClusters(Models\DescribeClustersRequest $req) This API is used to query clusters list.
 * @method Models\DescribeECMInstancesResponse DescribeECMInstances(Models\DescribeECMInstancesRequest $req) This API is used to obtain the ECM instance information.
 * @method Models\DescribeEdgeAvailableExtraArgsResponse DescribeEdgeAvailableExtraArgs(Models\DescribeEdgeAvailableExtraArgsRequest $req) This API is used to query the custom parameters available for an edge cluster.
 * @method Models\DescribeEdgeCVMInstancesResponse DescribeEdgeCVMInstances(Models\DescribeEdgeCVMInstancesRequest $req) This API is used to obtain the edge CVM instance information.
 * @method Models\DescribeEdgeClusterExtraArgsResponse DescribeEdgeClusterExtraArgs(Models\DescribeEdgeClusterExtraArgsRequest $req) This API is used to query custom parameters of an edge cluster.
 * @method Models\DescribeEdgeClusterInstancesResponse DescribeEdgeClusterInstances(Models\DescribeEdgeClusterInstancesRequest $req) This API is used to query the TKE Edge cluster node information.
 * @method Models\DescribeEdgeClusterUpgradeInfoResponse DescribeEdgeClusterUpgradeInfo(Models\DescribeEdgeClusterUpgradeInfoRequest $req) This API is used to query the upgrade information of an edge cluster, including the upgradeable components, the current upgrade status, and errors occur during the upgrade.
 * @method Models\DescribeEdgeLogSwitchesResponse DescribeEdgeLogSwitches(Models\DescribeEdgeLogSwitchesRequest $req) This API is used to query the status of event storage, cluster auditing and logging.
 * @method Models\DescribeEnableVpcCniProgressResponse DescribeEnableVpcCniProgress(Models\DescribeEnableVpcCniProgressRequest $req) This API is used to query the task progress of enabling VPC-CNI mode.
 * @method Models\DescribeEncryptionStatusResponse DescribeEncryptionStatus(Models\DescribeEncryptionStatusRequest $req) This API is used to query the encryption status of etcd data.
 * @method Models\DescribeExistedInstancesResponse DescribeExistedInstances(Models\DescribeExistedInstancesRequest $req) This API is used to query one or more existing node and determine whether they can be added to a cluster.
 * @method Models\DescribeExternalNodeSupportConfigResponse DescribeExternalNodeSupportConfig(Models\DescribeExternalNodeSupportConfigRequest $req) This API is used to view third-party node pool configuration information.
 * @method Models\DescribeIPAMDResponse DescribeIPAMD(Models\DescribeIPAMDRequest $req) This API is used to obtain eniipamd component information.
 * @method Models\DescribeImagesResponse DescribeImages(Models\DescribeImagesRequest $req) This API is used to get image information.
 * @method Models\DescribeLogConfigsResponse DescribeLogConfigs(Models\DescribeLogConfigsRequest $req) This API is used to query the log collection rules.
 * @method Models\DescribeLogSwitchesResponse DescribeLogSwitches(Models\DescribeLogSwitchesRequest $req) This API is used to query Cluster Log (Auditing, Event, Common Log) Switch List.
 * @method Models\DescribePodChargeInfoResponse DescribePodChargeInfo(Models\DescribePodChargeInfoRequest $req) This API is used to query the billing information of running Pods. You can query a specific Pod by Namespace and Name or batch query by Pod Uid.
 * @method Models\DescribePrometheusInstanceResponse DescribePrometheusInstance(Models\DescribePrometheusInstanceRequest $req) This API is used to obtain the instance details.
 * @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) This API is used to obtain all regions supported by TKE.
 * @method Models\DescribeReservedInstanceUtilizationRateResponse DescribeReservedInstanceUtilizationRate(Models\DescribeReservedInstanceUtilizationRateRequest $req) This API is used to query the usage rate of various types of Reserved Coupons.
 * @method Models\DescribeResourceUsageResponse DescribeResourceUsage(Models\DescribeResourceUsageRequest $req) This API is used to query the cluster resource usage.
 * @method Models\DescribeRouteTableConflictsResponse DescribeRouteTableConflicts(Models\DescribeRouteTableConflictsRequest $req) This API is used to query the list of route table conflicts.
 * @method Models\DescribeSupportedRuntimeResponse DescribeSupportedRuntime(Models\DescribeSupportedRuntimeRequest $req) This API is used to retrieve optional runtime versions based on K8S version.
 * @method Models\DescribeTKEEdgeClusterCredentialResponse DescribeTKEEdgeClusterCredential(Models\DescribeTKEEdgeClusterCredentialRequest $req) This API is used to obtain the authentication information of a TKE Edge cluster.
 * @method Models\DescribeTKEEdgeClusterStatusResponse DescribeTKEEdgeClusterStatus(Models\DescribeTKEEdgeClusterStatusRequest $req) This API is used to query the current status and process information of a TKE Edge cluster.
 * @method Models\DescribeTKEEdgeClustersResponse DescribeTKEEdgeClusters(Models\DescribeTKEEdgeClustersRequest $req) This API is used to query the list of TKE Edge clusters.
 * @method Models\DescribeTKEEdgeExternalKubeconfigResponse DescribeTKEEdgeExternalKubeconfig(Models\DescribeTKEEdgeExternalKubeconfigRequest $req) This API is used to obtain the kubeconfig for access to a TKE Edge cluster through the public network.
 * @method Models\DescribeTKEEdgeScriptResponse DescribeTKEEdgeScript(Models\DescribeTKEEdgeScriptRequest $req) This API is used to query the URL of TKE edge script. You can add external nodes to a TKE Edge cluster by downloading the URL.
 * @method Models\DescribeVersionsResponse DescribeVersions(Models\DescribeVersionsRequest $req) This API is used to query cluster version information.
 * @method Models\DescribeVpcCniPodLimitsResponse DescribeVpcCniPodLimits(Models\DescribeVpcCniPodLimitsRequest $req) This API is used to query the maximum number of Pods in the VPC-CNI network mode supported by the models in the specified availability zone of the current user and region.
 * @method Models\DisableClusterDeletionProtectionResponse DisableClusterDeletionProtection(Models\DisableClusterDeletionProtectionRequest $req) This API is used to disable cluster deletion protection.
 * @method Models\DisableEncryptionProtectionResponse DisableEncryptionProtection(Models\DisableEncryptionProtectionRequest $req) This API is used to disable encryption protection.
 * @method Models\DrainClusterVirtualNodeResponse DrainClusterVirtualNode(Models\DrainClusterVirtualNodeRequest $req) This API is used to evict the Super Node.
 * @method Models\EnableClusterDeletionProtectionResponse EnableClusterDeletionProtection(Models\EnableClusterDeletionProtectionRequest $req) This API is used to enable cluster deletion protection.
 * @method Models\EnableEncryptionProtectionResponse EnableEncryptionProtection(Models\EnableEncryptionProtectionRequest $req) This API is used to enable Encrypted Data Protection, which requires enabling KMS capability and completing KMS authorization.
 * @method Models\EnableVpcCniNetworkTypeResponse EnableVpcCniNetworkType(Models\EnableVpcCniNetworkTypeRequest $req) This API is used to enable the VPC-CNI network mode for GR clusters.
 * @method Models\ForwardTKEEdgeApplicationRequestV3Response ForwardTKEEdgeApplicationRequestV3(Models\ForwardTKEEdgeApplicationRequestV3Request $req) This API is used to work with the add-ons of a TKE Edge cluster.
 * @method Models\GetClusterLevelPriceResponse GetClusterLevelPrice(Models\GetClusterLevelPriceRequest $req) Obtaining the price of specified cluster model
 * @method Models\GetTkeAppChartListResponse GetTkeAppChartList(Models\GetTkeAppChartListRequest $req) This API is used to retrieve the App List supported by TKE.
 * @method Models\GetUpgradeInstanceProgressResponse GetUpgradeInstanceProgress(Models\GetUpgradeInstanceProgressRequest $req) This API is used to obtain the current progress of node upgrade. If the cluster is not in node upgrade status, the API will report an error: Task not found.
 * @method Models\InstallAddonResponse InstallAddon(Models\InstallAddonRequest $req) This API is used to install an add-on on the target cluster.
 * @method Models\InstallEdgeLogAgentResponse InstallEdgeLogAgent(Models\InstallEdgeLogAgentRequest $req) This API is used to install the log collection add-on on TKE Edge cluster nodes.
 * @method Models\ModifyClusterAsGroupAttributeResponse ModifyClusterAsGroupAttribute(Models\ModifyClusterAsGroupAttributeRequest $req) Modify cluster scaling group attributes
 * @method Models\ModifyClusterAsGroupOptionAttributeResponse ModifyClusterAsGroupOptionAttribute(Models\ModifyClusterAsGroupOptionAttributeRequest $req) This API is used to modify cluster auto scaling attributes.
 * @method Models\ModifyClusterAttributeResponse ModifyClusterAttribute(Models\ModifyClusterAttributeRequest $req) This API is used to modify cluster attributes.
 * @method Models\ModifyClusterAuthenticationOptionsResponse ModifyClusterAuthenticationOptions(Models\ModifyClusterAuthenticationOptionsRequest $req) This API is used to modify cluster authentication configuration.
 * @method Models\ModifyClusterEndpointSPResponse ModifyClusterEndpointSP(Models\ModifyClusterEndpointSPRequest $req) Modify the security policy of the external port of the managed cluster (the old way, only the external port of the managed cluster is supported)
 * @method Models\ModifyClusterImageResponse ModifyClusterImage(Models\ModifyClusterImageRequest $req) This API is used to modify the cluster image.
 * @method Models\ModifyClusterNodePoolResponse ModifyClusterNodePool(Models\ModifyClusterNodePoolRequest $req) This API is used to edit a node pool.
 * @method Models\ModifyClusterRuntimeConfigResponse ModifyClusterRuntimeConfig(Models\ModifyClusterRuntimeConfigRequest $req) This API is used to modify the latitude runtime configuration of clusters and node pools.
 * @method Models\ModifyClusterTagsResponse ModifyClusterTags(Models\ModifyClusterTagsRequest $req) This API is used to modify cluster tags.
 * @method Models\ModifyClusterVirtualNodePoolResponse ModifyClusterVirtualNodePool(Models\ModifyClusterVirtualNodePoolRequest $req) This API is used to modify the Super Node Pool.
 * @method Models\ModifyNodePoolInstanceTypesResponse ModifyNodePoolInstanceTypes(Models\ModifyNodePoolInstanceTypesRequest $req) This API is used to modify the model of instances in a node pool.
 * @method Models\ModifyPrometheusAlertRuleResponse ModifyPrometheusAlertRule(Models\ModifyPrometheusAlertRuleRequest $req) This API is used to modify an alert rule.
 * @method Models\RemoveNodeFromNodePoolResponse RemoveNodeFromNodePool(Models\RemoveNodeFromNodePoolRequest $req) This API is used to remove a node from a node pool but retain it in the cluster.
 * @method Models\SetNodePoolNodeProtectionResponse SetNodePoolNodeProtection(Models\SetNodePoolNodeProtectionRequest $req) This API is used to enable removal protection for the nodes automatically created by the scaling group in a node pool.
 * @method Models\UninstallEdgeLogAgentResponse UninstallEdgeLogAgent(Models\UninstallEdgeLogAgentRequest $req) This API is used to uninstall the log collection add-on from TKE Edge cluster nodes.
 * @method Models\UpdateAddonResponse UpdateAddon(Models\UpdateAddonRequest $req) This API is used to update parameters and version of an add-on.
 * @method Models\UpdateClusterKubeconfigResponse UpdateClusterKubeconfig(Models\UpdateClusterKubeconfigRequest $req) This API is used to update the Kubeconfig information of a cluster.
 * @method Models\UpdateClusterVersionResponse UpdateClusterVersion(Models\UpdateClusterVersionRequest $req) This API is used to upgrade the master component of the cluster to the specified version.
 * @method Models\UpdateEdgeClusterVersionResponse UpdateEdgeClusterVersion(Models\UpdateEdgeClusterVersionRequest $req) This API is used to upgrade an edge cluster component to a TKE Edge version.
 * @method Models\UpgradeClusterInstancesResponse UpgradeClusterInstances(Models\UpgradeClusterInstancesRequest $req) This API is used to upgrade work nodes in a cluster.
 */

class TkeClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tke.intl.tencentcloudapi.com";

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
