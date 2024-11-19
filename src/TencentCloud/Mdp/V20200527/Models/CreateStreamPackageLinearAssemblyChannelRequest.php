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
 * CreateStreamPackageLinearAssemblyChannel request structure.
 *
 * @method string getName() Obtain Channel name.
 * @method void setName(string $Name) Set Channel name.
 * @method string getTier() Obtain Define the characteristics of the channel. Standard supports live broadcast and on-demand sources. Basic only supports on-demand source arrangement. Optional values: Standard and Basic.
 * @method void setTier(string $Tier) Set Define the characteristics of the channel. Standard supports live broadcast and on-demand sources. Basic only supports on-demand source arrangement. Optional values: Standard and Basic.
 * @method string getPlaybackMode() Obtain The source switching modes in the channel are divided into Linear and Loop. Basic only supports Linear, and Standatd supports both.
Optional values: Linear, Standatd.
 * @method void setPlaybackMode(string $PlaybackMode) Set The source switching modes in the channel are divided into Linear and Loop. Basic only supports Linear, and Standatd supports both.
Optional values: Linear, Standatd.
 * @method boolean getTimeShiftEnable() Obtain Time shift enable switch, only valid when Tier is Standard.
 * @method void setTimeShiftEnable(boolean $TimeShiftEnable) Set Time shift enable switch, only valid when Tier is Standard.
 * @method TimeShiftInfo getTimeShiftConf() Obtain Time shift configuration, effective when the time shift switch is turned on.
 * @method void setTimeShiftConf(TimeShiftInfo $TimeShiftConf) Set Time shift configuration, effective when the time shift switch is turned on.
 * @method SlateInfo getSlateConf() Obtain Spacer configuration is only valid when PlaybackMode is Linear.
 * @method void setSlateConf(SlateInfo $SlateConf) Set Spacer configuration is only valid when PlaybackMode is Linear.
 * @method array getOutputs() Obtain Output configuration.
 * @method void setOutputs(array $Outputs) Set Output configuration.
 */
class CreateStreamPackageLinearAssemblyChannelRequest extends AbstractModel
{
    /**
     * @var string Channel name.
     */
    public $Name;

    /**
     * @var string Define the characteristics of the channel. Standard supports live broadcast and on-demand sources. Basic only supports on-demand source arrangement. Optional values: Standard and Basic.
     */
    public $Tier;

    /**
     * @var string The source switching modes in the channel are divided into Linear and Loop. Basic only supports Linear, and Standatd supports both.
Optional values: Linear, Standatd.
     */
    public $PlaybackMode;

    /**
     * @var boolean Time shift enable switch, only valid when Tier is Standard.
     */
    public $TimeShiftEnable;

    /**
     * @var TimeShiftInfo Time shift configuration, effective when the time shift switch is turned on.
     */
    public $TimeShiftConf;

    /**
     * @var SlateInfo Spacer configuration is only valid when PlaybackMode is Linear.
     */
    public $SlateConf;

    /**
     * @var array Output configuration.
     */
    public $Outputs;

    /**
     * @param string $Name Channel name.
     * @param string $Tier Define the characteristics of the channel. Standard supports live broadcast and on-demand sources. Basic only supports on-demand source arrangement. Optional values: Standard and Basic.
     * @param string $PlaybackMode The source switching modes in the channel are divided into Linear and Loop. Basic only supports Linear, and Standatd supports both.
Optional values: Linear, Standatd.
     * @param boolean $TimeShiftEnable Time shift enable switch, only valid when Tier is Standard.
     * @param TimeShiftInfo $TimeShiftConf Time shift configuration, effective when the time shift switch is turned on.
     * @param SlateInfo $SlateConf Spacer configuration is only valid when PlaybackMode is Linear.
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
                $obj = new OutputReq();
                $obj->deserialize($value);
                array_push($this->Outputs, $obj);
            }
        }
    }
}
