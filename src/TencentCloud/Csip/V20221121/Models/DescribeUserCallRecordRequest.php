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
 * DescribeUserCallRecord request structure.
 *
 * @method string getSubUin() Obtain Account UIN
 * @method void setSubUin(string $SubUin) Set Account UIN
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 * @method Filter getFilter() Obtain Filter.
 * @method void setFilter(Filter $Filter) Set Filter.
 */
class DescribeUserCallRecordRequest extends AbstractModel
{
    /**
     * @var string Account UIN
     */
    public $SubUin;

    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @var Filter Filter.
     */
    public $Filter;

    /**
     * @param string $SubUin Account UIN
     * @param array $MemberId Group Account Member ID
     * @param Filter $Filter Filter.
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
        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
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
