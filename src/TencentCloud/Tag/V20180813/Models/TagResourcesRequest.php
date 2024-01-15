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
 * TagResources request structure.
 *
 * @method array getResourceList() Obtain Cloud resource to be bound, represented in the standard six-segment resource format. For the correct format, see [Resource Description Method](https://intl.cloud.tencent.com/document/product/598/10606?from_cn_redirect=1).
Value range of N: 0-9.
 * @method void setResourceList(array $ResourceList) Set Cloud resource to be bound, represented in the standard six-segment resource format. For the correct format, see [Resource Description Method](https://intl.cloud.tencent.com/document/product/598/10606?from_cn_redirect=1).
Value range of N: 0-9.
 * @method array getTags() Obtain Tag key and value.
If multiple tags are specified, all such tags will be created and bound to the specified resources.
For each resource, each tag key can have only one value. If you try to add an existing tag key, the corresponding tag value will be updated to the new value.
Non-existent tags will be automatically created.
Value range of N: 0-9
 * @method void setTags(array $Tags) Set Tag key and value.
If multiple tags are specified, all such tags will be created and bound to the specified resources.
For each resource, each tag key can have only one value. If you try to add an existing tag key, the corresponding tag value will be updated to the new value.
Non-existent tags will be automatically created.
Value range of N: 0-9
 */
class TagResourcesRequest extends AbstractModel
{
    /**
     * @var array Cloud resource to be bound, represented in the standard six-segment resource format. For the correct format, see [Resource Description Method](https://intl.cloud.tencent.com/document/product/598/10606?from_cn_redirect=1).
Value range of N: 0-9.
     */
    public $ResourceList;

    /**
     * @var array Tag key and value.
If multiple tags are specified, all such tags will be created and bound to the specified resources.
For each resource, each tag key can have only one value. If you try to add an existing tag key, the corresponding tag value will be updated to the new value.
Non-existent tags will be automatically created.
Value range of N: 0-9
     */
    public $Tags;

    /**
     * @param array $ResourceList Cloud resource to be bound, represented in the standard six-segment resource format. For the correct format, see [Resource Description Method](https://intl.cloud.tencent.com/document/product/598/10606?from_cn_redirect=1).
Value range of N: 0-9.
     * @param array $Tags Tag key and value.
If multiple tags are specified, all such tags will be created and bound to the specified resources.
For each resource, each tag key can have only one value. If you try to add an existing tag key, the corresponding tag value will be updated to the new value.
Non-existent tags will be automatically created.
Value range of N: 0-9
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
        if (array_key_exists("ResourceList",$param) and $param["ResourceList"] !== null) {
            $this->ResourceList = $param["ResourceList"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
