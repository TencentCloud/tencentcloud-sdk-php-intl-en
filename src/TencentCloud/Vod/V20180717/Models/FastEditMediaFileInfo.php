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
 * VOD  fast media editing information
 *
 * @method string getFileId() Obtain Media ID.
 * @method void setFileId(string $FileId) Set Media ID.
 * @method string getAudioVideoType() Obtain Audio and video type for operation. Valid values:
<li>Transcode: transcoding output;</li>
<li>Original: original audio/video.</li>
Note: The audio and video to operate must be in HLS format.
 * @method void setAudioVideoType(string $AudioVideoType) Set Audio and video type for operation. Valid values:
<li>Transcode: transcoding output;</li>
<li>Original: original audio/video.</li>
Note: The audio and video to operate must be in HLS format.
 * @method integer getTranscodeDefinition() Obtain Valid when AudioVideoType is Transcode. Represents the transcoding template ID for media operation.
 * @method void setTranscodeDefinition(integer $TranscodeDefinition) Set Valid when AudioVideoType is Transcode. Represents the transcoding template ID for media operation.
 * @method float getStartTimeOffset() Obtain Start time offset of media editing, in seconds.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of media editing, in seconds.
 * @method float getEndTimeOffset() Obtain End time offset of media editing, in seconds.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of media editing, in seconds.
 */
class FastEditMediaFileInfo extends AbstractModel
{
    /**
     * @var string Media ID.
     */
    public $FileId;

    /**
     * @var string Audio and video type for operation. Valid values:
<li>Transcode: transcoding output;</li>
<li>Original: original audio/video.</li>
Note: The audio and video to operate must be in HLS format.
     */
    public $AudioVideoType;

    /**
     * @var integer Valid when AudioVideoType is Transcode. Represents the transcoding template ID for media operation.
     */
    public $TranscodeDefinition;

    /**
     * @var float Start time offset of media editing, in seconds.
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of media editing, in seconds.
     */
    public $EndTimeOffset;

    /**
     * @param string $FileId Media ID.
     * @param string $AudioVideoType Audio and video type for operation. Valid values:
<li>Transcode: transcoding output;</li>
<li>Original: original audio/video.</li>
Note: The audio and video to operate must be in HLS format.
     * @param integer $TranscodeDefinition Valid when AudioVideoType is Transcode. Represents the transcoding template ID for media operation.
     * @param float $StartTimeOffset Start time offset of media editing, in seconds.
     * @param float $EndTimeOffset End time offset of media editing, in seconds.
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
