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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSafeAuthFlagColl response structure.
 *
 * @method LoginActionFlag getLoginFlag() Obtain Login protection settings
 * @method void setLoginFlag(LoginActionFlag $LoginFlag) Set Login protection settings
 * @method LoginActionFlag getActionFlag() Obtain Sensitive operation protection settings
 * @method void setActionFlag(LoginActionFlag $ActionFlag) Set Sensitive operation protection settings
 * @method OffsiteFlag getOffsiteFlag() Obtain Suspicious login location protection settings
 * @method void setOffsiteFlag(OffsiteFlag $OffsiteFlag) Set Suspicious login location protection settings
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeSafeAuthFlagCollResponse extends AbstractModel
{
    /**
     * @var LoginActionFlag Login protection settings
     */
    public $LoginFlag;

    /**
     * @var LoginActionFlag Sensitive operation protection settings
     */
    public $ActionFlag;

    /**
     * @var OffsiteFlag Suspicious login location protection settings
     */
    public $OffsiteFlag;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param LoginActionFlag $LoginFlag Login protection settings
     * @param LoginActionFlag $ActionFlag Sensitive operation protection settings
     * @param OffsiteFlag $OffsiteFlag Suspicious login location protection settings
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("LoginFlag",$param) and $param["LoginFlag"] !== null) {
            $this->LoginFlag = new LoginActionFlag();
            $this->LoginFlag->deserialize($param["LoginFlag"]);
        }

        if (array_key_exists("ActionFlag",$param) and $param["ActionFlag"] !== null) {
            $this->ActionFlag = new LoginActionFlag();
            $this->ActionFlag->deserialize($param["ActionFlag"]);
        }

        if (array_key_exists("OffsiteFlag",$param) and $param["OffsiteFlag"] !== null) {
            $this->OffsiteFlag = new OffsiteFlag();
            $this->OffsiteFlag->deserialize($param["OffsiteFlag"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
