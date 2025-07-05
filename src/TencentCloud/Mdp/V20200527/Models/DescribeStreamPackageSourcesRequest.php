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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStreamPackageSources request structure.
 *
 * @method integer getPageNum() Obtain Paging query page number, the value range is [1, 1000].
 * @method void setPageNum(integer $PageNum) Set Paging query page number, the value range is [1, 1000].
 * @method integer getPageSize() Obtain Paging query the size of each page, the value range is [1, 1000].
 * @method void setPageSize(integer $PageSize) Set Paging query the size of each page, the value range is [1, 1000].
 * @method string getLocationId() Obtain Location Id, query all sources under the location.
 * @method void setLocationId(string $LocationId) Set Location Id, query all sources under the location.
 * @method string getType() Obtain The type of source is divided into live broadcast and on-demand VOD.
Optional values: Live, VOD.
 * @method void setType(string $Type) Set The type of source is divided into live broadcast and on-demand VOD.
Optional values: Live, VOD.
 */
class DescribeStreamPackageSourcesRequest extends AbstractModel
{
    /**
     * @var integer Paging query page number, the value range is [1, 1000].
     */
    public $PageNum;

    /**
     * @var integer Paging query the size of each page, the value range is [1, 1000].
     */
    public $PageSize;

    /**
     * @var string Location Id, query all sources under the location.
     */
    public $LocationId;

    /**
     * @var string The type of source is divided into live broadcast and on-demand VOD.
Optional values: Live, VOD.
     */
    public $Type;

    /**
     * @param integer $PageNum Paging query page number, the value range is [1, 1000].
     * @param integer $PageSize Paging query the size of each page, the value range is [1, 1000].
     * @param string $LocationId Location Id, query all sources under the location.
     * @param string $Type The type of source is divided into live broadcast and on-demand VOD.
Optional values: Live, VOD.
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
        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
