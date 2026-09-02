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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CSPM information of an account
 *
 * @method integer getAppID() Obtain <p>APPID</p>
 * @method void setAppID(integer $AppID) Set <p>APPID</p>
 * @method string getUin() Obtain <p>UIN</p>
 * @method void setUin(string $Uin) Set <p>UIN</p>
 * @method string getNickName() Obtain <p>Account nickname</p>
 * @method void setNickName(string $NickName) Set <p>Account nickname</p>
 * @method integer getCSPMNum() Obtain <p>CSPM scan quota</p>
 * @method void setCSPMNum(integer $CSPMNum) Set <p>CSPM scan quota</p>
 * @method integer getUsedCount() Obtain <p>Consumed CSPM scan quota</p>
 * @method void setUsedCount(integer $UsedCount) Set <p>Consumed CSPM scan quota</p>
 * @method integer getGrantedCSPMNum() Obtain <p>Complimentary CSPM scan quota</p>
 * @method void setGrantedCSPMNum(integer $GrantedCSPMNum) Set <p>Complimentary CSPM scan quota</p>
 * @method integer getIsShared() Obtain <p>Whether it is shared. 1: shared, 2: not shared</p>
 * @method void setIsShared(integer $IsShared) Set <p>Whether it is shared. 1: shared, 2: not shared</p>
 * @method integer getIsSelfBuy() Obtain <p>Whether to purchase separately. 1: purchase separately, 2: not purchased separately</p>
 * @method void setIsSelfBuy(integer $IsSelfBuy) Set <p>Whether to purchase separately. 1: purchase separately, 2: not purchased separately</p>
 * @method integer getShareFromAppID() Obtain <p>Quota source account</p>
 * @method void setShareFromAppID(integer $ShareFromAppID) Set <p>Quota source account</p>
 * @method string getRole() Obtain <p>Role: member; admin; delegatedAdmin</p>
 * @method void setRole(string $Role) Set <p>Role: member; admin; delegatedAdmin</p>
 * @method string getDepartment() Obtain <p>Department</p>
 * @method void setDepartment(string $Department) Set <p>Department</p>
 */
class UserCSPMInfo extends AbstractModel
{
    /**
     * @var integer <p>APPID</p>
     */
    public $AppID;

    /**
     * @var string <p>UIN</p>
     */
    public $Uin;

    /**
     * @var string <p>Account nickname</p>
     */
    public $NickName;

    /**
     * @var integer <p>CSPM scan quota</p>
     */
    public $CSPMNum;

    /**
     * @var integer <p>Consumed CSPM scan quota</p>
     */
    public $UsedCount;

    /**
     * @var integer <p>Complimentary CSPM scan quota</p>
     */
    public $GrantedCSPMNum;

    /**
     * @var integer <p>Whether it is shared. 1: shared, 2: not shared</p>
     */
    public $IsShared;

    /**
     * @var integer <p>Whether to purchase separately. 1: purchase separately, 2: not purchased separately</p>
     */
    public $IsSelfBuy;

    /**
     * @var integer <p>Quota source account</p>
     */
    public $ShareFromAppID;

    /**
     * @var string <p>Role: member; admin; delegatedAdmin</p>
     */
    public $Role;

    /**
     * @var string <p>Department</p>
     */
    public $Department;

    /**
     * @param integer $AppID <p>APPID</p>
     * @param string $Uin <p>UIN</p>
     * @param string $NickName <p>Account nickname</p>
     * @param integer $CSPMNum <p>CSPM scan quota</p>
     * @param integer $UsedCount <p>Consumed CSPM scan quota</p>
     * @param integer $GrantedCSPMNum <p>Complimentary CSPM scan quota</p>
     * @param integer $IsShared <p>Whether it is shared. 1: shared, 2: not shared</p>
     * @param integer $IsSelfBuy <p>Whether to purchase separately. 1: purchase separately, 2: not purchased separately</p>
     * @param integer $ShareFromAppID <p>Quota source account</p>
     * @param string $Role <p>Role: member; admin; delegatedAdmin</p>
     * @param string $Department <p>Department</p>
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("CSPMNum",$param) and $param["CSPMNum"] !== null) {
            $this->CSPMNum = $param["CSPMNum"];
        }

        if (array_key_exists("UsedCount",$param) and $param["UsedCount"] !== null) {
            $this->UsedCount = $param["UsedCount"];
        }

        if (array_key_exists("GrantedCSPMNum",$param) and $param["GrantedCSPMNum"] !== null) {
            $this->GrantedCSPMNum = $param["GrantedCSPMNum"];
        }

        if (array_key_exists("IsShared",$param) and $param["IsShared"] !== null) {
            $this->IsShared = $param["IsShared"];
        }

        if (array_key_exists("IsSelfBuy",$param) and $param["IsSelfBuy"] !== null) {
            $this->IsSelfBuy = $param["IsSelfBuy"];
        }

        if (array_key_exists("ShareFromAppID",$param) and $param["ShareFromAppID"] !== null) {
            $this->ShareFromAppID = $param["ShareFromAppID"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Department",$param) and $param["Department"] !== null) {
            $this->Department = $param["Department"];
        }
    }
}
