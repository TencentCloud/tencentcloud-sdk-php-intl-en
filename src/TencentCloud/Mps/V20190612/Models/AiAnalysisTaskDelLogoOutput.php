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
 * @method string getPath() Obtain Path of a file after removal.
 * @method void setPath(string $Path) Set Path of a file after removal.
 * @method TaskOutputStorage getOutputStorage() Obtain Storage location of a file after removal.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Storage location of a file after removal.
 * @method string getOriginSubtitlePath() Obtain Path of a subtitle file extracted from a video.
 * @method void setOriginSubtitlePath(string $OriginSubtitlePath) Set Path of a subtitle file extracted from a video.
 * @method string getTranslateSubtitlePath() Obtain Path of a subtitle translation file extracted from a video.
 * @method void setTranslateSubtitlePath(string $TranslateSubtitlePath) Set Path of a subtitle translation file extracted from a video.
 * @method SubtitlePosition getSubtitlePos() Obtain Position of the erased subtitle. Note: This field is only valid for subtitle extraction when the option to return subtitle positions is enabled.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSubtitlePos(SubtitlePosition $SubtitlePos) Set Position of the erased subtitle. Note: This field is only valid for subtitle extraction when the option to return subtitle positions is enabled.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class AiAnalysisTaskDelLogoOutput extends AbstractModel
{
    /**
     * @var string Path of a file after removal.
     */
    public $Path;

    /**
     * @var TaskOutputStorage Storage location of a file after removal.
     */
    public $OutputStorage;

    /**
     * @var string Path of a subtitle file extracted from a video.
     */
    public $OriginSubtitlePath;

    /**
     * @var string Path of a subtitle translation file extracted from a video.
     */
    public $TranslateSubtitlePath;

    /**
     * @var SubtitlePosition Position of the erased subtitle. Note: This field is only valid for subtitle extraction when the option to return subtitle positions is enabled.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SubtitlePos;

    /**
     * @param string $Path Path of a file after removal.
     * @param TaskOutputStorage $OutputStorage Storage location of a file after removal.
     * @param string $OriginSubtitlePath Path of a subtitle file extracted from a video.
     * @param string $TranslateSubtitlePath Path of a subtitle translation file extracted from a video.
     * @param SubtitlePosition $SubtitlePos Position of the erased subtitle. Note: This field is only valid for subtitle extraction when the option to return subtitle positions is enabled.
Note: This field may return null, indicating that no valid value can be obtained.
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
    }
}
