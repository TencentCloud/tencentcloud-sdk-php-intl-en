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
 * Mini program list
 *
 * @method string getMNPId() Obtain Mini program ID
 * @method void setMNPId(string $MNPId) Set Mini program ID
 * @method string getMNPIcon() Obtain Mini program icon
 * @method void setMNPIcon(string $MNPIcon) Set Mini program icon
 * @method string getMNPName() Obtain Mini program name
 * @method void setMNPName(string $MNPName) Set Mini program name
 * @method string getTeamName() Obtain Name of the associated team
 * @method void setTeamName(string $TeamName) Set Name of the associated team
 * @method string getMNPType() Obtain Mini program type
 * @method void setMNPType(string $MNPType) Set Mini program type
 * @method integer getStatus() Obtain Specifies the mini program listing status. valid values: 1 (submitted), 2 (removed).
 * @method void setStatus(integer $Status) Set Specifies the mini program listing status. valid values: 1 (submitted), 2 (removed).
 * @method string getMNPIntro() Obtain Mini program introduction
 * @method void setMNPIntro(string $MNPIntro) Set Mini program introduction
 * @method string getCreateUser() Obtain Creator
 * @method void setCreateUser(string $CreateUser) Set Creator
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getUpdateUser() Obtain Specifies the updater.
 * @method void setUpdateUser(string $UpdateUser) Set Specifies the updater.
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method string getApplicationName() Obtain Application name
 * @method void setApplicationName(string $ApplicationName) Set Application name
 * @method integer getEffectStatus() Obtain Effective status of the bound application. valid values: 1 (not effective), 2 (effective).
 * @method void setEffectStatus(integer $EffectStatus) Set Effective status of the bound application. valid values: 1 (not effective), 2 (effective).
 * @method integer getEffectMNPVersionId() Obtain Specifies the ID of the application bound with the mini program.
 * @method void setEffectMNPVersionId(integer $EffectMNPVersionId) Set Specifies the ID of the application bound with the mini program.
 * @method string getEffectMNPVersion() Obtain Specifies the effective version number of the application bound to the mini program.
 * @method void setEffectMNPVersion(string $EffectMNPVersion) Set Specifies the effective version number of the application bound to the mini program.
 */
class DescribeMNPListData extends AbstractModel
{
    /**
     * @var string Mini program ID
     */
    public $MNPId;

    /**
     * @var string Mini program icon
     */
    public $MNPIcon;

    /**
     * @var string Mini program name
     */
    public $MNPName;

    /**
     * @var string Name of the associated team
     */
    public $TeamName;

    /**
     * @var string Mini program type
     */
    public $MNPType;

    /**
     * @var integer Specifies the mini program listing status. valid values: 1 (submitted), 2 (removed).
     */
    public $Status;

    /**
     * @var string Mini program introduction
     */
    public $MNPIntro;

    /**
     * @var string Creator
     */
    public $CreateUser;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Specifies the updater.
     */
    public $UpdateUser;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var string Application name
     */
    public $ApplicationName;

    /**
     * @var integer Effective status of the bound application. valid values: 1 (not effective), 2 (effective).
     */
    public $EffectStatus;

    /**
     * @var integer Specifies the ID of the application bound with the mini program.
     */
    public $EffectMNPVersionId;

    /**
     * @var string Specifies the effective version number of the application bound to the mini program.
     */
    public $EffectMNPVersion;

    /**
     * @param string $MNPId Mini program ID
     * @param string $MNPIcon Mini program icon
     * @param string $MNPName Mini program name
     * @param string $TeamName Name of the associated team
     * @param string $MNPType Mini program type
     * @param integer $Status Specifies the mini program listing status. valid values: 1 (submitted), 2 (removed).
     * @param string $MNPIntro Mini program introduction
     * @param string $CreateUser Creator
     * @param string $CreateTime Creation time
     * @param string $UpdateUser Specifies the updater.
     * @param string $UpdateTime Update time
     * @param string $ApplicationName Application name
     * @param integer $EffectStatus Effective status of the bound application. valid values: 1 (not effective), 2 (effective).
     * @param integer $EffectMNPVersionId Specifies the ID of the application bound with the mini program.
     * @param string $EffectMNPVersion Specifies the effective version number of the application bound to the mini program.
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
