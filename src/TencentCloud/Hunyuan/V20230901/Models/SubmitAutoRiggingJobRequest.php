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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitAutoRiggingJob request structure.
 *
 * @method InputFile3D getFile3D() Obtain <p>3D Character Model File: Generates a 3D character animation based on the provided source model.<br>The character model must be in a standard T-Pose (a standing posture with both arms extended horizontally). You must select exactly one of the following 3D model file options; reference specifications:<br>fbx: 3D model file in FBX format; file size must not exceed 60 MB.<br>obj: 3D model file in OBJ format; file size must not exceed 60 MB.</p>
 * @method void setFile3D(InputFile3D $File3D) Set <p>3D Character Model File: Generates a 3D character animation based on the provided source model.<br>The character model must be in a standard T-Pose (a standing posture with both arms extended horizontally). You must select exactly one of the following 3D model file options; reference specifications:<br>fbx: 3D model file in FBX format; file size must not exceed 60 MB.<br>obj: 3D model file in OBJ format; file size must not exceed 60 MB.</p>
 * @method integer getMotionType() Obtain <p>Preset Action Types (Reference Values):</p><ol><li>Roundhouse Kick </li><li>Left Hook </li><li>Charged Attack </li><li>Charged Punch </li><li>Two-Hit Combo </li><li>Two-Hit Combo - 2 </li><li>Backstep </li><li>Hit Reaction </li><li>Hit Reaction - 2 </li><li>Hit Reaction - 3 </li><li>Knockdown - 1 </li><li>Knockdown - 2 </li><li>Landing </li><li>Dejection </li><li>Throat Slash </li><li>Jab </li><li>Continuous Strikes </li><li>Kick </li><li>Side Kick </li><li>Tai Chi </li><li>Backflip </li><li>Crouching Turn </li><li>Walk - 1 </li><li>Walk - 2 </li><li>Walk - 3 </li><li>Idle - 1 </li><li>Idle - 2 </li><li>Street Dance </li><li>The Twist </li><li>Turn Left </li><li>Turn Right </li><li>Jog </li><li>Jog - 2 </li><li>Run </li><li>Sprint - 1 </li><li>Sprint - 2 </li><li>Sprint - 3 </li><li>Jump (In Place) - 1 </li><li>Sliding Tackle </li><li>Long Jump (Forward) </li><li>Long Jump (Forward) - 2 </li><li>Vault </li><li>Intimidation </li><li>Fall Forward </li><li>Turn Right </li><li>Jump (In Place) - 2 </li><li>Turn Around </li><li>Send Shockwave</li></ol>
 * @method void setMotionType(integer $MotionType) Set <p>Preset Action Types (Reference Values):</p><ol><li>Roundhouse Kick </li><li>Left Hook </li><li>Charged Attack </li><li>Charged Punch </li><li>Two-Hit Combo </li><li>Two-Hit Combo - 2 </li><li>Backstep </li><li>Hit Reaction </li><li>Hit Reaction - 2 </li><li>Hit Reaction - 3 </li><li>Knockdown - 1 </li><li>Knockdown - 2 </li><li>Landing </li><li>Dejection </li><li>Throat Slash </li><li>Jab </li><li>Continuous Strikes </li><li>Kick </li><li>Side Kick </li><li>Tai Chi </li><li>Backflip </li><li>Crouching Turn </li><li>Walk - 1 </li><li>Walk - 2 </li><li>Walk - 3 </li><li>Idle - 1 </li><li>Idle - 2 </li><li>Street Dance </li><li>The Twist </li><li>Turn Left </li><li>Turn Right </li><li>Jog </li><li>Jog - 2 </li><li>Run </li><li>Sprint - 1 </li><li>Sprint - 2 </li><li>Sprint - 3 </li><li>Jump (In Place) - 1 </li><li>Sliding Tackle </li><li>Long Jump (Forward) </li><li>Long Jump (Forward) - 2 </li><li>Vault </li><li>Intimidation </li><li>Fall Forward </li><li>Turn Right </li><li>Jump (In Place) - 2 </li><li>Turn Around </li><li>Send Shockwave</li></ol>
 */
