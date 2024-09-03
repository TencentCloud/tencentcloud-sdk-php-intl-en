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

namespace TencentCloud\Car\V20220110;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Car\V20220110\Models as Models;

/**
 * @method Models\ApplyConcurrentResponse ApplyConcurrent(Models\ApplyConcurrentRequest $req) This API is used to request concurrency quota. The timeout period of the API is 20 seconds.
 * @method Models\CreateApplicationResponse CreateApplication(Models\CreateApplicationRequest $req) This API is used to create an application.
 * @method Models\CreateApplicationSnapshotResponse CreateApplicationSnapshot(Models\CreateApplicationSnapshotRequest $req) This API is used to create a cloud application version snapshot.
 * @method Models\CreateApplicationVersionResponse CreateApplicationVersion(Models\CreateApplicationVersionRequest $req) This API is used to create a cloud application version.
 * @method Models\CreateSessionResponse CreateSession(Models\CreateSessionRequest $req) This API is used to create a session. The timeout period of the API is 5 seconds.
 * @method Models\DeleteApplicationResponse DeleteApplication(Models\DeleteApplicationRequest $req) This API is used to delete a cloud application.
 * @method Models\DeleteApplicationVersionResponse DeleteApplicationVersion(Models\DeleteApplicationVersionRequest $req) This API is used to delete a cloud application version.
 * @method Models\DescribeApplicationFileInfoResponse DescribeApplicationFileInfo(Models\DescribeApplicationFileInfoRequest $req) This API is used to query application file information.
 * @method Models\DescribeApplicationListResponse DescribeApplicationList(Models\DescribeApplicationListRequest $req) This API is used to query the cloud application list.
 * @method Models\DescribeApplicationPathListResponse DescribeApplicationPathList(Models\DescribeApplicationPathListRequest $req) This API is used to query the cloud application startup path list.
 * @method Models\DescribeApplicationStatusResponse DescribeApplicationStatus(Models\DescribeApplicationStatusRequest $req) This API is used to query the running status of a cloud application and update status information.
 * @method Models\DescribeApplicationVersionResponse DescribeApplicationVersion(Models\DescribeApplicationVersionRequest $req) This API is used to query the version information of a cloud application.
 * @method Models\DescribeConcurrentCountResponse DescribeConcurrentCount(Models\DescribeConcurrentCountRequest $req) This API is used to obtain the concurrency count.
 * @method Models\DescribeCosCredentialResponse DescribeCosCredential(Models\DescribeCosCredentialRequest $req) This API is used to query COS key information.
 * @method Models\DestroySessionResponse DestroySession(Models\DestroySessionRequest $req) This API is used to terminate a session. If cloud-based streaming has been enabled for this session, the cloud-based streaming will end upon session termination.
 * @method Models\ModifyApplicationBaseInfoResponse ModifyApplicationBaseInfo(Models\ModifyApplicationBaseInfoRequest $req) This API is used to modify basic information of a cloud application.
 * @method Models\ModifyApplicationVersionResponse ModifyApplicationVersion(Models\ModifyApplicationVersionRequest $req) This API is used to modify the version information of a cloud application.
 * @method Models\ModifyMobileApplicationInfoResponse ModifyMobileApplicationInfo(Models\ModifyMobileApplicationInfoRequest $req) This API is used to modify the mobile application data.
 * @method Models\SetApplicationVersionOnlineResponse SetApplicationVersionOnline(Models\SetApplicationVersionOnlineRequest $req) This API is used to launch an application version.
 * @method Models\StartPublishStreamResponse StartPublishStream(Models\StartPublishStreamRequest $req) This API is used to start cloud-based streaming. The codec for the cloud-based streaming is automatically selected based on the client's (SDK) capabilities, with a default order of H.265, H.264, VP8, and VP9.
 * @method Models\StartPublishStreamWithURLResponse StartPublishStreamWithURL(Models\StartPublishStreamWithURLRequest $req) This API is used to start cloud-based streaming to the specified URL. The codec for the cloud-based streaming is automatically selected based on the client's (SDK) capabilities, with a default order of H.265, H.264, VP8, and VP9. This streaming method will be billed separately. For details about the billing method, see [Charging for Streaming to Specified URL](https://intl.cloud.tencent.com/document/product/1547/72168?from_cn_redirect=1#98ac188a-d122-4caf-88be-05268ecefdf6).
 * @method Models\StopPublishStreamResponse StopPublishStream(Models\StopPublishStreamRequest $req) This API is used to stop cloud-based streaming.
 */

class CarClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "car.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "car";

    /**
     * @var string
     */
    protected $version = "2022-01-10";

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
        $respClass = "TencentCloud"."\\".ucfirst("car")."\\"."V20220110\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
