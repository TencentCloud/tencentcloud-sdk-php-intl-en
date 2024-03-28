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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Number information.
 *
 * @method string getNumber() Obtain Number.
 * @method void setNumber(string $Number) Set Number.
 * @method array getCallOutSkillGroupIds() Obtain Bound outbound call skill group.
 * @method void setCallOutSkillGroupIds(array $CallOutSkillGroupIds) Set Bound outbound call skill group.
 * @method integer getState() Obtain Number status, 1-normal, 2-disabled due to overdue payment, 4-disabled by the administrator, 5-disabled due to violation.
 * @method void setState(integer $State) Set Number status, 1-normal, 2-disabled due to overdue payment, 4-disabled by the administrator, 5-disabled due to violation.
 */
class NumberInfo extends AbstractModel
{
    /**
     * @var string Number.
     */
    public $Number;

    /**
     * @var array Bound outbound call skill group.
     */
    public $CallOutSkillGroupIds;

    /**
     * @var integer Number status, 1-normal, 2-disabled due to overdue payment, 4-disabled by the administrator, 5-disabled due to violation.
     */
    public $State;

    /**
     * @param string $Number Number.
     * @param array $CallOutSkillGroupIds Bound outbound call skill group.
     * @param integer $State Number status, 1-normal, 2-disabled due to overdue payment, 4-disabled by the administrator, 5-disabled due to violation.
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
        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("CallOutSkillGroupIds",$param) and $param["CallOutSkillGroupIds"] !== null) {
            $this->CallOutSkillGroupIds = $param["CallOutSkillGroupIds"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