class SubmitAutoRiggingJobRequest extends AbstractModel
{
    /**
     * @var InputFile3D <p>3D Character Model File: Generates a 3D character animation based on the provided source model.<br>The character model must be in a standard T-Pose (a standing posture with both arms extended horizontally). You must select exactly one of the following 3D model file options; reference specifications:<br>fbx: 3D model file in FBX format; file size must not exceed 60 MB.<br>obj: 3D model file in OBJ format; file size must not exceed 60 MB.</p>
     */
    public $File3D;

    /**
     * @var integer <p>Preset Action Types (Reference Values):</p><ol><li>Roundhouse Kick </li><li>Left Hook </li><li>Charged Attack </li><li>Charged Punch </li><li>Two-Hit Combo </li><li>Two-Hit Combo - 2 </li><li>Backstep </li><li>Hit Reaction </li><li>Hit Reaction - 2 </li><li>Hit Reaction - 3 </li><li>Knockdown - 1 </li><li>Knockdown - 2 </li><li>Landing </li><li>Dejection </li><li>Throat Slash </li><li>Jab </li><li>Continuous Strikes </li><li>Kick </li><li>Side Kick </li><li>Tai Chi </li><li>Backflip </li><li>Crouching Turn </li><li>Walk - 1 </li><li>Walk - 2 </li><li>Walk - 3 </li><li>Idle - 1 </li><li>Idle - 2 </li><li>Street Dance </li><li>The Twist </li><li>Turn Left </li><li>Turn Right </li><li>Jog </li><li>Jog - 2 </li><li>Run </li><li>Sprint - 1 </li><li>Sprint - 2 </li><li>Sprint - 3 </li><li>Jump (In Place) - 1 </li><li>Sliding Tackle </li><li>Long Jump (Forward) </li><li>Long Jump (Forward) - 2 </li><li>Vault </li><li>Intimidation </li><li>Fall Forward </li><li>Turn Right </li><li>Jump (In Place) - 2 </li><li>Turn Around </li><li>Send Shockwave</li></ol>
     */
    public $MotionType;

    /**
     * @param InputFile3D $File3D <p>3D Character Model File: Generates a 3D character animation based on the provided source model.<br>The character model must be in a standard T-Pose (a standing posture with both arms extended horizontally). You must select exactly one of the following 3D model file options; reference specifications:<br>fbx: 3D model file in FBX format; file size must not exceed 60 MB.<br>obj: 3D model file in OBJ format; file size must not exceed 60 MB.</p>
     * @param integer $MotionType <p>Preset Action Types (Reference Values):</p><ol><li>Roundhouse Kick </li><li>Left Hook </li><li>Charged Attack </li><li>Charged Punch </li><li>Two-Hit Combo </li><li>Two-Hit Combo - 2 </li><li>Backstep </li><li>Hit Reaction </li><li>Hit Reaction - 2 </li><li>Hit Reaction - 3 </li><li>Knockdown - 1 </li><li>Knockdown - 2 </li><li>Landing </li><li>Dejection </li><li>Throat Slash </li><li>Jab </li><li>Continuous Strikes </li><li>Kick </li><li>Side Kick </li><li>Tai Chi </li><li>Backflip </li><li>Crouching Turn </li><li>Walk - 1 </li><li>Walk - 2 </li><li>Walk - 3 </li><li>Idle - 1 </li><li>Idle - 2 </li><li>Street Dance </li><li>The Twist </li><li>Turn Left </li><li>Turn Right </li><li>Jog </li><li>Jog - 2 </li><li>Run </li><li>Sprint - 1 </li><li>Sprint - 2 </li><li>Sprint - 3 </li><li>Jump (In Place) - 1 </li><li>Sliding Tackle </li><li>Long Jump (Forward) </li><li>Long Jump (Forward) - 2 </li><li>Vault </li><li>Intimidation </li><li>Fall Forward </li><li>Turn Right </li><li>Jump (In Place) - 2 </li><li>Turn Around </li><li>Send Shockwave</li></ol>
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
        if (array_key_exists("File3D",$param) and $param["File3D"] !== null) {
            $this->File3D = new InputFile3D();
            $this->File3D->deserialize($param["File3D"]);
        }

        if (array_key_exists("MotionType",$param) and $param["MotionType"] !== null) {
            $this->MotionType = $param["MotionType"];
        }
    }
}
