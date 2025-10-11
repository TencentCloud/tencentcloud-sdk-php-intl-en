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
 * @method string getStrategyName() Obtain Policy name
 * @method void setStrategyName(string $StrategyName) Set Policy name
 * @method string getStrategyType() Obtain MASK_SHOW_FIRST_4, MASK_SHOW_LAST_4, MASK_HASH, MASK_DATE_SHOW_YEAR, MASK_NULL, MASK_DEFAULT.
 * @method void setStrategyType(string $StrategyType) Set MASK_SHOW_FIRST_4, MASK_SHOW_LAST_4, MASK_HASH, MASK_DATE_SHOW_YEAR, MASK_NULL, MASK_DEFAULT.
 * @method string getStrategyDesc() Obtain Policy description
 * @method void setStrategyDesc(string $StrategyDesc) Set Policy description
 * @method array getGroups() Obtain User group policy list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroups(array $Groups) Set User group policy list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUsers() Obtain User sub-account uin list, concatenated by ;.
 * @method void setUsers(string $Users) Set User sub-account uin list, concatenated by ;.
 * @method string getStrategyId() Obtain Policy ID
 * @method void setStrategyId(string $StrategyId) Set Policy ID
 */
class DataMaskStrategyInfo extends AbstractModel
{
    /**
     * @var string Policy name
     */
    public $StrategyName;

    /**
     * @var string MASK_SHOW_FIRST_4, MASK_SHOW_LAST_4, MASK_HASH, MASK_DATE_SHOW_YEAR, MASK_NULL, MASK_DEFAULT.
     */
    public $StrategyType;

    /**
     * @var string Policy description
     */
    public $StrategyDesc;

    /**
     * @var array User group policy list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Groups;

    /**
     * @var string User sub-account uin list, concatenated by ;.
     */
    public $Users;

    /**
     * @var string Policy ID
     */
    public $StrategyId;

    /**
     * @param string $StrategyName Policy name
     * @param string $StrategyType MASK_SHOW_FIRST_4, MASK_SHOW_LAST_4, MASK_HASH, MASK_DATE_SHOW_YEAR, MASK_NULL, MASK_DEFAULT.
     * @param string $StrategyDesc Policy description
     * @param array $Groups User group policy list.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Users User sub-account uin list, concatenated by ;.
     * @param string $StrategyId Policy ID
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

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }
    }
}
