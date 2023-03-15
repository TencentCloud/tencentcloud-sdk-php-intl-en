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
 * DescribeBlueprints request structure.
 *
 * @method array getBlueprintIds() Obtain Image ID list.
 * @method void setBlueprintIds(array $BlueprintIds) Set Image ID list.
 * @method integer getOffset() Obtain Offset. Default value: 0. For more information on `Offset`, please see the relevant section in [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0. For more information on `Offset`, please see the relevant section in [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, please see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, please see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
 * @method array getFilters() Obtain Filter list.
<li>blueprint-id</li>Filter by the **image ID**.
Type: String
Required: no
<li>blueprint-type</li>Filter by the **image type**.
Valid values: `APP_OS` (application image), `PURE_OS` (system image), `DOCKER` (Docker container image), `PRIVATE` (custom image), `SHARED` (shared image)
Type: String
Required: no
<li>platform-type</li>Filter by the **image operating system**.
Valid values: `LINUX_UNIX` (Linux or Unix), `WINDOWS` (Windows)
Type: String
Required: no
<li>blueprint-name</li>Filter by the **image name**.
Type: String
Required: no
<li>blueprint-state</li>Filter by the **image status**.
Type: String
Required: no
<li>scene-id</li>Filter by the **scene ID**.
Type: String
Required: no

Each request can contain up to 10 `Filters`, each of which can contain up to 100 `Filter.Values`. `BlueprintIds` and `Filters` cannot be specified at the same time.
 * @method void setFilters(array $Filters) Set Filter list.
<li>blueprint-id</li>Filter by the **image ID**.
Type: String
Required: no
<li>blueprint-type</li>Filter by the **image type**.
Valid values: `APP_OS` (application image), `PURE_OS` (system image), `DOCKER` (Docker container image), `PRIVATE` (custom image), `SHARED` (shared image)
Type: String
Required: no
<li>platform-type</li>Filter by the **image operating system**.
Valid values: `LINUX_UNIX` (Linux or Unix), `WINDOWS` (Windows)
Type: String
Required: no
<li>blueprint-name</li>Filter by the **image name**.
Type: String
Required: no
<li>blueprint-state</li>Filter by the **image status**.
Type: String
Required: no
<li>scene-id</li>Filter by the **scene ID**.
Type: String
Required: no

Each request can contain up to 10 `Filters`, each of which can contain up to 100 `Filter.Values`. `BlueprintIds` and `Filters` cannot be specified at the same time.
 */
class DescribeBlueprintsRequest extends AbstractModel
{
    /**
     * @var array Image ID list.
     */
    public $BlueprintIds;

    /**
     * @var integer Offset. Default value: 0. For more information on `Offset`, please see the relevant section in [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, please see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
     */
    public $Limit;

    /**
     * @var array Filter list.
<li>blueprint-id</li>Filter by the **image ID**.
Type: String
Required: no
<li>blueprint-type</li>Filter by the **image type**.
Valid values: `APP_OS` (application image), `PURE_OS` (system image), `DOCKER` (Docker container image), `PRIVATE` (custom image), `SHARED` (shared image)
Type: String
Required: no
<li>platform-type</li>Filter by the **image operating system**.
Valid values: `LINUX_UNIX` (Linux or Unix), `WINDOWS` (Windows)
Type: String
Required: no
<li>blueprint-name</li>Filter by the **image name**.
Type: String
Required: no
<li>blueprint-state</li>Filter by the **image status**.
Type: String
Required: no
<li>scene-id</li>Filter by the **scene ID**.
Type: String
Required: no

Each request can contain up to 10 `Filters`, each of which can contain up to 100 `Filter.Values`. `BlueprintIds` and `Filters` cannot be specified at the same time.
     */
    public $Filters;

    /**
     * @param array $BlueprintIds Image ID list.
     * @param integer $Offset Offset. Default value: 0. For more information on `Offset`, please see the relevant section in [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, please see the relevant section in the API [Overview](https://intl.cloud.tencent.com/document/product/1207/47578?from_cn_redirect=1).
     * @param array $Filters Filter list.
<li>blueprint-id</li>Filter by the **image ID**.
Type: String
Required: no
<li>blueprint-type</li>Filter by the **image type**.
Valid values: `APP_OS` (application image), `PURE_OS` (system image), `DOCKER` (Docker container image), `PRIVATE` (custom image), `SHARED` (shared image)
Type: String
Required: no
<li>platform-type</li>Filter by the **image operating system**.
Valid values: `LINUX_UNIX` (Linux or Unix), `WINDOWS` (Windows)
Type: String
Required: no
<li>blueprint-name</li>Filter by the **image name**.
Type: String
Required: no
<li>blueprint-state</li>Filter by the **image status**.
Type: String
Required: no
<li>scene-id</li>Filter by the **scene ID**.
Type: String
Required: no

Each request can contain up to 10 `Filters`, each of which can contain up to 100 `Filter.Values`. `BlueprintIds` and `Filters` cannot be specified at the same time.
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
