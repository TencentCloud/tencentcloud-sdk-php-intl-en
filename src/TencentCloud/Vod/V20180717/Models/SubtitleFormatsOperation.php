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
 * The modification of the subtitle format list.
 *
 * @method string getType() Obtain The modification type. Valid values:
<li>add: Add the formats specified by `Formats`.</li>
<li>delete: Delete the formats specified by `Formats`.<l/i>
<li>reset: Reset the format list to formats specified by `Formats`.</li>
 * @method void setType(string $Type) Set The modification type. Valid values:
<li>add: Add the formats specified by `Formats`.</li>
<li>delete: Delete the formats specified by `Formats`.<l/i>
<li>reset: Reset the format list to formats specified by `Formats`.</li>
 * @method array getFormats() Obtain The subtitle format list. Valid values:
<li>vtt</li>
<li>srt</li>
 * @method void setFormats(array $Formats) Set The subtitle format list. Valid values:
<li>vtt</li>
<li>srt</li>
 */
class SubtitleFormatsOperation extends AbstractModel
{
    /**
     * @var string The modification type. Valid values:
<li>add: Add the formats specified by `Formats`.</li>
<li>delete: Delete the formats specified by `Formats`.<l/i>
<li>reset: Reset the format list to formats specified by `Formats`.</li>
     */
    public $Type;

    /**
     * @var array The subtitle format list. Valid values:
<li>vtt</li>
<li>srt</li>
     */
    public $Formats;

    /**
     * @param string $Type The modification type. Valid values:
<li>add: Add the formats specified by `Formats`.</li>
<li>delete: Delete the formats specified by `Formats`.<l/i>
<li>reset: Reset the format list to formats specified by `Formats`.</li>
     * @param array $Formats The subtitle format list. Valid values:
<li>vtt</li>
<li>srt</li>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Formats",$param) and $param["Formats"] !== null) {
            $this->Formats = $param["Formats"];
        }
    }
}
