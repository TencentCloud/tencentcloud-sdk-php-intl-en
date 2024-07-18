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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Console Tag, for documentation please refer to: https://www.tencentcloud.com/document/product/651.
 *
 * @method string getTagKey() Obtain Tag key, for restrictions please refer to the tag documentation: https://www.tencentcloud.com/document/product/651/13354.
 * @method void setTagKey(string $TagKey) Set Tag key, for restrictions please refer to the tag documentation: https://www.tencentcloud.com/document/product/651/13354.
 * @method string getTagValue() Obtain Tag value, for restrictions please refer to the tag documentation: https://www.tencentcloud.com/document/product/651/13354.
 * @method void setTagValue(string $TagValue) Set Tag value, for restrictions please refer to the tag documentation: https://www.tencentcloud.com/document/product/651/13354.
 * @method string getCategory() Obtain Tag type, optional; for documentation please refer to: https://www.tencentcloud.com/document/product/651/33023#tag.
 * @method void setCategory(string $Category) Set Tag type, optional; for documentation please refer to: https://www.tencentcloud.com/document/product/651/33023#tag.
 */
class Tag extends AbstractModel
{
    /**
     * @var string Tag key, for restrictions please refer to the tag documentation: https://www.tencentcloud.com/document/product/651/13354.
     */
    public $TagKey;

    /**
     * @var string Tag value, for restrictions please refer to the tag documentation: https://www.tencentcloud.com/document/product/651/13354.
     */
    public $TagValue;

    /**
     * @var string Tag type, optional; for documentation please refer to: https://www.tencentcloud.com/document/product/651/33023#tag.
     */
    public $Category;

    /**
     * @param string $TagKey Tag key, for restrictions please refer to the tag documentation: https://www.tencentcloud.com/document/product/651/13354.
     * @param string $TagValue Tag value, for restrictions please refer to the tag documentation: https://www.tencentcloud.com/document/product/651/13354.
     * @param string $Category Tag type, optional; for documentation please refer to: https://www.tencentcloud.com/document/product/651/33023#tag.
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

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }
    }
}
