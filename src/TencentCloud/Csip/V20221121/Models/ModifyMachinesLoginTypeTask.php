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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Batch task for modifying the host login method.
 *
 * @method integer getId() Obtain <p>Task ID.</p>
 * @method void setId(integer $Id) Set <p>Task ID.</p>
 * @method integer getStatus() Obtain <p>1-In progress, 2 completed</p>
 * @method void setStatus(integer $Status) Set <p>1-In progress, 2 completed</p>
 * @method integer getSuccessCount() Obtain <p>Successfully executed count.</p>
 * @method void setSuccessCount(integer $SuccessCount) Set <p>Successfully executed count.</p>
 * @method array getFailList() Obtain <p>Host list of failed execution</p>
 * @method void setFailList(array $FailList) Set <p>Host list of failed execution</p>
 * @method array getSuccessInstances() Obtain <p>List of instance IDs with successful modification.</p>
 * @method void setSuccessInstances(array $SuccessInstances) Set <p>List of instance IDs with successful modification.</p>
 * @method array getProgressingInstances() Obtain <p>List of instance IDs being modified</p>
 * @method void setProgressingInstances(array $ProgressingInstances) Set <p>List of instance IDs being modified</p>
 * @method integer getFailedHostCount() Obtain <p>Number of failed hosts</p>
 * @method void setFailedHostCount(integer $FailedHostCount) Set <p>Number of failed hosts</p>
 */
class ModifyMachinesLoginTypeTask extends AbstractModel
{
    /**
     * @var integer <p>Task ID.</p>
     */
    public $Id;

    /**
     * @var integer <p>1-In progress, 2 completed</p>
     */
    public $Status;

    /**
     * @var integer <p>Successfully executed count.</p>
     */
    public $SuccessCount;

    /**
     * @var array <p>Host list of failed execution</p>
     */
    public $FailList;

    /**
     * @var array <p>List of instance IDs with successful modification.</p>
     */
    public $SuccessInstances;

    /**
     * @var array <p>List of instance IDs being modified</p>
     */
    public $ProgressingInstances;

    /**
     * @var integer <p>Number of failed hosts</p>
     */
    public $FailedHostCount;

    /**
     * @param integer $Id <p>Task ID.</p>
     * @param integer $Status <p>1-In progress, 2 completed</p>
     * @param integer $SuccessCount <p>Successfully executed count.</p>
     * @param array $FailList <p>Host list of failed execution</p>
     * @param array $SuccessInstances <p>List of instance IDs with successful modification.</p>
     * @param array $ProgressingInstances <p>List of instance IDs being modified</p>
     * @param integer $FailedHostCount <p>Number of failed hosts</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailList",$param) and $param["FailList"] !== null) {
            $this->FailList = [];
            foreach ($param["FailList"] as $key => $value){
                $obj = new ModifyLoginTypeFailInfo();
                $obj->deserialize($value);
                array_push($this->FailList, $obj);
            }
        }

        if (array_key_exists("SuccessInstances",$param) and $param["SuccessInstances"] !== null) {
            $this->SuccessInstances = $param["SuccessInstances"];
        }

        if (array_key_exists("ProgressingInstances",$param) and $param["ProgressingInstances"] !== null) {
            $this->ProgressingInstances = $param["ProgressingInstances"];
        }

        if (array_key_exists("FailedHostCount",$param) and $param["FailedHostCount"] !== null) {
            $this->FailedHostCount = $param["FailedHostCount"];
        }
    }
}
