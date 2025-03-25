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

namespace TencentCloud\Cfs\V20190719;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cfs\V20190719\Models as Models;

/**
 * @method Models\BindAutoSnapshotPolicyResponse BindAutoSnapshotPolicy(Models\BindAutoSnapshotPolicyRequest $req) This API is used to bind one or multiple file systems to a snapshot policy. A file system can be bound to only one policy.
 * @method Models\CreateAutoSnapshotPolicyResponse CreateAutoSnapshotPolicy(Models\CreateAutoSnapshotPolicyRequest $req) This API is used to create a scheduled snapshot policy.
 * @method Models\CreateCfsFileSystemResponse CreateCfsFileSystem(Models\CreateCfsFileSystemRequest $req) This API is used to create a file system.
 * @method Models\CreateCfsPGroupResponse CreateCfsPGroup(Models\CreateCfsPGroupRequest $req) This API is used to create a permission group.
 * @method Models\CreateCfsRuleResponse CreateCfsRule(Models\CreateCfsRuleRequest $req) This API is used to create a permission group rule.
 * @method Models\CreateCfsSnapshotResponse CreateCfsSnapshot(Models\CreateCfsSnapshotRequest $req) This API is used to create a file system snapshot.
 * @method Models\CreateMigrationTaskResponse CreateMigrationTask(Models\CreateMigrationTaskRequest $req) This API is used to create a migration task.
To use this API, submit a ticket for us to add you to the allowlist.
 * @method Models\DeleteAutoSnapshotPolicyResponse DeleteAutoSnapshotPolicy(Models\DeleteAutoSnapshotPolicyRequest $req) This API is used to delete a scheduled snapshot policy.
 * @method Models\DeleteCfsFileSystemResponse DeleteCfsFileSystem(Models\DeleteCfsFileSystemRequest $req) This API is used to delete a file system.
 * @method Models\DeleteCfsPGroupResponse DeleteCfsPGroup(Models\DeleteCfsPGroupRequest $req) This API is used to delete a permission group.
 * @method Models\DeleteCfsRuleResponse DeleteCfsRule(Models\DeleteCfsRuleRequest $req) This API is used to delete a permission group rule.
 * @method Models\DeleteCfsSnapshotResponse DeleteCfsSnapshot(Models\DeleteCfsSnapshotRequest $req) This API is used to delete a file system snapshot.
 * @method Models\DeleteMigrationTaskResponse DeleteMigrationTask(Models\DeleteMigrationTaskRequest $req) This API is used to delete a migration task.
To use this API, submit a ticket for us to add you to the allowlist.
 * @method Models\DeleteMountTargetResponse DeleteMountTarget(Models\DeleteMountTargetRequest $req) This API is used to delete a mount target.
 * @method Models\DescribeAutoSnapshotPoliciesResponse DescribeAutoSnapshotPolicies(Models\DescribeAutoSnapshotPoliciesRequest $req) This API is used to query the list of scheduled snapshot policies of a file system.
 * @method Models\DescribeAvailableZoneInfoResponse DescribeAvailableZoneInfo(Models\DescribeAvailableZoneInfoRequest $req) This API is used to query the availability of a region.
 * @method Models\DescribeBucketListResponse DescribeBucketList(Models\DescribeBucketListRequest $req) This API is used to get the list of data source buckets.
To use this API, submit a ticket for us to add you to the allowlist.
 * @method Models\DescribeCfsFileSystemClientsResponse DescribeCfsFileSystemClients(Models\DescribeCfsFileSystemClientsRequest $req) This API is used to query clients on which this file system is mounted. To do so, the client needs to have the CFS monitoring plugin installed.
 * @method Models\DescribeCfsFileSystemsResponse DescribeCfsFileSystems(Models\DescribeCfsFileSystemsRequest $req) This API is used to query file systems.
 * @method Models\DescribeCfsPGroupsResponse DescribeCfsPGroups(Models\DescribeCfsPGroupsRequest $req) This API is used to query the list of permission groups.
 * @method Models\DescribeCfsRulesResponse DescribeCfsRules(Models\DescribeCfsRulesRequest $req) This API is used to query the list of permission group rules.
 * @method Models\DescribeCfsServiceStatusResponse DescribeCfsServiceStatus(Models\DescribeCfsServiceStatusRequest $req) This API is used to query the status of the CFS service.
 * @method Models\DescribeCfsSnapshotOverviewResponse DescribeCfsSnapshotOverview(Models\DescribeCfsSnapshotOverviewRequest $req) This API is used to get the snapshot overview of a file system.
 * @method Models\DescribeCfsSnapshotsResponse DescribeCfsSnapshots(Models\DescribeCfsSnapshotsRequest $req) This API is used to query the list of snapshots of a file system.
 * @method Models\DescribeMigrationTasksResponse DescribeMigrationTasks(Models\DescribeMigrationTasksRequest $req) This API is used to get the list of migration tasks.
To use this API, submit a ticket for us to add you to the allowlist.
 * @method Models\DescribeMountTargetsResponse DescribeMountTargets(Models\DescribeMountTargetsRequest $req) This API is used to query the mount targets of a file system.
 * @method Models\DescribeSnapshotOperationLogsResponse DescribeSnapshotOperationLogs(Models\DescribeSnapshotOperationLogsRequest $req) This API is used to query the operation logs of a snapshot.
 * @method Models\ModifyFileSystemAutoScaleUpRuleResponse ModifyFileSystemAutoScaleUpRule(Models\ModifyFileSystemAutoScaleUpRuleRequest $req) This API is used to modify the scaling policy of a file system.
 * @method Models\ScaleUpFileSystemResponse ScaleUpFileSystem(Models\ScaleUpFileSystemRequest $req) This API is used to scale up a Turbo file system.
 * @method Models\SignUpCfsServiceResponse SignUpCfsService(Models\SignUpCfsServiceRequest $req) This API is used to activate the CFS service.
 * @method Models\StopMigrationTaskResponse StopMigrationTask(Models\StopMigrationTaskRequest $req) This API is used to stop a migration task.
To use this API, submit a ticket for us to add you to the allowlist.
 * @method Models\UnbindAutoSnapshotPolicyResponse UnbindAutoSnapshotPolicy(Models\UnbindAutoSnapshotPolicyRequest $req) This API is used to unbind a snapshot policy from a file system.
 * @method Models\UpdateAutoSnapshotPolicyResponse UpdateAutoSnapshotPolicy(Models\UpdateAutoSnapshotPolicyRequest $req) This API is used to update a scheduled snapshot policy.
 * @method Models\UpdateCfsFileSystemNameResponse UpdateCfsFileSystemName(Models\UpdateCfsFileSystemNameRequest $req) This API is used to update a file system name.
 * @method Models\UpdateCfsFileSystemPGroupResponse UpdateCfsFileSystemPGroup(Models\UpdateCfsFileSystemPGroupRequest $req) This API is used to update the permission group used by a file system.
 * @method Models\UpdateCfsFileSystemSizeLimitResponse UpdateCfsFileSystemSizeLimit(Models\UpdateCfsFileSystemSizeLimitRequest $req) This API is used to update the capacity limit of a file system.
 * @method Models\UpdateCfsPGroupResponse UpdateCfsPGroup(Models\UpdateCfsPGroupRequest $req) This API is used to update the information of a permission group.
 * @method Models\UpdateCfsRuleResponse UpdateCfsRule(Models\UpdateCfsRuleRequest $req) This API is used to update a permission rule.
 * @method Models\UpdateCfsSnapshotAttributeResponse UpdateCfsSnapshotAttribute(Models\UpdateCfsSnapshotAttributeRequest $req) This API is used to update the name and retention period of a file system snapshot.
 */

class CfsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cfs.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cfs";

    /**
     * @var string
     */
    protected $version = "2019-07-19";

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
        $respClass = "TencentCloud"."\\".ucfirst("cfs")."\\"."V20190719\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
