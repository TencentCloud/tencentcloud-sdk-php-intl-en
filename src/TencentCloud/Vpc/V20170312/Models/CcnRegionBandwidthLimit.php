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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The outbound bandwidth cap of the CCN region
 *
 * @method string getRegion() Obtain Region, such as `ap-guangzhou`
 * @method void setRegion(string $Region) Set Region, such as `ap-guangzhou`
 * @method integer getBandwidthLimit() Obtain The outbound bandwidth cap. Units: Mbps
 * @method void setBandwidthLimit(integer $BandwidthLimit) Set The outbound bandwidth cap. Units: Mbps
 * @method boolean getIsBm() Obtain Whether it is a BM region. The default is `false`.
 * @method void setIsBm(boolean $IsBm) Set Whether it is a BM region. The default is `false`.
 * @method string getDstRegion() Obtain The target region, such as `ap-shanghai`
Note: This field may return null, indicating no valid value.
 * @method void setDstRegion(string $DstRegion) Set The target region, such as `ap-shanghai`
Note: This field may return null, indicating no valid value.
 * @method boolean getDstIsBm() Obtain Whether the target region is a BM region. The default is `false`.
 * @method void setDstIsBm(boolean $DstIsBm) Set Whether the target region is a BM region. The default is `false`.
 */
class CcnRegionBandwidthLimit extends AbstractModel
{
    /**
     * @var string Region, such as `ap-guangzhou`
     */
    public $Region;

    /**
     * @var integer The outbound bandwidth cap. Units: Mbps
     */
    public $BandwidthLimit;

    /**
     * @var boolean Whether it is a BM region. The default is `false`.
     */
    public $IsBm;

    /**
     * @var string The target region, such as `ap-shanghai`
Note: This field may return null, indicating no valid value.
     */
    public $DstRegion;

    /**
     * @var boolean Whether the target region is a BM region. The default is `false`.
     */
    public $DstIsBm;

    /**
     * @param string $Region Region, such as `ap-guangzhou`
     * @param integer $BandwidthLimit The outbound bandwidth cap. Units: Mbps
     * @param boolean $IsBm Whether it is a BM region. The default is `false`.
     * @param string $DstRegion The target region, such as `ap-shanghai`
Note: This field may return null, indicating no valid value.
     * @param boolean $DstIsBm Whether the target region is a BM region. The default is `false`.
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("BandwidthLimit",$param) and $param["BandwidthLimit"] !== null) {
            $this->BandwidthLimit = $param["BandwidthLimit"];
        }

        if (array_key_exists("IsBm",$param) and $param["IsBm"] !== null) {
            $this->IsBm = $param["IsBm"];
        }

        if (array_key_exists("DstRegion",$param) and $param["DstRegion"] !== null) {
            $this->DstRegion = $param["DstRegion"];
        }

        if (array_key_exists("DstIsBm",$param) and $param["DstIsBm"] !== null) {
            $this->DstIsBm = $param["DstIsBm"];
        }
    }
}
