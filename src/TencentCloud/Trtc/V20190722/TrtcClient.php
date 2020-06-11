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

namespace TencentCloud\Trtc\V20190722;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Trtc\V20190722\Models as Models;

/**
 * @method Models\DescribeCallDetailResponse DescribeCallDetail(Models\DescribeCallDetailRequest $req) This API is used to query the user list and user call quality data in a specified time period. It can query data of up to 6 users for the last 5 days, and the query time range cannot exceed 1 hour.
 * @method Models\DescribeHistoryScaleResponse DescribeHistoryScale(Models\DescribeHistoryScaleRequest $req) This API is used to query the number of historical rooms and users for the last 5 days. It can query once per minute.
 * @method Models\DescribeRealtimeNetworkResponse DescribeRealtimeNetwork(Models\DescribeRealtimeNetworkRequest $req) This API is used to query real-time network status for the last 24 hours according to `sdkappid`, including upstream and downstream packet losses. The query time range cannot exceed 1 hour.
 * @method Models\DescribeRealtimeQualityResponse DescribeRealtimeQuality(Models\DescribeRealtimeQualityRequest $req) This API is used to query real-time quality data for the last 24 hours according to `sdkappid`, including the room entry success rate, instant playback rate of the first frame, audio lag rate, and video lag rate. The query time range cannot exceed 1 hour.
 * @method Models\DescribeRealtimeScaleResponse DescribeRealtimeScale(Models\DescribeRealtimeScaleRequest $req) This API is used to query the real-time scale for the last 24 hours according to `sdkappid`. The query time range cannot exceed 1 hour.
 * @method Models\DescribeRoomInformationResponse DescribeRoomInformation(Models\DescribeRoomInformationRequest $req) This API is used to query the room list for the last 5 days according to `sdkappid`. It returns 10 calls by default and up to 100 calls at a time.
 * @method Models\DismissRoomResponse DismissRoom(Models\DismissRoomRequest $req) This API is used to remove all users from a room and dismiss the room. It supports all platforms. For Android, iOS, Windows, and macOS, the TRTC SDK needs to be upgraded to v6.6 or above.
 * @method Models\RemoveUserResponse RemoveUser(Models\RemoveUserRequest $req) This API is used to remove a user from a room. It is applicable to scenarios where the anchor, room owner, or admin wants to kick out a user. It supports all platforms. For Android, iOS, Windows, and macOS, the TRTC SDK needs to be upgraded to v6.6 or above.
 */

class TrtcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "trtc.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $version = "2019-07-22";

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
        $respClass = "TencentCloud"."\\".ucfirst("trtc")."\\"."V20190722\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
