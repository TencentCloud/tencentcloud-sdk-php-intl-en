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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Binding relationship of the ENI
 *
 * @method string getInstanceId() Obtain CVM instance ID.
 * @method void setInstanceId(string $InstanceId) Set CVM instance ID.
 * @method integer getDeviceIndex() Obtain The serial number of ENI in the CVM instance.
 * @method void setDeviceIndex(integer $DeviceIndex) Set The serial number of ENI in the CVM instance.
 * @method string getInstanceAccountId() Obtain The account information of the CVM owner.
 * @method void setInstanceAccountId(string $InstanceAccountId) Set The account information of the CVM owner.
 * @method string getAttachTime() Obtain Binding time
 * @method void setAttachTime(string $AttachTime) Set Binding time
 */
class NetworkInterfaceAttachment extends AbstractModel
{
    /**
     * @var string CVM instance ID.
     */
    public $InstanceId;

    /**
     * @var integer The serial number of ENI in the CVM instance.
     */
    public $DeviceIndex;

    /**
     * @var string The account information of the CVM owner.
     */
    public $InstanceAccountId;

    /**
     * @var string Binding time
     */
    public $AttachTime;

    /**
     * @param string $InstanceId CVM instance ID.
     * @param integer $DeviceIndex The serial number of ENI in the CVM instance.
     * @param string $InstanceAccountId The account information of the CVM owner.
     * @param string $AttachTime Binding time
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DeviceIndex",$param) and $param["DeviceIndex"] !== null) {
            $this->DeviceIndex = $param["DeviceIndex"];
        }

        if (array_key_exists("InstanceAccountId",$param) and $param["InstanceAccountId"] !== null) {
            $this->InstanceAccountId = $param["InstanceAccountId"];
        }

        if (array_key_exists("AttachTime",$param) and $param["AttachTime"] !== null) {
            $this->AttachTime = $param["AttachTime"];
        }
    }
}
