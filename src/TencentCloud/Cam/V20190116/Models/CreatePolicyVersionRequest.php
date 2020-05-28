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
 * CreatePolicyVersion request structure.
 *
 * @method integer getPolicyId() Obtain Policy ID
 * @method void setPolicyId(integer $PolicyId) Set Policy ID
 * @method string getPolicyDocument() Obtain The policy document to use as the content for the new version
 * @method void setPolicyDocument(string $PolicyDocument) Set The policy document to use as the content for the new version
 * @method boolean getSetAsDefault() Obtain Specifies whether to set this version as the default version
 * @method void setSetAsDefault(boolean $SetAsDefault) Set Specifies whether to set this version as the default version
 */
class CreatePolicyVersionRequest extends AbstractModel
{
    /**
     * @var integer Policy ID
     */
    public $PolicyId;

    /**
     * @var string The policy document to use as the content for the new version
     */
    public $PolicyDocument;

    /**
     * @var boolean Specifies whether to set this version as the default version
     */
    public $SetAsDefault;

    /**
     * @param integer $PolicyId Policy ID
     * @param string $PolicyDocument The policy document to use as the content for the new version
     * @param boolean $SetAsDefault Specifies whether to set this version as the default version
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

        if (array_key_exists("PolicyDocument",$param) and $param["PolicyDocument"] !== null) {
            $this->PolicyDocument = $param["PolicyDocument"];
        }

        if (array_key_exists("SetAsDefault",$param) and $param["SetAsDefault"] !== null) {
            $this->SetAsDefault = $param["SetAsDefault"];
        }
    }
}
