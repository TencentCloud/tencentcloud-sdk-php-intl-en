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
 * 
 *
 * @method string getKeyId() Obtain 
 * @method void setKeyId(string $KeyId) Set 
 * @method string getAlias() Obtain 
 * @method void setAlias(string $Alias) Set 
 * @method integer getCreatorUin() Obtain 
 * @method void setCreatorUin(integer $CreatorUin) Set 
 * @method string getDescription() Obtain 
 * @method void setDescription(string $Description) Set 
 * @method integer getCreateTime() Obtain 
 * @method void setCreateTime(integer $CreateTime) Set 
 * @method string getStatus() Obtain 
 * @method void setStatus(string $Status) Set 
 * @method integer getOwnerUin() Obtain 
 * @method void setOwnerUin(integer $OwnerUin) Set 
 * @method string getAlgorithm() Obtain 
 * @method void setAlgorithm(string $Algorithm) Set 
 * @method string getEncryptKey() Obtain 
 * @method void setEncryptKey(string $EncryptKey) Set 
 * @method string getDecryptKey() Obtain 
 * @method void setDecryptKey(string $DecryptKey) Set 
 * @method string getResourceId() Obtain 
 * @method void setResourceId(string $ResourceId) Set 
 * @method boolean getDeviceFingerprintBind() Obtain Whether there is a device fingerprint bound to the current key
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDeviceFingerprintBind(boolean $DeviceFingerprintBind) Set Whether there is a device fingerprint bound to the current key
Note: this field may return null, indicating that no valid values can be obtained.
 */
class WhiteboxKeyInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $KeyId;

    /**
     * @var string 
     */
    public $Alias;

    /**
     * @var integer 
     */
    public $CreatorUin;

    /**
     * @var string 
     */
    public $Description;

    /**
     * @var integer 
     */
    public $CreateTime;

    /**
     * @var string 
     */
    public $Status;

    /**
     * @var integer 
     */
    public $OwnerUin;

    /**
     * @var string 
     */
    public $Algorithm;

    /**
     * @var string 
     */
    public $EncryptKey;

    /**
     * @var string 
     */
    public $DecryptKey;

    /**
     * @var string 
     */
    public $ResourceId;

    /**
     * @var boolean Whether there is a device fingerprint bound to the current key
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DeviceFingerprintBind;

    /**
     * @param string $KeyId 
     * @param string $Alias 
     * @param integer $CreatorUin 
     * @param string $Description 
     * @param integer $CreateTime 
     * @param string $Status 
     * @param integer $OwnerUin 
     * @param string $Algorithm 
     * @param string $EncryptKey 
     * @param string $DecryptKey 
     * @param string $ResourceId 
     * @param boolean $DeviceFingerprintBind Whether there is a device fingerprint bound to the current key
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("Algorithm",$param) and $param["Algorithm"] !== null) {
            $this->Algorithm = $param["Algorithm"];
        }

        if (array_key_exists("EncryptKey",$param) and $param["EncryptKey"] !== null) {
            $this->EncryptKey = $param["EncryptKey"];
        }

        if (array_key_exists("DecryptKey",$param) and $param["DecryptKey"] !== null) {
            $this->DecryptKey = $param["DecryptKey"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("DeviceFingerprintBind",$param) and $param["DeviceFingerprintBind"] !== null) {
            $this->DeviceFingerprintBind = $param["DeviceFingerprintBind"];
        }
    }
}
