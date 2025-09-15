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
 * @method Models\AddMetricScaleStrategyResponse AddMetricScaleStrategy(Models\AddMetricScaleStrategyRequest $req) This API is used to add scaling rules by load and time.
 * @method Models\AddNodeResourceConfigResponse AddNodeResourceConfig(Models\AddNodeResourceConfigRequest $req) This API is used to add node specifications of the current cluster.
 * @method Models\AddUsersForUserManagerResponse AddUsersForUserManager(Models\AddUsersForUserManagerRequest $req) This API is available for clusters with OpenLDAP components configured.
This API is used to add user lists (user management).
 * @method Models\AttachDisksResponse AttachDisks(Models\AttachDisksRequest $req) This API is used to mount cloud disks.
 * @method Models\ConvertPreToPostClusterResponse ConvertPreToPostCluster(Models\ConvertPreToPostClusterRequest $req) This API is used to convert a monthly subscription cluster to a pay-as-you-go cluster (excluding cdb).
 * @method Models\CreateClusterResponse CreateCluster(Models\CreateClusterRequest $req) This API is used to create an EMR cluster instance.
 * @method Models\CreateGroupsSTDResponse CreateGroupsSTD(Models\CreateGroupsSTDRequest $req) This API is used to create user groups in batches under User Management.
 * @method Models\CreateInstanceResponse CreateInstance(Models\CreateInstanceRequest $req) This API is used to create an EMR cluster instance.
 * @method Models\CreateSLInstanceResponse CreateSLInstance(Models\CreateSLInstanceRequest $req) This API is used to create a Serverless HBase instance.- If the API call is successful, a Serverless HBase instance will be created. If the instance creation request is successful, the InstanceId of the created instance and the RequestID of the request will be returned.- This is an asynchronous API. The operation is not completed immediately when the API call returns. The instance operation result can be viewed by calling DescribeInstancesList to view the StatusDesc status of the current instance.
 * @method Models\DeleteAutoScaleStrategyResponse DeleteAutoScaleStrategy(Models\DeleteAutoScaleStrategyRequest $req) This API is used to delete automatic scaling rules. Nodes scaled based on these rules are destroyed in the background.
 * @method Models\DeleteGroupsSTDResponse DeleteGroupsSTD(Models\DeleteGroupsSTDRequest $req) This API is used to delete user groups in batches.
 * @method Models\DeleteNodeResourceConfigResponse DeleteNodeResourceConfig(Models\DeleteNodeResourceConfigRequest $req) This API is used to delete the node specifications of the current cluster.
 * @method Models\DeployYarnConfResponse DeployYarnConf(Models\DeployYarnConfRequest $req) This API is used to bring the configuration into effect in YARN resource scheduling after deployment.
 * @method Models\DescribeAutoScaleGroupGlobalConfResponse DescribeAutoScaleGroupGlobalConf(Models\DescribeAutoScaleGroupGlobalConfRequest $req) This API is used to access the global configuration of automatic scaling.
 * @method Models\DescribeAutoScaleRecordsResponse DescribeAutoScaleRecords(Models\DescribeAutoScaleRecordsRequest $req) This API is used to inquiry detailed records of cluster autoscaling.
 * @method Models\DescribeAutoScaleStrategiesResponse DescribeAutoScaleStrategies(Models\DescribeAutoScaleStrategiesRequest $req) This API is used to access automatic scaling rules.
 * @method Models\DescribeClusterFlowStatusDetailResponse DescribeClusterFlowStatusDetail(Models\DescribeClusterFlowStatusDetailRequest $req) This API is used to query the EMR task running details status.
 * @method Models\DescribeClusterNodesResponse DescribeClusterNodes(Models\DescribeClusterNodesRequest $req) This API is used to query the information of nodes in a cluster.
 * @method Models\DescribeDAGInfoResponse DescribeDAGInfo(Models\DescribeDAGInfoRequest $req) This API is used to query DAG information.
 * @method Models\DescribeEmrApplicationStaticsResponse DescribeEmrApplicationStatics(Models\DescribeEmrApplicationStaticsRequest $req) This API is used to query the YARN application statistics API.
 * @method Models\DescribeEmrOverviewMetricsResponse DescribeEmrOverviewMetrics(Models\DescribeEmrOverviewMetricsRequest $req) This API is used to query the metric data on the monitoring overview page.
 * @method Models\DescribeGlobalConfigResponse DescribeGlobalConfig(Models\DescribeGlobalConfigRequest $req) This API is used to query the global configurations of YARN Resource Scheduling.
 * @method Models\DescribeGroupsSTDResponse DescribeGroupsSTD(Models\DescribeGroupsSTDRequest $req) This API is used to query a user group.
 * @method Models\DescribeHBaseTableOverviewResponse DescribeHBaseTableOverview(Models\DescribeHBaseTableOverviewRequest $req) This API is used to access the overview of HBase table-level monitoring data.
 * @method Models\DescribeHDFSStorageInfoResponse DescribeHDFSStorageInfo(Models\DescribeHDFSStorageInfoRequest $req) This API is used to query information of file(s) stored in HDFS.
 * @method Models\DescribeHiveQueriesResponse DescribeHiveQueries(Models\DescribeHiveQueriesRequest $req) This API is used to inquiry Hive query data.
 * @method Models\DescribeInsightListResponse DescribeInsightList(Models\DescribeInsightListRequest $req) This API is used to obtain insight result information.
 * @method Models\DescribeInspectionTaskResultResponse DescribeInspectionTaskResult(Models\DescribeInspectionTaskResultRequest $req) This API is used to obtain the inspection task result list.
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) This API is used to query the information of instances in a cluster.
 * @method Models\DescribeInstancesListResponse DescribeInstancesList(Models\DescribeInstancesListRequest $req) This API is used to query the cluster list.
 * @method Models\DescribeKyuubiQueryInfoResponse DescribeKyuubiQueryInfo(Models\DescribeKyuubiQueryInfoRequest $req) This API is used to query Kyuubi query information.
 * @method Models\DescribeNodeDataDisksResponse DescribeNodeDataDisks(Models\DescribeNodeDataDisksRequest $req) This API is used to query data disk information of nodes.
 * @method Models\DescribeNodeResourceConfigFastResponse DescribeNodeResourceConfigFast(Models\DescribeNodeResourceConfigFastRequest $req) This API is used to quickly obtain node specifications of the current cluster.
 * @method Models\DescribeNodeSpecResponse DescribeNodeSpec(Models\DescribeNodeSpecRequest $req) This API is used to query node specifications.
 * @method Models\DescribeResourceScheduleResponse DescribeResourceSchedule(Models\DescribeResourceScheduleRequest $req) This API is used to query YARN resource scheduling information. It has been deprecated. You can use the DescribeYarnQueue API to query queue information.
 * @method Models\DescribeResourceScheduleDiffDetailResponse DescribeResourceScheduleDiffDetail(Models\DescribeResourceScheduleDiffDetailRequest $req) This API is used to query change details in YARN resource scheduling.
 * @method Models\DescribeSLInstanceResponse DescribeSLInstance(Models\DescribeSLInstanceRequest $req) This API is used to query the basic information of Serverless HBase instances.
 * @method Models\DescribeSLInstanceListResponse DescribeSLInstanceList(Models\DescribeSLInstanceListRequest $req) This API is used to query the detailed information of the Serverless HBase instance list.
 * @method Models\DescribeServiceConfGroupInfosResponse DescribeServiceConfGroupInfos(Models\DescribeServiceConfGroupInfosRequest $req) This API is used to describe service configuration group information.
 * @method Models\DescribeServiceNodeInfosResponse DescribeServiceNodeInfos(Models\DescribeServiceNodeInfosRequest $req) This API is used to query service process information.
 * @method Models\DescribeSparkApplicationsResponse DescribeSparkApplications(Models\DescribeSparkApplicationsRequest $req) This API is used to obtain a Spark application list.
 * @method Models\DescribeSparkQueriesResponse DescribeSparkQueries(Models\DescribeSparkQueriesRequest $req) This API is used to query the Spark query information list.
 * @method Models\DescribeStarRocksQueryInfoResponse DescribeStarRocksQueryInfo(Models\DescribeStarRocksQueryInfoRequest $req) This API is used to query StarRocks information.
 * @method Models\DescribeTrinoQueryInfoResponse DescribeTrinoQueryInfo(Models\DescribeTrinoQueryInfoRequest $req) This API is used to query Trino(PrestoSQL) query information.
 * @method Models\DescribeUsersForUserManagerResponse DescribeUsersForUserManager(Models\DescribeUsersForUserManagerRequest $req) This API is available for clusters with OpenLDAP components configured.
