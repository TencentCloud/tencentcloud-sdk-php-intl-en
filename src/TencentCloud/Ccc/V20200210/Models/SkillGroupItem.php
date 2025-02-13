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
 * Skill group information.
 *
 * @method integer getSkillGroupId() Obtain Skill group id.
 * @method void setSkillGroupId(integer $SkillGroupId) Set Skill group id.
 * @method string getSkillGroupName() Obtain Skill group name.
 * @method void setSkillGroupName(string $SkillGroupName) Set Skill group name.
 * @method integer getPriority() Obtain Priority.
 * @method void setPriority(integer $Priority) Set Priority.
 * @method string getType() Obtain Type: im, tel, all (full media).
 * @method void setType(string $Type) Set Type: im, tel, all (full media).
 */
class SkillGroupItem extends AbstractModel
{
    /**
     * @var integer Skill group id.
     */
    public $SkillGroupId;

    /**
     * @var string Skill group name.
     */
    public $SkillGroupName;

    /**
     * @var integer Priority.
     */
    public $Priority;

    /**
     * @var string Type: im, tel, all (full media).
     */
    public $Type;

    /**
     * @param integer $SkillGroupId Skill group id.
     * @param string $SkillGroupName Skill group name.
     * @param integer $Priority Priority.
     * @param string $Type Type: im, tel, all (full media).
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

        if (array_key_exists("SkillGroupName",$param) and $param["SkillGroupName"] !== null) {
            $this->SkillGroupName = $param["SkillGroupName"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
