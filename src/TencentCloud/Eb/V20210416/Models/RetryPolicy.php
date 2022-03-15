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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Description of CKafka delivery target retry policy
 *
 * @method integer getRetryInterval() Obtain Retry interval in seconds
 * @method void setRetryInterval(integer $RetryInterval) Set Retry interval in seconds
 * @method integer getMaxRetryAttempts() Obtain Maximum number of retries
 * @method void setMaxRetryAttempts(integer $MaxRetryAttempts) Set Maximum number of retries
 */
class RetryPolicy extends AbstractModel
{
    /**
     * @var integer Retry interval in seconds
     */
    public $RetryInterval;

    /**
     * @var integer Maximum number of retries
     */
    public $MaxRetryAttempts;

    /**
     * @param integer $RetryInterval Retry interval in seconds
     * @param integer $MaxRetryAttempts Maximum number of retries
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
        if (array_key_exists("RetryInterval",$param) and $param["RetryInterval"] !== null) {
            $this->RetryInterval = $param["RetryInterval"];
        }

        if (array_key_exists("MaxRetryAttempts",$param) and $param["MaxRetryAttempts"] !== null) {
            $this->MaxRetryAttempts = $param["MaxRetryAttempts"];
        }
    }
}
