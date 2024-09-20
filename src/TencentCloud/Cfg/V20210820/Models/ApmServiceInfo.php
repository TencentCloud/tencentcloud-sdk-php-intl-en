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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application information on Application Performance Monitoring
 *
 * @method string getInstanceId() Obtain Business ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Business ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getServiceNameList() Obtain Application name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceNameList(array $ServiceNameList) Set Application name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRegionId() Obtain Region ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionId(integer $RegionId) Set Region ID

Note: This field may return null, indicating that no valid values can be obtained.
 */
class ApmServiceInfo extends AbstractModel
{
    /**
     * @var string Business ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var array Application name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceNameList;

    /**
     * @var integer Region ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionId;

    /**
     * @param string $InstanceId Business ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ServiceNameList Application name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RegionId Region ID

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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ServiceNameList",$param) and $param["ServiceNameList"] !== null) {
            $this->ServiceNameList = $param["ServiceNameList"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
