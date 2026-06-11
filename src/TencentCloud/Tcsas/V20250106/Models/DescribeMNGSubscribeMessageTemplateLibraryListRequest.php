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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMNGSubscribeMessageTemplateLibraryList request structure.
 *
 * @method string getPlatformId() Obtain <p>Platform ID.</p>
 * @method void setPlatformId(string $PlatformId) Set <p>Platform ID.</p>
 * @method string getMNPId() Obtain <p>Mini program appid.</p>
 * @method void setMNPId(string $MNPId) Set <p>Mini program appid.</p>
 * @method integer getLimit() Obtain <p>Limit.</p>
 * @method void setLimit(integer $Limit) Set <p>Limit.</p>
 * @method integer getQueryType() Obtain <p>Query type. Valid values: 2: One-time message; 3: Long-term subscription message.</p>
 * @method void setQueryType(integer $QueryType) Set <p>Query type. Valid values: 2: One-time message; 3: Long-term subscription message.</p>
 * @method integer getOffset() Obtain <p>Pagination offset.</p>
 * @method void setOffset(integer $Offset) Set <p>Pagination offset.</p>
 * @method string getQueryStr() Obtain <p>Limit.</p>
 * @method void setQueryStr(string $QueryStr) Set <p>Limit.</p>
 */
class DescribeMNGSubscribeMessageTemplateLibraryListRequest extends AbstractModel
{
    /**
     * @var string <p>Platform ID.</p>
     */
    public $PlatformId;

    /**
     * @var string <p>Mini program appid.</p>
     */
    public $MNPId;

    /**
     * @var integer <p>Limit.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Query type. Valid values: 2: One-time message; 3: Long-term subscription message.</p>
     */
    public $QueryType;

    /**
     * @var integer <p>Pagination offset.</p>
     */
    public $Offset;

    /**
     * @var string <p>Limit.</p>
     */
    public $QueryStr;

    /**
     * @param string $PlatformId <p>Platform ID.</p>
     * @param string $MNPId <p>Mini program appid.</p>
     * @param integer $Limit <p>Limit.</p>
     * @param integer $QueryType <p>Query type. Valid values: 2: One-time message; 3: Long-term subscription message.</p>
     * @param integer $Offset <p>Pagination offset.</p>
     * @param string $QueryStr <p>Limit.</p>
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
        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("QueryType",$param) and $param["QueryType"] !== null) {
            $this->QueryType = $param["QueryType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("QueryStr",$param) and $param["QueryStr"] !== null) {
            $this->QueryStr = $param["QueryStr"];
        }
    }
}
