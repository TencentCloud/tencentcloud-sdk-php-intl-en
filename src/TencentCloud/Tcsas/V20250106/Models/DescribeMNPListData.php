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
 * @method integer getStatus() Obtain Whether the mini program is released. 1: Released; 2: Removed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Whether the mini program is released. 1: Released; 2: Removed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPIntro() Obtain Mini program introduction
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPIntro(string $MNPIntro) Set Mini program introduction
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateUser() Obtain Creator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateUser(string $CreateUser) Set Creator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateUser() Obtain Updater
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateUser(string $UpdateUser) Set Updater
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationName() Obtain Application name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationName(string $ApplicationName) Set Application name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEffectStatus() Obtain Effective status of the bound application. 1: Not effective; 2: Effective
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEffectStatus(integer $EffectStatus) Set Effective status of the bound application. 1: Not effective; 2: Effective
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEffectMNPVersionId() Obtain ID of the application bound with the mini program
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEffectMNPVersionId(integer $EffectMNPVersionId) Set ID of the application bound with the mini program
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEffectMNPVersion() Obtain Effective version number of the application that bound with the mini program
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEffectMNPVersion(string $EffectMNPVersion) Set Effective version number of the application that bound with the mini program
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var integer Whether the mini program is released. 1: Released; 2: Removed
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Mini program introduction
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPIntro;

    /**
     * @var string Creator
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateUser;

    /**
     * @var string Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Updater
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateUser;

    /**
     * @var string Update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string Application name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationName;

    /**
     * @var integer Effective status of the bound application. 1: Not effective; 2: Effective
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EffectStatus;

    /**
     * @var integer ID of the application bound with the mini program
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EffectMNPVersionId;

    /**
     * @var string Effective version number of the application that bound with the mini program
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EffectMNPVersion;

    /**
     * @param string $MNPId Mini program ID
     * @param string $MNPIcon Mini program icon
     * @param string $MNPName Mini program name
     * @param string $TeamName Name of the associated team
     * @param string $MNPType Mini program type
     * @param integer $Status Whether the mini program is released. 1: Released; 2: Removed
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPIntro Mini program introduction
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateUser Creator
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateUser Updater
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Update time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationName Application name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EffectStatus Effective status of the bound application. 1: Not effective; 2: Effective
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EffectMNPVersionId ID of the application bound with the mini program
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EffectMNPVersion Effective version number of the application that bound with the mini program
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
