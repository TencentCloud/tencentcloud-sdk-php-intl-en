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
 * Mini program list data
 *
 * @method string getMNPId() Obtain <p>Mini game appid</p>
 * @method void setMNPId(string $MNPId) Set <p>Mini game appid</p>
 * @method string getMNPIcon() Obtain <p>Mini game icon</p>
 * @method void setMNPIcon(string $MNPIcon) Set <p>Mini game icon</p>
 * @method string getMNPName() Obtain <p>Mini game name</p>
 * @method void setMNPName(string $MNPName) Set <p>Mini game name</p>
 * @method string getTeamName() Obtain <p>Team name</p>
 * @method void setTeamName(string $TeamName) Set <p>Team name</p>
 * @method string getMNPType() Obtain <p>Mini game category</p>
 * @method void setMNPType(string $MNPType) Set <p>Mini game category</p>
 * @method integer getStatus() Obtain <p>Mini game available status. Valid values: 1: Available; 2: Not available</p>
 * @method void setStatus(integer $Status) Set <p>Mini game available status. Valid values: 1: Available; 2: Not available</p>
 * @method string getMNPIntro() Obtain <p>Mini game introduction</p>
 * @method void setMNPIntro(string $MNPIntro) Set <p>Mini game introduction</p>
 * @method string getCreateUser() Obtain <p>Creator</p>
 * @method void setCreateUser(string $CreateUser) Set <p>Creator</p>
 * @method string getCreateTime() Obtain <p>Creation time</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time</p>
 * @method string getUpdateUser() Obtain <p>Updater</p>
 * @method void setUpdateUser(string $UpdateUser) Set <p>Updater</p>
 * @method string getUpdateTime() Obtain <p>Update time</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time</p>
 * @method string getApplicationName() Obtain <p>Superapp name</p>
 * @method void setApplicationName(string $ApplicationName) Set <p>Superapp name</p>
 * @method integer getEffectStatus() Obtain <p>Effective status of the bound superapp. 1: Not effective; 2: Effective</p>
 * @method void setEffectStatus(integer $EffectStatus) Set <p>Effective status of the bound superapp. 1: Not effective; 2: Effective</p>
 * @method integer getEffectMNPVersionId() Obtain <p>Effective version ID of the superapp bound to the mini game</p>
 * @method void setEffectMNPVersionId(integer $EffectMNPVersionId) Set <p>Effective version ID of the superapp bound to the mini game</p>
 * @method string getEffectMNPVersion() Obtain <p>Effective version number of the superapp bound to the mini game</p>
 * @method void setEffectMNPVersion(string $EffectMNPVersion) Set <p>Effective version number of the superapp bound to the mini game</p>
 */
class DescribeMNGListData extends AbstractModel
{
    /**
     * @var string <p>Mini game appid</p>
     */
    public $MNPId;

    /**
     * @var string <p>Mini game icon</p>
     */
    public $MNPIcon;

    /**
     * @var string <p>Mini game name</p>
     */
    public $MNPName;

    /**
     * @var string <p>Team name</p>
     */
    public $TeamName;

    /**
     * @var string <p>Mini game category</p>
     */
    public $MNPType;

    /**
     * @var integer <p>Mini game available status. Valid values: 1: Available; 2: Not available</p>
     */
    public $Status;

    /**
     * @var string <p>Mini game introduction</p>
     */
    public $MNPIntro;

    /**
     * @var string <p>Creator</p>
     */
    public $CreateUser;

    /**
     * @var string <p>Creation time</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Updater</p>
     */
    public $UpdateUser;

    /**
     * @var string <p>Update time</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>Superapp name</p>
     */
    public $ApplicationName;

    /**
     * @var integer <p>Effective status of the bound superapp. 1: Not effective; 2: Effective</p>
     */
    public $EffectStatus;

    /**
     * @var integer <p>Effective version ID of the superapp bound to the mini game</p>
     */
    public $EffectMNPVersionId;

    /**
     * @var string <p>Effective version number of the superapp bound to the mini game</p>
     */
    public $EffectMNPVersion;

    /**
     * @param string $MNPId <p>Mini game appid</p>
     * @param string $MNPIcon <p>Mini game icon</p>
     * @param string $MNPName <p>Mini game name</p>
     * @param string $TeamName <p>Team name</p>
     * @param string $MNPType <p>Mini game category</p>
     * @param integer $Status <p>Mini game available status. Valid values: 1: Available; 2: Not available</p>
     * @param string $MNPIntro <p>Mini game introduction</p>
     * @param string $CreateUser <p>Creator</p>
     * @param string $CreateTime <p>Creation time</p>
     * @param string $UpdateUser <p>Updater</p>
     * @param string $UpdateTime <p>Update time</p>
     * @param string $ApplicationName <p>Superapp name</p>
     * @param integer $EffectStatus <p>Effective status of the bound superapp. 1: Not effective; 2: Effective</p>
     * @param integer $EffectMNPVersionId <p>Effective version ID of the superapp bound to the mini game</p>
     * @param string $EffectMNPVersion <p>Effective version number of the superapp bound to the mini game</p>
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
