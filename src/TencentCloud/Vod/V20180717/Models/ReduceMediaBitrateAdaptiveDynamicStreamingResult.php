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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getStatus() Obtain 
 * @method void setStatus(string $Status) Set 
 * @method string getErrCodeExt() Obtain 
 * @method void setErrCodeExt(string $ErrCodeExt) Set 
 * @method string getMessage() Obtain 
 * @method void setMessage(string $Message) Set 
 * @method AdaptiveDynamicStreamingTaskInput getInput() Obtain 
 * @method void setInput(AdaptiveDynamicStreamingTaskInput $Input) Set 
 * @method AdaptiveDynamicStreamingInfoItem getOutput() Obtain 
 * @method void setOutput(AdaptiveDynamicStreamingInfoItem $Output) Set 
 */
class ReduceMediaBitrateAdaptiveDynamicStreamingResult extends AbstractModel
{
    /**
     * @var string 
     */
    public $Status;

    /**
     * @var string 
     */
    public $ErrCodeExt;

    /**
     * @var string 
     */
    public $Message;

    /**
     * @var AdaptiveDynamicStreamingTaskInput 
     */
    public $Input;

    /**
     * @var AdaptiveDynamicStreamingInfoItem 
     */
    public $Output;

    /**
     * @param string $Status 
     * @param string $ErrCodeExt 
     * @param string $Message 
     * @param AdaptiveDynamicStreamingTaskInput $Input 
     * @param AdaptiveDynamicStreamingInfoItem $Output 
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCodeExt",$param) and $param["ErrCodeExt"] !== null) {
            $this->ErrCodeExt = $param["ErrCodeExt"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new AdaptiveDynamicStreamingTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new AdaptiveDynamicStreamingInfoItem();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
