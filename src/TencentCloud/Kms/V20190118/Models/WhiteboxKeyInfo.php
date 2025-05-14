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
 * White-box key information
 *
 * @method string getKeyId() Obtain Globally unique white-box key ID
 * @method void setKeyId(string $KeyId) Set Globally unique white-box key ID
 * @method string getAlias() Obtain Unique alias that makes a key more recognizable and understandable. This parameter cannot be empty, can contain 1 to 60 letters, digits, hyphens (-), and underscores (_), and must begin with a letter or digit.
 * @method void setAlias(string $Alias) Set Unique alias that makes a key more recognizable and understandable. This parameter cannot be empty, can contain 1 to 60 letters, digits, hyphens (-), and underscores (_), and must begin with a letter or digit.
 * @method integer getCreatorUin() Obtain Creator
 * @method void setCreatorUin(integer $CreatorUin) Set Creator
 * @method string getDescription() Obtain Key description information
 * @method void setDescription(string $Description) Set Key description information
 * @method integer getCreateTime() Obtain Key creation time in Unix timestamp
 * @method void setCreateTime(integer $CreateTime) Set Key creation time in Unix timestamp
 * @method string getStatus() Obtain White-box key status. Valid values: Enabled, Disabled
 * @method void setStatus(string $Status) Set White-box key status. Valid values: Enabled, Disabled
 * @method integer getOwnerUin() Obtain Creator
 * @method void setOwnerUin(integer $OwnerUin) Set Creator
 * @method string getAlgorithm() Obtain Key algorithm type
 * @method void setAlgorithm(string $Algorithm) Set Key algorithm type
 * @method string getEncryptKey() Obtain Base64-encoded white-box encryption key
 * @method void setEncryptKey(string $EncryptKey) Set Base64-encoded white-box encryption key
 * @method string getDecryptKey() Obtain Base64-encoded white-box decryption key
 * @method void setDecryptKey(string $DecryptKey) Set Base64-encoded white-box decryption key
 * @method string getResourceId() Obtain Resource ID in the format of `creatorUin/$creatorUin/$keyId`
 * @method void setResourceId(string $ResourceId) Set Resource ID in the format of `creatorUin/$creatorUin/$keyId`
 * @method boolean getDeviceFingerprintBind() Obtain Specifies whether there is a device fingerprint bound to the current key.
 * @method void setDeviceFingerprintBind(boolean $DeviceFingerprintBind) Set Specifies whether there is a device fingerprint bound to the current key.
 */
class WhiteboxKeyInfo extends AbstractModel
{
    /**
     * @var string Globally unique white-box key ID
     */
    public $KeyId;

    /**
     * @var string Unique alias that makes a key more recognizable and understandable. This parameter cannot be empty, can contain 1 to 60 letters, digits, hyphens (-), and underscores (_), and must begin with a letter or digit.
     */
    public $Alias;

    /**
     * @var integer Creator
     */
    public $CreatorUin;

    /**
     * @var string Key description information
     */
    public $Description;

    /**
     * @var integer Key creation time in Unix timestamp
     */
    public $CreateTime;

    /**
     * @var string White-box key status. Valid values: Enabled, Disabled
     */
    public $Status;

    /**
     * @var integer Creator
     */
    public $OwnerUin;

    /**
     * @var string Key algorithm type
     */
    public $Algorithm;

    /**
     * @var string Base64-encoded white-box encryption key
     */
    public $EncryptKey;

    /**
     * @var string Base64-encoded white-box decryption key
     */
    public $DecryptKey;

    /**
     * @var string Resource ID in the format of `creatorUin/$creatorUin/$keyId`
     */
    public $ResourceId;

    /**
     * @var boolean Specifies whether there is a device fingerprint bound to the current key.
     */
    public $DeviceFingerprintBind;

    /**
     * @param string $KeyId Globally unique white-box key ID
     * @param string $Alias Unique alias that makes a key more recognizable and understandable. This parameter cannot be empty, can contain 1 to 60 letters, digits, hyphens (-), and underscores (_), and must begin with a letter or digit.
     * @param integer $CreatorUin Creator
     * @param string $Description Key description information
     * @param integer $CreateTime Key creation time in Unix timestamp
     * @param string $Status White-box key status. Valid values: Enabled, Disabled
     * @param integer $OwnerUin Creator
     * @param string $Algorithm Key algorithm type
     * @param string $EncryptKey Base64-encoded white-box encryption key
     * @param string $DecryptKey Base64-encoded white-box decryption key
     * @param string $ResourceId Resource ID in the format of `creatorUin/$creatorUin/$keyId`
     * @param boolean $DeviceFingerprintBind Specifies whether there is a device fingerprint bound to the current key.
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
