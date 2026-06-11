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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Alarm silence statistics.
 *
 * @method integer getTotalCount() Obtain Total number of alarm silence policies that meet the search conditions.
 * @method void setTotalCount(integer $TotalCount) Set Total number of alarm silence policies that meet the search conditions.
 * @method integer getInvalidCount() Obtain Number of ineffective alarm silence policies.
 * @method void setInvalidCount(integer $InvalidCount) Set Number of ineffective alarm silence policies.
 * @method integer getValidCount() Obtain Number of effective alarm silence policies.
 * @method void setValidCount(integer $ValidCount) Set Number of effective alarm silence policies.
 * @method integer getExpireCount() Obtain Number of expired alarm silence policies.
 * @method void setExpireCount(integer $ExpireCount) Set Number of expired alarm silence policies.
 */
class AlarmShieldCount extends AbstractModel
{
    /**
     * @var integer Total number of alarm silence policies that meet the search conditions.
     */
    public $TotalCount;

    /**
     * @var integer Number of ineffective alarm silence policies.
     */
    public $InvalidCount;

    /**
     * @var integer Number of effective alarm silence policies.
     */
    public $ValidCount;

    /**
     * @var integer Number of expired alarm silence policies.
     */
    public $ExpireCount;

    /**
     * @param integer $TotalCount Total number of alarm silence policies that meet the search conditions.
     * @param integer $InvalidCount Number of ineffective alarm silence policies.
     * @param integer $ValidCount Number of effective alarm silence policies.
     * @param integer $ExpireCount Number of expired alarm silence policies.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("InvalidCount",$param) and $param["InvalidCount"] !== null) {
            $this->InvalidCount = $param["InvalidCount"];
        }

        if (array_key_exists("ValidCount",$param) and $param["ValidCount"] !== null) {
            $this->ValidCount = $param["ValidCount"];
        }

        if (array_key_exists("ExpireCount",$param) and $param["ExpireCount"] !== null) {
            $this->ExpireCount = $param["ExpireCount"];
        }
    }
}
