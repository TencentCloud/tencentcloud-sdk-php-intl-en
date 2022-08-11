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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Failure details
 *
 * @method string getUserId() Obtain User information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserId(string $UserId) Set User information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getError() Obtain Failure cause
 * @method void setError(string $Error) Set Failure cause
 */
class ErrorDetails extends AbstractModel
{
    /**
     * @var string User information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserId;

    /**
     * @var string Failure cause
     */
    public $Error;

    /**
     * @param string $UserId User information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Error Failure cause
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = $param["Error"];
        }
    }
}
