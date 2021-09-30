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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image software information.
 *
 * @method string getName() Obtain Software name.
 * @method void setName(string $Name) Set Software name.
 * @method string getVersion() Obtain Software version.
 * @method void setVersion(string $Version) Set Software version.
 * @method string getImageUrl() Obtain Software picture URL.
 * @method void setImageUrl(string $ImageUrl) Set Software picture URL.
 * @method string getInstallDir() Obtain Software installation directory.
 * @method void setInstallDir(string $InstallDir) Set Software installation directory.
 * @method array getDetailSet() Obtain List of software details.
 * @method void setDetailSet(array $DetailSet) Set List of software details.
 */
class Software extends AbstractModel
{
    /**
     * @var string Software name.
     */
    public $Name;

    /**
     * @var string Software version.
     */
    public $Version;

    /**
     * @var string Software picture URL.
     */
    public $ImageUrl;

    /**
     * @var string Software installation directory.
     */
    public $InstallDir;

    /**
     * @var array List of software details.
     */
    public $DetailSet;

    /**
     * @param string $Name Software name.
     * @param string $Version Software version.
     * @param string $ImageUrl Software picture URL.
     * @param string $InstallDir Software installation directory.
     * @param array $DetailSet List of software details.
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

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("InstallDir",$param) and $param["InstallDir"] !== null) {
            $this->InstallDir = $param["InstallDir"];
        }

        if (array_key_exists("DetailSet",$param) and $param["DetailSet"] !== null) {
            $this->DetailSet = [];
            foreach ($param["DetailSet"] as $key => $value){
                $obj = new SoftwareDetail();
                $obj->deserialize($value);
                array_push($this->DetailSet, $obj);
            }
        }
    }
}
