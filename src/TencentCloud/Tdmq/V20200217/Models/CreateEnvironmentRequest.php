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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEnvironment request structure.
 *
 * @method string getEnvironmentId() Obtain Environment (namespace) name, which can contain up to 16 letters, digits, hyphens, and underscores.
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment (namespace) name, which can contain up to 16 letters, digits, hyphens, and underscores.
 * @method integer getMsgTTL() Obtain Retention period for unconsumed messages in seconds. Value range: 60s to 1,296,000s (or 15 days).
 * @method void setMsgTTL(integer $MsgTTL) Set Retention period for unconsumed messages in seconds. Value range: 60s to 1,296,000s (or 15 days).
 * @method string getRemark() Obtain Remarks (up to 128 characters).
 * @method void setRemark(string $Remark) Set Remarks (up to 128 characters).
 * @method string getClusterId() Obtain Pulsar cluster ID
 * @method void setClusterId(string $ClusterId) Set Pulsar cluster ID
 * @method RetentionPolicy getRetentionPolicy() Obtain Message retention policy
 * @method void setRetentionPolicy(RetentionPolicy $RetentionPolicy) Set Message retention policy
 * @method boolean getAutoSubscriptionCreation() Obtain Whether to enable "Auto-Create Subscription"
 * @method void setAutoSubscriptionCreation(boolean $AutoSubscriptionCreation) Set Whether to enable "Auto-Create Subscription"
 */
class CreateEnvironmentRequest extends AbstractModel
{
    /**
     * @var string Environment (namespace) name, which can contain up to 16 letters, digits, hyphens, and underscores.
     */
    public $EnvironmentId;

    /**
     * @var integer Retention period for unconsumed messages in seconds. Value range: 60s to 1,296,000s (or 15 days).
     */
    public $MsgTTL;

    /**
     * @var string Remarks (up to 128 characters).
     */
    public $Remark;

    /**
     * @var string Pulsar cluster ID
     */
    public $ClusterId;

    /**
     * @var RetentionPolicy Message retention policy
     */
    public $RetentionPolicy;

    /**
     * @var boolean Whether to enable "Auto-Create Subscription"
     */
    public $AutoSubscriptionCreation;

    /**
     * @param string $EnvironmentId Environment (namespace) name, which can contain up to 16 letters, digits, hyphens, and underscores.
     * @param integer $MsgTTL Retention period for unconsumed messages in seconds. Value range: 60s to 1,296,000s (or 15 days).
     * @param string $Remark Remarks (up to 128 characters).
     * @param string $ClusterId Pulsar cluster ID
     * @param RetentionPolicy $RetentionPolicy Message retention policy
     * @param boolean $AutoSubscriptionCreation Whether to enable "Auto-Create Subscription"
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("MsgTTL",$param) and $param["MsgTTL"] !== null) {
            $this->MsgTTL = $param["MsgTTL"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("RetentionPolicy",$param) and $param["RetentionPolicy"] !== null) {
            $this->RetentionPolicy = new RetentionPolicy();
            $this->RetentionPolicy->deserialize($param["RetentionPolicy"]);
        }

        if (array_key_exists("AutoSubscriptionCreation",$param) and $param["AutoSubscriptionCreation"] !== null) {
            $this->AutoSubscriptionCreation = $param["AutoSubscriptionCreation"];
        }
    }
}
