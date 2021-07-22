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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EIP association details
 *
 * @method string getEipAddressRegion() Obtain Region of the Anti-DDoS instance bound to the EIP. For example, hk indicates Hong Kong.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setEipAddressRegion(string $EipAddressRegion) Set Region of the Anti-DDoS instance bound to the EIP. For example, hk indicates Hong Kong.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getEipBoundRscIns() Obtain ID of the bound resource. For example, an ID may be bound to an CVM instance.
Note: This is field may return `null`, indicating that no valid value can be obtained.
 * @method void setEipBoundRscIns(string $EipBoundRscIns) Set ID of the bound resource. For example, an ID may be bound to an CVM instance.
Note: This is field may return `null`, indicating that no valid value can be obtained.
 * @method string getEipBoundRscEni() Obtain ID of the bound ENI
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setEipBoundRscEni(string $EipBoundRscEni) Set ID of the bound ENI
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getEipBoundRscVip() Obtain Private IP of the bound resource
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setEipBoundRscVip(string $EipBoundRscVip) Set Private IP of the bound resource
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getModifyTime() Obtain Modification time
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Modification time
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class EipAddressRelation extends AbstractModel
{
    /**
     * @var string Region of the Anti-DDoS instance bound to the EIP. For example, hk indicates Hong Kong.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $EipAddressRegion;

    /**
     * @var string ID of the bound resource. For example, an ID may be bound to an CVM instance.
Note: This is field may return `null`, indicating that no valid value can be obtained.
     */
    public $EipBoundRscIns;

    /**
     * @var string ID of the bound ENI
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $EipBoundRscEni;

    /**
     * @var string Private IP of the bound resource
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $EipBoundRscVip;

    /**
     * @var string Modification time
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ModifyTime;

    /**
     * @param string $EipAddressRegion Region of the Anti-DDoS instance bound to the EIP. For example, hk indicates Hong Kong.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $EipBoundRscIns ID of the bound resource. For example, an ID may be bound to an CVM instance.
Note: This is field may return `null`, indicating that no valid value can be obtained.
     * @param string $EipBoundRscEni ID of the bound ENI
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $EipBoundRscVip Private IP of the bound resource
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $ModifyTime Modification time
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("EipAddressRegion",$param) and $param["EipAddressRegion"] !== null) {
            $this->EipAddressRegion = $param["EipAddressRegion"];
        }

        if (array_key_exists("EipBoundRscIns",$param) and $param["EipBoundRscIns"] !== null) {
            $this->EipBoundRscIns = $param["EipBoundRscIns"];
        }

        if (array_key_exists("EipBoundRscEni",$param) and $param["EipBoundRscEni"] !== null) {
            $this->EipBoundRscEni = $param["EipBoundRscEni"];
        }

        if (array_key_exists("EipBoundRscVip",$param) and $param["EipBoundRscVip"] !== null) {
            $this->EipBoundRscVip = $param["EipBoundRscVip"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
