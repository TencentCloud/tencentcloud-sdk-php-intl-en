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
 * CSC tag
 *
 * @method integer getTagID() Obtain <p>Tag ID</p>
 * @method void setTagID(integer $TagID) Set <p>Tag ID</p>
 * @method string getTagKey() Obtain <p>Tag key</p>
 * @method void setTagKey(string $TagKey) Set <p>Tag key</p>
 * @method string getTagValue() Obtain <p>Tag value.</p>
 * @method void setTagValue(string $TagValue) Set <p>Tag value.</p>
 * @method string getTagColor() Obtain <p>Tag color</p>
 * @method void setTagColor(string $TagColor) Set <p>Tag color</p>
 */
class CustomTag extends AbstractModel
{
    /**
     * @var integer <p>Tag ID</p>
     */
    public $TagID;

    /**
     * @var string <p>Tag key</p>
     */
    public $TagKey;

    /**
     * @var string <p>Tag value.</p>
     */
    public $TagValue;

    /**
     * @var string <p>Tag color</p>
     */
    public $TagColor;

    /**
     * @param integer $TagID <p>Tag ID</p>
     * @param string $TagKey <p>Tag key</p>
     * @param string $TagValue <p>Tag value.</p>
     * @param string $TagColor <p>Tag color</p>
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
        if (array_key_exists("TagID",$param) and $param["TagID"] !== null) {
            $this->TagID = $param["TagID"];
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }

        if (array_key_exists("TagColor",$param) and $param["TagColor"] !== null) {
            $this->TagColor = $param["TagColor"];
        }
    }
}
