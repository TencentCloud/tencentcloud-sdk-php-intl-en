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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeTokenPlanTeamOrder request structure.
 *
 * @method string getTeamId() Obtain Package ID. You can obtain it through the DescribeTokenPlanList API.
 * @method void setTeamId(string $TeamId) Set Package ID. You can obtain it through the DescribeTokenPlanList API.
 * @method integer getNewCreditOrToken() Obtain Limit of the new specification after upgrade. For the enterprise package type, it refers to the point limit. For the enterprise-auto package type, it refers to the Token count. Must be greater than the current limit.
 * @method void setNewCreditOrToken(integer $NewCreditOrToken) Set Limit of the new specification after upgrade. For the enterprise package type, it refers to the point limit. For the enterprise-auto package type, it refers to the Token count. Must be greater than the current limit.
 */
class UpgradeTokenPlanTeamOrderRequest extends AbstractModel
{
    /**
     * @var string Package ID. You can obtain it through the DescribeTokenPlanList API.
     */
    public $TeamId;

    /**
     * @var integer Limit of the new specification after upgrade. For the enterprise package type, it refers to the point limit. For the enterprise-auto package type, it refers to the Token count. Must be greater than the current limit.
     */
    public $NewCreditOrToken;

    /**
     * @param string $TeamId Package ID. You can obtain it through the DescribeTokenPlanList API.
     * @param integer $NewCreditOrToken Limit of the new specification after upgrade. For the enterprise package type, it refers to the point limit. For the enterprise-auto package type, it refers to the Token count. Must be greater than the current limit.
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
        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("NewCreditOrToken",$param) and $param["NewCreditOrToken"] !== null) {
            $this->NewCreditOrToken = $param["NewCreditOrToken"];
        }
    }
}
