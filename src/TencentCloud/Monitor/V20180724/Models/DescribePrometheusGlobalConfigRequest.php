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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrometheusGlobalConfig request structure.
 *
 * @method string getInstanceId() Obtain Instance-level scrape configuration
 * @method void setInstanceId(string $InstanceId) Set Instance-level scrape configuration
 * @method boolean getDisableStatistics() Obtain Whether to disable statistics
 * @method void setDisableStatistics(boolean $DisableStatistics) Set Whether to disable statistics
 */
class DescribePrometheusGlobalConfigRequest extends AbstractModel
{
    /**
     * @var string Instance-level scrape configuration
     */
    public $InstanceId;

    /**
     * @var boolean Whether to disable statistics
     */
    public $DisableStatistics;

    /**
     * @param string $InstanceId Instance-level scrape configuration
     * @param boolean $DisableStatistics Whether to disable statistics
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

        if (array_key_exists("DisableStatistics",$param) and $param["DisableStatistics"] !== null) {
            $this->DisableStatistics = $param["DisableStatistics"];
        }
    }
}
