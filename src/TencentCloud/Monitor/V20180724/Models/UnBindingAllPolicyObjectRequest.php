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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UnBindingAllPolicyObject request structure.
 *
 * @method string getModule() Obtain The value is fixed to monitor.
 * @method void setModule(string $Module) Set The value is fixed to monitor.
 * @method integer getGroupId() Obtain Policy group ID. If `PolicyId` is specified, you can pass any value to this field.
 * @method void setGroupId(integer $GroupId) Set Policy group ID. If `PolicyId` is specified, you can pass any value to this field.
 * @method string getPolicyId() Obtain Alarm policy ID. If this field is used, you can pass any value to `GroupId`.
 * @method void setPolicyId(string $PolicyId) Set Alarm policy ID. If this field is used, you can pass any value to `GroupId`.
 */
class UnBindingAllPolicyObjectRequest extends AbstractModel
{
    /**
     * @var string The value is fixed to monitor.
     */
    public $Module;

    /**
     * @var integer Policy group ID. If `PolicyId` is specified, you can pass any value to this field.
     */
    public $GroupId;

    /**
     * @var string Alarm policy ID. If this field is used, you can pass any value to `GroupId`.
     */
    public $PolicyId;

    /**
     * @param string $Module The value is fixed to monitor.
     * @param integer $GroupId Policy group ID. If `PolicyId` is specified, you can pass any value to this field.
     * @param string $PolicyId Alarm policy ID. If this field is used, you can pass any value to `GroupId`.
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }
    }
}
