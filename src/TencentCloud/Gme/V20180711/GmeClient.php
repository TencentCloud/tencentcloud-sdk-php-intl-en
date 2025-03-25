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

namespace TencentCloud\Gme\V20180711;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Gme\V20180711\Models as Models;

/**
 * @method Models\CreateAppResponse CreateApp(Models\CreateAppRequest $req) This API is used to create a GME application.
 * @method Models\DeleteRoomMemberResponse DeleteRoomMember(Models\DeleteRoomMemberRequest $req) This API is used to delete a room or remove members from the room.
 * @method Models\DescribeAppStatisticsResponse DescribeAppStatistics(Models\DescribeAppStatisticsRequest $req) This API is used to query the usage statistics of a GME application, including those of Voice Chat, Voice Message Service, Voice Analysis, etc. The maximum query period is the past 30 days.
 * @method Models\DescribeApplicationDataResponse DescribeApplicationData(Models\DescribeApplicationDataRequest $req) This API is used to query data details for up to the past 90 days.
 * @method Models\DescribeRecordInfoResponse DescribeRecordInfo(Models\DescribeRecordInfoRequest $req) This API is used to query a recording task.
 * @method Models\DescribeTaskInfoResponse DescribeTaskInfo(Models\DescribeTaskInfoRequest $req) This API is used to query the recording task in a room.
 * @method Models\ModifyAppStatusResponse ModifyAppStatus(Models\ModifyAppStatusRequest $req) This API is used to change the status of an application.
 * @method Models\ModifyRecordInfoResponse ModifyRecordInfo(Models\ModifyRecordInfoRequest $req) This API is used to modify recording configurations.
 * @method Models\StartRecordResponse StartRecord(Models\StartRecordRequest $req) This API is used to start recording.
 * @method Models\StopRecordResponse StopRecord(Models\StopRecordRequest $req) This API is used to stop recording.
 */

class GmeClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "gme.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "gme";

    /**
     * @var string
     */
    protected $version = "2018-07-11";

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
        $respClass = "TencentCloud"."\\".ucfirst("gme")."\\"."V20180711\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
