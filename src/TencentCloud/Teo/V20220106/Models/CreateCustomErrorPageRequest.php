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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCustomErrorPage request structure.
 *
 * @method string getZoneId() Obtain ID of the site
 * @method void setZoneId(string $ZoneId) Set ID of the site
 * @method string getEntity() Obtain Subdomain name of the site
 * @method void setEntity(string $Entity) Set Subdomain name of the site
 * @method string getName() Obtain Name of the file specified to be returned
 * @method void setName(string $Name) Set Name of the file specified to be returned
 * @method string getContent() Obtain Content of the custom page
 * @method void setContent(string $Content) Set Content of the custom page
 */
class CreateCustomErrorPageRequest extends AbstractModel
{
    /**
     * @var string ID of the site
     */
    public $ZoneId;

    /**
     * @var string Subdomain name of the site
     */
    public $Entity;

    /**
     * @var string Name of the file specified to be returned
     */
    public $Name;

    /**
     * @var string Content of the custom page
     */
    public $Content;

    /**
     * @param string $ZoneId ID of the site
     * @param string $Entity Subdomain name of the site
     * @param string $Name Name of the file specified to be returned
     * @param string $Content Content of the custom page
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

        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
