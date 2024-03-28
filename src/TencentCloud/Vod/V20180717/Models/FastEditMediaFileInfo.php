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
 * VOD  fast media editing information
 *
 * @method string getFileId() Obtain Media file ID.
 * @method void setFileId(string $FileId) Set Media file ID.
 * @method string getAudioVideoType() Obtain The types of media. Valid values: <li>Transcode:Transcoded output; </li> <li>Original: Original audio and video. </li>The audio and video being operated on must be in HLS format.
 * @method void setAudioVideoType(string $AudioVideoType) Set The types of media. Valid values: <li>Transcode:Transcoded output; </li> <li>Original: Original audio and video. </li>The audio and video being operated on must be in HLS format.
 * @method integer getTranscodeDefinition() Obtain When AudioVideoType is set to Transcode, it is valid and indicates the transcoding template ID for the media being operated on.
 * @method void setTranscodeDefinition(integer $TranscodeDefinition) Set When AudioVideoType is set to Transcode, it is valid and indicates the transcoding template ID for the media being operated on.
 * @method float getStartTimeOffset() Obtain Offset time of the start of the video clip, unit: seconds.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Offset time of the start of the video clip, unit: seconds.
 * @method float getEndTimeOffset() Obtain Offset time at the end of the video clip, unit: seconds.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set Offset time at the end of the video clip, unit: seconds.
 */
class FastEditMediaFileInfo extends AbstractModel
{
    /**
     * @var string Media file ID.
     */
    public $FileId;

    /**
     * @var string The types of media. Valid values: <li>Transcode:Transcoded output; </li> <li>Original: Original audio and video. </li>The audio and video being operated on must be in HLS format.
     */
    public $AudioVideoType;

    /**
     * @var integer When AudioVideoType is set to Transcode, it is valid and indicates the transcoding template ID for the media being operated on.
     */
    public $TranscodeDefinition;

    /**
     * @var float Offset time of the start of the video clip, unit: seconds.
     */
    public $StartTimeOffset;

    /**
     * @var float Offset time at the end of the video clip, unit: seconds.
     */
    public $EndTimeOffset;

    /**
     * @param string $FileId Media file ID.
     * @param string $AudioVideoType The types of media. Valid values: <li>Transcode:Transcoded output; </li> <li>Original: Original audio and video. </li>The audio and video being operated on must be in HLS format.
     * @param integer $TranscodeDefinition When AudioVideoType is set to Transcode, it is valid and indicates the transcoding template ID for the media being operated on.
     * @param float $StartTimeOffset Offset time of the start of the video clip, unit: seconds.
     * @param float $EndTimeOffset Offset time at the end of the video clip, unit: seconds.
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("AudioVideoType",$param) and $param["AudioVideoType"] !== null) {
            $this->AudioVideoType = $param["AudioVideoType"];
        }

        if (array_key_exists("TranscodeDefinition",$param) and $param["TranscodeDefinition"] !== null) {
            $this->TranscodeDefinition = $param["TranscodeDefinition"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }
    }
}
