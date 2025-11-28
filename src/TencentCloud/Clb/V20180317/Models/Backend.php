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
 * Details of a real server bound to a listener
 *
 * @method string getType() Obtain Specifies the backend service type. valid values: CVM, ENI, CCN, EVM, GLOBALROUTE, NAT, SRV.
 * @method void setType(string $Type) Set Specifies the backend service type. valid values: CVM, ENI, CCN, EVM, GLOBALROUTE, NAT, SRV.
 * @method string getInstanceId() Obtain Unique ID of a real server, which can be obtained from the unInstanceId field in the return of the DescribeInstances API
 * @method void setInstanceId(string $InstanceId) Set Unique ID of a real server, which can be obtained from the unInstanceId field in the return of the DescribeInstances API
 * @method integer getPort() Obtain Specifies the listening port of the backend service. if it is a full listening target group bound to a port range listener, this port returns 0, indicating an invalid port. the port of the bound backend service follows the listener port.
 * @method void setPort(integer $Port) Set Specifies the listening port of the backend service. if it is a full listening target group bound to a port range listener, this port returns 0, indicating an invalid port. the port of the bound backend service follows the listener port.
 * @method integer getWeight() Obtain Forwarding weight of a real server. Value range: [0, 100]. Default value: 10.
 * @method void setWeight(integer $Weight) Set Forwarding weight of a real server. Value range: [0, 100]. Default value: 10.
 * @method array getPublicIpAddresses() Obtain Public IP of a real server
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPublicIpAddresses(array $PublicIpAddresses) Set Public IP of a real server
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPrivateIpAddresses() Obtain Private network IP of the real server
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) Set Private network IP of the real server
 * @method string getInstanceName() Obtain Real server instance names
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) Set Real server instance names
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegisteredTime() Obtain Real server binding time
 * @method void setRegisteredTime(string $RegisteredTime) Set Real server binding time
 * @method string getEniId() Obtain Unique ENI ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEniId(string $EniId) Set Unique ENI ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTag() Obtain Tag.
 * @method void setTag(string $Tag) Set Tag.
 */
class Backend extends AbstractModel
{
    /**
     * @var string Specifies the backend service type. valid values: CVM, ENI, CCN, EVM, GLOBALROUTE, NAT, SRV.
     */
    public $Type;

    /**
     * @var string Unique ID of a real server, which can be obtained from the unInstanceId field in the return of the DescribeInstances API
     */
    public $InstanceId;

    /**
     * @var integer Specifies the listening port of the backend service. if it is a full listening target group bound to a port range listener, this port returns 0, indicating an invalid port. the port of the bound backend service follows the listener port.
     */
    public $Port;

    /**
     * @var integer Forwarding weight of a real server. Value range: [0, 100]. Default value: 10.
     */
    public $Weight;

    /**
     * @var array Public IP of a real server
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PublicIpAddresses;

    /**
     * @var array Private network IP of the real server
     */
    public $PrivateIpAddresses;

    /**
     * @var string Real server instance names
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var string Real server binding time
     */
    public $RegisteredTime;

    /**
     * @var string Unique ENI ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EniId;

    /**
     * @var string Tag.
     */
    public $Tag;

    /**
     * @param string $Type Specifies the backend service type. valid values: CVM, ENI, CCN, EVM, GLOBALROUTE, NAT, SRV.
     * @param string $InstanceId Unique ID of a real server, which can be obtained from the unInstanceId field in the return of the DescribeInstances API
     * @param integer $Port Specifies the listening port of the backend service. if it is a full listening target group bound to a port range listener, this port returns 0, indicating an invalid port. the port of the bound backend service follows the listener port.
     * @param integer $Weight Forwarding weight of a real server. Value range: [0, 100]. Default value: 10.
     * @param array $PublicIpAddresses Public IP of a real server
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PrivateIpAddresses Private network IP of the real server
     * @param string $InstanceName Real server instance names
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RegisteredTime Real server binding time
     * @param string $EniId Unique ENI ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Tag Tag.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("RegisteredTime",$param) and $param["RegisteredTime"] !== null) {
            $this->RegisteredTime = $param["RegisteredTime"];
        }

        if (array_key_exists("EniId",$param) and $param["EniId"] !== null) {
            $this->EniId = $param["EniId"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }
    }
}
