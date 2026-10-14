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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log filter criteria, used to distinguish between correct and error logs
 *
 * @method string getRetCode() Obtain Valid values of filter.RetCode:
not0 means only error logs are returned.
is0 means only return correct logs.
TimeLimitExceeded returns the logs of function call timed out.
ResourceLimitExceeded returns the logs of resource limit exceeded during function calls.
UserCodeException returns the logs of user code errors in function calls.
If there is no input, all logs are returned.
 * @method void setRetCode(string $RetCode) Set Valid values of filter.RetCode:
not0 means only error logs are returned.
is0 means only return correct logs.
TimeLimitExceeded returns the logs of function call timed out.
ResourceLimitExceeded returns the logs of resource limit exceeded during function calls.
UserCodeException returns the logs of user code errors in function calls.
If there is no input, all logs are returned.
 */
class LogFilter extends AbstractModel
{
    /**
     * @var string Valid values of filter.RetCode:
not0 means only error logs are returned.
is0 means only return correct logs.
TimeLimitExceeded returns the logs of function call timed out.
ResourceLimitExceeded returns the logs of resource limit exceeded during function calls.
UserCodeException returns the logs of user code errors in function calls.
If there is no input, all logs are returned.
     */
    public $RetCode;

    /**
     * @param string $RetCode Valid values of filter.RetCode:
not0 means only error logs are returned.
is0 means only return correct logs.
TimeLimitExceeded returns the logs of function call timed out.
ResourceLimitExceeded returns the logs of resource limit exceeded during function calls.
UserCodeException returns the logs of user code errors in function calls.
If there is no input, all logs are returned.
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