This API is used to export users in batches. For a Kerberos cluster, set `NeedKeytabInfo` to `true` to obtain the download link of the Keytab file. If `SupportDownLoadKeyTab` is `true`, but `DownLoadKeyTabUrl` is null, the Keytab file is not ready yet (being generated) in the backend.
 * @method Models\DescribeYarnQueueResponse DescribeYarnQueue(Models\DescribeYarnQueueRequest $req) This API is used to obtain queue information in resource scheduling.
 * @method Models\DescribeYarnScheduleHistoryResponse DescribeYarnScheduleHistory(Models\DescribeYarnScheduleHistoryRequest $req) This API is used to view the YARN resource scheduling history. It has been deprecated. You can use the Process Center to view the history records.
 * @method Models\InquiryPriceCreateInstanceResponse InquiryPriceCreateInstance(Models\InquiryPriceCreateInstanceRequest $req) This API is used to query price of instance creation.
 * @method Models\InquiryPriceRenewInstanceResponse InquiryPriceRenewInstance(Models\InquiryPriceRenewInstanceRequest $req) This API is used to query the price for renewal.
 * @method Models\InquiryPriceScaleOutInstanceResponse InquiryPriceScaleOutInstance(Models\InquiryPriceScaleOutInstanceRequest $req) This API is used to query price of scale-out.
 * @method Models\InquiryPriceUpdateInstanceResponse InquiryPriceUpdateInstance(Models\InquiryPriceUpdateInstanceRequest $req) This API is used to query price of scaling.
 * @method Models\ModifyAutoRenewFlagResponse ModifyAutoRenewFlag(Models\ModifyAutoRenewFlagRequest $req) This API is used to introduce the prerequisite prepaid clusters.
