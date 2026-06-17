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
 * It is used for the health check status of the target group backend RS.
 *
 * @method string getInstanceIp() Obtain IP of backend RS
 * @method void setInstanceIp(string $InstanceIp) Set IP of backend RS
 * @method string getStatus() Obtain Health check status. Parameter values and meanings are as follows:
● on: Indicates checking.
● off: means health check disabled.
● Health: Indicates healthy.
● unhealth: indicates being abnormal.
 * @method void setStatus(string $Status) Set Health check status. Parameter values and meanings are as follows:
● on: Indicates checking.
● off: means health check disabled.
● Health: Indicates healthy.
● unhealth: indicates being abnormal.
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method integer getPort() Obtain Port.
 * @method void setPort(integer $Port) Set Port.
 * @method string getEniId() Obtain NIC ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEniId(string $EniId) Set NIC ID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TargetGroupInstanceStatus extends AbstractModel
{
    /**
     * @var string IP of backend RS
     */
    public $InstanceIp;

    /**
     * @var string Health check status. Parameter values and meanings are as follows:
● on: Indicates checking.
● off: means health check disabled.
● Health: Indicates healthy.
● unhealth: indicates being abnormal.
     */
    public $Status;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var integer Port.
     */
    public $Port;

    /**
     * @var string NIC ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EniId;

    /**
     * @param string $InstanceIp IP of backend RS
     * @param string $Status Health check status. Parameter values and meanings are as follows:
● on: Indicates checking.
● off: means health check disabled.
● Health: Indicates healthy.
● unhealth: indicates being abnormal.
     * @param string $InstanceId Instance ID.
     * @param integer $Port Port.
     * @param string $EniId NIC ID
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
        if (array_key_exists("InstanceIp",$param) and $param["InstanceIp"] !== null) {
            $this->InstanceIp = $param["InstanceIp"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("EniId",$param) and $param["EniId"] !== null) {
            $this->EniId = $param["EniId"];
        }
    }
}
