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
 * Subtitle suppression configuration for a dubbing task
 *
 * @method integer getSubtitleEmbedId() Obtain <p>id of the suppressed subtitles.</p>
 * @method void setSubtitleEmbedId(integer $SubtitleEmbedId) Set <p>id of the suppressed subtitles.</p>
 * @method integer getUseOriginalPos() Obtain <p>Continue to use the original subtitle position.</p><p>Default value: 1</p>
 * @method void setUseOriginalPos(integer $UseOriginalPos) Set <p>Continue to use the original subtitle position.</p><p>Default value: 1</p>
 * @method integer getUseOriginalSize() Obtain <p>Continue to use the original subtitle font size.</p><p>Default value: 1</p>
 * @method void setUseOriginalSize(integer $UseOriginalSize) Set <p>Continue to use the original subtitle font size.</p><p>Default value: 1</p>
 */
class DubbingEmbedSubtitleConfig extends AbstractModel
{
    /**
     * @var integer <p>id of the suppressed subtitles.</p>
     */
    public $SubtitleEmbedId;

    /**
     * @var integer <p>Continue to use the original subtitle position.</p><p>Default value: 1</p>
     */
    public $UseOriginalPos;

    /**
     * @var integer <p>Continue to use the original subtitle font size.</p><p>Default value: 1</p>
     */
    public $UseOriginalSize;

    /**
     * @param integer $SubtitleEmbedId <p>id of the suppressed subtitles.</p>
     * @param integer $UseOriginalPos <p>Continue to use the original subtitle position.</p><p>Default value: 1</p>
     * @param integer $UseOriginalSize <p>Continue to use the original subtitle font size.</p><p>Default value: 1</p>
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
        if (array_key_exists("SubtitleEmbedId",$param) and $param["SubtitleEmbedId"] !== null) {
            $this->SubtitleEmbedId = $param["SubtitleEmbedId"];
        }

        if (array_key_exists("UseOriginalPos",$param) and $param["UseOriginalPos"] !== null) {
            $this->UseOriginalPos = $param["UseOriginalPos"];
        }

        if (array_key_exists("UseOriginalSize",$param) and $param["UseOriginalSize"] !== null) {
            $this->UseOriginalSize = $param["UseOriginalSize"];
        }
    }
}
