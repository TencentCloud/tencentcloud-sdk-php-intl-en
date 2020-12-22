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
 * @method Models\CreateTroubleInfoResponse CreateTroubleInfo(Models\CreateTroubleInfoRequest $req) This API is used to create exception information.
 * @method Models\DescribeAbnormalEventResponse DescribeAbnormalEvent(Models\DescribeAbnormalEventRequest $req) This API is used to query exception occurrences under a specified `SDKAppID` and return the exception ID and possible causes. It queries data in last 5 days, and the query period is up to 1 hour which can start and end on different days. For more information about exceptions, please see the exception ID mapping table: https://intl.cloud.tencent.com/document/product/647/37906
 * @method Models\DescribeCallDetailResponse DescribeCallDetail(Models\DescribeCallDetailRequest $req) This API is used to query the user list and call quality data within a specified time. It queries data from the last 14 days. When `DataType` is not null, real-time data of up to 1 hour can be queried. Up to 6 users can be queried each time. The query period can start and end on different days. When `DataType` and all `UserId` are null, data of 6 users will be queried by default. Data of up to 100 users can be displayed on one page (`PageSize` is up to 100). This API is used to query call quality and is not recommended for billing use.
 * @method Models\DescribeDetailEventResponse DescribeDetailEvent(Models\DescribeDetailEventRequest $req) This API is used to query a user’s activity details such as room entry/exit and video enablement/disablement during a call. It can query data for the last 14 days.
 * @method Models\DescribeHistoryScaleResponse DescribeHistoryScale(Models\DescribeHistoryScaleRequest $req) This API is used to query the daily numbers of rooms and users under a specified `SDKAppID`. It can query data once per minute for the last 14 days. If a day has not ended, the numbers of rooms and users on the day cannot be queried.
 * @method Models\DescribeRealtimeNetworkResponse DescribeRealtimeNetwork(Models\DescribeRealtimeNetworkRequest $req) This API is used to query real-time network status for the last 24 hours according to `sdkappid`, including upstream and downstream packet losses. The query time range cannot exceed 1 hour.
 * @method Models\DescribeRealtimeQualityResponse DescribeRealtimeQuality(Models\DescribeRealtimeQualityRequest $req) This API is used to query real-time quality data for the last 24 hours according to `sdkappid`, including the room entry success rate, instant playback rate of the first frame, audio lag rate, and video lag rate. The query time range cannot exceed 1 hour.
 * @method Models\DescribeRealtimeScaleResponse DescribeRealtimeScale(Models\DescribeRealtimeScaleRequest $req) This API is used to query the real-time scale for the last 24 hours according to `sdkappid`. The query time range cannot exceed 1 hour.
 * @method Models\DescribeRoomInformationResponse DescribeRoomInformation(Models\DescribeRoomInformationRequest $req) This API is used to query the room list under a specified `SDKAppID`. It returns 10 calls by default and up to 100 calls at a time. It can query data for the last 14 days.
 * @method Models\DescribeUserInformationResponse DescribeUserInformation(Models\DescribeUserInformationRequest $req) This API is used to query the user list within a specified time. It queries data in last 14 days. Data of 6 users will be queried on one page by default. And data of up to 100 users can be displayed on one page (`PageSize` is up to 100).
 * @method Models\DismissRoomResponse DismissRoom(Models\DismissRoomRequest $req) This API is used to remove all users from a room and dismiss the room. It supports all platforms. For Android, iOS, Windows, and macOS, the TRTC SDK needs to be upgraded to v6.6 or above.
 * @method Models\RemoveUserResponse RemoveUser(Models\RemoveUserRequest $req) This API is used to remove a user from a room. It is applicable to scenarios where the anchor, room owner, or admin wants to kick out a user. It supports all platforms. For Android, iOS, Windows, and macOS, the TRTC SDK needs to be upgraded to v6.6 or above.
 * @method Models\StartMCUMixTranscodeResponse StartMCUMixTranscode(Models\StartMCUMixTranscodeRequest $req) This API is used to enable On-Cloud MixTranscoding and specify the layout position of each channel of video image in the mixed video image.

There may be multiple channels of audio/video streams in a TRTC room. You can call this API to request the Tencent Cloud server to combine multiple channels of video images into one channel, specify the position of each channel, and mix the multiple channels of audio so as to output one channel of audio/video stream for easier recording and live streaming.

You can use this API to perform the following operations:
- Set image and audio quality parameters of the final live stream, including video resolution, video bitrate, video frame rate, and audio quality.
- Set the image layout, i.e., positions of all channels of images. You only need to set the layout once when enabling On-Cloud MixTranscoding, and the layout engine will automatically arrange the video images in the configured layout in subsequent operations.
- Set the recording file name for future playback.
- Set the CDN live stream ID for live streaming over CDN.

Currently, On-Cloud MixTranscoding supports the following layout templates:
- Floating template: the entire screen is covered by the video image of the first user who enters the room, and the video images of other users are displayed as small images in horizontal rows in the bottom-left corner in room entry sequence. The screen can accommodate up to 4 rows of 4 small images, which float over the big image. Up to 1 big image and 15 small images are supported. If a user sends audio only, the user will still occupy an image spot.
- Grid template: the screen is divided into user video images with the same dimensions. The more the users, the smaller the image dimensions. Up to 16 images are supported. If a user sends audio only, the user will still occupy an image spot.
- Screen sharing template: this is designed for video conferencing and online classes. The shared screen (or camera of the lecturer) is shown as the big image and always takes up the left half of the screen, and the video images of other users are displayed in the right half in up to 2 columns with up to 8 small images in each column. Up to 1 big image and 15 small images are supported. If the aspect ratio of the upstream image doesn’t match that of the output image, the big image on the left will be scaled so as to be displayed in whole, and the small images on the right will be cropped.
- Picture-in-picture template: this is designed for mixing a pair of big/small images or a big image with the audio of other users. The small image floats over the big image, and the users in the big/small images and the display position of the small image can be specified. Up to 2 images are supported.
- Custom template: this is designed for specifying the image positions of users in the mixed stream or presetting image positions. If users are assigned to preset image positions, the layout engine will reserve the positions for the users; if not, users will occupy the positions in room entry sequence. If a user sends audio only, the user will still occupy an image spot, which shows the background. When all preset positions are occupied, the audio and video of other users will no longer be mixed.

Note: only applications created on or after January 9, 2020 can call this API. Those created before use the LVB stream mix by default. If you want to switch to MCU On-Cloud MixTranscoding, please [submit a ticket](https://console.cloud.tencent.com/workorder/category).
 * @method Models\StopMCUMixTranscodeResponse StopMCUMixTranscode(Models\StopMCUMixTranscodeRequest $req) This API is used to end On-Cloud MixTranscoding.
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
    protected $service = "trtc";

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
