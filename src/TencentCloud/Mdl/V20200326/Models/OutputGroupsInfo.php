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
 * 频道输出组信息。
 *
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getType() Obtain Output protocol type.
Valid values: HLS, DASH, HLS_ARCHIVE, HLS_MEDIA_PACKAGE, DASH_MEDIA_PACKAGE.
 * @method void setType(string $Type) Set Output protocol type.
Valid values: HLS, DASH, HLS_ARCHIVE, HLS_MEDIA_PACKAGE, DASH_MEDIA_PACKAGE.
 * @method array getOutputs() Obtain 
 * @method void setOutputs(array $Outputs) Set 
 * @method array getDestinations() Obtain 
 * @method void setDestinations(array $Destinations) Set 
 * @method HlsRemuxSettingsInfo getHlsRemuxSettings() Obtain 
 * @method void setHlsRemuxSettings(HlsRemuxSettingsInfo $HlsRemuxSettings) Set 
 * @method DashRemuxSettingsInfo getDashRemuxSettings() Obtain 
 * @method void setDashRemuxSettings(DashRemuxSettingsInfo $DashRemuxSettings) Set 
 * @method DrmSettingsInfo getDrmSettings() Obtain 
 * @method void setDrmSettings(DrmSettingsInfo $DrmSettings) Set 
 * @method MediaPackageSettingsInfo getMediaPackageSettings() Obtain Configuration information of media packaging, which is required when `Type` is set to MediaPackage.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMediaPackageSettings(MediaPackageSettingsInfo $MediaPackageSettings) Set Configuration information of media packaging, which is required when `Type` is set to MediaPackage.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class OutputGroupsInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $Name;

    /**
     * @var string Output protocol type.
Valid values: HLS, DASH, HLS_ARCHIVE, HLS_MEDIA_PACKAGE, DASH_MEDIA_PACKAGE.
     */
    public $Type;

    /**
     * @var array 
     */
    public $Outputs;

    /**
     * @var array 
     */
    public $Destinations;

    /**
     * @var HlsRemuxSettingsInfo 
     */
    public $HlsRemuxSettings;

    /**
     * @var DashRemuxSettingsInfo 
     */
    public $DashRemuxSettings;

    /**
     * @var DrmSettingsInfo 
     */
    public $DrmSettings;

    /**
     * @var MediaPackageSettingsInfo Configuration information of media packaging, which is required when `Type` is set to MediaPackage.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MediaPackageSettings;

    /**
     * @param string $Name 
     * @param string $Type Output protocol type.
Valid values: HLS, DASH, HLS_ARCHIVE, HLS_MEDIA_PACKAGE, DASH_MEDIA_PACKAGE.
     * @param array $Outputs 
     * @param array $Destinations 
     * @param HlsRemuxSettingsInfo $HlsRemuxSettings 
     * @param DashRemuxSettingsInfo $DashRemuxSettings 
     * @param DrmSettingsInfo $DrmSettings 
     * @param MediaPackageSettingsInfo $MediaPackageSettings Configuration information of media packaging, which is required when `Type` is set to MediaPackage.
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

        if (array_key_exists("MediaPackageSettings",$param) and $param["MediaPackageSettings"] !== null) {
            $this->MediaPackageSettings = new MediaPackageSettingsInfo();
            $this->MediaPackageSettings->deserialize($param["MediaPackageSettings"]);
        }
    }
}
