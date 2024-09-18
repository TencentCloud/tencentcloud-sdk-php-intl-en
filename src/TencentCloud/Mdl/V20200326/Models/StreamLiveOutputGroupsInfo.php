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
 * Channel output group information
 *
 * @method string getName() Obtain Output group name, which can contain 1-32 case-sensitive letters, digits, and underscores and must be unique at the channel level
 * @method void setName(string $Name) Set Output group name, which can contain 1-32 case-sensitive letters, digits, and underscores and must be unique at the channel level
 * @method string getType() Obtain Output protocol
Valid values: `HLS`, `DASH`, `HLS_ARCHIVE`, `DASH_ARCHIVE`,`HLS_STREAM_PACKAGE`, `DASH_STREAM_PACKAGE`, `FRAME_CAPTURE`,`RTP`,`RTMP`.
 * @method void setType(string $Type) Set Output protocol
Valid values: `HLS`, `DASH`, `HLS_ARCHIVE`, `DASH_ARCHIVE`,`HLS_STREAM_PACKAGE`, `DASH_STREAM_PACKAGE`, `FRAME_CAPTURE`,`RTP`,`RTMP`.
 * @method array getOutputs() Obtain Output information
If the type is RTMP or RTP, only one output is allowed; if it is HLS or DASH, 1-10 outputs are allowed.
 * @method void setOutputs(array $Outputs) Set Output information
If the type is RTMP or RTP, only one output is allowed; if it is HLS or DASH, 1-10 outputs are allowed.
 * @method array getDestinations() Obtain Relay destinations. Quantity: [1, 2]
 * @method void setDestinations(array $Destinations) Set Relay destinations. Quantity: [1, 2]
 * @method HlsRemuxSettingsInfo getHlsRemuxSettings() Obtain HLS protocol configuration information, which takes effect only for HLS/HLS_ARCHIVE/HLS_STREAM_PACKAGE outputs.
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setHlsRemuxSettings(HlsRemuxSettingsInfo $HlsRemuxSettings) Set HLS protocol configuration information, which takes effect only for HLS/HLS_ARCHIVE/HLS_STREAM_PACKAGE outputs.
Note: this field may return `null`, indicating that no valid value was found.
 * @method DrmSettingsInfo getDrmSettings() Obtain DRM configuration information
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setDrmSettings(DrmSettingsInfo $DrmSettings) Set DRM configuration information
Note: this field may return `null`, indicating that no valid value was found.
 * @method DashRemuxSettingsInfo getDashRemuxSettings() Obtain DASH protocol configuration information, which takes effect only for DASH/DASH_ARCHIVE outputs
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setDashRemuxSettings(DashRemuxSettingsInfo $DashRemuxSettings) Set DASH protocol configuration information, which takes effect only for DASH/DASH_ARCHIVE outputs
Note: this field may return `null`, indicating that no valid value was found.
 * @method StreamPackageSettingsInfo getStreamPackageSettings() Obtain StreamPackage configuration information, which is required if the output type is StreamPackage
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setStreamPackageSettings(StreamPackageSettingsInfo $StreamPackageSettings) Set StreamPackage configuration information, which is required if the output type is StreamPackage
Note: this field may return `null`, indicating that no valid value was found.
 * @method TimeShiftSettingsInfo getTimeShiftSettings() Obtain Time-shift configuration information
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTimeShiftSettings(TimeShiftSettingsInfo $TimeShiftSettings) Set Time-shift configuration information
Note: This field may return `null`, indicating that no valid value was found.
 */
class StreamLiveOutputGroupsInfo extends AbstractModel
{
    /**
     * @var string Output group name, which can contain 1-32 case-sensitive letters, digits, and underscores and must be unique at the channel level
     */
    public $Name;

    /**
     * @var string Output protocol
Valid values: `HLS`, `DASH`, `HLS_ARCHIVE`, `DASH_ARCHIVE`,`HLS_STREAM_PACKAGE`, `DASH_STREAM_PACKAGE`, `FRAME_CAPTURE`,`RTP`,`RTMP`.
     */
    public $Type;

    /**
     * @var array Output information
If the type is RTMP or RTP, only one output is allowed; if it is HLS or DASH, 1-10 outputs are allowed.
     */
    public $Outputs;

    /**
     * @var array Relay destinations. Quantity: [1, 2]
     */
    public $Destinations;

