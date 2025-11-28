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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cmq TransactionPolicy
 *
 * @method integer getFirstQueryInterval() Obtain First recheck time.
 * @method void setFirstQueryInterval(integer $FirstQueryInterval) Set First recheck time.
 * @method integer getMaxQueryCount() Obtain Maximum query times.
 * @method void setMaxQueryCount(integer $MaxQueryCount) Set Maximum query times.
 */
class CmqTransactionPolicy extends AbstractModel
{
    /**
     * @var integer First recheck time.
     */
    public $FirstQueryInterval;

    /**
     * @var integer Maximum query times.
     */
    public $MaxQueryCount;

    /**
     * @param integer $FirstQueryInterval First recheck time.
     * @param integer $MaxQueryCount Maximum query times.
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
        if (array_key_exists("FirstQueryInterval",$param) and $param["FirstQueryInterval"] !== null) {
            $this->FirstQueryInterval = $param["FirstQueryInterval"];
        }

        if (array_key_exists("MaxQueryCount",$param) and $param["MaxQueryCount"] !== null) {
            $this->MaxQueryCount = $param["MaxQueryCount"];
        }
    }
}
