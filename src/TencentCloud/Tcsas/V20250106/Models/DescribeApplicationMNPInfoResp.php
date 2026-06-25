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
 * @method string getMNPId() Obtain Mini program or mini game appid.
 * @method void setMNPId(string $MNPId) Set Mini program or mini game appid.
 * @method string getMNPIcon() Obtain Mini program or mini game icon.
 * @method void setMNPIcon(string $MNPIcon) Set Mini program or mini game icon.
 * @method string getMNPName() Obtain Mini program or mini game name.
 * @method void setMNPName(string $MNPName) Set Mini program or mini game name.
 * @method string getMNPIntro() Obtain Mini program or mini game information.
 * @method void setMNPIntro(string $MNPIntro) Set Mini program or mini game information.
 * @method string getCreateUser() Obtain Creator.
 * @method void setCreateUser(string $CreateUser) Set Creator.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getUpdateUser() Obtain Last modifier.
 * @method void setUpdateUser(string $UpdateUser) Set Last modifier.
 * @method string getUpdateTime() Obtain Last modified time.
 * @method void setUpdateTime(string $UpdateTime) Set Last modified time.
 * @method integer getOnlineStatus() Obtain Available status. Valid value: 0: Not available; 1 Available; 2: In canary release.
 * @method void setOnlineStatus(integer $OnlineStatus) Set Available status. Valid value: 0: Not available; 1 Available; 2: In canary release.
 * @method integer getEngineType() Obtain Engine type. Specifies the runtime engine by product type. Valid values: 0: Mini program; 1: Mini game.
 * @method void setEngineType(integer $EngineType) Set Engine type. Specifies the runtime engine by product type. Valid values: 0: Mini program; 1: Mini game.
 * @method array getCategoryList() Obtain Category information.
 * @method void setCategoryList(array $CategoryList) Set Category information.
 * @method string getTeamId() Obtain Team ID.
 * @method void setTeamId(string $TeamId) Set Team ID.
 * @method string getTeamName() Obtain Team name.
 * @method void setTeamName(string $TeamName) Set Team name.
 * @method integer getTeamTypeId() Obtain Team type ID.
 * @method void setTeamTypeId(integer $TeamTypeId) Set Team type ID.
 */
class DescribeApplicationMNPInfoResp extends AbstractModel
{
    /**
     * @var string Mini program or mini game appid.
     */
    public $MNPId;

    /**
     * @var string Mini program or mini game icon.
     */
    public $MNPIcon;

    /**
     * @var string Mini program or mini game name.
     */
    public $MNPName;

    /**
     * @var string Mini program or mini game information.
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
     * @var integer Available status. Valid value: 0: Not available; 1 Available; 2: In canary release.
     */
    public $OnlineStatus;

    /**
     * @var integer Engine type. Specifies the runtime engine by product type. Valid values: 0: Mini program; 1: Mini game.
     */
    public $EngineType;

    /**
     * @var array Category information.
     */
    public $CategoryList;

    /**
     * @var string Team ID.
     */
    public $TeamId;

    /**
     * @var string Team name.
     */
    public $TeamName;

    /**
     * @var integer Team type ID.
     */
    public $TeamTypeId;

    /**
     * @param string $MNPId Mini program or mini game appid.
     * @param string $MNPIcon Mini program or mini game icon.
     * @param string $MNPName Mini program or mini game name.
     * @param string $MNPIntro Mini program or mini game information.
     * @param string $CreateUser Creator.
     * @param string $CreateTime Creation time.
     * @param string $UpdateUser Last modifier.
     * @param string $UpdateTime Last modified time.
     * @param integer $OnlineStatus Available status. Valid value: 0: Not available; 1 Available; 2: In canary release.
     * @param integer $EngineType Engine type. Specifies the runtime engine by product type. Valid values: 0: Mini program; 1: Mini game.
     * @param array $CategoryList Category information.
     * @param string $TeamId Team ID.
     * @param string $TeamName Team name.
     * @param integer $TeamTypeId Team type ID.
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
    }
}
