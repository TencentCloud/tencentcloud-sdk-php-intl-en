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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getPort() Obtain Listening port of a real server
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPort(integer $Port) Set Listening port of a real server
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Real server type. Value range: CVM (Cloud Virtual Machine), ENI (Elastic Network Interface). This parameter does not take effect currently as an input parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Real server type. Value range: CVM (Cloud Virtual Machine), ENI (Elastic Network Interface). This parameter does not take effect currently as an input parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Unique ID of a CVM instance, which needs to be passed in when binding a CVM instance and can be obtained from the InstanceId field in the return of the DescribeInstances API.
Note: Either InstanceId or EniIp must be passed in.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Unique ID of a CVM instance, which needs to be passed in when binding a CVM instance and can be obtained from the InstanceId field in the return of the DescribeInstances API.
Note: Either InstanceId or EniIp must be passed in.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getWeight() Obtain Forwarding weight of a real server. Value range: [0, 100]. Default value: 10.
 * @method void setWeight(integer $Weight) Set Forwarding weight of a real server. Value range: [0, 100]. Default value: 10.
 * @method string getEniIp() Obtain This parameter must be passed in when you bind an ENI, which represents the IP address of the ENI. The ENI has to be bound to a CVM instance first before it can be bound to a CLB instance. Note: Either InstanceId or EniIp must be passed in. To bind an ENI, you need to submit a ticket for application first.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEniIp(string $EniIp) Set This parameter must be passed in when you bind an ENI, which represents the IP address of the ENI. The ENI has to be bound to a CVM instance first before it can be bound to a CLB instance. Note: Either InstanceId or EniIp must be passed in. To bind an ENI, you need to submit a ticket for application first.
Note: This field may return null, indicating that no valid values can be obtained.
 */

/**
 *Redirect target, i.e., the real server bound to a CLB
 */
class Target extends AbstractModel
{
    /**
     * @var integer Listening port of a real server
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @var string Real server type. Value range: CVM (Cloud Virtual Machine), ENI (Elastic Network Interface). This parameter does not take effect currently as an input parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Unique ID of a CVM instance, which needs to be passed in when binding a CVM instance and can be obtained from the InstanceId field in the return of the DescribeInstances API.
Note: Either InstanceId or EniIp must be passed in.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var integer Forwarding weight of a real server. Value range: [0, 100]. Default value: 10.
     */
    public $Weight;

    /**
     * @var string This parameter must be passed in when you bind an ENI, which represents the IP address of the ENI. The ENI has to be bound to a CVM instance first before it can be bound to a CLB instance. Note: Either InstanceId or EniIp must be passed in. To bind an ENI, you need to submit a ticket for application first.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EniIp;
    /**
     * @param integer $Port Listening port of a real server
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Real server type. Value range: CVM (Cloud Virtual Machine), ENI (Elastic Network Interface). This parameter does not take effect currently as an input parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Unique ID of a CVM instance, which needs to be passed in when binding a CVM instance and can be obtained from the InstanceId field in the return of the DescribeInstances API.
Note: Either InstanceId or EniIp must be passed in.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Weight Forwarding weight of a real server. Value range: [0, 100]. Default value: 10.
     * @param string $EniIp This parameter must be passed in when you bind an ENI, which represents the IP address of the ENI. The ENI has to be bound to a CVM instance first before it can be bound to a CLB instance. Note: Either InstanceId or EniIp must be passed in. To bind an ENI, you need to submit a ticket for application first.
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
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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
