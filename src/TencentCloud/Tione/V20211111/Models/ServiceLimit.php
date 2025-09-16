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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configurations related to throttling and speed limit of services.
 *
 * @method boolean getEnableInstanceRpsLimit() Obtain Whether to enable throttling and speed limit at the instance level. Valid values: true and false. If the value is true, InstanceRpsLimit is required. If the value is false, InstanceRpsLimit does not take effect.
 * @method void setEnableInstanceRpsLimit(boolean $EnableInstanceRpsLimit) Set Whether to enable throttling and speed limit at the instance level. Valid values: true and false. If the value is true, InstanceRpsLimit is required. If the value is false, InstanceRpsLimit does not take effect.
 * @method integer getInstanceRpsLimit() Obtain Speed limit for the requests per second (RPS) of each service instance. 0 indicates no throttling.
 * @method void setInstanceRpsLimit(integer $InstanceRpsLimit) Set Speed limit for the requests per second (RPS) of each service instance. 0 indicates no throttling.
 * @method boolean getEnableInstanceReqLimit() Obtain Whether to enable the maximum concurrency quantity limit for a single instance. Valid values: true and false. If the value is true, InstanceReqLimit is required. If the value is false, InstanceReqLimit does not take effect.
 * @method void setEnableInstanceReqLimit(boolean $EnableInstanceReqLimit) Set Whether to enable the maximum concurrency quantity limit for a single instance. Valid values: true and false. If the value is true, InstanceReqLimit is required. If the value is false, InstanceReqLimit does not take effect.
 * @method integer getInstanceReqLimit() Obtain Maximum concurrency for each service instance.
 * @method void setInstanceReqLimit(integer $InstanceReqLimit) Set Maximum concurrency for each service instance.
 */
class ServiceLimit extends AbstractModel
{
    /**
     * @var boolean Whether to enable throttling and speed limit at the instance level. Valid values: true and false. If the value is true, InstanceRpsLimit is required. If the value is false, InstanceRpsLimit does not take effect.
     */
    public $EnableInstanceRpsLimit;

    /**
     * @var integer Speed limit for the requests per second (RPS) of each service instance. 0 indicates no throttling.
     */
    public $InstanceRpsLimit;

    /**
     * @var boolean Whether to enable the maximum concurrency quantity limit for a single instance. Valid values: true and false. If the value is true, InstanceReqLimit is required. If the value is false, InstanceReqLimit does not take effect.
     */
    public $EnableInstanceReqLimit;

    /**
     * @var integer Maximum concurrency for each service instance.
     */
    public $InstanceReqLimit;

    /**
     * @param boolean $EnableInstanceRpsLimit Whether to enable throttling and speed limit at the instance level. Valid values: true and false. If the value is true, InstanceRpsLimit is required. If the value is false, InstanceRpsLimit does not take effect.
     * @param integer $InstanceRpsLimit Speed limit for the requests per second (RPS) of each service instance. 0 indicates no throttling.
     * @param boolean $EnableInstanceReqLimit Whether to enable the maximum concurrency quantity limit for a single instance. Valid values: true and false. If the value is true, InstanceReqLimit is required. If the value is false, InstanceReqLimit does not take effect.
     * @param integer $InstanceReqLimit Maximum concurrency for each service instance.
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
        if (array_key_exists("EnableInstanceRpsLimit",$param) and $param["EnableInstanceRpsLimit"] !== null) {
            $this->EnableInstanceRpsLimit = $param["EnableInstanceRpsLimit"];
        }

        if (array_key_exists("InstanceRpsLimit",$param) and $param["InstanceRpsLimit"] !== null) {
            $this->InstanceRpsLimit = $param["InstanceRpsLimit"];
        }

        if (array_key_exists("EnableInstanceReqLimit",$param) and $param["EnableInstanceReqLimit"] !== null) {
            $this->EnableInstanceReqLimit = $param["EnableInstanceReqLimit"];
        }

        if (array_key_exists("InstanceReqLimit",$param) and $param["InstanceReqLimit"] !== null) {
            $this->InstanceReqLimit = $param["InstanceReqLimit"];
        }
    }
}
