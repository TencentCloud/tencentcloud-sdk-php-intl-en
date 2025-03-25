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

namespace TencentCloud\Chdfs\V20201112;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Chdfs\V20201112\Models as Models;

/**
 * @method Models\AssociateAccessGroupsResponse AssociateAccessGroups(Models\AssociateAccessGroupsRequest $req) This API is used to bind multiple permission groups to a mount point.
 * @method Models\CreateAccessGroupResponse CreateAccessGroup(Models\CreateAccessGroupRequest $req) This API is used to create a permission group.
 * @method Models\CreateAccessRulesResponse CreateAccessRules(Models\CreateAccessRulesRequest $req) This API is used to batch create permission rules. You don't need to enter the permission rule IDs and creation time.
 * @method Models\CreateFileSystemResponse CreateFileSystem(Models\CreateFileSystemRequest $req) This API is used to create a file system (asynchronously).
 * @method Models\CreateLifeCycleRulesResponse CreateLifeCycleRules(Models\CreateLifeCycleRulesRequest $req) This API is used to batch create lifecycle rules. You don't need to enter the lifecycle rule IDs and creation time.
 * @method Models\CreateMountPointResponse CreateMountPoint(Models\CreateMountPointRequest $req) This API is used to create a mount point for a successfully created file system.
 * @method Models\CreateRestoreTasksResponse CreateRestoreTasks(Models\CreateRestoreTasksRequest $req) This API is used to batch create restoration tasks. You don't need to enter the restoration task IDs, status, and creation time.
 * @method Models\DeleteAccessGroupResponse DeleteAccessGroup(Models\DeleteAccessGroupRequest $req) This API is used to delete a permission group.
 * @method Models\DeleteAccessRulesResponse DeleteAccessRules(Models\DeleteAccessRulesRequest $req) This API is used to batch delete permission rules.
 * @method Models\DeleteFileSystemResponse DeleteFileSystem(Models\DeleteFileSystemRequest $req) This API is used to delete a file system. Non-empty file systems cannot be deleted.
 * @method Models\DeleteLifeCycleRulesResponse DeleteLifeCycleRules(Models\DeleteLifeCycleRulesRequest $req) This API is used to batch delete lifecycle rules.
 * @method Models\DeleteMountPointResponse DeleteMountPoint(Models\DeleteMountPointRequest $req) This API is used to delete a mount point.
 * @method Models\DescribeAccessGroupResponse DescribeAccessGroup(Models\DescribeAccessGroupRequest $req) This API is used to view the details of a permission group.
 * @method Models\DescribeAccessGroupsResponse DescribeAccessGroups(Models\DescribeAccessGroupsRequest $req) This API is used to view the list of permission groups.
 * @method Models\DescribeAccessRulesResponse DescribeAccessRules(Models\DescribeAccessRulesRequest $req) This API is used to view the list of permission rules by permission group ID.
 * @method Models\DescribeFileSystemResponse DescribeFileSystem(Models\DescribeFileSystemRequest $req) This API is used to view the details of a file system.
 * @method Models\DescribeFileSystemsResponse DescribeFileSystems(Models\DescribeFileSystemsRequest $req) This API is used to view the list of file systems.
 * @method Models\DescribeLifeCycleRulesResponse DescribeLifeCycleRules(Models\DescribeLifeCycleRulesRequest $req) This API is used to view the list of lifecycle rules by file system ID.
 * @method Models\DescribeMountPointResponse DescribeMountPoint(Models\DescribeMountPointRequest $req) This API is used to view the details of a mount point.
 * @method Models\DescribeMountPointsResponse DescribeMountPoints(Models\DescribeMountPointsRequest $req) This API is used to view the list of mount points.
 * @method Models\DescribeResourceTagsResponse DescribeResourceTags(Models\DescribeResourceTagsRequest $req) This API is used to view the list of resource tags by file system ID.
 * @method Models\DescribeRestoreTasksResponse DescribeRestoreTasks(Models\DescribeRestoreTasksRequest $req) This API is used to view the list of restoration tasks by file system ID.
 * @method Models\DisassociateAccessGroupsResponse DisassociateAccessGroups(Models\DisassociateAccessGroupsRequest $req) This API is used to unbind multiple permission groups from a mount point.
 * @method Models\ModifyAccessGroupResponse ModifyAccessGroup(Models\ModifyAccessGroupRequest $req) This API is used to modify the attributes of a permission group.
 * @method Models\ModifyAccessRulesResponse ModifyAccessRules(Models\ModifyAccessRulesRequest $req) This API is used to batch modify the attributes of permission rules, such as address, access mode, and priority. You must specify the permission rule IDs.
 * @method Models\ModifyFileSystemResponse ModifyFileSystem(Models\ModifyFileSystemRequest $req) This API is used to modify the attributes of a successfully created file system.
 * @method Models\ModifyLifeCycleRulesResponse ModifyLifeCycleRules(Models\ModifyLifeCycleRulesRequest $req) This API is used to batch modify the attributes of lifecycle rules, such as name, path, transition list, and status. You must specify the lifecycle rule IDs.
 * @method Models\ModifyMountPointResponse ModifyMountPoint(Models\ModifyMountPointRequest $req) This API is used to modify the attributes of a mount point.
 * @method Models\ModifyResourceTagsResponse ModifyResourceTags(Models\ModifyResourceTagsRequest $req) This API is used to modify the list of resource tags by overwriting them all.
 */

class ChdfsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "chdfs.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "chdfs";

    /**
     * @var string
     */
    protected $version = "2020-11-12";

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
        $respClass = "TencentCloud"."\\".ucfirst("chdfs")."\\"."V20201112\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
