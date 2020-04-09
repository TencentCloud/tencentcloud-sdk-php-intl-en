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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log filtering criteria, which is for distinguishing between logs of successful and failed execution
 *
 * @method string getRetCode() Obtain Values of `filter.RetCode` include:
not0, indicating that only logs of failed execution will be returned.
is0, indicating that only logs of successful execution will be returned.
TimeLimitExceeded, indicating that logs of function invocations which timed out will be returned.
ResourceLimitExceeded, indicating that logs of function invocations during which resources exceeded the upper limit will be returned.
UserCodeException, indicating that logs of function invocations during which a user code error occurred will be returned.
Blank, indicating that all logs will be returned.
 * @method void setRetCode(string $RetCode) Set Values of `filter.RetCode` include:
not0, indicating that only logs of failed execution will be returned.
is0, indicating that only logs of successful execution will be returned.
TimeLimitExceeded, indicating that logs of function invocations which timed out will be returned.
ResourceLimitExceeded, indicating that logs of function invocations during which resources exceeded the upper limit will be returned.
UserCodeException, indicating that logs of function invocations during which a user code error occurred will be returned.
Blank, indicating that all logs will be returned.
 */
class LogFilter extends AbstractModel
{
    /**
     * @var string Values of `filter.RetCode` include:
not0, indicating that only logs of failed execution will be returned.
is0, indicating that only logs of successful execution will be returned.
TimeLimitExceeded, indicating that logs of function invocations which timed out will be returned.
ResourceLimitExceeded, indicating that logs of function invocations during which resources exceeded the upper limit will be returned.
UserCodeException, indicating that logs of function invocations during which a user code error occurred will be returned.
Blank, indicating that all logs will be returned.
     */
    public $RetCode;

    /**
     * @param string $RetCode Values of `filter.RetCode` include:
not0, indicating that only logs of failed execution will be returned.
is0, indicating that only logs of successful execution will be returned.
TimeLimitExceeded, indicating that logs of function invocations which timed out will be returned.
ResourceLimitExceeded, indicating that logs of function invocations during which resources exceeded the upper limit will be returned.
UserCodeException, indicating that logs of function invocations during which a user code error occurred will be returned.
Blank, indicating that all logs will be returned.
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
        if (array_key_exists("RetCode",$param) and $param["RetCode"] !== null) {
            $this->RetCode = $param["RetCode"];
        }
    }
}
