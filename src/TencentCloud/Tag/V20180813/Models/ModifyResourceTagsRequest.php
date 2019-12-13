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
 * @method string getResource() 获取Resource description in six-piece format.
 * @method void setResource(string $Resource) 设置Resource description in six-piece format.
 * @method array getReplaceTags() 获取The tags to be added or modified. If the resource described by `Resource` is not associated with the input tag keys, an association will be added. If the tag keys are already associated, the values corresponding to the associated tag keys will be modified to the input values. This API must contain either `ReplaceTags` or `DeleteTag`. And these two parameters cannot include the same tag keys.
 * @method void setReplaceTags(array $ReplaceTags) 设置The tags to be added or modified. If the resource described by `Resource` is not associated with the input tag keys, an association will be added. If the tag keys are already associated, the values corresponding to the associated tag keys will be modified to the input values. This API must contain either `ReplaceTags` or `DeleteTag`. And these two parameters cannot include the same tag keys.
 * @method array getDeleteTags() 获取The tags to be unassociated. This API must contain either `ReplaceTags` or `DeleteTag`. And these two parameters cannot include the same tag keys.
 * @method void setDeleteTags(array $DeleteTags) 设置The tags to be unassociated. This API must contain either `ReplaceTags` or `DeleteTag`. And these two parameters cannot include the same tag keys.
 */

/**
 *ModifyResourceTags request structure.
 */
class ModifyResourceTagsRequest extends AbstractModel
{
    /**
     * @var string Resource description in six-piece format.
     */
    public $Resource;

    /**
     * @var array The tags to be added or modified. If the resource described by `Resource` is not associated with the input tag keys, an association will be added. If the tag keys are already associated, the values corresponding to the associated tag keys will be modified to the input values. This API must contain either `ReplaceTags` or `DeleteTag`. And these two parameters cannot include the same tag keys.
     */
    public $ReplaceTags;

    /**
     * @var array The tags to be unassociated. This API must contain either `ReplaceTags` or `DeleteTag`. And these two parameters cannot include the same tag keys.
     */
    public $DeleteTags;
    /**
     * @param string $Resource Resource description in six-piece format.
     * @param array $ReplaceTags The tags to be added or modified. If the resource described by `Resource` is not associated with the input tag keys, an association will be added. If the tag keys are already associated, the values corresponding to the associated tag keys will be modified to the input values. This API must contain either `ReplaceTags` or `DeleteTag`. And these two parameters cannot include the same tag keys.
     * @param array $DeleteTags The tags to be unassociated. This API must contain either `ReplaceTags` or `DeleteTag`. And these two parameters cannot include the same tag keys.
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("ReplaceTags",$param) and $param["ReplaceTags"] !== null) {
            $this->ReplaceTags = [];
            foreach ($param["ReplaceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ReplaceTags, $obj);
            }
        }

        if (array_key_exists("DeleteTags",$param) and $param["DeleteTags"] !== null) {
            $this->DeleteTags = [];
            foreach ($param["DeleteTags"] as $key => $value){
                $obj = new TagKeyObject();
                $obj->deserialize($value);
                array_push($this->DeleteTags, $obj);
            }
        }
    }
}
