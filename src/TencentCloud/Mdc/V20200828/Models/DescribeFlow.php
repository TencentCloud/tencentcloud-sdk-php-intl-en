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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration information of the queried flow.
 *
 * @method string getFlowId() Obtain Flow ID.
 * @method void setFlowId(string $FlowId) Set Flow ID.
 * @method string getFlowName() Obtain Flow name.
 * @method void setFlowName(string $FlowName) Set Flow name.
 * @method string getState() Obtain Flow status. Valid values: `IDLE`, `RUNNING`
 * @method void setState(string $State) Set Flow status. Valid values: `IDLE`, `RUNNING`
 * @method integer getMaxBandwidth() Obtain Maximum bandwidth value.
 * @method void setMaxBandwidth(integer $MaxBandwidth) Set Maximum bandwidth value.
 * @method array getInputGroup() Obtain Input group.
 * @method void setInputGroup(array $InputGroup) Set Input group.
 * @method array getOutputGroup() Obtain Output group.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOutputGroup(array $OutputGroup) Set Output group.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getEventId() Obtain EventId of the StreamLink event associated with this Flow.
 * @method void setEventId(string $EventId) Set EventId of the StreamLink event associated with this Flow.
 */
class DescribeFlow extends AbstractModel
{
    /**
     * @var string Flow ID.
     */
    public $FlowId;

    /**
     * @var string Flow name.
     */
    public $FlowName;

    /**
     * @var string Flow status. Valid values: `IDLE`, `RUNNING`
     */
    public $State;

    /**
     * @var integer Maximum bandwidth value.
     */
    public $MaxBandwidth;

    /**
     * @var array Input group.
     */
    public $InputGroup;

    /**
     * @var array Output group.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OutputGroup;

    /**
     * @var string EventId of the StreamLink event associated with this Flow.
     */
    public $EventId;

    /**
     * @param string $FlowId Flow ID.
     * @param string $FlowName Flow name.
     * @param string $State Flow status. Valid values: `IDLE`, `RUNNING`
     * @param integer $MaxBandwidth Maximum bandwidth value.
     * @param array $InputGroup Input group.
     * @param array $OutputGroup Output group.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $EventId EventId of the StreamLink event associated with this Flow.
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("MaxBandwidth",$param) and $param["MaxBandwidth"] !== null) {
            $this->MaxBandwidth = $param["MaxBandwidth"];
        }

        if (array_key_exists("InputGroup",$param) and $param["InputGroup"] !== null) {
            $this->InputGroup = [];
            foreach ($param["InputGroup"] as $key => $value){
                $obj = new DescribeInput();
                $obj->deserialize($value);
                array_push($this->InputGroup, $obj);
            }
        }

        if (array_key_exists("OutputGroup",$param) and $param["OutputGroup"] !== null) {
            $this->OutputGroup = [];
            foreach ($param["OutputGroup"] as $key => $value){
                $obj = new DescribeOutput();
                $obj->deserialize($value);
                array_push($this->OutputGroup, $obj);
            }
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }
    }
}
