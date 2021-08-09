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
 * DescribeBindingPolicyObjectList request structure.
 *
 * @method string getModule() Obtain The value is fixed to monitor.
 * @method void setModule(string $Module) Set The value is fixed to monitor.
 * @method integer getGroupId() Obtain Policy group ID. If the ID is in the format of “policy-xxxx”, please enter it in the `PolicyId` field. Enter 0 in this field.
 * @method void setGroupId(integer $GroupId) Set Policy group ID. If the ID is in the format of “policy-xxxx”, please enter it in the `PolicyId` field. Enter 0 in this field.
 * @method string getPolicyId() Obtain Alarm policy ID in the format of “policy-xxxx”. If a value has been entered in this field, you can enter 0 in the `GroupId` field.
 * @method void setPolicyId(string $PolicyId) Set Alarm policy ID in the format of “policy-xxxx”. If a value has been entered in this field, you can enter 0 in the `GroupId` field.
 * @method integer getLimit() Obtain The number of alarm objects returned each time. Value range: 1-100. Default value: 20.
 * @method void setLimit(integer $Limit) Set The number of alarm objects returned each time. Value range: 1-100. Default value: 20.
 * @method integer getOffset() Obtain Offset, which starts from 0 and is set to 0 by default. For example, the parameter `Offset=0&Limit=20` returns the zeroth to 19th alarm objects, and `Offset=20&Limit=20` returns the 20th to 39th alarm objects, and so on.
 * @method void setOffset(integer $Offset) Set Offset, which starts from 0 and is set to 0 by default. For example, the parameter `Offset=0&Limit=20` returns the zeroth to 19th alarm objects, and `Offset=20&Limit=20` returns the 20th to 39th alarm objects, and so on.
 * @method array getDimensions() Obtain Dimensions of filtering objects.
 * @method void setDimensions(array $Dimensions) Set Dimensions of filtering objects.
 */
class DescribeBindingPolicyObjectListRequest extends AbstractModel
{
    /**
     * @var string The value is fixed to monitor.
     */
    public $Module;

    /**
     * @var integer Policy group ID. If the ID is in the format of “policy-xxxx”, please enter it in the `PolicyId` field. Enter 0 in this field.
     */
    public $GroupId;

    /**
     * @var string Alarm policy ID in the format of “policy-xxxx”. If a value has been entered in this field, you can enter 0 in the `GroupId` field.
     */
    public $PolicyId;

    /**
     * @var integer The number of alarm objects returned each time. Value range: 1-100. Default value: 20.
     */
    public $Limit;

    /**
     * @var integer Offset, which starts from 0 and is set to 0 by default. For example, the parameter `Offset=0&Limit=20` returns the zeroth to 19th alarm objects, and `Offset=20&Limit=20` returns the 20th to 39th alarm objects, and so on.
     */
    public $Offset;

    /**
     * @var array Dimensions of filtering objects.
     */
    public $Dimensions;

    /**
     * @param string $Module The value is fixed to monitor.
     * @param integer $GroupId Policy group ID. If the ID is in the format of “policy-xxxx”, please enter it in the `PolicyId` field. Enter 0 in this field.
     * @param string $PolicyId Alarm policy ID in the format of “policy-xxxx”. If a value has been entered in this field, you can enter 0 in the `GroupId` field.
     * @param integer $Limit The number of alarm objects returned each time. Value range: 1-100. Default value: 20.
     * @param integer $Offset Offset, which starts from 0 and is set to 0 by default. For example, the parameter `Offset=0&Limit=20` returns the zeroth to 19th alarm objects, and `Offset=20&Limit=20` returns the 20th to 39th alarm objects, and so on.
     * @param array $Dimensions Dimensions of filtering objects.
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = [];
            foreach ($param["Dimensions"] as $key => $value){
                $obj = new DescribeBindingPolicyObjectListDimension();
                $obj->deserialize($value);
                array_push($this->Dimensions, $obj);
            }
        }
    }
}
