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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Type of the tag key/value
 *
 * @method string getTagKey() Obtain Value of the tag key
 * @method void setTagKey(string $TagKey) Set Value of the tag key
 * @method string getTagValue() Obtain Value of the tag value
 * @method void setTagValue(string $TagValue) Set Value of the tag value
 */
class Tag extends AbstractModel
{
    /**
     * @var string Value of the tag key
     */
    public $TagKey;

    /**
     * @var string Value of the tag value
     */
    public $TagValue;

    /**
     * @param string $TagKey Value of the tag key
     * @param string $TagValue Value of the tag value
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
        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }
    }
}
