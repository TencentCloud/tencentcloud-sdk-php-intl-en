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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AuthToken basic information.
 *
 * @method string getValue() Obtain Token value.
 * @method void setValue(string $Value) Set Token value.
 * @method string getName() Obtain Token alias.
 * @method void setName(string $Name) Set Token alias.
 * @method string getDescription() Obtain Token description.
 * @method void setDescription(string $Description) Set Token description.
 * @method string getCreateTime() Obtain Token creation time.
 * @method void setCreateTime(string $CreateTime) Set Token creation time.
 * @method string getStatus() Obtain Token status.
 * @method void setStatus(string $Status) Set Token status.
 */
class AuthTokenBase extends AbstractModel
{
    /**
     * @var string Token value.
     */
    public $Value;

    /**
     * @var string Token alias.
     */
    public $Name;

    /**
     * @var string Token description.
     */
    public $Description;

    /**
     * @var string Token creation time.
     */
    public $CreateTime;

    /**
     * @var string Token status.
     */
    public $Status;

    /**
     * @param string $Value Token value.
     * @param string $Name Token alias.
     * @param string $Description Token description.
     * @param string $CreateTime Token creation time.
     * @param string $Status Token status.
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
        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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
    }
}
