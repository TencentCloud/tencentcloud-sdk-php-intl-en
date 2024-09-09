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
 * CreateStreamLinkFlow request structure.
 *
 * @method string getFlowName() Obtain Flow name
 * @method void setFlowName(string $FlowName) Set Flow name
 * @method integer getMaxBandwidth() Obtain Maximum bandwidth in bps. Valid values: `10000000`, `20000000`, `50000000`
 * @method void setMaxBandwidth(integer $MaxBandwidth) Set Maximum bandwidth in bps. Valid values: `10000000`, `20000000`, `50000000`
 * @method array getInputGroup() Obtain Flow input group
 * @method void setInputGroup(array $InputGroup) Set Flow input group
 * @method string getEventId() Obtain The media transmission event ID associated with the Flow. Each flow can only be associated with one event.
 * @method void setEventId(string $EventId) Set The media transmission event ID associated with the Flow. Each flow can only be associated with one event.
 */
class CreateStreamLinkFlowRequest extends AbstractModel
{
    /**
     * @var string Flow name
     */
    public $FlowName;

    /**
     * @var integer Maximum bandwidth in bps. Valid values: `10000000`, `20000000`, `50000000`
     */
    public $MaxBandwidth;

    /**
     * @var array Flow input group
     */
    public $InputGroup;

    /**
     * @var string The media transmission event ID associated with the Flow. Each flow can only be associated with one event.
     */
    public $EventId;

    /**
     * @param string $FlowName Flow name
     * @param integer $MaxBandwidth Maximum bandwidth in bps. Valid values: `10000000`, `20000000`, `50000000`
     * @param array $InputGroup Flow input group
     * @param string $EventId The media transmission event ID associated with the Flow. Each flow can only be associated with one event.
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
    }
}
