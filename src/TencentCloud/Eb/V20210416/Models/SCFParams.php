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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SCF parameter
 *
 * @method integer getBatchTimeout() Obtain Maximum waiting time for batch delivery
 * @method void setBatchTimeout(integer $BatchTimeout) Set Maximum waiting time for batch delivery
 * @method integer getBatchEventCount() Obtain Maximum number of events in batch delivery
 * @method void setBatchEventCount(integer $BatchEventCount) Set Maximum number of events in batch delivery
 * @method boolean getEnableBatchDelivery() Obtain Enables batch delivery
 * @method void setEnableBatchDelivery(boolean $EnableBatchDelivery) Set Enables batch delivery
 */
class SCFParams extends AbstractModel
{
    /**
     * @var integer Maximum waiting time for batch delivery
     */
    public $BatchTimeout;

    /**
     * @var integer Maximum number of events in batch delivery
     */
    public $BatchEventCount;

    /**
     * @var boolean Enables batch delivery
     */
    public $EnableBatchDelivery;

    /**
     * @param integer $BatchTimeout Maximum waiting time for batch delivery
     * @param integer $BatchEventCount Maximum number of events in batch delivery
     * @param boolean $EnableBatchDelivery Enables batch delivery
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
        if (array_key_exists("BatchTimeout",$param) and $param["BatchTimeout"] !== null) {
            $this->BatchTimeout = $param["BatchTimeout"];
        }

        if (array_key_exists("BatchEventCount",$param) and $param["BatchEventCount"] !== null) {
            $this->BatchEventCount = $param["BatchEventCount"];
        }

        if (array_key_exists("EnableBatchDelivery",$param) and $param["EnableBatchDelivery"] !== null) {
            $this->EnableBatchDelivery = $param["EnableBatchDelivery"];
        }
    }
}
