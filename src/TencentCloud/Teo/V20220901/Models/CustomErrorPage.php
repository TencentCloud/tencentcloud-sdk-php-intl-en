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
 * Custom error code page structure.
 *
 * @method string getPageId() Obtain Custom error page ID.
 * @method void setPageId(string $PageId) Set Custom error page ID.
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getName() Obtain Custom error page name.
 * @method void setName(string $Name) Set Custom error page name.
 * @method string getContentType() Obtain Custom error page type.
 * @method void setContentType(string $ContentType) Set Custom error page type.
 * @method string getDescription() Obtain Custom error page description.
 * @method void setDescription(string $Description) Set Custom error page description.
 * @method string getContent() Obtain Custom error page content.
 * @method void setContent(string $Content) Set Custom error page content.
 * @method array getReferences() Obtain Custom error page reference.
 * @method void setReferences(array $References) Set Custom error page reference.
 */
class CustomErrorPage extends AbstractModel
{
    /**
     * @var string Custom error page ID.
     */
    public $PageId;

    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Custom error page name.
     */
    public $Name;

    /**
     * @var string Custom error page type.
     */
    public $ContentType;

    /**
     * @var string Custom error page description.
     */
    public $Description;

    /**
     * @var string Custom error page content.
     */
    public $Content;

    /**
     * @var array Custom error page reference.
     */
    public $References;

    /**
     * @param string $PageId Custom error page ID.
     * @param string $ZoneId Zone ID.
     * @param string $Name Custom error page name.
     * @param string $ContentType Custom error page type.
     * @param string $Description Custom error page description.
     * @param string $Content Custom error page content.
     * @param array $References Custom error page reference.
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
        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = [];
            foreach ($param["References"] as $key => $value){
                $obj = new ErrorPageReference();
                $obj->deserialize($value);
                array_push($this->References, $obj);
            }
        }
    }
}
