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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportZoneConfig request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method array getTypes() Obtain Export the type list of configuration items. Leave it blank to export all types of configurations. Currently supported values include: <li>L7AccelerationConfig: means exporting the Layer-7 acceleration configuration, corresponding to the console "Site Acceleration - Global Acceleration Configuration" and "Site Acceleration - Rule Engine".</li><li>WebSecurity: refers to exporting the Web protection configuration.</li> Note: Types supported for future export will increase with iterations. When exporting all types, pay attention to export file size. It is recommended to specify the configuration types to be exported to control the request and response packet payload size.
 * @method void setTypes(array $Types) Set Export the type list of configuration items. Leave it blank to export all types of configurations. Currently supported values include: <li>L7AccelerationConfig: means exporting the Layer-7 acceleration configuration, corresponding to the console "Site Acceleration - Global Acceleration Configuration" and "Site Acceleration - Rule Engine".</li><li>WebSecurity: refers to exporting the Web protection configuration.</li> Note: Types supported for future export will increase with iterations. When exporting all types, pay attention to export file size. It is recommended to specify the configuration types to be exported to control the request and response packet payload size.
 */
class ExportZoneConfigRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var array Export the type list of configuration items. Leave it blank to export all types of configurations. Currently supported values include: <li>L7AccelerationConfig: means exporting the Layer-7 acceleration configuration, corresponding to the console "Site Acceleration - Global Acceleration Configuration" and "Site Acceleration - Rule Engine".</li><li>WebSecurity: refers to exporting the Web protection configuration.</li> Note: Types supported for future export will increase with iterations. When exporting all types, pay attention to export file size. It is recommended to specify the configuration types to be exported to control the request and response packet payload size.
     */
    public $Types;

    /**
     * @param string $ZoneId Zone ID.
     * @param array $Types Export the type list of configuration items. Leave it blank to export all types of configurations. Currently supported values include: <li>L7AccelerationConfig: means exporting the Layer-7 acceleration configuration, corresponding to the console "Site Acceleration - Global Acceleration Configuration" and "Site Acceleration - Rule Engine".</li><li>WebSecurity: refers to exporting the Web protection configuration.</li> Note: Types supported for future export will increase with iterations. When exporting all types, pay attention to export file size. It is recommended to specify the configuration types to be exported to control the request and response packet payload size.
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
