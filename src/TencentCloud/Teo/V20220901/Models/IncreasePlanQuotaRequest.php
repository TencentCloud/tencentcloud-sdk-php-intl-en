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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IncreasePlanQuota request structure.
 *
 * @method string getPlanId() Obtain Plan ID, formatted as edgeone-2unuvzjmmn2q.
 * @method void setPlanId(string $PlanId) Set Plan ID, formatted as edgeone-2unuvzjmmn2q.
 * @method string getQuotaType() Obtain The types of new plan quotas available include:<li> site: Number of sites;</li><li> precise_access_control_rule: the number of rules under "Web Protection - Custom Rules - Precision Matching Policy";</li><li> rate_limiting_rule: the number of rules under "Web Protection - Rate Limiting - Precision Rate Limiting Module". </li>
 * @method void setQuotaType(string $QuotaType) Set The types of new plan quotas available include:<li> site: Number of sites;</li><li> precise_access_control_rule: the number of rules under "Web Protection - Custom Rules - Precision Matching Policy";</li><li> rate_limiting_rule: the number of rules under "Web Protection - Rate Limiting - Precision Rate Limiting Module". </li>
 * @method integer getQuotaNumber() Obtain Number of new quotas. The maximum number of quotas that can be added at one time is 100.
 * @method void setQuotaNumber(integer $QuotaNumber) Set Number of new quotas. The maximum number of quotas that can be added at one time is 100.
 */
class IncreasePlanQuotaRequest extends AbstractModel
{
    /**
     * @var string Plan ID, formatted as edgeone-2unuvzjmmn2q.
     */
    public $PlanId;

    /**
     * @var string The types of new plan quotas available include:<li> site: Number of sites;</li><li> precise_access_control_rule: the number of rules under "Web Protection - Custom Rules - Precision Matching Policy";</li><li> rate_limiting_rule: the number of rules under "Web Protection - Rate Limiting - Precision Rate Limiting Module". </li>
     */
    public $QuotaType;

    /**
     * @var integer Number of new quotas. The maximum number of quotas that can be added at one time is 100.
     */
    public $QuotaNumber;

    /**
     * @param string $PlanId Plan ID, formatted as edgeone-2unuvzjmmn2q.
     * @param string $QuotaType The types of new plan quotas available include:<li> site: Number of sites;</li><li> precise_access_control_rule: the number of rules under "Web Protection - Custom Rules - Precision Matching Policy";</li><li> rate_limiting_rule: the number of rules under "Web Protection - Rate Limiting - Precision Rate Limiting Module". </li>
     * @param integer $QuotaNumber Number of new quotas. The maximum number of quotas that can be added at one time is 100.
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
        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("QuotaType",$param) and $param["QuotaType"] !== null) {
            $this->QuotaType = $param["QuotaType"];
        }

        if (array_key_exists("QuotaNumber",$param) and $param["QuotaNumber"] !== null) {
            $this->QuotaNumber = $param["QuotaNumber"];
        }
    }
}
