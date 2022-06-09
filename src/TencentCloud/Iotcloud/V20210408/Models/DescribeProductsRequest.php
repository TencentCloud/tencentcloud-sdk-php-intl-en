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
namespace TencentCloud\Iotcloud\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProducts request structure.
 *
 * @method integer getOffset() Obtain Offset, starting from 0
 * @method void setOffset(integer $Offset) Set Offset, starting from 0
 * @method integer getLimit() Obtain Number of entries returned per page. Valid range: 10–250.
 * @method void setLimit(integer $Limit) Set Number of entries returned per page. Valid range: 10–250.
 */
class DescribeProductsRequest extends AbstractModel
{
    /**
     * @var integer Offset, starting from 0
     */
    public $Offset;

    /**
     * @var integer Number of entries returned per page. Valid range: 10–250.
     */
    public $Limit;

    /**
     * @param integer $Offset Offset, starting from 0
     * @param integer $Limit Number of entries returned per page. Valid range: 10–250.
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
    }
}
