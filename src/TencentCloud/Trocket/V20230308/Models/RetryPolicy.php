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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * retry policy
 *
 * @method string getPolicyType() Obtain Retry policy type. The enumeration values are as follows:

-EXPONENTIAL: Fixed interval
-CUSTOMIZED: Tier backoff
 * @method void setPolicyType(string $PolicyType) Set Retry policy type. The enumeration values are as follows:

-EXPONENTIAL: Fixed interval
-CUSTOMIZED: Tier backoff
 * @method integer getRetryInterval() Obtain Fixed retry interval. This parameter takes effect when a fixed interval-based retry policy is configured.
 * @method void setRetryInterval(integer $RetryInterval) Set Fixed retry interval. This parameter takes effect when a fixed interval-based retry policy is configured.
 */
class RetryPolicy extends AbstractModel
{
    /**
     * @var string Retry policy type. The enumeration values are as follows:

-EXPONENTIAL: Fixed interval
-CUSTOMIZED: Tier backoff
     */
    public $PolicyType;

    /**
     * @var integer Fixed retry interval. This parameter takes effect when a fixed interval-based retry policy is configured.
     */
    public $RetryInterval;

    /**
     * @param string $PolicyType Retry policy type. The enumeration values are as follows:

-EXPONENTIAL: Fixed interval
-CUSTOMIZED: Tier backoff
     * @param integer $RetryInterval Fixed retry interval. This parameter takes effect when a fixed interval-based retry policy is configured.
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
        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("RetryInterval",$param) and $param["RetryInterval"] !== null) {
            $this->RetryInterval = $param["RetryInterval"];
        }
    }
}
