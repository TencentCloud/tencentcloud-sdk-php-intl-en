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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyToken response structure.
 *
 * @method string getMatchToken() Obtain Token that has been set successfully.
 * @method void setMatchToken(string $MatchToken) Set Token that has been set successfully.
 * @method integer getCompatibleSpan() Obtain The time period during which GPM will continuously push the original token in seconds to the user when the token is replaced.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setCompatibleSpan(integer $CompatibleSpan) Set The time period during which GPM will continuously push the original token in seconds to the user when the token is replaced.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ModifyTokenResponse extends AbstractModel
{
    /**
     * @var string Token that has been set successfully.
     */
    public $MatchToken;

    /**
     * @var integer The time period during which GPM will continuously push the original token in seconds to the user when the token is replaced.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $CompatibleSpan;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $MatchToken Token that has been set successfully.
     * @param integer $CompatibleSpan The time period during which GPM will continuously push the original token in seconds to the user when the token is replaced.
Note: this field may return `null`, indicating that no valid value is obtained.
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
        if (array_key_exists("MatchToken",$param) and $param["MatchToken"] !== null) {
            $this->MatchToken = $param["MatchToken"];
        }

        if (array_key_exists("CompatibleSpan",$param) and $param["CompatibleSpan"] !== null) {
            $this->CompatibleSpan = $param["CompatibleSpan"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
