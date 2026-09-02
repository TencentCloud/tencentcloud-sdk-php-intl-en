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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Security center tag
 *
 * @method string getTagColor() Obtain <p>Tag color</p>
 * @method void setTagColor(string $TagColor) Set <p>Tag color</p>
 * @method integer getTagID() Obtain <p>Tag ID</p>
 * @method void setTagID(integer $TagID) Set <p>Tag ID</p>
 * @method string getTagKey() Obtain <p>Tag key (returned in Chinese or English according to the language environment)</p>
 * @method void setTagKey(string $TagKey) Set <p>Tag key (returned in Chinese or English according to the language environment)</p>
 * @method string getTagValue() Obtain <p>Tag value (returned in Chinese or English based on the language environment).</p>
 * @method void setTagValue(string $TagValue) Set <p>Tag value (returned in Chinese or English based on the language environment).</p>
 */
class CSIPTag extends AbstractModel
{
    /**
     * @var string <p>Tag color</p>
     */
    public $TagColor;

    /**
     * @var integer <p>Tag ID</p>
     */
    public $TagID;

    /**
     * @var string <p>Tag key (returned in Chinese or English according to the language environment)</p>
     */
    public $TagKey;

    /**
     * @var string <p>Tag value (returned in Chinese or English based on the language environment).</p>
     */
    public $TagValue;

    /**
     * @param string $TagColor <p>Tag color</p>
     * @param integer $TagID <p>Tag ID</p>
     * @param string $TagKey <p>Tag key (returned in Chinese or English according to the language environment)</p>
     * @param string $TagValue <p>Tag value (returned in Chinese or English based on the language environment).</p>
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
        if (array_key_exists("TagColor",$param) and $param["TagColor"] !== null) {
            $this->TagColor = $param["TagColor"];
        }

        if (array_key_exists("TagID",$param) and $param["TagID"] !== null) {
            $this->TagID = $param["TagID"];
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }
    }
}
