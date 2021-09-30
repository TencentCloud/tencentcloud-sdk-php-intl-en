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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image reset information
 *
 * @method Blueprint getBlueprintInfo() Obtain Image details
 * @method void setBlueprintInfo(Blueprint $BlueprintInfo) Set Image details
 * @method boolean getIsResettable() Obtain Whether the image can be reset as the target image
 * @method void setIsResettable(boolean $IsResettable) Set Whether the image can be reset as the target image
 * @method string getNonResettableMessage() Obtain Non-Resettable flag. If the image is resettable, it will be ""
 * @method void setNonResettableMessage(string $NonResettableMessage) Set Non-Resettable flag. If the image is resettable, it will be ""
 */
class ResetInstanceBlueprint extends AbstractModel
{
    /**
     * @var Blueprint Image details
     */
    public $BlueprintInfo;

    /**
     * @var boolean Whether the image can be reset as the target image
     */
    public $IsResettable;

    /**
     * @var string Non-Resettable flag. If the image is resettable, it will be ""
     */
    public $NonResettableMessage;

    /**
     * @param Blueprint $BlueprintInfo Image details
     * @param boolean $IsResettable Whether the image can be reset as the target image
     * @param string $NonResettableMessage Non-Resettable flag. If the image is resettable, it will be ""
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
        if (array_key_exists("BlueprintInfo",$param) and $param["BlueprintInfo"] !== null) {
            $this->BlueprintInfo = new Blueprint();
            $this->BlueprintInfo->deserialize($param["BlueprintInfo"]);
        }

        if (array_key_exists("IsResettable",$param) and $param["IsResettable"] !== null) {
            $this->IsResettable = $param["IsResettable"];
        }

        if (array_key_exists("NonResettableMessage",$param) and $param["NonResettableMessage"] !== null) {
            $this->NonResettableMessage = $param["NonResettableMessage"];
        }
    }
}
