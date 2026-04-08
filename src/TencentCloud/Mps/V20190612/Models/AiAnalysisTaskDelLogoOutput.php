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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Intelligent removal result.
 *
 * @method string getPath() Obtain <p>Path of a file after removal.</p>
 * @method void setPath(string $Path) Set <p>Path of a file after removal.</p>
 * @method TaskOutputStorage getOutputStorage() Obtain <p>Storage location of a file after removal.</p>
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set <p>Storage location of a file after removal.</p>
 * @method string getOriginSubtitlePath() Obtain <p>Path of subtitle file extracted from video.</p>
 * @method void setOriginSubtitlePath(string $OriginSubtitlePath) Set <p>Path of subtitle file extracted from video.</p>
 * @method string getTranslateSubtitlePath() Obtain <p>Path of a subtitle translation file extracted from a video.</p>
 * @method void setTranslateSubtitlePath(string $TranslateSubtitlePath) Set <p>Path of a subtitle translation file extracted from a video.</p>
 * @method SubtitlePosition getSubtitlePos() Obtain <p>Subtitle position after removal. <strong>Note</strong>: only applicable to subtitle extraction when return of subtitle position is enabled.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubtitlePos(SubtitlePosition $SubtitlePos) Set <p>Subtitle position after removal. <strong>Note</strong>: only applicable to subtitle extraction when return of subtitle position is enabled.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVoiceClonedVideo() Obtain <p>File URL of the video after voice type cloning</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVoiceClonedVideo(string $VoiceClonedVideo) Set <p>File URL of the video after voice type cloning</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVoiceClonedMarkFile() Obtain <p>File address of the voice type clone annotation</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVoiceClonedMarkFile(string $VoiceClonedMarkFile) Set <p>File address of the voice type clone annotation</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AiAnalysisTaskDelLogoOutput extends AbstractModel
{
    /**
     * @var string <p>Path of a file after removal.</p>
     */
    public $Path;

    /**
     * @var TaskOutputStorage <p>Storage location of a file after removal.</p>
     */
    public $OutputStorage;

    /**
     * @var string <p>Path of subtitle file extracted from video.</p>
     */
    public $OriginSubtitlePath;

    /**
     * @var string <p>Path of a subtitle translation file extracted from a video.</p>
     */
    public $TranslateSubtitlePath;

    /**
     * @var SubtitlePosition <p>Subtitle position after removal. <strong>Note</strong>: only applicable to subtitle extraction when return of subtitle position is enabled.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubtitlePos;

    /**
     * @var string <p>File URL of the video after voice type cloning</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VoiceClonedVideo;

    /**
     * @var string <p>File address of the voice type clone annotation</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VoiceClonedMarkFile;

    /**
     * @param string $Path <p>Path of a file after removal.</p>
     * @param TaskOutputStorage $OutputStorage <p>Storage location of a file after removal.</p>
     * @param string $OriginSubtitlePath <p>Path of subtitle file extracted from video.</p>
     * @param string $TranslateSubtitlePath <p>Path of a subtitle translation file extracted from a video.</p>
     * @param SubtitlePosition $SubtitlePos <p>Subtitle position after removal. <strong>Note</strong>: only applicable to subtitle extraction when return of subtitle position is enabled.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VoiceClonedVideo <p>File URL of the video after voice type cloning</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VoiceClonedMarkFile <p>File address of the voice type clone annotation</p>
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OriginSubtitlePath",$param) and $param["OriginSubtitlePath"] !== null) {
            $this->OriginSubtitlePath = $param["OriginSubtitlePath"];
        }

        if (array_key_exists("TranslateSubtitlePath",$param) and $param["TranslateSubtitlePath"] !== null) {
            $this->TranslateSubtitlePath = $param["TranslateSubtitlePath"];
        }

        if (array_key_exists("SubtitlePos",$param) and $param["SubtitlePos"] !== null) {
            $this->SubtitlePos = new SubtitlePosition();
            $this->SubtitlePos->deserialize($param["SubtitlePos"]);
        }

        if (array_key_exists("VoiceClonedVideo",$param) and $param["VoiceClonedVideo"] !== null) {
            $this->VoiceClonedVideo = $param["VoiceClonedVideo"];
        }

        if (array_key_exists("VoiceClonedMarkFile",$param) and $param["VoiceClonedMarkFile"] !== null) {
            $this->VoiceClonedMarkFile = $param["VoiceClonedMarkFile"];
        }
    }
}
