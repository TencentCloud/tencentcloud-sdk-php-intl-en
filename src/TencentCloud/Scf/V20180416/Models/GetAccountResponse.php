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
 * GetAccount response structure.
 *
 * @method UsageInfo getAccountUsage() Obtain Namespace usage information
 * @method void setAccountUsage(UsageInfo $AccountUsage) Set Namespace usage information
 * @method LimitsInfo getAccountLimit() Obtain Namespace limit information
 * @method void setAccountLimit(LimitsInfo $AccountLimit) Set Namespace limit information
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetAccountResponse extends AbstractModel
{
    /**
     * @var UsageInfo Namespace usage information
     */
    public $AccountUsage;

    /**
     * @var LimitsInfo Namespace limit information
     */
    public $AccountLimit;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param UsageInfo $AccountUsage Namespace usage information
     * @param LimitsInfo $AccountLimit Namespace limit information
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
        if (array_key_exists("AccountUsage",$param) and $param["AccountUsage"] !== null) {
            $this->AccountUsage = new UsageInfo();
            $this->AccountUsage->deserialize($param["AccountUsage"]);
        }

        if (array_key_exists("AccountLimit",$param) and $param["AccountLimit"] !== null) {
            $this->AccountLimit = new LimitsInfo();
            $this->AccountLimit->deserialize($param["AccountLimit"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
