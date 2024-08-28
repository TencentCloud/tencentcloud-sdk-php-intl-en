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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Malicious request allowlist information
 *
 * @method integer getId() Obtain Allowlist ID
 * @method void setId(integer $Id) Set Allowlist ID
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method string getMark() Obtain Remarks
 * @method void setMark(string $Mark) Set Remarks
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getModifyTime() Obtain Update time
 * @method void setModifyTime(string $ModifyTime) Set Update time
 */
class MaliciousRequestWhiteListInfo extends AbstractModel
{
    /**
     * @var integer Allowlist ID
     */
    public $Id;

    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var string Remarks
     */
    public $Mark;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Update time
     */
    public $ModifyTime;

    /**
     * @param integer $Id Allowlist ID
     * @param string $Domain Domain name
     * @param string $Mark Remarks
     * @param string $CreateTime Creation time
     * @param string $ModifyTime Update time
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Mark",$param) and $param["Mark"] !== null) {
            $this->Mark = $param["Mark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
