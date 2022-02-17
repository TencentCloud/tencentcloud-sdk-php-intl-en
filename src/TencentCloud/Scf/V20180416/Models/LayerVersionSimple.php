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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specifies a layer version
 *
 * @method string getLayerName() Obtain Name of the layer to bind. Leave it blank if you want to unbind layers
 * @method void setLayerName(string $LayerName) Set Name of the layer to bind. Leave it blank if you want to unbind layers
 * @method integer getLayerVersion() Obtain Version ID f the layer to bind/unbind. If the layer version to unbind is the only layer version of the function version, enter `0`.
 * @method void setLayerVersion(integer $LayerVersion) Set Version ID f the layer to bind/unbind. If the layer version to unbind is the only layer version of the function version, enter `0`.
 */
class LayerVersionSimple extends AbstractModel
{
    /**
     * @var string Name of the layer to bind. Leave it blank if you want to unbind layers
     */
    public $LayerName;

    /**
     * @var integer Version ID f the layer to bind/unbind. If the layer version to unbind is the only layer version of the function version, enter `0`.
     */
    public $LayerVersion;

    /**
     * @param string $LayerName Name of the layer to bind. Leave it blank if you want to unbind layers
     * @param integer $LayerVersion Version ID f the layer to bind/unbind. If the layer version to unbind is the only layer version of the function version, enter `0`.
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
        if (array_key_exists("LayerName",$param) and $param["LayerName"] !== null) {
            $this->LayerName = $param["LayerName"];
        }

        if (array_key_exists("LayerVersion",$param) and $param["LayerVersion"] !== null) {
            $this->LayerVersion = $param["LayerVersion"];
        }
    }
}
