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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance violation details.
 *
 * @method string getSource() Obtain  Source: RESTRICT: Banned; FREEZW: Frozen.
 * @method void setSource(string $Source) Set  Source: RESTRICT: Banned; FREEZW: Frozen.
 * @method string getState() Obtain Whether self-service unblocking is allowed. 1: Yes; 2: No.
 * @method void setState(string $State) Set Whether self-service unblocking is allowed. 1: Yes; 2: No.
 * @method string getReason() Obtain Violation type.
 * @method void setReason(string $Reason) Set Violation type.
 * @method string getContent() Obtain Violation content (URL and associated domain name).
 * @method void setContent(string $Content) Set Violation content (URL and associated domain name).
 */
class InstanceViolationDetail extends AbstractModel
{
    /**
     * @var string  Source: RESTRICT: Banned; FREEZW: Frozen.
     */
    public $Source;

    /**
     * @var string Whether self-service unblocking is allowed. 1: Yes; 2: No.
     */
    public $State;

    /**
     * @var string Violation type.
     */
    public $Reason;

    /**
     * @var string Violation content (URL and associated domain name).
     */
    public $Content;

    /**
     * @param string $Source  Source: RESTRICT: Banned; FREEZW: Frozen.
     * @param string $State Whether self-service unblocking is allowed. 1: Yes; 2: No.
     * @param string $Reason Violation type.
     * @param string $Content Violation content (URL and associated domain name).
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
