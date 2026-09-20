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
 * AI sample management, tag operations.
 *
 * @method string getType() Obtain <p>Operation type. Available values: add, delete, reset.</p>
 * @method void setType(string $Type) Set <p>Operation type. Available values: add, delete, reset.</p>
 * @method array getTags() Obtain <p>Tag. Length limit: 128 characters.</p>
 * @method void setTags(array $Tags) Set <p>Tag. Length limit: 128 characters.</p>
 */
class AiSampleTagOperation extends AbstractModel
{
    /**
     * @var string <p>Operation type. Available values: add, delete, reset.</p>
     */
    public $Type;

    /**
     * @var array <p>Tag. Length limit: 128 characters.</p>
     */
    public $Tags;

    /**
     * @param string $Type <p>Operation type. Available values: add, delete, reset.</p>
     * @param array $Tags <p>Tag. Length limit: 128 characters.</p>
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
