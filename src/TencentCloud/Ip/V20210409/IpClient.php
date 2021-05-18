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

namespace TencentCloud\Ip\V20210409;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ip\V20210409\Models as Models;

/**
 * @method Models\CreateAccountResponse CreateAccount(Models\CreateAccountRequest $req) This API is used to create a Tencent Cloud account in the International Partner platform for a customer. After registration, the customer will be automatically bound to the partner account.

Notes:<br>
1. To create the Tencent Cloud account, the partner should enter and verify the customer’s email address and mobile number.<br>
2. The customer needs to complete personal information after the first login.
 * @method Models\GetCountryCodesResponse GetCountryCodes(Models\GetCountryCodesRequest $req) This API is used to obtain country and region codes.
 */

class IpClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ip.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ip";

    /**
     * @var string
     */
    protected $version = "2021-04-09";

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
        $respClass = "TencentCloud"."\\".ucfirst("ip")."\\"."V20210409\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
