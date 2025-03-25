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

namespace TencentCloud\Cdwdoris\V20211228;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cdwdoris\V20211228\Models as Models;

/**
 * @method Models\ActionAlterUserResponse ActionAlterUser(Models\ActionAlterUserRequest $req) This API is used to add and modify a user.
 * @method Models\CancelBackupJobResponse CancelBackupJob(Models\CancelBackupJobRequest $req) This API is used to cancel the corresponding backup instance task.
 * @method Models\CheckCoolDownWorkingVariableConfigCorrectResponse CheckCoolDownWorkingVariableConfigCorrect(Models\CheckCoolDownWorkingVariableConfigCorrectRequest $req) This API is used to check whether variables and configurations for hot/cold data layering are correct.
 * @method Models\CopyTableDatasResponse CopyTableDatas(Models\CopyTableDatasRequest $req) This API is used to copy the source table to the target table.
 * @method Models\CreateBackUpScheduleResponse CreateBackUpSchedule(Models\CreateBackUpScheduleRequest $req) This API is used to create or modify backup policies.
 * @method Models\CreateCoolDownPolicyResponse CreateCoolDownPolicy(Models\CreateCoolDownPolicyRequest $req) This API is used to create a hot/cold data layering policy.
 * @method Models\CreateDatabaseResponse CreateDatabase(Models\CreateDatabaseRequest $req) This API is used to create a TCHouse-D database.
 * @method Models\CreateInstanceNewResponse CreateInstanceNew(Models\CreateInstanceNewRequest $req) This API is used to create clusters.
 * @method Models\CreateTableResponse CreateTable(Models\CreateTableRequest $req) This API is used to create a TCHouse-D table under the specified database.
 * @method Models\CreateWorkloadGroupResponse CreateWorkloadGroup(Models\CreateWorkloadGroupRequest $req) This API is used to create resource groups.
 * @method Models\DeleteBackUpDataResponse DeleteBackUpData(Models\DeleteBackUpDataRequest $req) This API is used to delete backup data.
 * @method Models\DeleteTableResponse DeleteTable(Models\DeleteTableRequest $req) This API is used to delete the specified table in the specified database.
 * @method Models\DeleteWorkloadGroupResponse DeleteWorkloadGroup(Models\DeleteWorkloadGroupRequest $req) This API is used to delete resource groups.
 * @method Models\DescribeAreaRegionResponse DescribeAreaRegion(Models\DescribeAreaRegionRequest $req) This API is used to display region information and the total number of clusters in each region on the cluster list page.
 * @method Models\DescribeBackUpJobResponse DescribeBackUpJob(Models\DescribeBackUpJobRequest $req) This API is used to query the list of backup instances.
 * @method Models\DescribeBackUpJobDetailResponse DescribeBackUpJobDetail(Models\DescribeBackUpJobDetailRequest $req) This API is used to query backup task details.
 * @method Models\DescribeBackUpSchedulesResponse DescribeBackUpSchedules(Models\DescribeBackUpSchedulesRequest $req) This API is used to obtain the scheduled task information for the backup and migration.
 * @method Models\DescribeBackUpTablesResponse DescribeBackUpTables(Models\DescribeBackUpTablesRequest $req) This API is used to obtain the information of the table available for backup.
 * @method Models\DescribeBackUpTaskDetailResponse DescribeBackUpTaskDetail(Models\DescribeBackUpTaskDetailRequest $req) This API is used to query the progress details of backup tasks.
 * @method Models\DescribeClusterConfigsResponse DescribeClusterConfigs(Models\DescribeClusterConfigsRequest $req) This API is used to get the contents of the latest configuration files (config.xml, metrika.xml, and user.xml) of the cluster and display them to the user.
 * @method Models\DescribeClusterConfigsHistoryResponse DescribeClusterConfigsHistory(Models\DescribeClusterConfigsHistoryRequest $req) This API is used to obtain the modification history of cluster configuration files.
 * @method Models\DescribeCoolDownBackendsResponse DescribeCoolDownBackends(Models\DescribeCoolDownBackendsRequest $req) This API is used to query the list of backend nodes supporting hot/cold data layering.
 * @method Models\DescribeCoolDownPoliciesResponse DescribeCoolDownPolicies(Models\DescribeCoolDownPoliciesRequest $req) This API is used to query the list of hot/cold data layering policies.
 * @method Models\DescribeCoolDownTableDataResponse DescribeCoolDownTableData(Models\DescribeCoolDownTableDataRequest $req) This API is used to query the layered hot and cold data in a table.
 * @method Models\DescribeCreateTablesDDLResponse DescribeCreateTablesDDL(Models\DescribeCreateTablesDDLRequest $req) This API is used to batch obtain the table creation DDL.
 * @method Models\DescribeDatabaseResponse DescribeDatabase(Models\DescribeDatabaseRequest $req) This API is used to obtain the database information under a specific data source.
 * @method Models\DescribeDatabaseAuditDownloadResponse DescribeDatabaseAuditDownload(Models\DescribeDatabaseAuditDownloadRequest $req) This API is used to download database audit logs.
 * @method Models\DescribeDatabaseAuditRecordsResponse DescribeDatabaseAuditRecords(Models\DescribeDatabaseAuditRecordsRequest $req) This API is used to get database audit records.
 * @method Models\DescribeInstanceResponse DescribeInstance(Models\DescribeInstanceRequest $req) This API is used to query the specific information of a cluster based on the cluster ID.
 * @method Models\DescribeInstanceNodesResponse DescribeInstanceNodes(Models\DescribeInstanceNodesRequest $req) This API is used to get the list of cluster node information.
 * @method Models\DescribeInstanceNodesInfoResponse DescribeInstanceNodesInfo(Models\DescribeInstanceNodesInfoRequest $req) This API is used to get the BE/FE node roles.
 * @method Models\DescribeInstanceNodesRoleResponse DescribeInstanceNodesRole(Models\DescribeInstanceNodesRoleRequest $req) This API is used to obtain cluster node roles.
 * @method Models\DescribeInstanceOperationHistoryResponse DescribeInstanceOperationHistory(Models\DescribeInstanceOperationHistoryRequest $req) This API is used to pull the operation list of the cluster. The API supports pagination query and filtering operation records by time range.
 * @method Models\DescribeInstanceOperationsResponse DescribeInstanceOperations(Models\DescribeInstanceOperationsRequest $req) This API is used to pull operations of the cluster on the cluster details page.
 * @method Models\DescribeInstanceStateResponse DescribeInstanceState(Models\DescribeInstanceStateRequest $req) This API is used to display cluster status, process progress, etc. in the cluster details page.
 * @method Models\DescribeInstanceUsedSubnetsResponse DescribeInstanceUsedSubnets(Models\DescribeInstanceUsedSubnetsRequest $req) This API is used to obtain the information of subnets used by the cluster.
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) This API is used to get the list of clusters.
 * @method Models\DescribeInstancesHealthStateResponse DescribeInstancesHealthState(Models\DescribeInstancesHealthStateRequest $req) This API is used to check cluster health
 * @method Models\DescribeQueryAnalyseResponse DescribeQueryAnalyse(Models\DescribeQueryAnalyseRequest $req) This API is used to obtain the SQL query details of the Doris user.
 * @method Models\DescribeRestoreTaskDetailResponse DescribeRestoreTaskDetail(Models\DescribeRestoreTaskDetailRequest $req) This API is used to query the progress details of the recovery task.
 * @method Models\DescribeSlowQueryRecordsResponse DescribeSlowQueryRecords(Models\DescribeSlowQueryRecordsRequest $req) This API is used to get the slow log list.
 * @method Models\DescribeSlowQueryRecordsDownloadResponse DescribeSlowQueryRecordsDownload(Models\DescribeSlowQueryRecordsDownloadRequest $req) This API is used to download slow log files.
 * @method Models\DescribeSpecResponse DescribeSpec(Models\DescribeSpecRequest $req) This API is used to pull the specification list of data nodes and zookeeper nodes for the cluster on the purchase page.
 * @method Models\DescribeSqlApisResponse DescribeSqlApis(Models\DescribeSqlApisRequest $req) This API is used to query the cluster information by executing SQL commands.
 * @method Models\DescribeTableResponse DescribeTable(Models\DescribeTableRequest $req) This API is used to obtain the table information. It only supports querying table information in the TCHouse-D internal catalog.
 * @method Models\DescribeTableListResponse DescribeTableList(Models\DescribeTableListRequest $req) This API is used to obtain the list of tables under the specified data source and database.
 * @method Models\DescribeUserBindWorkloadGroupResponse DescribeUserBindWorkloadGroup(Models\DescribeUserBindWorkloadGroupRequest $req) This API is used to obtain the resource information bound to each user in the current cluster.
 * @method Models\DescribeUserPolicyResponse DescribeUserPolicy(Models\DescribeUserPolicyRequest $req) This API is used to obtain detailed information of Doris users, including account information, permission host, and permission configuration.
 * @method Models\DescribeWorkloadGroupResponse DescribeWorkloadGroup(Models\DescribeWorkloadGroupRequest $req) This API is used to obtain resource group information.
 * @method Models\DestroyInstanceResponse DestroyInstance(Models\DestroyInstanceRequest $req) This API is used to terminate clusters.
 * @method Models\ExecuteParametrizedQueryResponse ExecuteParametrizedQuery(Models\ExecuteParametrizedQueryRequest $req) This API is used to execute an SQL query statement with parameters and return the query results.
 * @method Models\ExecuteSelectQueryResponse ExecuteSelectQuery(Models\ExecuteSelectQueryRequest $req) This API is used to query data according to the specified database and table name, and support field selection and pagination.
 * @method Models\InsertDatasToTableResponse InsertDatasToTable(Models\InsertDatasToTableRequest $req) This API is used to insert data into TCHouse-D.
 * @method Models\ModifyClusterConfigsResponse ModifyClusterConfigs(Models\ModifyClusterConfigsRequest $req) This API is used to modify the XML cluster configuration file on the cluster configuration page.
 * @method Models\ModifyCoolDownPolicyResponse ModifyCoolDownPolicy(Models\ModifyCoolDownPolicyRequest $req) This API is used to modify the hot/cold data layering policy.
 * @method Models\ModifyDatabaseTableAccessResponse ModifyDatabaseTableAccess(Models\ModifyDatabaseTableAccessRequest $req) This API is used to GRANT and REVOKE the database and table in the Doris database.
 * @method Models\ModifyInstanceResponse ModifyInstance(Models\ModifyInstanceRequest $req) This API is used to modify the cluster's name.
 * @method Models\ModifyInstanceKeyValConfigsResponse ModifyInstanceKeyValConfigs(Models\ModifyInstanceKeyValConfigsRequest $req) This API is used to modify configurations in the KV mode.
 * @method Models\ModifyNodeStatusResponse ModifyNodeStatus(Models\ModifyNodeStatusRequest $req) This API is used to change the node status.
 * @method Models\ModifySecurityGroupsResponse ModifySecurityGroups(Models\ModifySecurityGroupsRequest $req) This API is used to edit security groups.
 * @method Models\ModifyUserBindWorkloadGroupResponse ModifyUserBindWorkloadGroup(Models\ModifyUserBindWorkloadGroupRequest $req) This API is used to modify the resource group bound to the user.
 * @method Models\ModifyUserPrivilegesV3Response ModifyUserPrivilegesV3(Models\ModifyUserPrivilegesV3Request $req) This API is used to modify user permissions and support three permission setting categories: catalog, all db, and some db tables.
 * @method Models\ModifyWorkloadGroupResponse ModifyWorkloadGroup(Models\ModifyWorkloadGroupRequest $req) This API is used to modify the resource group information.
 * @method Models\ModifyWorkloadGroupStatusResponse ModifyWorkloadGroupStatus(Models\ModifyWorkloadGroupStatusRequest $req) This API is used to enable or disable resource groups.
 * @method Models\OpenCoolDownResponse OpenCoolDown(Models\OpenCoolDownRequest $req) This API is used to enable hot/cold data layering.
 * @method Models\OpenCoolDownPolicyResponse OpenCoolDownPolicy(Models\OpenCoolDownPolicyRequest $req) This API is used to enable and describe the cold storage policy.
 * @method Models\QueryTableDataResponse QueryTableData(Models\QueryTableDataRequest $req) This API is used to query data according to the specified database and table names, and support field selection and pagination.
 * @method Models\RecoverBackUpJobResponse RecoverBackUpJob(Models\RecoverBackUpJobRequest $req) This API is used to back up and recover.
 * @method Models\ReduceInstanceResponse ReduceInstance(Models\ReduceInstanceRequest $req) This API is used to scale in clusters.
 * @method Models\ResizeDiskResponse ResizeDisk(Models\ResizeDiskRequest $req) This API is used to expand cloud disks.
 * @method Models\RestartClusterForConfigsResponse RestartClusterForConfigs(Models\RestartClusterForConfigsRequest $req) This API is used to restart the cluster to make the configuration file take effect.
 * @method Models\RestartClusterForNodeResponse RestartClusterForNode(Models\RestartClusterForNodeRequest $req) This API is used to indicate the rolling restart of the clusters.
 * @method Models\ScaleOutInstanceResponse ScaleOutInstance(Models\ScaleOutInstanceRequest $req) This API is used to horizontally scale out nodes.
 * @method Models\ScaleUpInstanceResponse ScaleUpInstance(Models\ScaleUpInstanceRequest $req) This API is used to scale up/down computing resources.
 * @method Models\UpdateCoolDownResponse UpdateCoolDown(Models\UpdateCoolDownRequest $req) This API is used to update the hot/cold data layering information on a cluster.
 * @method Models\UpdateDatabaseResponse UpdateDatabase(Models\UpdateDatabaseRequest $req) This API is used to modify the attributes of a specified database, including setting the data volume quota, renaming the database, setting the replica quantity quota, and modifying other attributes of the database.
 * @method Models\UpdateTableSchemaResponse UpdateTableSchema(Models\UpdateTableSchemaRequest $req) This API is used to modify the attributes of a specified table. The API parameters are consistent with those for creating a table.
 */

class CdwdorisClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cdwdoris.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cdwdoris";

    /**
     * @var string
     */
    protected $version = "2021-12-28";

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
        $respClass = "TencentCloud"."\\".ucfirst("cdwdoris")."\\"."V20211228\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
