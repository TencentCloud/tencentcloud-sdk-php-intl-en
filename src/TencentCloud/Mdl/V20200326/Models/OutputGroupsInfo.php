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
 * Channel output group information.
 *
 * @method string getName() Obtain Channel output group name, which can contain 1–32 letters, digits, and underscores and must be unique at the channel level.
 * @method void setName(string $Name) Set Channel output group name, which can contain 1–32 letters, digits, and underscores and must be unique at the channel level.
 * @method string getType() Obtain Output protocol type.
Valid values: HLS/DASH/RTP/RTMP/HLS_ARCHIVE/DASH_ARCHIVE.
 * @method void setType(string $Type) Set Output protocol type.
Valid values: HLS/DASH/RTP/RTMP/HLS_ARCHIVE/DASH_ARCHIVE.
 * @method array getOutputs() Obtain Output information.
Quantity limit: [1,1] for RTMP/RTP; [1,10] for HLS/DASH.
 * @method void setOutputs(array $Outputs) Set Output information.
Quantity limit: [1,1] for RTMP/RTP; [1,10] for HLS/DASH.
 * @method array getDestinations() Obtain Relay destination address. Quantity limit: [1,2].
 * @method void setDestinations(array $Destinations) Set Relay destination address. Quantity limit: [1,2].
 * @method HlsRemuxSettingsInfo getHlsRemuxSettings() Obtain HLS protocol configuration information, which takes effect only for HLS/HLS_ARCHIVE.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHlsRemuxSettings(HlsRemuxSettingsInfo $HlsRemuxSettings) Set HLS protocol configuration information, which takes effect only for HLS/HLS_ARCHIVE.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method DashRemuxSettingsInfo getDashRemuxSettings() Obtain DASH protocol configuration information, which takes effect only for DASH/DSAH_ARCHIVE.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDashRemuxSettings(DashRemuxSettingsInfo $DashRemuxSettings) Set DASH protocol configuration information, which takes effect only for DASH/DSAH_ARCHIVE.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method DrmSettingsInfo getDrmSettings() Obtain DRM configuration information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDrmSettings(DrmSettingsInfo $DrmSettings) Set DRM configuration information.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class OutputGroupsInfo extends AbstractModel
{
    /**
     * @var string Channel output group name, which can contain 1–32 letters, digits, and underscores and must be unique at the channel level.
     */
    public $Name;

    /**
     * @var string Output protocol type.
Valid values: HLS/DASH/RTP/RTMP/HLS_ARCHIVE/DASH_ARCHIVE.
     */
    public $Type;

    /**
     * @var array Output information.
Quantity limit: [1,1] for RTMP/RTP; [1,10] for HLS/DASH.
     */
    public $Outputs;

    /**
     * @var array Relay destination address. Quantity limit: [1,2].
     */
    public $Destinations;

    /**
     * @var HlsRemuxSettingsInfo HLS protocol configuration information, which takes effect only for HLS/HLS_ARCHIVE.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $HlsRemuxSettings;

    /**
     * @var DashRemuxSettingsInfo DASH protocol configuration information, which takes effect only for DASH/DSAH_ARCHIVE.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DashRemuxSettings;

    /**
     * @var DrmSettingsInfo DRM configuration information.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DrmSettings;

    /**
     * @param string $Name Channel output group name, which can contain 1–32 letters, digits, and underscores and must be unique at the channel level.
     * @param string $Type Output protocol type.
Valid values: HLS/DASH/RTP/RTMP/HLS_ARCHIVE/DASH_ARCHIVE.
     * @param array $Outputs Output information.
Quantity limit: [1,1] for RTMP/RTP; [1,10] for HLS/DASH.
     * @param array $Destinations Relay destination address. Quantity limit: [1,2].
     * @param HlsRemuxSettingsInfo $HlsRemuxSettings HLS protocol configuration information, which takes effect only for HLS/HLS_ARCHIVE.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param DashRemuxSettingsInfo $DashRemuxSettings DASH protocol configuration information, which takes effect only for DASH/DSAH_ARCHIVE.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param DrmSettingsInfo $DrmSettings DRM configuration information.
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("DashRemuxSettings",$param) and $param["DashRemuxSettings"] !== null) {
            $this->DashRemuxSettings = new DashRemuxSettingsInfo();
            $this->DashRemuxSettings->deserialize($param["DashRemuxSettings"]);
        }

        if (array_key_exists("DrmSettings",$param) and $param["DrmSettings"] !== null) {
            $this->DrmSettings = new DrmSettingsInfo();
            $this->DrmSettings->deserialize($param["DrmSettings"]);
        }
    }
}
