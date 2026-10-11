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
 * ModifyBootScript request structure.
 *
 * @method string getInstanceId() Obtain EMR instance ID.
 * @method void setInstanceId(string $InstanceId) Set EMR instance ID.
 * @method string getBootType() Obtain Bootstrap script type. Valid values: resourceAfter, clusterAfter, and clusterBefore.
 * @method void setBootType(string $BootType) Set Bootstrap script type. Valid values: resourceAfter, clusterAfter, and clusterBefore.
 * @method array getPreExecutedFileSettings() Obtain Specific changes to the bootstrap script. If it is left empty, no bootstrap script is configured for the WhenRun timing.
 * @method void setPreExecutedFileSettings(array $PreExecutedFileSettings) Set Specific changes to the bootstrap script. If it is left empty, no bootstrap script is configured for the WhenRun timing.
 */
class ModifyBootScriptRequest extends AbstractModel
{
    /**
     * @var string EMR instance ID.
     */
    public $InstanceId;

    /**
     * @var string Bootstrap script type. Valid values: resourceAfter, clusterAfter, and clusterBefore.
     */
    public $BootType;

    /**
     * @var array Specific changes to the bootstrap script. If it is left empty, no bootstrap script is configured for the WhenRun timing.
     */
    public $PreExecutedFileSettings;

    /**
     * @param string $InstanceId EMR instance ID.
     * @param string $BootType Bootstrap script type. Valid values: resourceAfter, clusterAfter, and clusterBefore.
     * @param array $PreExecutedFileSettings Specific changes to the bootstrap script. If it is left empty, no bootstrap script is configured for the WhenRun timing.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("BootType",$param) and $param["BootType"] !== null) {
            $this->BootType = $param["BootType"];
        }

        if (array_key_exists("PreExecutedFileSettings",$param) and $param["PreExecutedFileSettings"] !== null) {
            $this->PreExecutedFileSettings = [];
            foreach ($param["PreExecutedFileSettings"] as $key => $value){
                $obj = new PreExecuteFileSetting();
                $obj->deserialize($value);
                array_push($this->PreExecutedFileSettings, $obj);
            }
        }
    }
}
