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
 * CreateStreamPackageHarvestJob request structure.
 *
 * @method string getID() Obtain Task ID, a globally unique identifier, ID can contain up to 128 characters. Supported characters are numbers, letters, underscores (_), and dashes (-).
 * @method void setID(string $ID) Set Task ID, a globally unique identifier, ID can contain up to 128 characters. Supported characters are numbers, letters, underscores (_), and dashes (-).
 * @method string getChannelName() Obtain The associated channel name.
 * @method void setChannelName(string $ChannelName) Set The associated channel name.
 * @method string getEndpointName() Obtain The associated endpoint name, StreamPackage only supports harvesting content from HLS and DASH endpoints that have startover turned on.
 * @method void setEndpointName(string $EndpointName) Set The associated endpoint name, StreamPackage only supports harvesting content from HLS and DASH endpoints that have startover turned on.
 * @method string getTimeFormat() Obtain Time format, supports the following types: 
1. Epoch seconds 
2. ISO-8601.
 * @method void setTimeFormat(string $TimeFormat) Set Time format, supports the following types: 
1. Epoch seconds 
2. ISO-8601.
 * @method string getStartTime() Obtain Task start time supports two formats for TimeFormat input: 
1. Epoch seconds: The input box is a numeric input box, and only positive integers can be entered. 
2. ISO-8601: The supported format is ISO time, for example: 2023-08-01T10:00:00+08:00.
 * @method void setStartTime(string $StartTime) Set Task start time supports two formats for TimeFormat input: 
1. Epoch seconds: The input box is a numeric input box, and only positive integers can be entered. 
2. ISO-8601: The supported format is ISO time, for example: 2023-08-01T10:00:00+08:00.
 * @method string getEndTime() Obtain Task end time supports two formats for TimeFormat input: 
1. Epoch seconds: The input box is a numeric input box, and only positive integers can be entered. 
2. ISO-8601: The supported format is ISO time, for example: 2023-08-01T10:00:00+08:00.
 * @method void setEndTime(string $EndTime) Set Task end time supports two formats for TimeFormat input: 
1. Epoch seconds: The input box is a numeric input box, and only positive integers can be entered. 
2. ISO-8601: The supported format is ISO time, for example: 2023-08-01T10:00:00+08:00.
 * @method string getDestination() Obtain The COS bucket address where the recording file is stored in COS, format: https://{Bucket_name}-{AppId}.cos.{Region}.myqcloud.com/.
 * @method void setDestination(string $Destination) Set The COS bucket address where the recording file is stored in COS, format: https://{Bucket_name}-{AppId}.cos.{Region}.myqcloud.com/.
 * @method string getManifest() Obtain The path in the cos bucket and identifier for the parent manifest for the live-to-VOD asset, fotmat: {path 1}/xxx/{path n}/{name}.m3u8.
 * @method void setManifest(string $Manifest) Set The path in the cos bucket and identifier for the parent manifest for the live-to-VOD asset, fotmat: {path 1}/xxx/{path n}/{name}.m3u8.
 */
class CreateStreamPackageHarvestJobRequest extends AbstractModel
{
    /**
     * @var string Task ID, a globally unique identifier, ID can contain up to 128 characters. Supported characters are numbers, letters, underscores (_), and dashes (-).
     */
    public $ID;

    /**
     * @var string The associated channel name.
     */
    public $ChannelName;

    /**
     * @var string The associated endpoint name, StreamPackage only supports harvesting content from HLS and DASH endpoints that have startover turned on.
     */
    public $EndpointName;

    /**
     * @var string Time format, supports the following types: 
1. Epoch seconds 
2. ISO-8601.
     */
    public $TimeFormat;

    /**
     * @var string Task start time supports two formats for TimeFormat input: 
1. Epoch seconds: The input box is a numeric input box, and only positive integers can be entered. 
2. ISO-8601: The supported format is ISO time, for example: 2023-08-01T10:00:00+08:00.
     */
    public $StartTime;

    /**
     * @var string Task end time supports two formats for TimeFormat input: 
1. Epoch seconds: The input box is a numeric input box, and only positive integers can be entered. 
2. ISO-8601: The supported format is ISO time, for example: 2023-08-01T10:00:00+08:00.
     */
    public $EndTime;

    /**
     * @var string The COS bucket address where the recording file is stored in COS, format: https://{Bucket_name}-{AppId}.cos.{Region}.myqcloud.com/.
     */
    public $Destination;

    /**
     * @var string The path in the cos bucket and identifier for the parent manifest for the live-to-VOD asset, fotmat: {path 1}/xxx/{path n}/{name}.m3u8.
     */
    public $Manifest;

    /**
     * @param string $ID Task ID, a globally unique identifier, ID can contain up to 128 characters. Supported characters are numbers, letters, underscores (_), and dashes (-).
     * @param string $ChannelName The associated channel name.
     * @param string $EndpointName The associated endpoint name, StreamPackage only supports harvesting content from HLS and DASH endpoints that have startover turned on.
     * @param string $TimeFormat Time format, supports the following types: 
1. Epoch seconds 
2. ISO-8601.
     * @param string $StartTime Task start time supports two formats for TimeFormat input: 
1. Epoch seconds: The input box is a numeric input box, and only positive integers can be entered. 
2. ISO-8601: The supported format is ISO time, for example: 2023-08-01T10:00:00+08:00.
     * @param string $EndTime Task end time supports two formats for TimeFormat input: 
1. Epoch seconds: The input box is a numeric input box, and only positive integers can be entered. 
2. ISO-8601: The supported format is ISO time, for example: 2023-08-01T10:00:00+08:00.
     * @param string $Destination The COS bucket address where the recording file is stored in COS, format: https://{Bucket_name}-{AppId}.cos.{Region}.myqcloud.com/.
     * @param string $Manifest The path in the cos bucket and identifier for the parent manifest for the live-to-VOD asset, fotmat: {path 1}/xxx/{path n}/{name}.m3u8.
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
    }
}
