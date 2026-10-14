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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query the Flow configuration information.
 *
 * @method string getFlowId() Obtain Stream Id.
 * @method void setFlowId(string $FlowId) Set Stream Id.
 * @method string getFlowName() Obtain Stream name.
 * @method void setFlowName(string $FlowName) Set Stream name.
 * @method string getState() Obtain Stream status. Valid values: IDLE, RUNNING.
 * @method void setState(string $State) Set Stream status. Valid values: IDLE, RUNNING.
 * @method integer getMaxBandwidth() Obtain Maximum bandwidth.
 * @method void setMaxBandwidth(integer $MaxBandwidth) Set Maximum bandwidth.
 * @method array getInputGroup() Obtain Input group.
 * @method void setInputGroup(array $InputGroup) Set Input group.
 * @method array getOutputGroup() Obtain Output group.
 * @method void setOutputGroup(array $OutputGroup) Set Output group.
 * @method string getEventId() Obtain EventId of the media transmission event associated with this Flow.
 * @method void setEventId(string $EventId) Set EventId of the media transmission event associated with this Flow.
 * @method string getCreateTime() Obtain Creation time of the Flow in UTC format.
 * @method void setCreateTime(string $CreateTime) Set Creation time of the Flow in UTC format.
 * @method array getAllowedInputProtocols() Obtain Input protocols that can be created for this Flow.
 * @method void setAllowedInputProtocols(array $AllowedInputProtocols) Set Input protocols that can be created for this Flow.
 * @method array getAllowedOutputProtocols() Obtain Output protocols allowed to be created by this Flow
 * @method void setAllowedOutputProtocols(array $AllowedOutputProtocols) Set Output protocols allowed to be created by this Flow
 */
class DescribeFlow extends AbstractModel
{
    /**
     * @var string Stream Id.
     */
    public $FlowId;

    /**
     * @var string Stream name.
     */
    public $FlowName;

    /**
     * @var string Stream status. Valid values: IDLE, RUNNING.
     */
    public $State;

    /**
     * @var integer Maximum bandwidth.
     */
    public $MaxBandwidth;

    /**
     * @var array Input group.
     */
    public $InputGroup;

    /**
     * @var array Output group.
     */
    public $OutputGroup;

    /**
     * @var string EventId of the media transmission event associated with this Flow.
     */
    public $EventId;

    /**
     * @var string Creation time of the Flow in UTC format.
     */
    public $CreateTime;

    /**
     * @var array Input protocols that can be created for this Flow.
     */
    public $AllowedInputProtocols;

    /**
     * @var array Output protocols allowed to be created by this Flow
     */
    public $AllowedOutputProtocols;

    /**
     * @param string $FlowId Stream Id.
     * @param string $FlowName Stream name.
     * @param string $State Stream status. Valid values: IDLE, RUNNING.
     * @param integer $MaxBandwidth Maximum bandwidth.
     * @param array $InputGroup Input group.
     * @param array $OutputGroup Output group.
     * @param string $EventId EventId of the media transmission event associated with this Flow.
     * @param string $CreateTime Creation time of the Flow in UTC format.
     * @param array $AllowedInputProtocols Input protocols that can be created for this Flow.
     * @param array $AllowedOutputProtocols Output protocols allowed to be created by this Flow
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AllowedInputProtocols",$param) and $param["AllowedInputProtocols"] !== null) {
            $this->AllowedInputProtocols = $param["AllowedInputProtocols"];
        }

        if (array_key_exists("AllowedOutputProtocols",$param) and $param["AllowedOutputProtocols"] !== null) {
            $this->AllowedOutputProtocols = $param["AllowedOutputProtocols"];
        }
    }
}
