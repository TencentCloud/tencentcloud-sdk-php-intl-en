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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getKeyName() Obtain 
 * @method void setKeyName(string $KeyName) Set 
 * @method integer getKeyType() Obtain 
 * @method void setKeyType(integer $KeyType) Set 
 * @method string getKeyPrompt() Obtain 
 * @method void setKeyPrompt(string $KeyPrompt) Set 
 * @method string getKeyExpectedValue() Obtain 
 * @method void setKeyExpectedValue(string $KeyExpectedValue) Set 
 * @method string getKeyAuditPrompt() Obtain 
 * @method void setKeyAuditPrompt(string $KeyAuditPrompt) Set 
 */
class ItemNames extends AbstractModel
{
    /**
     * @var string 
     */
    public $KeyName;

    /**
     * @var integer 
     */
    public $KeyType;

    /**
     * @var string 
     */
    public $KeyPrompt;

    /**
     * @var string 
     */
    public $KeyExpectedValue;

    /**
     * @var string 
     */
    public $KeyAuditPrompt;

    /**
     * @param string $KeyName 
     * @param integer $KeyType 
     * @param string $KeyPrompt 
     * @param string $KeyExpectedValue 
     * @param string $KeyAuditPrompt 
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
        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
        }

        if (array_key_exists("KeyType",$param) and $param["KeyType"] !== null) {
            $this->KeyType = $param["KeyType"];
        }

        if (array_key_exists("KeyPrompt",$param) and $param["KeyPrompt"] !== null) {
            $this->KeyPrompt = $param["KeyPrompt"];
        }

        if (array_key_exists("KeyExpectedValue",$param) and $param["KeyExpectedValue"] !== null) {
            $this->KeyExpectedValue = $param["KeyExpectedValue"];
        }

        if (array_key_exists("KeyAuditPrompt",$param) and $param["KeyAuditPrompt"] !== null) {
            $this->KeyAuditPrompt = $param["KeyAuditPrompt"];
        }
    }
}
