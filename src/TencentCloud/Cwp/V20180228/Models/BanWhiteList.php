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
 * Block allowlist rules
 *
 * @method string getId() Obtain Allowlist IDs
 * @method void setId(string $Id) Set Allowlist IDs
 * @method string getRemark() Obtain Allowlist aliases
 * @method void setRemark(string $Remark) Set Allowlist aliases
 * @method string getSrcIp() Obtain Block source IP
 * @method void setSrcIp(string $SrcIp) Set Block source IP
 * @method string getModifyTime() Obtain Time of modifying allowlists
 * @method void setModifyTime(string $ModifyTime) Set Time of modifying allowlists
 * @method string getCreateTime() Obtain Time of creating allowlists
 * @method void setCreateTime(string $CreateTime) Set Time of creating allowlists
 * @method string getUuid() Obtain Machine associated with the allowlist
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUuid(string $Uuid) Set Machine associated with the allowlist
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsGlobal() Obtain Whether the allowlist is global
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsGlobal(boolean $IsGlobal) Set Whether the allowlist is global
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getQuuids() Obtain Machine list associated with the allowlist
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQuuids(array $Quuids) Set Machine list associated with the allowlist
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BanWhiteList extends AbstractModel
{
    /**
     * @var string Allowlist IDs
     */
    public $Id;

    /**
     * @var string Allowlist aliases
     */
    public $Remark;

    /**
     * @var string Block source IP
     */
    public $SrcIp;

    /**
     * @var string Time of modifying allowlists
     */
    public $ModifyTime;

    /**
     * @var string Time of creating allowlists
     */
    public $CreateTime;

    /**
     * @var string Machine associated with the allowlist
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uuid;

    /**
     * @var boolean Whether the allowlist is global
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsGlobal;

    /**
     * @var array Machine list associated with the allowlist
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Quuids;

    /**
     * @param string $Id Allowlist IDs
     * @param string $Remark Allowlist aliases
     * @param string $SrcIp Block source IP
     * @param string $ModifyTime Time of modifying allowlists
     * @param string $CreateTime Time of creating allowlists
     * @param string $Uuid Machine associated with the allowlist
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsGlobal Whether the allowlist is global
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Quuids Machine list associated with the allowlist
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }
    }
}
