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

namespace TencentCloud\Tcaplusdb\V20190823;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tcaplusdb\V20190823\Models as Models;

/**
 * @method Models\ClearTablesResponse ClearTables(Models\ClearTablesRequest $req) This API is used to clear table data based on the specified table information.
 * @method Models\CompareIdlFilesResponse CompareIdlFiles(Models\CompareIdlFilesRequest $req) This API is used to select a target table, upload and verify the table modification file, and return the result of whether the table structure is allowed to be modified.
 * @method Models\CreateBackupResponse CreateBackup(Models\CreateBackupRequest $req) This API is used to create a backup task.
 * @method Models\CreateClusterResponse CreateCluster(Models\CreateClusterRequest $req) This API is used to create a TcaplusDB cluster.
 * @method Models\CreateSnapshotsResponse CreateSnapshots(Models\CreateSnapshotsRequest $req) This API is used to create one or more table snapshots at a specified past time point.
 * @method Models\CreateTableGroupResponse CreateTableGroup(Models\CreateTableGroupRequest $req) This API is used to create a table group in a TcaplusDB cluster.
 * @method Models\CreateTablesResponse CreateTables(Models\CreateTablesRequest $req) This API is used to create tables in batches based on the selected IDL file list.
 * @method Models\DeleteBackupRecordsResponse DeleteBackupRecords(Models\DeleteBackupRecordsRequest $req) This API is used to delete a manual backup.
 * @method Models\DeleteClusterResponse DeleteCluster(Models\DeleteClusterRequest $req) This API is used to delete a TcaplusDB cluster, which will succeed only after all resources (including table groups and tables) in the cluster are released.
 * @method Models\DeleteIdlFilesResponse DeleteIdlFiles(Models\DeleteIdlFilesRequest $req) This API is used to delete a target IDL file by specifying the cluster ID and information of the file to be deleted. If the file is associated with a table, deletion will fail.
 * @method Models\DeleteSnapshotsResponse DeleteSnapshots(Models\DeleteSnapshotsRequest $req) This API is used to delete one or more table snapshots.
 * @method Models\DeleteTableDataFlowResponse DeleteTableDataFlow(Models\DeleteTableDataFlowRequest $req) This API is used to disable data subscription for tables.
 * @method Models\DeleteTableGroupResponse DeleteTableGroup(Models\DeleteTableGroupRequest $req) This API is used to delete a table group.
 * @method Models\DeleteTableIndexResponse DeleteTableIndex(Models\DeleteTableIndexRequest $req) This API is used to delete the global index from a table.
 * @method Models\DeleteTablesResponse DeleteTables(Models\DeleteTablesRequest $req) This API is used to drop a specified table. Calling this API for the first time means to move the table to the recycle bin, while calling it again means to drop the table completely from the recycle bin.
 * @method Models\DescribeBackupRecordsResponse DescribeBackupRecords(Models\DescribeBackupRecordsRequest $req) This API is used to query backup records.

When querying the cluster level, set `TableGroupId` to `-1` and `TableName` to `-1`.
When querying the cluster and table group levels, set `TableName` to `-1`.
When querying the cluster, table group, and table levels, both `TableGroupId` and `TableName` cannot be set to `-1`.
 * @method Models\DescribeClusterTagsResponse DescribeClusterTags(Models\DescribeClusterTagsRequest $req) This API is used to get the associated tag list of a cluster.
 * @method Models\DescribeClustersResponse DescribeClusters(Models\DescribeClustersRequest $req) This API is used to query the TcaplusDB cluster list, including cluster details.
 * @method Models\DescribeIdlFileInfosResponse DescribeIdlFileInfos(Models\DescribeIdlFileInfosRequest $req) This API is used to query table description file details.
 * @method Models\DescribeMachineResponse DescribeMachine(Models\DescribeMachineRequest $req) This API is used to query the available machines in a dedicated cluster.
 * @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) This API is used to query the list of regions supported by the TcaplusDB service.
 * @method Models\DescribeSnapshotsResponse DescribeSnapshots(Models\DescribeSnapshotsRequest $req) This API is used to query the list of table snapshots.
 * @method Models\DescribeTableGroupTagsResponse DescribeTableGroupTags(Models\DescribeTableGroupTagsRequest $req) This API is used to get the associated tag list of a table group.
 * @method Models\DescribeTableGroupsResponse DescribeTableGroups(Models\DescribeTableGroupsRequest $req) This API is used to query the table group list.
 * @method Models\DescribeTableTagsResponse DescribeTableTags(Models\DescribeTableTagsRequest $req) This API is used to get table tags.
 * @method Models\DescribeTablesResponse DescribeTables(Models\DescribeTablesRequest $req) This API is used to query table details.
 * @method Models\DescribeTablesInRecycleResponse DescribeTablesInRecycle(Models\DescribeTablesInRecycleRequest $req) This API is used to query the details of a table in recycle bin.
 * @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) This API is used to query the task list.
 * @method Models\DescribeUinInWhitelistResponse DescribeUinInWhitelist(Models\DescribeUinInWhitelistRequest $req) This API is used to query whether the current user is in the allowlist and control whether the user can create TDR-type apps or tables.
 * @method Models\DisableRestProxyResponse DisableRestProxy(Models\DisableRestProxyRequest $req) This API is used to disable the RESTful API.
 * @method Models\EnableRestProxyResponse EnableRestProxy(Models\EnableRestProxyRequest $req) This API is used to enable the RESTful API.
 * @method Models\ImportSnapshotsResponse ImportSnapshots(Models\ImportSnapshotsRequest $req) This API is used to import a snapshot into a new table or the original table from which the snapshot was created.
 * @method Models\MergeTablesDataResponse MergeTablesData(Models\MergeTablesDataRequest $req) This API is used to merge tables.
 * @method Models\ModifyCensorshipResponse ModifyCensorship(Models\ModifyCensorshipRequest $req) This API is used to enable or disable the cluster operation approval feature.
 * @method Models\ModifyClusterMachineResponse ModifyClusterMachine(Models\ModifyClusterMachineRequest $req) This API is used to modify the machines of a dedicated cluster.
 * @method Models\ModifyClusterNameResponse ModifyClusterName(Models\ModifyClusterNameRequest $req) This API is used to rename a specified cluster.
 * @method Models\ModifyClusterPasswordResponse ModifyClusterPassword(Models\ModifyClusterPasswordRequest $req) This API is used to change the password of a specified cluster. The backend will allow the TcaplusDB SDK to access databases with both old and new passwords before the old password expires. You cannot submit a new password change request before the old password expires or submit a request to modify the expiration time of the old password after the old password expires.
 * @method Models\ModifyClusterTagsResponse ModifyClusterTags(Models\ModifyClusterTagsRequest $req) This API is used to modify cluster tags.
 * @method Models\ModifySnapshotsResponse ModifySnapshots(Models\ModifySnapshotsRequest $req) This API is used to modify the expiration time of one or more table snapshots.
 * @method Models\ModifyTableGroupNameResponse ModifyTableGroupName(Models\ModifyTableGroupNameRequest $req) This API is used to rename a TcaplusDB table group.
 * @method Models\ModifyTableGroupTagsResponse ModifyTableGroupTags(Models\ModifyTableGroupTagsRequest $req) This API is used to modify table group tags.
 * @method Models\ModifyTableMemosResponse ModifyTableMemos(Models\ModifyTableMemosRequest $req) This API is used to modify table remarks.
 * @method Models\ModifyTableQuotasResponse ModifyTableQuotas(Models\ModifyTableQuotasRequest $req) This API is used to scale a table.
 * @method Models\ModifyTableTagsResponse ModifyTableTags(Models\ModifyTableTagsRequest $req) This API is used to modify table tags.
 * @method Models\ModifyTablesResponse ModifyTables(Models\ModifyTablesRequest $req) This API is used to modify specified tables in batches based on the selected table definition IDL file.
 * @method Models\RecoverRecycleTablesResponse RecoverRecycleTables(Models\RecoverRecycleTablesRequest $req) This API is used to recover a dropped table from the recycle bin. It will not work for tables to be released due to arrears.
 * @method Models\RollbackTablesResponse RollbackTables(Models\RollbackTablesRequest $req) This API is used to roll back table data.
 * @method Models\SetBackupExpireRuleResponse SetBackupExpireRule(Models\SetBackupExpireRuleRequest $req) This API is used to add/delete/modify backup expiration policy. `ClusterId` must be a specific cluster ID (appid).
 * @method Models\SetTableDataFlowResponse SetTableDataFlow(Models\SetTableDataFlowRequest $req) This API is used to enable data subscription for tables or modify the feature's configurations.
 * @method Models\SetTableIndexResponse SetTableIndex(Models\SetTableIndexRequest $req) This API is used to create a global index for a table.
 * @method Models\UpdateApplyResponse UpdateApply(Models\UpdateApplyRequest $req) This API is used to update the application status.
 * @method Models\VerifyIdlFilesResponse VerifyIdlFiles(Models\VerifyIdlFilesRequest $req) This API is used to upload and verify a table creation file and return the definition of tables that are verified to be valid.
 */

class TcaplusdbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tcaplusdb.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tcaplusdb";

    /**
     * @var string
     */
    protected $version = "2019-08-23";

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
        $respClass = "TencentCloud"."\\".ucfirst("tcaplusdb")."\\"."V20190823\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
