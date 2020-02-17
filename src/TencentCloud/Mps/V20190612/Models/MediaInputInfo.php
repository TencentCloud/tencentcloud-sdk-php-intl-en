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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getType() Obtain Video processing object type. Only COS is supported currently.
 * @method void setType(string $Type) Set Video processing object type. Only COS is supported currently.
 * @method CosInputInfo getCosInputInfo() Obtain This parameter is required and valid when `Type` is `COS`, indicating the information of a COS object for video processing.
 * @method void setCosInputInfo(CosInputInfo $CosInputInfo) Set This parameter is required and valid when `Type` is `COS`, indicating the information of a COS object for video processing.
 */

/**
 *Information of a video processing input object.
 */
class MediaInputInfo extends AbstractModel
{
    /**
     * @var string Video processing object type. Only COS is supported currently.
     */
    public $Type;

    /**
     * @var CosInputInfo This parameter is required and valid when `Type` is `COS`, indicating the information of a COS object for video processing.
     */
    public $CosInputInfo;
    /**
     * @param string $Type Video processing object type. Only COS is supported currently.
     * @param CosInputInfo $CosInputInfo This parameter is required and valid when `Type` is `COS`, indicating the information of a COS object for video processing.
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

        if (array_key_exists("CosInputInfo",$param) and $param["CosInputInfo"] !== null) {
            $this->CosInputInfo = new CosInputInfo();
            $this->CosInputInfo->deserialize($param["CosInputInfo"]);
        }
    }
}
