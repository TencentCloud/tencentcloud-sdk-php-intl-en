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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of an edge function.
 *
 * @method string getFunctionId() Obtain Function ID.
 * @method void setFunctionId(string $FunctionId) Set Function ID.
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getName() Obtain Function name.
 * @method void setName(string $Name) Set Function name.
 * @method string getRemark() Obtain Function description.
 * @method void setRemark(string $Remark) Set Function description.
 * @method string getContent() Obtain Function content.
 * @method void setContent(string $Content) Set Function content.
 * @method string getDomain() Obtain Default domain name of a function.
 * @method void setDomain(string $Domain) Set Default domain name of a function.
 * @method string getCreateTime() Obtain Creation time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
 * @method void setCreateTime(string $CreateTime) Set Creation time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
 * @method string getUpdateTime() Obtain Modification time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
 * @method void setUpdateTime(string $UpdateTime) Set Modification time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
 */
class FunctionInfo extends AbstractModel
{
    /**
     * @var string Function ID.
     */
    public $FunctionId;

    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Function name.
     */
    public $Name;

    /**
     * @var string Function description.
     */
    public $Remark;

    /**
     * @var string Function content.
     */
    public $Content;

    /**
     * @var string Default domain name of a function.
     */
    public $Domain;

    /**
     * @var string Creation time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
     */
    public $CreateTime;

    /**
     * @var string Modification time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
     */
    public $UpdateTime;

    /**
     * @param string $FunctionId Function ID.
     * @param string $ZoneId Zone ID.
     * @param string $Name Function name.
     * @param string $Remark Function description.
     * @param string $Content Function content.
     * @param string $Domain Default domain name of a function.
     * @param string $CreateTime Creation time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
     * @param string $UpdateTime Modification time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
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
        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
