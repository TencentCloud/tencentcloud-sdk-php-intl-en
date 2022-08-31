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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateZone request structure.
 *
 * @method string getName() Obtain Site name
 * @method void setName(string $Name) Set Site name
 * @method string getType() Obtain Access mode. Valid values:
- `full` (default): Access via NS
- `partial`: Access via CNAME
 * @method void setType(string $Type) Set Access mode. Valid values:
- `full` (default): Access via NS
- `partial`: Access via CNAME
 * @method boolean getJumpStart() Obtain Specifies whether to skip resolution record scanning
 * @method void setJumpStart(boolean $JumpStart) Set Specifies whether to skip resolution record scanning
 * @method array getTags() Obtain Resource tag
 * @method void setTags(array $Tags) Set Resource tag
 */
class CreateZoneRequest extends AbstractModel
{
    /**
     * @var string Site name
     */
    public $Name;

    /**
     * @var string Access mode. Valid values:
- `full` (default): Access via NS
- `partial`: Access via CNAME
     */
    public $Type;

    /**
     * @var boolean Specifies whether to skip resolution record scanning
     */
    public $JumpStart;

    /**
     * @var array Resource tag
     */
    public $Tags;

    /**
     * @param string $Name Site name
     * @param string $Type Access mode. Valid values:
- `full` (default): Access via NS
- `partial`: Access via CNAME
     * @param boolean $JumpStart Specifies whether to skip resolution record scanning
     * @param array $Tags Resource tag
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("JumpStart",$param) and $param["JumpStart"] !== null) {
            $this->JumpStart = $param["JumpStart"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
