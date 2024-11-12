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
 * ModifyBandwidthPackageBandwidth request structure.
 *
 * @method integer getInternetMaxBandwidth() Obtain Maximum bandwidth. Unit: Mbps. 
 * @method void setInternetMaxBandwidth(integer $InternetMaxBandwidth) Set Maximum bandwidth. Unit: Mbps. 
 * @method string getBandwidthPackageId() Obtain Bandwidth package ID.
 * @method void setBandwidthPackageId(string $BandwidthPackageId) Set Bandwidth package ID.
 */
class ModifyBandwidthPackageBandwidthRequest extends AbstractModel
{
    /**
     * @var integer Maximum bandwidth. Unit: Mbps. 
     */
    public $InternetMaxBandwidth;

    /**
     * @var string Bandwidth package ID.
     */
    public $BandwidthPackageId;

    /**
     * @param integer $InternetMaxBandwidth Maximum bandwidth. Unit: Mbps. 
     * @param string $BandwidthPackageId Bandwidth package ID.
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
        if (array_key_exists("InternetMaxBandwidth",$param) and $param["InternetMaxBandwidth"] !== null) {
            $this->InternetMaxBandwidth = $param["InternetMaxBandwidth"];
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }
    }
}
