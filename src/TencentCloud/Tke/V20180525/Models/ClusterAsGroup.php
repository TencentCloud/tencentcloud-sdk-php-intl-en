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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster-associated scaling group information
 *
 * @method string getAutoScalingGroupId() Obtain Scaling group ID
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Scaling group ID
 * @method string getStatus() Obtain Scaling group status (`enabled`, `enabling`, `disabled`, `disabling`, `updating`, `deleting`, `scaleDownEnabling`, `scaleDownDisabling`)
 * @method void setStatus(string $Status) Set Scaling group status (`enabled`, `enabling`, `disabled`, `disabling`, `updating`, `deleting`, `scaleDownEnabling`, `scaleDownDisabling`)
 * @method boolean getIsUnschedulable() Obtain Whether the node is set to unschedulable
Note: this field may return null, indicating that no valid value was found.
 * @method void setIsUnschedulable(boolean $IsUnschedulable) Set Whether the node is set to unschedulable
Note: this field may return null, indicating that no valid value was found.
 * @method array getLabels() Obtain Scaling group label list
Note: this field may return null, indicating that no valid value was found.
 * @method void setLabels(array $Labels) Set Scaling group label list
Note: this field may return null, indicating that no valid value was found.
 * @method string getCreatedTime() Obtain Creation time
 * @method void setCreatedTime(string $CreatedTime) Set Creation time
 */
class ClusterAsGroup extends AbstractModel
{
    /**
     * @var string Scaling group ID
     */
    public $AutoScalingGroupId;

    /**
     * @var string Scaling group status (`enabled`, `enabling`, `disabled`, `disabling`, `updating`, `deleting`, `scaleDownEnabling`, `scaleDownDisabling`)
     */
    public $Status;

    /**
     * @var boolean Whether the node is set to unschedulable
Note: this field may return null, indicating that no valid value was found.
     */
    public $IsUnschedulable;

    /**
     * @var array Scaling group label list
Note: this field may return null, indicating that no valid value was found.
     */
    public $Labels;

    /**
     * @var string Creation time
     */
    public $CreatedTime;

    /**
     * @param string $AutoScalingGroupId Scaling group ID
     * @param string $Status Scaling group status (`enabled`, `enabling`, `disabled`, `disabling`, `updating`, `deleting`, `scaleDownEnabling`, `scaleDownDisabling`)
     * @param boolean $IsUnschedulable Whether the node is set to unschedulable
Note: this field may return null, indicating that no valid value was found.
     * @param array $Labels Scaling group label list
Note: this field may return null, indicating that no valid value was found.
     * @param string $CreatedTime Creation time
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
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsUnschedulable",$param) and $param["IsUnschedulable"] !== null) {
            $this->IsUnschedulable = $param["IsUnschedulable"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
