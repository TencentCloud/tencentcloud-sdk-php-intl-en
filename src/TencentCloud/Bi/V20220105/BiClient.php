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
