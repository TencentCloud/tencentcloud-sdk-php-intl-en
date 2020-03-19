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
* @method Models\CreateCfsFileSystemResponse CreateCfsFileSystem(Models\CreateCfsFileSystemRequest $req) This API is used to create a file system.
* @method Models\CreateCfsPGroupResponse CreateCfsPGroup(Models\CreateCfsPGroupRequest $req) This API is used to create a permission group.
* @method Models\CreateCfsRuleResponse CreateCfsRule(Models\CreateCfsRuleRequest $req) This API is used to create a permission group rule.
* @method Models\DeleteCfsFileSystemResponse DeleteCfsFileSystem(Models\DeleteCfsFileSystemRequest $req) This API is used to delete a file system.
* @method Models\DeleteCfsPGroupResponse DeleteCfsPGroup(Models\DeleteCfsPGroupRequest $req) This API is used to delete a permission group.
* @method Models\DeleteCfsRuleResponse DeleteCfsRule(Models\DeleteCfsRuleRequest $req) This API is used to delete a permission group rule.
* @method Models\DeleteMountTargetResponse DeleteMountTarget(Models\DeleteMountTargetRequest $req) This API is used to delete a mount target.
* @method Models\DescribeAvailableZoneInfoResponse DescribeAvailableZoneInfo(Models\DescribeAvailableZoneInfoRequest $req) This API is used to query the availability of a region.
* @method Models\DescribeCfsFileSystemsResponse DescribeCfsFileSystems(Models\DescribeCfsFileSystemsRequest $req) This API is used to query file systems.
* @method Models\DescribeCfsPGroupsResponse DescribeCfsPGroups(Models\DescribeCfsPGroupsRequest $req) This API is used to query the list of permission groups.
* @method Models\DescribeCfsRulesResponse DescribeCfsRules(Models\DescribeCfsRulesRequest $req) This API is used to query the list of permission group rules.
* @method Models\DescribeCfsServiceStatusResponse DescribeCfsServiceStatus(Models\DescribeCfsServiceStatusRequest $req) This API is used to query the status of the CFS service.
* @method Models\DescribeMountTargetsResponse DescribeMountTargets(Models\DescribeMountTargetsRequest $req) This API is used to query the mount targets of a file system.
* @method Models\SignUpCfsServiceResponse SignUpCfsService(Models\SignUpCfsServiceRequest $req) This API is used to activate the CFS service.
* @method Models\UpdateCfsFileSystemNameResponse UpdateCfsFileSystemName(Models\UpdateCfsFileSystemNameRequest $req) This API is used to update a file system name.
* @method Models\UpdateCfsFileSystemPGroupResponse UpdateCfsFileSystemPGroup(Models\UpdateCfsFileSystemPGroupRequest $req) This API is used to update the permission group used by a file system.
* @method Models\UpdateCfsFileSystemSizeLimitResponse UpdateCfsFileSystemSizeLimit(Models\UpdateCfsFileSystemSizeLimitRequest $req) This API is used to update the capacity limit of a file system.
* @method Models\UpdateCfsPGroupResponse UpdateCfsPGroup(Models\UpdateCfsPGroupRequest $req) This API is used to update the information of a permission group.
* @method Models\UpdateCfsRuleResponse UpdateCfsRule(Models\UpdateCfsRuleRequest $req) This API is used to update a permission rule.
 */

class CfsClient extends AbstractClient
{
    protected $endpoint = "cfs.tencentcloudapi.com";

    protected $version = "2019-07-19";

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
