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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccountVpcList request structure.
 *
 * @method string getAccountUin() Obtain UIN of account
 * @method void setAccountUin(string $AccountUin) Set UIN of account
 * @method integer getOffset() Obtain Pagination offset, starting from 0
 * @method void setOffset(integer $Offset) Set Pagination offset, starting from 0
 * @method integer getLimit() Obtain Number of entries per page. Maximum value: `100`. Default value: `20`
 * @method void setLimit(integer $Limit) Set Number of entries per page. Maximum value: `100`. Default value: `20`
 * @method array getFilters() Obtain Filter parameters
 * @method void setFilters(array $Filters) Set Filter parameters
 */
class DescribeAccountVpcListRequest extends AbstractModel
{
    /**
     * @var string UIN of account
     */
    public $AccountUin;

    /**
     * @var integer Pagination offset, starting from 0
     */
    public $Offset;

    /**
     * @var integer Number of entries per page. Maximum value: `100`. Default value: `20`
     */
    public $Limit;

    /**
     * @var array Filter parameters
     */
    public $Filters;

    /**
     * @param string $AccountUin UIN of account
     * @param integer $Offset Pagination offset, starting from 0
     * @param integer $Limit Number of entries per page. Maximum value: `100`. Default value: `20`
     * @param array $Filters Filter parameters
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
        if (array_key_exists("AccountUin",$param) and $param["AccountUin"] !== null) {
            $this->AccountUin = $param["AccountUin"];
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
