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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Update the progress of asynchronous task.
 *
 * @method string getResourceType() Obtain Resource type.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setResourceType(string $ResourceType) Set Resource type.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getUpdateSyncProgressRegions() Obtain Region result list.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateSyncProgressRegions(array $UpdateSyncProgressRegions) Set Region result list.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Asynchronous update progress status: 0, pending, 1 processed, 3 processing.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Asynchronous update progress status: 0, pending, 1 processed, 3 processing.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class UpdateSyncProgress extends AbstractModel
{
    /**
     * @var string Resource type.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceType;

    /**
     * @var array Region result list.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateSyncProgressRegions;

    /**
     * @var integer Asynchronous update progress status: 0, pending, 1 processed, 3 processing.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @param string $ResourceType Resource type.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $UpdateSyncProgressRegions Region result list.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Asynchronous update progress status: 0, pending, 1 processed, 3 processing.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("UpdateSyncProgressRegions",$param) and $param["UpdateSyncProgressRegions"] !== null) {
            $this->UpdateSyncProgressRegions = [];
            foreach ($param["UpdateSyncProgressRegions"] as $key => $value){
                $obj = new UpdateSyncProgressRegion();
                $obj->deserialize($value);
                array_push($this->UpdateSyncProgressRegions, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
