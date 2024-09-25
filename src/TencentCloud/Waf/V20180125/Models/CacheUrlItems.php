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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tamper-proof URL Elements
 *
 * @method integer getId() Obtain Identifier
 * @method void setId(integer $Id) Set Identifier
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method string getUri() Obtain URL
 * @method void setUri(string $Uri) Set URL
 * @method string getProtocol() Obtain Protocol
 * @method void setProtocol(string $Protocol) Set Protocol
 * @method integer getStatus() Obtain Status
 * @method void setStatus(integer $Status) Set Status
 * @method string getModifyTime() Obtain Modification time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Modification time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time

Note: This field may return null, indicating that no valid values can be obtained.
 */
class CacheUrlItems extends AbstractModel
{
    /**
     * @var integer Identifier
     */
    public $Id;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var string URL
     */
    public $Uri;

    /**
     * @var string Protocol
     */
    public $Protocol;

    /**
     * @var integer Status
     */
    public $Status;

    /**
     * @var string Modification time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModifyTime;

    /**
     * @var string Creation time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @param integer $Id Identifier
     * @param string $Name Name
     * @param string $Domain Domain name
     * @param string $Uri URL
     * @param string $Protocol Protocol
     * @param integer $Status Status
     * @param string $ModifyTime Modification time

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time

Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Uri",$param) and $param["Uri"] !== null) {
            $this->Uri = $param["Uri"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
