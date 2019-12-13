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
 * @method string getType() 获取Real server type. Value range: CVM, ENI (coming soon)
 * @method void setType(string $Type) 设置Real server type. Value range: CVM, ENI (coming soon)
 * @method string getInstanceId() 获取Unique ID of a real server, which can be obtained from the unInstanceId field in the return of the DescribeInstances API
 * @method void setInstanceId(string $InstanceId) 设置Unique ID of a real server, which can be obtained from the unInstanceId field in the return of the DescribeInstances API
 * @method integer getPort() 获取Listening port of a real server
 * @method void setPort(integer $Port) 设置Listening port of a real server
 * @method integer getWeight() 获取Forwarding weight of a real server. Value range: [0, 100]. Default value: 10.
 * @method void setWeight(integer $Weight) 设置Forwarding weight of a real server. Value range: [0, 100]. Default value: 10.
 * @method array getPublicIpAddresses() 获取Public IP of a real server
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPublicIpAddresses(array $PublicIpAddresses) 设置Public IP of a real server
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPrivateIpAddresses() 获取Private IP of a real server
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) 设置Private IP of a real server
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceName() 获取Real server instance names
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) 设置Real server instance names
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegisteredTime() 获取Bound time of a real server
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegisteredTime(string $RegisteredTime) 设置Bound time of a real server
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEniId() 获取Unique ENI ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEniId(string $EniId) 设置Unique ENI ID
Note: This field may return null, indicating that no valid values can be obtained.
 */

/**
 *Details of a real server bound to a listener
 */
class Backend extends AbstractModel
{
    /**
     * @var string Real server type. Value range: CVM, ENI (coming soon)
     */
    public $Type;

    /**
     * @var string Unique ID of a real server, which can be obtained from the unInstanceId field in the return of the DescribeInstances API
     */
    public $InstanceId;

    /**
     * @var integer Listening port of a real server
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
     * @var array Private IP of a real server
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PrivateIpAddresses;

    /**
     * @var string Real server instance names
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var string Bound time of a real server
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegisteredTime;

    /**
     * @var string Unique ENI ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EniId;
    /**
     * @param string $Type Real server type. Value range: CVM, ENI (coming soon)
     * @param string $InstanceId Unique ID of a real server, which can be obtained from the unInstanceId field in the return of the DescribeInstances API
     * @param integer $Port Listening port of a real server
     * @param integer $Weight Forwarding weight of a real server. Value range: [0, 100]. Default value: 10.
     * @param array $PublicIpAddresses Public IP of a real server
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PrivateIpAddresses Private IP of a real server
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceName Real server instance names
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RegisteredTime Bound time of a real server
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EniId Unique ENI ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
    }
}
