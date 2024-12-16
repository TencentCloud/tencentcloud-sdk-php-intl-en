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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportZoneConfig request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method array getTypes() Obtain It indicates exporting the type list of configuration . If it is left blank, all types of configurations will be exported. Currently supported valid values:<li>L7AccelerationConfig: It indicates exporting the Layer-7 acceleration configuration, corresponding to the console's "Site Acceleration - Global Acceleration Configuration" and "Site Acceleration - Rule Engine".</li>
Note: The types that will be supported for export in the future will increase with iterations. When exporting all types, pay attention to the export file size. It is recommended to specify the configuration types to be exported to control the request and response packet payload size.
 * @method void setTypes(array $Types) Set It indicates exporting the type list of configuration . If it is left blank, all types of configurations will be exported. Currently supported valid values:<li>L7AccelerationConfig: It indicates exporting the Layer-7 acceleration configuration, corresponding to the console's "Site Acceleration - Global Acceleration Configuration" and "Site Acceleration - Rule Engine".</li>
Note: The types that will be supported for export in the future will increase with iterations. When exporting all types, pay attention to the export file size. It is recommended to specify the configuration types to be exported to control the request and response packet payload size.
 */
class ExportZoneConfigRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var array It indicates exporting the type list of configuration . If it is left blank, all types of configurations will be exported. Currently supported valid values:<li>L7AccelerationConfig: It indicates exporting the Layer-7 acceleration configuration, corresponding to the console's "Site Acceleration - Global Acceleration Configuration" and "Site Acceleration - Rule Engine".</li>
Note: The types that will be supported for export in the future will increase with iterations. When exporting all types, pay attention to the export file size. It is recommended to specify the configuration types to be exported to control the request and response packet payload size.
     */
    public $Types;

    /**
     * @param string $ZoneId Zone ID.
     * @param array $Types It indicates exporting the type list of configuration . If it is left blank, all types of configurations will be exported. Currently supported valid values:<li>L7AccelerationConfig: It indicates exporting the Layer-7 acceleration configuration, corresponding to the console's "Site Acceleration - Global Acceleration Configuration" and "Site Acceleration - Rule Engine".</li>
Note: The types that will be supported for export in the future will increase with iterations. When exporting all types, pay attention to the export file size. It is recommended to specify the configuration types to be exported to control the request and response packet payload size.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = $param["Types"];
        }
    }
}
