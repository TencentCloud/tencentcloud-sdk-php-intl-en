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
 * CFS volume.
 *
 * @method string getVolumeName() Obtain Storage volume name.
 * @method void setVolumeName(string $VolumeName) Set Storage volume name.
 * @method string getFileSystemId() Obtain File system ID.
 * @method void setFileSystemId(string $FileSystemId) Set File system ID.
 * @method string getFSId() Obtain CFSId
 * @method void setFSId(string $FSId) Set CFSId
 * @method string getHost() Obtain Mount point IP address.
 * @method void setHost(string $Host) Set Mount point IP address.
 * @method string getSubPath() Obtain CFS subdirectory.
 * @method void setSubPath(string $SubPath) Set CFS subdirectory.
 */
class CFSVolume extends AbstractModel
{
    /**
     * @var string Storage volume name.
     */
    public $VolumeName;

    /**
     * @var string File system ID.
     */
    public $FileSystemId;

    /**
     * @var string CFSId
     */
    public $FSId;

    /**
     * @var string Mount point IP address.
     */
    public $Host;

    /**
     * @var string CFS subdirectory.
     */
    public $SubPath;

    /**
     * @param string $VolumeName Storage volume name.
     * @param string $FileSystemId File system ID.
     * @param string $FSId CFSId
     * @param string $Host Mount point IP address.
     * @param string $SubPath CFS subdirectory.
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
    }
}
