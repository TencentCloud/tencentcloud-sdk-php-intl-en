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
 * Replica server read-only information
 *
 * @method string getSlaveStatus() Obtain Replica server status. Valid values: enable - running; disable - unavailable
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSlaveStatus(string $SlaveStatus) Set Replica server status. Valid values: enable - running; disable - unavailable
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReadableStatus() Obtain Replica server readable status. Valid values: enable - enabled; disable - disabled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReadableStatus(string $ReadableStatus) Set Replica server readable status. Valid values: enable - enabled; disable - disabled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVip() Obtain Replica server read-only VIP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVip(string $Vip) Set Replica server read-only VIP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVPort() Obtain Replica server read-only port
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVPort(integer $VPort) Set Replica server read-only port
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUniqVpcId() Obtain Replica server VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUniqVpcId(string $UniqVpcId) Set Replica server VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUniqSubnetId() Obtain Replica server VPC subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUniqSubnetId(string $UniqSubnetId) Set Replica server VPC subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DrReadableInfo extends AbstractModel
{
    /**
     * @var string Replica server status. Valid values: enable - running; disable - unavailable
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SlaveStatus;

    /**
     * @var string Replica server readable status. Valid values: enable - enabled; disable - disabled
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReadableStatus;

    /**
     * @var string Replica server read-only VIP
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Vip;

    /**
     * @var integer Replica server read-only port
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VPort;

    /**
     * @var string Replica server VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UniqVpcId;

    /**
     * @var string Replica server VPC subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UniqSubnetId;

    /**
     * @param string $SlaveStatus Replica server status. Valid values: enable - running; disable - unavailable
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ReadableStatus Replica server readable status. Valid values: enable - enabled; disable - disabled
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Vip Replica server read-only VIP
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VPort Replica server read-only port
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UniqVpcId Replica server VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UniqSubnetId Replica server VPC subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
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
