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
 * CreateStreamLinkFlow request structure.
 *
 * @method string getFlowName() Obtain Stream name.
 * @method void setFlowName(string $FlowName) Set Stream name.
 * @method integer getMaxBandwidth() Obtain Maximum bandwidth in bps. Options: [10000000, 20000000].
 * @method void setMaxBandwidth(integer $MaxBandwidth) Set Maximum bandwidth in bps. Options: [10000000, 20000000].
 * @method array getInputGroup() Obtain Input group of a stream.
 * @method void setInputGroup(array $InputGroup) Set Input group of a stream.
 * @method string getEventId() Obtain Media transmission Event ID associated with the Flow. Each Flow can only be associated with one Event.
 * @method void setEventId(string $EventId) Set Media transmission Event ID associated with the Flow. Each Flow can only be associated with one Event.
 * @method array getOutputGroup() Obtain Output group of the stream.
 * @method void setOutputGroup(array $OutputGroup) Set Output group of the stream.
 */
class CreateStreamLinkFlowRequest extends AbstractModel
{
    /**
     * @var string Stream name.
     */
    public $FlowName;

    /**
     * @var integer Maximum bandwidth in bps. Options: [10000000, 20000000].
     */
    public $MaxBandwidth;

    /**
     * @var array Input group of a stream.
     */
    public $InputGroup;

    /**
     * @var string Media transmission Event ID associated with the Flow. Each Flow can only be associated with one Event.
     */
    public $EventId;

    /**
     * @var array Output group of the stream.
     */
    public $OutputGroup;

    /**
     * @param string $FlowName Stream name.
     * @param integer $MaxBandwidth Maximum bandwidth in bps. Options: [10000000, 20000000].
     * @param array $InputGroup Input group of a stream.
     * @param string $EventId Media transmission Event ID associated with the Flow. Each Flow can only be associated with one Event.
     * @param array $OutputGroup Output group of the stream.
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
        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("MaxBandwidth",$param) and $param["MaxBandwidth"] !== null) {
            $this->MaxBandwidth = $param["MaxBandwidth"];
        }

        if (array_key_exists("InputGroup",$param) and $param["InputGroup"] !== null) {
            $this->InputGroup = [];
            foreach ($param["InputGroup"] as $key => $value){
                $obj = new CreateInput();
                $obj->deserialize($value);
                array_push($this->InputGroup, $obj);
            }
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("OutputGroup",$param) and $param["OutputGroup"] !== null) {
            $this->OutputGroup = [];
            foreach ($param["OutputGroup"] as $key => $value){
                $obj = new CreateOutputInfo();
                $obj->deserialize($value);
                array_push($this->OutputGroup, $obj);
            }
        }
    }
}