    /**
     * @var HlsRemuxSettingsInfo HLS protocol configuration information, which takes effect only for HLS/HLS_ARCHIVE/HLS_STREAM_PACKAGE outputs.
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $HlsRemuxSettings;

    /**
     * @var DrmSettingsInfo DRM configuration information
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $DrmSettings;

    /**
     * @var DashRemuxSettingsInfo DASH protocol configuration information, which takes effect only for DASH/DASH_ARCHIVE outputs
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $DashRemuxSettings;

    /**
     * @var StreamPackageSettingsInfo StreamPackage configuration information, which is required if the output type is StreamPackage
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $StreamPackageSettings;

    /**
     * @var TimeShiftSettingsInfo Time-shift configuration information
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $TimeShiftSettings;

    /**
     * @param string $Name Output group name, which can contain 1-32 case-sensitive letters, digits, and underscores and must be unique at the channel level
     * @param string $Type Output protocol
Valid values: `HLS`, `DASH`, `HLS_ARCHIVE`, `DASH_ARCHIVE`,`HLS_STREAM_PACKAGE`, `DASH_STREAM_PACKAGE`, `FRAME_CAPTURE`,`RTP`,`RTMP`.
     * @param array $Outputs Output information
If the type is RTMP or RTP, only one output is allowed; if it is HLS or DASH, 1-10 outputs are allowed.
     * @param array $Destinations Relay destinations. Quantity: [1, 2]
     * @param HlsRemuxSettingsInfo $HlsRemuxSettings HLS protocol configuration information, which takes effect only for HLS/HLS_ARCHIVE/HLS_STREAM_PACKAGE outputs.
Note: this field may return `null`, indicating that no valid value was found.
     * @param DrmSettingsInfo $DrmSettings DRM configuration information
Note: this field may return `null`, indicating that no valid value was found.
     * @param DashRemuxSettingsInfo $DashRemuxSettings DASH protocol configuration information, which takes effect only for DASH/DASH_ARCHIVE outputs
Note: this field may return `null`, indicating that no valid value was found.
     * @param StreamPackageSettingsInfo $StreamPackageSettings StreamPackage configuration information, which is required if the output type is StreamPackage
Note: this field may return `null`, indicating that no valid value was found.
     * @param TimeShiftSettingsInfo $TimeShiftSettings Time-shift configuration information
Note: This field may return `null`, indicating that no valid value was found.
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

        if (array_key_exists("Outputs",$param) and $param["Outputs"] !== null) {
            $this->Outputs = [];
            foreach ($param["Outputs"] as $key => $value){
                $obj = new OutputInfo();
                $obj->deserialize($value);
                array_push($this->Outputs, $obj);
            }
        }

        if (array_key_exists("Destinations",$param) and $param["Destinations"] !== null) {
            $this->Destinations = [];
            foreach ($param["Destinations"] as $key => $value){
                $obj = new DestinationInfo();
                $obj->deserialize($value);
                array_push($this->Destinations, $obj);
            }
        }

        if (array_key_exists("HlsRemuxSettings",$param) and $param["HlsRemuxSettings"] !== null) {
            $this->HlsRemuxSettings = new HlsRemuxSettingsInfo();
            $this->HlsRemuxSettings->deserialize($param["HlsRemuxSettings"]);
        }

        if (array_key_exists("DrmSettings",$param) and $param["DrmSettings"] !== null) {
            $this->DrmSettings = new DrmSettingsInfo();
            $this->DrmSettings->deserialize($param["DrmSettings"]);
        }

        if (array_key_exists("DashRemuxSettings",$param) and $param["DashRemuxSettings"] !== null) {
            $this->DashRemuxSettings = new DashRemuxSettingsInfo();
            $this->DashRemuxSettings->deserialize($param["DashRemuxSettings"]);
        }

        if (array_key_exists("StreamPackageSettings",$param) and $param["StreamPackageSettings"] !== null) {
            $this->StreamPackageSettings = new StreamPackageSettingsInfo();
            $this->StreamPackageSettings->deserialize($param["StreamPackageSettings"]);
        }

        if (array_key_exists("TimeShiftSettings",$param) and $param["TimeShiftSettings"] !== null) {
            $this->TimeShiftSettings = new TimeShiftSettingsInfo();
            $this->TimeShiftSettings->deserialize($param["TimeShiftSettings"]);
        }
    }
}
