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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityGroupList request structure.
 *
 * @method integer getDirection() Obtain 0: outbound rule; 1: inbound rule
 * @method void setDirection(integer $Direction) Set 0: outbound rule; 1: inbound rule
 * @method string getArea() Obtain Region code (e.g. ap-guangzhou ). All Tencent Cloud regions are supported.
 * @method void setArea(string $Area) Set Region code (e.g. ap-guangzhou ). All Tencent Cloud regions are supported.
 * @method string getSearchValue() Obtain Search value
 * @method void setSearchValue(string $SearchValue) Set Search value
 * @method integer getLimit() Obtain Number of entries per page. Default: 10
 * @method void setLimit(integer $Limit) Set Number of entries per page. Default: 10
 * @method integer getOffset() Obtain Offset. Default: 0
 * @method void setOffset(integer $Offset) Set Offset. Default: 0
 * @method string getStatus() Obtain Status. Null: all; '0': filter disabled rules; '1': filter enabled rules
 * @method void setStatus(string $Status) Set Status. Null: all; '0': filter disabled rules; '1': filter enabled rules
 * @method integer getFilter() Obtain 0: not filter; 1: filter out normal rules to retain abnormal rules
 * @method void setFilter(integer $Filter) Set 0: not filter; 1: filter out normal rules to retain abnormal rules
 */
class DescribeSecurityGroupListRequest extends AbstractModel
{
    /**
     * @var integer 0: outbound rule; 1: inbound rule
     */
    public $Direction;

    /**
     * @var string Region code (e.g. ap-guangzhou ). All Tencent Cloud regions are supported.
     */
    public $Area;

    /**
     * @var string Search value
     */
    public $SearchValue;

    /**
     * @var integer Number of entries per page. Default: 10
     */
    public $Limit;

    /**
     * @var integer Offset. Default: 0
     */
    public $Offset;

    /**
     * @var string Status. Null: all; '0': filter disabled rules; '1': filter enabled rules
     */
    public $Status;

    /**
     * @var integer 0: not filter; 1: filter out normal rules to retain abnormal rules
     */
    public $Filter;

    /**
     * @param integer $Direction 0: outbound rule; 1: inbound rule
     * @param string $Area Region code (e.g. ap-guangzhou ). All Tencent Cloud regions are supported.
     * @param string $SearchValue Search value
     * @param integer $Limit Number of entries per page. Default: 10
     * @param integer $Offset Offset. Default: 0
     * @param string $Status Status. Null: all; '0': filter disabled rules; '1': filter enabled rules
     * @param integer $Filter 0: not filter; 1: filter out normal rules to retain abnormal rules
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
        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("SearchValue",$param) and $param["SearchValue"] !== null) {
            $this->SearchValue = $param["SearchValue"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }
    }
}
