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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLB backend target
 *
 * @method integer getPort() Obtain Listening port of the real server
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPort(integer $Port) Set Listening port of the real server
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain CVM instance ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set CVM instance ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getWeight() Obtain Forwarding weight of the real server. Value range: [0, 100]. Default value: 10.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWeight(integer $Weight) Set Forwarding weight of the real server. Value range: [0, 100]. Default value: 10.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getEniIp() Obtain You need to pass in this parameter when binding an ENI. It represents the IP address of the ENI. You must bind an ENI to a CVM instance first before you can bind it to a CLB instance. Note: you must pass in either `InstanceId` or `EniIp`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEniIp(string $EniIp) Set You need to pass in this parameter when binding an ENI. It represents the IP address of the ENI. You must bind an ENI to a CVM instance first before you can bind it to a CLB instance. Note: you must pass in either `InstanceId` or `EniIp`.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class Target extends AbstractModel
{
    /**
     * @var integer Listening port of the real server
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @var string CVM instance ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var integer Forwarding weight of the real server. Value range: [0, 100]. Default value: 10.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Weight;

    /**
     * @var string You need to pass in this parameter when binding an ENI. It represents the IP address of the ENI. You must bind an ENI to a CVM instance first before you can bind it to a CLB instance. Note: you must pass in either `InstanceId` or `EniIp`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EniIp;

    /**
     * @param integer $Port Listening port of the real server
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId CVM instance ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Weight Forwarding weight of the real server. Value range: [0, 100]. Default value: 10.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $EniIp You need to pass in this parameter when binding an ENI. It represents the IP address of the ENI. You must bind an ENI to a CVM instance first before you can bind it to a CLB instance. Note: you must pass in either `InstanceId` or `EniIp`.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("EniIp",$param) and $param["EniIp"] !== null) {
            $this->EniIp = $param["EniIp"];
        }
    }
}
