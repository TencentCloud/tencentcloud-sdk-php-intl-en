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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image blurring parameters.
 *
 * @method string getType() Obtain The blur type. Valid values:
<li>`Gaussian`</li>
 * @method void setType(string $Type) Set The blur type. Valid values:
<li>`Gaussian`</li>
 * @method integer getRadius() Obtain The radius of the blur. Value range: 1-50. This parameter is valid if `Type` is `Gaussian`.
 * @method void setRadius(integer $Radius) Set The radius of the blur. Value range: 1-50. This parameter is valid if `Type` is `Gaussian`.
 * @method integer getSigma() Obtain The standard deviation of the Gaussian distribution, which must be greater than 0. This parameter is valid if `Type` is `Gaussian`.
 * @method void setSigma(integer $Sigma) Set The standard deviation of the Gaussian distribution, which must be greater than 0. This parameter is valid if `Type` is `Gaussian`.
 */
class ImageBlur extends AbstractModel
{
    /**
     * @var string The blur type. Valid values:
<li>`Gaussian`</li>
     */
    public $Type;

    /**
     * @var integer The radius of the blur. Value range: 1-50. This parameter is valid if `Type` is `Gaussian`.
     */
    public $Radius;

    /**
     * @var integer The standard deviation of the Gaussian distribution, which must be greater than 0. This parameter is valid if `Type` is `Gaussian`.
     */
    public $Sigma;

    /**
     * @param string $Type The blur type. Valid values:
<li>`Gaussian`</li>
     * @param integer $Radius The radius of the blur. Value range: 1-50. This parameter is valid if `Type` is `Gaussian`.
     * @param integer $Sigma The standard deviation of the Gaussian distribution, which must be greater than 0. This parameter is valid if `Type` is `Gaussian`.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Radius",$param) and $param["Radius"] !== null) {
            $this->Radius = $param["Radius"];
        }

        if (array_key_exists("Sigma",$param) and $param["Sigma"] !== null) {
            $this->Sigma = $param["Sigma"];
        }
    }
}
