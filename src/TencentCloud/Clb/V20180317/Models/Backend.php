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
 * Details of a real server bound to a listener
 *
 * @method string getType() Obtain Real server type. Valid values: CVM, ENI, CCN.
 * @method void setType(string $Type) Set Real server type. Valid values: CVM, ENI, CCN.
 * @method string getInstanceId() Obtain Unique ID of a real server, which can be obtained from the unInstanceId field in the return of the DescribeInstances API
 * @method void setInstanceId(string $InstanceId) Set Unique ID of a real server, which can be obtained from the unInstanceId field in the return of the DescribeInstances API
 * @method integer getPort() Obtain Listening port of a real server
 * @method void setPort(integer $Port) Set Listening port of a real server
 * @method integer getWeight() Obtain Forwarding weight of a real server. Value range: [0, 100]. Default value: 10.
 * @method void setWeight(integer $Weight) Set Forwarding weight of a real server. Value range: [0, 100]. Default value: 10.
 * @method array getPublicIpAddresses() Obtain Public IP of a real server
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPublicIpAddresses(array $PublicIpAddresses) Set Public IP of a real server
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPrivateIpAddresses() Obtain Private IP of a real server
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) Set Private IP of a real server
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceName() Obtain Real server instance names
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) Set Real server instance names
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegisteredTime() Obtain Bound time of a real server
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegisteredTime(string $RegisteredTime) Set Bound time of a real server
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEniId() Obtain Unique ENI ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEniId(string $EniId) Set Unique ENI ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTag() Obtain Tag.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTag(string $Tag) Set Tag.Note: This field may return null, indicating that no valid values can be obtained.
 */
class Backend extends AbstractModel
{
    /**
     * @var string Real server type. Valid values: CVM, ENI, CCN.
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
     * @var string Tag.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tag;

    /**
     * @param string $Type Real server type. Valid values: CVM, ENI, CCN.
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
     * @param string $Tag Tag.Note: This field may return null, indicating that no valid values can be obtained.
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
