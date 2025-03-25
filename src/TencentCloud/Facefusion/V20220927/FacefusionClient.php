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

namespace TencentCloud\Facefusion\V20220927;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Facefusion\V20220927\Models as Models;

/**
 * @method Models\FuseFaceResponse FuseFace(Models\FuseFaceRequest $req) This API is used to perform the fusion of a single face, multiple faces, and specified faces with the material template by uploading face images. Users can add logos to generated images. See <a href="https://intl.cloud.tencent.com/document/product/670/38247?from_cn_redirect=1" target="_blank">Fusion Access Guide</a>.



- The signature method in the public parameters must be specified as the V3 version. In other words, set the SignatureMethod parameter to TC3-HMAC-SHA256.
 * @method Models\QueryVideoFaceFusionJobResponse QueryVideoFaceFusionJob(Models\QueryVideoFaceFusionJobRequest $req) This API is used to query the progress and status of video face fusion tasks by Job ID.
 * @method Models\SubmitVideoFaceFusionJobResponse SubmitVideoFaceFusionJob(Models\SubmitVideoFaceFusionJobRequest $req) This API is used to submit asynchronous processing tasks of video face fusion. After a task is submitted, the Job ID, estimated completion time, and current queue length will be returned.
 */

class FacefusionClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "facefusion.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "facefusion";

    /**
     * @var string
     */
    protected $version = "2022-09-27";

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
        $respClass = "TencentCloud"."\\".ucfirst("facefusion")."\\"."V20220927\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
