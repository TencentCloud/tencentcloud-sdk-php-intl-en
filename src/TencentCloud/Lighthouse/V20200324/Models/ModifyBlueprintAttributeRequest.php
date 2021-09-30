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
 * ModifyBlueprintAttribute request structure.
 *
 * @method string getBlueprintId() Obtain Image ID, which can be obtained from the `BlueprintId` returned by the [DescribeBlueprints](https://intl.cloud.tencent.com/document/product/1207/47689?from_cn_redirect=1) API.
 * @method void setBlueprintId(string $BlueprintId) Set Image ID, which can be obtained from the `BlueprintId` returned by the [DescribeBlueprints](https://intl.cloud.tencent.com/document/product/1207/47689?from_cn_redirect=1) API.
 * @method string getBlueprintName() Obtain New image name, which can contain up to 60 characters.
 * @method void setBlueprintName(string $BlueprintName) Set New image name, which can contain up to 60 characters.
 * @method string getDescription() Obtain New image description, which can contain up to 60 characters.
 * @method void setDescription(string $Description) Set New image description, which can contain up to 60 characters.
 */
class ModifyBlueprintAttributeRequest extends AbstractModel
{
    /**
     * @var string Image ID, which can be obtained from the `BlueprintId` returned by the [DescribeBlueprints](https://intl.cloud.tencent.com/document/product/1207/47689?from_cn_redirect=1) API.
     */
    public $BlueprintId;

    /**
     * @var string New image name, which can contain up to 60 characters.
     */
    public $BlueprintName;

    /**
     * @var string New image description, which can contain up to 60 characters.
     */
    public $Description;

    /**
     * @param string $BlueprintId Image ID, which can be obtained from the `BlueprintId` returned by the [DescribeBlueprints](https://intl.cloud.tencent.com/document/product/1207/47689?from_cn_redirect=1) API.
     * @param string $BlueprintName New image name, which can contain up to 60 characters.
     * @param string $Description New image description, which can contain up to 60 characters.
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
        if (array_key_exists("BlueprintId",$param) and $param["BlueprintId"] !== null) {
            $this->BlueprintId = $param["BlueprintId"];
        }

        if (array_key_exists("BlueprintName",$param) and $param["BlueprintName"] !== null) {
            $this->BlueprintName = $param["BlueprintName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
