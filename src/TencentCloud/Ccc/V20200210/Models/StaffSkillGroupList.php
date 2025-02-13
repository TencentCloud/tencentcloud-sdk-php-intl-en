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
 * Bound skill group list for agents.
 *
 * @method integer getSkillGroupId() Obtain Skill group id.
 * @method void setSkillGroupId(integer $SkillGroupId) Set Skill group id.
 * @method integer getPriority() Obtain Priority of the agent in the skill group (1 is the highest, 5 is the lowest, 3 by default).
 * @method void setPriority(integer $Priority) Set Priority of the agent in the skill group (1 is the highest, 5 is the lowest, 3 by default).
 */
class StaffSkillGroupList extends AbstractModel
{
    /**
     * @var integer Skill group id.
     */
    public $SkillGroupId;

    /**
     * @var integer Priority of the agent in the skill group (1 is the highest, 5 is the lowest, 3 by default).
     */
    public $Priority;

    /**
     * @param integer $SkillGroupId Skill group id.
     * @param integer $Priority Priority of the agent in the skill group (1 is the highest, 5 is the lowest, 3 by default).
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
        if (array_key_exists("SkillGroupId",$param) and $param["SkillGroupId"] !== null) {
            $this->SkillGroupId = $param["SkillGroupId"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
