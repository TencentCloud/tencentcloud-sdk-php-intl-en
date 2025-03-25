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
 * @method Models\CreateApplicationAutoscalerResponse CreateApplicationAutoscaler(Models\CreateApplicationAutoscalerRequest $req) This API is used to create a scaling rule.
 * @method Models\CreateApplicationServiceResponse CreateApplicationService(Models\CreateApplicationServiceRequest $req) This API is used to create an access policy. 
 * @method Models\CreateConfigDataResponse CreateConfigData(Models\CreateConfigDataRequest $req) This API is used to create a configuration.
 * @method Models\CreateCosTokenResponse CreateCosToken(Models\CreateCosTokenRequest $req) This API is used to generate a COS temporary key.
 * @method Models\CreateEnvironmentResponse CreateEnvironment(Models\CreateEnvironmentRequest $req) This API is used to create an environment.
 * @method Models\CreateLogConfigResponse CreateLogConfig(Models\CreateLogConfigRequest $req) This API is used to create a log collecting configuration.
 * @method Models\CreateResourceResponse CreateResource(Models\CreateResourceRequest $req) This API is used to bind a cloud resource.
 * @method Models\DeleteApplicationResponse DeleteApplication(Models\DeleteApplicationRequest $req) This API is used to delete an application.
  - Stop running the current application
  - Delete resources related to the application
  - Delete the application
 * @method Models\DeleteApplicationAutoscalerResponse DeleteApplicationAutoscaler(Models\DeleteApplicationAutoscalerRequest $req) This API is used to delete a scaling rule.
 * @method Models\DeleteApplicationServiceResponse DeleteApplicationService(Models\DeleteApplicationServiceRequest $req) This API is used to delete an access policy.
 * @method Models\DeleteIngressResponse DeleteIngress(Models\DeleteIngressRequest $req) This API is used to delete an ingress rule.
 * @method Models\DeployApplicationResponse DeployApplication(Models\DeployApplicationRequest $req) This API is used to deploy an application.
 * @method Models\DescribeApplicationAutoscalerListResponse DescribeApplicationAutoscalerList(Models\DescribeApplicationAutoscalerListRequest $req) This API is used to query the scaling rules of an application.
 * @method Models\DescribeApplicationInfoResponse DescribeApplicationInfo(Models\DescribeApplicationInfoRequest $req) This API is used to check the basic information of an application.
 * @method Models\DescribeApplicationPodsResponse DescribeApplicationPods(Models\DescribeApplicationPodsRequest $req) This API is used to get the list of application pods.
 * @method Models\DescribeApplicationServiceListResponse DescribeApplicationServiceList(Models\DescribeApplicationServiceListRequest $req) This API is used to query the list of access policies.
 * @method Models\DescribeApplicationsResponse DescribeApplications(Models\DescribeApplicationsRequest $req) This API is to query the list of running applications.
 * @method Models\DescribeApplicationsStatusResponse DescribeApplicationsStatus(Models\DescribeApplicationsStatusRequest $req) This API is used to query the status of all applications in an envrionment.
 * @method Models\DescribeConfigDataResponse DescribeConfigData(Models\DescribeConfigDataRequest $req) This API is used to query details of a configuration.
 * @method Models\DescribeConfigDataListResponse DescribeConfigDataList(Models\DescribeConfigDataListRequest $req) This API is used to query the list of configurations.
 * @method Models\DescribeEnvironmentResponse DescribeEnvironment(Models\DescribeEnvironmentRequest $req) This API is used to obtain the basic information of an environment.
 * @method Models\DescribeEnvironmentStatusResponse DescribeEnvironmentStatus(Models\DescribeEnvironmentStatusRequest $req) This API is used to obtain the environment status.
 * @method Models\DescribeEnvironmentsResponse DescribeEnvironments(Models\DescribeEnvironmentsRequest $req) This API is used to obtain the list of environments. 
 * @method Models\DescribeIngressResponse DescribeIngress(Models\DescribeIngressRequest $req) This API is used to query an ingress rule.
 * @method Models\DescribeIngressesResponse DescribeIngresses(Models\DescribeIngressesRequest $req) This API is used to query the list of ingress rules.
 * @method Models\DescribeLogConfigResponse DescribeLogConfig(Models\DescribeLogConfigRequest $req) This API is used to query details of a log collecting configuration.
 * @method Models\DescribePagedLogConfigListResponse DescribePagedLogConfigList(Models\DescribePagedLogConfigListRequest $req) This API is used to querying the list of log collecting configurations.
 * @method Models\DescribeRelatedIngressesResponse DescribeRelatedIngresses(Models\DescribeRelatedIngressesRequest $req) This API is used to query the list of ingress rules associated with the application.
 * @method Models\DestroyConfigDataResponse DestroyConfigData(Models\DestroyConfigDataRequest $req) This API is used to terminate a configuration.
 * @method Models\DestroyEnvironmentResponse DestroyEnvironment(Models\DestroyEnvironmentRequest $req) This API is used to terminate an environment.
 * @method Models\DestroyLogConfigResponse DestroyLogConfig(Models\DestroyLogConfigRequest $req) This API is used to terminate a log collecting configuration.
 * @method Models\DisableApplicationAutoscalerResponse DisableApplicationAutoscaler(Models\DisableApplicationAutoscalerRequest $req) This API is used to disable a scaling rule.
 * @method Models\EnableApplicationAutoscalerResponse EnableApplicationAutoscaler(Models\EnableApplicationAutoscalerRequest $req) This API is used to enable a scaling rule.
 * @method Models\GenerateApplicationPackageDownloadUrlResponse GenerateApplicationPackageDownloadUrl(Models\GenerateApplicationPackageDownloadUrlRequest $req) This API is used to generate the pre-signed download URL for the specified application package.
 * @method Models\ModifyApplicationAutoscalerResponse ModifyApplicationAutoscaler(Models\ModifyApplicationAutoscalerRequest $req) This API is used to modify a scaling rule.
 * @method Models\ModifyApplicationInfoResponse ModifyApplicationInfo(Models\ModifyApplicationInfoRequest $req) This API is used to modify the basic information of an application.
 * @method Models\ModifyApplicationServiceResponse ModifyApplicationService(Models\ModifyApplicationServiceRequest $req) This API is used to modify an access policy.
 * @method Models\ModifyConfigDataResponse ModifyConfigData(Models\ModifyConfigDataRequest $req) This API is used to modify a configuration.
 * @method Models\ModifyEnvironmentResponse ModifyEnvironment(Models\ModifyEnvironmentRequest $req) This API is used to edit an environment.
 * @method Models\ModifyIngressResponse ModifyIngress(Models\ModifyIngressRequest $req) This API is used to create or update an ingress rule.
 * @method Models\ModifyLogConfigResponse ModifyLogConfig(Models\ModifyLogConfigRequest $req) This API is used to modify a log collecting configuration.
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
    protected $endpoint = "tem.intl.tencentcloudapi.com";

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
