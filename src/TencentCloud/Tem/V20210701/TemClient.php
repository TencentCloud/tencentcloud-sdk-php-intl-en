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

namespace TencentCloud\Tem\V20210701;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tem\V20210701\Models as Models;

/**
 * @method Models\CreateApplicationResponse CreateApplication(Models\CreateApplicationRequest $req) This API is used to create an application.
 * @method Models\CreateCosTokenResponse CreateCosToken(Models\CreateCosTokenRequest $req) This API is used to generate a COS temporary key.
 * @method Models\CreateEnvironmentResponse CreateEnvironment(Models\CreateEnvironmentRequest $req) This API is used to create an environment.
 * @method Models\CreateResourceResponse CreateResource(Models\CreateResourceRequest $req) This API is used to bind a cloud resource.
 * @method Models\DeleteApplicationResponse DeleteApplication(Models\DeleteApplicationRequest $req) This API is used to delete an application.
  - Stop the application if it’s running
  - Delete resources associated with this application
  - Delele the application
 * @method Models\DeleteIngressResponse DeleteIngress(Models\DeleteIngressRequest $req) This API is used to delete an ingress rule.
 * @method Models\DeployApplicationResponse DeployApplication(Models\DeployApplicationRequest $req) This API is used to deploy an application.
 * @method Models\DescribeApplicationPodsResponse DescribeApplicationPods(Models\DescribeApplicationPodsRequest $req) This API is used to get the list of application pods.
 * @method Models\DescribeApplicationsStatusResponse DescribeApplicationsStatus(Models\DescribeApplicationsStatusRequest $req) This API is used to query the status of all applications in an envrionment.
 * @method Models\DescribeEnvironmentsResponse DescribeEnvironments(Models\DescribeEnvironmentsRequest $req) This API is used to get the list of tenant environments.
 * @method Models\DescribeIngressResponse DescribeIngress(Models\DescribeIngressRequest $req) This API is used to query an ingress rule.
 * @method Models\DescribeIngressesResponse DescribeIngresses(Models\DescribeIngressesRequest $req) This API is used to query the list of ingress rules.
 * @method Models\DescribeRelatedIngressesResponse DescribeRelatedIngresses(Models\DescribeRelatedIngressesRequest $req) This API is used to query the list of ingress rules associated with the application.
 * @method Models\GenerateApplicationPackageDownloadUrlResponse GenerateApplicationPackageDownloadUrl(Models\GenerateApplicationPackageDownloadUrlRequest $req) This API is used to generate the pre-signed download URL for the specified application package.
 * @method Models\ModifyApplicationInfoResponse ModifyApplicationInfo(Models\ModifyApplicationInfoRequest $req) This API is used to modify the basic information of an application.
 * @method Models\ModifyEnvironmentResponse ModifyEnvironment(Models\ModifyEnvironmentRequest $req) This API is used to edit an environment.
 * @method Models\ModifyIngressResponse ModifyIngress(Models\ModifyIngressRequest $req) This API is used to create or update an ingress rule.
 * @method Models\RestartApplicationResponse RestartApplication(Models\RestartApplicationRequest $req) This API is used to restart an application.
 * @method Models\RestartApplicationPodResponse RestartApplicationPod(Models\RestartApplicationPodRequest $req) This API is used to restart an application pod.
 * @method Models\RollingUpdateApplicationByVersionResponse RollingUpdateApplicationByVersion(Models\RollingUpdateApplicationByVersionRequest $req) This API is used to configure the rolling update policy for an application.
 * @method Models\StopApplicationResponse StopApplication(Models\StopApplicationRequest $req) This API is used to stop an application.
 */

class TemClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tem.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tem";

    /**
     * @var string
     */
    protected $version = "2021-07-01";

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
        $respClass = "TencentCloud"."\\".ucfirst("tem")."\\"."V20210701\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
