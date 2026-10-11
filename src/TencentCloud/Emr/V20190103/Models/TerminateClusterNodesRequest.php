<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TerminateClusterNodes request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method array getCvmInstanceIds() Obtain List of terminated resources.
 * @method void setCvmInstanceIds(array $CvmInstanceIds) Set List of terminated resources.
 * @method string getNodeFlag() Obtain Valid values of the node type to be terminated:
  <li>MASTER</li>
  <li>TASK</li>
  <li>CORE</li>
  <li>ROUTER</li>
 * @method void setNodeFlag(string $NodeFlag) Set Valid values of the node type to be terminated:
  <li>MASTER</li>
  <li>TASK</li>
  <li>CORE</li>
  <li>ROUTER</li>
 * @method boolean getGraceDownFlag() Obtain Graceful scale-in switch.
  <li>true: enable</li>
  <li>false: disable</li>
 * @method void setGraceDownFlag(boolean $GraceDownFlag) Set Graceful scale-in switch.
  <li>true: enable</li>
  <li>false: disable</li>
 * @method integer getGraceDownTime() Obtain Graceful scale-in waiting time. Value range: 60–1800, in seconds.
 * @method void setGraceDownTime(integer $GraceDownTime) Set Graceful scale-in waiting time. Value range: 60–1800, in seconds.
 */
class TerminateClusterNodesRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var array List of terminated resources.
     */
    public $CvmInstanceIds;

    /**
     * @var string Valid values of the node type to be terminated:
  <li>MASTER</li>
  <li>TASK</li>
  <li>CORE</li>
  <li>ROUTER</li>
     */
    public $NodeFlag;

    /**
     * @var boolean Graceful scale-in switch.
  <li>true: enable</li>
  <li>false: disable</li>
     */
    public $GraceDownFlag;

    /**
     * @var integer Graceful scale-in waiting time. Value range: 60–1800, in seconds.
     */
    public $GraceDownTime;

    /**
     * @param string $InstanceId Instance ID.
     * @param array $CvmInstanceIds List of terminated resources.
     * @param string $NodeFlag Valid values of the node type to be terminated:
  <li>MASTER</li>
  <li>TASK</li>
  <li>CORE</li>
  <li>ROUTER</li>
     * @param boolean $GraceDownFlag Graceful scale-in switch.
  <li>true: enable</li>
  <li>false: disable</li>
     * @param integer $GraceDownTime Graceful scale-in waiting time. Value range: 60–1800, in seconds.
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

        if (array_key_exists("CvmInstanceIds",$param) and $param["CvmInstanceIds"] !== null) {
            $this->CvmInstanceIds = $param["CvmInstanceIds"];
        }

        if (array_key_exists("NodeFlag",$param) and $param["NodeFlag"] !== null) {
            $this->NodeFlag = $param["NodeFlag"];
        }

        if (array_key_exists("GraceDownFlag",$param) and $param["GraceDownFlag"] !== null) {
            $this->GraceDownFlag = $param["GraceDownFlag"];
        }

        if (array_key_exists("GraceDownTime",$param) and $param["GraceDownTime"] !== null) {
            $this->GraceDownTime = $param["GraceDownTime"];
        }
    }
}
