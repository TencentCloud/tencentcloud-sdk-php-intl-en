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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Layer fusion configuration for image processing
 *
 * @method string getSwitch() Obtain <p>Capability configuration switch.</p><li>ON: Enable (default value);</li><li>OFF: Disable.</li>
 * @method void setSwitch(string $Switch) Set <p>Capability configuration switch.</p><li>ON: Enable (default value);</li><li>OFF: Disable.</li>
 * @method string getModel() Obtain <p>Compose model. Available values: compose-1.0-lite (default value, can be omitted).</p>
 * @method void setModel(string $Model) Set <p>Compose model. Available values: compose-1.0-lite (default value, can be omitted).</p>
 * @method ImageComposeCanvas getCanvas() Obtain <p>Canvas definition. Can be omitted: if omitted, the natural size of the layer with the minimum ZIndex (bottom layer) is used.</p>
 * @method void setCanvas(ImageComposeCanvas $Canvas) Set <p>Canvas definition. Can be omitted: if omitted, the natural size of the layer with the minimum ZIndex (bottom layer) is used.</p>
 * @method array getLayers() Obtain <p>Layer list, the unique source of layers. At least 1 layer and up to 20 layers.</p>
 * @method void setLayers(array $Layers) Set <p>Layer list, the unique source of layers. At least 1 layer and up to 20 layers.</p>
 */
class AiComposeConfig extends AbstractModel
{
    /**
     * @var string <p>Capability configuration switch.</p><li>ON: Enable (default value);</li><li>OFF: Disable.</li>
     */
    public $Switch;

    /**
     * @var string <p>Compose model. Available values: compose-1.0-lite (default value, can be omitted).</p>
     */
    public $Model;

    /**
     * @var ImageComposeCanvas <p>Canvas definition. Can be omitted: if omitted, the natural size of the layer with the minimum ZIndex (bottom layer) is used.</p>
     */
    public $Canvas;

    /**
     * @var array <p>Layer list, the unique source of layers. At least 1 layer and up to 20 layers.</p>
     */
    public $Layers;

    /**
     * @param string $Switch <p>Capability configuration switch.</p><li>ON: Enable (default value);</li><li>OFF: Disable.</li>
     * @param string $Model <p>Compose model. Available values: compose-1.0-lite (default value, can be omitted).</p>
     * @param ImageComposeCanvas $Canvas <p>Canvas definition. Can be omitted: if omitted, the natural size of the layer with the minimum ZIndex (bottom layer) is used.</p>
     * @param array $Layers <p>Layer list, the unique source of layers. At least 1 layer and up to 20 layers.</p>
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Canvas",$param) and $param["Canvas"] !== null) {
            $this->Canvas = new ImageComposeCanvas();
            $this->Canvas->deserialize($param["Canvas"]);
        }

        if (array_key_exists("Layers",$param) and $param["Layers"] !== null) {
            $this->Layers = [];
            foreach ($param["Layers"] as $key => $value){
                $obj = new ImageComposeLayer();
                $obj->deserialize($value);
                array_push($this->Layers, $obj);
            }
        }
    }
}
