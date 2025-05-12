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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Features supported by the cluster
 *
 * @method string getIsSupportSlaveZone() Obtain Whether secondary AZ is supported
 * @method void setIsSupportSlaveZone(string $IsSupportSlaveZone) Set Whether secondary AZ is supported
 * @method string getNonsupportSlaveZoneReason() Obtain The causes for no support from an availability zone.
 * @method void setNonsupportSlaveZoneReason(string $NonsupportSlaveZoneReason) Set The causes for no support from an availability zone.
 * @method string getIsSupportRo() Obtain Whether read-only instance is supported
 * @method void setIsSupportRo(string $IsSupportRo) Set Whether read-only instance is supported
 * @method string getNonsupportRoReason() Obtain Reasons why RO instances are not supported.
 * @method void setNonsupportRoReason(string $NonsupportRoReason) Set Reasons why RO instances are not supported.
 * @method string getIsSupportManualSnapshot() Obtain Whether manual snapshot backup initiation is supported.
 * @method void setIsSupportManualSnapshot(string $IsSupportManualSnapshot) Set Whether manual snapshot backup initiation is supported.
 * @method string getIsSupportTransparentDataEncryption() Obtain Whether transparent data encryption is supported.
 * @method void setIsSupportTransparentDataEncryption(string $IsSupportTransparentDataEncryption) Set Whether transparent data encryption is supported.
 * @method string getNoSupportTransparentDataEncryptionReason() Obtain Reasons for no support of transparent data encryption.
 * @method void setNoSupportTransparentDataEncryptionReason(string $NoSupportTransparentDataEncryptionReason) Set Reasons for no support of transparent data encryption.
 * @method string getIsSupportManualLogic() Obtain Whether manual initiation of logical backup is supported.
 * @method void setIsSupportManualLogic(string $IsSupportManualLogic) Set Whether manual initiation of logical backup is supported.
 */
class Ability extends AbstractModel
{
    /**
     * @var string Whether secondary AZ is supported
     */
    public $IsSupportSlaveZone;

    /**
     * @var string The causes for no support from an availability zone.
     */
    public $NonsupportSlaveZoneReason;

    /**
     * @var string Whether read-only instance is supported
     */
    public $IsSupportRo;

    /**
     * @var string Reasons why RO instances are not supported.
     */
    public $NonsupportRoReason;

    /**
     * @var string Whether manual snapshot backup initiation is supported.
     */
    public $IsSupportManualSnapshot;

    /**
     * @var string Whether transparent data encryption is supported.
     */
    public $IsSupportTransparentDataEncryption;

    /**
     * @var string Reasons for no support of transparent data encryption.
     */
    public $NoSupportTransparentDataEncryptionReason;

    /**
     * @var string Whether manual initiation of logical backup is supported.
     */
    public $IsSupportManualLogic;

    /**
     * @param string $IsSupportSlaveZone Whether secondary AZ is supported
     * @param string $NonsupportSlaveZoneReason The causes for no support from an availability zone.
     * @param string $IsSupportRo Whether read-only instance is supported
     * @param string $NonsupportRoReason Reasons why RO instances are not supported.
     * @param string $IsSupportManualSnapshot Whether manual snapshot backup initiation is supported.
     * @param string $IsSupportTransparentDataEncryption Whether transparent data encryption is supported.
     * @param string $NoSupportTransparentDataEncryptionReason Reasons for no support of transparent data encryption.
     * @param string $IsSupportManualLogic Whether manual initiation of logical backup is supported.
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
        if (array_key_exists("IsSupportSlaveZone",$param) and $param["IsSupportSlaveZone"] !== null) {
            $this->IsSupportSlaveZone = $param["IsSupportSlaveZone"];
        }

        if (array_key_exists("NonsupportSlaveZoneReason",$param) and $param["NonsupportSlaveZoneReason"] !== null) {
            $this->NonsupportSlaveZoneReason = $param["NonsupportSlaveZoneReason"];
        }

        if (array_key_exists("IsSupportRo",$param) and $param["IsSupportRo"] !== null) {
            $this->IsSupportRo = $param["IsSupportRo"];
        }

        if (array_key_exists("NonsupportRoReason",$param) and $param["NonsupportRoReason"] !== null) {
            $this->NonsupportRoReason = $param["NonsupportRoReason"];
        }

        if (array_key_exists("IsSupportManualSnapshot",$param) and $param["IsSupportManualSnapshot"] !== null) {
            $this->IsSupportManualSnapshot = $param["IsSupportManualSnapshot"];
        }

        if (array_key_exists("IsSupportTransparentDataEncryption",$param) and $param["IsSupportTransparentDataEncryption"] !== null) {
            $this->IsSupportTransparentDataEncryption = $param["IsSupportTransparentDataEncryption"];
        }

        if (array_key_exists("NoSupportTransparentDataEncryptionReason",$param) and $param["NoSupportTransparentDataEncryptionReason"] !== null) {
            $this->NoSupportTransparentDataEncryptionReason = $param["NoSupportTransparentDataEncryptionReason"];
        }

        if (array_key_exists("IsSupportManualLogic",$param) and $param["IsSupportManualLogic"] !== null) {
            $this->IsSupportManualLogic = $param["IsSupportManualLogic"];
        }
    }
}
