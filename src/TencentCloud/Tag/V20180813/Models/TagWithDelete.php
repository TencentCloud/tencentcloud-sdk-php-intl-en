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
 * A tag key-value pair and if deletion is allowed.
 *
 * @method string getTagKey() Obtain Tag key.
 * @method void setTagKey(string $TagKey) Set Tag key.
 * @method string getTagValue() Obtain Tag value.
 * @method void setTagValue(string $TagValue) Set Tag value.
 * @method integer getCanDelete() Obtain If deletion is allowed.
 * @method void setCanDelete(integer $CanDelete) Set If deletion is allowed.
 * @method string getCategory() Obtain Tag type. Valid values: Custom: custom tag; System: system tag; All: all tags. Default value: All.Note: This field may return null, indicating that no value is obtained.
 * @method void setCategory(string $Category) Set Tag type. Valid values: Custom: custom tag; System: system tag; All: all tags. Default value: All.Note: This field may return null, indicating that no value is obtained.
 */
class TagWithDelete extends AbstractModel
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
     * @var integer If deletion is allowed.
     */
    public $CanDelete;

    /**
     * @var string Tag type. Valid values: Custom: custom tag; System: system tag; All: all tags. Default value: All.Note: This field may return null, indicating that no value is obtained.
     */
    public $Category;

    /**
     * @param string $TagKey Tag key.
     * @param string $TagValue Tag value.
     * @param integer $CanDelete If deletion is allowed.
     * @param string $Category Tag type. Valid values: Custom: custom tag; System: system tag; All: all tags. Default value: All.Note: This field may return null, indicating that no value is obtained.
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

        if (array_key_exists("CanDelete",$param) and $param["CanDelete"] !== null) {
            $this->CanDelete = $param["CanDelete"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }
    }
}
