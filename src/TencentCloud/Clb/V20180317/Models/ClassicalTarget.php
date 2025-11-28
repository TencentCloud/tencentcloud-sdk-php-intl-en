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
 * Real server information of a classic CLB
 *
 * @method string getType() Obtain Real server type. Value range: CVM, ENI (coming soon)
 * @method void setType(string $Type) Set Real server type. Value range: CVM, ENI (coming soon)
 * @method string getInstanceId() Obtain Unique ID of a real server, which can be obtained from the unInstanceId field in the return of the DescribeInstances API
 * @method void setInstanceId(string $InstanceId) Set Unique ID of a real server, which can be obtained from the unInstanceId field in the return of the DescribeInstances API
 * @method integer getWeight() Obtain Forwarding weight of a real server. Value range: [0, 100]. Default value: 10.
 * @method void setWeight(integer $Weight) Set Forwarding weight of a real server. Value range: [0, 100]. Default value: 10.
 * @method array getPublicIpAddresses() Obtain Public network IP of the real server
 * @method void setPublicIpAddresses(array $PublicIpAddresses) Set Public network IP of the real server
 * @method array getPrivateIpAddresses() Obtain Private network IP of the real server
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) Set Private network IP of the real server
 * @method string getInstanceName() Obtain Instance name of the real server
 * @method void setInstanceName(string $InstanceName) Set Instance name of the real server
 * @method integer getRunFlag() Obtain Backend service status.
1: failed; 2: running; 3: creating; 4: shut down; 5: returned; 6: returning; 7: restarting; 8: starting; 9: shutting down; 10: resetting password; 11: formatting; 12: making image; 13: setting bandwidth; 14: reinstalling system; 19: upgrading; 21: hot migrating.
 * @method void setRunFlag(integer $RunFlag) Set Backend service status.
1: failed; 2: running; 3: creating; 4: shut down; 5: returned; 6: returning; 7: restarting; 8: starting; 9: shutting down; 10: resetting password; 11: formatting; 12: making image; 13: setting bandwidth; 14: reinstalling system; 19: upgrading; 21: hot migrating.
 */
class ClassicalTarget extends AbstractModel
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
     * @var integer Forwarding weight of a real server. Value range: [0, 100]. Default value: 10.
     */
    public $Weight;

    /**
     * @var array Public network IP of the real server
     */
    public $PublicIpAddresses;

    /**
     * @var array Private network IP of the real server
     */
    public $PrivateIpAddresses;

    /**
     * @var string Instance name of the real server
     */
    public $InstanceName;

    /**
     * @var integer Backend service status.
1: failed; 2: running; 3: creating; 4: shut down; 5: returned; 6: returning; 7: restarting; 8: starting; 9: shutting down; 10: resetting password; 11: formatting; 12: making image; 13: setting bandwidth; 14: reinstalling system; 19: upgrading; 21: hot migrating.
     */
    public $RunFlag;

    /**
     * @param string $Type Real server type. Value range: CVM, ENI (coming soon)
     * @param string $InstanceId Unique ID of a real server, which can be obtained from the unInstanceId field in the return of the DescribeInstances API
     * @param integer $Weight Forwarding weight of a real server. Value range: [0, 100]. Default value: 10.
     * @param array $PublicIpAddresses Public network IP of the real server
     * @param array $PrivateIpAddresses Private network IP of the real server
     * @param string $InstanceName Instance name of the real server
     * @param integer $RunFlag Backend service status.
1: failed; 2: running; 3: creating; 4: shut down; 5: returned; 6: returning; 7: restarting; 8: starting; 9: shutting down; 10: resetting password; 11: formatting; 12: making image; 13: setting bandwidth; 14: reinstalling system; 19: upgrading; 21: hot migrating.
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

        if (array_key_exists("RunFlag",$param) and $param["RunFlag"] !== null) {
            $this->RunFlag = $param["RunFlag"];
        }
    }
}
