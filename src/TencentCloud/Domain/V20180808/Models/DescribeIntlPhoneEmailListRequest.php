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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIntlPhoneEmailList request structure.
 *
 * @method integer getType() Obtain The type. Valid values: `1` (mobile number), `2` (email address).
 * @method void setType(integer $Type) Set The type. Valid values: `1` (mobile number), `2` (email address).
 * @method integer getLimit() Obtain The number of records on each page in pagination cases.
 * @method void setLimit(integer $Limit) Set The number of records on each page in pagination cases.
 * @method integer getOffset() Obtain The page number in pagination cases.
 * @method void setOffset(integer $Offset) Set The page number in pagination cases.
 */
class DescribeIntlPhoneEmailListRequest extends AbstractModel
{
    /**
     * @var integer The type. Valid values: `1` (mobile number), `2` (email address).
     */
    public $Type;

    /**
     * @var integer The number of records on each page in pagination cases.
     */
    public $Limit;

    /**
     * @var integer The page number in pagination cases.
     */
    public $Offset;

    /**
     * @param integer $Type The type. Valid values: `1` (mobile number), `2` (email address).
     * @param integer $Limit The number of records on each page in pagination cases.
     * @param integer $Offset The page number in pagination cases.
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
