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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Call forwarding destination.
 *
 * @method integer getType() Obtain Call forwarding target type. valid values: 1 (agent), 2 (skill group), 3 (extension).
 * @method void setType(integer $Type) Set Call forwarding target type. valid values: 1 (agent), 2 (skill group), 3 (extension).
 * @method string getStaffUserId() Obtain Specifies the agent account when the call forwarding target is set to agent and Type is 1.
 * @method void setStaffUserId(string $StaffUserId) Set Specifies the agent account when the call forwarding target is set to agent and Type is 1.
 * @method integer getSkillGroupId() Obtain Specifies the ID of the skill group as the call forwarding target. fill when Type is 2.
 * @method void setSkillGroupId(integer $SkillGroupId) Set Specifies the ID of the skill group as the call forwarding target. fill when Type is 2.
 * @method string getExtension() Obtain The account to which the call is forwarded is an extension. fill when Type is 3.
 * @method void setExtension(string $Extension) Set The account to which the call is forwarded is an extension. fill when Type is 3.
 */
class ForwardingTarget extends AbstractModel
{
    /**
     * @var integer Call forwarding target type. valid values: 1 (agent), 2 (skill group), 3 (extension).
     */
    public $Type;

    /**
     * @var string Specifies the agent account when the call forwarding target is set to agent and Type is 1.
     */
    public $StaffUserId;

    /**
     * @var integer Specifies the ID of the skill group as the call forwarding target. fill when Type is 2.
     */
    public $SkillGroupId;

    /**
     * @var string The account to which the call is forwarded is an extension. fill when Type is 3.
     */
    public $Extension;

    /**
     * @param integer $Type Call forwarding target type. valid values: 1 (agent), 2 (skill group), 3 (extension).
     * @param string $StaffUserId Specifies the agent account when the call forwarding target is set to agent and Type is 1.
     * @param integer $SkillGroupId Specifies the ID of the skill group as the call forwarding target. fill when Type is 2.
     * @param string $Extension The account to which the call is forwarded is an extension. fill when Type is 3.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("StaffUserId",$param) and $param["StaffUserId"] !== null) {
            $this->StaffUserId = $param["StaffUserId"];
        }

        if (array_key_exists("SkillGroupId",$param) and $param["SkillGroupId"] !== null) {
            $this->SkillGroupId = $param["SkillGroupId"];
        }

        if (array_key_exists("Extension",$param) and $param["Extension"] !== null) {
            $this->Extension = $param["Extension"];
        }
    }
}
