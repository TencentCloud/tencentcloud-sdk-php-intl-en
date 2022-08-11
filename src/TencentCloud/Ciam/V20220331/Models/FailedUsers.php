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
 * Failed user
 *
 * @method string getFailedUserIdentification() Obtain ID of the failed user
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFailedUserIdentification(string $FailedUserIdentification) Set ID of the failed user
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFailedReason() Obtain Failure cause for user import
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFailedReason(string $FailedReason) Set Failure cause for user import
Note: This field may return null, indicating that no valid values can be obtained.
 */
class FailedUsers extends AbstractModel
{
    /**
     * @var string ID of the failed user
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FailedUserIdentification;

    /**
     * @var string Failure cause for user import
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FailedReason;

    /**
     * @param string $FailedUserIdentification ID of the failed user
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FailedReason Failure cause for user import
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
        if (array_key_exists("FailedUserIdentification",$param) and $param["FailedUserIdentification"] !== null) {
            $this->FailedUserIdentification = $param["FailedUserIdentification"];
        }

        if (array_key_exists("FailedReason",$param) and $param["FailedReason"] !== null) {
            $this->FailedReason = $param["FailedReason"];
        }
    }
}
