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
 * @method string getMNPId() Obtain <p>Mini game appid.</p>
 * @method void setMNPId(string $MNPId) Set <p>Mini game appid.</p>
 * @method string getMNPIcon() Obtain <p>Mini game icon.</p>
 * @method void setMNPIcon(string $MNPIcon) Set <p>Mini game icon.</p>
 * @method string getMNPName() Obtain <p>Mini game name.</p>
 * @method void setMNPName(string $MNPName) Set <p>Mini game name.</p>
 * @method string getTeamName() Obtain <p>Team name.</p>
 * @method void setTeamName(string $TeamName) Set <p>Team name.</p>
 * @method string getMNPType() Obtain <p>Mini game category.</p>
 * @method void setMNPType(string $MNPType) Set <p>Mini game category.</p>
 * @method integer getStatus() Obtain <p>Mini game available status. Valid values: 1: Available; 2: Not available.</p>
 * @method void setStatus(integer $Status) Set <p>Mini game available status. Valid values: 1: Available; 2: Not available.</p>
 * @method string getMNPIntro() Obtain <p>Mini game introduction.</p>
 * @method void setMNPIntro(string $MNPIntro) Set <p>Mini game introduction.</p>
 * @method string getCreateUser() Obtain <p>Creator.</p>
 * @method void setCreateUser(string $CreateUser) Set <p>Creator.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getUpdateUser() Obtain <p>Last modifier.</p>
 * @method void setUpdateUser(string $UpdateUser) Set <p>Last modifier.</p>
 * @method string getUpdateTime() Obtain <p>Last modified time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Last modified time.</p>
 * @method string getApplicationName() Obtain <p>Superapp name.</p>
 * @method void setApplicationName(string $ApplicationName) Set <p>Superapp name.</p>
 * @method integer getEffectStatus() Obtain <p>Binding effective status for the superapp. Valid values: 1: Not effective; 2: Effective.</p>
 * @method void setEffectStatus(integer $EffectStatus) Set <p>Binding effective status for the superapp. Valid values: 1: Not effective; 2: Effective.</p>
 * @method integer getEffectMNPVersionId() Obtain <p>Effective mini program version ID bound to the superapp.</p>
 * @method void setEffectMNPVersionId(integer $EffectMNPVersionId) Set <p>Effective mini program version ID bound to the superapp.</p>
 * @method string getEffectMNPVersion() Obtain <p>Effective mini program version number bound to the superapp.</p>
 * @method void setEffectMNPVersion(string $EffectMNPVersion) Set <p>Effective mini program version number bound to the superapp.</p>
 * @method string getTeamId() Obtain <p>Team ID.</p>
 * @method void setTeamId(string $TeamId) Set <p>Team ID.</p>
 * @method integer getTeamTypeId() Obtain <p>Team type ID. Valid values: 1: Mini program team; 2: Superapp team; 3: Service provider team.</p>
 * @method void setTeamTypeId(integer $TeamTypeId) Set <p>Team type ID. Valid values: 1: Mini program team; 2: Superapp team; 3: Service provider team.</p>
 * @method array getAgeRatings() Obtain <p>Age rating information.</p>
 * @method void setAgeRatings(array $AgeRatings) Set <p>Age rating information.</p>
 */
class DescribeMNPListData extends AbstractModel
{
    /**
     * @var string <p>Mini game appid.</p>
     */
    public $MNPId;

    /**
     * @var string <p>Mini game icon.</p>
     */
    public $MNPIcon;

    /**
     * @var string <p>Mini game name.</p>
     */
    public $MNPName;

    /**
     * @var string <p>Team name.</p>
     */
    public $TeamName;

    /**
     * @var string <p>Mini game category.</p>
     */
    public $MNPType;

    /**
     * @var integer <p>Mini game available status. Valid values: 1: Available; 2: Not available.</p>
     */
    public $Status;

    /**
     * @var string <p>Mini game introduction.</p>
     */
    public $MNPIntro;

    /**
     * @var string <p>Creator.</p>
     */
    public $CreateUser;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Last modifier.</p>
     */
    public $UpdateUser;

    /**
     * @var string <p>Last modified time.</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>Superapp name.</p>
     */
    public $ApplicationName;

    /**
     * @var integer <p>Binding effective status for the superapp. Valid values: 1: Not effective; 2: Effective.</p>
     */
    public $EffectStatus;

    /**
     * @var integer <p>Effective mini program version ID bound to the superapp.</p>
     */
    public $EffectMNPVersionId;

    /**
     * @var string <p>Effective mini program version number bound to the superapp.</p>
     */
    public $EffectMNPVersion;

    /**
     * @var string <p>Team ID.</p>
     */
    public $TeamId;

    /**
     * @var integer <p>Team type ID. Valid values: 1: Mini program team; 2: Superapp team; 3: Service provider team.</p>
     */
    public $TeamTypeId;

    /**
     * @var array <p>Age rating information.</p>
     */
    public $AgeRatings;

    /**
     * @param string $MNPId <p>Mini game appid.</p>
     * @param string $MNPIcon <p>Mini game icon.</p>
     * @param string $MNPName <p>Mini game name.</p>
     * @param string $TeamName <p>Team name.</p>
     * @param string $MNPType <p>Mini game category.</p>
     * @param integer $Status <p>Mini game available status. Valid values: 1: Available; 2: Not available.</p>
     * @param string $MNPIntro <p>Mini game introduction.</p>
     * @param string $CreateUser <p>Creator.</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $UpdateUser <p>Last modifier.</p>
     * @param string $UpdateTime <p>Last modified time.</p>
     * @param string $ApplicationName <p>Superapp name.</p>
     * @param integer $EffectStatus <p>Binding effective status for the superapp. Valid values: 1: Not effective; 2: Effective.</p>
     * @param integer $EffectMNPVersionId <p>Effective mini program version ID bound to the superapp.</p>
     * @param string $EffectMNPVersion <p>Effective mini program version number bound to the superapp.</p>
     * @param string $TeamId <p>Team ID.</p>
     * @param integer $TeamTypeId <p>Team type ID. Valid values: 1: Mini program team; 2: Superapp team; 3: Service provider team.</p>
     * @param array $AgeRatings <p>Age rating information.</p>
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

        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("TeamTypeId",$param) and $param["TeamTypeId"] !== null) {
            $this->TeamTypeId = $param["TeamTypeId"];
        }

        if (array_key_exists("AgeRatings",$param) and $param["AgeRatings"] !== null) {
            $this->AgeRatings = [];
            foreach ($param["AgeRatings"] as $key => $value){
                $obj = new AgeRatingItem();
                $obj->deserialize($value);
                array_push($this->AgeRatings, $obj);
            }
        }
    }
}
