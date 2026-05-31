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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LibraDB version information
 *
 * @method string getVersion() Obtain Version
 * @method void setVersion(string $Version) Set Version
 * @method string getTag() Obtain Version tag
 * @method void setTag(string $Tag) Set Version tag
 * @method boolean getHasPermission() Obtain Can be used this version
 * @method void setHasPermission(boolean $HasPermission) Set Can be used this version
 */
class LibraDBVersion extends AbstractModel
{
    /**
     * @var string Version
     */
    public $Version;

    /**
     * @var string Version tag
     */
    public $Tag;

    /**
     * @var boolean Can be used this version
     */
    public $HasPermission;

    /**
     * @param string $Version Version
     * @param string $Tag Version tag
     * @param boolean $HasPermission Can be used this version
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("HasPermission",$param) and $param["HasPermission"] !== null) {
            $this->HasPermission = $param["HasPermission"];
        }
    }
}
