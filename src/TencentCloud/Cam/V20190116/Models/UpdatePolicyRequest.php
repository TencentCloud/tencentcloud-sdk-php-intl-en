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
 * @method integer getPolicyId() Obtain Policy ID
 * @method void setPolicyId(integer $PolicyId) Set Policy ID
 * @method string getPolicyName() Obtain Policy name
 * @method void setPolicyName(string $PolicyName) Set Policy name
 * @method string getDescription() Obtain Policy description
 * @method void setDescription(string $Description) Set Policy description
 * @method string getPolicyDocument() Obtain Policy document, such as `{"version":"2.0","statement":[{"action":"name/sts:AssumeRole","effect":"allow","principal":{"service":["cloudaudit.cloud.tencent.com","cls.cloud.tencent.com"]}}]}`, where `principal` is used to specify the resources that the role is authorized to access. For more information on this parameter, please see the `RoleInfo` output parameter of the [GetRole](https://cloud.tencent.com/document/product/598/36221) API
 * @method void setPolicyDocument(string $PolicyDocument) Set Policy document, such as `{"version":"2.0","statement":[{"action":"name/sts:AssumeRole","effect":"allow","principal":{"service":["cloudaudit.cloud.tencent.com","cls.cloud.tencent.com"]}}]}`, where `principal` is used to specify the resources that the role is authorized to access. For more information on this parameter, please see the `RoleInfo` output parameter of the [GetRole](https://cloud.tencent.com/document/product/598/36221) API
 */

/**
 *UpdatePolicy request structure.
 */
class UpdatePolicyRequest extends AbstractModel
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
     * @var string Policy description
     */
    public $Description;

    /**
     * @var string Policy document, such as `{"version":"2.0","statement":[{"action":"name/sts:AssumeRole","effect":"allow","principal":{"service":["cloudaudit.cloud.tencent.com","cls.cloud.tencent.com"]}}]}`, where `principal` is used to specify the resources that the role is authorized to access. For more information on this parameter, please see the `RoleInfo` output parameter of the [GetRole](https://cloud.tencent.com/document/product/598/36221) API
     */
    public $PolicyDocument;
    /**
     * @param integer $PolicyId Policy ID
     * @param string $PolicyName Policy name
     * @param string $Description Policy description
     * @param string $PolicyDocument Policy document, such as `{"version":"2.0","statement":[{"action":"name/sts:AssumeRole","effect":"allow","principal":{"service":["cloudaudit.cloud.tencent.com","cls.cloud.tencent.com"]}}]}`, where `principal` is used to specify the resources that the role is authorized to access. For more information on this parameter, please see the `RoleInfo` output parameter of the [GetRole](https://cloud.tencent.com/document/product/598/36221) API
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

        if (array_key_exists("PolicyDocument",$param) and $param["PolicyDocument"] !== null) {
            $this->PolicyDocument = $param["PolicyDocument"];
        }
    }
}
