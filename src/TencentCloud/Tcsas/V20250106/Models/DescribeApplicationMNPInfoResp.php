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
 * The mini program or mini game data associated with a superapp.
 *
 * @method string getMNPId() Obtain <p>Mini program or mini game appid.</p>
 * @method void setMNPId(string $MNPId) Set <p>Mini program or mini game appid.</p>
 * @method string getMNPIcon() Obtain <p>Mini program or mini game icon.</p>
 * @method void setMNPIcon(string $MNPIcon) Set <p>Mini program or mini game icon.</p>
 * @method string getMNPName() Obtain <p>Mini program or mini game name.</p>
 * @method void setMNPName(string $MNPName) Set <p>Mini program or mini game name.</p>
 * @method string getMNPIntro() Obtain <p>Mini program or mini game introduction.</p>
 * @method void setMNPIntro(string $MNPIntro) Set <p>Mini program or mini game introduction.</p>
 * @method string getCreateUser() Obtain <p>Creator.</p>
 * @method void setCreateUser(string $CreateUser) Set <p>Creator.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getUpdateUser() Obtain <p>Last modifier.</p>
 * @method void setUpdateUser(string $UpdateUser) Set <p>Last modifier.</p>
 * @method string getUpdateTime() Obtain <p>Last modified time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Last modified time.</p>
 * @method integer getOnlineStatus() Obtain <p>Available status. Valid value: 0: Not available; 1 Available; 2: In canary release.</p>
 * @method void setOnlineStatus(integer $OnlineStatus) Set <p>Available status. Valid value: 0: Not available; 1 Available; 2: In canary release.</p>
 * @method integer getEngineType() Obtain <p>Engine type. Specifies the runtime engine by product type. Valid values: 0: Mini program; 1: Mini game.</p>
 * @method void setEngineType(integer $EngineType) Set <p>Engine type. Specifies the runtime engine by product type. Valid values: 0: Mini program; 1: Mini game.</p>
 * @method array getCategoryList() Obtain <p>Category information.</p>
 * @method void setCategoryList(array $CategoryList) Set <p>Category information.</p>
 * @method string getTeamId() Obtain <p>Team ID.</p>
 * @method void setTeamId(string $TeamId) Set <p>Team ID.</p>
 * @method string getTeamName() Obtain <p>Team name.</p>
 * @method void setTeamName(string $TeamName) Set <p>Team name.</p>
 * @method integer getTeamTypeId() Obtain <p>Team type ID.</p>
 * @method void setTeamTypeId(integer $TeamTypeId) Set <p>Team type ID.</p>
 * @method array getAgeRatings() Obtain <p>Age rating information.</p>
 * @method void setAgeRatings(array $AgeRatings) Set <p>Age rating information.</p>
 */
class DescribeApplicationMNPInfoResp extends AbstractModel
{
    /**
     * @var string <p>Mini program or mini game appid.</p>
     */
    public $MNPId;

    /**
     * @var string <p>Mini program or mini game icon.</p>
     */
    public $MNPIcon;

    /**
     * @var string <p>Mini program or mini game name.</p>
     */
    public $MNPName;

    /**
     * @var string <p>Mini program or mini game introduction.</p>
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
     * @var integer <p>Available status. Valid value: 0: Not available; 1 Available; 2: In canary release.</p>
     */
    public $OnlineStatus;

    /**
     * @var integer <p>Engine type. Specifies the runtime engine by product type. Valid values: 0: Mini program; 1: Mini game.</p>
     */
    public $EngineType;

    /**
     * @var array <p>Category information.</p>
     */
    public $CategoryList;

    /**
     * @var string <p>Team ID.</p>
     */
    public $TeamId;

    /**
     * @var string <p>Team name.</p>
     */
    public $TeamName;

    /**
     * @var integer <p>Team type ID.</p>
     */
    public $TeamTypeId;

    /**
     * @var array <p>Age rating information.</p>
     */
    public $AgeRatings;

    /**
     * @param string $MNPId <p>Mini program or mini game appid.</p>
     * @param string $MNPIcon <p>Mini program or mini game icon.</p>
     * @param string $MNPName <p>Mini program or mini game name.</p>
     * @param string $MNPIntro <p>Mini program or mini game introduction.</p>
     * @param string $CreateUser <p>Creator.</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $UpdateUser <p>Last modifier.</p>
     * @param string $UpdateTime <p>Last modified time.</p>
     * @param integer $OnlineStatus <p>Available status. Valid value: 0: Not available; 1 Available; 2: In canary release.</p>
     * @param integer $EngineType <p>Engine type. Specifies the runtime engine by product type. Valid values: 0: Mini program; 1: Mini game.</p>
     * @param array $CategoryList <p>Category information.</p>
     * @param string $TeamId <p>Team ID.</p>
     * @param string $TeamName <p>Team name.</p>
     * @param integer $TeamTypeId <p>Team type ID.</p>
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

        if (array_key_exists("OnlineStatus",$param) and $param["OnlineStatus"] !== null) {
            $this->OnlineStatus = $param["OnlineStatus"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("CategoryList",$param) and $param["CategoryList"] !== null) {
            $this->CategoryList = [];
            foreach ($param["CategoryList"] as $key => $value){
                $obj = new CategoryInfo();
                $obj->deserialize($value);
                array_push($this->CategoryList, $obj);
            }
        }

        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("TeamName",$param) and $param["TeamName"] !== null) {
            $this->TeamName = $param["TeamName"];
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
