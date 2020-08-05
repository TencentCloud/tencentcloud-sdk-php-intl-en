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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom layer-7 CC policy
 *
 * @method integer getPeriod() Obtain Reference period in seconds. Valid values: [10, 30, 60]
 * @method void setPeriod(integer $Period) Set Reference period in seconds. Valid values: [10, 30, 60]
 * @method integer getReqNumber() Obtain Number of access requests. Value range: [1-10000]
 * @method void setReqNumber(integer $ReqNumber) Set Number of access requests. Value range: [1-10000]
 * @method string getAction() Obtain Action take. Valid values: ["alg" (CAPTCHA), "drop" (blocking)]
 * @method void setAction(string $Action) Set Action take. Valid values: ["alg" (CAPTCHA), "drop" (blocking)]
 * @method integer getExeDuration() Obtain Execution duration in seconds. Valid range: [1-900]
 * @method void setExeDuration(integer $ExeDuration) Set Execution duration in seconds. Valid range: [1-900]
 */
class CCRuleConfig extends AbstractModel
{
    /**
     * @var integer Reference period in seconds. Valid values: [10, 30, 60]
     */
    public $Period;

    /**
     * @var integer Number of access requests. Value range: [1-10000]
     */
    public $ReqNumber;

    /**
     * @var string Action take. Valid values: ["alg" (CAPTCHA), "drop" (blocking)]
     */
    public $Action;

    /**
     * @var integer Execution duration in seconds. Valid range: [1-900]
     */
    public $ExeDuration;

    /**
     * @param integer $Period Reference period in seconds. Valid values: [10, 30, 60]
     * @param integer $ReqNumber Number of access requests. Value range: [1-10000]
     * @param string $Action Action take. Valid values: ["alg" (CAPTCHA), "drop" (blocking)]
     * @param integer $ExeDuration Execution duration in seconds. Valid range: [1-900]
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("ReqNumber",$param) and $param["ReqNumber"] !== null) {
            $this->ReqNumber = $param["ReqNumber"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("ExeDuration",$param) and $param["ExeDuration"] !== null) {
            $this->ExeDuration = $param["ExeDuration"];
        }
    }
}
