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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPN gateway traffic monitoring data
 *
 * @method OutBandwidth getOutBandwidth() Obtain Outbound bandwidth traffic 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setOutBandwidth(OutBandwidth $OutBandwidth) Set Outbound bandwidth traffic 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method InBandwidth getInBandwidth() Obtain Inbound bandwidth traffic
 * @method void setInBandwidth(InBandwidth $InBandwidth) Set Inbound bandwidth traffic
 */
class VpngwBandwidthData extends AbstractModel
{
    /**
     * @var OutBandwidth Outbound bandwidth traffic 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $OutBandwidth;

    /**
     * @var InBandwidth Inbound bandwidth traffic
     */
    public $InBandwidth;

    /**
     * @param OutBandwidth $OutBandwidth Outbound bandwidth traffic 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param InBandwidth $InBandwidth Inbound bandwidth traffic
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
        if (array_key_exists("OutBandwidth",$param) and $param["OutBandwidth"] !== null) {
            $this->OutBandwidth = new OutBandwidth();
            $this->OutBandwidth->deserialize($param["OutBandwidth"]);
        }

        if (array_key_exists("InBandwidth",$param) and $param["InBandwidth"] !== null) {
            $this->InBandwidth = new InBandwidth();
            $this->InBandwidth->deserialize($param["InBandwidth"]);
        }
    }
}
