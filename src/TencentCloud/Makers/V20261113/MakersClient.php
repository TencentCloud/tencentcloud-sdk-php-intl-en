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

namespace TencentCloud\Makers\V20261113;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Makers\V20261113\Models as Models;

/**
 * @method Models\CreateDeploymentResponse CreateDeployment(Models\CreateDeploymentRequest $req) This API is used to create a deployment. When uploading an artifact, pass Upload for ViaMeta and Provider, and pass the path of the uploaded object for TempBucketPath.
 * @method Models\CreateProjectResponse CreateProject(Models\CreateProjectRequest $req) This API is used to create a project. When uploading an artifact, pass Upload for Provider and Custom for Channel.
 * @method Models\CreateZoneCustomDomainResponse CreateZoneCustomDomain(Models\CreateZoneCustomDomainRequest $req) Bind a custom domain name to a specified environment of a project.
 * @method Models\DeleteProjectResponse DeleteProject(Models\DeleteProjectRequest $req) Delete a project. In-progress builds prevent deletion.
 * @method Models\DeleteProjectCustomDomainsResponse DeleteProjectCustomDomains(Models\DeleteProjectCustomDomainsRequest $req) Unbind a custom domain name from a project by domain name.
 * @method Models\DeleteProjectEnvsResponse DeleteProjectEnvs(Models\DeleteProjectEnvsRequest $req) Delete environment variables by EnvVars. Match by Id or Key. Value is required but not used for matching. You can pass any value.
 * @method Models\DescribeCosTempTokenResponse DescribeCosTempToken(Models\DescribeCosTempTokenRequest $req) Get the COS bucket, region, target path, and temporary key for uploading artifacts.
 * @method Models\DescribeDeploymentLogResponse DescribeDeploymentLog(Models\DescribeDeploymentLogRequest $req) Return the access address of the build log.
 * @method Models\DescribeDeploymentsResponse DescribeDeployments(Models\DescribeDeploymentsRequest $req) Query deployment records of a project.
 * @method Models\DescribeEnvironmentsResponse DescribeEnvironments(Models\DescribeEnvironmentsRequest $req) Query environments in a project, including built-in Production, Preview, and custom environments.
 * @method Models\DescribeProjectEnvsResponse DescribeProjectEnvs(Models\DescribeProjectEnvsRequest $req) Query project environment variables. If Env is not specified, return all application scopes.
 * @method Models\DescribeProjectsResponse DescribeProjects(Models\DescribeProjectsRequest $req) This API is used to query projects under a site by page. Offset is the page number offset, and the backend skips Offset * Limit items.
 * @method Models\DescribeZoneCustomDomainsResponse DescribeZoneCustomDomains(Models\DescribeZoneCustomDomainsRequest $req) Queries the custom and preset domain names of a project under a site.
 * @method Models\ModifyProjectResponse ModifyProject(Models\ModifyProjectRequest $req) Modify the project name and build configuration. Fields not passed retain their original values.
 * @method Models\ModifyProjectEnvsResponse ModifyProjectEnvs(Models\ModifyProjectEnvsRequest $req) Write environment variables based on the passed-in EnvVars.
 * @method Models\ModifyZoneCustomDomainEnvResponse ModifyZoneCustomDomainEnv(Models\ModifyZoneCustomDomainEnvRequest $req) Switch a bound custom domain name to another environment.
 */

class MakersClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "makers.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "makers";

    /**
     * @var string
     */
    protected $version = "2026-11-13";

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
        $respClass = "TencentCloud"."\\".ucfirst("makers")."\\"."V20261113\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
