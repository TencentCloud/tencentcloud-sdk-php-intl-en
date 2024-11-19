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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyStreamPackageLinearAssemblyChannel request structure.
 *
 * @method string getId() Obtain Channel ID.
 * @method void setId(string $Id) Set Channel ID.
 * @method string getName() Obtain Modified name.
 * @method void setName(string $Name) Set Modified name.
 * @method string getTier() Obtain Define the characteristics of the channel. Standard supports live broadcast and on-demand sources, while Basic only supports on-demand source arrangement.
 * @method void setTier(string $Tier) Set Define the characteristics of the channel. Standard supports live broadcast and on-demand sources, while Basic only supports on-demand source arrangement.
 * @method string getPlaybackMode() Obtain The source switching mode in the channel is divided into Linear and Loop. Live broadcast only supports Linear.
Optional values: Linear, Loop.
 * @method void setPlaybackMode(string $PlaybackMode) Set The source switching mode in the channel is divided into Linear and Loop. Live broadcast only supports Linear.
Optional values: Linear, Loop.
 * @method boolean getTimeShiftEnable() Obtain Time shift on switch.
 * @method void setTimeShiftEnable(boolean $TimeShiftEnable) Set Time shift on switch.
 * @method TimeShiftInfo getTimeShiftConf() Obtain Time shift configuration.
 * @method void setTimeShiftConf(TimeShiftInfo $TimeShiftConf) Set Time shift configuration.
 * @method SlateInfo getSlateConf() Obtain padding configuration.
 * @method void setSlateConf(SlateInfo $SlateConf) Set padding configuration.
 * @method array getOutputs() Obtain Output configuration.
 * @method void setOutputs(array $Outputs) Set Output configuration.
 */
class ModifyStreamPackageLinearAssemblyChannelRequest extends AbstractModel
{
    /**
     * @var string Channel ID.
     */
    public $Id;

    /**
     * @var string Modified name.
     */
    public $Name;

    /**
     * @var string Define the characteristics of the channel. Standard supports live broadcast and on-demand sources, while Basic only supports on-demand source arrangement.
     */
    public $Tier;

    /**
     * @var string The source switching mode in the channel is divided into Linear and Loop. Live broadcast only supports Linear.
Optional values: Linear, Loop.
     */
    public $PlaybackMode;

    /**
     * @var boolean Time shift on switch.
     */
    public $TimeShiftEnable;

    /**
     * @var TimeShiftInfo Time shift configuration.
     */
    public $TimeShiftConf;

    /**
     * @var SlateInfo padding configuration.
     */
    public $SlateConf;

    /**
     * @var array Output configuration.
     */
    public $Outputs;

    /**
     * @param string $Id Channel ID.
     * @param string $Name Modified name.
     * @param string $Tier Define the characteristics of the channel. Standard supports live broadcast and on-demand sources, while Basic only supports on-demand source arrangement.
     * @param string $PlaybackMode The source switching mode in the channel is divided into Linear and Loop. Live broadcast only supports Linear.
Optional values: Linear, Loop.
     * @param boolean $TimeShiftEnable Time shift on switch.
     * @param TimeShiftInfo $TimeShiftConf Time shift configuration.
     * @param SlateInfo $SlateConf padding configuration.
     * @param array $Outputs Output configuration.
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

        if (array_key_exists("Tier",$param) and $param["Tier"] !== null) {
            $this->Tier = $param["Tier"];
        }

        if (array_key_exists("PlaybackMode",$param) and $param["PlaybackMode"] !== null) {
            $this->PlaybackMode = $param["PlaybackMode"];
        }

        if (array_key_exists("TimeShiftEnable",$param) and $param["TimeShiftEnable"] !== null) {
            $this->TimeShiftEnable = $param["TimeShiftEnable"];
        }

        if (array_key_exists("TimeShiftConf",$param) and $param["TimeShiftConf"] !== null) {
            $this->TimeShiftConf = new TimeShiftInfo();
            $this->TimeShiftConf->deserialize($param["TimeShiftConf"]);
        }

        if (array_key_exists("SlateConf",$param) and $param["SlateConf"] !== null) {
            $this->SlateConf = new SlateInfo();
            $this->SlateConf->deserialize($param["SlateConf"]);
        }

        if (array_key_exists("Outputs",$param) and $param["Outputs"] !== null) {
            $this->Outputs = [];
            foreach ($param["Outputs"] as $key => $value){
                $obj = new OutputInfo();
                $obj->deserialize($value);
                array_push($this->Outputs, $obj);
            }
        }
    }
}
