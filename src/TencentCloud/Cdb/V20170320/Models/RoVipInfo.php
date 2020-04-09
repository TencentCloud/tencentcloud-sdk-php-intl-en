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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VIP information of the read-only instance
 *
 * @method integer getRoVipStatus() Obtain VIP status of the read-only instance
 * @method void setRoVipStatus(integer $RoVipStatus) Set VIP status of the read-only instance
 * @method integer getRoSubnetId() Obtain VPC subnet of the read-only instance
 * @method void setRoSubnetId(integer $RoSubnetId) Set VPC subnet of the read-only instance
 * @method integer getRoVpcId() Obtain VPC of the read-only instance
 * @method void setRoVpcId(integer $RoVpcId) Set VPC of the read-only instance
 * @method integer getRoVport() Obtain VIP port number of the read-only instance
 * @method void setRoVport(integer $RoVport) Set VIP port number of the read-only instance
 * @method string getRoVip() Obtain VIP of the read-only instance
 * @method void setRoVip(string $RoVip) Set VIP of the read-only instance
 */
class RoVipInfo extends AbstractModel
{
    /**
     * @var integer VIP status of the read-only instance
     */
    public $RoVipStatus;

    /**
     * @var integer VPC subnet of the read-only instance
     */
    public $RoSubnetId;

    /**
     * @var integer VPC of the read-only instance
     */
    public $RoVpcId;

    /**
     * @var integer VIP port number of the read-only instance
     */
    public $RoVport;

    /**
     * @var string VIP of the read-only instance
     */
    public $RoVip;

    /**
     * @param integer $RoVipStatus VIP status of the read-only instance
     * @param integer $RoSubnetId VPC subnet of the read-only instance
     * @param integer $RoVpcId VPC of the read-only instance
     * @param integer $RoVport VIP port number of the read-only instance
     * @param string $RoVip VIP of the read-only instance
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
        if (array_key_exists("RoVipStatus",$param) and $param["RoVipStatus"] !== null) {
            $this->RoVipStatus = $param["RoVipStatus"];
        }

        if (array_key_exists("RoSubnetId",$param) and $param["RoSubnetId"] !== null) {
            $this->RoSubnetId = $param["RoSubnetId"];
        }

        if (array_key_exists("RoVpcId",$param) and $param["RoVpcId"] !== null) {
            $this->RoVpcId = $param["RoVpcId"];
        }

        if (array_key_exists("RoVport",$param) and $param["RoVport"] !== null) {
            $this->RoVport = $param["RoVport"];
        }

        if (array_key_exists("RoVip",$param) and $param["RoVip"] !== null) {
            $this->RoVip = $param["RoVip"];
        }
    }
}
