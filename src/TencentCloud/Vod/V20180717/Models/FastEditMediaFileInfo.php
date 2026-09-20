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
 * Input media type for quick media edit operations
 *
 * @method string getFileId() Obtain Media ID.
 * @method void setFileId(string $FileId) Set Media ID.
 * @method string getAudioVideoType() Obtain Audio and video type for operation. Optional values:
<li>Transcode: transcode;</li>
<li>Original: original audio/video.</li>
Note: The audio and video to operate must be in HLS format.
 * @method void setAudioVideoType(string $AudioVideoType) Set Audio and video type for operation. Optional values:
<li>Transcode: transcode;</li>
<li>Original: original audio/video.</li>
Note: The audio and video to operate must be in HLS format.
 * @method integer getTranscodeDefinition() Obtain Valid when `AudioVideoType` is `Transcode`. It indicates the transcoding template ID for media operation.
 * @method void setTranscodeDefinition(integer $TranscodeDefinition) Set Valid when `AudioVideoType` is `Transcode`. It indicates the transcoding template ID for media operation.
 * @method float getStartTimeOffset() Obtain Media editing start offset time in seconds.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Media editing start offset time in seconds.
 * @method float getEndTimeOffset() Obtain Media editing end time offset, in seconds.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set Media editing end time offset, in seconds.
 */
class FastEditMediaFileInfo extends AbstractModel
{
    /**
     * @var string Media ID.
     */
    public $FileId;

    /**
     * @var string Audio and video type for operation. Optional values:
<li>Transcode: transcode;</li>
<li>Original: original audio/video.</li>
Note: The audio and video to operate must be in HLS format.
     */
    public $AudioVideoType;

    /**
     * @var integer Valid when `AudioVideoType` is `Transcode`. It indicates the transcoding template ID for media operation.
     */
    public $TranscodeDefinition;

    /**
     * @var float Media editing start offset time in seconds.
     */
    public $StartTimeOffset;

    /**
     * @var float Media editing end time offset, in seconds.
     */
    public $EndTimeOffset;

    /**
     * @param string $FileId Media ID.
     * @param string $AudioVideoType Audio and video type for operation. Optional values:
<li>Transcode: transcode;</li>
<li>Original: original audio/video.</li>
Note: The audio and video to operate must be in HLS format.
     * @param integer $TranscodeDefinition Valid when `AudioVideoType` is `Transcode`. It indicates the transcoding template ID for media operation.
     * @param float $StartTimeOffset Media editing start offset time in seconds.
     * @param float $EndTimeOffset Media editing end time offset, in seconds.
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
