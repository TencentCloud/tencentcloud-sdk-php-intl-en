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
<li>`cn`: Chinese</li>
<li>`ja`: Japanese</li>
<li>`en-US`: English</li>
For other values, see [RFC 5646](https://tools.ietf.org/html/rfc5646).
 * @method void setLanguage(string $Language) Set Subtitle language. Common values:
<li>`cn`: Chinese</li>
<li>`ja`: Japanese</li>
<li>`en-US`: English</li>
For other values, see [RFC 5646](https://tools.ietf.org/html/rfc5646).
 * @method string getFormat() Obtain Subtitle format. Valid value:
<li>vtt</li>
 * @method void setFormat(string $Format) Set Subtitle format. Valid value:
<li>vtt</li>
 * @method string getUrl() Obtain Subtitle URL
 * @method void setUrl(string $Url) Set Subtitle URL
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
<li>`cn`: Chinese</li>
<li>`ja`: Japanese</li>
<li>`en-US`: English</li>
For other values, see [RFC 5646](https://tools.ietf.org/html/rfc5646).
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
     * @param string $Id Unique subtitle ID
     * @param string $Name Subtitle name
     * @param string $Language Subtitle language. Common values:
<li>`cn`: Chinese</li>
<li>`ja`: Japanese</li>
<li>`en-US`: English</li>
For other values, see [RFC 5646](https://tools.ietf.org/html/rfc5646).
     * @param string $Format Subtitle format. Valid value:
<li>vtt</li>
     * @param string $Url Subtitle URL
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
