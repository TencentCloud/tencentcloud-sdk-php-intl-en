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

namespace TencentCloud\Tiw\V20190919;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tiw\V20190919\Models as Models;

/**
 * @method Models\CreateTranscodeResponse CreateTranscode(Models\CreateTranscodeRequest $req) This API is used to create a document transcoding task.
 * @method Models\DescribeOnlineRecordResponse DescribeOnlineRecord(Models\DescribeOnlineRecordRequest $req) This API is used to query the status and result of a real-time recording task.
 * @method Models\DescribeOnlineRecordCallbackResponse DescribeOnlineRecordCallback(Models\DescribeOnlineRecordCallbackRequest $req) This API is used to query the real-time recording callback address.
 * @method Models\DescribeTranscodeResponse DescribeTranscode(Models\DescribeTranscodeRequest $req) This API is used to query the progress and result of a document transcoding task.
 * @method Models\DescribeTranscodeCallbackResponse DescribeTranscodeCallback(Models\DescribeTranscodeCallbackRequest $req) This API is used to query the document transcoding callback address.
 * @method Models\PauseOnlineRecordResponse PauseOnlineRecord(Models\PauseOnlineRecordRequest $req) This API is used to pause real-time recording.
 * @method Models\ResumeOnlineRecordResponse ResumeOnlineRecord(Models\ResumeOnlineRecordRequest $req) This API is used to resume real-time recording.
 * @method Models\SetOnlineRecordCallbackResponse SetOnlineRecordCallback(Models\SetOnlineRecordCallbackRequest $req) This API is used to set the real-time recording callback address.
 * @method Models\SetOnlineRecordCallbackKeyResponse SetOnlineRecordCallbackKey(Models\SetOnlineRecordCallbackKeyRequest $req) This API is used to set the authentication key for the real-time recording callback.
 * @method Models\SetTranscodeCallbackResponse SetTranscodeCallback(Models\SetTranscodeCallbackRequest $req) This API is used to set the document transcoding callback address.
 * @method Models\SetTranscodeCallbackKeyResponse SetTranscodeCallbackKey(Models\SetTranscodeCallbackKeyRequest $req) This API is used to set the authentication key for the document transcoding callback.
 * @method Models\StartOnlineRecordResponse StartOnlineRecord(Models\StartOnlineRecordRequest $req) This API is used to start a real-time recording task.
 * @method Models\StopOnlineRecordResponse StopOnlineRecord(Models\StopOnlineRecordRequest $req) This API is used to stop real-time recording.
 */

class TiwClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tiw.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $version = "2019-09-19";

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
        $respClass = "TencentCloud"."\\".ucfirst("tiw")."\\"."V20190919\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
