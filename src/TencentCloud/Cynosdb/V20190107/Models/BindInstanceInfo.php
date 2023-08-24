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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the instance bound to the resource pack
 *
 * @method string getInstanceId() Obtain ID of the bound cluster
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set ID of the bound cluster
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceRegion() Obtain Region of the instance bound Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceRegion(string $InstanceRegion) Set Region of the instance bound Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceType() Obtain Type of the instance bound Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceType(string $InstanceType) Set Type of the instance bound Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getExtendIds() Obtain ID of the instance in the bound cluster
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setExtendIds(array $ExtendIds) Set ID of the instance in the bound cluster
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 */
class BindInstanceInfo extends AbstractModel
{
    /**
     * @var string ID of the bound cluster
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Region of the instance bound Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceRegion;

    /**
     * @var string Type of the instance bound Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceType;

    /**
     * @var array ID of the instance in the bound cluster
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $ExtendIds;

    /**
     * @param string $InstanceId ID of the bound cluster
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceRegion Region of the instance bound Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceType Type of the instance bound Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ExtendIds ID of the instance in the bound cluster
Note: u200dThis field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            $this->InstanceRegion = $param["InstanceRegion"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ExtendIds",$param) and $param["ExtendIds"] !== null) {
            $this->ExtendIds = $param["ExtendIds"];
        }
    }
}
