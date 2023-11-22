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
 * HarvestJob response info.
 *
 * @method string getID() Obtain HarvestJob ID, a globally unique identifier.
 * @method void setID(string $ID) Set HarvestJob ID, a globally unique identifier.
 * @method string getChannelName() Obtain The associated channel name.
 * @method void setChannelName(string $ChannelName) Set The associated channel name.
 * @method string getEndpointName() Obtain The associated endpoint name.
 * @method void setEndpointName(string $EndpointName) Set The associated endpoint name.
 * @method string getTimeFormat() Obtain Time format, supports the following types: 1. Epoch seconds 2. ISO-8601
 * @method void setTimeFormat(string $TimeFormat) Set Time format, supports the following types: 1. Epoch seconds 2. ISO-8601
 * @method string getStartTime() Obtain HarvestJob start time.
 * @method void setStartTime(string $StartTime) Set HarvestJob start time.
 * @method string getEndTime() Obtain HarvestJob end time.
 * @method void setEndTime(string $EndTime) Set HarvestJob end time.
 * @method string getDestination() Obtain The path where the recording file is stored in COS.
 * @method void setDestination(string $Destination) Set The path where the recording file is stored in COS.
 * @method string getManifest() Obtain The file name of the recording file stored in COS.
 * @method void setManifest(string $Manifest) Set The file name of the recording file stored in COS.
 * @method string getStatus() Obtain The task status is divided into running: Running, execution completed: Completed, and execution failure: Failed.
 * @method void setStatus(string $Status) Set The task status is divided into running: Running, execution completed: Completed, and execution failure: Failed.
 * @method string getErrMessage() Obtain HarvestJob error message.
 * @method void setErrMessage(string $ErrMessage) Set HarvestJob error message.
 * @method integer getCreateTime() Obtain HarvestJob creation time, timestamp in seconds.
 * @method void setCreateTime(integer $CreateTime) Set HarvestJob creation time, timestamp in seconds.
 * @method string getChannelId() Obtain The associated ChannelID.
 * @method void setChannelId(string $ChannelId) Set The associated ChannelID.
 * @method string getRegion() Obtain The region corresponding to the harvest job.
 * @method void setRegion(string $Region) Set The region corresponding to the harvest job.
 */
class HarvestJobResp extends AbstractModel
{
    /**
     * @var string HarvestJob ID, a globally unique identifier.
     */
    public $ID;

    /**
     * @var string The associated channel name.
     */
    public $ChannelName;

    /**
     * @var string The associated endpoint name.
     */
    public $EndpointName;

    /**
     * @var string Time format, supports the following types: 1. Epoch seconds 2. ISO-8601
     */
    public $TimeFormat;

    /**
     * @var string HarvestJob start time.
     */
    public $StartTime;

    /**
     * @var string HarvestJob end time.
     */
    public $EndTime;

    /**
     * @var string The path where the recording file is stored in COS.
     */
    public $Destination;

    /**
     * @var string The file name of the recording file stored in COS.
     */
    public $Manifest;

    /**
     * @var string The task status is divided into running: Running, execution completed: Completed, and execution failure: Failed.
     */
    public $Status;

    /**
     * @var string HarvestJob error message.
     */
    public $ErrMessage;

    /**
     * @var integer HarvestJob creation time, timestamp in seconds.
     */
    public $CreateTime;

    /**
     * @var string The associated ChannelID.
     */
    public $ChannelId;

    /**
     * @var string The region corresponding to the harvest job.
     */
    public $Region;

    /**
     * @param string $ID HarvestJob ID, a globally unique identifier.
     * @param string $ChannelName The associated channel name.
     * @param string $EndpointName The associated endpoint name.
     * @param string $TimeFormat Time format, supports the following types: 1. Epoch seconds 2. ISO-8601
     * @param string $StartTime HarvestJob start time.
     * @param string $EndTime HarvestJob end time.
     * @param string $Destination The path where the recording file is stored in COS.
     * @param string $Manifest The file name of the recording file stored in COS.
     * @param string $Status The task status is divided into running: Running, execution completed: Completed, and execution failure: Failed.
     * @param string $ErrMessage HarvestJob error message.
     * @param integer $CreateTime HarvestJob creation time, timestamp in seconds.
     * @param string $ChannelId The associated ChannelID.
     * @param string $Region The region corresponding to the harvest job.
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("EndpointName",$param) and $param["EndpointName"] !== null) {
            $this->EndpointName = $param["EndpointName"];
        }

        if (array_key_exists("TimeFormat",$param) and $param["TimeFormat"] !== null) {
            $this->TimeFormat = $param["TimeFormat"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Destination",$param) and $param["Destination"] !== null) {
            $this->Destination = $param["Destination"];
        }

        if (array_key_exists("Manifest",$param) and $param["Manifest"] !== null) {
            $this->Manifest = $param["Manifest"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrMessage",$param) and $param["ErrMessage"] !== null) {
            $this->ErrMessage = $param["ErrMessage"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
