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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Policy type information
 *
 * @method string getId() Obtain Namespace ID
 * @method void setId(string $Id) Set Namespace ID
 * @method string getName() Obtain Namespace name
 * @method void setName(string $Name) Set Namespace name
 * @method string getMonitorType() Obtain Monitoring type
 * @method void setMonitorType(string $MonitorType) Set Monitoring type
 * @method array getDimensions() Obtain Dimension information
 * @method void setDimensions(array $Dimensions) Set Dimension information
 */
class CommonNamespaceNew extends AbstractModel
{
    /**
     * @var string Namespace ID
     */
    public $Id;

    /**
     * @var string Namespace name
     */
    public $Name;

    /**
     * @var string Monitoring type
     */
    public $MonitorType;

    /**
     * @var array Dimension information
     */
    public $Dimensions;

    /**
     * @param string $Id Namespace ID
     * @param string $Name Namespace name
     * @param string $MonitorType Monitoring type
     * @param array $Dimensions Dimension information
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = [];
            foreach ($param["Dimensions"] as $key => $value){
                $obj = new DimensionNew();
                $obj->deserialize($value);
                array_push($this->Dimensions, $obj);
            }
        }
    }
}
