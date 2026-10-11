<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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

namespace TencentCloud\Emr\V20190103;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Emr\V20190103\Models as Models;

/**
 * @method Models\AddMetricScaleStrategyResponse AddMetricScaleStrategy(Models\AddMetricScaleStrategyRequest $req) This API is used to add an automatic scaling rule by load and time.
 * @method Models\AddNodeResourceConfigResponse AddNodeResourceConfig(Models\AddNodeResourceConfigRequest $req) This API is used to add node specifications for the current cluster.
 * @method Models\AddUsersForUserManagerResponse AddUsersForUserManager(Models\AddUsersForUserManagerRequest $req) This API is used for clusters with the OpenLDAP component installed.
This API is used to add a user list (user management).
 * @method Models\AttachDisksResponse AttachDisks(Models\AttachDisksRequest $req) This API is used to mount a cloud disk.
 * @method Models\ConvertPreToPostClusterResponse ConvertPreToPostCluster(Models\ConvertPreToPostClusterRequest $req) This API is used to convert a monthly subscription cluster to a pay-as-you-go cluster (excluding CDB).
 * @method Models\CreateClusterResponse CreateCluster(Models\CreateClusterRequest $req) This API is used to create an EMR cluster.
 * @method Models\CreateDynamicInstanceResponse CreateDynamicInstance(Models\CreateDynamicInstanceRequest $req) This API is used to create a DynamicInstance in a containerized EMR on TKE cluster.
 * @method Models\CreateGroupsSTDResponse CreateGroupsSTD(Models\CreateGroupsSTDRequest $req) This API is used to create user groups in batches in user management.
 * @method Models\CreateInstanceResponse CreateInstance(Models\CreateInstanceRequest $req) This API is used to create an EMR cluster.
 * @method Models\CreateSLInstanceResponse CreateSLInstance(Models\CreateSLInstanceRequest $req) This API is used to create a Serverless instance, for example, HBase, StarRocks, and TCBase instances.- This API is successfully called, and a Serverless instance is created. If the instance creation request succeeds, InstanceId of the instance and RequestID of the request are returned.
- This is an asynchronous API. The operation is not completed immediately when the API call returns. The instance operation result can be viewed by calling the DescribeInstancesList API, and the StatusDesc field for the current instance can be returned.
 * @method Models\DeleteAutoScaleStrategyResponse DeleteAutoScaleStrategy(Models\DeleteAutoScaleStrategyRequest $req) This API is used to delete an automatic scaling rule. Nodes scaled based on this rule are terminated in the backend.
 * @method Models\DeleteGroupsSTDResponse DeleteGroupsSTD(Models\DeleteGroupsSTDRequest $req) This API is used to delete user groups in batches.
 * @method Models\DeleteNodeResourceConfigResponse DeleteNodeResourceConfig(Models\DeleteNodeResourceConfigRequest $req) This API is used to delete node specifications of the current cluster.
 * @method Models\DeployYarnConfResponse DeployYarnConf(Models\DeployYarnConfRequest $req) This API is used to bring the deployment into effect in YARN resource scheduling.
 * @method Models\DescribeAutoScaleGroupGlobalConfResponse DescribeAutoScaleGroupGlobalConf(Models\DescribeAutoScaleGroupGlobalConfRequest $req) This API is used to obtain the global configuration of auto scaling.
 * @method Models\DescribeAutoScaleRecordsResponse DescribeAutoScaleRecords(Models\DescribeAutoScaleRecordsRequest $req) This API is used to obtain the detailed automatic scaling records of a cluster.
 * @method Models\DescribeAutoScaleStrategiesResponse DescribeAutoScaleStrategies(Models\DescribeAutoScaleStrategiesRequest $req) This API is used to obtain an automatic scaling rule.
 * @method Models\DescribeBootScriptResponse DescribeBootScript(Models\DescribeBootScriptRequest $req) This API is used to obtain a bootstrap script.
 * @method Models\DescribeClusterFlowStatusDetailResponse DescribeClusterFlowStatusDetail(Models\DescribeClusterFlowStatusDetailRequest $req) This API is used to query the running status details of an EMR cluster task.
 * @method Models\DescribeClusterNodesResponse DescribeClusterNodes(Models\DescribeClusterNodesRequest $req) This API is used to query information of a cluster node.
 * @method Models\DescribeDAGInfoResponse DescribeDAGInfo(Models\DescribeDAGInfoRequest $req) This API is used to query DAG information.
 * @method Models\DescribeDynamicInstanceDetailResponse DescribeDynamicInstanceDetail(Models\DescribeDynamicInstanceDetailRequest $req) This API is used to describe the details of a DynamicInstance in an EMR on TKE cluster.
 * @method Models\DescribeDynamicInstanceListResponse DescribeDynamicInstanceList(Models\DescribeDynamicInstanceListRequest $req) This API is used to describe the DynamicInstance list of an EMR on TKE cluster.
 * @method Models\DescribeEMREventListResponse DescribeEMREventList(Models\DescribeEMREventListRequest $req) This API is used to query EMR event monitoring data.
 * @method Models\DescribeEmrApplicationStaticsResponse DescribeEmrApplicationStatics(Models\DescribeEmrApplicationStaticsRequest $req) This API is used to query the YARN task statistics information.
 * @method Models\DescribeEmrOverviewMetricsResponse DescribeEmrOverviewMetrics(Models\DescribeEmrOverviewMetricsRequest $req) This API is used to query metric data on the monitoring overview page.
 * @method Models\DescribeExportConfsResponse DescribeExportConfs(Models\DescribeExportConfsRequest $req) This API is used to query the export configuration.
 * @method Models\DescribeGlobalConfigResponse DescribeGlobalConfig(Models\DescribeGlobalConfigRequest $req) This API is used to query the global configuration of YARN resource scheduling.
 * @method Models\DescribeGroupsSTDResponse DescribeGroupsSTD(Models\DescribeGroupsSTDRequest $req) This API is used to query a user group.
 * @method Models\DescribeHBaseTableOverviewResponse DescribeHBaseTableOverview(Models\DescribeHBaseTableOverviewRequest $req) This API is used to obtain an overview of HBase table-level monitoring data.
 * @method Models\DescribeHBaseTableRequestMetricResponse DescribeHBaseTableRequestMetric(Models\DescribeHBaseTableRequestMetricRequest $req) This API is used to obtain the read/write rate at the HBase table level.
 * @method Models\DescribeHBaseTableStoreSizeMetricResponse DescribeHBaseTableStoreSizeMetric(Models\DescribeHBaseTableStoreSizeMetricRequest $req) This API is used to query the StoreSize monitoring metric data at the HBase table level.
 * @method Models\DescribeHDFSStorageInfoResponse DescribeHDFSStorageInfo(Models\DescribeHDFSStorageInfoRequest $req) This API is used to query information of files stored in HDFS.
 * @method Models\DescribeHiveQueriesResponse DescribeHiveQueries(Models\DescribeHiveQueriesRequest $req) This API is used to obtain Hive query information.
 * @method Models\DescribeInsightListResponse DescribeInsightList(Models\DescribeInsightListRequest $req) This API is used to obtain insight result information.
 * @method Models\DescribeInspectionTaskResultResponse DescribeInspectionTaskResult(Models\DescribeInspectionTaskResultRequest $req) This API is used to obtain the inspection task result list.
 * @method Models\DescribeInstanceOplogResponse DescribeInstanceOplog(Models\DescribeInstanceOplogRequest $req) This API is used to obtain the instance operation logs.
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) This API is used to query cluster information.
 * @method Models\DescribeInstancesListResponse DescribeInstancesList(Models\DescribeInstancesListRequest $req) This API is used to query the cluster list.
 * @method Models\DescribeKyuubiQueryInfoResponse DescribeKyuubiQueryInfo(Models\DescribeKyuubiQueryInfoRequest $req) This API is used to obtain Kyuubi query information.
 * @method Models\DescribeMetaDBInfoResponse DescribeMetaDBInfo(Models\DescribeMetaDBInfoRequest $req) This API is used to obtain cluster MetaDB data.
 * @method Models\DescribeNodeDataDisksResponse DescribeNodeDataDisks(Models\DescribeNodeDataDisksRequest $req) This API is used to query data disk information of a node.
 * @method Models\DescribeNodeResourceConfigFastResponse DescribeNodeResourceConfigFast(Models\DescribeNodeResourceConfigFastRequest $req) This API is used to quickly obtain node specifications of the current cluster.
 * @method Models\DescribeNodeSpecResponse DescribeNodeSpec(Models\DescribeNodeSpecRequest $req) This API is used to query node specifications.
 * @method Models\DescribeResourceScheduleResponse DescribeResourceSchedule(Models\DescribeResourceScheduleRequest $req) This API is used to query YARN resource scheduling information. It has been deprecated. Please use `DescribeYarnQueue` to query queue information.
 * @method Models\DescribeResourceScheduleDiffDetailResponse DescribeResourceScheduleDiffDetail(Models\DescribeResourceScheduleDiffDetailRequest $req) This API is used to query the change details of YARN resource scheduling.
 * @method Models\DescribeSLInstanceResponse DescribeSLInstance(Models\DescribeSLInstanceRequest $req) This API is used to query basic information of a Serverless HBase instance.
 * @method Models\DescribeSLInstanceListResponse DescribeSLInstanceList(Models\DescribeSLInstanceListRequest $req) This API is used to query detailed information of the Serverless HBase instance list.
 * @method Models\DescribeServiceConfGroupInfosResponse DescribeServiceConfGroupInfos(Models\DescribeServiceConfGroupInfosRequest $req) This API is used to describe service configuration group information.
 * @method Models\DescribeServiceNodeInfosResponse DescribeServiceNodeInfos(Models\DescribeServiceNodeInfosRequest $req) This API is used to query service process information.
 * @method Models\DescribeSparkApplicationsResponse DescribeSparkApplications(Models\DescribeSparkApplicationsRequest $req) This API is used to obtain the Spark application list.
 * @method Models\DescribeSparkQueriesResponse DescribeSparkQueries(Models\DescribeSparkQueriesRequest $req) This API is used to obtain the Spark query information list.
 * @method Models\DescribeStarRocksQueryInfoResponse DescribeStarRocksQueryInfo(Models\DescribeStarRocksQueryInfoRequest $req) This API is used to obtain StarRocks query information.
 * @method Models\DescribeTrinoQueryInfoResponse DescribeTrinoQueryInfo(Models\DescribeTrinoQueryInfoRequest $req) This API is used to obtain Trino (PrestoSQL) query information.
 * @method Models\DescribeUsersForUserManagerResponse DescribeUsersForUserManager(Models\DescribeUsersForUserManagerRequest $req) This API is used for clusters with the OpenLDAP component installed.
This API is used to export users in batches. For a Kerberos cluster, if the keytab file download link is required, set NeedKeytabInfo to true. Note: If SupportDownLoadKeyTab is set to true but DownLoadKeyTabUrl is an empty string, the keytab file is not ready (being generated).
 * @method Models\DescribeYarnQueueResponse DescribeYarnQueue(Models\DescribeYarnQueueRequest $req) This API is used to obtain queue information in resource scheduling.
 * @method Models\DescribeYarnScheduleHistoryResponse DescribeYarnScheduleHistory(Models\DescribeYarnScheduleHistoryRequest $req) This API is used to view the YARN resource scheduling history. It has been deprecated. Please use Task Center to view the history records.
 * @method Models\InquiryPriceCreateInstanceResponse InquiryPriceCreateInstance(Models\InquiryPriceCreateInstanceRequest $req) This API is used to inquire the price for instance creation.
 * @method Models\InquiryPriceRenewInstanceResponse InquiryPriceRenewInstance(Models\InquiryPriceRenewInstanceRequest $req) This API is used to inquire the price for renewal.
 * @method Models\InquiryPriceScaleOutInstanceResponse InquiryPriceScaleOutInstance(Models\InquiryPriceScaleOutInstanceRequest $req) This API is used to inquire the price for a scale-out.
 * @method Models\InquiryPriceUpdateInstanceResponse InquiryPriceUpdateInstance(Models\InquiryPriceUpdateInstanceRequest $req) This API is used to inquire the price for the configuration change.
 * @method Models\InstallSoftwareResponse InstallSoftware(Models\InstallSoftwareRequest $req) This API is used to install a component. For components dependent on the MetaDB, a CDB order may be required. The components that can be installed on the current cluster and the components that might require a CDB order can be viewed via InstallSoftWareInfo.
 * @method Models\ModifyAutoRenewFlagResponse ModifyAutoRenewFlag(Models\ModifyAutoRenewFlagRequest $req) This API is used to introduce the prerequisites for a prepaid cluster.
This API is used to enable or disable auto-renewal at the resource level.
 * @method Models\ModifyAutoScaleStrategyResponse ModifyAutoScaleStrategy(Models\ModifyAutoScaleStrategyRequest $req) This API is used to modify an automatic scaling rule.
 * @method Models\ModifyBootScriptResponse ModifyBootScript(Models\ModifyBootScriptRequest $req) This API is used to modify a bootstrap script.
 * @method Models\ModifyDynamicInstanceResponse ModifyDynamicInstance(Models\ModifyDynamicInstanceRequest $req) This API is used to update a DynamicInstance in a containerized EMR on TKE cluster.
 * @method Models\ModifyGlobalConfigResponse ModifyGlobalConfig(Models\ModifyGlobalConfigRequest $req) This API is used to modify the global configuration of YARN resource scheduling.
 * @method Models\ModifyInspectionSettingsResponse ModifyInspectionSettings(Models\ModifyInspectionSettingsRequest $req) This API is used to set the inspection task configuration.
 * @method Models\ModifyInstanceBasicResponse ModifyInstanceBasic(Models\ModifyInstanceBasicRequest $req) This API is used to modify the cluster name.
 * @method Models\ModifyResourceResponse ModifyResource(Models\ModifyResourceRequest $req) This API is used to change the instance configuration.
 * @method Models\ModifyResourceScheduleConfigResponse ModifyResourceScheduleConfig(Models\ModifyResourceScheduleConfigRequest $req) This API is deprecated. Use ModifyYarnQueueV2 to modify queue configuration. No related logs exist in the past one year.

This API is used to modify the resource configuration of YARN Resource Scheduling. It has been deprecated. Use the ModifyYarnQueueV2 API to modify the queue configuration.
 * @method Models\ModifyResourceSchedulerResponse ModifyResourceScheduler(Models\ModifyResourceSchedulerRequest $req) This API is used to modify a YARN resource scheduler. After the modification, click Deploy to make the modification take effect.
 * @method Models\ModifyResourcesTagsResponse ModifyResourcesTags(Models\ModifyResourcesTagsRequest $req) This API is used to forcibly modify a tag.
 * @method Models\ModifySLInstanceResponse ModifySLInstance(Models\ModifySLInstanceRequest $req) This API is used to change the configuration of a Serverless HBase instance.
- This API is successfully called, and a Serverless HBase instance is created. If the instance creation request succeeds, RequestID of the request is returned.
- This is an asynchronous API. The operation is not completed immediately when the API call returns. The instance operation result can be viewed by calling the DescribeInstancesList API, and the StatusDesc field for the current instance can be returned.
 * @method Models\ModifySLInstanceBasicResponse ModifySLInstanceBasic(Models\ModifySLInstanceBasicRequest $req) This API is used to modify the Serverless HBase instance name.
 * @method Models\ModifyServiceParamsByExportConfsResponse ModifyServiceParamsByExportConfs(Models\ModifyServiceParamsByExportConfsRequest $req) Configuration import and delivery
 * @method Models\ModifyUserGroupResponse ModifyUserGroup(Models\ModifyUserGroupRequest $req) This API is used to modify a user group in user management.
 * @method Models\ModifyUserManagerPwdResponse ModifyUserManagerPwd(Models\ModifyUserManagerPwdRequest $req) This API is used to modify a user password (user management).
 * @method Models\ModifyUsersOfGroupSTDResponse ModifyUsersOfGroupSTD(Models\ModifyUsersOfGroupSTDRequest $req) This API is used to change user information in a user group.
 * @method Models\ModifyYarnDeployResponse ModifyYarnDeploy(Models\ModifyYarnDeployRequest $req) This API is deprecated. Use DeployYarnConf to bring configurations into effect after deployment.

This API is used to bring configurations into effect after deployment. It has been deprecated. Use the DeployYarnConf API to bring configurations into effect after deployment.
 * @method Models\ModifyYarnQueueV2Response ModifyYarnQueueV2(Models\ModifyYarnQueueV2Request $req) This API is used to modify queue information in resource scheduling.
 * @method Models\ResetYarnConfigResponse ResetYarnConfig(Models\ResetYarnConfigRequest $req) This API is used to modify the resource configuration of YARN resource scheduling.
 * @method Models\ResizeDataDisksResponse ResizeDataDisks(Models\ResizeDataDisksRequest $req) This API is used to scale out cloud data disks.
 * @method Models\ScaleOutClusterResponse ScaleOutCluster(Models\ScaleOutClusterRequest $req) This API is used to scale out cluster nodes.
 * @method Models\ScaleOutInstanceResponse ScaleOutInstance(Models\ScaleOutInstanceRequest $req) This API is used to scale out nodes.
 * @method Models\SetNodeResourceConfigDefaultResponse SetNodeResourceConfigDefault(Models\SetNodeResourceConfigDefaultRequest $req) This API is used to set specifications of a node in the current cluster as the default or cancel the default setting.
 * @method Models\StartStopServiceOrMonitorResponse StartStopServiceOrMonitor(Models\StartStopServiceOrMonitorRequest $req) This API is used to execute operations such as starting, stopping, and restarting a service.
 * @method Models\TerminateClusterNodesResponse TerminateClusterNodes(Models\TerminateClusterNodesRequest $req) This API is used to terminate a cluster node.
 * @method Models\TerminateDynamicInstancesResponse TerminateDynamicInstances(Models\TerminateDynamicInstancesRequest $req) This API is used to terminate a DynamicInstance in a containerized EMR on TKE cluster.
 * @method Models\TerminateInstanceResponse TerminateInstance(Models\TerminateInstanceRequest $req) This API is used to terminate an EMR instance. It is supported only for the officially billed version of EMR.
 * @method Models\TerminateSLInstanceResponse TerminateSLInstance(Models\TerminateSLInstanceRequest $req) This API is used to terminate a Serverless HBase instance.
 * @method Models\TerminateTasksResponse TerminateTasks(Models\TerminateTasksRequest $req) This API is used to scale in Task nodes.
 */

class EmrClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "emr.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "emr";

    /**
     * @var string
     */
    protected $version = "2019-01-03";

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
        $respClass = "TencentCloud"."\\".ucfirst("emr")."\\"."V20190103\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
