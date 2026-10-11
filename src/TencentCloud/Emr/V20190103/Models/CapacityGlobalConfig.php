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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Global configuration of the capacity scheduler in resource scheduling.
 *
 * @method boolean getEnableLabel() Obtain Whether label-based scheduling is enabled.
 * @method void setEnableLabel(boolean $EnableLabel) Set Whether label-based scheduling is enabled.
 * @method string getLabelDir() Obtain Path where the label information is stored if label-based scheduling is enabled.
 * @method void setLabelDir(string $LabelDir) Set Path where the label information is stored if label-based scheduling is enabled.
 * @method boolean getQueueMappingOverride() Obtain Whether to overwrite the user-specified queue. true indicates overwriting.
 * @method void setQueueMappingOverride(boolean $QueueMappingOverride) Set Whether to overwrite the user-specified queue. true indicates overwriting.
 * @method array getDefaultSettings() Obtain Advanced settings.
 * @method void setDefaultSettings(array $DefaultSettings) Set Advanced settings.
 */
class CapacityGlobalConfig extends AbstractModel
{
    /**
     * @var boolean Whether label-based scheduling is enabled.
     */
    public $EnableLabel;

    /**
     * @var string Path where the label information is stored if label-based scheduling is enabled.
     */
    public $LabelDir;

    /**
     * @var boolean Whether to overwrite the user-specified queue. true indicates overwriting.
     */
    public $QueueMappingOverride;

    /**
     * @var array Advanced settings.
     */
    public $DefaultSettings;

    /**
     * @param boolean $EnableLabel Whether label-based scheduling is enabled.
     * @param string $LabelDir Path where the label information is stored if label-based scheduling is enabled.
     * @param boolean $QueueMappingOverride Whether to overwrite the user-specified queue. true indicates overwriting.
     * @param array $DefaultSettings Advanced settings.
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
        if (array_key_exists("EnableLabel",$param) and $param["EnableLabel"] !== null) {
            $this->EnableLabel = $param["EnableLabel"];
        }

        if (array_key_exists("LabelDir",$param) and $param["LabelDir"] !== null) {
            $this->LabelDir = $param["LabelDir"];
        }

        if (array_key_exists("QueueMappingOverride",$param) and $param["QueueMappingOverride"] !== null) {
            $this->QueueMappingOverride = $param["QueueMappingOverride"];
        }

        if (array_key_exists("DefaultSettings",$param) and $param["DefaultSettings"] !== null) {
            $this->DefaultSettings = [];
            foreach ($param["DefaultSettings"] as $key => $value){
                $obj = new DefaultSetting();
                $obj->deserialize($value);
                array_push($this->DefaultSettings, $obj);
            }
        }
    }
}
