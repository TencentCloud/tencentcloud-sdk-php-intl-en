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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ComposeMedia request structure.
 *
 * @method array getTracks() Obtain Input media track list, including multiple track information composed of materials such as video, audio, and images. Among them: <li>The input multiple tracks are aligned with the output media file timeline on the timeline;</li><li>Materials on different tracks at the same time point on the timeline overlap. Image overlay of videos or images in track order, materials with higher track order are overlaid on top, and audio materials are mixed;</li><li>Each type of track supports up to 10 video, audio, and image tracks.</li><li>The total number of media segments placed on all types of tracks supports up to 500.</li>
 * @method void setTracks(array $Tracks) Set Input media track list, including multiple track information composed of materials such as video, audio, and images. Among them: <li>The input multiple tracks are aligned with the output media file timeline on the timeline;</li><li>Materials on different tracks at the same time point on the timeline overlap. Image overlay of videos or images in track order, materials with higher track order are overlaid on top, and audio materials are mixed;</li><li>Each type of track supports up to 10 video, audio, and image tracks.</li><li>The total number of media segments placed on all types of tracks supports up to 500.</li>
 * @method ComposeMediaOutput getOutput() Obtain Output media file information.
 * @method void setOutput(ComposeMediaOutput $Output) Set Output media file information.
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services on or after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services on or after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
 * @method Canvas getCanvas() Obtain Canvas used when making video files.
 * @method void setCanvas(Canvas $Canvas) Set Canvas used when making video files.
 * @method string getSessionContext() Obtain Source context, used to pass through user request information. The value of this field will be returned in the ComposeMediaComplete callback. It can contain up to 1000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context, used to pass through user request information. The value of this field will be returned in the ComposeMediaComplete callback. It can contain up to 1000 characters.
 * @method string getSessionId() Obtain Identification Code for Task Deduplication. If a request with the same identification code has been sent within the past 3 days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
 * @method void setSessionId(string $SessionId) Set Identification Code for Task Deduplication. If a request with the same identification code has been sent within the past 3 days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
 */
class ComposeMediaRequest extends AbstractModel
{
    /**
     * @var array Input media track list, including multiple track information composed of materials such as video, audio, and images. Among them: <li>The input multiple tracks are aligned with the output media file timeline on the timeline;</li><li>Materials on different tracks at the same time point on the timeline overlap. Image overlay of videos or images in track order, materials with higher track order are overlaid on top, and audio materials are mixed;</li><li>Each type of track supports up to 10 video, audio, and image tracks.</li><li>The total number of media segments placed on all types of tracks supports up to 500.</li>
     */
    public $Tracks;

    /**
     * @var ComposeMediaOutput Output media file information.
     */
    public $Output;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services on or after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
     */
    public $SubAppId;

    /**
     * @var Canvas Canvas used when making video files.
     */
    public $Canvas;

    /**
     * @var string Source context, used to pass through user request information. The value of this field will be returned in the ComposeMediaComplete callback. It can contain up to 1000 characters.
     */
    public $SessionContext;

    /**
     * @var string Identification Code for Task Deduplication. If a request with the same identification code has been sent within the past 3 days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
     */
    public $SessionId;

    /**
     * @param array $Tracks Input media track list, including multiple track information composed of materials such as video, audio, and images. Among them: <li>The input multiple tracks are aligned with the output media file timeline on the timeline;</li><li>Materials on different tracks at the same time point on the timeline overlap. Image overlay of videos or images in track order, materials with higher track order are overlaid on top, and audio materials are mixed;</li><li>Each type of track supports up to 10 video, audio, and image tracks.</li><li>The total number of media segments placed on all types of tracks supports up to 500.</li>
     * @param ComposeMediaOutput $Output Output media file information.
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services on or after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
     * @param Canvas $Canvas Canvas used when making video files.
     * @param string $SessionContext Source context, used to pass through user request information. The value of this field will be returned in the ComposeMediaComplete callback. It can contain up to 1000 characters.
     * @param string $SessionId Identification Code for Task Deduplication. If a request with the same identification code has been sent within the past 3 days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Tracks",$param) and $param["Tracks"] !== null) {
            $this->Tracks = [];
            foreach ($param["Tracks"] as $key => $value){
                $obj = new MediaTrack();
                $obj->deserialize($value);
                array_push($this->Tracks, $obj);
            }
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new ComposeMediaOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Canvas",$param) and $param["Canvas"] !== null) {
            $this->Canvas = new Canvas();
            $this->Canvas->deserialize($param["Canvas"]);
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
