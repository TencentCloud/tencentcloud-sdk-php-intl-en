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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getTagKey() 获取Tag key.
 * @method void setTagKey(string $TagKey) 设置Tag key.
 * @method string getTagValue() 获取Tag value.
 * @method void setTagValue(string $TagValue) 设置Tag value.
 * @method string getResourceId() 获取Resource ID.
 * @method void setResourceId(string $ResourceId) 设置Resource ID.
 * @method string getTagKeyMd5() 获取Tag key MD5 value.
 * @method void setTagKeyMd5(string $TagKeyMd5) 设置Tag key MD5 value.
 * @method string getTagValueMd5() 获取Tag value MD5 value.
 * @method void setTagValueMd5(string $TagValueMd5) 设置Tag value MD5 value.
 */

/**
 *Tag key-value pair and resource ID.
 */
class TagResource extends AbstractModel
{
    /**
     * @var string Tag key.
     */
    public $TagKey;

    /**
     * @var string Tag value.
     */
    public $TagValue;

    /**
     * @var string Resource ID.
     */
    public $ResourceId;

    /**
     * @var string Tag key MD5 value.
     */
    public $TagKeyMd5;

    /**
     * @var string Tag value MD5 value.
     */
    public $TagValueMd5;
    /**
     * @param string $TagKey Tag key.
     * @param string $TagValue Tag value.
     * @param string $ResourceId Resource ID.
     * @param string $TagKeyMd5 Tag key MD5 value.
     * @param string $TagValueMd5 Tag value MD5 value.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("TagKeyMd5",$param) and $param["TagKeyMd5"] !== null) {
            $this->TagKeyMd5 = $param["TagKeyMd5"];
        }

        if (array_key_exists("TagValueMd5",$param) and $param["TagValueMd5"] !== null) {
            $this->TagValueMd5 = $param["TagValueMd5"];
        }
    }
}
