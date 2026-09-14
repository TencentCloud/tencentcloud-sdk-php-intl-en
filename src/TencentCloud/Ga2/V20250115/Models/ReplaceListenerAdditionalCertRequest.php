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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReplaceListenerAdditionalCert request structure.
 *
 * @method string getGlobalAcceleratorId() Obtain Global acceleration instance ID.
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) Set Global acceleration instance ID.
 * @method string getListenerId() Obtain Listener ID.
 * @method void setListenerId(string $ListenerId) Set Listener ID.
 * @method string getAdditionalCertificate() Obtain Certificate ID.
 * @method void setAdditionalCertificate(string $AdditionalCertificate) Set Certificate ID.
 * @method string getOldCertificate() Obtain Old certificate ID.
 * @method void setOldCertificate(string $OldCertificate) Set Old certificate ID.
 */
class ReplaceListenerAdditionalCertRequest extends AbstractModel
{
    /**
     * @var string Global acceleration instance ID.
     */
    public $GlobalAcceleratorId;

    /**
     * @var string Listener ID.
     */
    public $ListenerId;

    /**
     * @var string Certificate ID.
     */
    public $AdditionalCertificate;

    /**
     * @var string Old certificate ID.
     */
    public $OldCertificate;

    /**
     * @param string $GlobalAcceleratorId Global acceleration instance ID.
     * @param string $ListenerId Listener ID.
     * @param string $AdditionalCertificate Certificate ID.
     * @param string $OldCertificate Old certificate ID.
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
        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("AdditionalCertificate",$param) and $param["AdditionalCertificate"] !== null) {
            $this->AdditionalCertificate = $param["AdditionalCertificate"];
        }

        if (array_key_exists("OldCertificate",$param) and $param["OldCertificate"] !== null) {
            $this->OldCertificate = $param["OldCertificate"];
        }
    }
}
