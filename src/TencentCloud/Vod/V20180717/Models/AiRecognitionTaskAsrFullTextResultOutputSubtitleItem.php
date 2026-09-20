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
 * Subtitle information.
 *
 * @method string getId() Obtain Media asset subtitle ID, used for media asset subtitle management. Valid only when Format is vtt.
<font color=red>Note:</font> This field is invalid for tasks returned earlier than 2024-11-01T10:00:00Z.
 * @method void setId(string $Id) Set Media asset subtitle ID, used for media asset subtitle management. Valid only when Format is vtt.
<font color=red>Note:</font> This field is invalid for tasks returned earlier than 2024-11-01T10:00:00Z.
 * @method string getName() Obtain Media asset subtitle name for player display. Valid only when Format is vtt.
<font color=red>Note:</font> This field is invalid for tasks returned earlier than 2024-11-01T10:00:00Z.
 * @method void setName(string $Name) Set Media asset subtitle name for player display. Valid only when Format is vtt.
<font color=red>Note:</font> This field is invalid for tasks returned earlier than 2024-11-01T10:00:00Z.
 * @method string getLanguage() Obtain Subtitle language.
 * @method void setLanguage(string $Language) Set Subtitle language.
 * @method string getFormat() Obtain Subtitle file format. Valid values:
<li>vtt: WebVTT subtitle file;</li>
<li>srt: SRT Subtitle File.</li>
 * @method void setFormat(string $Format) Set Subtitle file format. Valid values:
<li>vtt: WebVTT subtitle file;</li>
<li>srt: SRT Subtitle File.</li>
 * @method string getUrl() Obtain Subtitle file Url.
 * @method void setUrl(string $Url) Set Subtitle file Url.
 */
class AiRecognitionTaskAsrFullTextResultOutputSubtitleItem extends AbstractModel
{
    /**
     * @var string Media asset subtitle ID, used for media asset subtitle management. Valid only when Format is vtt.
<font color=red>Note:</font> This field is invalid for tasks returned earlier than 2024-11-01T10:00:00Z.
     */
    public $Id;

    /**
     * @var string Media asset subtitle name for player display. Valid only when Format is vtt.
<font color=red>Note:</font> This field is invalid for tasks returned earlier than 2024-11-01T10:00:00Z.
     */
    public $Name;

    /**
     * @var string Subtitle language.
     */
    public $Language;

    /**
     * @var string Subtitle file format. Valid values:
<li>vtt: WebVTT subtitle file;</li>
<li>srt: SRT Subtitle File.</li>
     */
    public $Format;

    /**
     * @var string Subtitle file Url.
     */
    public $Url;

    /**
     * @param string $Id Media asset subtitle ID, used for media asset subtitle management. Valid only when Format is vtt.
<font color=red>Note:</font> This field is invalid for tasks returned earlier than 2024-11-01T10:00:00Z.
     * @param string $Name Media asset subtitle name for player display. Valid only when Format is vtt.
<font color=red>Note:</font> This field is invalid for tasks returned earlier than 2024-11-01T10:00:00Z.
     * @param string $Language Subtitle language.
     * @param string $Format Subtitle file format. Valid values:
<li>vtt: WebVTT subtitle file;</li>
<li>srt: SRT Subtitle File.</li>
     * @param string $Url Subtitle file Url.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
