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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSubUserInfo request structure.
 *
 * @method array getMemberId() Obtain Member ID of the group account
 * @method void setMemberId(array $MemberId) Set Member ID of the group account
 * @method Filter getFilter() Obtain Filter content
 * @method void setFilter(Filter $Filter) Set Filter content
 */
class DescribeSubUserInfoRequest extends AbstractModel
{
    /**
     * @var array Member ID of the group account
     */
    public $MemberId;

    /**
     * @var Filter Filter content
     */
    public $Filter;

    /**
     * @param array $MemberId Member ID of the group account
     * @param Filter $Filter Filter content
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}
