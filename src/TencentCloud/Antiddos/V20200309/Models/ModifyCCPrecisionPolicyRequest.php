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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCCPrecisionPolicy request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getPolicyId() Obtain Policy ID
 * @method void setPolicyId(string $PolicyId) Set Policy ID
 * @method string getPolicyAction() Obtain Specifies the action. `alg`: Verify the access request via CAPTCHA; `drop`: Drop the access request.
 * @method void setPolicyAction(string $PolicyAction) Set Specifies the action. `alg`: Verify the access request via CAPTCHA; `drop`: Drop the access request.
 * @method array getPolicyList() Obtain Policy records
 * @method void setPolicyList(array $PolicyList) Set Policy records
 */
class ModifyCCPrecisionPolicyRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Policy ID
     */
    public $PolicyId;

    /**
     * @var string Specifies the action. `alg`: Verify the access request via CAPTCHA; `drop`: Drop the access request.
     */
    public $PolicyAction;

    /**
     * @var array Policy records
     */
    public $PolicyList;

    /**
     * @param string $InstanceId Instance ID
     * @param string $PolicyId Policy ID
     * @param string $PolicyAction Specifies the action. `alg`: Verify the access request via CAPTCHA; `drop`: Drop the access request.
     * @param array $PolicyList Policy records
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyAction",$param) and $param["PolicyAction"] !== null) {
            $this->PolicyAction = $param["PolicyAction"];
        }

        if (array_key_exists("PolicyList",$param) and $param["PolicyList"] !== null) {
            $this->PolicyList = [];
            foreach ($param["PolicyList"] as $key => $value){
                $obj = new CCPrecisionPlyRecord();
                $obj->deserialize($value);
                array_push($this->PolicyList, $obj);
            }
        }
    }
}