This API is used to enable or disable automatic renewal at the resource level.
 * @method Models\ModifyAutoScaleStrategyResponse ModifyAutoScaleStrategy(Models\ModifyAutoScaleStrategyRequest $req) This API is used to modify automatic scaling rules.
 * @method Models\ModifyGlobalConfigResponse ModifyGlobalConfig(Models\ModifyGlobalConfigRequest $req) This API is used to modify the global configuration of YARN Resource Scheduling.
 * @method Models\ModifyInspectionSettingsResponse ModifyInspectionSettings(Models\ModifyInspectionSettingsRequest $req) This API is used to set inspection task configurations.
 * @method Models\ModifyInstanceBasicResponse ModifyInstanceBasic(Models\ModifyInstanceBasicRequest $req) This API is used to modify a cluster name.
 * @method Models\ModifyResourceResponse ModifyResource(Models\ModifyResourceRequest $req) This API is used to resize an instance.
 * @method Models\ModifyResourceScheduleConfigResponse ModifyResourceScheduleConfig(Models\ModifyResourceScheduleConfigRequest $req) This API is deprecated. Use ModifyYarnQueueV2 to modify queue configuration. No related logs exist in the past one year.

This API is used to modify the resource configuration of YARN Resource Scheduling. It has been deprecated. Use the ModifyYarnQueueV2 API to modify the queue configuration.
 * @method Models\ModifyResourceSchedulerResponse ModifyResourceScheduler(Models\ModifyResourceSchedulerRequest $req) This API is used to modify a YARN resource scheduler. After the modification, you can click Deploy to bring it into effect.
 * @method Models\ModifyResourcesTagsResponse ModifyResourcesTags(Models\ModifyResourcesTagsRequest $req) This API is used to forcibly modify tags.
 * @method Models\ModifySLInstanceResponse ModifySLInstance(Models\ModifySLInstanceRequest $req) This API is used to resize a Serverless HBase instance.- If the API call is successful, a Serverless HBase instance will be created. If the instance creation request is successful, the RequestID of the request will be returned.- This is an asynchronous API. The operation is not completed immediately when the API call returns. The instance operation result can be viewed by calling DescribeInstancesList to view the StatusDesc status of the current instance.
 * @method Models\ModifySLInstanceBasicResponse ModifySLInstanceBasic(Models\ModifySLInstanceBasicRequest $req) This API is used to modify the Serverless HBase instance name.
 * @method Models\ModifyUserGroupResponse ModifyUserGroup(Models\ModifyUserGroupRequest $req) This API is used to modify user groups under User Management.
 * @method Models\ModifyUserManagerPwdResponse ModifyUserManagerPwd(Models\ModifyUserManagerPwdRequest $req) This API is used to change user password (user management).
 * @method Models\ModifyUsersOfGroupSTDResponse ModifyUsersOfGroupSTD(Models\ModifyUsersOfGroupSTDRequest $req) This API is used to change the user information of user groups.
 * @method Models\ModifyYarnDeployResponse ModifyYarnDeploy(Models\ModifyYarnDeployRequest $req) This API is deprecated. Use DeployYarnConf to bring configurations into effect after deployment.

