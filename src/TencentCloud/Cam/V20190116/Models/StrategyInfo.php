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
 * @method integer getPolicyId() 获取Policy ID
 * @method void setPolicyId(integer $PolicyId) 设置Policy ID
 * @method string getPolicyName() 获取Policy name
 * @method void setPolicyName(string $PolicyName) 设置Policy name
 * @method string getAddTime() 获取Time policy created
Note: This field may return null, indicating that no valid value was found.
 * @method void setAddTime(string $AddTime) 设置Time policy created
Note: This field may return null, indicating that no valid value was found.
 * @method integer getType() 获取Policy type. 1: Custom policy; 2: Preset policy
 * @method void setType(integer $Type) 设置Policy type. 1: Custom policy; 2: Preset policy
 * @method string getDescription() 获取Policy description
Note: This field may return null, indicating that no valid value was found.
 * @method void setDescription(string $Description) 设置Policy description
Note: This field may return null, indicating that no valid value was found.
 * @method integer getCreateMode() 获取How the policy was created: 1: Via console; 2: Via syntax
 * @method void setCreateMode(integer $CreateMode) 设置How the policy was created: 1: Via console; 2: Via syntax
 * @method integer getAttachments() 获取Number of associated users
 * @method void setAttachments(integer $Attachments) 设置Number of associated users
 * @method string getServiceType() 获取Product associated with the policy
Note: This field may return null, indicating that no valid value was found.
 * @method void setServiceType(string $ServiceType) 设置Product associated with the policy
Note: This field may return null, indicating that no valid value was found.
 * @method integer getIsAttached() 获取
 * @method void setIsAttached(integer $IsAttached) 设置
 * @method integer getDeactived() 获取
 * @method void setDeactived(integer $Deactived) 设置
 */

/**
 *Policy information
 */
class StrategyInfo extends AbstractModel
{
    /**
     * @var integer Policy ID
     */
    public $PolicyId;

    /**
     * @var string Policy name
     */
    public $PolicyName;

    /**
     * @var string Time policy created
Note: This field may return null, indicating that no valid value was found.
     */
    public $AddTime;

    /**
     * @var integer Policy type. 1: Custom policy; 2: Preset policy
     */
    public $Type;

    /**
     * @var string Policy description
Note: This field may return null, indicating that no valid value was found.
     */
    public $Description;

    /**
     * @var integer How the policy was created: 1: Via console; 2: Via syntax
     */
    public $CreateMode;

    /**
     * @var integer Number of associated users
     */
    public $Attachments;

    /**
     * @var string Product associated with the policy
Note: This field may return null, indicating that no valid value was found.
     */
    public $ServiceType;

    /**
     * @var integer 
     */
    public $IsAttached;

    /**
     * @var integer 
     */
    public $Deactived;
    /**
     * @param integer $PolicyId Policy ID
     * @param string $PolicyName Policy name
     * @param string $AddTime Time policy created
Note: This field may return null, indicating that no valid value was found.
     * @param integer $Type Policy type. 1: Custom policy; 2: Preset policy
     * @param string $Description Policy description
Note: This field may return null, indicating that no valid value was found.
     * @param integer $CreateMode How the policy was created: 1: Via console; 2: Via syntax
     * @param integer $Attachments Number of associated users
     * @param string $ServiceType Product associated with the policy
Note: This field may return null, indicating that no valid value was found.
     * @param integer $IsAttached 
     * @param integer $Deactived 
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateMode",$param) and $param["CreateMode"] !== null) {
            $this->CreateMode = $param["CreateMode"];
        }

        if (array_key_exists("Attachments",$param) and $param["Attachments"] !== null) {
            $this->Attachments = $param["Attachments"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("IsAttached",$param) and $param["IsAttached"] !== null) {
            $this->IsAttached = $param["IsAttached"];
        }

        if (array_key_exists("Deactived",$param) and $param["Deactived"] !== null) {
            $this->Deactived = $param["Deactived"];
        }
    }
}
