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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceAttributes request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getMsgRetentionTime() Obtain Maximum retention period in minutes for instance log, which can be up to 30 days. 0 indicates not to enable the log retention period policy
 * @method void setMsgRetentionTime(integer $MsgRetentionTime) Set Maximum retention period in minutes for instance log, which can be up to 30 days. 0 indicates not to enable the log retention period policy
 * @method string getInstanceName() Obtain Instance name string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`)
 * @method void setInstanceName(string $InstanceName) Set Instance name string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`)
 * @method ModifyInstanceAttributesConfig getConfig() Obtain Instance configuration
 * @method void setConfig(ModifyInstanceAttributesConfig $Config) Set Instance configuration
 */
class ModifyInstanceAttributesRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer Maximum retention period in minutes for instance log, which can be up to 30 days. 0 indicates not to enable the log retention period policy
     */
    public $MsgRetentionTime;

    /**
     * @var string Instance name string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`)
     */
    public $InstanceName;

    /**
     * @var ModifyInstanceAttributesConfig Instance configuration
     */
    public $Config;

    /**
     * @param string $InstanceId Instance ID
     * @param integer $MsgRetentionTime Maximum retention period in minutes for instance log, which can be up to 30 days. 0 indicates not to enable the log retention period policy
     * @param string $InstanceName Instance name string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`)
     * @param ModifyInstanceAttributesConfig $Config Instance configuration
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

        if (array_key_exists("MsgRetentionTime",$param) and $param["MsgRetentionTime"] !== null) {
            $this->MsgRetentionTime = $param["MsgRetentionTime"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new ModifyInstanceAttributesConfig();
            $this->Config->deserialize($param["Config"]);
        }
    }
}
