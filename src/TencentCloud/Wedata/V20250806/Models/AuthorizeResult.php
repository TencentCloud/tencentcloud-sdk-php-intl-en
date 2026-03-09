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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Authorization result.
 *
 * @method PrivilegeResource getResource() Obtain Authorized resources.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResource(PrivilegeResource $Resource) Set Authorized resources.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getResult() Obtain Result
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResult(boolean $Result) Set Result
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReason() Obtain Reason.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReason(string $Reason) Set Reason.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AuthorizeResult extends AbstractModel
{
    /**
     * @var PrivilegeResource Authorized resources.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Resource;

    /**
     * @var boolean Result
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Result;

    /**
     * @var string Reason.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Reason;

    /**
     * @param PrivilegeResource $Resource Authorized resources.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Result Result
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Reason Reason.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new PrivilegeResource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
