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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameter information of each AZ
 *
 * @method string getZoneTag() Obtain "master", "standby", "third-party"
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setZoneTag(string $ZoneTag) Set "master", "standby", "third-party"
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method VPCSettings getVPCSettings() Obtain None
 * @method void setVPCSettings(VPCSettings $VPCSettings) Set None
 * @method Placement getPlacement() Obtain None
 * @method void setPlacement(Placement $Placement) Set None
 * @method NewResourceSpec getResourceSpec() Obtain None
 * @method void setResourceSpec(NewResourceSpec $ResourceSpec) Set None
 */
class MultiZoneSetting extends AbstractModel
{
    /**
     * @var string "master", "standby", "third-party"
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ZoneTag;

    /**
     * @var VPCSettings None
     */
    public $VPCSettings;

    /**
     * @var Placement None
     */
    public $Placement;

    /**
     * @var NewResourceSpec None
     */
    public $ResourceSpec;

    /**
     * @param string $ZoneTag "master", "standby", "third-party"
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param VPCSettings $VPCSettings None
     * @param Placement $Placement None
     * @param NewResourceSpec $ResourceSpec None
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
        if (array_key_exists("ZoneTag",$param) and $param["ZoneTag"] !== null) {
            $this->ZoneTag = $param["ZoneTag"];
        }

        if (array_key_exists("VPCSettings",$param) and $param["VPCSettings"] !== null) {
            $this->VPCSettings = new VPCSettings();
            $this->VPCSettings->deserialize($param["VPCSettings"]);
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("ResourceSpec",$param) and $param["ResourceSpec"] !== null) {
            $this->ResourceSpec = new NewResourceSpec();
            $this->ResourceSpec->deserialize($param["ResourceSpec"]);
        }
    }
}
