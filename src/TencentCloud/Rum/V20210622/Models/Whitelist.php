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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Allowlist
 *
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getInstanceID() Obtain Instance ID
 * @method void setInstanceID(string $InstanceID) Set Instance ID
 * @method string getTtl() Obtain End time
 * @method void setTtl(string $Ttl) Set End time
 * @method string getID() Obtain Auto-Increment allowlist ID
 * @method void setID(string $ID) Set Auto-Increment allowlist ID
 * @method string getWhitelistUin() Obtain Unique business identifier
 * @method void setWhitelistUin(string $WhitelistUin) Set Unique business identifier
 * @method string getCreateUser() Obtain Creator ID
 * @method void setCreateUser(string $CreateUser) Set Creator ID
 * @method string getAid() Obtain aid
 * @method void setAid(string $Aid) Set aid
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 */
class Whitelist extends AbstractModel
{
    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string Instance ID
     */
    public $InstanceID;

    /**
     * @var string End time
     */
    public $Ttl;

    /**
     * @var string Auto-Increment allowlist ID
     */
    public $ID;

    /**
     * @var string Unique business identifier
     */
    public $WhitelistUin;

    /**
     * @var string Creator ID
     */
    public $CreateUser;

    /**
     * @var string aid
     */
    public $Aid;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @param string $Remark Remarks
     * @param string $InstanceID Instance ID
     * @param string $Ttl End time
     * @param string $ID Auto-Increment allowlist ID
     * @param string $WhitelistUin Unique business identifier
     * @param string $CreateUser Creator ID
     * @param string $Aid aid
     * @param string $CreateTime Creation time
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
        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Ttl",$param) and $param["Ttl"] !== null) {
            $this->Ttl = $param["Ttl"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("WhitelistUin",$param) and $param["WhitelistUin"] !== null) {
            $this->WhitelistUin = $param["WhitelistUin"];
        }

        if (array_key_exists("CreateUser",$param) and $param["CreateUser"] !== null) {
            $this->CreateUser = $param["CreateUser"];
        }

        if (array_key_exists("Aid",$param) and $param["Aid"] !== null) {
            $this->Aid = $param["Aid"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
