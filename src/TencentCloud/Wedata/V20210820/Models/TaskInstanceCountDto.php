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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task Instance Status Statistics
 *
 * @method integer getSuccess() Obtain Number of Successful Instances
 * @method void setSuccess(integer $Success) Set Number of Successful Instances
 * @method integer getRunning() Obtain Number of Instances in Execution
 * @method void setRunning(integer $Running) Set Number of Instances in Execution
 * @method integer getWaiting() Obtain Number of Instances Waiting
 * @method void setWaiting(integer $Waiting) Set Number of Instances Waiting
 * @method integer getDepend() Obtain Number of Instances Waiting for Upstream
 * @method void setDepend(integer $Depend) Set Number of Instances Waiting for Upstream
 * @method integer getFailed() Obtain Failed Instance Count
 * @method void setFailed(integer $Failed) Set Failed Instance Count
 * @method integer getStopped() Obtain Permanently Terminated Instance Count
 * @method void setStopped(integer $Stopped) Set Permanently Terminated Instance Count
 */
class TaskInstanceCountDto extends AbstractModel
{
    /**
     * @var integer Number of Successful Instances
     */
    public $Success;

    /**
     * @var integer Number of Instances in Execution
     */
    public $Running;

    /**
     * @var integer Number of Instances Waiting
     */
    public $Waiting;

    /**
     * @var integer Number of Instances Waiting for Upstream
     */
    public $Depend;

    /**
     * @var integer Failed Instance Count
     */
    public $Failed;

    /**
     * @var integer Permanently Terminated Instance Count
     */
    public $Stopped;

    /**
     * @param integer $Success Number of Successful Instances
     * @param integer $Running Number of Instances in Execution
     * @param integer $Waiting Number of Instances Waiting
     * @param integer $Depend Number of Instances Waiting for Upstream
     * @param integer $Failed Failed Instance Count
     * @param integer $Stopped Permanently Terminated Instance Count
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
        if (array_key_exists("Success",$param) and $param["Success"] !== null) {
            $this->Success = $param["Success"];
        }

        if (array_key_exists("Running",$param) and $param["Running"] !== null) {
            $this->Running = $param["Running"];
        }

        if (array_key_exists("Waiting",$param) and $param["Waiting"] !== null) {
            $this->Waiting = $param["Waiting"];
        }

        if (array_key_exists("Depend",$param) and $param["Depend"] !== null) {
            $this->Depend = $param["Depend"];
        }

        if (array_key_exists("Failed",$param) and $param["Failed"] !== null) {
            $this->Failed = $param["Failed"];
        }

        if (array_key_exists("Stopped",$param) and $param["Stopped"] !== null) {
            $this->Stopped = $param["Stopped"];
        }
    }
}
