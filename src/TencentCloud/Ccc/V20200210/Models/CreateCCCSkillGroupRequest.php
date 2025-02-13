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
 * CreateCCCSkillGroup request structure.
 *
 * @method integer getSdkAppId() Obtain Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method string getSkillGroupName() Obtain Skill group name.
 * @method void setSkillGroupName(string $SkillGroupName) Set Skill group name.
 * @method integer getSkillGroupType() Obtain Skill group type 0-cell phone, 1-online, 3-audio, 4-video.
 * @method void setSkillGroupType(integer $SkillGroupType) Set Skill group type 0-cell phone, 1-online, 3-audio, 4-video.
 * @method integer getMaxConcurrency() Obtain The maximum number of people received by the skill group (the maximum number of people that one agent in this skill group can receive) is set to 1 by default. if the skill group type is online, the maximum can be set to one or more.
2. if the skill group type is phone, audio, or video, then the reception limit must be 1.
 * @method void setMaxConcurrency(integer $MaxConcurrency) Set The maximum number of people received by the skill group (the maximum number of people that one agent in this skill group can receive) is set to 1 by default. if the skill group type is online, the maximum can be set to one or more.
2. if the skill group type is phone, audio, or video, then the reception limit must be 1.
 */
class CreateCCCSkillGroupRequest extends AbstractModel
{
    /**
     * @var integer Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var string Skill group name.
     */
    public $SkillGroupName;

    /**
     * @var integer Skill group type 0-cell phone, 1-online, 3-audio, 4-video.
     */
    public $SkillGroupType;

    /**
     * @var integer The maximum number of people received by the skill group (the maximum number of people that one agent in this skill group can receive) is set to 1 by default. if the skill group type is online, the maximum can be set to one or more.
2. if the skill group type is phone, audio, or video, then the reception limit must be 1.
     */
    public $MaxConcurrency;

    /**
     * @param integer $SdkAppId Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     * @param string $SkillGroupName Skill group name.
     * @param integer $SkillGroupType Skill group type 0-cell phone, 1-online, 3-audio, 4-video.
     * @param integer $MaxConcurrency The maximum number of people received by the skill group (the maximum number of people that one agent in this skill group can receive) is set to 1 by default. if the skill group type is online, the maximum can be set to one or more.
2. if the skill group type is phone, audio, or video, then the reception limit must be 1.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("SkillGroupName",$param) and $param["SkillGroupName"] !== null) {
            $this->SkillGroupName = $param["SkillGroupName"];
        }

        if (array_key_exists("SkillGroupType",$param) and $param["SkillGroupType"] !== null) {
            $this->SkillGroupType = $param["SkillGroupType"];
        }

        if (array_key_exists("MaxConcurrency",$param) and $param["MaxConcurrency"] !== null) {
            $this->MaxConcurrency = $param["MaxConcurrency"];
        }
    }
}
