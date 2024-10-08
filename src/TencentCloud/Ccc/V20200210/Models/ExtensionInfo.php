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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Telephone information.
 *
 * @method integer getSdkAppId() Obtain Instance ID.
 * @method void setSdkAppId(integer $SdkAppId) Set Instance ID.
 * @method string getFullExtensionId() Obtain Extension full name.
 * @method void setFullExtensionId(string $FullExtensionId) Set Extension full name.
 * @method string getExtensionId() Obtain Extension
 * @method void setExtensionId(string $ExtensionId) Set Extension
 * @method string getSkillGroupId() Obtain Affiliated skill group list.
 * @method void setSkillGroupId(string $SkillGroupId) Set Affiliated skill group list.
 * @method string getExtensionName() Obtain Extension name.
 * @method void setExtensionName(string $ExtensionName) Set Extension name.
 * @method integer getCreateTime() Obtain Creation Time
 * @method void setCreateTime(integer $CreateTime) Set Creation Time
 * @method integer getModifyTime() Obtain Last modification time.
 * @method void setModifyTime(integer $ModifyTime) Set Last modification time.
 * @method integer getStatus() Obtain Telephone status (0 Offline, 100 Free, 200 Busy).
 * @method void setStatus(integer $Status) Set Telephone status (0 Offline, 100 Free, 200 Busy).
 * @method boolean getRegister() Obtain Whether to register.
 * @method void setRegister(boolean $Register) Set Whether to register.
 * @method string getRelation() Obtain Bind Agent Email
 * @method void setRelation(string $Relation) Set Bind Agent Email
 * @method string getRelationName() Obtain Bind Agent Name
 * @method void setRelationName(string $RelationName) Set Bind Agent Name
 */
class ExtensionInfo extends AbstractModel
{
    /**
     * @var integer Instance ID.
     */
    public $SdkAppId;

    /**
     * @var string Extension full name.
     */
    public $FullExtensionId;

    /**
     * @var string Extension
     */
    public $ExtensionId;

    /**
     * @var string Affiliated skill group list.
     */
    public $SkillGroupId;

    /**
     * @var string Extension name.
     */
    public $ExtensionName;

    /**
     * @var integer Creation Time
     */
    public $CreateTime;

    /**
     * @var integer Last modification time.
     */
    public $ModifyTime;

    /**
     * @var integer Telephone status (0 Offline, 100 Free, 200 Busy).
     */
    public $Status;

    /**
     * @var boolean Whether to register.
     */
    public $Register;

    /**
     * @var string Bind Agent Email
     */
    public $Relation;

    /**
     * @var string Bind Agent Name
     */
    public $RelationName;

    /**
     * @param integer $SdkAppId Instance ID.
     * @param string $FullExtensionId Extension full name.
     * @param string $ExtensionId Extension
     * @param string $SkillGroupId Affiliated skill group list.
     * @param string $ExtensionName Extension name.
     * @param integer $CreateTime Creation Time
     * @param integer $ModifyTime Last modification time.
     * @param integer $Status Telephone status (0 Offline, 100 Free, 200 Busy).
     * @param boolean $Register Whether to register.
     * @param string $Relation Bind Agent Email
     * @param string $RelationName Bind Agent Name
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("FullExtensionId",$param) and $param["FullExtensionId"] !== null) {
            $this->FullExtensionId = $param["FullExtensionId"];
        }

        if (array_key_exists("ExtensionId",$param) and $param["ExtensionId"] !== null) {
            $this->ExtensionId = $param["ExtensionId"];
        }

        if (array_key_exists("SkillGroupId",$param) and $param["SkillGroupId"] !== null) {
            $this->SkillGroupId = $param["SkillGroupId"];
        }

        if (array_key_exists("ExtensionName",$param) and $param["ExtensionName"] !== null) {
            $this->ExtensionName = $param["ExtensionName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Register",$param) and $param["Register"] !== null) {
            $this->Register = $param["Register"];
        }

        if (array_key_exists("Relation",$param) and $param["Relation"] !== null) {
            $this->Relation = $param["Relation"];
        }

        if (array_key_exists("RelationName",$param) and $param["RelationName"] !== null) {
            $this->RelationName = $param["RelationName"];
        }
    }
}
