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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RegisterClaimPolicy request structure.
 *
 * @method integer getCptIndex() Obtain The claim protocol type (CPT) index.
 * @method void setCptIndex(integer $CptIndex) Set The claim protocol type (CPT) index.
 * @method string getPolicy() Obtain The disclosure policy.
 * @method void setPolicy(string $Policy) Set The disclosure policy.
 */
class RegisterClaimPolicyRequest extends AbstractModel
{
    /**
     * @var integer The claim protocol type (CPT) index.
     */
    public $CptIndex;

    /**
     * @var string The disclosure policy.
     */
    public $Policy;

    /**
     * @param integer $CptIndex The claim protocol type (CPT) index.
     * @param string $Policy The disclosure policy.
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
        if (array_key_exists("CptIndex",$param) and $param["CptIndex"] !== null) {
            $this->CptIndex = $param["CptIndex"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }
    }
}
