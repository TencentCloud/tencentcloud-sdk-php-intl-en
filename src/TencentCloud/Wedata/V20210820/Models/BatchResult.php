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
 * Batch Operation Result
 *
 * @method integer getRunning() Obtain Number of Tasks Running
 * @method void setRunning(integer $Running) Set Number of Tasks Running
 * @method integer getSuccess() Obtain Number of Tasks Executed Successfully
 * @method void setSuccess(integer $Success) Set Number of Tasks Executed Successfully
 * @method integer getFailed() Obtain Number of Tasks Executed Failed
 * @method void setFailed(integer $Failed) Set Number of Tasks Executed Failed
 * @method integer getTotal() Obtain Total Tasks
 * @method void setTotal(integer $Total) Set Total Tasks
 */
class BatchResult extends AbstractModel
{
    /**
     * @var integer Number of Tasks Running
     */
    public $Running;

    /**
     * @var integer Number of Tasks Executed Successfully
     */
    public $Success;

    /**
     * @var integer Number of Tasks Executed Failed
     */
    public $Failed;

    /**
     * @var integer Total Tasks
     */
    public $Total;

    /**
     * @param integer $Running Number of Tasks Running
     * @param integer $Success Number of Tasks Executed Successfully
     * @param integer $Failed Number of Tasks Executed Failed
     * @param integer $Total Total Tasks
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
        if (array_key_exists("Running",$param) and $param["Running"] !== null) {
            $this->Running = $param["Running"];
        }

        if (array_key_exists("Success",$param) and $param["Success"] !== null) {
            $this->Success = $param["Success"];
        }

        if (array_key_exists("Failed",$param) and $param["Failed"] !== null) {
            $this->Failed = $param["Failed"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
