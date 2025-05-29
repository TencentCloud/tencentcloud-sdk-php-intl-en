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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Knowledge summary application configuration.
 *
 * @method AppModel getModel() Obtain Model configuration.
 * @method void setModel(AppModel $Model) Set Model configuration.
 * @method SummaryOutput getOutput() Obtain Knowledge summary output configuration.
 * @method void setOutput(SummaryOutput $Output) Set Knowledge summary output configuration.
 * @method string getGreeting() Obtain Welcome words, within 200 characters.
 * @method void setGreeting(string $Greeting) Set Welcome words, within 200 characters.
 */
class SummaryConfig extends AbstractModel
{
    /**
     * @var AppModel Model configuration.
     */
    public $Model;

    /**
     * @var SummaryOutput Knowledge summary output configuration.
     */
    public $Output;

    /**
     * @var string Welcome words, within 200 characters.
     */
    public $Greeting;

    /**
     * @param AppModel $Model Model configuration.
     * @param SummaryOutput $Output Knowledge summary output configuration.
     * @param string $Greeting Welcome words, within 200 characters.
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = new AppModel();
            $this->Model->deserialize($param["Model"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new SummaryOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("Greeting",$param) and $param["Greeting"] !== null) {
            $this->Greeting = $param["Greeting"];
        }
    }
}
