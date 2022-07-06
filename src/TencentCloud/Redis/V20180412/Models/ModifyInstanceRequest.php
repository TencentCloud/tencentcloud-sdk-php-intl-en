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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstance request structure.
 *
 * @method string getOperation() Obtain Instance modification type. rename: rename an instance; modifyProject: modify the project of an instance; modifyAutoRenew: modify the auto-renewal flag of an instance.
 * @method void setOperation(string $Operation) Set Instance modification type. rename: rename an instance; modifyProject: modify the project of an instance; modifyAutoRenew: modify the auto-renewal flag of an instance.
 * @method array getInstanceIds() Obtain Instance ID
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID
 * @method array getInstanceNames() Obtain New name of the instance
 * @method void setInstanceNames(array $InstanceNames) Set New name of the instance
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method array getAutoRenews() Obtain Auto-renewal flag. 0: default status (manual renewal); 1: auto-renewal enabled; 2: auto-renewal disabled
 * @method void setAutoRenews(array $AutoRenews) Set Auto-renewal flag. 0: default status (manual renewal); 1: auto-renewal enabled; 2: auto-renewal disabled
 * @method string getInstanceId() Obtain Disused
 * @method void setInstanceId(string $InstanceId) Set Disused
 * @method string getInstanceName() Obtain Disused
 * @method void setInstanceName(string $InstanceName) Set Disused
 * @method integer getAutoRenew() Obtain Disused
 * @method void setAutoRenew(integer $AutoRenew) Set Disused
 */
class ModifyInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance modification type. rename: rename an instance; modifyProject: modify the project of an instance; modifyAutoRenew: modify the auto-renewal flag of an instance.
     */
    public $Operation;

    /**
     * @var array Instance ID
     */
    public $InstanceIds;

    /**
     * @var array New name of the instance
     */
    public $InstanceNames;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var array Auto-renewal flag. 0: default status (manual renewal); 1: auto-renewal enabled; 2: auto-renewal disabled
     */
    public $AutoRenews;

    /**
     * @var string Disused
     */
    public $InstanceId;

    /**
     * @var string Disused
     */
    public $InstanceName;

    /**
     * @var integer Disused
     */
    public $AutoRenew;

    /**
     * @param string $Operation Instance modification type. rename: rename an instance; modifyProject: modify the project of an instance; modifyAutoRenew: modify the auto-renewal flag of an instance.
     * @param array $InstanceIds Instance ID
     * @param array $InstanceNames New name of the instance
     * @param integer $ProjectId Project ID
     * @param array $AutoRenews Auto-renewal flag. 0: default status (manual renewal); 1: auto-renewal enabled; 2: auto-renewal disabled
     * @param string $InstanceId Disused
     * @param string $InstanceName Disused
     * @param integer $AutoRenew Disused
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
        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceNames",$param) and $param["InstanceNames"] !== null) {
            $this->InstanceNames = $param["InstanceNames"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AutoRenews",$param) and $param["AutoRenews"] !== null) {
            $this->AutoRenews = $param["AutoRenews"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }
    }
}
