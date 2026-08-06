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
namespace TencentCloud\Tmt\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImageTranslateLLM request structure.
 *
 * @method string getData() Obtain <p>Base64 string of the image data, no more than 9M after Base64 encoding. A resolution of 600*800 or higher is recommended. PNG, JPG, and JPEG formats are supported.</p>
 * @method void setData(string $Data) Set <p>Base64 string of the image data, no more than 9M after Base64 encoding. A resolution of 600*800 or higher is recommended. PNG, JPG, and JPEG formats are supported.</p>
 * @method string getTarget() Obtain <p>Target language, supported languages:</p><ul><li>Chinese: zh</li><li>Traditional (Taiwan): zh-TW</li><li>Traditional (Hong Kong (China)): zh-HK</li><li>English: en</li><li>Japanese: ja</li><li>Korean: ko</li><li>Thai: th</li><li>Vietnamese: vi</li><li>Russian: ru</li><li>German: de</li><li>French: fr</li><li>Arabic: ar</li><li>Spanish: es</li><li>Italian: it</li><li>Indonesian: id</li><li>Malay language: ms</li><li>Portuguese: pt</li><li>Turkish: tr<br>-</li></ul>
 * @method void setTarget(string $Target) Set <p>Target language, supported languages:</p><ul><li>Chinese: zh</li><li>Traditional (Taiwan): zh-TW</li><li>Traditional (Hong Kong (China)): zh-HK</li><li>English: en</li><li>Japanese: ja</li><li>Korean: ko</li><li>Thai: th</li><li>Vietnamese: vi</li><li>Russian: ru</li><li>German: de</li><li>French: fr</li><li>Arabic: ar</li><li>Spanish: es</li><li>Italian: it</li><li>Indonesian: id</li><li>Malay language: ms</li><li>Portuguese: pt</li><li>Turkish: tr<br>-</li></ul>
 * @method string getUrl() Obtain <p>Enter image Url. When using a Url, the Data parameter requires the input of "". Image restrictions: less than 10MB, resolution recommendation 600*800 or higher, format support jpg, jpeg, png.</p>
 * @method void setUrl(string $Url) Set <p>Enter image Url. When using a Url, the Data parameter requires the input of "". Image restrictions: less than 10MB, resolution recommendation 600*800 or higher, format support jpg, jpeg, png.</p>
 * @method integer getMode() Obtain <p>Invocation method.</p><p>Enumeration value:</p><ul><li>0: End-to-end image translation large model pro version</li><li>1: End-to-end image translation large model lite version</li></ul><p>Default value: 0</p>
 * @method void setMode(integer $Mode) Set <p>Invocation method.</p><p>Enumeration value:</p><ul><li>0: End-to-end image translation large model pro version</li><li>1: End-to-end image translation large model lite version</li></ul><p>Default value: 0</p>
 */
class ImageTranslateLLMRequest extends AbstractModel
{
    /**
     * @var string <p>Base64 string of the image data, no more than 9M after Base64 encoding. A resolution of 600*800 or higher is recommended. PNG, JPG, and JPEG formats are supported.</p>
     */
    public $Data;

    /**
     * @var string <p>Target language, supported languages:</p><ul><li>Chinese: zh</li><li>Traditional (Taiwan): zh-TW</li><li>Traditional (Hong Kong (China)): zh-HK</li><li>English: en</li><li>Japanese: ja</li><li>Korean: ko</li><li>Thai: th</li><li>Vietnamese: vi</li><li>Russian: ru</li><li>German: de</li><li>French: fr</li><li>Arabic: ar</li><li>Spanish: es</li><li>Italian: it</li><li>Indonesian: id</li><li>Malay language: ms</li><li>Portuguese: pt</li><li>Turkish: tr<br>-</li></ul>
     */
    public $Target;

    /**
     * @var string <p>Enter image Url. When using a Url, the Data parameter requires the input of "". Image restrictions: less than 10MB, resolution recommendation 600*800 or higher, format support jpg, jpeg, png.</p>
     */
    public $Url;

    /**
     * @var integer <p>Invocation method.</p><p>Enumeration value:</p><ul><li>0: End-to-end image translation large model pro version</li><li>1: End-to-end image translation large model lite version</li></ul><p>Default value: 0</p>
     */
    public $Mode;

    /**
     * @param string $Data <p>Base64 string of the image data, no more than 9M after Base64 encoding. A resolution of 600*800 or higher is recommended. PNG, JPG, and JPEG formats are supported.</p>
     * @param string $Target <p>Target language, supported languages:</p><ul><li>Chinese: zh</li><li>Traditional (Taiwan): zh-TW</li><li>Traditional (Hong Kong (China)): zh-HK</li><li>English: en</li><li>Japanese: ja</li><li>Korean: ko</li><li>Thai: th</li><li>Vietnamese: vi</li><li>Russian: ru</li><li>German: de</li><li>French: fr</li><li>Arabic: ar</li><li>Spanish: es</li><li>Italian: it</li><li>Indonesian: id</li><li>Malay language: ms</li><li>Portuguese: pt</li><li>Turkish: tr<br>-</li></ul>
     * @param string $Url <p>Enter image Url. When using a Url, the Data parameter requires the input of "". Image restrictions: less than 10MB, resolution recommendation 600*800 or higher, format support jpg, jpeg, png.</p>
     * @param integer $Mode <p>Invocation method.</p><p>Enumeration value:</p><ul><li>0: End-to-end image translation large model pro version</li><li>1: End-to-end image translation large model lite version</li></ul><p>Default value: 0</p>
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }
    }
}
