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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance address information.
 *
 * @method string getResourceId() Obtain Resource ID identifier of the address.
 * @method void setResourceId(string $ResourceId) Set Resource ID identifier of the address.
 * @method string getUniqVpcId() Obtain The vpc where the address resides.
 * @method void setUniqVpcId(string $UniqVpcId) Set The vpc where the address resides.
 * @method string getUniqSubnetId() Obtain The subnet where the address resides.
 * @method void setUniqSubnetId(string $UniqSubnetId) Set The subnet where the address resides.
 * @method string getVip() Obtain vip address.
 * @method void setVip(string $Vip) Set vip address.
 * @method integer getVPort() Obtain The port of the address.
 * @method void setVPort(integer $VPort) Set The port of the address.
 * @method string getWanDomain() Obtain Public network address domain name.
 * @method void setWanDomain(string $WanDomain) Set Public network address domain name.
 * @method integer getWanPort() Obtain Public network address port.
 * @method void setWanPort(integer $WanPort) Set Public network address port.
 */
class AddressInfo extends AbstractModel
{
    /**
     * @var string Resource ID identifier of the address.
     */
    public $ResourceId;

    /**
     * @var string The vpc where the address resides.
     */
    public $UniqVpcId;

    /**
     * @var string The subnet where the address resides.
     */
    public $UniqSubnetId;

    /**
     * @var string vip address.
     */
    public $Vip;

    /**
     * @var integer The port of the address.
     */
    public $VPort;

    /**
     * @var string Public network address domain name.
     */
    public $WanDomain;

    /**
     * @var integer Public network address port.
     */
    public $WanPort;

    /**
     * @param string $ResourceId Resource ID identifier of the address.
     * @param string $UniqVpcId The vpc where the address resides.
     * @param string $UniqSubnetId The subnet where the address resides.
     * @param string $Vip vip address.
     * @param integer $VPort The port of the address.
     * @param string $WanDomain Public network address domain name.
     * @param integer $WanPort Public network address port.
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VPort",$param) and $param["VPort"] !== null) {
            $this->VPort = $param["VPort"];
        }

        if (array_key_exists("WanDomain",$param) and $param["WanDomain"] !== null) {
            $this->WanDomain = $param["WanDomain"];
        }

        if (array_key_exists("WanPort",$param) and $param["WanPort"] !== null) {
            $this->WanPort = $param["WanPort"];
        }
    }
}
