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
 * @method array getTracks() Obtain The input media track list includes multiple track information composed of materials such as video, audio, and images. Among them:<li>The input multiple tracks are aligned with the output media file timeline on the timeline.</li><li>Overlap materials on different tracks at the same time point on the timeline. Perform image overlay of videos or images in track order, with materials of higher track order overlaid on top. Mix audio materials.</li><li>Each type of track supports up to 10 video, audio, or image tracks.</li><li>The total number of media segments placed on all types of tracks supports up to 500.</li>
 * @method void setTracks(array $Tracks) Set The input media track list includes multiple track information composed of materials such as video, audio, and images. Among them:<li>The input multiple tracks are aligned with the output media file timeline on the timeline.</li><li>Overlap materials on different tracks at the same time point on the timeline. Perform image overlay of videos or images in track order, with materials of higher track order overlaid on top. Mix audio materials.</li><li>Each type of track supports up to 10 video, audio, or image tracks.</li><li>The total number of media segments placed on all types of tracks supports up to 500.</li>
 * @method ComposeMediaOutput getOutput() Obtain Output media file information.
 * @method void setOutput(ComposeMediaOutput $Output) Set Output media file information.
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method Canvas getCanvas() Obtain Canvas used when making video files.
 * @method void setCanvas(Canvas $Canvas) Set Canvas used when making video files.
 * @method string getSessionContext() Obtain Identify source context. This is used to pass through user request information. The ComposeMediaComplete callback returns the value of this field. The maximum length is 1000 characters.
 * @method void setSessionContext(string $SessionContext) Set Identify source context. This is used to pass through user request information. The ComposeMediaComplete callback returns the value of this field. The maximum length is 1000 characters.
 * @method string getSessionId() Obtain Identifier for task deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
 * @method void setSessionId(string $SessionId) Set Identifier for task deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
 */
class ComposeMediaRequest extends AbstractModel
{
    /**
     * @var array The input media track list includes multiple track information composed of materials such as video, audio, and images. Among them:<li>The input multiple tracks are aligned with the output media file timeline on the timeline.</li><li>Overlap materials on different tracks at the same time point on the timeline. Perform image overlay of videos or images in track order, with materials of higher track order overlaid on top. Mix audio materials.</li><li>Each type of track supports up to 10 video, audio, or image tracks.</li><li>The total number of media segments placed on all types of tracks supports up to 500.</li>
     */
    public $Tracks;

    /**
     * @var ComposeMediaOutput Output media file information.
     */
    public $Output;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var Canvas Canvas used when making video files.
     */
    public $Canvas;

    /**
     * @var string Identify source context. This is used to pass through user request information. The ComposeMediaComplete callback returns the value of this field. The maximum length is 1000 characters.
     */
    public $SessionContext;

    /**
     * @var string Identifier for task deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
     */
    public $SessionId;

    /**
     * @param array $Tracks The input media track list includes multiple track information composed of materials such as video, audio, and images. Among them:<li>The input multiple tracks are aligned with the output media file timeline on the timeline.</li><li>Overlap materials on different tracks at the same time point on the timeline. Perform image overlay of videos or images in track order, with materials of higher track order overlaid on top. Mix audio materials.</li><li>Each type of track supports up to 10 video, audio, or image tracks.</li><li>The total number of media segments placed on all types of tracks supports up to 500.</li>
     * @param ComposeMediaOutput $Output Output media file information.
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param Canvas $Canvas Canvas used when making video files.
     * @param string $SessionContext Identify source context. This is used to pass through user request information. The ComposeMediaComplete callback returns the value of this field. The maximum length is 1000 characters.
     * @param string $SessionId Identifier for task deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
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
