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

namespace TencentCloud\Tke\V20220501;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tke\V20220501\Models as Models;

/**
 * @method Models\CreateHealthCheckPolicyResponse CreateHealthCheckPolicy(Models\CreateHealthCheckPolicyRequest $req) This API is used to create a health check policy.
 * @method Models\CreateNodePoolResponse CreateNodePool(Models\CreateNodePoolRequest $req) This API is used to create a TKE node pool
 * @method Models\DeleteHealthCheckPolicyResponse DeleteHealthCheckPolicy(Models\DeleteHealthCheckPolicyRequest $req) This API is used to delete a health check policy.
 * @method Models\DeleteNodePoolResponse DeleteNodePool(Models\DeleteNodePoolRequest $req) This API is used to delete a TKE node pool.
 * @method Models\DescribeClusterInstancesResponse DescribeClusterInstances(Models\DescribeClusterInstancesRequest $req) This API is used to query the information of node instances in a cluster.
 * @method Models\DescribeHealthCheckPoliciesResponse DescribeHealthCheckPolicies(Models\DescribeHealthCheckPoliciesRequest $req) This API is used to query a health check policy.
 * @method Models\DescribeHealthCheckPolicyBindingsResponse DescribeHealthCheckPolicyBindings(Models\DescribeHealthCheckPolicyBindingsRequest $req) This API is used to query a health check policy binding relationship.
 * @method Models\DescribeHealthCheckTemplateResponse DescribeHealthCheckTemplate(Models\DescribeHealthCheckTemplateRequest $req) This API is used to query a health check policy template.
 * @method Models\DescribeNodePoolsResponse DescribeNodePools(Models\DescribeNodePoolsRequest $req) This API is used to query a TKE node pool list.
 * @method Models\ModifyHealthCheckPolicyResponse ModifyHealthCheckPolicy(Models\ModifyHealthCheckPolicyRequest $req) This API is used to modify a health check policy.
 * @method Models\ModifyNodePoolResponse ModifyNodePool(Models\ModifyNodePoolRequest $req) This API is used to update a TKE node pool.
 */

class TkeClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tke.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tke";

    /**
     * @var string
     */
    protected $version = "2022-05-01";

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
        $respClass = "TencentCloud"."\\".ucfirst("tke")."\\"."V20220501\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
