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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Add or modify the user
 *
 * @method string getInstanceId() Obtain Cluster instance ID.
 * @method void setInstanceId(string $InstanceId) Set Cluster instance ID.
 * @method string getUserName() Obtain Username
 * @method void setUserName(string $UserName) Set Username
 * @method string getPassWord() Obtain Password
 * @method void setPassWord(string $PassWord) Set Password
 * @method string getWhiteHost() Obtain The IP address of the user link
 * @method void setWhiteHost(string $WhiteHost) Set The IP address of the user link
 * @method string getOldWhiteHost() Obtain IP address of the user link before modification
 * @method void setOldWhiteHost(string $OldWhiteHost) Set IP address of the user link before modification
 * @method string getDescribe() Obtain Description
 * @method void setDescribe(string $Describe) Set Description
 * @method string getOldPwd() Obtain Original password
 * @method void setOldPwd(string $OldPwd) Set Original password
 * @method string getCamUin() Obtain UIN of the bound sub-user
 * @method void setCamUin(string $CamUin) Set UIN of the bound sub-user
 * @method array getCamRangerGroupIds() Obtain Ranger group id list
 * @method void setCamRangerGroupIds(array $CamRangerGroupIds) Set Ranger group id list
 */
class UserInfo extends AbstractModel
{
    /**
     * @var string Cluster instance ID.
     */
    public $InstanceId;

    /**
     * @var string Username
     */
    public $UserName;

    /**
     * @var string Password
     */
    public $PassWord;

    /**
     * @var string The IP address of the user link
     */
    public $WhiteHost;

    /**
     * @var string IP address of the user link before modification
     */
    public $OldWhiteHost;

    /**
     * @var string Description
     */
    public $Describe;

    /**
     * @var string Original password
     */
    public $OldPwd;

    /**
     * @var string UIN of the bound sub-user
     */
    public $CamUin;

    /**
     * @var array Ranger group id list
     */
    public $CamRangerGroupIds;

    /**
     * @param string $InstanceId Cluster instance ID.
     * @param string $UserName Username
     * @param string $PassWord Password
     * @param string $WhiteHost The IP address of the user link
     * @param string $OldWhiteHost IP address of the user link before modification
     * @param string $Describe Description
     * @param string $OldPwd Original password
     * @param string $CamUin UIN of the bound sub-user
     * @param array $CamRangerGroupIds Ranger group id list
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("PassWord",$param) and $param["PassWord"] !== null) {
            $this->PassWord = $param["PassWord"];
        }

        if (array_key_exists("WhiteHost",$param) and $param["WhiteHost"] !== null) {
            $this->WhiteHost = $param["WhiteHost"];
        }

        if (array_key_exists("OldWhiteHost",$param) and $param["OldWhiteHost"] !== null) {
            $this->OldWhiteHost = $param["OldWhiteHost"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("OldPwd",$param) and $param["OldPwd"] !== null) {
            $this->OldPwd = $param["OldPwd"];
        }

        if (array_key_exists("CamUin",$param) and $param["CamUin"] !== null) {
            $this->CamUin = $param["CamUin"];
        }

        if (array_key_exists("CamRangerGroupIds",$param) and $param["CamRangerGroupIds"] !== null) {
            $this->CamRangerGroupIds = $param["CamRangerGroupIds"];
        }
    }
}
