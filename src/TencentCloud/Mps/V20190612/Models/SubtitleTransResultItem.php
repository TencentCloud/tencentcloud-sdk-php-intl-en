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
 * Subtitle translation output result.
 *
 * @method string getStatus() Obtain <p>Translation flag:</p><ul><li>Success</li><li>Error</li></ul>
 * @method void setStatus(string $Status) Set <p>Translation flag:</p><ul><li>Success</li><li>Error</li></ul>
 * @method string getTransSrc() Obtain <p>Source language (such as "en")</p>
 * @method void setTransSrc(string $TransSrc) Set <p>Source language (such as "en")</p>
 * @method string getTransDst() Obtain <p>Target language (such as "zh")</p>
 * @method void setTransDst(string $TransDst) Set <p>Target language (such as "zh")</p>
 * @method string getPath() Obtain <p>Subtitle file URL</p>
 * @method void setPath(string $Path) Set <p>Subtitle file URL</p>
 * @method string getSubtitleEmbedPath() Obtain <p>Subtitle translation suppression video path.</p>
 * @method void setSubtitleEmbedPath(string $SubtitleEmbedPath) Set <p>Subtitle translation suppression video path.</p>
 */
class SubtitleTransResultItem extends AbstractModel
{
    /**
     * @var string <p>Translation flag:</p><ul><li>Success</li><li>Error</li></ul>
     */
    public $Status;

    /**
     * @var string <p>Source language (such as "en")</p>
     */
    public $TransSrc;

    /**
     * @var string <p>Target language (such as "zh")</p>
     */
    public $TransDst;

    /**
     * @var string <p>Subtitle file URL</p>
     */
    public $Path;

    /**
     * @var string <p>Subtitle translation suppression video path.</p>
     */
    public $SubtitleEmbedPath;

    /**
     * @param string $Status <p>Translation flag:</p><ul><li>Success</li><li>Error</li></ul>
     * @param string $TransSrc <p>Source language (such as "en")</p>
     * @param string $TransDst <p>Target language (such as "zh")</p>
     * @param string $Path <p>Subtitle file URL</p>
     * @param string $SubtitleEmbedPath <p>Subtitle translation suppression video path.</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TransSrc",$param) and $param["TransSrc"] !== null) {
            $this->TransSrc = $param["TransSrc"];
        }

        if (array_key_exists("TransDst",$param) and $param["TransDst"] !== null) {
            $this->TransDst = $param["TransDst"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("SubtitleEmbedPath",$param) and $param["SubtitleEmbedPath"] !== null) {
            $this->SubtitleEmbedPath = $param["SubtitleEmbedPath"];
        }
    }
}
