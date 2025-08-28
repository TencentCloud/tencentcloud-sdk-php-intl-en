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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getAction() Obtain 
 * @method void setAction(string $Action) Set 
 * @method string getCidrIp() Obtain 
 * @method void setCidrIp(string $CidrIp) Set 
 * @method string getPortRange() Obtain 
 * @method void setPortRange(string $PortRange) Set 
 * @method string getIpProtocol() Obtain 
 * @method void setIpProtocol(string $IpProtocol) Set 
 * @method string getDir() Obtain 
 * @method void setDir(string $Dir) Set 
 */
class SecurityGroupPolicy extends AbstractModel
{
    /**
     * @var string 
     */
    public $Action;

    /**
     * @var string 
     */
    public $CidrIp;

    /**
     * @var string 
     */
    public $PortRange;

    /**
     * @var string 
     */
    public $IpProtocol;

    /**
     * @var string 
     */
    public $Dir;

    /**
     * @param string $Action 
     * @param string $CidrIp 
     * @param string $PortRange 
     * @param string $IpProtocol 
     * @param string $Dir 
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("CidrIp",$param) and $param["CidrIp"] !== null) {
            $this->CidrIp = $param["CidrIp"];
        }

        if (array_key_exists("PortRange",$param) and $param["PortRange"] !== null) {
            $this->PortRange = $param["PortRange"];
        }

        if (array_key_exists("IpProtocol",$param) and $param["IpProtocol"] !== null) {
            $this->IpProtocol = $param["IpProtocol"];
        }

        if (array_key_exists("Dir",$param) and $param["Dir"] !== null) {
            $this->Dir = $param["Dir"];
        }
    }
}
