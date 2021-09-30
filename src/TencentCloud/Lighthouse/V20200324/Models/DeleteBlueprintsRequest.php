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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteBlueprints request structure.
 *
 * @method array getBlueprintIds() Obtain Image ID list, which can be obtained from the `BlueprintId` returned by the [DescribeBlueprints](https://intl.cloud.tencent.com/document/product/1207/47689?from_cn_redirect=1) API.
 * @method void setBlueprintIds(array $BlueprintIds) Set Image ID list, which can be obtained from the `BlueprintId` returned by the [DescribeBlueprints](https://intl.cloud.tencent.com/document/product/1207/47689?from_cn_redirect=1) API.
 */
class DeleteBlueprintsRequest extends AbstractModel
{
    /**
     * @var array Image ID list, which can be obtained from the `BlueprintId` returned by the [DescribeBlueprints](https://intl.cloud.tencent.com/document/product/1207/47689?from_cn_redirect=1) API.
     */
    public $BlueprintIds;

    /**
     * @param array $BlueprintIds Image ID list, which can be obtained from the `BlueprintId` returned by the [DescribeBlueprints](https://intl.cloud.tencent.com/document/product/1207/47689?from_cn_redirect=1) API.
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
        if (array_key_exists("BlueprintIds",$param) and $param["BlueprintIds"] !== null) {
            $this->BlueprintIds = $param["BlueprintIds"];
        }
    }
}
