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
 * Global configurations of the capacity scheduler under Resource Scheduling.
 *
 * @method boolean getEnableLabel() Obtain Whether label-based scheduling is enabled.
 * @method void setEnableLabel(boolean $EnableLabel) Set Whether label-based scheduling is enabled.
 * @method string getLabelDir() Obtain Path for tag information storage if label-based scheduling is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLabelDir(string $LabelDir) Set Path for tag information storage if label-based scheduling is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getQueueMappingOverride() Obtain Whether to overwrite the user-specified queue, wherein true indicates overwrite.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQueueMappingOverride(boolean $QueueMappingOverride) Set Whether to overwrite the user-specified queue, wherein true indicates overwrite.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDefaultSettings() Obtain Advanced settings.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefaultSettings(array $DefaultSettings) Set Advanced settings.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CapacityGlobalConfig extends AbstractModel
{
    /**
     * @var boolean Whether label-based scheduling is enabled.
     */
    public $EnableLabel;

    /**
     * @var string Path for tag information storage if label-based scheduling is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LabelDir;

    /**
     * @var boolean Whether to overwrite the user-specified queue, wherein true indicates overwrite.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QueueMappingOverride;

    /**
     * @var array Advanced settings.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefaultSettings;

    /**
     * @param boolean $EnableLabel Whether label-based scheduling is enabled.
     * @param string $LabelDir Path for tag information storage if label-based scheduling is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $QueueMappingOverride Whether to overwrite the user-specified queue, wherein true indicates overwrite.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DefaultSettings Advanced settings.
Note: This field may return null, indicating that no valid values can be obtained.
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
