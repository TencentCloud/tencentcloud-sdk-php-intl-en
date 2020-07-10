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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OverwriteWhiteBoxDeviceFingerprints request structure.
 *
 * @method string getKeyId() Obtain White-box key ID
 * @method void setKeyId(string $KeyId) Set White-box key ID
 * @method array getDeviceFingerprints() Obtain Device fingerprint list. If the list is empty, it means to delete all fingerprint information corresponding to the key. There can be up to 200 entries in the list.
 * @method void setDeviceFingerprints(array $DeviceFingerprints) Set Device fingerprint list. If the list is empty, it means to delete all fingerprint information corresponding to the key. There can be up to 200 entries in the list.
 */
class OverwriteWhiteBoxDeviceFingerprintsRequest extends AbstractModel
{
    /**
     * @var string White-box key ID
     */
    public $KeyId;

    /**
     * @var array Device fingerprint list. If the list is empty, it means to delete all fingerprint information corresponding to the key. There can be up to 200 entries in the list.
     */
    public $DeviceFingerprints;

    /**
     * @param string $KeyId White-box key ID
     * @param array $DeviceFingerprints Device fingerprint list. If the list is empty, it means to delete all fingerprint information corresponding to the key. There can be up to 200 entries in the list.
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("DeviceFingerprints",$param) and $param["DeviceFingerprints"] !== null) {
            $this->DeviceFingerprints = [];
            foreach ($param["DeviceFingerprints"] as $key => $value){
                $obj = new DeviceFingerprint();
                $obj->deserialize($value);
                array_push($this->DeviceFingerprints, $obj);
            }
        }
    }
}
