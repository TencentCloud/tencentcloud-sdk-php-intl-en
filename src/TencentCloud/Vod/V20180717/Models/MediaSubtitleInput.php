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
 * Input parameters of subtile information
 *
 * @method string getName() Obtain Subtitle name. Length limit: 64 characters
 * @method void setName(string $Name) Set Subtitle name. Length limit: 64 characters
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
 * @method string getContent() Obtain Subtitle content, which is [Base64-encoded](https://tools.ietf.org/html/rfc4648) strings
 * @method void setContent(string $Content) Set Subtitle content, which is [Base64-encoded](https://tools.ietf.org/html/rfc4648) strings
 * @method string getId() Obtain The subtitle ID. It can be up to 16 characters long, can contain letters, numbers, underscores (_), and hyphens (-), and cannot be identical to an existing subtitle ID.
 * @method void setId(string $Id) Set The subtitle ID. It can be up to 16 characters long, can contain letters, numbers, underscores (_), and hyphens (-), and cannot be identical to an existing subtitle ID.
 */
class MediaSubtitleInput extends AbstractModel
{
    /**
     * @var string Subtitle name. Length limit: 64 characters
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
     * @var string Subtitle content, which is [Base64-encoded](https://tools.ietf.org/html/rfc4648) strings
     */
    public $Content;

    /**
     * @var string The subtitle ID. It can be up to 16 characters long, can contain letters, numbers, underscores (_), and hyphens (-), and cannot be identical to an existing subtitle ID.
     */
    public $Id;

    /**
     * @param string $Name Subtitle name. Length limit: 64 characters
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
     * @param string $Content Subtitle content, which is [Base64-encoded](https://tools.ietf.org/html/rfc4648) strings
     * @param string $Id The subtitle ID. It can be up to 16 characters long, can contain letters, numbers, underscores (_), and hyphens (-), and cannot be identical to an existing subtitle ID.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
