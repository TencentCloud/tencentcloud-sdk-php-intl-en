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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VOD remux task informations.
 *
 * @method string getId() Obtain VOD remux task ID.
 * @method void setId(string $Id) Set VOD remux task ID.
 * @method string getName() Obtain VOD remux task name.
 * @method void setName(string $Name) Set VOD remux task name.
 * @method string getType() Obtain VOD remux task type.
 * @method void setType(string $Type) Set VOD remux task type.
 * @method InputFileInfo getInputFileInfo() Obtain VOD remux task input file information.
 * @method void setInputFileInfo(InputFileInfo $InputFileInfo) Set VOD remux task input file information.
 * @method OutputStorage getOutputStorage() Obtain VOD remux task output storage information.
 * @method void setOutputStorage(OutputStorage $OutputStorage) Set VOD remux task output storage information.
 * @method integer getCreateTime() Obtain VOD remux task created time.
 * @method void setCreateTime(integer $CreateTime) Set VOD remux task created time.
 * @method integer getUpdateTime() Obtain VOD remux task updated time.
 * @method void setUpdateTime(integer $UpdateTime) Set VOD remux task updated time.
 * @method string getState() Obtain VOD remux task's state.
 * @method void setState(string $State) Set VOD remux task's state.
 * @method string getErrorMsg() Obtain VOD remux task's error message.
 * @method void setErrorMsg(string $ErrorMsg) Set VOD remux task's error message.
 * @method integer getStartTime() Obtain VOD remux task process started time.
 * @method void setStartTime(integer $StartTime) Set VOD remux task process started time.
 * @method integer getEndTime() Obtain VOD remux task process end time.
 * @method void setEndTime(integer $EndTime) Set VOD remux task process end time.
 * @method string getRegion() Obtain Common Params. For more information, please see the list of regions supported by the product.
 * @method void setRegion(string $Region) Set Common Params. For more information, please see the list of regions supported by the product.
 */
class VodRemuxTaskInfo extends AbstractModel
{
    /**
     * @var string VOD remux task ID.
     */
    public $Id;

    /**
     * @var string VOD remux task name.
     */
    public $Name;

    /**
     * @var string VOD remux task type.
     */
    public $Type;

    /**
     * @var InputFileInfo VOD remux task input file information.
     */
    public $InputFileInfo;

    /**
     * @var OutputStorage VOD remux task output storage information.
     */
    public $OutputStorage;

    /**
     * @var integer VOD remux task created time.
     */
    public $CreateTime;

    /**
     * @var integer VOD remux task updated time.
     */
    public $UpdateTime;

    /**
     * @var string VOD remux task's state.
     */
    public $State;

    /**
     * @var string VOD remux task's error message.
     */
    public $ErrorMsg;

    /**
     * @var integer VOD remux task process started time.
     */
    public $StartTime;

    /**
     * @var integer VOD remux task process end time.
     */
    public $EndTime;

    /**
     * @var string Common Params. For more information, please see the list of regions supported by the product.
     */
    public $Region;

    /**
     * @param string $Id VOD remux task ID.
     * @param string $Name VOD remux task name.
     * @param string $Type VOD remux task type.
     * @param InputFileInfo $InputFileInfo VOD remux task input file information.
     * @param OutputStorage $OutputStorage VOD remux task output storage information.
     * @param integer $CreateTime VOD remux task created time.
     * @param integer $UpdateTime VOD remux task updated time.
     * @param string $State VOD remux task's state.
     * @param string $ErrorMsg VOD remux task's error message.
     * @param integer $StartTime VOD remux task process started time.
     * @param integer $EndTime VOD remux task process end time.
     * @param string $Region Common Params. For more information, please see the list of regions supported by the product.
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InputFileInfo",$param) and $param["InputFileInfo"] !== null) {
            $this->InputFileInfo = new InputFileInfo();
            $this->InputFileInfo->deserialize($param["InputFileInfo"]);
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new OutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
