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
 * Subtitle information input parameter.
 *
 * @method string getName() Obtain Subtitle name. The length cannot exceed 64 characters.
 * @method void setName(string $Name) Set Subtitle name. The length cannot exceed 64 characters.
 * @method string getLanguage() Obtain Subtitle language. Common values are as follows:
<li>zh: Chinese;</li>
<li>en: English;</li>
<li>ja: Japanese;</li>
<li>ko: Korean;</li>
<li>vi: Vietnamese;</li>
<li>ms: Malay;</li>
<li>th: Thai;</li>
<li>pt: Portuguese;</li>
<li>tr: Turkish;</li>
<li>ar: Arabic;</li>
<li>es: Spanish;</li>
<li>hi: Hindi;</li>
<li>fr: French.</li>
For other values, see [RFC5646](https://tools.ietf.org/html/rfc5646).
 * @method void setLanguage(string $Language) Set Subtitle language. Common values are as follows:
<li>zh: Chinese;</li>
<li>en: English;</li>
<li>ja: Japanese;</li>
<li>ko: Korean;</li>
<li>vi: Vietnamese;</li>
<li>ms: Malay;</li>
<li>th: Thai;</li>
<li>pt: Portuguese;</li>
<li>tr: Turkish;</li>
<li>ar: Arabic;</li>
<li>es: Spanish;</li>
<li>hi: Hindi;</li>
<li>fr: French.</li>
For other values, see [RFC5646](https://tools.ietf.org/html/rfc5646).
 * @method string getFormat() Obtain Subtitle format. Valid values:
<li>vtt</li>
 * @method void setFormat(string $Format) Set Subtitle format. Valid values:
<li>vtt</li>
 * @method string getContent() Obtain Caption content as an encoded string after [Base64](https://tools.ietf.org/html/rfc4648) encoding.
 * @method void setContent(string $Content) Set Caption content as an encoded string after [Base64](https://tools.ietf.org/html/rfc4648) encoding.
 * @method string getId() Obtain Unique identifier of the subtitle. Length cannot exceed 16 characters. It can contain upper- and lower-case letters, digits, underscores (_), or hyphens (-). It cannot duplicate the unique identifier of an existing subtitle in the media file.
 * @method void setId(string $Id) Set Unique identifier of the subtitle. Length cannot exceed 16 characters. It can contain upper- and lower-case letters, digits, underscores (_), or hyphens (-). It cannot duplicate the unique identifier of an existing subtitle in the media file.
 */
class MediaSubtitleInput extends AbstractModel
{
    /**
     * @var string Subtitle name. The length cannot exceed 64 characters.
     */
    public $Name;

    /**
     * @var string Subtitle language. Common values are as follows:
<li>zh: Chinese;</li>
<li>en: English;</li>
<li>ja: Japanese;</li>
<li>ko: Korean;</li>
<li>vi: Vietnamese;</li>
<li>ms: Malay;</li>
<li>th: Thai;</li>
<li>pt: Portuguese;</li>
<li>tr: Turkish;</li>
<li>ar: Arabic;</li>
<li>es: Spanish;</li>
<li>hi: Hindi;</li>
<li>fr: French.</li>
For other values, see [RFC5646](https://tools.ietf.org/html/rfc5646).
     */
    public $Language;

    /**
     * @var string Subtitle format. Valid values:
<li>vtt</li>
     */
    public $Format;

    /**
     * @var string Caption content as an encoded string after [Base64](https://tools.ietf.org/html/rfc4648) encoding.
     */
    public $Content;

    /**
     * @var string Unique identifier of the subtitle. Length cannot exceed 16 characters. It can contain upper- and lower-case letters, digits, underscores (_), or hyphens (-). It cannot duplicate the unique identifier of an existing subtitle in the media file.
     */
    public $Id;

    /**
     * @param string $Name Subtitle name. The length cannot exceed 64 characters.
     * @param string $Language Subtitle language. Common values are as follows:
<li>zh: Chinese;</li>
<li>en: English;</li>
<li>ja: Japanese;</li>
<li>ko: Korean;</li>
<li>vi: Vietnamese;</li>
<li>ms: Malay;</li>
<li>th: Thai;</li>
<li>pt: Portuguese;</li>
<li>tr: Turkish;</li>
<li>ar: Arabic;</li>
<li>es: Spanish;</li>
<li>hi: Hindi;</li>
<li>fr: French.</li>
For other values, see [RFC5646](https://tools.ietf.org/html/rfc5646).
     * @param string $Format Subtitle format. Valid values:
<li>vtt</li>
     * @param string $Content Caption content as an encoded string after [Base64](https://tools.ietf.org/html/rfc4648) encoding.
     * @param string $Id Unique identifier of the subtitle. Length cannot exceed 16 characters. It can contain upper- and lower-case letters, digits, underscores (_), or hyphens (-). It cannot duplicate the unique identifier of an existing subtitle in the media file.
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
