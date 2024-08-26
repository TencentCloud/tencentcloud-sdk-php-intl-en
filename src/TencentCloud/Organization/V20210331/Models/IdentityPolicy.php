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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Organization identity policy
 *
 * @method integer getPolicyId() Obtain CAM preset policy ID, which is valid and required when PolicyType is a preset policy.
 * @method void setPolicyId(integer $PolicyId) Set CAM preset policy ID, which is valid and required when PolicyType is a preset policy.
 * @method string getPolicyName() Obtain CAM preset policy name, which is valid and required when PolicyType is a preset policy.
 * @method void setPolicyName(string $PolicyName) Set CAM preset policy name, which is valid and required when PolicyType is a preset policy.
 * @method integer getPolicyType() Obtain Policy type. Valid values: 1 (custom policy), 2 (preset policy). The default is 2.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolicyType(integer $PolicyType) Set Policy type. Valid values: 1 (custom policy), 2 (preset policy). The default is 2.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPolicyDocument() Obtain Custom policy content, which follows the CAM policy syntax. It is valid and required when PolicyType is a custom policy.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolicyDocument(string $PolicyDocument) Set Custom policy content, which follows the CAM policy syntax. It is valid and required when PolicyType is a custom policy.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class IdentityPolicy extends AbstractModel
{
    /**
     * @var integer CAM preset policy ID, which is valid and required when PolicyType is a preset policy.
     */
    public $PolicyId;

    /**
     * @var string CAM preset policy name, which is valid and required when PolicyType is a preset policy.
     */
    public $PolicyName;

    /**
     * @var integer Policy type. Valid values: 1 (custom policy), 2 (preset policy). The default is 2.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PolicyType;

    /**
     * @var string Custom policy content, which follows the CAM policy syntax. It is valid and required when PolicyType is a custom policy.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PolicyDocument;

    /**
     * @param integer $PolicyId CAM preset policy ID, which is valid and required when PolicyType is a preset policy.
     * @param string $PolicyName CAM preset policy name, which is valid and required when PolicyType is a preset policy.
     * @param integer $PolicyType Policy type. Valid values: 1 (custom policy), 2 (preset policy). The default is 2.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PolicyDocument Custom policy content, which follows the CAM policy syntax. It is valid and required when PolicyType is a custom policy.
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PolicyDocument",$param) and $param["PolicyDocument"] !== null) {
            $this->PolicyDocument = $param["PolicyDocument"];
        }
    }
}