This API is used to bring configurations into effect after deployment. It has been deprecated. Use the DeployYarnConf API to bring configurations into effect after deployment.
 * @method Models\ModifyYarnQueueV2Response ModifyYarnQueueV2(Models\ModifyYarnQueueV2Request $req) This API is used to modify queue information in resource scheduling.
 * @method Models\ResetYarnConfigResponse ResetYarnConfig(Models\ResetYarnConfigRequest $req) This API is used to modify the resource configuration of YARN resource scheduling.
 * @method Models\ResizeDataDisksResponse ResizeDataDisks(Models\ResizeDataDisksRequest $req) This API is used to scale out the cloud data disk.
 * @method Models\ScaleOutClusterResponse ScaleOutCluster(Models\ScaleOutClusterRequest $req) This API is used to scale out a cluster.
 * @method Models\ScaleOutInstanceResponse ScaleOutInstance(Models\ScaleOutInstanceRequest $req) This API is used to scale out instances.
 * @method Models\SetNodeResourceConfigDefaultResponse SetNodeResourceConfigDefault(Models\SetNodeResourceConfigDefaultRequest $req) This API is used to set specifications for a node in the current cluster to default or not.
 * @method Models\StartStopServiceOrMonitorResponse StartStopServiceOrMonitor(Models\StartStopServiceOrMonitorRequest $req) This API is used to start, stop, or restart services.
 * @method Models\TerminateClusterNodesResponse TerminateClusterNodes(Models\TerminateClusterNodesRequest $req) This API is used to terminate cluster nodes.
 * @method Models\TerminateInstanceResponse TerminateInstance(Models\TerminateInstanceRequest $req) This API is used to terminate EMR instances. It is only supported in the official paid edition of EMR.
 * @method Models\TerminateSLInstanceResponse TerminateSLInstance(Models\TerminateSLInstanceRequest $req) This API is used to terminate a Serverless HBase instance.
 * @method Models\TerminateTasksResponse TerminateTasks(Models\TerminateTasksRequest $req) This API is used to terminate a task node.
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
