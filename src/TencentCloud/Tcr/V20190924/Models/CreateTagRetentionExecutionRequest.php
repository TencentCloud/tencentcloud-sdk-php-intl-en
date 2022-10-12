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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTagRetentionExecution request structure.
 *
 * @method string getRegistryId() Obtain Primary instance ID
 * @method void setRegistryId(string $RegistryId) Set Primary instance ID
 * @method integer getRetentionId() Obtain Tag retention rule ID
 * @method void setRetentionId(integer $RetentionId) Set Tag retention rule ID
 * @method boolean getDryRun() Obtain Whether the execution is simulated. Default value: false (not simulated)
 * @method void setDryRun(boolean $DryRun) Set Whether the execution is simulated. Default value: false (not simulated)
 */
class CreateTagRetentionExecutionRequest extends AbstractModel
{
    /**
     * @var string Primary instance ID
     */
    public $RegistryId;

    /**
     * @var integer Tag retention rule ID
     */
    public $RetentionId;

    /**
     * @var boolean Whether the execution is simulated. Default value: false (not simulated)
     */
    public $DryRun;

    /**
     * @param string $RegistryId Primary instance ID
     * @param integer $RetentionId Tag retention rule ID
     * @param boolean $DryRun Whether the execution is simulated. Default value: false (not simulated)
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("RetentionId",$param) and $param["RetentionId"] !== null) {
            $this->RetentionId = $param["RetentionId"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
