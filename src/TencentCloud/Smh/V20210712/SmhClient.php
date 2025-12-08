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

namespace TencentCloud\Smh\V20210712;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Smh\V20210712\Models as Models;

/**
 * @method Models\CreateLibraryResponse CreateLibrary(Models\CreateLibraryRequest $req) This API is used to create a PaaS service media library.
 * @method Models\DeleteLibraryResponse DeleteLibrary(Models\DeleteLibraryRequest $req) This API is used to delete a PaaS service media library.
 * @method Models\DescribeLibrariesResponse DescribeLibraries(Models\DescribeLibrariesRequest $req) This API is used to query the PaaS service repository list.
 * @method Models\DescribeLibrarySecretResponse DescribeLibrarySecret(Models\DescribeLibrarySecretRequest $req) This API is used to query the PaaS service Media Library Key.
 * @method Models\DescribeOfficialInstancesResponse DescribeOfficialInstances(Models\DescribeOfficialInstancesRequest $req) This API is used to query official cloud disk instances.
 * @method Models\DescribeOfficialOverviewResponse DescribeOfficialOverview(Models\DescribeOfficialOverviewRequest $req) This API is used to query overview data of official cloud disk instances.
 * @method Models\DescribeTrafficPackagesResponse DescribeTrafficPackages(Models\DescribeTrafficPackagesRequest $req) This API is used to query traffic packages.
 * @method Models\ModifyLibraryResponse ModifyLibrary(Models\ModifyLibraryRequest $req) This API is used to modify the configuration items of a PaaS service media library.
 * @method Models\SendSmsCodeResponse SendSmsCode(Models\SendSmsCodeRequest $req) This API is used to send SMS verification codes for changing the admin account of a super official cloud disk instance.
 * @method Models\VerifySmsCodeResponse VerifySmsCode(Models\VerifySmsCodeRequest $req) This API is used to verify the SMS verification code for rebinding the super administrator account of an official cloud disk instance.
 */

class SmhClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "smh.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "smh";

    /**
     * @var string
     */
    protected $version = "2021-07-12";

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
        $respClass = "TencentCloud"."\\".ucfirst("smh")."\\"."V20210712\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
