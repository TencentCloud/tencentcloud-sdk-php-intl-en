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
 * ModifyStreamLiveInput request structure.
 *
 * @method string getId() Obtain Input ID
 * @method void setId(string $Id) Set Input ID
 * @method string getName() Obtain Input name, which can contain 1-32 case-sensitive letters, digits, and underscores and must be unique at the region level
 * @method void setName(string $Name) Set Input name, which can contain 1-32 case-sensitive letters, digits, and underscores and must be unique at the region level
 * @method array getSecurityGroupIds() Obtain List of the IDs of the security groups to attach
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set List of the IDs of the security groups to attach
 * @method array getInputSettings() Obtain Input settings. 
For the type:
`RTMP_PUSH`, `RTMP_PULL`, `HLS_PULL`,`RTSP_PULL`,`SRT_PULL` or `MP4_PULL`, 1 or 2 inputs of the corresponding type can be configured.
For the type:
`SRT_PUSH`, 0 or 2 inputs of the corresponding type can be configured.
This parameter can be left empty for RTP_PUSH and UDP_PUSH inputs.

Note: If this parameter is not specified or empty, the original input settings will be used.
 * @method void setInputSettings(array $InputSettings) Set Input settings. 
For the type:
`RTMP_PUSH`, `RTMP_PULL`, `HLS_PULL`,`RTSP_PULL`,`SRT_PULL` or `MP4_PULL`, 1 or 2 inputs of the corresponding type can be configured.
For the type:
`SRT_PUSH`, 0 or 2 inputs of the corresponding type can be configured.
This parameter can be left empty for RTP_PUSH and UDP_PUSH inputs.

Note: If this parameter is not specified or empty, the original input settings will be used.
 */
class ModifyStreamLiveInputRequest extends AbstractModel
{
    /**
     * @var string Input ID
     */
    public $Id;

    /**
     * @var string Input name, which can contain 1-32 case-sensitive letters, digits, and underscores and must be unique at the region level
     */
    public $Name;

    /**
     * @var array List of the IDs of the security groups to attach
     */
    public $SecurityGroupIds;

    /**
     * @var array Input settings. 
For the type:
`RTMP_PUSH`, `RTMP_PULL`, `HLS_PULL`,`RTSP_PULL`,`SRT_PULL` or `MP4_PULL`, 1 or 2 inputs of the corresponding type can be configured.
For the type:
`SRT_PUSH`, 0 or 2 inputs of the corresponding type can be configured.
This parameter can be left empty for RTP_PUSH and UDP_PUSH inputs.

Note: If this parameter is not specified or empty, the original input settings will be used.
     */
    public $InputSettings;

    /**
     * @param string $Id Input ID
     * @param string $Name Input name, which can contain 1-32 case-sensitive letters, digits, and underscores and must be unique at the region level
     * @param array $SecurityGroupIds List of the IDs of the security groups to attach
     * @param array $InputSettings Input settings. 
For the type:
`RTMP_PUSH`, `RTMP_PULL`, `HLS_PULL`,`RTSP_PULL`,`SRT_PULL` or `MP4_PULL`, 1 or 2 inputs of the corresponding type can be configured.
For the type:
`SRT_PUSH`, 0 or 2 inputs of the corresponding type can be configured.
This parameter can be left empty for RTP_PUSH and UDP_PUSH inputs.

Note: If this parameter is not specified or empty, the original input settings will be used.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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
