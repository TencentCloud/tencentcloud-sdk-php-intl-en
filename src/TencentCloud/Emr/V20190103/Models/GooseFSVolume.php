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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GooseFSVolume
 *
 * @method string getVolumeName() Obtain <p>Storage volume name.</p>
 * @method void setVolumeName(string $VolumeName) Set <p>Storage volume name.</p>
 * @method string getClusterId() Obtain <p>GooseFS instance ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>GooseFS instance ID.</p>
 * @method string getNamespace() Obtain <p>GooseFS namespace.</p>
 * @method void setNamespace(string $Namespace) Set <p>GooseFS namespace.</p>
 * @method string getSubPath() Obtain <p>Mount path in the namespace.</p>
 * @method void setSubPath(string $SubPath) Set <p>Mount path in the namespace.</p>
 * @method string getFuseVersion() Obtain <p>FuseVERSION description.</p>
 * @method void setFuseVersion(string $FuseVersion) Set <p>FuseVERSION description.</p>
 * @method string getClientVersion() Obtain <p>Client version description, for example, GOOSE-1.5.2.</p>
 * @method void setClientVersion(string $ClientVersion) Set <p>Client version description, for example, GOOSE-1.5.2.</p>
 * @method string getMountOptions() Obtain <p>Default mount parameter.</p>
 * @method void setMountOptions(string $MountOptions) Set <p>Default mount parameter.</p>
 * @method string getJvmOptions() Obtain <p>Default JVM parameter.</p>
 * @method void setJvmOptions(string $JvmOptions) Set <p>Default JVM parameter.</p>
 */
class GooseFSVolume extends AbstractModel
{
    /**
     * @var string <p>Storage volume name.</p>
     */
    public $VolumeName;

    /**
     * @var string <p>GooseFS instance ID.</p>
     */
    public $ClusterId;

    /**
     * @var string <p>GooseFS namespace.</p>
     */
    public $Namespace;

    /**
     * @var string <p>Mount path in the namespace.</p>
     */
    public $SubPath;

    /**
     * @var string <p>FuseVERSION description.</p>
     */
    public $FuseVersion;

    /**
     * @var string <p>Client version description, for example, GOOSE-1.5.2.</p>
     */
    public $ClientVersion;

    /**
     * @var string <p>Default mount parameter.</p>
     */
    public $MountOptions;

    /**
     * @var string <p>Default JVM parameter.</p>
     */
    public $JvmOptions;

    /**
     * @param string $VolumeName <p>Storage volume name.</p>
     * @param string $ClusterId <p>GooseFS instance ID.</p>
     * @param string $Namespace <p>GooseFS namespace.</p>
     * @param string $SubPath <p>Mount path in the namespace.</p>
     * @param string $FuseVersion <p>FuseVERSION description.</p>
     * @param string $ClientVersion <p>Client version description, for example, GOOSE-1.5.2.</p>
     * @param string $MountOptions <p>Default mount parameter.</p>
     * @param string $JvmOptions <p>Default JVM parameter.</p>
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
        if (array_key_exists("VolumeName",$param) and $param["VolumeName"] !== null) {
            $this->VolumeName = $param["VolumeName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("SubPath",$param) and $param["SubPath"] !== null) {
            $this->SubPath = $param["SubPath"];
        }

        if (array_key_exists("FuseVersion",$param) and $param["FuseVersion"] !== null) {
            $this->FuseVersion = $param["FuseVersion"];
        }

        if (array_key_exists("ClientVersion",$param) and $param["ClientVersion"] !== null) {
            $this->ClientVersion = $param["ClientVersion"];
        }

        if (array_key_exists("MountOptions",$param) and $param["MountOptions"] !== null) {
            $this->MountOptions = $param["MountOptions"];
        }

        if (array_key_exists("JvmOptions",$param) and $param["JvmOptions"] !== null) {
            $this->JvmOptions = $param["JvmOptions"];
        }
    }
}
