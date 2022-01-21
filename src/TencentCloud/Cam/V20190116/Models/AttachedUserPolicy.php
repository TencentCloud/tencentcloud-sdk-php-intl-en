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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of policies associated with the user
 *
 * @method string getPolicyId() Obtain Policy ID.
 * @method void setPolicyId(string $PolicyId) Set Policy ID.
 * @method string getPolicyName() Obtain Policy name.
 * @method void setPolicyName(string $PolicyName) Set Policy name.
 * @method string getDescription() Obtain Policy description.
 * @method void setDescription(string $Description) Set Policy description.
 * @method string getAddTime() Obtain Creation time.
 * @method void setAddTime(string $AddTime) Set Creation time.
 * @method string getStrategyType() Obtain Policy type (`1`: custom policy; `2`: preset policy).
 * @method void setStrategyType(string $StrategyType) Set Policy type (`1`: custom policy; `2`: preset policy).
 * @method string getCreateMode() Obtain Creation mode (`1`: create by product feature or project permission; other values: create by policy syntax).
 * @method void setCreateMode(string $CreateMode) Set Creation mode (`1`: create by product feature or project permission; other values: create by policy syntax).
 * @method array getGroups() Obtain Information on policies inherited from the user group.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setGroups(array $Groups) Set Information on policies inherited from the user group.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getDeactived() Obtain Whether the product has been deprecated (`0`: no; `1`: yes).
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDeactived(integer $Deactived) Set Whether the product has been deprecated (`0`: no; `1`: yes).
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getDeactivedDetail() Obtain List of deprecated products.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDeactivedDetail(array $DeactivedDetail) Set List of deprecated products.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class AttachedUserPolicy extends AbstractModel
{
    /**
     * @var string Policy ID.
     */
    public $PolicyId;

    /**
     * @var string Policy name.
     */
    public $PolicyName;

    /**
     * @var string Policy description.
     */
    public $Description;

    /**
     * @var string Creation time.
     */
    public $AddTime;

    /**
     * @var string Policy type (`1`: custom policy; `2`: preset policy).
     */
    public $StrategyType;

    /**
     * @var string Creation mode (`1`: create by product feature or project permission; other values: create by policy syntax).
     */
    public $CreateMode;

    /**
     * @var array Information on policies inherited from the user group.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Groups;

    /**
     * @var integer Whether the product has been deprecated (`0`: no; `1`: yes).
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Deactived;

    /**
     * @var array List of deprecated products.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DeactivedDetail;

    /**
     * @param string $PolicyId Policy ID.
     * @param string $PolicyName Policy name.
     * @param string $Description Policy description.
     * @param string $AddTime Creation time.
     * @param string $StrategyType Policy type (`1`: custom policy; `2`: preset policy).
     * @param string $CreateMode Creation mode (`1`: create by product feature or project permission; other values: create by policy syntax).
     * @param array $Groups Information on policies inherited from the user group.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Deactived Whether the product has been deprecated (`0`: no; `1`: yes).
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $DeactivedDetail List of deprecated products.
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("CreateMode",$param) and $param["CreateMode"] !== null) {
            $this->CreateMode = $param["CreateMode"];
        }

        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = [];
            foreach ($param["Groups"] as $key => $value){
                $obj = new AttachedUserPolicyGroupInfo();
                $obj->deserialize($value);
                array_push($this->Groups, $obj);
            }
        }

        if (array_key_exists("Deactived",$param) and $param["Deactived"] !== null) {
            $this->Deactived = $param["Deactived"];
        }

        if (array_key_exists("DeactivedDetail",$param) and $param["DeactivedDetail"] !== null) {
            $this->DeactivedDetail = $param["DeactivedDetail"];
        }
    }
}
