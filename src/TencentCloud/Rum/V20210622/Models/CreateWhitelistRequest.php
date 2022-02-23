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
 * CreateWhitelist request structure.
 *
 * @method string getInstanceID() Obtain Instance ID, such as taw-123
 * @method void setInstanceID(string $InstanceID) Set Instance ID, such as taw-123
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getWhitelistUin() Obtain uin: business identifier
 * @method void setWhitelistUin(string $WhitelistUin) Set uin: business identifier
 * @method string getAid() Obtain Business identifier
 * @method void setAid(string $Aid) Set Business identifier
 */
class CreateWhitelistRequest extends AbstractModel
{
    /**
     * @var string Instance ID, such as taw-123
     */
    public $InstanceID;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string uin: business identifier
     */
    public $WhitelistUin;

    /**
     * @var string Business identifier
     */
    public $Aid;

    /**
     * @param string $InstanceID Instance ID, such as taw-123
     * @param string $Remark Remarks
     * @param string $WhitelistUin uin: business identifier
     * @param string $Aid Business identifier
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("WhitelistUin",$param) and $param["WhitelistUin"] !== null) {
            $this->WhitelistUin = $param["WhitelistUin"];
        }

        if (array_key_exists("Aid",$param) and $param["Aid"] !== null) {
            $this->Aid = $param["Aid"];
        }
    }
}
