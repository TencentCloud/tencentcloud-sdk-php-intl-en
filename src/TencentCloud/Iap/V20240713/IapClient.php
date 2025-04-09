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

namespace TencentCloud\Iap\V20240713;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Iap\V20240713\Models as Models;

/**
 * @method Models\CreateIAPUserOIDCConfigResponse CreateIAPUserOIDCConfig(Models\CreateIAPUserOIDCConfigRequest $req) This API is used to create a user OIDC configuration. Only one user OIDC IdP can be created, and the user SAML SSO IdP will be automatically disabled after it is created.
 * @method Models\DescribeIAPLoginSessionDurationResponse DescribeIAPLoginSessionDuration(Models\DescribeIAPLoginSessionDurationRequest $req) This API is used to query login session duration.
 * @method Models\DescribeIAPUserOIDCConfigResponse DescribeIAPUserOIDCConfig(Models\DescribeIAPUserOIDCConfigRequest $req) This API is used to query a user OIDC configuration.
 * @method Models\DisableIAPUserSSOResponse DisableIAPUserSSO(Models\DisableIAPUserSSORequest $req) This API is used to disable user SSO.
 * @method Models\ModifyIAPLoginSessionDurationResponse ModifyIAPLoginSessionDuration(Models\ModifyIAPLoginSessionDurationRequest $req) This API is used to modify login session duration.
 * @method Models\UpdateIAPUserOIDCConfigResponse UpdateIAPUserOIDCConfig(Models\UpdateIAPUserOIDCConfigRequest $req) This API is used to modify a user OIDC configuration.
 */

class IapClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "iap.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "iap";

    /**
     * @var string
     */
    protected $version = "2024-07-13";

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
        $respClass = "TencentCloud"."\\".ucfirst("iap")."\\"."V20240713\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
