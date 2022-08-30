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
 * The subtitle information.
 *
 * @method string getFormat() Obtain The format of the subtitle files. Valid values:
<li>vtt</li>
<li>srt</li>
 * @method void setFormat(string $Format) Set The format of the subtitle files. Valid values:
<li>vtt</li>
<li>srt</li>
 * @method string getUrl() Obtain The URL of a subtitle file.
 * @method void setUrl(string $Url) Set The URL of a subtitle file.
 */
class AiRecognitionTaskAsrFullTextResultOutputSubtitleItem extends AbstractModel
{
    /**
     * @var string The format of the subtitle files. Valid values:
<li>vtt</li>
<li>srt</li>
     */
    public $Format;

    /**
     * @var string The URL of a subtitle file.
     */
    public $Url;

    /**
     * @param string $Format The format of the subtitle files. Valid values:
<li>vtt</li>
<li>srt</li>
     * @param string $Url The URL of a subtitle file.
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
        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
