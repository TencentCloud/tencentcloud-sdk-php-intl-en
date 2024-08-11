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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mini program details
 *
 * @method string getMNPType() Obtain Mini program type 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPType(string $MNPType) Set Mini program type 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPId() Obtain Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPId(string $MNPId) Set Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPName() Obtain Mini program name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPName(string $MNPName) Set Mini program name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPIcon() Obtain Mini program icon
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPIcon(string $MNPIcon) Set Mini program icon
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPIntro() Obtain Mini program introduction
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPIntro(string $MNPIntro) Set Mini program introduction
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPDesc() Obtain Mini program description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPDesc(string $MNPDesc) Set Mini program description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Timestamp of the creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Timestamp of the creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateUser() Obtain Creator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateUser(string $CreateUser) Set Creator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAccessStatus() Obtain Connection status. 1: Not connected; 2: Connected
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccessStatus(integer $AccessStatus) Set Connection status. 1: Not connected; 2: Connected
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTeamName() Obtain The name of the associated team
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTeamName(string $TeamName) Set The name of the associated team
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTeamId() Obtain Team ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTeamId(string $TeamId) Set Team ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Mini program release status. 1: Released; 2: Removed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Mini program release status. 1: Released; 2: Removed
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribeMNPManagerDetailData extends AbstractModel
{
    /**
     * @var string Mini program type 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPType;

    /**
     * @var string Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPId;

    /**
     * @var string Mini program name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPName;

    /**
     * @var string Mini program icon
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPIcon;

    /**
     * @var string Mini program introduction
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPIntro;

    /**
     * @var string Mini program description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPDesc;

    /**
     * @var string Timestamp of the creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Creator
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateUser;

    /**
     * @var integer Connection status. 1: Not connected; 2: Connected
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccessStatus;

    /**
     * @var string The name of the associated team
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TeamName;

    /**
     * @var string Team ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TeamId;

    /**
     * @var integer Mini program release status. 1: Released; 2: Removed
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @param string $MNPType Mini program type 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPId Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPName Mini program name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPIcon Mini program icon
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPIntro Mini program introduction
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPDesc Mini program description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Timestamp of the creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateUser Creator
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AccessStatus Connection status. 1: Not connected; 2: Connected
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TeamName The name of the associated team
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TeamId Team ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Mini program release status. 1: Released; 2: Removed
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
        if (array_key_exists("MNPType",$param) and $param["MNPType"] !== null) {
            $this->MNPType = $param["MNPType"];
        }

        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }

        if (array_key_exists("MNPName",$param) and $param["MNPName"] !== null) {
            $this->MNPName = $param["MNPName"];
        }

        if (array_key_exists("MNPIcon",$param) and $param["MNPIcon"] !== null) {
            $this->MNPIcon = $param["MNPIcon"];
        }

        if (array_key_exists("MNPIntro",$param) and $param["MNPIntro"] !== null) {
            $this->MNPIntro = $param["MNPIntro"];
        }

        if (array_key_exists("MNPDesc",$param) and $param["MNPDesc"] !== null) {
            $this->MNPDesc = $param["MNPDesc"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CreateUser",$param) and $param["CreateUser"] !== null) {
            $this->CreateUser = $param["CreateUser"];
        }

        if (array_key_exists("AccessStatus",$param) and $param["AccessStatus"] !== null) {
            $this->AccessStatus = $param["AccessStatus"];
        }

        if (array_key_exists("TeamName",$param) and $param["TeamName"] !== null) {
            $this->TeamName = $param["TeamName"];
        }

        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
