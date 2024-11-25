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
 * CreateNodePool request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getName() Obtain Node pool name
 * @method void setName(string $Name) Set Node pool name
 * @method string getType() Obtain Node pool type
 * @method void setType(string $Type) Set Node pool type
 * @method array getLabels() Obtain Node Labels
 * @method void setLabels(array $Labels) Set Node Labels
 * @method array getTaints() Obtain Node taint
 * @method void setTaints(array $Taints) Set Node taint
 * @method array getTags() Obtain Node tags
 * @method void setTags(array $Tags) Set Node tags
 * @method boolean getDeletionProtection() Obtain Whether to enable deletion protection
 * @method void setDeletionProtection(boolean $DeletionProtection) Set Whether to enable deletion protection
 * @method boolean getUnschedulable() Obtain Whether the node is unschedulable by default
 * @method void setUnschedulable(boolean $Unschedulable) Set Whether the node is unschedulable by default
 * @method CreateNativeNodePoolParam getNative() Obtain Native node pool creation parameters
 * @method void setNative(CreateNativeNodePoolParam $Native) Set Native node pool creation parameters
 * @method array getAnnotations() Obtain Node Annotation List
 * @method void setAnnotations(array $Annotations) Set Node Annotation List
 */
class CreateNodePoolRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Node pool name
     */
    public $Name;

    /**
     * @var string Node pool type
     */
    public $Type;

    /**
     * @var array Node Labels
     */
    public $Labels;

    /**
     * @var array Node taint
     */
    public $Taints;

    /**
     * @var array Node tags
     */
    public $Tags;

    /**
     * @var boolean Whether to enable deletion protection
     */
    public $DeletionProtection;

    /**
     * @var boolean Whether the node is unschedulable by default
     */
    public $Unschedulable;

    /**
     * @var CreateNativeNodePoolParam Native node pool creation parameters
     */
    public $Native;

    /**
     * @var array Node Annotation List
     */
    public $Annotations;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $Name Node pool name
     * @param string $Type Node pool type
     * @param array $Labels Node Labels
     * @param array $Taints Node taint
     * @param array $Tags Node tags
     * @param boolean $DeletionProtection Whether to enable deletion protection
     * @param boolean $Unschedulable Whether the node is unschedulable by default
     * @param CreateNativeNodePoolParam $Native Native node pool creation parameters
     * @param array $Annotations Node Annotation List
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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

        if (array_key_exists("Taints",$param) and $param["Taints"] !== null) {
            $this->Taints = [];
            foreach ($param["Taints"] as $key => $value){
                $obj = new Taint();
                $obj->deserialize($value);
                array_push($this->Taints, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }

        if (array_key_exists("Unschedulable",$param) and $param["Unschedulable"] !== null) {
            $this->Unschedulable = $param["Unschedulable"];
        }

        if (array_key_exists("Native",$param) and $param["Native"] !== null) {
            $this->Native = new CreateNativeNodePoolParam();
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
    }
}
