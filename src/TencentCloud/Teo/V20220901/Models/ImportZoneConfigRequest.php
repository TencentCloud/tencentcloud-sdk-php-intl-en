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
 * ImportZoneConfig request structure.
 *
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method string getContent() Obtain <p>Configuration content to be imported. Use JSON format and encode by UTF-8. You can obtain the configuration content through the site configuration export interface (ExportZoneConfig). You can individually import "Site Acceleration - Global Acceleration Configuration" or "Site Acceleration - Rule Engine". Just pass in the corresponding fields. For specific details, see the example below.<br>Note: AccelerationDomain (acceleration domain name configuration) and Origin (origin configuration) exported by ExportZoneConfig are temporary not supported for import through this interface. If the Content contains the above configuration content, it will cause import failure.</p>
 * @method void setContent(string $Content) Set <p>Configuration content to be imported. Use JSON format and encode by UTF-8. You can obtain the configuration content through the site configuration export interface (ExportZoneConfig). You can individually import "Site Acceleration - Global Acceleration Configuration" or "Site Acceleration - Rule Engine". Just pass in the corresponding fields. For specific details, see the example below.<br>Note: AccelerationDomain (acceleration domain name configuration) and Origin (origin configuration) exported by ExportZoneConfig are temporary not supported for import through this interface. If the Content contains the above configuration content, it will cause import failure.</p>
 */
class ImportZoneConfigRequest extends AbstractModel
{
    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Configuration content to be imported. Use JSON format and encode by UTF-8. You can obtain the configuration content through the site configuration export interface (ExportZoneConfig). You can individually import "Site Acceleration - Global Acceleration Configuration" or "Site Acceleration - Rule Engine". Just pass in the corresponding fields. For specific details, see the example below.<br>Note: AccelerationDomain (acceleration domain name configuration) and Origin (origin configuration) exported by ExportZoneConfig are temporary not supported for import through this interface. If the Content contains the above configuration content, it will cause import failure.</p>
     */
    public $Content;

    /**
     * @param string $ZoneId <p>Site ID.</p>
     * @param string $Content <p>Configuration content to be imported. Use JSON format and encode by UTF-8. You can obtain the configuration content through the site configuration export interface (ExportZoneConfig). You can individually import "Site Acceleration - Global Acceleration Configuration" or "Site Acceleration - Rule Engine". Just pass in the corresponding fields. For specific details, see the example below.<br>Note: AccelerationDomain (acceleration domain name configuration) and Origin (origin configuration) exported by ExportZoneConfig are temporary not supported for import through this interface. If the Content contains the above configuration content, it will cause import failure.</p>
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

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
