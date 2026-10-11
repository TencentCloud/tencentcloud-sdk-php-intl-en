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
 * ModifyResource request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method integer getPayMode() Obtain Billing type.
 * @method void setPayMode(integer $PayMode) Set Billing type.
 * @method integer getNewCpu() Obtain Changed CPU.
 * @method void setNewCpu(integer $NewCpu) Set Changed CPU.
 * @method integer getNewMem() Obtain Changed memory.
 * @method void setNewMem(integer $NewMem) Set Changed memory.
 * @method string getClientToken() Obtain Token
 * @method void setClientToken(string $ClientToken) Set Token
 * @method string getInstanceType() Obtain Changed machine specifications.
 * @method void setInstanceType(string $InstanceType) Set Changed machine specifications.
 * @method array getResourceIdList() Obtain Node ID list.
 * @method void setResourceIdList(array $ResourceIdList) Set Node ID list.
 */
class ModifyResourceRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var integer Billing type.
     */
    public $PayMode;

    /**
     * @var integer Changed CPU.
     */
    public $NewCpu;

    /**
     * @var integer Changed memory.
     */
    public $NewMem;

    /**
     * @var string Token
     */
    public $ClientToken;

    /**
     * @var string Changed machine specifications.
     */
    public $InstanceType;

    /**
     * @var array Node ID list.
     */
    public $ResourceIdList;

    /**
     * @param string $InstanceId Instance ID.
     * @param integer $PayMode Billing type.
     * @param integer $NewCpu Changed CPU.
     * @param integer $NewMem Changed memory.
     * @param string $ClientToken Token
     * @param string $InstanceType Changed machine specifications.
     * @param array $ResourceIdList Node ID list.
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

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("NewCpu",$param) and $param["NewCpu"] !== null) {
            $this->NewCpu = $param["NewCpu"];
        }

        if (array_key_exists("NewMem",$param) and $param["NewMem"] !== null) {
            $this->NewMem = $param["NewMem"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ResourceIdList",$param) and $param["ResourceIdList"] !== null) {
            $this->ResourceIdList = $param["ResourceIdList"];
        }
    }
}
