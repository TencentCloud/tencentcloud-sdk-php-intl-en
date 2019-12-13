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
 * @method string getPolicyName() 获取Policy name
 * @method void setPolicyName(string $PolicyName) 设置Policy name
 * @method string getPolicyDocument() 获取Policy document
 * @method void setPolicyDocument(string $PolicyDocument) 设置Policy document
 * @method string getDescription() 获取Policy description
 * @method void setDescription(string $Description) 设置Policy description
 */

/**
 *CreatePolicy request structure.
 */
class CreatePolicyRequest extends AbstractModel
{
    /**
     * @var string Policy name
     */
    public $PolicyName;

    /**
     * @var string Policy document
     */
    public $PolicyDocument;

    /**
     * @var string Policy description
     */
    public $Description;
    /**
     * @param string $PolicyName Policy name
     * @param string $PolicyDocument Policy document
     * @param string $Description Policy description
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
        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("PolicyDocument",$param) and $param["PolicyDocument"] !== null) {
            $this->PolicyDocument = $param["PolicyDocument"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
