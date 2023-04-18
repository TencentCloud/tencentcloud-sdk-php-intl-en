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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TerminateClusterNodes request structure.
 *
 * @method string getInstanceId() Obtain The instance ID.
 * @method void setInstanceId(string $InstanceId) Set The instance ID.
 * @method array getCvmInstanceIds() Obtain The list of resources to be terminated.
 * @method void setCvmInstanceIds(array $CvmInstanceIds) Set The list of resources to be terminated.
 * @method string getNodeFlag() Obtain Valid values of node type:
  <li>MASTER</li>
  <li>TASK</li>
  <li>CORE</li>
  <li>ROUTER</li>
 * @method void setNodeFlag(string $NodeFlag) Set Valid values of node type:
  <li>MASTER</li>
  <li>TASK</li>
  <li>CORE</li>
  <li>ROUTER</li>
 * @method boolean getGraceDownFlag() Obtain The graceful scale-in feature. Valid values:
  <li>`true`: Enabled.</li>
  <li>`false`: Disabled.</li>
 * @method void setGraceDownFlag(boolean $GraceDownFlag) Set The graceful scale-in feature. Valid values:
  <li>`true`: Enabled.</li>
  <li>`false`: Disabled.</li>
 * @method integer getGraceDownTime() Obtain The graceful scale-in wait time in seconds. Value range: 60–1800.
 * @method void setGraceDownTime(integer $GraceDownTime) Set The graceful scale-in wait time in seconds. Value range: 60–1800.
 */
class TerminateClusterNodesRequest extends AbstractModel
{
    /**
     * @var string The instance ID.
     */
    public $InstanceId;

    /**
     * @var array The list of resources to be terminated.
     */
    public $CvmInstanceIds;

    /**
     * @var string Valid values of node type:
  <li>MASTER</li>
  <li>TASK</li>
  <li>CORE</li>
  <li>ROUTER</li>
     */
    public $NodeFlag;

    /**
     * @var boolean The graceful scale-in feature. Valid values:
  <li>`true`: Enabled.</li>
  <li>`false`: Disabled.</li>
     */
    public $GraceDownFlag;

    /**
     * @var integer The graceful scale-in wait time in seconds. Value range: 60–1800.
     */
    public $GraceDownTime;

    /**
     * @param string $InstanceId The instance ID.
     * @param array $CvmInstanceIds The list of resources to be terminated.
     * @param string $NodeFlag Valid values of node type:
  <li>MASTER</li>
  <li>TASK</li>
  <li>CORE</li>
  <li>ROUTER</li>
     * @param boolean $GraceDownFlag The graceful scale-in feature. Valid values:
  <li>`true`: Enabled.</li>
  <li>`false`: Disabled.</li>
     * @param integer $GraceDownTime The graceful scale-in wait time in seconds. Value range: 60–1800.
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
