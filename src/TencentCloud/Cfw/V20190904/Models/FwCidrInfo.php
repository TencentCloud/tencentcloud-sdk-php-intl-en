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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Firewall IP range information
 *
 * @method string getFwCidrType() Obtain The IP range type of the firewall. Values: `VpcSelf` (VPC IP range preferred); `Assis` (Secondary IP range preferred); `Custom` (Custom IP range)
 * @method void setFwCidrType(string $FwCidrType) Set The IP range type of the firewall. Values: `VpcSelf` (VPC IP range preferred); `Assis` (Secondary IP range preferred); `Custom` (Custom IP range)
 * @method array getFwCidrLst() Obtain The IP segment assigned for each VPC.
 * @method void setFwCidrLst(array $FwCidrLst) Set The IP segment assigned for each VPC.
 * @method string getComFwCidr() Obtain The IP segment used by other firewalls. Specify this if you want to assign a dedicated segment for the firewall.
 * @method void setComFwCidr(string $ComFwCidr) Set The IP segment used by other firewalls. Specify this if you want to assign a dedicated segment for the firewall.
 */
class FwCidrInfo extends AbstractModel
{
    /**
     * @var string The IP range type of the firewall. Values: `VpcSelf` (VPC IP range preferred); `Assis` (Secondary IP range preferred); `Custom` (Custom IP range)
     */
    public $FwCidrType;

    /**
     * @var array The IP segment assigned for each VPC.
     */
    public $FwCidrLst;

    /**
     * @var string The IP segment used by other firewalls. Specify this if you want to assign a dedicated segment for the firewall.
     */
    public $ComFwCidr;

    /**
     * @param string $FwCidrType The IP range type of the firewall. Values: `VpcSelf` (VPC IP range preferred); `Assis` (Secondary IP range preferred); `Custom` (Custom IP range)
     * @param array $FwCidrLst The IP segment assigned for each VPC.
     * @param string $ComFwCidr The IP segment used by other firewalls. Specify this if you want to assign a dedicated segment for the firewall.
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
        if (array_key_exists("FwCidrType",$param) and $param["FwCidrType"] !== null) {
            $this->FwCidrType = $param["FwCidrType"];
        }

        if (array_key_exists("FwCidrLst",$param) and $param["FwCidrLst"] !== null) {
            $this->FwCidrLst = [];
            foreach ($param["FwCidrLst"] as $key => $value){
                $obj = new FwVpcCidr();
                $obj->deserialize($value);
                array_push($this->FwCidrLst, $obj);
            }
        }

        if (array_key_exists("ComFwCidr",$param) and $param["ComFwCidr"] !== null) {
            $this->ComFwCidr = $param["ComFwCidr"];
        }
    }
}
