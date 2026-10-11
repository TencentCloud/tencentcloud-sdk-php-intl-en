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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyWebPageProtectSetting request structure.
 *
 * @method integer getModifyType() Obtain Operation type required 1. Directory name 2. Protected file types
 * @method void setModifyType(integer $ModifyType) Set Operation type required 1. Directory name 2. Protected file types
 * @method string getValue() Obtain Submitted value
 * @method void setValue(string $Value) Set Submitted value
 * @method string getId() Obtain Corresponding protect_path configuration
 * @method void setId(string $Id) Set Corresponding protect_path configuration
 */
class ModifyWebPageProtectSettingRequest extends AbstractModel
{
    /**
     * @var integer Operation type required 1. Directory name 2. Protected file types
     */
    public $ModifyType;

    /**
     * @var string Submitted value
     */
    public $Value;

    /**
     * @var string Corresponding protect_path configuration
     */
    public $Id;

    /**
     * @param integer $ModifyType Operation type required 1. Directory name 2. Protected file types
     * @param string $Value Submitted value
     * @param string $Id Corresponding protect_path configuration
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
        if (array_key_exists("ModifyType",$param) and $param["ModifyType"] !== null) {
            $this->ModifyType = $param["ModifyType"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
