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
 * AI sample management, keyword input.
 *
 * @method string getKeyword() Obtain <p>Keyword. Length limit: 20 characters.</p>
 * @method void setKeyword(string $Keyword) Set <p>Keyword. Length limit: 20 characters.</p>
 * @method array getTags() Obtain <p>Keyword tag</p><li>Array length limit: 20 tags;</li><li>Single tag length limit: 128 characters.</li>
 * @method void setTags(array $Tags) Set <p>Keyword tag</p><li>Array length limit: 20 tags;</li><li>Single tag length limit: 128 characters.</li>
 */
class AiSampleWordInfo extends AbstractModel
{
    /**
     * @var string <p>Keyword. Length limit: 20 characters.</p>
     */
    public $Keyword;

    /**
     * @var array <p>Keyword tag</p><li>Array length limit: 20 tags;</li><li>Single tag length limit: 128 characters.</li>
     */
    public $Tags;

    /**
     * @param string $Keyword <p>Keyword. Length limit: 20 characters.</p>
     * @param array $Tags <p>Keyword tag</p><li>Array length limit: 20 tags;</li><li>Single tag length limit: 128 characters.</li>
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
        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
