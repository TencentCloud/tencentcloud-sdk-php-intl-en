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
 * Subtitle information
 *
 * @method string getId() Obtain Unique subtitle ID
 * @method void setId(string $Id) Set Unique subtitle ID
 * @method string getName() Obtain Subtitle name
 * @method void setName(string $Name) Set Subtitle name
 * @method string getLanguage() Obtain Subtitle language. Common values:
<li>`zh`: Chinese</li>
<li>`en`: English</li>
<li>`ja`: Japanese</li>
<li>`ko`: Korean</li>
<li>`vi`: Vietnamese</li>
<li>`ms`: Malay</li>
<li>`th`: Thai</li>
<li>`pt`: Portuguese</li>
<li>`tr`: Turkish</li>
<li>`ar`: Arabic</li>
<li>`es`: Spanish</li>
<li>`hi`: Hindi</li>
<li>`fr`: French</li>For other valid values, see [RFC 5646](https://tools.ietf.org/html/rfc5646).
 * @method void setLanguage(string $Language) Set Subtitle language. Common values:
<li>`zh`: Chinese</li>
<li>`en`: English</li>
<li>`ja`: Japanese</li>
<li>`ko`: Korean</li>
<li>`vi`: Vietnamese</li>
<li>`ms`: Malay</li>
<li>`th`: Thai</li>
<li>`pt`: Portuguese</li>
<li>`tr`: Turkish</li>
<li>`ar`: Arabic</li>
<li>`es`: Spanish</li>
<li>`hi`: Hindi</li>
<li>`fr`: French</li>For other valid values, see [RFC 5646](https://tools.ietf.org/html/rfc5646).
 * @method string getFormat() Obtain Subtitle format. Valid value:
<li>vtt</li>
 * @method void setFormat(string $Format) Set Subtitle format. Valid value:
<li>vtt</li>
 * @method string getUrl() Obtain Subtitle URL
 * @method void setUrl(string $Url) Set Subtitle URL
 * @method string getSource() Obtain Subtitle source, values:
<li>UserUploaded: user uploaded;</li>
<li>AIRecognition: AI recognition, generated through asr full text recognition or voice translation.</li>
 * @method void setSource(string $Source) Set Subtitle source, values:
<li>UserUploaded: user uploaded;</li>
<li>AIRecognition: AI recognition, generated through asr full text recognition or voice translation.</li>
 */
class MediaSubtitleItem extends AbstractModel
{
    /**
     * @var string Unique subtitle ID
     */
    public $Id;

    /**
     * @var string Subtitle name
     */
    public $Name;

    /**
     * @var string Subtitle language. Common values:
<li>`zh`: Chinese</li>
<li>`en`: English</li>
<li>`ja`: Japanese</li>
<li>`ko`: Korean</li>
<li>`vi`: Vietnamese</li>
<li>`ms`: Malay</li>
<li>`th`: Thai</li>
<li>`pt`: Portuguese</li>
<li>`tr`: Turkish</li>
<li>`ar`: Arabic</li>
<li>`es`: Spanish</li>
<li>`hi`: Hindi</li>
<li>`fr`: French</li>For other valid values, see [RFC 5646](https://tools.ietf.org/html/rfc5646).
     */
    public $Language;

    /**
     * @var string Subtitle format. Valid value:
<li>vtt</li>
     */
    public $Format;

    /**
     * @var string Subtitle URL
     */
    public $Url;

    /**
     * @var string Subtitle source, values:
<li>UserUploaded: user uploaded;</li>
<li>AIRecognition: AI recognition, generated through asr full text recognition or voice translation.</li>
     */
    public $Source;

    /**
     * @param string $Id Unique subtitle ID
     * @param string $Name Subtitle name
     * @param string $Language Subtitle language. Common values:
<li>`zh`: Chinese</li>
<li>`en`: English</li>
<li>`ja`: Japanese</li>
<li>`ko`: Korean</li>
<li>`vi`: Vietnamese</li>
<li>`ms`: Malay</li>
<li>`th`: Thai</li>
<li>`pt`: Portuguese</li>
<li>`tr`: Turkish</li>
<li>`ar`: Arabic</li>
<li>`es`: Spanish</li>
<li>`hi`: Hindi</li>
<li>`fr`: French</li>For other valid values, see [RFC 5646](https://tools.ietf.org/html/rfc5646).
     * @param string $Format Subtitle format. Valid value:
<li>vtt</li>
     * @param string $Url Subtitle URL
     * @param string $Source Subtitle source, values:
<li>UserUploaded: user uploaded;</li>
<li>AIRecognition: AI recognition, generated through asr full text recognition or voice translation.</li>
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

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }
    }
}
