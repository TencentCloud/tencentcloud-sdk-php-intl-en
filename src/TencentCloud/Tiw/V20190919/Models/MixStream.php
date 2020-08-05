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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Stream mixing configuration
 *
 * @method boolean getEnabled() Obtain Whether stream mixing is enabled
 * @method void setEnabled(boolean $Enabled) Set Whether stream mixing is enabled
 * @method boolean getDisableAudio() Obtain Whether audio stream mixing is disabled
 * @method void setDisableAudio(boolean $DisableAudio) Set Whether audio stream mixing is disabled
 * @method integer getModelId() Obtain ID of the embedded mixed stream layout template. Valid values: 1 and 2. For more information on the differences of both values, see the sample embedded mixed stream layout template.
If the Custom field is not specified, ModelId is required.
 * @method void setModelId(integer $ModelId) Set ID of the embedded mixed stream layout template. Valid values: 1 and 2. For more information on the differences of both values, see the sample embedded mixed stream layout template.
If the Custom field is not specified, ModelId is required.
 * @method string getTeacherId() Obtain ID of a teacher account
This field is valid only when ModelId is specified.
If you specify TeacherID for a user, the user's video stream will be displayed in the first image of the embedded template.
 * @method void setTeacherId(string $TeacherId) Set ID of a teacher account
This field is valid only when ModelId is specified.
If you specify TeacherID for a user, the user's video stream will be displayed in the first image of the embedded template.
 * @method CustomLayout getCustom() Obtain Custom mixed stream layout parameter
If this parameter is available, the ModelId and TeacherId fields will be ignored.
 * @method void setCustom(CustomLayout $Custom) Set Custom mixed stream layout parameter
If this parameter is available, the ModelId and TeacherId fields will be ignored.
 */
class MixStream extends AbstractModel
{
    /**
     * @var boolean Whether stream mixing is enabled
     */
    public $Enabled;

    /**
     * @var boolean Whether audio stream mixing is disabled
     */
    public $DisableAudio;

    /**
     * @var integer ID of the embedded mixed stream layout template. Valid values: 1 and 2. For more information on the differences of both values, see the sample embedded mixed stream layout template.
If the Custom field is not specified, ModelId is required.
     */
    public $ModelId;

    /**
     * @var string ID of a teacher account
This field is valid only when ModelId is specified.
If you specify TeacherID for a user, the user's video stream will be displayed in the first image of the embedded template.
     */
    public $TeacherId;

    /**
     * @var CustomLayout Custom mixed stream layout parameter
If this parameter is available, the ModelId and TeacherId fields will be ignored.
     */
    public $Custom;

    /**
     * @param boolean $Enabled Whether stream mixing is enabled
     * @param boolean $DisableAudio Whether audio stream mixing is disabled
     * @param integer $ModelId ID of the embedded mixed stream layout template. Valid values: 1 and 2. For more information on the differences of both values, see the sample embedded mixed stream layout template.
If the Custom field is not specified, ModelId is required.
     * @param string $TeacherId ID of a teacher account
This field is valid only when ModelId is specified.
If you specify TeacherID for a user, the user's video stream will be displayed in the first image of the embedded template.
     * @param CustomLayout $Custom Custom mixed stream layout parameter
If this parameter is available, the ModelId and TeacherId fields will be ignored.
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("DisableAudio",$param) and $param["DisableAudio"] !== null) {
            $this->DisableAudio = $param["DisableAudio"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("TeacherId",$param) and $param["TeacherId"] !== null) {
            $this->TeacherId = $param["TeacherId"];
        }

        if (array_key_exists("Custom",$param) and $param["Custom"] !== null) {
            $this->Custom = new CustomLayout();
            $this->Custom->deserialize($param["Custom"]);
        }
    }
}
