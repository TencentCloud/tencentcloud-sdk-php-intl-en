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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the real server bound to a CLB instance, including region and network to which it belongs.
 *
 * @method string getRegion() Obtain Region of the target, such as ap-guangzhou
 * @method void setRegion(string $Region) Set Region of the target, such as ap-guangzhou
 * @method string getVpcId() Obtain Network of the target, which is in the format of vpc-abcd1234 for VPC or 0 for basic network
 * @method void setVpcId(string $VpcId) Set Network of the target, which is in the format of vpc-abcd1234 for VPC or 0 for basic network
 * @method integer getNumericalVpcId() Obtain Target'S network, in the format of 86323 for a private network, or 0 if it is a basic network.
 * @method void setNumericalVpcId(integer $NumericalVpcId) Set Target'S network, in the format of 86323 for a private network, or 0 if it is a basic network.
 */
class TargetRegionInfo extends AbstractModel
{
    /**
     * @var string Region of the target, such as ap-guangzhou
     */
    public $Region;

    /**
     * @var string Network of the target, which is in the format of vpc-abcd1234 for VPC or 0 for basic network
     */
    public $VpcId;

    /**
     * @var integer Target'S network, in the format of 86323 for a private network, or 0 if it is a basic network.
     */
    public $NumericalVpcId;

    /**
     * @param string $Region Region of the target, such as ap-guangzhou
     * @param string $VpcId Network of the target, which is in the format of vpc-abcd1234 for VPC or 0 for basic network
     * @param integer $NumericalVpcId Target'S network, in the format of 86323 for a private network, or 0 if it is a basic network.
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("NumericalVpcId",$param) and $param["NumericalVpcId"] !== null) {
            $this->NumericalVpcId = $param["NumericalVpcId"];
        }
    }
}
