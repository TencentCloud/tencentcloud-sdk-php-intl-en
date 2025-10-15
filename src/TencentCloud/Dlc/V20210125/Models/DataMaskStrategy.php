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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DMask policy information.
 *
 * @method string getStrategyId() Obtain Policy ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStrategyId(string $StrategyId) Set Policy ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserAppId() Obtain User AppId

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserAppId(string $UserAppId) Set User AppId

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUin() Obtain User UIN

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUin(string $Uin) Set User UIN

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubAccountUin() Obtain Specifies the uin of the user sub-account to operate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubAccountUin(string $SubAccountUin) Set Specifies the uin of the user sub-account to operate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStrategyName() Obtain Policy name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStrategyName(string $StrategyName) Set Policy name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStrategyType() Obtain MASK_SHOW_FIRST_4, MASK_SHOW_LAST_4, MASK_HASH, MASK_DATE_SHOW_YEAR, MASK_NULL, MASK_DEFAULT.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStrategyType(string $StrategyType) Set MASK_SHOW_FIRST_4, MASK_SHOW_LAST_4, MASK_HASH, MASK_DATE_SHOW_YEAR, MASK_NULL, MASK_DEFAULT.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStrategyDesc() Obtain Policy description

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStrategyDesc(string $StrategyDesc) Set Policy description

Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getGroups() Obtain User group policy list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroups(array $Groups) Set User group policy list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUsers() Obtain User sub-account uin list, concatenated by ;.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUsers(string $Users) Set User sub-account uin list, concatenated by ;.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getState() Obtain 1: in effect; 0: deleted.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setState(integer $State) Set 1: in effect; 0: deleted.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() Obtain Policy creation time. timestamp in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(integer $CreateTime) Set Policy creation time. timestamp in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUpdateTime() Obtain Policy update time. timestamp in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(integer $UpdateTime) Set Policy update time. timestamp in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DataMaskStrategy extends AbstractModel
{
    /**
     * @var string Policy ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StrategyId;

    /**
     * @var string User AppId

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserAppId;

    /**
     * @var string User UIN

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uin;

    /**
     * @var string Specifies the uin of the user sub-account to operate.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubAccountUin;

    /**
     * @var string Policy name

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StrategyName;

    /**
     * @var string MASK_SHOW_FIRST_4, MASK_SHOW_LAST_4, MASK_HASH, MASK_DATE_SHOW_YEAR, MASK_NULL, MASK_DEFAULT.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StrategyType;

    /**
     * @var string Policy description

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StrategyDesc;

    /**
     * @var array User group policy list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Groups;

    /**
     * @var string User sub-account uin list, concatenated by ;.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Users;

    /**
     * @var integer 1: in effect; 0: deleted.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $State;

    /**
     * @var integer Policy creation time. timestamp in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer Policy update time. timestamp in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @param string $StrategyId Policy ID

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserAppId User AppId

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Uin User UIN

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubAccountUin Specifies the uin of the user sub-account to operate.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StrategyName Policy name

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StrategyType MASK_SHOW_FIRST_4, MASK_SHOW_LAST_4, MASK_HASH, MASK_DATE_SHOW_YEAR, MASK_NULL, MASK_DEFAULT.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StrategyDesc Policy description

Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Groups User group policy list.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Users User sub-account uin list, concatenated by ;.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $State 1: in effect; 0: deleted.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime Policy creation time. timestamp in milliseconds.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $UpdateTime Policy update time. timestamp in milliseconds.
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
        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("UserAppId",$param) and $param["UserAppId"] !== null) {
            $this->UserAppId = $param["UserAppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("StrategyDesc",$param) and $param["StrategyDesc"] !== null) {
            $this->StrategyDesc = $param["StrategyDesc"];
        }

        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = [];
            foreach ($param["Groups"] as $key => $value){
                $obj = new GroupInfo();
                $obj->deserialize($value);
                array_push($this->Groups, $obj);
            }
        }

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = $param["Users"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
