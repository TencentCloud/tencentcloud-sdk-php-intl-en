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
 * @method array getTracks() Obtain List of input media tracks, including video, audio, and image tracks. <li>Input tracks are synced to the output media file.</li><li>Input tracks are synced to each other. Videos and images in higher tracks are superimposed over those in lower tracks. Audio tracks are mixed.</li><li>There can be up to 10 tracks for video, audio, and images each.</li><li>The total number of clips in all tracks cannot exceed 500.</li>
 * @method void setTracks(array $Tracks) Set List of input media tracks, including video, audio, and image tracks. <li>Input tracks are synced to the output media file.</li><li>Input tracks are synced to each other. Videos and images in higher tracks are superimposed over those in lower tracks. Audio tracks are mixed.</li><li>There can be up to 10 tracks for video, audio, and images each.</li><li>The total number of clips in all tracks cannot exceed 500.</li>
 * @method ComposeMediaOutput getOutput() Obtain Information of output media file.
 * @method void setOutput(ComposeMediaOutput $Output) Set Information of output media file.
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method Canvas getCanvas() Obtain Canvas used for composing video file.
 * @method void setCanvas(Canvas $Canvas) Set Canvas used for composing video file.
 * @method string getSessionContext() Obtain Used to pass through user request information. `ComposeMediaComplete` callback will return the value of this parameter. It contains up to 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set Used to pass through user request information. `ComposeMediaComplete` callback will return the value of this parameter. It contains up to 1,000 characters.
 * @method string getSessionId() Obtain Used to identify duplicate requests. After you send a request, if any request with the same `SessionId` has already been sent in the last three days (72 hours), an error message will be returned. `SessionId` contains up to 50 characters. If this parameter is not carried or is an empty string, no deduplication will be performed.
 * @method void setSessionId(string $SessionId) Set Used to identify duplicate requests. After you send a request, if any request with the same `SessionId` has already been sent in the last three days (72 hours), an error message will be returned. `SessionId` contains up to 50 characters. If this parameter is not carried or is an empty string, no deduplication will be performed.
 */
class ComposeMediaRequest extends AbstractModel
{
    /**
     * @var array List of input media tracks, including video, audio, and image tracks. <li>Input tracks are synced to the output media file.</li><li>Input tracks are synced to each other. Videos and images in higher tracks are superimposed over those in lower tracks. Audio tracks are mixed.</li><li>There can be up to 10 tracks for video, audio, and images each.</li><li>The total number of clips in all tracks cannot exceed 500.</li>
     */
    public $Tracks;

    /**
     * @var ComposeMediaOutput Information of output media file.
     */
    public $Output;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var Canvas Canvas used for composing video file.
     */
    public $Canvas;

    /**
     * @var string Used to pass through user request information. `ComposeMediaComplete` callback will return the value of this parameter. It contains up to 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var string Used to identify duplicate requests. After you send a request, if any request with the same `SessionId` has already been sent in the last three days (72 hours), an error message will be returned. `SessionId` contains up to 50 characters. If this parameter is not carried or is an empty string, no deduplication will be performed.
     */
    public $SessionId;

    /**
     * @param array $Tracks List of input media tracks, including video, audio, and image tracks. <li>Input tracks are synced to the output media file.</li><li>Input tracks are synced to each other. Videos and images in higher tracks are superimposed over those in lower tracks. Audio tracks are mixed.</li><li>There can be up to 10 tracks for video, audio, and images each.</li><li>The total number of clips in all tracks cannot exceed 500.</li>
     * @param ComposeMediaOutput $Output Information of output media file.
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param Canvas $Canvas Canvas used for composing video file.
     * @param string $SessionContext Used to pass through user request information. `ComposeMediaComplete` callback will return the value of this parameter. It contains up to 1,000 characters.
     * @param string $SessionId Used to identify duplicate requests. After you send a request, if any request with the same `SessionId` has already been sent in the last three days (72 hours), an error message will be returned. `SessionId` contains up to 50 characters. If this parameter is not carried or is an empty string, no deduplication will be performed.
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
