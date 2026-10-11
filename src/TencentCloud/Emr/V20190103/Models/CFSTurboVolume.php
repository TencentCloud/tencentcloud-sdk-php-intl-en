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
 * CFS Turbo storage volume.
 *
 * @method string getVolumeName() Obtain <p>Storage volume name.</p>
 * @method void setVolumeName(string $VolumeName) Set <p>Storage volume name.</p>
 * @method string getFileSystemId() Obtain <p>File system ID.</p>
 * @method void setFileSystemId(string $FileSystemId) Set <p>File system ID.</p>
 * @method string getFSId() Obtain <p>CFSId</p>
 * @method void setFSId(string $FSId) Set <p>CFSId</p>
 * @method string getHost() Obtain <p>Mount point IP address.</p>
 * @method void setHost(string $Host) Set <p>Mount point IP address.</p>
 * @method string getSubPath() Obtain <p>CFS subdirectory.</p>
 * @method void setSubPath(string $SubPath) Set <p>CFS subdirectory.</p>
 * @method string getRootDir() Obtain <p>Lustre mount root directory. The default value is /cfs.</p>
 * @method void setRootDir(string $RootDir) Set <p>Lustre mount root directory. The default value is /cfs.</p>
 */
class CFSTurboVolume extends AbstractModel
{
    /**
     * @var string <p>Storage volume name.</p>
     */
    public $VolumeName;

    /**
     * @var string <p>File system ID.</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>CFSId</p>
     */
    public $FSId;

    /**
     * @var string <p>Mount point IP address.</p>
     */
    public $Host;

    /**
     * @var string <p>CFS subdirectory.</p>
     */
    public $SubPath;

    /**
     * @var string <p>Lustre mount root directory. The default value is /cfs.</p>
     */
    public $RootDir;

    /**
     * @param string $VolumeName <p>Storage volume name.</p>
     * @param string $FileSystemId <p>File system ID.</p>
     * @param string $FSId <p>CFSId</p>
     * @param string $Host <p>Mount point IP address.</p>
     * @param string $SubPath <p>CFS subdirectory.</p>
     * @param string $RootDir <p>Lustre mount root directory. The default value is /cfs.</p>
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

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("FSId",$param) and $param["FSId"] !== null) {
            $this->FSId = $param["FSId"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("SubPath",$param) and $param["SubPath"] !== null) {
            $this->SubPath = $param["SubPath"];
        }

        if (array_key_exists("RootDir",$param) and $param["RootDir"] !== null) {
            $this->RootDir = $param["RootDir"];
        }
    }
}
