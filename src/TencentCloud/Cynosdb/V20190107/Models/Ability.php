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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Functions supported by the cluster
 *
 * @method string getIsSupportSlaveZone() Obtain <p>Whether a secondary AZ is supported</p>
 * @method void setIsSupportSlaveZone(string $IsSupportSlaveZone) Set <p>Whether a secondary AZ is supported</p>
 * @method string getNonsupportSlaveZoneReason() Obtain <p>The causes for no support from the availability zone</p>
 * @method void setNonsupportSlaveZoneReason(string $NonsupportSlaveZoneReason) Set <p>The causes for no support from the availability zone</p>
 * @method string getIsSupportRo() Obtain <p>Whether RO instance is supported</p>
 * @method void setIsSupportRo(string $IsSupportRo) Set <p>Whether RO instance is supported</p>
 * @method string getNonsupportRoReason() Obtain <p>Reasons for no support for RO instances</p>
 * @method void setNonsupportRoReason(string $NonsupportRoReason) Set <p>Reasons for no support for RO instances</p>
 * @method string getIsSupportManualSnapshot() Obtain <p>Whether manual snapshot backup initiation is supported</p>
 * @method void setIsSupportManualSnapshot(string $IsSupportManualSnapshot) Set <p>Whether manual snapshot backup initiation is supported</p>
 * @method string getIsSupportTransparentDataEncryption() Obtain <p>Whether transparent data encryption is supported.</p>
 * @method void setIsSupportTransparentDataEncryption(string $IsSupportTransparentDataEncryption) Set <p>Whether transparent data encryption is supported.</p>
 * @method string getNoSupportTransparentDataEncryptionReason() Obtain <p>Reasons for no support for transparent data encryption</p>
 * @method void setNoSupportTransparentDataEncryptionReason(string $NoSupportTransparentDataEncryptionReason) Set <p>Reasons for no support for transparent data encryption</p>
 * @method string getIsSupportManualLogic() Obtain <p>Whether manual initiation of logical backup is supported.</p>
 * @method void setIsSupportManualLogic(string $IsSupportManualLogic) Set <p>Whether manual initiation of logical backup is supported.</p>
 * @method string getIsSupportGlobalEncryption() Obtain <p>Whether global encryption can be enabled</p>
 * @method void setIsSupportGlobalEncryption(string $IsSupportGlobalEncryption) Set <p>Whether global encryption can be enabled</p>
 * @method string getNoSupportGlobalEncryptionReason() Obtain <p>The causes for no support for global encryption</p>
 * @method void setNoSupportGlobalEncryptionReason(string $NoSupportGlobalEncryptionReason) Set <p>The causes for no support for global encryption</p>
 * @method string getNoSupportTransparentDataEncryptionReasonCode() Obtain <p>Status code for reasons of no support for transparent encryption</p>
 * @method void setNoSupportTransparentDataEncryptionReasonCode(string $NoSupportTransparentDataEncryptionReasonCode) Set <p>Status code for reasons of no support for transparent encryption</p>
 * @method string getNoSupportGlobalEncryptionReasonCode() Obtain <p>Status code for the reason why global encryption is not supported</p>
 * @method void setNoSupportGlobalEncryptionReasonCode(string $NoSupportGlobalEncryptionReasonCode) Set <p>Status code for the reason why global encryption is not supported</p>
 */
class Ability extends AbstractModel
{
    /**
     * @var string <p>Whether a secondary AZ is supported</p>
     */
    public $IsSupportSlaveZone;

    /**
     * @var string <p>The causes for no support from the availability zone</p>
     */
    public $NonsupportSlaveZoneReason;

    /**
     * @var string <p>Whether RO instance is supported</p>
     */
    public $IsSupportRo;

    /**
     * @var string <p>Reasons for no support for RO instances</p>
     */
    public $NonsupportRoReason;

    /**
     * @var string <p>Whether manual snapshot backup initiation is supported</p>
     */
    public $IsSupportManualSnapshot;

    /**
     * @var string <p>Whether transparent data encryption is supported.</p>
     */
    public $IsSupportTransparentDataEncryption;

    /**
     * @var string <p>Reasons for no support for transparent data encryption</p>
     */
    public $NoSupportTransparentDataEncryptionReason;

    /**
     * @var string <p>Whether manual initiation of logical backup is supported.</p>
     */
    public $IsSupportManualLogic;

    /**
     * @var string <p>Whether global encryption can be enabled</p>
     */
    public $IsSupportGlobalEncryption;

    /**
     * @var string <p>The causes for no support for global encryption</p>
     */
    public $NoSupportGlobalEncryptionReason;

    /**
     * @var string <p>Status code for reasons of no support for transparent encryption</p>
     */
    public $NoSupportTransparentDataEncryptionReasonCode;

    /**
     * @var string <p>Status code for the reason why global encryption is not supported</p>
     */
    public $NoSupportGlobalEncryptionReasonCode;

    /**
     * @param string $IsSupportSlaveZone <p>Whether a secondary AZ is supported</p>
     * @param string $NonsupportSlaveZoneReason <p>The causes for no support from the availability zone</p>
     * @param string $IsSupportRo <p>Whether RO instance is supported</p>
     * @param string $NonsupportRoReason <p>Reasons for no support for RO instances</p>
     * @param string $IsSupportManualSnapshot <p>Whether manual snapshot backup initiation is supported</p>
     * @param string $IsSupportTransparentDataEncryption <p>Whether transparent data encryption is supported.</p>
     * @param string $NoSupportTransparentDataEncryptionReason <p>Reasons for no support for transparent data encryption</p>
     * @param string $IsSupportManualLogic <p>Whether manual initiation of logical backup is supported.</p>
     * @param string $IsSupportGlobalEncryption <p>Whether global encryption can be enabled</p>
     * @param string $NoSupportGlobalEncryptionReason <p>The causes for no support for global encryption</p>
     * @param string $NoSupportTransparentDataEncryptionReasonCode <p>Status code for reasons of no support for transparent encryption</p>
     * @param string $NoSupportGlobalEncryptionReasonCode <p>Status code for the reason why global encryption is not supported</p>
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

        if (array_key_exists("IsSupportGlobalEncryption",$param) and $param["IsSupportGlobalEncryption"] !== null) {
            $this->IsSupportGlobalEncryption = $param["IsSupportGlobalEncryption"];
        }

        if (array_key_exists("NoSupportGlobalEncryptionReason",$param) and $param["NoSupportGlobalEncryptionReason"] !== null) {
            $this->NoSupportGlobalEncryptionReason = $param["NoSupportGlobalEncryptionReason"];
        }

        if (array_key_exists("NoSupportTransparentDataEncryptionReasonCode",$param) and $param["NoSupportTransparentDataEncryptionReasonCode"] !== null) {
            $this->NoSupportTransparentDataEncryptionReasonCode = $param["NoSupportTransparentDataEncryptionReasonCode"];
        }

        if (array_key_exists("NoSupportGlobalEncryptionReasonCode",$param) and $param["NoSupportGlobalEncryptionReasonCode"] !== null) {
            $this->NoSupportGlobalEncryptionReasonCode = $param["NoSupportGlobalEncryptionReasonCode"];
        }
    }
}
