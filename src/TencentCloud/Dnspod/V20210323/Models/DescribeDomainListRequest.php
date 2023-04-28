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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDomainList request structure.
 *
 * @method string getType() Obtain The domain group type. Valid values: `ALL` (default), `MINE`, `SHARE`, `ISMARK`, `PAUSE`, `VIP`, `RECENT`, `SHARE_OUT`, and `FREE`.
 * @method void setType(string $Type) Set The domain group type. Valid values: `ALL` (default), `MINE`, `SHARE`, `ISMARK`, `PAUSE`, `VIP`, `RECENT`, `SHARE_OUT`, and `FREE`.
 * @method integer getOffset() Obtain Record offset starting from `0`. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Record offset starting from `0`. Default value: `0`.
 * @method integer getLimit() Obtain Number of domains to be obtained. For example, `20` indicates to obtain 20 domains. Default value: `3000`.
 * @method void setLimit(integer $Limit) Set Number of domains to be obtained. For example, `20` indicates to obtain 20 domains. Default value: `3000`.
 * @method integer getGroupId() Obtain Group ID, which can be passed in to get all domains in the specified group
 * @method void setGroupId(integer $GroupId) Set Group ID, which can be passed in to get all domains in the specified group
 * @method string getKeyword() Obtain Keyword for searching for a domain
 * @method void setKeyword(string $Keyword) Set Keyword for searching for a domain
 */
class DescribeDomainListRequest extends AbstractModel
{
    /**
     * @var string The domain group type. Valid values: `ALL` (default), `MINE`, `SHARE`, `ISMARK`, `PAUSE`, `VIP`, `RECENT`, `SHARE_OUT`, and `FREE`.
     */
    public $Type;

    /**
     * @var integer Record offset starting from `0`. Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer Number of domains to be obtained. For example, `20` indicates to obtain 20 domains. Default value: `3000`.
     */
    public $Limit;

    /**
     * @var integer Group ID, which can be passed in to get all domains in the specified group
     */
    public $GroupId;

    /**
     * @var string Keyword for searching for a domain
     */
    public $Keyword;

    /**
     * @param string $Type The domain group type. Valid values: `ALL` (default), `MINE`, `SHARE`, `ISMARK`, `PAUSE`, `VIP`, `RECENT`, `SHARE_OUT`, and `FREE`.
     * @param integer $Offset Record offset starting from `0`. Default value: `0`.
     * @param integer $Limit Number of domains to be obtained. For example, `20` indicates to obtain 20 domains. Default value: `3000`.
     * @param integer $GroupId Group ID, which can be passed in to get all domains in the specified group
     * @param string $Keyword Keyword for searching for a domain
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
