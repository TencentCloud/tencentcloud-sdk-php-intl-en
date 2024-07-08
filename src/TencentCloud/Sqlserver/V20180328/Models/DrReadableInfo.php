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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getSlaveStatus() Obtain 
 * @method void setSlaveStatus(string $SlaveStatus) Set 
 * @method string getReadableStatus() Obtain 
 * @method void setReadableStatus(string $ReadableStatus) Set 
 * @method string getVip() Obtain 
 * @method void setVip(string $Vip) Set 
 * @method integer getVPort() Obtain 
 * @method void setVPort(integer $VPort) Set 
 * @method string getUniqVpcId() Obtain 
 * @method void setUniqVpcId(string $UniqVpcId) Set 
 * @method string getUniqSubnetId() Obtain 
 * @method void setUniqSubnetId(string $UniqSubnetId) Set 
 */
class DrReadableInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $SlaveStatus;

    /**
     * @var string 
     */
    public $ReadableStatus;

    /**
     * @var string 
     */
    public $Vip;

    /**
     * @var integer 
     */
    public $VPort;

    /**
     * @var string 
     */
    public $UniqVpcId;

    /**
     * @var string 
     */
    public $UniqSubnetId;

    /**
     * @param string $SlaveStatus 
     * @param string $ReadableStatus 
     * @param string $Vip 
     * @param integer $VPort 
     * @param string $UniqVpcId 
     * @param string $UniqSubnetId 
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
        if (array_key_exists("SlaveStatus",$param) and $param["SlaveStatus"] !== null) {
            $this->SlaveStatus = $param["SlaveStatus"];
        }

        if (array_key_exists("ReadableStatus",$param) and $param["ReadableStatus"] !== null) {
            $this->ReadableStatus = $param["ReadableStatus"];
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

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }
    }
}
