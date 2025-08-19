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

namespace TencentCloud\Bi\V20220105;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Bi\V20220105\Models as Models;

/**
 * @method Models\ApplyEmbedIntervalResponse ApplyEmbedInterval(Models\ApplyEmbedIntervalRequest $req) This API is used to extend the available time of a token with strong authentication.
 * @method Models\CreateDatasourceResponse CreateDatasource(Models\CreateDatasourceRequest $req) This API is used to create a data source.
 * @method Models\CreateDatasourceCloudResponse CreateDatasourceCloud(Models\CreateDatasourceCloudRequest $req) This API is used to create a cloud database.
 * @method Models\CreateEmbedTokenResponse CreateEmbedToken(Models\CreateEmbedTokenRequest $req) This API is used to create an embedded report with strong authentication.
 * @method Models\CreateProjectResponse CreateProject(Models\CreateProjectRequest $req) This API is used to create a project.
 * @method Models\CreateUserRoleResponse CreateUserRole(Models\CreateUserRoleRequest $req) This API is used to create a user role.
 * @method Models\CreateUserRoleProjectResponse CreateUserRoleProject(Models\CreateUserRoleProjectRequest $req) This API is used to create a user role in the project.
 * @method Models\DeleteDatasourceResponse DeleteDatasource(Models\DeleteDatasourceRequest $req) This API is used to delete a data source.
 * @method Models\DeleteProjectResponse DeleteProject(Models\DeleteProjectRequest $req) This API is used to delete a project.
 * @method Models\DeleteUserRoleResponse DeleteUserRole(Models\DeleteUserRoleRequest $req) This API is used to remove a user role, which will result in user deletion.
 * @method Models\DeleteUserRoleProjectResponse DeleteUserRoleProject(Models\DeleteUserRoleProjectRequest $req) This API is used to delete a user role in the project.
 * @method Models\DescribeDatasourceListResponse DescribeDatasourceList(Models\DescribeDatasourceListRequest $req) This API is used to query a data source list.
 * @method Models\DescribePageWidgetListResponse DescribePageWidgetList(Models\DescribePageWidgetListRequest $req) This API is used to query component information on the page.
 * @method Models\DescribeProjectInfoResponse DescribeProjectInfo(Models\DescribeProjectInfoRequest $req) This API is used to obtain project details.
 * @method Models\DescribeProjectListResponse DescribeProjectList(Models\DescribeProjectListRequest $req) This API is used to obtain project information.
 * @method Models\DescribeUserProjectListResponse DescribeUserProjectList(Models\DescribeUserProjectListRequest $req) This API is used to obtain the user interface in the project.
 * @method Models\DescribeUserRoleListResponse DescribeUserRoleList(Models\DescribeUserRoleListRequest $req) This API is used to obtain the user role list.
 * @method Models\DescribeUserRoleProjectListResponse DescribeUserRoleProjectList(Models\DescribeUserRoleProjectListRequest $req) This API is used to obtain the user role list in the project.
 * @method Models\ExportScreenPageResponse ExportScreenPage(Models\ExportScreenPageRequest $req) This API is used to export a screenshot.
 * @method Models\ModifyDatasourceResponse ModifyDatasource(Models\ModifyDatasourceRequest $req) This API is used to update a data source.
 * @method Models\ModifyDatasourceCloudResponse ModifyDatasourceCloud(Models\ModifyDatasourceCloudRequest $req) This API is used to update a cloud database.
 * @method Models\ModifyProjectResponse ModifyProject(Models\ModifyProjectRequest $req) This API is used to modify project information.
 * @method Models\ModifyUserRoleResponse ModifyUserRole(Models\ModifyUserRoleRequest $req) This API is used to modify user role info.
 * @method Models\ModifyUserRoleProjectResponse ModifyUserRoleProject(Models\ModifyUserRoleProjectRequest $req) This API is used to modify the user role info in the project.
 */

class BiClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "bi.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "bi";

    /**
     * @var string
     */
    protected $version = "2022-01-05";

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
        $respClass = "TencentCloud"."\\".ucfirst("bi")."\\"."V20220105\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
