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
namespace TencentCloud\Cmq\V20190304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TransactionPolicy
 *
 * @method integer getFirstQueryInterval() Obtain FirstQueryInterval
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFirstQueryInterval(integer $FirstQueryInterval) Set FirstQueryInterval
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxQueryCount() Obtain MaxQueryCount
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxQueryCount(integer $MaxQueryCount) Set MaxQueryCount
Note: this field may return null, indicating that no valid values can be obtained.
 */
class TransactionPolicy extends AbstractModel
{
    /**
     * @var integer FirstQueryInterval
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FirstQueryInterval;

    /**
     * @var integer MaxQueryCount
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxQueryCount;

    /**
     * @param integer $FirstQueryInterval FirstQueryInterval
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxQueryCount MaxQueryCount
Note: this field may return null, indicating that no valid values can be obtained.
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
