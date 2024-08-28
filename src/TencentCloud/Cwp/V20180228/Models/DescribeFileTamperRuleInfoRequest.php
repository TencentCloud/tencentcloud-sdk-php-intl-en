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
 * DescribeFileTamperRuleInfo request structure.
 *
 * @method integer getId() Obtain Rule ID
 * @method void setId(integer $Id) Set Rule ID
 * @method integer getLimit() Obtain Control the number of UUIDs returned
 * @method void setLimit(integer $Limit) Set Control the number of UUIDs returned
 * @method integer getOffset() Obtain Control the number of UUIDs returned, starting position
 * @method void setOffset(integer $Offset) Set Control the number of UUIDs returned, starting position
 */
class DescribeFileTamperRuleInfoRequest extends AbstractModel
{
    /**
     * @var integer Rule ID
     */
    public $Id;

    /**
     * @var integer Control the number of UUIDs returned
     */
    public $Limit;

    /**
     * @var integer Control the number of UUIDs returned, starting position
     */
    public $Offset;

    /**
     * @param integer $Id Rule ID
     * @param integer $Limit Control the number of UUIDs returned
     * @param integer $Offset Control the number of UUIDs returned, starting position
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
