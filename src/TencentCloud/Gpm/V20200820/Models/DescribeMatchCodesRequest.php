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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMatchCodes request structure.
 *
 * @method integer getOffset() Obtain Offset, number of pages.
 * @method void setOffset(integer $Offset) Set Offset, number of pages.
 * @method integer getLimit() Obtain The number of MatchCodes per page
 * @method void setLimit(integer $Limit) Set The number of MatchCodes per page
 * @method string getMatchCode() Obtain Query by the MatchCode value (a string).
 * @method void setMatchCode(string $MatchCode) Set Query by the MatchCode value (a string).
 */
class DescribeMatchCodesRequest extends AbstractModel
{
    /**
     * @var integer Offset, number of pages.
     */
    public $Offset;

    /**
     * @var integer The number of MatchCodes per page
     */
    public $Limit;

    /**
     * @var string Query by the MatchCode value (a string).
     */
    public $MatchCode;

    /**
     * @param integer $Offset Offset, number of pages.
     * @param integer $Limit The number of MatchCodes per page
     * @param string $MatchCode Query by the MatchCode value (a string).
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("MatchCode",$param) and $param["MatchCode"] !== null) {
            $this->MatchCode = $param["MatchCode"];
        }
    }
}
