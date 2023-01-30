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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Repository images ignored by the vulnerability scan
 *
 * @method integer getID() Obtain Record ID
 * @method void setID(integer $ID) Set Record ID
 * @method string getRegistryName() Obtain Repository name
 * @method void setRegistryName(string $RegistryName) Set Repository name
 * @method string getImageVersion() Obtain Image tag
 * @method void setImageVersion(string $ImageVersion) Set Image tag
 * @method string getRegistryPath() Obtain Repository address
 * @method void setRegistryPath(string $RegistryPath) Set Repository address
 * @method string getImageID() Obtain Image ID
 * @method void setImageID(string $ImageID) Set Image ID
 * @method string getPocID() Obtain POC ID
 * @method void setPocID(string $PocID) Set POC ID
 */
class VulIgnoreRegistryImage extends AbstractModel
{
    /**
     * @var integer Record ID
     */
    public $ID;

    /**
     * @var string Repository name
     */
    public $RegistryName;

    /**
     * @var string Image tag
     */
    public $ImageVersion;

    /**
     * @var string Repository address
     */
    public $RegistryPath;

    /**
     * @var string Image ID
     */
    public $ImageID;

    /**
     * @var string POC ID
     */
    public $PocID;

    /**
     * @param integer $ID Record ID
     * @param string $RegistryName Repository name
     * @param string $ImageVersion Image tag
     * @param string $RegistryPath Repository address
     * @param string $ImageID Image ID
     * @param string $PocID POC ID
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("RegistryName",$param) and $param["RegistryName"] !== null) {
            $this->RegistryName = $param["RegistryName"];
        }

        if (array_key_exists("ImageVersion",$param) and $param["ImageVersion"] !== null) {
            $this->ImageVersion = $param["ImageVersion"];
        }

        if (array_key_exists("RegistryPath",$param) and $param["RegistryPath"] !== null) {
            $this->RegistryPath = $param["RegistryPath"];
        }

        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
        }

        if (array_key_exists("PocID",$param) and $param["PocID"] !== null) {
            $this->PocID = $param["PocID"];
        }
    }
}
