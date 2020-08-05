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
 * CreateMediaLiveInput request structure.
 *
 * @method string getName() Obtain Media input name, which can contain 1-32 letters, digits, and underscores and must be unique at the region level.
 * @method void setName(string $Name) Set Media input name, which can contain 1-32 letters, digits, and underscores and must be unique at the region level.
 * @method string getType() Obtain Media input type.
Valid values: RTMP_PUSH/RTP_PUSH/UDP_PUSH/RTMP_PULL/HLS_PULL/MP4_PULL.
 * @method void setType(string $Type) Set Media input type.
Valid values: RTMP_PUSH/RTP_PUSH/UDP_PUSH/RTMP_PULL/HLS_PULL/MP4_PULL.
 * @method array getSecurityGroupIds() Obtain ID of the input security group to be bound.
Only one security group can be associated.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set ID of the input security group to be bound.
Only one security group can be associated.
 * @method array getInputSettings() Obtain Input settings information, one or two sets of which need to be configured for RTMP_PUSH/RTMP_PULL/HLS_PULL/MP4_PULL.
 * @method void setInputSettings(array $InputSettings) Set Input settings information, one or two sets of which need to be configured for RTMP_PUSH/RTMP_PULL/HLS_PULL/MP4_PULL.
 */
class CreateMediaLiveInputRequest extends AbstractModel
{
    /**
     * @var string Media input name, which can contain 1-32 letters, digits, and underscores and must be unique at the region level.
     */
    public $Name;

    /**
     * @var string Media input type.
Valid values: RTMP_PUSH/RTP_PUSH/UDP_PUSH/RTMP_PULL/HLS_PULL/MP4_PULL.
     */
    public $Type;

    /**
     * @var array ID of the input security group to be bound.
Only one security group can be associated.
     */
    public $SecurityGroupIds;

    /**
     * @var array Input settings information, one or two sets of which need to be configured for RTMP_PUSH/RTMP_PULL/HLS_PULL/MP4_PULL.
     */
    public $InputSettings;

    /**
     * @param string $Name Media input name, which can contain 1-32 letters, digits, and underscores and must be unique at the region level.
     * @param string $Type Media input type.
Valid values: RTMP_PUSH/RTP_PUSH/UDP_PUSH/RTMP_PULL/HLS_PULL/MP4_PULL.
     * @param array $SecurityGroupIds ID of the input security group to be bound.
Only one security group can be associated.
     * @param array $InputSettings Input settings information, one or two sets of which need to be configured for RTMP_PUSH/RTMP_PULL/HLS_PULL/MP4_PULL.
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

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
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
