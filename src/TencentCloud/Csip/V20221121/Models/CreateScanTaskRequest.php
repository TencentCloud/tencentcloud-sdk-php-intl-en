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
 * CreateScanTask request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method integer getTaskMode() Obtain <p>Detection mode</p>
 * @method void setTaskMode(integer $TaskMode) Set <p>Detection mode</p>
 * @method array getRuleIDs() Obtain <p>Rule collection</p>
 * @method void setRuleIDs(array $RuleIDs) Set <p>Rule collection</p>
 * @method array getStandardIDs() Obtain <p>Specification ID</p>
 * @method void setStandardIDs(array $StandardIDs) Set <p>Specification ID</p>
 */
class CreateScanTaskRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>Detection mode</p>
     */
    public $TaskMode;

    /**
     * @var array <p>Rule collection</p>
     */
    public $RuleIDs;

    /**
     * @var array <p>Specification ID</p>
     */
    public $StandardIDs;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param integer $TaskMode <p>Detection mode</p>
     * @param array $RuleIDs <p>Rule collection</p>
     * @param array $StandardIDs <p>Specification ID</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("TaskMode",$param) and $param["TaskMode"] !== null) {
            $this->TaskMode = $param["TaskMode"];
        }

        if (array_key_exists("RuleIDs",$param) and $param["RuleIDs"] !== null) {
            $this->RuleIDs = $param["RuleIDs"];
        }

        if (array_key_exists("StandardIDs",$param) and $param["StandardIDs"] !== null) {
            $this->StandardIDs = $param["StandardIDs"];
        }
    }
}
