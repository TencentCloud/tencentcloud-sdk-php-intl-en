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
 * Address
 *
 * @method string getVip() Obtain Address
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setVip(string $Vip) Set Address
Note: this field may return `null`, indicating that no valid value can be found.
 * @method integer getVPort() Obtain Port
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setVPort(integer $VPort) Set Port
Note: this field may return `null`, indicating that no valid value can be found.
 * @method string getUniqVpcId() Obtain VPC ID
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setUniqVpcId(string $UniqVpcId) Set VPC ID
Note: this field may return `null`, indicating that no valid value can be found.
 * @method string getUniqSubnet() Obtain VPC subnet ID
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setUniqSubnet(string $UniqSubnet) Set VPC subnet ID
Note: this field may return `null`, indicating that no valid value can be found.
 * @method string getDesc() Obtain Description
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setDesc(string $Desc) Set Description
Note: this field may return `null`, indicating that no valid value can be found.
 */
class Address extends AbstractModel
{
    /**
     * @var string Address
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $Vip;

    /**
     * @var integer Port
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $VPort;

    /**
     * @var string VPC ID
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $UniqVpcId;

    /**
     * @var string VPC subnet ID
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $UniqSubnet;

    /**
     * @var string Description
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $Desc;

    /**
     * @param string $Vip Address
Note: this field may return `null`, indicating that no valid value can be found.
     * @param integer $VPort Port
Note: this field may return `null`, indicating that no valid value can be found.
     * @param string $UniqVpcId VPC ID
Note: this field may return `null`, indicating that no valid value can be found.
     * @param string $UniqSubnet VPC subnet ID
Note: this field may return `null`, indicating that no valid value can be found.
     * @param string $Desc Description
Note: this field may return `null`, indicating that no valid value can be found.
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
        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VPort",$param) and $param["VPort"] !== null) {
            $this->VPort = $param["VPort"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnet",$param) and $param["UniqSubnet"] !== null) {
            $this->UniqSubnet = $param["UniqSubnet"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
