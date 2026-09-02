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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskPredictCostQuota request structure.
 *
 * @method integer getTaskMode() Obtain <p>Task mode</p>
 * @method void setTaskMode(integer $TaskMode) Set <p>Task mode</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getRuleIDs() Obtain <p>Custom rules list</p>
 * @method void setRuleIDs(array $RuleIDs) Set <p>Custom rules list</p>
 * @method array getStandardIDs() Obtain <p>Standard ID</p>
 * @method void setStandardIDs(array $StandardIDs) Set <p>Standard ID</p>
 */
class DescribeTaskPredictCostQuotaRequest extends AbstractModel
{
    /**
     * @var integer <p>Task mode</p>
     */
    public $TaskMode;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Custom rules list</p>
     */
    public $RuleIDs;

    /**
     * @var array <p>Standard ID</p>
     */
    public $StandardIDs;

    /**
     * @param integer $TaskMode <p>Task mode</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param array $RuleIDs <p>Custom rules list</p>
     * @param array $StandardIDs <p>Standard ID</p>
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
        if (array_key_exists("TaskMode",$param) and $param["TaskMode"] !== null) {
            $this->TaskMode = $param["TaskMode"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("RuleIDs",$param) and $param["RuleIDs"] !== null) {
            $this->RuleIDs = $param["RuleIDs"];
        }

        if (array_key_exists("StandardIDs",$param) and $param["StandardIDs"] !== null) {
            $this->StandardIDs = $param["StandardIDs"];
        }
    }
}
