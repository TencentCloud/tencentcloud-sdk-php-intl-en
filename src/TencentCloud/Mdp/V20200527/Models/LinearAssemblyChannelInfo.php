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
 * Linearly assembled channel information.
 *
 * @method string getName() Obtain Linear assembly channel name.
 * @method void setName(string $Name) Set Linear assembly channel name.
 * @method string getTier() Obtain Define the characteristics of the channel. Standard supports live broadcast and on-demand sources, while Basic only supports on-demand source arrangement.
 * @method void setTier(string $Tier) Set Define the characteristics of the channel. Standard supports live broadcast and on-demand sources, while Basic only supports on-demand source arrangement.
 * @method string getPlaybackMode() Obtain The source switching mode in the channel is divided into Linear and Loop. Live broadcast only supports Linear.
 * @method void setPlaybackMode(string $PlaybackMode) Set The source switching mode in the channel is divided into Linear and Loop. Live broadcast only supports Linear.
 * @method TimeShiftInfo getTimeShiftConf() Obtain Time shift configuration, vod is valid.
 * @method void setTimeShiftConf(TimeShiftInfo $TimeShiftConf) Set Time shift configuration, vod is valid.
 * @method SlateInfo getSlateConf() Obtain Spacer configuration.
 * @method void setSlateConf(SlateInfo $SlateConf) Set Spacer configuration.
 * @method array getOutputs() Obtain output information.
 * @method void setOutputs(array $Outputs) Set output information.
 * @method array getAttachedPrograms() Obtain List of programs bound to this channel.
 * @method void setAttachedPrograms(array $AttachedPrograms) Set List of programs bound to this channel.
 * @method array getProgramSchedules() Obtain program information.
 * @method void setProgramSchedules(array $ProgramSchedules) Set program information.
 * @method string getId() Obtain ID.
 * @method void setId(string $Id) Set ID.
 * @method string getRegion() Obtain Region.
 * @method void setRegion(string $Region) Set Region.
 * @method string getState() Obtain State.
 * @method void setState(string $State) Set State.
 * @method boolean getTimeShiftEnable() Obtain Time shift on switch.
 * @method void setTimeShiftEnable(boolean $TimeShiftEnable) Set Time shift on switch.
 * @method integer getCreateTime() Obtain Channel creation time, unix seconds timestamp.
 * @method void setCreateTime(integer $CreateTime) Set Channel creation time, unix seconds timestamp.
 */
class LinearAssemblyChannelInfo extends AbstractModel
{
    /**
     * @var string Linear assembly channel name.
     */
    public $Name;

    /**
     * @var string Define the characteristics of the channel. Standard supports live broadcast and on-demand sources, while Basic only supports on-demand source arrangement.
     */
    public $Tier;

    /**
     * @var string The source switching mode in the channel is divided into Linear and Loop. Live broadcast only supports Linear.
     */
    public $PlaybackMode;

    /**
     * @var TimeShiftInfo Time shift configuration, vod is valid.
     */
    public $TimeShiftConf;

    /**
     * @var SlateInfo Spacer configuration.
     */
    public $SlateConf;

    /**
     * @var array output information.
     */
    public $Outputs;

    /**
     * @var array List of programs bound to this channel.
     */
    public $AttachedPrograms;

    /**
     * @var array program information.
     */
    public $ProgramSchedules;

    /**
     * @var string ID.
     */
    public $Id;

    /**
     * @var string Region.
     */
    public $Region;

    /**
     * @var string State.
     */
    public $State;

    /**
     * @var boolean Time shift on switch.
     */
    public $TimeShiftEnable;

    /**
     * @var integer Channel creation time, unix seconds timestamp.
     */
    public $CreateTime;

    /**
     * @param string $Name Linear assembly channel name.
     * @param string $Tier Define the characteristics of the channel. Standard supports live broadcast and on-demand sources, while Basic only supports on-demand source arrangement.
     * @param string $PlaybackMode The source switching mode in the channel is divided into Linear and Loop. Live broadcast only supports Linear.
     * @param TimeShiftInfo $TimeShiftConf Time shift configuration, vod is valid.
     * @param SlateInfo $SlateConf Spacer configuration.
     * @param array $Outputs output information.
     * @param array $AttachedPrograms List of programs bound to this channel.
     * @param array $ProgramSchedules program information.
     * @param string $Id ID.
     * @param string $Region Region.
     * @param string $State State.
     * @param boolean $TimeShiftEnable Time shift on switch.
     * @param integer $CreateTime Channel creation time, unix seconds timestamp.
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

        if (array_key_exists("AttachedPrograms",$param) and $param["AttachedPrograms"] !== null) {
            $this->AttachedPrograms = $param["AttachedPrograms"];
        }

        if (array_key_exists("ProgramSchedules",$param) and $param["ProgramSchedules"] !== null) {
            $this->ProgramSchedules = [];
            foreach ($param["ProgramSchedules"] as $key => $value){
                $obj = new ProgramScheduleInfo();
                $obj->deserialize($value);
                array_push($this->ProgramSchedules, $obj);
            }
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("TimeShiftEnable",$param) and $param["TimeShiftEnable"] !== null) {
            $this->TimeShiftEnable = $param["TimeShiftEnable"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
