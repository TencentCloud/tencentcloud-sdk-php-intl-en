<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceToShareMember request structure.
 *
 * @method string getArea() Obtain Shared region. you can obtain supported shared regions through the api [DescribeShareAreas](https://www.tencentcloud.com/document/product/850/103050?from_cn_redirect=1).
 * @method void setArea(string $Area) Set Shared region. you can obtain supported shared regions through the api [DescribeShareAreas](https://www.tencentcloud.com/document/product/850/103050?from_cn_redirect=1).
 * @method integer getOffset() Obtain Offset. Its value must be an integer multiple of the limit. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Its value must be an integer multiple of the limit. Default value: 0.
 * @method integer getLimit() Obtain Limit. Value range: 1–50.
 * @method void setLimit(integer $Limit) Set Limit. Value range: 1–50.
 * @method string getSearchKey() Obtain Search keywords support business resource ID search.
 * @method void setSearchKey(string $SearchKey) Set Search keywords support business resource ID search.
 * @method string getType() Obtain Shared resource type. For supported shared resource types, see [Overview of Resource Sharing](https://www.tencentcloud.com/document/product/850/59489?from_cn_redirect=1).
 * @method void setType(string $Type) Set Shared resource type. For supported shared resource types, see [Overview of Resource Sharing](https://www.tencentcloud.com/document/product/850/59489?from_cn_redirect=1).
 * @method array getProductResourceIds() Obtain Business resource ID. maximum 50.
 * @method void setProductResourceIds(array $ProductResourceIds) Set Business resource ID. maximum 50.
 */
class DescribeResourceToShareMemberRequest extends AbstractModel
{
    /**
     * @var string Shared region. you can obtain supported shared regions through the api [DescribeShareAreas](https://www.tencentcloud.com/document/product/850/103050?from_cn_redirect=1).
     */
    public $Area;

    /**
     * @var integer Offset. Its value must be an integer multiple of the limit. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Limit. Value range: 1–50.
     */
    public $Limit;

    /**
     * @var string Search keywords support business resource ID search.
     */
    public $SearchKey;

    /**
     * @var string Shared resource type. For supported shared resource types, see [Overview of Resource Sharing](https://www.tencentcloud.com/document/product/850/59489?from_cn_redirect=1).
     */
    public $Type;

    /**
     * @var array Business resource ID. maximum 50.
     */
    public $ProductResourceIds;

    /**
     * @param string $Area Shared region. you can obtain supported shared regions through the api [DescribeShareAreas](https://www.tencentcloud.com/document/product/850/103050?from_cn_redirect=1).
     * @param integer $Offset Offset. Its value must be an integer multiple of the limit. Default value: 0.
     * @param integer $Limit Limit. Value range: 1–50.
     * @param string $SearchKey Search keywords support business resource ID search.
     * @param string $Type Shared resource type. For supported shared resource types, see [Overview of Resource Sharing](https://www.tencentcloud.com/document/product/850/59489?from_cn_redirect=1).
     * @param array $ProductResourceIds Business resource ID. maximum 50.
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
        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ProductResourceIds",$param) and $param["ProductResourceIds"] !== null) {
            $this->ProductResourceIds = $param["ProductResourceIds"];
        }
    }
}
