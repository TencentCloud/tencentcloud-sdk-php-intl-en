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
 * DescribePolicyHitData request structure.
 *
 * @method integer getIndexTimestamp() Obtain Timestamp of the date and time to view
 * @method void setIndexTimestamp(integer $IndexTimestamp) Set Timestamp of the date and time to view
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 */
class DescribePolicyHitDataRequest extends AbstractModel
{
    /**
     * @var integer Timestamp of the date and time to view
     */
    public $IndexTimestamp;

    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @param integer $IndexTimestamp Timestamp of the date and time to view
     * @param array $MemberId Group Account Member ID
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
        if (array_key_exists("IndexTimestamp",$param) and $param["IndexTimestamp"] !== null) {
            $this->IndexTimestamp = $param["IndexTimestamp"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
