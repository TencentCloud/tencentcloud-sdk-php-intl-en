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
 * Configuration object for modifying instance attributes
 *
 * @method boolean getAutoCreateTopicEnable() Obtain Automatic creation. true: enabled, false: not enabled
 * @method void setAutoCreateTopicEnable(boolean $AutoCreateTopicEnable) Set Automatic creation. true: enabled, false: not enabled
 * @method integer getDefaultNumPartitions() Obtain Optional. If `auto.create.topic.enable` is set to `true` and this value is not set, 3 will be used by default
 * @method void setDefaultNumPartitions(integer $DefaultNumPartitions) Set Optional. If `auto.create.topic.enable` is set to `true` and this value is not set, 3 will be used by default
 * @method integer getDefaultReplicationFactor() Obtain If `auto.create.topic.enable` is set to `true` but this value is not set, 2 will be used by default
 * @method void setDefaultReplicationFactor(integer $DefaultReplicationFactor) Set If `auto.create.topic.enable` is set to `true` but this value is not set, 2 will be used by default
 */
class ModifyInstanceAttributesConfig extends AbstractModel
{
    /**
     * @var boolean Automatic creation. true: enabled, false: not enabled
     */
    public $AutoCreateTopicEnable;

    /**
     * @var integer Optional. If `auto.create.topic.enable` is set to `true` and this value is not set, 3 will be used by default
     */
    public $DefaultNumPartitions;

    /**
     * @var integer If `auto.create.topic.enable` is set to `true` but this value is not set, 2 will be used by default
     */
    public $DefaultReplicationFactor;

    /**
     * @param boolean $AutoCreateTopicEnable Automatic creation. true: enabled, false: not enabled
     * @param integer $DefaultNumPartitions Optional. If `auto.create.topic.enable` is set to `true` and this value is not set, 3 will be used by default
     * @param integer $DefaultReplicationFactor If `auto.create.topic.enable` is set to `true` but this value is not set, 2 will be used by default
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
        if (array_key_exists("AutoCreateTopicEnable",$param) and $param["AutoCreateTopicEnable"] !== null) {
            $this->AutoCreateTopicEnable = $param["AutoCreateTopicEnable"];
        }

        if (array_key_exists("DefaultNumPartitions",$param) and $param["DefaultNumPartitions"] !== null) {
            $this->DefaultNumPartitions = $param["DefaultNumPartitions"];
        }

        if (array_key_exists("DefaultReplicationFactor",$param) and $param["DefaultReplicationFactor"] !== null) {
            $this->DefaultReplicationFactor = $param["DefaultReplicationFactor"];
        }
    }
}
