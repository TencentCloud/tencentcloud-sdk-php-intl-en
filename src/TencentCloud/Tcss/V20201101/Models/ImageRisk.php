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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of a high-risk behavior in the image
 *
 * @method integer getBehavior() Obtain High-risk behavior
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBehavior(integer $Behavior) Set High-risk behavior
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getType() Obtain Type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(integer $Type) Set Type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLevel() Obtain Risk level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLevel(string $Level) Set Risk level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDesc() Obtain Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDesc(string $Desc) Set Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstructionContent() Obtain Solution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstructionContent(string $InstructionContent) Set Solution
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ImageRisk extends AbstractModel
{
    /**
     * @var integer High-risk behavior
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Behavior;

    /**
     * @var integer Type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Risk level
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Level;

    /**
     * @var string Description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Desc;

    /**
     * @var string Solution
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstructionContent;

    /**
     * @param integer $Behavior High-risk behavior
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Type Type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Level Risk level
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Desc Description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstructionContent Solution
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Behavior",$param) and $param["Behavior"] !== null) {
            $this->Behavior = $param["Behavior"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("InstructionContent",$param) and $param["InstructionContent"] !== null) {
            $this->InstructionContent = $param["InstructionContent"];
        }
    }
}
