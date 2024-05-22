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
 * CreateStreamPackageChannelEndpoint request structure.
 *
 * @method string getId() Obtain Channel ID
 * @method void setId(string $Id) Set Channel ID
 * @method string getName() Obtain Endpoint name, which must contain 1 to 32 characters and supports digits, letters, and underscores
 * @method void setName(string $Name) Set Endpoint name, which must contain 1 to 32 characters and supports digits, letters, and underscores
 * @method EndpointAuthInfo getAuthInfo() Obtain Authentication information
 * @method void setAuthInfo(EndpointAuthInfo $AuthInfo) Set Authentication information
 * @method string getProtocol() Obtain Endpoint protocol type, supports HLS, DASH, CMAF (only HLS type input can create CMAF Endpoint).
 * @method void setProtocol(string $Protocol) Set Endpoint protocol type, supports HLS, DASH, CMAF (only HLS type input can create CMAF Endpoint).
 * @method string getManifest() Obtain Mainifest name, default is main.
 * @method void setManifest(string $Manifest) Set Mainifest name, default is main.
 * @method boolean getTimeShiftEnable() Obtain Whether to turn on the TimeShift function, true: on, false: off, the default is off.
 * @method void setTimeShiftEnable(boolean $TimeShiftEnable) Set Whether to turn on the TimeShift function, true: on, false: off, the default is off.
 * @method integer getTimeShiftDuration() Obtain The number of days to look back in TimeShift, up to 30 days is supported.
 * @method void setTimeShiftDuration(integer $TimeShiftDuration) Set The number of days to look back in TimeShift, up to 30 days is supported.
 */
class CreateStreamPackageChannelEndpointRequest extends AbstractModel
{
    /**
     * @var string Channel ID
     */
    public $Id;

    /**
     * @var string Endpoint name, which must contain 1 to 32 characters and supports digits, letters, and underscores
     */
    public $Name;

    /**
     * @var EndpointAuthInfo Authentication information
     */
    public $AuthInfo;

    /**
     * @var string Endpoint protocol type, supports HLS, DASH, CMAF (only HLS type input can create CMAF Endpoint).
     */
    public $Protocol;

    /**
     * @var string Mainifest name, default is main.
     */
    public $Manifest;

    /**
     * @var boolean Whether to turn on the TimeShift function, true: on, false: off, the default is off.
     */
    public $TimeShiftEnable;

    /**
     * @var integer The number of days to look back in TimeShift, up to 30 days is supported.
     */
    public $TimeShiftDuration;

    /**
     * @param string $Id Channel ID
     * @param string $Name Endpoint name, which must contain 1 to 32 characters and supports digits, letters, and underscores
     * @param EndpointAuthInfo $AuthInfo Authentication information
     * @param string $Protocol Endpoint protocol type, supports HLS, DASH, CMAF (only HLS type input can create CMAF Endpoint).
     * @param string $Manifest Mainifest name, default is main.
     * @param boolean $TimeShiftEnable Whether to turn on the TimeShift function, true: on, false: off, the default is off.
     * @param integer $TimeShiftDuration The number of days to look back in TimeShift, up to 30 days is supported.
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

        if (array_key_exists("AuthInfo",$param) and $param["AuthInfo"] !== null) {
            $this->AuthInfo = new EndpointAuthInfo();
            $this->AuthInfo->deserialize($param["AuthInfo"]);
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Manifest",$param) and $param["Manifest"] !== null) {
            $this->Manifest = $param["Manifest"];
        }

        if (array_key_exists("TimeShiftEnable",$param) and $param["TimeShiftEnable"] !== null) {
            $this->TimeShiftEnable = $param["TimeShiftEnable"];
        }

        if (array_key_exists("TimeShiftDuration",$param) and $param["TimeShiftDuration"] !== null) {
            $this->TimeShiftDuration = $param["TimeShiftDuration"];
        }
    }
}
