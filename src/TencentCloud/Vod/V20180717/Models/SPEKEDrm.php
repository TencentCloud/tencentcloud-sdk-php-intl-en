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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getResourceId() Obtain 
 * @method void setResourceId(string $ResourceId) Set 
 * @method string getKeyServerUrl() Obtain 
 * @method void setKeyServerUrl(string $KeyServerUrl) Set 
 * @method string getVector() Obtain 
 * @method void setVector(string $Vector) Set 
 * @method string getEncryptionMethod() Obtain 
 * @method void setEncryptionMethod(string $EncryptionMethod) Set 
 * @method string getEncryptionPreset() Obtain 
 * @method void setEncryptionPreset(string $EncryptionPreset) Set 
 * @method string getKeyAcquireMode() Obtain 
 * @method void setKeyAcquireMode(string $KeyAcquireMode) Set 
 */
class SPEKEDrm extends AbstractModel
{
    /**
     * @var string 
     */
    public $ResourceId;

    /**
     * @var string 
     */
    public $KeyServerUrl;

    /**
     * @var string 
     */
    public $Vector;

    /**
     * @var string 
     */
    public $EncryptionMethod;

    /**
     * @var string 
     */
    public $EncryptionPreset;

    /**
     * @var string 
     */
    public $KeyAcquireMode;

    /**
     * @param string $ResourceId 
     * @param string $KeyServerUrl 
     * @param string $Vector 
     * @param string $EncryptionMethod 
     * @param string $EncryptionPreset 
     * @param string $KeyAcquireMode 
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("KeyServerUrl",$param) and $param["KeyServerUrl"] !== null) {
            $this->KeyServerUrl = $param["KeyServerUrl"];
        }

        if (array_key_exists("Vector",$param) and $param["Vector"] !== null) {
            $this->Vector = $param["Vector"];
        }

        if (array_key_exists("EncryptionMethod",$param) and $param["EncryptionMethod"] !== null) {
            $this->EncryptionMethod = $param["EncryptionMethod"];
        }

        if (array_key_exists("EncryptionPreset",$param) and $param["EncryptionPreset"] !== null) {
            $this->EncryptionPreset = $param["EncryptionPreset"];
        }

        if (array_key_exists("KeyAcquireMode",$param) and $param["KeyAcquireMode"] !== null) {
            $this->KeyAcquireMode = $param["KeyAcquireMode"];
        }
    }
}
