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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mini program list data.
 *
 * @method string getMNPId() Obtain Mini program appid.
 * @method void setMNPId(string $MNPId) Set Mini program appid.
 * @method string getMNPIcon() Obtain Mini program icon.
 * @method void setMNPIcon(string $MNPIcon) Set Mini program icon.
 * @method string getMNPName() Obtain Mini program name.
 * @method void setMNPName(string $MNPName) Set Mini program name.
 * @method string getTeamName() Obtain Team name. 
 * @method void setTeamName(string $TeamName) Set Team name. 
 * @method string getMNPType() Obtain Mini program category.
 * @method void setMNPType(string $MNPType) Set Mini program category.
 * @method integer getStatus() Obtain Mini program available status. Valid values: 1: Available; 2: Removed.
 * @method void setStatus(integer $Status) Set Mini program available status. Valid values: 1: Available; 2: Removed.
 * @method string getMNPIntro() Obtain Mini program introduction.
 * @method void setMNPIntro(string $MNPIntro) Set Mini program introduction.
 * @method string getCreateUser() Obtain Creator.
 * @method void setCreateUser(string $CreateUser) Set Creator.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getUpdateUser() Obtain Last modifier.
 * @method void setUpdateUser(string $UpdateUser) Set Last modifier.
 * @method string getUpdateTime() Obtain Last modified time.
 * @method void setUpdateTime(string $UpdateTime) Set Last modified time.
 * @method string getApplicationName() Obtain Superapp name.
 * @method void setApplicationName(string $ApplicationName) Set Superapp name.
 * @method integer getEffectStatus() Obtain Binding effective status for the superapp. Valid values: 1: Not effective; 2: Effective.
 * @method void setEffectStatus(integer $EffectStatus) Set Binding effective status for the superapp. Valid values: 1: Not effective; 2: Effective.
 * @method integer getEffectMNPVersionId() Obtain Effective mini program version ID bound to the superapp. 
 * @method void setEffectMNPVersionId(integer $EffectMNPVersionId) Set Effective mini program version ID bound to the superapp. 
 * @method string getEffectMNPVersion() Obtain Effective mini program version number bound to the superapp. 
 * @method void setEffectMNPVersion(string $EffectMNPVersion) Set Effective mini program version number bound to the superapp. 
 */
class DescribeMNPListData extends AbstractModel
{
    /**
     * @var string Mini program appid.
     */
    public $MNPId;

    /**
     * @var string Mini program icon.
     */
    public $MNPIcon;

    /**
     * @var string Mini program name.
     */
    public $MNPName;

    /**
     * @var string Team name. 
     */
    public $TeamName;

    /**
     * @var string Mini program category.
     */
    public $MNPType;

    /**
     * @var integer Mini program available status. Valid values: 1: Available; 2: Removed.
     */
    public $Status;

    /**
     * @var string Mini program introduction.
     */
    public $MNPIntro;

    /**
     * @var string Creator.
     */
    public $CreateUser;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Last modifier.
     */
    public $UpdateUser;

    /**
     * @var string Last modified time.
     */
    public $UpdateTime;

    /**
     * @var string Superapp name.
     */
    public $ApplicationName;

    /**
     * @var integer Binding effective status for the superapp. Valid values: 1: Not effective; 2: Effective.
     */
    public $EffectStatus;

    /**
     * @var integer Effective mini program version ID bound to the superapp. 
     */
    public $EffectMNPVersionId;

    /**
     * @var string Effective mini program version number bound to the superapp. 
     */
    public $EffectMNPVersion;

    /**
     * @param string $MNPId Mini program appid.
     * @param string $MNPIcon Mini program icon.
     * @param string $MNPName Mini program name.
     * @param string $TeamName Team name. 
     * @param string $MNPType Mini program category.
     * @param integer $Status Mini program available status. Valid values: 1: Available; 2: Removed.
     * @param string $MNPIntro Mini program introduction.
     * @param string $CreateUser Creator.
     * @param string $CreateTime Creation time.
     * @param string $UpdateUser Last modifier.
     * @param string $UpdateTime Last modified time.
     * @param string $ApplicationName Superapp name.
     * @param integer $EffectStatus Binding effective status for the superapp. Valid values: 1: Not effective; 2: Effective.
     * @param integer $EffectMNPVersionId Effective mini program version ID bound to the superapp. 
     * @param string $EffectMNPVersion Effective mini program version number bound to the superapp. 
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
        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }

        if (array_key_exists("MNPIcon",$param) and $param["MNPIcon"] !== null) {
            $this->MNPIcon = $param["MNPIcon"];
        }

        if (array_key_exists("MNPName",$param) and $param["MNPName"] !== null) {
            $this->MNPName = $param["MNPName"];
        }

        if (array_key_exists("TeamName",$param) and $param["TeamName"] !== null) {
            $this->TeamName = $param["TeamName"];
        }

        if (array_key_exists("MNPType",$param) and $param["MNPType"] !== null) {
            $this->MNPType = $param["MNPType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MNPIntro",$param) and $param["MNPIntro"] !== null) {
            $this->MNPIntro = $param["MNPIntro"];
        }

        if (array_key_exists("CreateUser",$param) and $param["CreateUser"] !== null) {
            $this->CreateUser = $param["CreateUser"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateUser",$param) and $param["UpdateUser"] !== null) {
            $this->UpdateUser = $param["UpdateUser"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("EffectStatus",$param) and $param["EffectStatus"] !== null) {
            $this->EffectStatus = $param["EffectStatus"];
        }

        if (array_key_exists("EffectMNPVersionId",$param) and $param["EffectMNPVersionId"] !== null) {
            $this->EffectMNPVersionId = $param["EffectMNPVersionId"];
        }

        if (array_key_exists("EffectMNPVersion",$param) and $param["EffectMNPVersion"] !== null) {
            $this->EffectMNPVersion = $param["EffectMNPVersion"];
        }
    }
}
