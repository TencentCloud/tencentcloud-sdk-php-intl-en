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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Channel alarm information.
 *
 * @method array getPipeline0() Obtain Alarm details of pipeline 0 under this channel.
 * @method void setPipeline0(array $Pipeline0) Set Alarm details of pipeline 0 under this channel.
 * @method array getPipeline1() Obtain Alarm details of pipeline 1 under this channel.
 * @method void setPipeline1(array $Pipeline1) Set Alarm details of pipeline 1 under this channel.
 * @method integer getPipelineAActiveAlerts() Obtain Pipeline 0 total active alarm count
 * @method void setPipelineAActiveAlerts(integer $PipelineAActiveAlerts) Set Pipeline 0 total active alarm count
 * @method integer getPipelineBActiveAlerts() Obtain Pipeline 1 total active alarm count
 * @method void setPipelineBActiveAlerts(integer $PipelineBActiveAlerts) Set Pipeline 1 total active alarm count
 */
class ChannelAlertInfos extends AbstractModel
{
    /**
     * @var array Alarm details of pipeline 0 under this channel.
     */
    public $Pipeline0;

    /**
     * @var array Alarm details of pipeline 1 under this channel.
     */
    public $Pipeline1;

    /**
     * @var integer Pipeline 0 total active alarm count
     */
    public $PipelineAActiveAlerts;

    /**
     * @var integer Pipeline 1 total active alarm count
     */
    public $PipelineBActiveAlerts;

    /**
     * @param array $Pipeline0 Alarm details of pipeline 0 under this channel.
     * @param array $Pipeline1 Alarm details of pipeline 1 under this channel.
     * @param integer $PipelineAActiveAlerts Pipeline 0 total active alarm count
     * @param integer $PipelineBActiveAlerts Pipeline 1 total active alarm count
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
        if (array_key_exists("Pipeline0",$param) and $param["Pipeline0"] !== null) {
            $this->Pipeline0 = [];
            foreach ($param["Pipeline0"] as $key => $value){
                $obj = new ChannelPipelineAlerts();
                $obj->deserialize($value);
                array_push($this->Pipeline0, $obj);
            }
        }

        if (array_key_exists("Pipeline1",$param) and $param["Pipeline1"] !== null) {
            $this->Pipeline1 = [];
            foreach ($param["Pipeline1"] as $key => $value){
                $obj = new ChannelPipelineAlerts();
                $obj->deserialize($value);
                array_push($this->Pipeline1, $obj);
            }
        }

        if (array_key_exists("PipelineAActiveAlerts",$param) and $param["PipelineAActiveAlerts"] !== null) {
            $this->PipelineAActiveAlerts = $param["PipelineAActiveAlerts"];
        }

        if (array_key_exists("PipelineBActiveAlerts",$param) and $param["PipelineBActiveAlerts"] !== null) {
            $this->PipelineBActiveAlerts = $param["PipelineBActiveAlerts"];
        }
    }
}
