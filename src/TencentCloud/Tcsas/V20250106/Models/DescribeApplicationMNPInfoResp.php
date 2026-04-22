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
 * The mini program or mini game data associated with a superapp
 *
 * @method string getMNPId() Obtain Mini program or mini game appid
 * @method void setMNPId(string $MNPId) Set Mini program or mini game appid
 * @method string getMNPIcon() Obtain Mini program or mini game icon
 * @method void setMNPIcon(string $MNPIcon) Set Mini program or mini game icon
 * @method string getMNPName() Obtain Mini program or mini game name
 * @method void setMNPName(string $MNPName) Set Mini program or mini game name
 * @method string getMNPIntro() Obtain Mini program or mini game information
 * @method void setMNPIntro(string $MNPIntro) Set Mini program or mini game information
 * @method string getCreateUser() Obtain Creator
 * @method void setCreateUser(string $CreateUser) Set Creator
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getUpdateUser() Obtain Modifier
 * @method void setUpdateUser(string $UpdateUser) Set Modifier
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method integer getOnlineStatus() Obtain Online status. 0 Not available; 1 Available
 * @method void setOnlineStatus(integer $OnlineStatus) Set Online status. 0 Not available; 1 Available
 * @method integer getEngineType() Obtain Engine type. 0 Mini program; 1 Mini game
 * @method void setEngineType(integer $EngineType) Set Engine type. 0 Mini program; 1 Mini game
 * @method array getCategoryList() Obtain Category information
 * @method void setCategoryList(array $CategoryList) Set Category information
 */
class DescribeApplicationMNPInfoResp extends AbstractModel
{
    /**
     * @var string Mini program or mini game appid
     */
    public $MNPId;

    /**
     * @var string Mini program or mini game icon
     */
    public $MNPIcon;

    /**
     * @var string Mini program or mini game name
     */
    public $MNPName;

    /**
     * @var string Mini program or mini game information
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
     * @var string Modifier
     */
    public $UpdateUser;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var integer Online status. 0 Not available; 1 Available
     */
    public $OnlineStatus;

    /**
     * @var integer Engine type. 0 Mini program; 1 Mini game
     */
    public $EngineType;

    /**
     * @var array Category information
     */
    public $CategoryList;

    /**
     * @param string $MNPId Mini program or mini game appid
     * @param string $MNPIcon Mini program or mini game icon
     * @param string $MNPName Mini program or mini game name
     * @param string $MNPIntro Mini program or mini game information
     * @param string $CreateUser Creator
     * @param string $CreateTime Creation time
     * @param string $UpdateUser Modifier
     * @param string $UpdateTime Update time
     * @param integer $OnlineStatus Online status. 0 Not available; 1 Available
     * @param integer $EngineType Engine type. 0 Mini program; 1 Mini game
     * @param array $CategoryList Category information
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
    }
}
