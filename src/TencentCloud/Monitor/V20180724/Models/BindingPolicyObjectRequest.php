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
 * BindingPolicyObject request structure.
 *
 * @method integer getGroupId() Obtain Policy group ID. If `PolicyId` is used, this parameter will be ignored, and any value, e.g., 0, can be passed in.
 * @method void setGroupId(integer $GroupId) Set Policy group ID. If `PolicyId` is used, this parameter will be ignored, and any value, e.g., 0, can be passed in.
 * @method string getModule() Obtain Required. The value is fixed to monitor.
 * @method void setModule(string $Module) Set Required. The value is fixed to monitor.
 * @method integer getInstanceGroupId() Obtain Instance group ID.
 * @method void setInstanceGroupId(integer $InstanceGroupId) Set Instance group ID.
 * @method array getDimensions() Obtain Dimensions of an object to be bound.
 * @method void setDimensions(array $Dimensions) Set Dimensions of an object to be bound.
 * @method string getPolicyId() Obtain Alarm policy ID. If this parameter is used, `GroupId` will be ignored.
 * @method void setPolicyId(string $PolicyId) Set Alarm policy ID. If this parameter is used, `GroupId` will be ignored.
 */
class BindingPolicyObjectRequest extends AbstractModel
{
    /**
     * @var integer Policy group ID. If `PolicyId` is used, this parameter will be ignored, and any value, e.g., 0, can be passed in.
     */
    public $GroupId;

    /**
     * @var string Required. The value is fixed to monitor.
     */
    public $Module;

    /**
     * @var integer Instance group ID.
     */
    public $InstanceGroupId;

    /**
     * @var array Dimensions of an object to be bound.
     */
    public $Dimensions;

    /**
     * @var string Alarm policy ID. If this parameter is used, `GroupId` will be ignored.
     */
    public $PolicyId;

    /**
     * @param integer $GroupId Policy group ID. If `PolicyId` is used, this parameter will be ignored, and any value, e.g., 0, can be passed in.
     * @param string $Module Required. The value is fixed to monitor.
     * @param integer $InstanceGroupId Instance group ID.
     * @param array $Dimensions Dimensions of an object to be bound.
     * @param string $PolicyId Alarm policy ID. If this parameter is used, `GroupId` will be ignored.
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = [];
            foreach ($param["Dimensions"] as $key => $value){
                $obj = new BindingPolicyObjectDimension();
                $obj->deserialize($value);
                array_push($this->Dimensions, $obj);
            }
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }
    }
}
