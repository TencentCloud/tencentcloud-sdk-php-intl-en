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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeShareUnitResources request structure.
 *
 * @method string getUnitId() Obtain Shared unit ID.
 * @method void setUnitId(string $UnitId) Set Shared unit ID.
 * @method string getArea() Obtain Shared unit region.
 * @method void setArea(string $Area) Set Shared unit region.
 * @method integer getOffset() Obtain Offset. Its value must be an integer multiple of the limit. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Its value must be an integer multiple of the limit. Default value: 0.
 * @method integer getLimit() Obtain Limit. Value range: 1–50.
 * @method void setLimit(integer $Limit) Set Limit. Value range: 1–50.
 * @method string getSearchKey() Obtain Search keyword. Product resource ID search is supported.
 * @method void setSearchKey(string $SearchKey) Set Search keyword. Product resource ID search is supported.
 * @method string getType() Obtain Shared resource type. For supported shared resource types, see [Overview of Resource Sharing](https://intl.cloud.tencent.com/document/product/850/59489?from_cn_redirect=1).
 * @method void setType(string $Type) Set Shared resource type. For supported shared resource types, see [Overview of Resource Sharing](https://intl.cloud.tencent.com/document/product/850/59489?from_cn_redirect=1).
 */
class DescribeShareUnitResourcesRequest extends AbstractModel
{
    /**
     * @var string Shared unit ID.
     */
    public $UnitId;

    /**
     * @var string Shared unit region.
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
     * @var string Search keyword. Product resource ID search is supported.
     */
    public $SearchKey;

    /**
     * @var string Shared resource type. For supported shared resource types, see [Overview of Resource Sharing](https://intl.cloud.tencent.com/document/product/850/59489?from_cn_redirect=1).
     */
    public $Type;

    /**
     * @param string $UnitId Shared unit ID.
     * @param string $Area Shared unit region.
     * @param integer $Offset Offset. Its value must be an integer multiple of the limit. Default value: 0.
     * @param integer $Limit Limit. Value range: 1–50.
     * @param string $SearchKey Search keyword. Product resource ID search is supported.
     * @param string $Type Shared resource type. For supported shared resource types, see [Overview of Resource Sharing](https://intl.cloud.tencent.com/document/product/850/59489?from_cn_redirect=1).
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
        if (array_key_exists("UnitId",$param) and $param["UnitId"] !== null) {
            $this->UnitId = $param["UnitId"];
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
    }
}
