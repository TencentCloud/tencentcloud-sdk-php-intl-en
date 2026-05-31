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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Channel output group information
 *
 * @method string getName() Obtain Output group name, which can contain 1-32 case-sensitive letters, digits, and underscores and must be unique at the channel level
 * @method void setName(string $Name) Set Output group name, which can contain 1-32 case-sensitive letters, digits, and underscores and must be unique at the channel level
 * @method string getType() Obtain Output protocol type.
Selectable HLS/DASH/HLS_ARCHIVE/DASH_ARCHIVE/HLS_STREAM_PACKAGE/DASH_STREAM_PACKAGE/FRAME_CAPTURE/RTP/RTMP/M2TS.
 * @method void setType(string $Type) Set Output protocol type.
Selectable HLS/DASH/HLS_ARCHIVE/DASH_ARCHIVE/HLS_STREAM_PACKAGE/DASH_STREAM_PACKAGE/FRAME_CAPTURE/RTP/RTMP/M2TS.
 * @method array getOutputs() Obtain Output information.
RTMP/RTP/FRAME_CAPTURE limit [1,1], HLS/DASH limit [1,10].
 * @method void setOutputs(array $Outputs) Set Output information.
RTMP/RTP/FRAME_CAPTURE limit [1,1], HLS/DASH limit [1,10].
 * @method array getDestinations() Obtain Relay destinations. Quantity: [1, 2]
 * @method void setDestinations(array $Destinations) Set Relay destinations. Quantity: [1, 2]
 * @method HlsRemuxSettingsInfo getHlsRemuxSettings() Obtain HLS protocol configuration info, valid only for HLS/HLS_ARCHIVE.
 * @method void setHlsRemuxSettings(HlsRemuxSettingsInfo $HlsRemuxSettings) Set HLS protocol configuration info, valid only for HLS/HLS_ARCHIVE.
 * @method DrmSettingsInfo getDrmSettings() Obtain DRM configuration message.
 * @method void setDrmSettings(DrmSettingsInfo $DrmSettings) Set DRM configuration message.
 * @method DashRemuxSettingsInfo getDashRemuxSettings() Obtain DASH protocol configuration info, valid only for DASH/DSAH_ARCHIVE.
 * @method void setDashRemuxSettings(DashRemuxSettingsInfo $DashRemuxSettings) Set DASH protocol configuration info, valid only for DASH/DSAH_ARCHIVE.
 * @method StreamPackageSettingsInfo getStreamPackageSettings() Obtain Configuration message for media encapsulation. Requires filling in when Type is related to StreamPackage.
 * @method void setStreamPackageSettings(StreamPackageSettingsInfo $StreamPackageSettings) Set Configuration message for media encapsulation. Requires filling in when Type is related to StreamPackage.
 * @method TimeShiftSettingsInfo getTimeShiftSettings() Obtain Time shift configuration information.
 * @method void setTimeShiftSettings(TimeShiftSettingsInfo $TimeShiftSettings) Set Time shift configuration information.
 */
class StreamLiveOutputGroupsInfo extends AbstractModel
{
    /**
     * @var string Output group name, which can contain 1-32 case-sensitive letters, digits, and underscores and must be unique at the channel level
     */
    public $Name;

    /**
     * @var string Output protocol type.
Selectable HLS/DASH/HLS_ARCHIVE/DASH_ARCHIVE/HLS_STREAM_PACKAGE/DASH_STREAM_PACKAGE/FRAME_CAPTURE/RTP/RTMP/M2TS.
     */
    public $Type;

    /**
     * @var array Output information.
RTMP/RTP/FRAME_CAPTURE limit [1,1], HLS/DASH limit [1,10].
     */
    public $Outputs;

    /**
     * @var array Relay destinations. Quantity: [1, 2]
     */
    public $Destinations;

    /**
     * @var HlsRemuxSettingsInfo HLS protocol configuration info, valid only for HLS/HLS_ARCHIVE.
     */
    public $HlsRemuxSettings;

    /**
     * @var DrmSettingsInfo DRM configuration message.
     */
    public $DrmSettings;

    /**
     * @var DashRemuxSettingsInfo DASH protocol configuration info, valid only for DASH/DSAH_ARCHIVE.
     */
    public $DashRemuxSettings;

    /**
     * @var StreamPackageSettingsInfo Configuration message for media encapsulation. Requires filling in when Type is related to StreamPackage.
     */
    public $StreamPackageSettings;

    /**
     * @var TimeShiftSettingsInfo Time shift configuration information.
     */
    public $TimeShiftSettings;

    /**
     * @param string $Name Output group name, which can contain 1-32 case-sensitive letters, digits, and underscores and must be unique at the channel level
     * @param string $Type Output protocol type.
Selectable HLS/DASH/HLS_ARCHIVE/DASH_ARCHIVE/HLS_STREAM_PACKAGE/DASH_STREAM_PACKAGE/FRAME_CAPTURE/RTP/RTMP/M2TS.
     * @param array $Outputs Output information.
RTMP/RTP/FRAME_CAPTURE limit [1,1], HLS/DASH limit [1,10].
     * @param array $Destinations Relay destinations. Quantity: [1, 2]
     * @param HlsRemuxSettingsInfo $HlsRemuxSettings HLS protocol configuration info, valid only for HLS/HLS_ARCHIVE.
     * @param DrmSettingsInfo $DrmSettings DRM configuration message.
     * @param DashRemuxSettingsInfo $DashRemuxSettings DASH protocol configuration info, valid only for DASH/DSAH_ARCHIVE.
     * @param StreamPackageSettingsInfo $StreamPackageSettings Configuration message for media encapsulation. Requires filling in when Type is related to StreamPackage.
     * @param TimeShiftSettingsInfo $TimeShiftSettings Time shift configuration information.
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
