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
 * Instance configuration entity
 *
 * @method boolean getAutoCreateTopicsEnable() Obtain Whether to create topics automatically
 * @method void setAutoCreateTopicsEnable(boolean $AutoCreateTopicsEnable) Set Whether to create topics automatically
 * @method integer getDefaultNumPartitions() Obtain Number of partitions
 * @method void setDefaultNumPartitions(integer $DefaultNumPartitions) Set Number of partitions
 * @method integer getDefaultReplicationFactor() Obtain Default replication factor
 * @method void setDefaultReplicationFactor(integer $DefaultReplicationFactor) Set Default replication factor
 */
class InstanceConfigDO extends AbstractModel
{
    /**
     * @var boolean Whether to create topics automatically
     */
    public $AutoCreateTopicsEnable;

    /**
     * @var integer Number of partitions
     */
    public $DefaultNumPartitions;

    /**
     * @var integer Default replication factor
     */
    public $DefaultReplicationFactor;

    /**
     * @param boolean $AutoCreateTopicsEnable Whether to create topics automatically
     * @param integer $DefaultNumPartitions Number of partitions
     * @param integer $DefaultReplicationFactor Default replication factor
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
        if (array_key_exists("AutoCreateTopicsEnable",$param) and $param["AutoCreateTopicsEnable"] !== null) {
            $this->AutoCreateTopicsEnable = $param["AutoCreateTopicsEnable"];
        }

        if (array_key_exists("DefaultNumPartitions",$param) and $param["DefaultNumPartitions"] !== null) {
            $this->DefaultNumPartitions = $param["DefaultNumPartitions"];
        }

        if (array_key_exists("DefaultReplicationFactor",$param) and $param["DefaultReplicationFactor"] !== null) {
            $this->DefaultReplicationFactor = $param["DefaultReplicationFactor"];
        }
    }
}
