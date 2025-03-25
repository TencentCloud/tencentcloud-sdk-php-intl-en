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

namespace TencentCloud\Tem\V20201221;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tem\V20201221\Models as Models;

/**
 * @method Models\CreateCosTokenV2Response CreateCosTokenV2(Models\CreateCosTokenV2Request $req) This API is used to generate a COS temporary key.
 * @method Models\CreateNamespaceResponse CreateNamespace(Models\CreateNamespaceRequest $req) This API is used to create an environment.
 * @method Models\CreateResourceResponse CreateResource(Models\CreateResourceRequest $req) This API is used to bind a cloud resource.
 * @method Models\CreateServiceV2Response CreateServiceV2(Models\CreateServiceV2Request $req) This API is used to create a service.
 * @method Models\DeleteIngressResponse DeleteIngress(Models\DeleteIngressRequest $req) This API is used to delete an ingress rule.
 * @method Models\DeployServiceV2Response DeployServiceV2(Models\DeployServiceV2Request $req) This API is used to deploy a service.
 * @method Models\DescribeIngressResponse DescribeIngress(Models\DescribeIngressRequest $req) This API is used to query an ingress rule.
 * @method Models\DescribeIngressesResponse DescribeIngresses(Models\DescribeIngressesRequest $req) This API is used to query the list of ingress rules.
 * @method Models\DescribeNamespacesResponse DescribeNamespaces(Models\DescribeNamespacesRequest $req) This API is used to get the list of tenant environments.
 * @method Models\DescribeRelatedIngressesResponse DescribeRelatedIngresses(Models\DescribeRelatedIngressesRequest $req) This API is used to query the list of ingress rules associated with the service.
 * @method Models\DescribeServiceRunPodListV2Response DescribeServiceRunPodListV2(Models\DescribeServiceRunPodListV2Request $req) This API is used to get the list of running pods under a service.
 * @method Models\GenerateDownloadUrlResponse GenerateDownloadUrl(Models\GenerateDownloadUrlRequest $req) Generate the pre-signed download URL for the specified package
 * @method Models\ModifyIngressResponse ModifyIngress(Models\ModifyIngressRequest $req) This API is used to create or update an ingress rule.
 * @method Models\ModifyNamespaceResponse ModifyNamespace(Models\ModifyNamespaceRequest $req) This API is used to edit an environment.
 * @method Models\ModifyServiceInfoResponse ModifyServiceInfo(Models\ModifyServiceInfoRequest $req) This API is used to modify a service’s basic information.
 * @method Models\RestartServiceRunPodResponse RestartServiceRunPod(Models\RestartServiceRunPodRequest $req) This API is used to restart an instance.
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
    protected $version = "2020-12-21";

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
        $respClass = "TencentCloud"."\\".ucfirst("tem")."\\"."V20201221\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
