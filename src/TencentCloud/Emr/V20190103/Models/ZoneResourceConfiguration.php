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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AZ configuration information.
 *
 * @method VirtualPrivateCloud getVirtualPrivateCloud() Obtain VPC-related information configuration. This parameter can be used to specify the VPC ID and subnet ID.
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) Set VPC-related information configuration. This parameter can be used to specify the VPC ID and subnet ID.
 * @method Placement getPlacement() Obtain Location of the instance. This parameter can be used to specify attributes such as the AZ and associated project of the instance.
 * @method void setPlacement(Placement $Placement) Set Location of the instance. This parameter can be used to specify attributes such as the AZ and associated project of the instance.
 * @method AllNodeResourceSpec getAllNodeResourceSpec() Obtain Specifications of all node resources.
 * @method void setAllNodeResourceSpec(AllNodeResourceSpec $AllNodeResourceSpec) Set Specifications of all node resources.
 * @method string getZoneTag() Obtain In single-AZ deployment, ZoneTag can be left empty. In dual-AZ deployment mode, select master for the first AZ's ZoneTag and standby for the second. In three-AZ deployment mode, select master for the first AZ's ZoneTag, standby for the second, and third-party for the third. Valid values:
  <li>master</li>
  <li>standby</li>
  <li>third-party</li>
 * @method void setZoneTag(string $ZoneTag) Set In single-AZ deployment, ZoneTag can be left empty. In dual-AZ deployment mode, select master for the first AZ's ZoneTag and standby for the second. In three-AZ deployment mode, select master for the first AZ's ZoneTag, standby for the second, and third-party for the third. Valid values:
  <li>master</li>
  <li>standby</li>
  <li>third-party</li>
 */
class ZoneResourceConfiguration extends AbstractModel
{
    /**
     * @var VirtualPrivateCloud VPC-related information configuration. This parameter can be used to specify the VPC ID and subnet ID.
     */
    public $VirtualPrivateCloud;

    /**
     * @var Placement Location of the instance. This parameter can be used to specify attributes such as the AZ and associated project of the instance.
     */
    public $Placement;

    /**
     * @var AllNodeResourceSpec Specifications of all node resources.
     */
    public $AllNodeResourceSpec;

    /**
     * @var string In single-AZ deployment, ZoneTag can be left empty. In dual-AZ deployment mode, select master for the first AZ's ZoneTag and standby for the second. In three-AZ deployment mode, select master for the first AZ's ZoneTag, standby for the second, and third-party for the third. Valid values:
  <li>master</li>
  <li>standby</li>
  <li>third-party</li>
     */
    public $ZoneTag;

    /**
     * @param VirtualPrivateCloud $VirtualPrivateCloud VPC-related information configuration. This parameter can be used to specify the VPC ID and subnet ID.
     * @param Placement $Placement Location of the instance. This parameter can be used to specify attributes such as the AZ and associated project of the instance.
     * @param AllNodeResourceSpec $AllNodeResourceSpec Specifications of all node resources.
     * @param string $ZoneTag In single-AZ deployment, ZoneTag can be left empty. In dual-AZ deployment mode, select master for the first AZ's ZoneTag and standby for the second. In three-AZ deployment mode, select master for the first AZ's ZoneTag, standby for the second, and third-party for the third. Valid values:
  <li>master</li>
  <li>standby</li>
  <li>third-party</li>
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
