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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Browser information
 *
 * @method string getUserAgent() Obtain <p>The user agent of the browser that interacts with the website</p>
 * @method void setUserAgent(string $UserAgent) Set <p>The user agent of the browser that interacts with the website</p>
 * @method string getAcceptLanguage() Obtain <p>The language(s) that the client prefers</p><p>Parameter format: Complies with the ISO 3166 standard</p>
 * @method void setAcceptLanguage(string $AcceptLanguage) Set <p>The language(s) that the client prefers</p><p>Parameter format: Complies with the ISO 3166 standard</p>
 * @method string getContentLanguage() Obtain <p>The language(s) intended for the audience</p><p>Parameter format: Compliant with ISO 3166 standard</p>
 * @method void setContentLanguage(string $ContentLanguage) Set <p>The language(s) intended for the audience</p><p>Parameter format: Compliant with ISO 3166 standard</p>
 */
class Browser extends AbstractModel
{
    /**
     * @var string <p>The user agent of the browser that interacts with the website</p>
     */
    public $UserAgent;

    /**
     * @var string <p>The language(s) that the client prefers</p><p>Parameter format: Complies with the ISO 3166 standard</p>
     */
    public $AcceptLanguage;

    /**
     * @var string <p>The language(s) intended for the audience</p><p>Parameter format: Compliant with ISO 3166 standard</p>
     */
    public $ContentLanguage;

    /**
     * @param string $UserAgent <p>The user agent of the browser that interacts with the website</p>
     * @param string $AcceptLanguage <p>The language(s) that the client prefers</p><p>Parameter format: Complies with the ISO 3166 standard</p>
     * @param string $ContentLanguage <p>The language(s) intended for the audience</p><p>Parameter format: Compliant with ISO 3166 standard</p>
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
        if (array_key_exists("UserAgent",$param) and $param["UserAgent"] !== null) {
            $this->UserAgent = $param["UserAgent"];
        }

        if (array_key_exists("AcceptLanguage",$param) and $param["AcceptLanguage"] !== null) {
            $this->AcceptLanguage = $param["AcceptLanguage"];
        }

        if (array_key_exists("ContentLanguage",$param) and $param["ContentLanguage"] !== null) {
            $this->ContentLanguage = $param["ContentLanguage"];
        }
    }
}
