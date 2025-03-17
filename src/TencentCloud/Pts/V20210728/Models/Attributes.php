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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sampling log attributes
 *
 * @method string getStatus() Obtain Response status code.

Note: This field may return null, indicating that no valid value is found.
 * @method void setStatus(string $Status) Set Response status code.

Note: This field may return null, indicating that no valid value is found.
 * @method string getResult() Obtain Response result code.

Note: This field may return null, indicating that no valid value is found.
 * @method void setResult(string $Result) Set Response result code.

Note: This field may return null, indicating that no valid value is found.
 * @method string getService() Obtain Request service.

Note: This field may return null, indicating that no valid value is found.
 * @method void setService(string $Service) Set Request service.

Note: This field may return null, indicating that no valid value is found.
 * @method string getMethod() Obtain Request method.

Note: This field may return null, indicating that no valid value is found.
 * @method void setMethod(string $Method) Set Request method.

Note: This field may return null, indicating that no valid value is found.
 * @method string getDuration() Obtain Request duration.

Note: This field may return null, indicating that no valid value is found.
 * @method void setDuration(string $Duration) Set Request duration.

Note: This field may return null, indicating that no valid value is found.
 */
class Attributes extends AbstractModel
{
    /**
     * @var string Response status code.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Status;

    /**
     * @var string Response result code.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Result;

    /**
     * @var string Request service.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Service;

    /**
     * @var string Request method.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Method;

    /**
     * @var string Request duration.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Duration;

    /**
     * @param string $Status Response status code.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Result Response result code.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Service Request service.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Method Request method.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Duration Request duration.

Note: This field may return null, indicating that no valid value is found.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
