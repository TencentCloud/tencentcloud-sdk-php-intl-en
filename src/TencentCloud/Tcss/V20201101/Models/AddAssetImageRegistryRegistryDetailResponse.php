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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddAssetImageRegistryRegistryDetail response structure.
 *
 * @method string getHealthCheckErr() Obtain Connection error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHealthCheckErr(string $HealthCheckErr) Set Connection error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNameRepeatErr() Obtain Name error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNameRepeatErr(string $NameRepeatErr) Set Name error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRegistryId() Obtain Unique repository ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegistryId(integer $RegistryId) Set Unique repository ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class AddAssetImageRegistryRegistryDetailResponse extends AbstractModel
{
    /**
     * @var string Connection error message
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HealthCheckErr;

    /**
     * @var string Name error message
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NameRepeatErr;

    /**
     * @var integer Unique repository ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegistryId;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $HealthCheckErr Connection error message
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NameRepeatErr Name error message
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RegistryId Unique repository ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("HealthCheckErr",$param) and $param["HealthCheckErr"] !== null) {
            $this->HealthCheckErr = $param["HealthCheckErr"];
        }

        if (array_key_exists("NameRepeatErr",$param) and $param["NameRepeatErr"] !== null) {
            $this->NameRepeatErr = $param["NameRepeatErr"];
        }

        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
