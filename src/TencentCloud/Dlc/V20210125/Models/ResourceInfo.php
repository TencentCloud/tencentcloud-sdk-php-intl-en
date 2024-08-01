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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResourceInfo
 *
 * @method string getAttributionType() Obtain Affiliated type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttributionType(string $AttributionType) Set Affiliated type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResourceType() Obtain Resource type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceType(string $ResourceType) Set Resource type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Engine name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Engine name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstance() Obtain If the resource type is spark-sql, the value is Name; if the resource type is spark-batch, the value is session app_name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstance(string $Instance) Set If the resource type is spark-sql, the value is Name; if the resource type is spark-batch, the value is session app_name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getFavor() Obtain Affinity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFavor(array $Favor) Set Affinity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Status
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ResourceInfo extends AbstractModel
{
    /**
     * @var string Affiliated type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttributionType;

    /**
     * @var string Resource type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceType;

    /**
     * @var string Engine name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string If the resource type is spark-sql, the value is Name; if the resource type is spark-batch, the value is session app_name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Instance;

    /**
     * @var array Affinity
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Favor;

    /**
     * @var integer Status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @param string $AttributionType Affiliated type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResourceType Resource type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Engine name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Instance If the resource type is spark-sql, the value is Name; if the resource type is spark-batch, the value is session app_name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Favor Affinity
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Status
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
        if (array_key_exists("AttributionType",$param) and $param["AttributionType"] !== null) {
            $this->AttributionType = $param["AttributionType"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = $param["Instance"];
        }

        if (array_key_exists("Favor",$param) and $param["Favor"] !== null) {
            $this->Favor = [];
            foreach ($param["Favor"] as $key => $value){
                $obj = new FavorInfo();
                $obj->deserialize($value);
                array_push($this->Favor, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
