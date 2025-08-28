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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceSSL request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getType() Obtain Operation type. enable - enable SSL; disable - disable SSL; renew - update the validity period of the certificate.
 * @method void setType(string $Type) Set Operation type. enable - enable SSL; disable - disable SSL; renew - update the validity period of the certificate.
 * @method integer getWaitSwitch() Obtain Operation settings. 0 - execute immediately; 1 - execute within the maintenance time. The default value is 0.
 * @method void setWaitSwitch(integer $WaitSwitch) Set Operation settings. 0 - execute immediately; 1 - execute within the maintenance time. The default value is 0.
 * @method integer getIsKMS() Obtain Whether it is protected through KMS encryption. 0 - no; 1 - yes. The default value is 0.
 * @method void setIsKMS(integer $IsKMS) Set Whether it is protected through KMS encryption. 0 - no; 1 - yes. The default value is 0.
 * @method string getKeyId() Obtain This parameter is required when the value of IsKMS is 1.
 * @method void setKeyId(string $KeyId) Set This parameter is required when the value of IsKMS is 1.
 * @method string getKeyRegion() Obtain This parameter is required when the value of IsKMS is 1.
 * @method void setKeyRegion(string $KeyRegion) Set This parameter is required when the value of IsKMS is 1.
 */
class ModifyDBInstanceSSLRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Operation type. enable - enable SSL; disable - disable SSL; renew - update the validity period of the certificate.
     */
    public $Type;

    /**
     * @var integer Operation settings. 0 - execute immediately; 1 - execute within the maintenance time. The default value is 0.
     */
    public $WaitSwitch;

    /**
     * @var integer Whether it is protected through KMS encryption. 0 - no; 1 - yes. The default value is 0.
     */
    public $IsKMS;

    /**
     * @var string This parameter is required when the value of IsKMS is 1.
     */
    public $KeyId;

    /**
     * @var string This parameter is required when the value of IsKMS is 1.
     */
    public $KeyRegion;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $Type Operation type. enable - enable SSL; disable - disable SSL; renew - update the validity period of the certificate.
     * @param integer $WaitSwitch Operation settings. 0 - execute immediately; 1 - execute within the maintenance time. The default value is 0.
     * @param integer $IsKMS Whether it is protected through KMS encryption. 0 - no; 1 - yes. The default value is 0.
     * @param string $KeyId This parameter is required when the value of IsKMS is 1.
     * @param string $KeyRegion This parameter is required when the value of IsKMS is 1.
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("WaitSwitch",$param) and $param["WaitSwitch"] !== null) {
            $this->WaitSwitch = $param["WaitSwitch"];
        }

        if (array_key_exists("IsKMS",$param) and $param["IsKMS"] !== null) {
            $this->IsKMS = $param["IsKMS"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("KeyRegion",$param) and $param["KeyRegion"] !== null) {
            $this->KeyRegion = $param["KeyRegion"];
        }
    }
}
