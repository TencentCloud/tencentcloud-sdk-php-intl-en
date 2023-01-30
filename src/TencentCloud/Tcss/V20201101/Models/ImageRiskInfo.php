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
 * Image risk details
 *
 * @method integer getBehavior() Obtain Behavior
 * @method void setBehavior(integer $Behavior) Set Behavior
 * @method integer getType() Obtain Type
 * @method void setType(integer $Type) Set Type
 * @method integer getLevel() Obtain Level
 * @method void setLevel(integer $Level) Set Level
 * @method string getDesc() Obtain Details
 * @method void setDesc(string $Desc) Set Details
 * @method string getInstructionContent() Obtain Solution
 * @method void setInstructionContent(string $InstructionContent) Set Solution
 */
class ImageRiskInfo extends AbstractModel
{
    /**
     * @var integer Behavior
     */
    public $Behavior;

    /**
     * @var integer Type
     */
    public $Type;

    /**
     * @var integer Level
     */
    public $Level;

    /**
     * @var string Details
     */
    public $Desc;

    /**
     * @var string Solution
     */
    public $InstructionContent;

    /**
     * @param integer $Behavior Behavior
     * @param integer $Type Type
     * @param integer $Level Level
     * @param string $Desc Details
     * @param string $InstructionContent Solution
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
