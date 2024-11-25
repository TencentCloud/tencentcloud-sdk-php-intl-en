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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node pool information
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getNodePoolId() Obtain Node pool ID
 * @method void setNodePoolId(string $NodePoolId) Set Node pool ID
 * @method array getTags() Obtain Node tags
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setTags(array $Tags) Set Node tags
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method array getTaints() Obtain Node taint

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setTaints(array $Taints) Set Node taint

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method boolean getDeletionProtection() Obtain Whether to enable deletion protection
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setDeletionProtection(boolean $DeletionProtection) Set Whether to enable deletion protection
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method boolean getUnschedulable() Obtain Whether the node is unschedulable
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setUnschedulable(boolean $Unschedulable) Set Whether the node is unschedulable
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getType() Obtain Node pool type
 * @method void setType(string $Type) Set Node pool type
 * @method array getLabels() Obtain Node Labels
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setLabels(array $Labels) Set Node Labels
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getLifeState() Obtain Node pool status
 * @method void setLifeState(string $LifeState) Set Node pool status
 * @method string getCreatedAt() Obtain Creation time
 * @method void setCreatedAt(string $CreatedAt) Set Creation time
 * @method string getName() Obtain Node pool name
 * @method void setName(string $Name) Set Node pool name
 * @method NativeNodePoolInfo getNative() Obtain Native node pool parameters
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setNative(NativeNodePoolInfo $Native) Set Native node pool parameters
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method array getAnnotations() Obtain Node annotation list

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setAnnotations(array $Annotations) Set Node annotation list

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method SuperNodePoolInfo getSuper() Obtain Super node pool parameter, which has a value only when Type equals Super
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setSuper(SuperNodePoolInfo $Super) Set Super node pool parameter, which has a value only when Type equals Super
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method RegularNodePoolInfo getRegular() Obtain General node pool parameter, which has a value only when Type equals Regular
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setRegular(RegularNodePoolInfo $Regular) Set General node pool parameter, which has a value only when Type equals Regular
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method ExternalNodePoolInfo getExternal() Obtain Third-party node pool parameter, which has a value only when Type equals External
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setExternal(ExternalNodePoolInfo $External) Set Third-party node pool parameter, which has a value only when Type equals External
Note: This field may return "null", indicating that no valid value can be obtained.
 */
class NodePool extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Node pool ID
     */
    public $NodePoolId;

    /**
     * @var array Node tags
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Tags;

    /**
     * @var array Node taint

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Taints;

    /**
     * @var boolean Whether to enable deletion protection
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $DeletionProtection;

    /**
     * @var boolean Whether the node is unschedulable
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Unschedulable;

    /**
     * @var string Node pool type
     */
    public $Type;

    /**
     * @var array Node Labels
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Labels;

    /**
     * @var string Node pool status
     */
    public $LifeState;

    /**
     * @var string Creation time
     */
    public $CreatedAt;

    /**
     * @var string Node pool name
     */
    public $Name;

    /**
     * @var NativeNodePoolInfo Native node pool parameters
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Native;

    /**
     * @var array Node annotation list

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Annotations;

    /**
     * @var SuperNodePoolInfo Super node pool parameter, which has a value only when Type equals Super
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Super;

    /**
     * @var RegularNodePoolInfo General node pool parameter, which has a value only when Type equals Regular
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Regular;

    /**
     * @var ExternalNodePoolInfo Third-party node pool parameter, which has a value only when Type equals External
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $External;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $NodePoolId Node pool ID
     * @param array $Tags Node tags
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param array $Taints Node taint

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param boolean $DeletionProtection Whether to enable deletion protection
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param boolean $Unschedulable Whether the node is unschedulable
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $Type Node pool type
     * @param array $Labels Node Labels
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $LifeState Node pool status
     * @param string $CreatedAt Creation time
     * @param string $Name Node pool name
     * @param NativeNodePoolInfo $Native Native node pool parameters
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param array $Annotations Node annotation list

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param SuperNodePoolInfo $Super Super node pool parameter, which has a value only when Type equals Super
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param RegularNodePoolInfo $Regular General node pool parameter, which has a value only when Type equals Regular
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param ExternalNodePoolInfo $External Third-party node pool parameter, which has a value only when Type equals External
Note: This field may return "null", indicating that no valid value can be obtained.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Taints",$param) and $param["Taints"] !== null) {
            $this->Taints = [];
            foreach ($param["Taints"] as $key => $value){
                $obj = new Taint();
                $obj->deserialize($value);
                array_push($this->Taints, $obj);
            }
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }

        if (array_key_exists("Unschedulable",$param) and $param["Unschedulable"] !== null) {
            $this->Unschedulable = $param["Unschedulable"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("LifeState",$param) and $param["LifeState"] !== null) {
            $this->LifeState = $param["LifeState"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Native",$param) and $param["Native"] !== null) {
            $this->Native = new NativeNodePoolInfo();
            $this->Native->deserialize($param["Native"]);
        }

        if (array_key_exists("Annotations",$param) and $param["Annotations"] !== null) {
            $this->Annotations = [];
            foreach ($param["Annotations"] as $key => $value){
                $obj = new Annotation();
                $obj->deserialize($value);
                array_push($this->Annotations, $obj);
            }
        }

        if (array_key_exists("Super",$param) and $param["Super"] !== null) {
            $this->Super = new SuperNodePoolInfo();
            $this->Super->deserialize($param["Super"]);
        }

        if (array_key_exists("Regular",$param) and $param["Regular"] !== null) {
            $this->Regular = new RegularNodePoolInfo();
            $this->Regular->deserialize($param["Regular"]);
        }

        if (array_key_exists("External",$param) and $param["External"] !== null) {
            $this->External = new ExternalNodePoolInfo();
            $this->External->deserialize($param["External"]);
        }
    }
}
