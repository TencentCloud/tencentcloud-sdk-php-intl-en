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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of web application plugin for asset management
 *
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getDesc() Obtain Description
 * @method void setDesc(string $Desc) Set Description
 * @method string getVersion() Obtain Version
 * @method void setVersion(string $Version) Set Version
 * @method string getLink() Obtain Link
 * @method void setLink(string $Link) Set Link
 */
class AssetWebAppPluginInfo extends AbstractModel
{
    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Description
     */
    public $Desc;

    /**
     * @var string Version
     */
    public $Version;

    /**
     * @var string Link
     */
    public $Link;

    /**
     * @param string $Name Name
     * @param string $Desc Description
     * @param string $Version Version
     * @param string $Link Link
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Link",$param) and $param["Link"] !== null) {
            $this->Link = $param["Link"];
        }
    }
}
