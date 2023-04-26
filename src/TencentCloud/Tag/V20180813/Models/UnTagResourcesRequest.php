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
 * UnTagResources request structure.
 *
 * @method array getResourceList() Obtain Six-segment resource description list. Tencent Cloud uses a six-segment value to describe a resource. For more information, see [CAM](https://intl.cloud.tencent.com/document/product/598/67350?from_cn_redirect=1) > Overview > API List > Six-Segment Resource Information.
For example: ResourceList.1 = qcs::${ServiceType}:${Region}:uin/${Account}:${ResourcePrefix}/${ResourceId}.
Value range of N: 0–9
 * @method void setResourceList(array $ResourceList) Set Six-segment resource description list. Tencent Cloud uses a six-segment value to describe a resource. For more information, see [CAM](https://intl.cloud.tencent.com/document/product/598/67350?from_cn_redirect=1) > Overview > API List > Six-Segment Resource Information.
For example: ResourceList.1 = qcs::${ServiceType}:${Region}:uin/${Account}:${ResourcePrefix}/${ResourceId}.
Value range of N: 0–9
 * @method array getTagKeys() Obtain Tag key.
Value range: 0–9
 * @method void setTagKeys(array $TagKeys) Set Tag key.
Value range: 0–9
 */
class UnTagResourcesRequest extends AbstractModel
{
    /**
     * @var array Six-segment resource description list. Tencent Cloud uses a six-segment value to describe a resource. For more information, see [CAM](https://intl.cloud.tencent.com/document/product/598/67350?from_cn_redirect=1) > Overview > API List > Six-Segment Resource Information.
For example: ResourceList.1 = qcs::${ServiceType}:${Region}:uin/${Account}:${ResourcePrefix}/${ResourceId}.
Value range of N: 0–9
     */
    public $ResourceList;

    /**
     * @var array Tag key.
Value range: 0–9
     */
    public $TagKeys;

    /**
     * @param array $ResourceList Six-segment resource description list. Tencent Cloud uses a six-segment value to describe a resource. For more information, see [CAM](https://intl.cloud.tencent.com/document/product/598/67350?from_cn_redirect=1) > Overview > API List > Six-Segment Resource Information.
For example: ResourceList.1 = qcs::${ServiceType}:${Region}:uin/${Account}:${ResourcePrefix}/${ResourceId}.
Value range of N: 0–9
     * @param array $TagKeys Tag key.
Value range: 0–9
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

        if (array_key_exists("TagKeys",$param) and $param["TagKeys"] !== null) {
            $this->TagKeys = $param["TagKeys"];
        }
    }
}
