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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ComposeMedia request structure.
 *
 * @method array getTracks() Obtain List of input media tracks, i.e., information of multiple tracks composed of video, audio, image, and other materials. <li>Multiple input tracks are aligned with the output media file on the time axis. </li><li>The materials of each track at the same time point on the time axis will be superimposed. Specifically, videos or images will be superimposed for video image by track order, where a material with a higher track order will be more on top, while audio materials will be mixed. </li><li>Up to 10 tracks are supported for each type (video, audio, or image).</li>
 * @method void setTracks(array $Tracks) Set List of input media tracks, i.e., information of multiple tracks composed of video, audio, image, and other materials. <li>Multiple input tracks are aligned with the output media file on the time axis. </li><li>The materials of each track at the same time point on the time axis will be superimposed. Specifically, videos or images will be superimposed for video image by track order, where a material with a higher track order will be more on top, while audio materials will be mixed. </li><li>Up to 10 tracks are supported for each type (video, audio, or image).</li>
 * @method ComposeMediaOutput getOutput() Obtain Information of output media file.
 * @method void setOutput(ComposeMediaOutput $Output) Set Information of output media file.
 * @method Canvas getCanvas() Obtain Canvas used for composing video file.
 * @method void setCanvas(Canvas $Canvas) Set Canvas used for composing video file.
 * @method string getSessionContext() Obtain This parameter is used to pass through user request information. `ComposeMediaComplete` callback will return the value of this field. It contains up to 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set This parameter is used to pass through user request information. `ComposeMediaComplete` callback will return the value of this field. It contains up to 1,000 characters.
 * @method string getSessionId() Obtain ID used for task deduplication. If there was a request with the same ID in the last three days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or a blank string is entered, no deduplication will be performed.
 * @method void setSessionId(string $SessionId) Set ID used for task deduplication. If there was a request with the same ID in the last three days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or a blank string is entered, no deduplication will be performed.
 * @method integer getSubAppId() Obtain [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
 * @method void setSubAppId(integer $SubAppId) Set [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
 */
class ComposeMediaRequest extends AbstractModel
{
    /**
     * @var array List of input media tracks, i.e., information of multiple tracks composed of video, audio, image, and other materials. <li>Multiple input tracks are aligned with the output media file on the time axis. </li><li>The materials of each track at the same time point on the time axis will be superimposed. Specifically, videos or images will be superimposed for video image by track order, where a material with a higher track order will be more on top, while audio materials will be mixed. </li><li>Up to 10 tracks are supported for each type (video, audio, or image).</li>
     */
    public $Tracks;

    /**
     * @var ComposeMediaOutput Information of output media file.
     */
    public $Output;

    /**
     * @var Canvas Canvas used for composing video file.
     */
    public $Canvas;

    /**
     * @var string This parameter is used to pass through user request information. `ComposeMediaComplete` callback will return the value of this field. It contains up to 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var string ID used for task deduplication. If there was a request with the same ID in the last three days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or a blank string is entered, no deduplication will be performed.
     */
    public $SessionId;

    /**
     * @var integer [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
     */
    public $SubAppId;

    /**
     * @param array $Tracks List of input media tracks, i.e., information of multiple tracks composed of video, audio, image, and other materials. <li>Multiple input tracks are aligned with the output media file on the time axis. </li><li>The materials of each track at the same time point on the time axis will be superimposed. Specifically, videos or images will be superimposed for video image by track order, where a material with a higher track order will be more on top, while audio materials will be mixed. </li><li>Up to 10 tracks are supported for each type (video, audio, or image).</li>
     * @param ComposeMediaOutput $Output Information of output media file.
     * @param Canvas $Canvas Canvas used for composing video file.
     * @param string $SessionContext This parameter is used to pass through user request information. `ComposeMediaComplete` callback will return the value of this field. It contains up to 1,000 characters.
     * @param string $SessionId ID used for task deduplication. If there was a request with the same ID in the last three days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or a blank string is entered, no deduplication will be performed.
     * @param integer $SubAppId [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
