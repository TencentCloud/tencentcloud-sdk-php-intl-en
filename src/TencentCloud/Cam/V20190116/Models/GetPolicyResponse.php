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
 * GetPolicy response structure.
 *
 * @method string getPolicyName() Obtain Policy name
Note: This field may return null, indicating that no valid value was found.
 * @method void setPolicyName(string $PolicyName) Set Policy name
Note: This field may return null, indicating that no valid value was found.
 * @method string getDescription() Obtain Policy description
Note: This field may return null, indicating that no valid value was found.
 * @method void setDescription(string $Description) Set Policy description
Note: This field may return null, indicating that no valid value was found.
 * @method integer getType() Obtain 1: Custom policy; 2: Preset policy
Note: This field may return null, indicating that no valid value was found.
 * @method void setType(integer $Type) Set 1: Custom policy; 2: Preset policy
Note: This field may return null, indicating that no valid value was found.
 * @method string getAddTime() Obtain Time created
Note: This field may return null, indicating that no valid value was found.
 * @method void setAddTime(string $AddTime) Set Time created
Note: This field may return null, indicating that no valid value was found.
 * @method string getUpdateTime() Obtain Time of latest update
Note: This field may return null, indicating that no valid value was found.
 * @method void setUpdateTime(string $UpdateTime) Set Time of latest update
Note: This field may return null, indicating that no valid value was found.
 * @method string getPolicyDocument() Obtain Policy document
Note: This field may return null, indicating that no valid value was found.
 * @method void setPolicyDocument(string $PolicyDocument) Set Policy document
Note: This field may return null, indicating that no valid value was found.
 * @method string getPresetAlias() Obtain Remarks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPresetAlias(string $PresetAlias) Set Remarks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getIsServiceLinkedRolePolicy() Obtain Whether it is a service-linked policy
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsServiceLinkedRolePolicy(integer $IsServiceLinkedRolePolicy) Set Whether it is a service-linked policy
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetPolicyResponse extends AbstractModel
{
    /**
     * @var string Policy name
Note: This field may return null, indicating that no valid value was found.
     */
    public $PolicyName;

    /**
     * @var string Policy description
Note: This field may return null, indicating that no valid value was found.
     */
    public $Description;

    /**
     * @var integer 1: Custom policy; 2: Preset policy
Note: This field may return null, indicating that no valid value was found.
     */
    public $Type;

    /**
     * @var string Time created
Note: This field may return null, indicating that no valid value was found.
     */
    public $AddTime;

    /**
     * @var string Time of latest update
Note: This field may return null, indicating that no valid value was found.
     */
    public $UpdateTime;

    /**
     * @var string Policy document
Note: This field may return null, indicating that no valid value was found.
     */
    public $PolicyDocument;

    /**
     * @var string Remarks
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PresetAlias;

    /**
     * @var integer Whether it is a service-linked policy
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsServiceLinkedRolePolicy;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $PolicyName Policy name
Note: This field may return null, indicating that no valid value was found.
     * @param string $Description Policy description
Note: This field may return null, indicating that no valid value was found.
     * @param integer $Type 1: Custom policy; 2: Preset policy
Note: This field may return null, indicating that no valid value was found.
     * @param string $AddTime Time created
Note: This field may return null, indicating that no valid value was found.
     * @param string $UpdateTime Time of latest update
Note: This field may return null, indicating that no valid value was found.
     * @param string $PolicyDocument Policy document
Note: This field may return null, indicating that no valid value was found.
     * @param string $PresetAlias Remarks
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $IsServiceLinkedRolePolicy Whether it is a service-linked policy
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("PolicyDocument",$param) and $param["PolicyDocument"] !== null) {
            $this->PolicyDocument = $param["PolicyDocument"];
        }

        if (array_key_exists("PresetAlias",$param) and $param["PresetAlias"] !== null) {
            $this->PresetAlias = $param["PresetAlias"];
        }

        if (array_key_exists("IsServiceLinkedRolePolicy",$param) and $param["IsServiceLinkedRolePolicy"] !== null) {
            $this->IsServiceLinkedRolePolicy = $param["IsServiceLinkedRolePolicy"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
