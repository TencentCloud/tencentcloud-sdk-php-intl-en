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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Input information.
 *
 * @method string getRegion() Obtain Input region.
 * @method void setRegion(string $Region) Set Input region.
 * @method string getId() Obtain Input ID.
 * @method void setId(string $Id) Set Input ID.
 * @method string getName() Obtain Input name.
 * @method void setName(string $Name) Set Input name.
 * @method string getType() Obtain Input type.
 * @method void setType(string $Type) Set Input type.
 * @method array getSecurityGroupIds() Obtain Array of security groups associated with input.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Array of security groups associated with input.
 * @method array getAttachedChannels() Obtain Array of channels associated with input.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAttachedChannels(array $AttachedChannels) Set Array of channels associated with input.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getInputSettings() Obtain Input configuration array.
 * @method void setInputSettings(array $InputSettings) Set Input configuration array.
 */
class InputInfo extends AbstractModel
{
    /**
     * @var string Input region.
     */
    public $Region;

    /**
     * @var string Input ID.
     */
    public $Id;

    /**
     * @var string Input name.
     */
    public $Name;

    /**
     * @var string Input type.
     */
    public $Type;

    /**
     * @var array Array of security groups associated with input.
     */
    public $SecurityGroupIds;

    /**
     * @var array Array of channels associated with input.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AttachedChannels;

    /**
     * @var array Input configuration array.
     */
    public $InputSettings;

    /**
     * @param string $Region Input region.
     * @param string $Id Input ID.
     * @param string $Name Input name.
     * @param string $Type Input type.
     * @param array $SecurityGroupIds Array of security groups associated with input.
     * @param array $AttachedChannels Array of channels associated with input.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $InputSettings Input configuration array.
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("AttachedChannels",$param) and $param["AttachedChannels"] !== null) {
            $this->AttachedChannels = $param["AttachedChannels"];
        }

        if (array_key_exists("InputSettings",$param) and $param["InputSettings"] !== null) {
            $this->InputSettings = [];
            foreach ($param["InputSettings"] as $key => $value){
                $obj = new InputSettingInfo();
                $obj->deserialize($value);
                array_push($this->InputSettings, $obj);
            }
        }
    }
}
