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
 * The hit rule information
 *
 * @method integer getRuleId() Obtain The rule ID.
 * @method void setRuleId(integer $RuleId) Set The rule ID.
 * @method string getRuleTypeName() Obtain The rule type.
 * @method void setRuleTypeName(string $RuleTypeName) Set The rule type.
 * @method string getAction() Obtain Action. Values:
<li>`trans`: Allow;</li>
<li>`alg`: Algorithm challenge;</li>
<li>`drop`: Discard;</li>
<li>`ban`: Block the source IP;</li>
<li>`redirect`: Redirect;</li>
<li>`page`: Return to the specified page;</li>
<li>`monitor`: Observe.</li>
 * @method void setAction(string $Action) Set Action. Values:
<li>`trans`: Allow;</li>
<li>`alg`: Algorithm challenge;</li>
<li>`drop`: Discard;</li>
<li>`ban`: Block the source IP;</li>
<li>`redirect`: Redirect;</li>
<li>`page`: Return to the specified page;</li>
<li>`monitor`: Observe.</li>
 * @method integer getHitTime() Obtain The hit time recorded in seconds using UNIX timestamp.
 * @method void setHitTime(integer $HitTime) Set The hit time recorded in seconds using UNIX timestamp.
 * @method integer getRequestNum() Obtain The number of requests.
 * @method void setRequestNum(integer $RequestNum) Set The number of requests.
 * @method string getDescription() Obtain The rule description.
 * @method void setDescription(string $Description) Set The rule description.
 * @method string getDomain() Obtain The subdomain name.
 * @method void setDomain(string $Domain) Set The subdomain name.
 */
class SecHitRuleInfo extends AbstractModel
{
    /**
     * @var integer The rule ID.
     */
    public $RuleId;

    /**
     * @var string The rule type.
     */
    public $RuleTypeName;

    /**
     * @var string Action. Values:
<li>`trans`: Allow;</li>
<li>`alg`: Algorithm challenge;</li>
<li>`drop`: Discard;</li>
<li>`ban`: Block the source IP;</li>
<li>`redirect`: Redirect;</li>
<li>`page`: Return to the specified page;</li>
<li>`monitor`: Observe.</li>
     */
    public $Action;

    /**
     * @var integer The hit time recorded in seconds using UNIX timestamp.
     */
    public $HitTime;

    /**
     * @var integer The number of requests.
     */
    public $RequestNum;

    /**
     * @var string The rule description.
     */
    public $Description;

    /**
     * @var string The subdomain name.
     */
    public $Domain;

    /**
     * @param integer $RuleId The rule ID.
     * @param string $RuleTypeName The rule type.
     * @param string $Action Action. Values:
<li>`trans`: Allow;</li>
<li>`alg`: Algorithm challenge;</li>
<li>`drop`: Discard;</li>
<li>`ban`: Block the source IP;</li>
<li>`redirect`: Redirect;</li>
<li>`page`: Return to the specified page;</li>
<li>`monitor`: Observe.</li>
     * @param integer $HitTime The hit time recorded in seconds using UNIX timestamp.
     * @param integer $RequestNum The number of requests.
     * @param string $Description The rule description.
     * @param string $Domain The subdomain name.
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleTypeName",$param) and $param["RuleTypeName"] !== null) {
            $this->RuleTypeName = $param["RuleTypeName"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("HitTime",$param) and $param["HitTime"] !== null) {
            $this->HitTime = $param["HitTime"];
        }

        if (array_key_exists("RequestNum",$param) and $param["RequestNum"] !== null) {
            $this->RequestNum = $param["RequestNum"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
