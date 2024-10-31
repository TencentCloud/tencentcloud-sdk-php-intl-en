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
 * Subtitle information.
 *
 * @method string getId() Obtain Media asset subtitle ID, used for media asset subtitle management, only valid when Format is vtt.
<font color=red>Note:</font> Tasks before 2024-11-01T10:00:00Z return this field as invalid.
 * @method void setId(string $Id) Set Media asset subtitle ID, used for media asset subtitle management, only valid when Format is vtt.
<font color=red>Note:</font> Tasks before 2024-11-01T10:00:00Z return this field as invalid.
 * @method string getName() Obtain Media asset subtitle name, used for player display, only valid when Format is vtt.
<font color=red>Note:</font> Tasks before 2024-11-01T10:00:00Z return this field as invalid.
 * @method void setName(string $Name) Set Media asset subtitle name, used for player display, only valid when Format is vtt.
<font color=red>Note:</font> Tasks before 2024-11-01T10:00:00Z return this field as invalid.
 * @method string getLanguage() Obtain Subtitle Language.
 * @method void setLanguage(string $Language) Set Subtitle Language.
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
     * @var string Media asset subtitle ID, used for media asset subtitle management, only valid when Format is vtt.
<font color=red>Note:</font> Tasks before 2024-11-01T10:00:00Z return this field as invalid.
     */
    public $Id;

    /**
     * @var string Media asset subtitle name, used for player display, only valid when Format is vtt.
<font color=red>Note:</font> Tasks before 2024-11-01T10:00:00Z return this field as invalid.
     */
    public $Name;

    /**
     * @var string Subtitle Language.
     */
    public $Language;

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
     * @param string $Id Media asset subtitle ID, used for media asset subtitle management, only valid when Format is vtt.
<font color=red>Note:</font> Tasks before 2024-11-01T10:00:00Z return this field as invalid.
     * @param string $Name Media asset subtitle name, used for player display, only valid when Format is vtt.
<font color=red>Note:</font> Tasks before 2024-11-01T10:00:00Z return this field as invalid.
     * @param string $Language Subtitle Language.
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
