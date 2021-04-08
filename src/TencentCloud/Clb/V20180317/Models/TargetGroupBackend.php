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
 * Real server bound to a target group
 *
 * @method string getTargetGroupId() Obtain Target group ID
 * @method void setTargetGroupId(string $TargetGroupId) Set Target group ID
 * @method string getType() Obtain Real server type. Valid values: CVM, ENI (coming soon)
 * @method void setType(string $Type) Set Real server type. Valid values: CVM, ENI (coming soon)
 * @method string getInstanceId() Obtain Unique real server ID
 * @method void setInstanceId(string $InstanceId) Set Unique real server ID
 * @method integer getPort() Obtain Listening port of real server
 * @method void setPort(integer $Port) Set Listening port of real server
 * @method integer getWeight() Obtain Forwarding weight of real server. Value range: [0, 100]. Default value: 10.
 * @method void setWeight(integer $Weight) Set Forwarding weight of real server. Value range: [0, 100]. Default value: 10.
 * @method array getPublicIpAddresses() Obtain Public IP of real server
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPublicIpAddresses(array $PublicIpAddresses) Set Public IP of real server
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getPrivateIpAddresses() Obtain Private IP of real server
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) Set Private IP of real server
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceName() Obtain Real server instance name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) Set Real server instance name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRegisteredTime() Obtain Real server binding time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRegisteredTime(string $RegisteredTime) Set Real server binding time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getEniId() Obtain Unique ENI ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEniId(string $EniId) Set Unique ENI ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getZoneId() Obtain AZ ID of the real server
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setZoneId(integer $ZoneId) Set AZ ID of the real server
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class TargetGroupBackend extends AbstractModel
{
    /**
     * @var string Target group ID
     */
    public $TargetGroupId;

    /**
     * @var string Real server type. Valid values: CVM, ENI (coming soon)
     */
    public $Type;

    /**
     * @var string Unique real server ID
     */
    public $InstanceId;

    /**
     * @var integer Listening port of real server
     */
    public $Port;

    /**
     * @var integer Forwarding weight of real server. Value range: [0, 100]. Default value: 10.
     */
    public $Weight;

    /**
     * @var array Public IP of real server
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PublicIpAddresses;

    /**
     * @var array Private IP of real server
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PrivateIpAddresses;

    /**
     * @var string Real server instance name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var string Real server binding time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RegisteredTime;

    /**
     * @var string Unique ENI ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EniId;

    /**
     * @var integer AZ ID of the real server
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ZoneId;

    /**
     * @param string $TargetGroupId Target group ID
     * @param string $Type Real server type. Valid values: CVM, ENI (coming soon)
     * @param string $InstanceId Unique real server ID
     * @param integer $Port Listening port of real server
     * @param integer $Weight Forwarding weight of real server. Value range: [0, 100]. Default value: 10.
     * @param array $PublicIpAddresses Public IP of real server
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $PrivateIpAddresses Private IP of real server
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceName Real server instance name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RegisteredTime Real server binding time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $EniId Unique ENI ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ZoneId AZ ID of the real server
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
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

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }
    }
}
