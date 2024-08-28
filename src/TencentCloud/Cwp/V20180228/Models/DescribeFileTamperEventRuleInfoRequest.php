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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFileTamperEventRuleInfo request structure.
 *
 * @method integer getId() Obtain Event ID
 * @method void setId(integer $Id) Set Event ID
 * @method integer getLimit() Obtain Number of returned UUIDs per page
 * @method void setLimit(integer $Limit) Set Number of returned UUIDs per page
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 */
class DescribeFileTamperEventRuleInfoRequest extends AbstractModel
{
    /**
     * @var integer Event ID
     */
    public $Id;

    /**
     * @var integer Number of returned UUIDs per page
     */
    public $Limit;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @param integer $Id Event ID
     * @param integer $Limit Number of returned UUIDs per page
     * @param integer $Offset Offset
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
