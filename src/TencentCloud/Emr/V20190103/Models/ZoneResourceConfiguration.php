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
 * AZ configurations
 *
 * @method VirtualPrivateCloud getVirtualPrivateCloud() Obtain The VPC configuration information. This parameter is used to specify the VPC ID, subnet ID and other information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) Set The VPC configuration information. This parameter is used to specify the VPC ID, subnet ID and other information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Placement getPlacement() Obtain The instance location. This parameter is used to specify the AZ, project, and other attributes of the instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPlacement(Placement $Placement) Set The instance location. This parameter is used to specify the AZ, project, and other attributes of the instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AllNodeResourceSpec getAllNodeResourceSpec() Obtain The specs of all nodes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAllNodeResourceSpec(AllNodeResourceSpec $AllNodeResourceSpec) Set The specs of all nodes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZoneTag() Obtain For a single AZ, `ZoneTag` can be left out. For a double-AZ mode, `ZoneTag` is set to `master` and `standby` for the first and second AZs, respectively. If there are three AZs, `ZoneTag` is set to `master`, `standby`, and `third-party` for the first, second, and third AZs, respectively. Valid values:
  <li>master</li>
  <li>standby</li>
  <li>third-party</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneTag(string $ZoneTag) Set For a single AZ, `ZoneTag` can be left out. For a double-AZ mode, `ZoneTag` is set to `master` and `standby` for the first and second AZs, respectively. If there are three AZs, `ZoneTag` is set to `master`, `standby`, and `third-party` for the first, second, and third AZs, respectively. Valid values:
  <li>master</li>
  <li>standby</li>
  <li>third-party</li>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ZoneResourceConfiguration extends AbstractModel
{
    /**
     * @var VirtualPrivateCloud The VPC configuration information. This parameter is used to specify the VPC ID, subnet ID and other information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VirtualPrivateCloud;

    /**
     * @var Placement The instance location. This parameter is used to specify the AZ, project, and other attributes of the instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Placement;

    /**
     * @var AllNodeResourceSpec The specs of all nodes.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AllNodeResourceSpec;

    /**
     * @var string For a single AZ, `ZoneTag` can be left out. For a double-AZ mode, `ZoneTag` is set to `master` and `standby` for the first and second AZs, respectively. If there are three AZs, `ZoneTag` is set to `master`, `standby`, and `third-party` for the first, second, and third AZs, respectively. Valid values:
  <li>master</li>
  <li>standby</li>
  <li>third-party</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneTag;

    /**
     * @param VirtualPrivateCloud $VirtualPrivateCloud The VPC configuration information. This parameter is used to specify the VPC ID, subnet ID and other information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Placement $Placement The instance location. This parameter is used to specify the AZ, project, and other attributes of the instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AllNodeResourceSpec $AllNodeResourceSpec The specs of all nodes.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ZoneTag For a single AZ, `ZoneTag` can be left out. For a double-AZ mode, `ZoneTag` is set to `master` and `standby` for the first and second AZs, respectively. If there are three AZs, `ZoneTag` is set to `master`, `standby`, and `third-party` for the first, second, and third AZs, respectively. Valid values:
  <li>master</li>
  <li>standby</li>
  <li>third-party</li>
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("VirtualPrivateCloud",$param) and $param["VirtualPrivateCloud"] !== null) {
            $this->VirtualPrivateCloud = new VirtualPrivateCloud();
            $this->VirtualPrivateCloud->deserialize($param["VirtualPrivateCloud"]);
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("AllNodeResourceSpec",$param) and $param["AllNodeResourceSpec"] !== null) {
            $this->AllNodeResourceSpec = new AllNodeResourceSpec();
            $this->AllNodeResourceSpec->deserialize($param["AllNodeResourceSpec"]);
        }

        if (array_key_exists("ZoneTag",$param) and $param["ZoneTag"] !== null) {
            $this->ZoneTag = $param["ZoneTag"];
        }
    }
}
