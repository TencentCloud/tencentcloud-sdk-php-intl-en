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
 * Smart subtitle task result.
 *
 * @method string getLanguage() Obtain <p>Language of the subtitle file</p>
 * @method void setLanguage(string $Language) Set <p>Language of the subtitle file</p>
 * @method string getStatus() Obtain <p>Whether the processing is successful.</p>
 * @method void setStatus(string $Status) Set <p>Whether the processing is successful.</p>
 * @method string getPath() Obtain <p>Subtitle file path</p>
 * @method void setPath(string $Path) Set <p>Subtitle file path</p>
 * @method string getSubtitleEmbedPath() Obtain <p>Subtitle suppression video path.</p>
 * @method void setSubtitleEmbedPath(string $SubtitleEmbedPath) Set <p>Subtitle suppression video path.</p>
 */
class SubtitleResult extends AbstractModel
{
    /**
     * @var string <p>Language of the subtitle file</p>
     */
    public $Language;

    /**
     * @var string <p>Whether the processing is successful.</p>
     */
    public $Status;

    /**
     * @var string <p>Subtitle file path</p>
     */
    public $Path;

    /**
     * @var string <p>Subtitle suppression video path.</p>
     */
    public $SubtitleEmbedPath;

    /**
     * @param string $Language <p>Language of the subtitle file</p>
     * @param string $Status <p>Whether the processing is successful.</p>
     * @param string $Path <p>Subtitle file path</p>
     * @param string $SubtitleEmbedPath <p>Subtitle suppression video path.</p>
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
        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("SubtitleEmbedPath",$param) and $param["SubtitleEmbedPath"] !== null) {
            $this->SubtitleEmbedPath = $param["SubtitleEmbedPath"];
        }
    }
}
